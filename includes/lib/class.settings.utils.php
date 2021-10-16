<?php

    ////////////////
    // General
    ////////////////
    function get_site_name() {
        return get_setting(8);
    }

    function get_site_url() {
        return get_setting(35);
    }

    ////////////////
    // Social
    ////////////////
    function get_main_discord_link() {
        return get_setting(31);
    }

    function get_twitter_link() {
        return get_setting(32);
    }

    function get_github_link() {
        return get_setting(33);
    }

    function get_medium_link() {
        return get_setting(34);
    }
?>