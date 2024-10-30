<?php
/*
 *Plugin Name: Call Leads 
 *Description: The easiest way to get more call leads, turn leads to customers.
 *Version: 1.0
 *Author: Avadec 
 *Plugin URI: http://callleads.avadec.com/
 *Author URI: http://avadec.com
 *Text Domain: callleads
 
 Call Leads (Wordpress Plugin)
 Copyright (C) 2015-2019 Avadec
 Contact me at http://www.avadec.com

 This program is free software: you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation, either version 3 of the License, or
 (at your option) any later version.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with this program. If not, see <http://www.gnu.org/licenses/>.
 */


    // This happens when file is visited directly without wordpress
    if ( ! defined( 'ABSPATH' ) ) {
       exit;  
    }

    // Defining the necessary constants
    define('CALDS_FILE' , __FILE__);
    define('CALDS_DIRECTORY' , dirname(__FILE__));
    define('CALDS_PLUGIN_URL' , plugin_dir_url( __FILE__ ));

    $page_now = isset($_GET['page']) ? (string) esc_html($_GET['page']) : '';
    define('CALDS_PAGE_NOW', $page_now);

    $plugin_data = get_file_data( CALDS_FILE , array('Version' => 'Version'), false );
    define('CALDS_VERSION', $plugin_data['Version']);

    // Require the activation initiation file
    function calds_activate() {
        require_once 'activate.php';
        
    }
    register_activation_hook( CALDS_FILE, 'calds_activate' );

    function calds_uninstall() {
        require_once 'uninstall.php';    
    }
    register_uninstall_hook( CALDS_FILE, 'calds_uninstall' );
    
    // Require the init file
    if (file_exists(CALDS_DIRECTORY.'/includes/backend/CallLeads/CallLeads.php') ) {
        require_once CALDS_DIRECTORY.'/includes/backend/CallLeads/CallLeads.php';    
    }
    
    // instantiation the initiation class
    if (class_exists('CallLeads')) {
        $CallLeads = new CallLeads();
        $CallLeads->calds_register_package();
    }
