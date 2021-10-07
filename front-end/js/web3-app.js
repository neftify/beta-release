var app = new Vue({
  el: "#app",
  data: {
    state: "",
    ethAddress: "",
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
          this.state = 'signTheMessage';
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
      let accountsOnEnable = await web3.eth.getAccounts();
      let address = accountsOnEnable[0];
      address = address.toLowerCase();
      //console.log(address);

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
          //console.log('Lets sign the message');
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
              //console.log('Signature ');
              //console.log(signature);
              if (err) vm.state = "signTheMessage";
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
            //console.log('Lets see the response to the signature');
            //console.log(response);
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