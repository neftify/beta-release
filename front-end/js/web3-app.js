var app = new Vue({
  el: "#app",
  data: {
    state: "",
    ethAddress: "",
    JWT: "",
    config: { headers: { "Content-Type": "application/x-www-form-urlencoded" } }
  },
  methods: {
    logInOut: async function() {
      await onConnectLoadWeb3Modal();

      if (web3ModalProv) {
        window.web3 = web3ModalProv;
        try {
          this.login();
        } catch (error) {
          console.log(error);
          this.state = 'needLogInToMetaMask';
          return;
        }
      }
      else {
        this.state = 'needLogInToMetaMask';
        return;
      }
    },
    login: async function() {
      var vm = this;
      let accountsOnEnable = await ethereum.request({method: 'eth_requestAccounts'});
      let address = accountsOnEnable[0];
      if (address == null) {
        vm.state = "needLogInToMetaMask";
        return;
      }
      vm.state = "signTheMessage";

      await axios.post(
        "/web3-ajax.php",
        {
          request: "login",
          address: address
        },
        vm.config
      )
      .then(function(response) {
        if (response.data.substring(0, 5) != "Error") {
          let message = response.data;
          let publicAddress = address;
          handleSignMessage(message, publicAddress).then(handleAuthenticate);
        } 
        else {
          console.log("Error: " + response.data);
        }
      })
      .catch(function(error) {
        console.error(error);
      });


      // Functions //

      function handleSignMessage(message, publicAddress) {
        return new Promise((resolve, reject) =>  
          web3.eth.personal.sign(
            web3.utils.utf8ToHex(message),
            publicAddress,
            (err, signature) => {
              if (err) vm.state = "needLogInToMetaMask";
              return resolve({ publicAddress, signature });
            }
          )
        );
      }

      function handleAuthenticate({ publicAddress, signature }) {
        axios
          .post(
            "/web3-ajax.php",
            {
              request: "auth",
              address: arguments[0].publicAddress,
              signature: arguments[0].signature
            },
            vm.config
          )
          .then(function(response) {
            if (response.data[0] == "Success") {
              vm.state = "loggedIn";
              vm.ethAddress = address;
              window.location = '/dashboard';
            }
          })
          .catch(function(error) {
            console.error(error);
          });
      }

    }
  },
  mounted() {
  }
});