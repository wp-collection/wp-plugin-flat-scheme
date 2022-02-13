<?php

/*
    Plugin Name: The plugin base scheme
    Description: The scheme to how to make a plugin, save data, set informations
    Version: 1.0
    Author: Bertz.tech - Alberto Marà 
    Author URI: https://bertz.tech
*/


    class the_plugin_scheme {

        /* = = = = = = = = = = = = = = = = = = = = = = */

            function __construct () {

                // set new menu items and page hook,
                // all info: https://codex.wordpress.org/Administration_Menus

                add_action( 'admin_menu', array($this, 'init_admin_panel') );

            }

        /* = = = = = = = = = = = = = = = = = = = = = = */


            // start the main page

            function init_admin_panel () {

                // a different way is: add_menu_page
                // https://developer.wordpress.org/reference/functions/add_menu_page/

                // SET PAGE CONTENTS
                add_options_page(

                    // the page title
                    'The scheme test',

                    // the title in menu
                    'hello plugins scheme',

                    // the securety level : shorturl.at/sxHWY
                    'activate_plugins',

                    // the plugin slug
                    'the-scheme-test',

                    // contents printer
                    array($this,'write_page')

                );

            }

            function write_page () {
                require 'contents.php'; //rememeber to copy slug of plugin/page inside this file!
            }



        /* = = = = = = = = = = = = = = = = = = = = = = */

    } $the_plugin_scheme = new the_plugin_scheme();
