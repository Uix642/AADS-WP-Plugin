<?php

class aads_core_functions
{
    function __construct() {
        add_action( 'widgets_init', array($this,'register_ads_widget')); 
        add_action( 'wp_enqueue_scripts', array($this, 'extra_code')); 
    }

   function activate() {
        //Run on activation of plugin
       flush_rewrite_rules();
    }

    function deactivate() {
        //Run on deactivation of plugin
        //unregister_widget('ads_widget');
       flush_rewrite_rules();
    }

    function uninstall() {
        //Run on unstallation of plugin
        flush_rewrite_rules();
    }

    //Register wiget
    function register_ads_widget() { 
        register_widget( 'aads_ads_widget' ); 
    }

    //Add Extra Scripts
    function extra_code() { 
        wp_enqueue_style('extra_ads_style', plugins_url('A-ADS/css/main.css'));
        wp_enqueue_script('extra_ads_script', plugins_url('A-ADS/js/main.js'));
        }
    
 }

//Check if class exist, if yes create a new instance.
if (class_exists('aads_core_functions')) 
{
$CoreFunctions = new aads_core_functions();
}

//activation() hook
register_activation_hook( __FILE__, array($aads_core_functions, 'activate'));

//deactivate() hook
register_deactivation_hook( __FILE__, array($aads_core_functions, 'deactivate'));

//uninstall() hook
register_uninstall_hook( __FILE__, array($aads_core_functions, 'uninstall'));


?>