<?php
require_once CALDS_DIRECTORY.'/includes/backend/CallLeads/calds_helper.php';
require_once CALDS_DIRECTORY.'/vendor/recaptchalib.php';

class CallLeads {
    
    public function __construct() {
        $this->caldsHelper = new CallLeadsHelper();
        $this->adminOptions = get_option( 'calds_admin_settings_options' );
        $this->ajax_url = admin_url( 'admin-ajax.php' );
    }
    
    public function calds_register_package() {
        add_action( 'admin_menu', array( $this , 'calds_add_menu' ) );
        add_action( 'init', array( $this , 'calds_register_lead_post_type' ) );
        
        if(CALDS_PAGE_NOW === 'calds_settings') {
            add_action( 'admin_enqueue_scripts', array( $this , 'calds_enqueue_admin_scripts') );     
        }
        add_action( 'wp_enqueue_scripts', array( $this , 'calds_enqueue_wp_scripts') );
        add_action( 'wp_ajax_calds_save_wp_submissions' , array( $this , 'calds_save_wp_submissions' ) );
        add_action( 'wp_ajax_nopriv_calds_save_wp_submissions' , array( $this , 'calds_save_wp_submissions' ) );
        add_action( 'wp_ajax_calds_save_admin_settings' , array( $this , 'calds_save_admin_settings' ) );
        add_filter( 'manage_callleads_posts_columns' , array( $this , 'calds_column_head' ) );
        add_action( 'manage_callleads_posts_custom_column' , array( $this , 'calds_column_content' ) , 10, 2 );
        add_action( 'plugins_loaded', array( $this , 'calds_load_textdomain' ) );
        if($this->adminOptions['enable_call_leads'] != 0) {
            add_action( 'wp_footer', array( $this , 'calds_on_load_icon' ) );
            add_action( 'wp_footer', array( $this , 'calds_on_click_el' ) );
            add_action( 'wp_footer', array( $this , 'calds_front_end_scripts' ) );    
        }
    }
    
    public function calds_add_menu() {
        add_menu_page( 'Call Leads', 'Call Leads', 'manage_options', 'call_leads', array( $this , 'calds_menu_page' ), CALDS_PLUGIN_URL.'/assets/img/callleads_icon.png', '185' );
        add_submenu_page( 'call_leads', 'Call Leads Settings', 'Settings', 'manage_options', 'calds_settings', array( $this , 'calds_menu_page' ) );
        
    }
    
    public function calds_menu_page() {
        $data = $this->adminOptions;
        $data_helper = $this->caldsHelper;
        require_once CALDS_DIRECTORY.'/includes/backend/CallLeads/views/CallLeads.php'; 
    }
    
     public function calds_register_lead_post_type() {
        $labels = array(
            'name'               => __( 'Call Leads', 'callleads' ),
            'singular_name'      => __( 'Call Lead', 'callleads' ),
            'menu_name'          => __( 'Call Leads', 'callleads' ),
            'name_admin_bar'     => __( 'Call Lead', 'callleads' ),
            'add_new'            => __( 'Add New', 'callleads' ),
            'add_new_item'       => __( 'Add New Call Lead', 'callleads' ),
            'new_item'           => __( 'New Call Lead', 'callleads' ),
            'edit_item'          => __( 'Edit Call Lead', 'callleads' ),
            'view_item'          => __( 'View Call Lead', 'callleads' ),
            'all_items'          => __( 'Leads', 'callleads' ),
            'search_items'       => __( 'Search Call Leads', 'callleads' ),
            'parent_item_colon'  => __( 'Parent Call Leads:', 'callleads' ),
            'not_found'          => __( 'No call leads found.', 'callleads' ),
            'not_found_in_trash' => __( 'No call leads found in Trash.', 'callleads' )
        );

        $args = array(
            'labels'             => $labels,
            'description'        => __( 'Description.', 'callleads' ),
            'public'             => false,
            'publicly_queryable' => false,
            'show_ui'            => true,
            'show_in_quick_edit' => false,
            'show_in_nav_menu'   => false,
            'menu_icon'          =>  '',
            'show_in_menu'       => 'call_leads',
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'callleads' ),
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => 25,
            'supports'           => array( 'custom-fields' )
    );

        register_post_type( 'callleads', $args );
    }
    
    public function calds_enqueue_wp_scripts() {
        wp_register_style( 'jquery-ui-style', CALDS_PLUGIN_URL. 'assets/css/jquery-ui.css' , array() , CALDS_VERSION ); 
        
        wp_enqueue_script('jquery-ui-datepicker');
        wp_enqueue_style( 'jquery-ui-style' );
    }
    
    public function calds_enqueue_admin_scripts() {
        wp_register_style( 'calds_admin_css', CALDS_PLUGIN_URL. 'assets/css/admin_style.css' , array() , CALDS_VERSION ); 
        wp_register_style( 'calds_admin_rtl_css', CALDS_PLUGIN_URL. 'assets/css/admin_style_rtl.css' , array() , CALDS_VERSION );
        if($this->adminOptions['enable_rtl'] == 0) {
            wp_enqueue_style( 'calds_admin_css' );   
        }else {
            wp_enqueue_style( 'calds_admin_rtl_css' );     
        }
        wp_enqueue_style( 'wp-color-picker' );
        
        
        wp_register_script( 'calds_admin_js', CALDS_PLUGIN_URL. 'assets/js/wp-color-picker-alpha.min.js', array( 'jquery' , 'wp-color-picker' ) , CALDS_VERSION, true );
        wp_register_script( 'alpha_col_pickr', CALDS_PLUGIN_URL. 'assets/js/admin_script.js', array( 'jquery' , 'wp-color-picker' ) , CALDS_VERSION, true );      
        wp_enqueue_script( 'jquery' ); 
        wp_enqueue_script( 'calds_admin_js' ); 
        wp_enqueue_script( 'alpha_col_pickr' ); 
        
        wp_enqueue_media();
        
        wp_localize_script('calds_admin_js' , 'calds_js_obj' , array(
            'ajax_url'             =>   admin_url( 'admin-ajax.php' ),
            'admin_feedbak'        =>   __('Saved' , 'callleads'),
            'admin_feedbak_er'     =>   __('Error, Please Retry' , 'callleads'),
            'phn_code'             =>   ($this->adminOptions['phn_code']) ? $this->adminOptions['phn_code'] : ''
        ));
    }
    
    public function calds_save_admin_settings() {
        // Verify nonce 
        if ( ! isset( $_POST['calds_admin_nonce'] ) || ! wp_verify_nonce( $_POST['calds_admin_nonce'] , 'calds_admin_nonce' ) ) {
            die( __( 'Cheating uhn?' , 'callleads') );
        }
        unset($_POST['calds_admin_nonce']);
        unset($_POST['action']);
        unset($_POST['_wp_http_referer']);
        
        parse_str($_POST['submissions'], $new_submissions);
        
        $new_datas = array(
           'enable_call_leads'              =>  (isset($new_submissions['enable_call_leads']) && !empty($new_submissions['enable_call_leads'])) ? 1 : 0,
           'enable_click_to_call'           =>  (isset($new_submissions['enable_click_to_call']) && !empty($new_submissions['enable_click_to_call'])) ? 1 : 0,
           'phn_num'                        =>  (isset($new_submissions['phn_num']) && !empty($new_submissions['phn_num'])) ? sanitize_text_field( $new_submissions['phn_num'] ) : '',
           'adm_email'                      =>  (isset($new_submissions['adm_email']) && !empty($new_submissions['adm_email'])) ? sanitize_email( $new_submissions['adm_email'] ) : '',
           'phn_code'                       =>  (isset($new_submissions['phn_code']) && !empty($new_submissions['phn_code'])) ? sanitize_text_field( $new_submissions['phn_code'] ) : 'US',
           'enable_rtl'                     =>  (isset($new_submissions['enable_rtl']) && !empty($new_submissions['enable_rtl'])) ? 1 : 0,
           
           'img_load_preview'               =>  (isset($new_submissions['img_load_preview']) && !empty($new_submissions['img_load_preview'])) ? (int)$new_submissions['img_load_preview'] : 2,   
           'load_icon_pos'                  =>  (isset($new_submissions['load_icon_pos']) && !empty($new_submissions['load_icon_pos'])) ? sanitize_text_field($new_submissions['load_icon_pos']) : 'b_right',
           'icon_text_one'                  =>  (isset($new_submissions['icon_text_one']) && !empty($new_submissions['icon_text_one'])) ? sanitize_text_field( $new_submissions['icon_text_one'] ) : __( 'Let Us Call You', 'callleads' ),
           'icon_text_two'                  =>  (isset($new_submissions['icon_text_two']) && !empty($new_submissions['icon_text_two'])) ? sanitize_text_field( $new_submissions['icon_text_two'] ) : __( 'Click here', 'callleads' ),
           'pri_col'                        =>  (isset($new_submissions['pri_col']) && !empty($new_submissions['pri_col'])) ? sanitize_text_field( $new_submissions['pri_col'] ) : '',
           'overlay_bg_col'                 =>  (isset($new_submissions['overlay_bg_col']) && !empty($new_submissions['overlay_bg_col'])) ? sanitize_text_field( $new_submissions['overlay_bg_col'] ) : 'rgba(0, 0, 0, 0.5)',
           'load_icon_img'                  =>  (isset($new_submissions['load_icon_img']) && !empty($new_submissions['load_icon_img'])) ? sanitize_text_field( $new_submissions['load_icon_img'] ) : '',
           'enab_icon_anim'                 =>  (isset($new_submissions['enab_icon_anim']) && !empty($new_submissions['enab_icon_anim'])) ? 1 : 0,
           'enab_icon_shadow'               =>  (isset($new_submissions['enab_icon_shadow']) && !empty($new_submissions['enab_icon_shadow'])) ? 1 : 0,
           
           'click_el_tit'                   =>  (isset($new_submissions['click_el_tit']) && !empty($new_submissions['click_el_tit'])) ? sanitize_text_field( $new_submissions['click_el_tit'] ) : '', 
           'cl_el_subtit'                   =>  (isset($new_submissions['cl_el_subtit']) && !empty($new_submissions['cl_el_subtit'])) ? sanitize_text_field( $new_submissions['cl_el_subtit'] ) : '', 
           'cl_el_btn_txt'                  =>  (isset($new_submissions['cl_el_btn_txt']) && !empty($new_submissions['cl_el_btn_txt'])) ? sanitize_text_field( $new_submissions['cl_el_btn_txt'] ) : '', 
           'cl_el_fotr_txt'                  =>  (isset($new_submissions['cl_el_fotr_txt']) && !empty($new_submissions['cl_el_fotr_txt'])) ? sanitize_text_field( $new_submissions['cl_el_fotr_txt'] ) : '', 
           'en_dis_el_tit'                  =>  (isset($new_submissions['en_dis_el_tit']) && !empty($new_submissions['en_dis_el_tit'])) ? 1 : 0,
           'en_dis_el_subtit'               =>  (isset($new_submissions['en_dis_el_subtit']) && !empty($new_submissions['en_dis_el_subtit'])) ? 1 : 0,
           'en_dis_el_date'                 =>  (isset($new_submissions['en_dis_el_date']) && !empty($new_submissions['en_dis_el_date'])) ? 1 : 0,
           'en_dis_el_time'                 =>  (isset($new_submissions['en_dis_el_time']) && !empty($new_submissions['en_dis_el_time'])) ? 1 : 0,
           'en_dis_el_name'                 =>  (isset($new_submissions['en_dis_el_name']) && !empty($new_submissions['en_dis_el_name'])) ? 1 : 0,
           'en_dis_el_email'                =>  (isset($new_submissions['en_dis_el_email']) && !empty($new_submissions['en_dis_el_email'])) ? 1 : 0,
           'en_dis_el_phone'                =>  (isset($new_submissions['en_dis_el_phone']) && !empty($new_submissions['en_dis_el_phone'])) ? 1 : 0,
           'en_dis_fotr_txt'                =>  (isset($new_submissions['en_dis_fotr_txt']) && !empty($new_submissions['en_dis_fotr_txt'])) ? 1 : 0,
           'on_cl_bg_col'                   =>  (isset($new_submissions['on_cl_bg_col']) && !empty($new_submissions['on_cl_bg_col'])) ? sanitize_text_field( $new_submissions['on_cl_bg_col'] ) : '',
           'on_cl_bg_img'                   =>  (isset($new_submissions['on_cl_bg_img']) && !empty($new_submissions['on_cl_bg_img'])) ? sanitize_text_field( $new_submissions['on_cl_bg_img'] ) : '',
           'on_cl_bg_img_ovr'               =>  (isset($new_submissions['on_cl_bg_img_ovr']) && !empty($new_submissions['on_cl_bg_img_ovr'])) ? sanitize_text_field( $new_submissions['on_cl_bg_img_ovr'] ) : '',
            
           'visib_post_ids'                 =>  (isset($new_submissions['visib_post_ids']) && !empty($new_submissions['visib_post_ids'])) ? sanitize_text_field( $new_submissions['visib_post_ids'] ) : '',
           'in_post_ids'                    =>  (isset($new_submissions['in_post_ids']) && !empty($new_submissions['in_post_ids'])) ? sanitize_text_field( $new_submissions['in_post_ids'] ) : 'incl_only',
           'enab_rev_scr'                   =>  (isset($new_submissions['enab_rev_scr']) && !empty($new_submissions['enab_rev_scr'])) ? 1 : 0,
           'rev_scrl_perc'                  =>  (isset($new_submissions['rev_scrl_perc']) && !empty($new_submissions['rev_scrl_perc'])) ? (int)$new_submissions['rev_scrl_perc'] : 70,
           'rev_post_id'                    =>  (isset($new_submissions['rev_post_id']) && !empty($new_submissions['rev_post_id'])) ? sanitize_text_field( $new_submissions['rev_post_id'] ) : '',
           'enb_exit_intent'                =>  (isset($new_submissions['enb_exit_intent']) && !empty($new_submissions['enb_exit_intent'])) ? 1 : 0,
           'exit_intent_post_id'            =>  (isset($new_submissions['exit_intent_post_id']) && !empty($new_submissions['exit_intent_post_id'])) ? sanitize_text_field( $new_submissions['exit_intent_post_id'] ) : '',

           'enab_email_notif'               =>  (isset($new_submissions['enab_email_notif']) && !empty($new_submissions['enab_email_notif'])) ? 1 : 0,

           'enab_sms_notif_admin'           =>  (isset($new_submissions['enab_sms_notif_admin']) && !empty($new_submissions['enab_sms_notif_admin'])) ? 1 : 0,
           'twilio_id'                      =>  (isset($new_submissions['twilio_id']) && !empty($new_submissions['twilio_id'])) ? sanitize_text_field( $new_submissions['twilio_id'] ) : '',
           'twilio_token'                   =>  (isset($new_submissions['twilio_token']) && !empty($new_submissions['twilio_token'])) ? sanitize_text_field( $new_submissions['twilio_token'] ) : '',
           'twilio_phn_num'                 =>  (isset($new_submissions['twilio_phn_num']) && !empty($new_submissions['twilio_phn_num'])) ? sanitize_text_field( $new_submissions['twilio_phn_num'] ) : '',
           'enab_sms_notif_lead'            =>  (isset($new_submissions['enab_sms_notif_lead']) && !empty($new_submissions['enab_sms_notif_lead'])) ? 1 : 0,
           'calds_text_area_sms'            =>  (isset($new_submissions['calds_text_area_sms']) && !empty($new_submissions['calds_text_area_sms'])) ? sanitize_textarea_field( $new_submissions['calds_text_area_sms'] ) : '',

           'calds_text_area_after_sub'      =>  (isset($new_submissions['calds_text_area_after_sub']) && !empty($new_submissions['calds_text_area_after_sub'])) ? sanitize_textarea_field( $new_submissions['calds_text_area_after_sub'] ) : '',
           'sub_redr_url'                   =>  (isset($new_submissions['sub_redr_url']) && !empty($new_submissions['sub_redr_url'])) ? esc_url_raw( $new_submissions['sub_redr_url'] ) : '',
            
           'enb_g_captcha'                  =>  (isset($new_submissions['enb_g_captcha']) && !empty($new_submissions['enb_g_captcha'])) ? 1 : 0,
           'g_site_key'                     =>  (isset($new_submissions['g_site_key']) && !empty($new_submissions['g_site_key'])) ? sanitize_text_field( $new_submissions['g_site_key'] ) : '',
           'g_secr_key'                     =>  (isset($new_submissions['g_secr_key']) && !empty($new_submissions['g_secr_key'])) ? sanitize_text_field( $new_submissions['g_secr_key'] ) : '',
           'reveal_cookies_dur'             =>  (isset($new_submissions['reveal_cookies_dur']) && !empty($new_submissions['reveal_cookies_dur'])) ? (int)$new_submissions['reveal_cookies_dur'] : 10800,
           'animation_splash'               =>  (isset($new_submissions['animation_splash']) && !empty($new_submissions['animation_splash'])) ? sanitize_text_field( $new_submissions['animation_splash'] ) : ''
        );
        
        if ( !empty($new_submissions['adm_email']) && !is_email($new_submissions['adm_email']) ){
            $feedback = array (
                'success'   =>  0,
                'feedback'  =>  __( 'Please enter a valid admin email address', 'callleads' )
            );    
            wp_send_json($feedback);
        }elseif( !empty($new_submissions['sub_redr_url']) && !filter_var($new_submissions['sub_redr_url'], FILTER_VALIDATE_URL) ) {
            $feedback = array (
                'success'   =>  0,
                'feedback'  =>  __( 'Please enter a valid redirection url', 'callleads' )
            );    
            wp_send_json($feedback);    
        }else {
            if( ($this->adminOptions == $new_datas) || (update_option( 'calds_admin_settings_options', $new_datas ) == true) ){
                $feedback = array (
                    'success'   =>  1,
                    'feedback'  =>  __( 'Your settings was saved successfully', 'callleads' )
                );    
                wp_send_json($feedback);
            }else{
                $feedback = array (
                    'success'   =>  0,
                    'feedback'  =>  __( 'There was an error saving your settings, Please try again', 'callleads' )
                );    
                wp_send_json($feedback);        
            }    
        }
            
    }
    
    public function calds_on_load_icon() {
        if ($this->calds_visib_post_ids() === true){return;} 
        $icon_params = array(
            'pri_col'         =>    sanitize_text_field( $this->adminOptions['pri_col'] ),
            'enable_rtl'      =>    (int) $this->adminOptions['enable_rtl'],
            'text_one'        =>    sanitize_text_field( $this->adminOptions['icon_text_one'] ),
            'text_two'        =>    sanitize_text_field( $this->adminOptions['icon_text_two'] ),
            'icon_pos'        =>    sanitize_text_field( $this->adminOptions['load_icon_pos'] ),
            'icon_image'      =>    sanitize_text_field( $this->adminOptions['load_icon_img'] ),
            'enab_icon_anim'  =>    sanitize_text_field( $this->adminOptions['enab_icon_anim'] ),
            'anim_splash'     =>    sanitize_text_field( $this->adminOptions['animation_splash'] ),
            'icon_shadow'     =>    sanitize_text_field( $this->adminOptions['enab_icon_shadow'] ),          
        );
        
        $on_load_icons = array(
            1 => 'calds_on_load_icon_one',
            2 => 'calds_on_load_icon_two',
            3 => 'calds_on_load_icon_three',
            4 => 'calds_on_load_icon_four'
        );
        foreach($on_load_icons as $key => $value) {
            if($this->adminOptions['img_load_preview'] == $key) {
                echo $this->caldsHelper->$value($icon_params);
            }    
        }    
    }
    
    public function calds_on_click_el() {
        if ($this->calds_visib_post_ids() === true){return;}
        $el_params = array(
            'pri_col'               =>   $this->adminOptions['pri_col'], 
            'enable_rtl'            =>   $this->adminOptions['enable_rtl'], 
            'overlay_bg_col'        =>   $this->adminOptions['overlay_bg_col'], 
            'click_el_tit'          =>   $this->adminOptions['click_el_tit'], 
            'cl_el_subtit'          =>   $this->adminOptions['cl_el_subtit'], 
            'cl_el_btn_txt'         =>   $this->adminOptions['cl_el_btn_txt'], 
            'cl_el_fotr_txt'        =>   $this->adminOptions['cl_el_fotr_txt'], 
            'g_site_key'            =>   $this->adminOptions['g_site_key'], 
            'g_secr_key'            =>   $this->adminOptions['g_secr_key'], 
            'en_dis_el_tit'         =>   $this->adminOptions['en_dis_el_tit'],
            'en_dis_el_subtit'      =>   $this->adminOptions['en_dis_el_subtit'],
            'en_dis_el_date'        =>   $this->adminOptions['en_dis_el_date'],
            'en_dis_el_time'        =>   $this->adminOptions['en_dis_el_time'],
            'en_dis_el_name'        =>   $this->adminOptions['en_dis_el_name'],
            'en_dis_el_email'       =>   $this->adminOptions['en_dis_el_email'],
            'en_dis_el_phone'       =>   $this->adminOptions['en_dis_el_phone'],
            'en_dis_fotr_txt'       =>   $this->adminOptions['en_dis_fotr_txt'],
            'enb_g_captcha'         =>   $this->adminOptions['enb_g_captcha'],
            'on_cl_bg_col'          =>   $this->adminOptions['on_cl_bg_col'],
            'on_cl_bg_img'          =>   $this->adminOptions['on_cl_bg_img'],
            'on_cl_bg_img_ovr'      =>   $this->adminOptions['on_cl_bg_img_ovr']       
        );
        echo $this->caldsHelper->calds_on_click_skin_one($el_params);    
    }
    
    public function calds_front_end_scripts() {
        $phn_code = '+'.$this->caldsHelper->calds_country_call_code_list()[$this->adminOptions['phn_code']]['code']; 
        if ($this->calds_visib_post_ids() === true){return;}
        if ($this->adminOptions['enable_click_to_call'] == 1) {
            $script = "
                <script>
                jQuery( document ).ready(function() {
                    jQuery('.on_load_icon').click(function() {
                        window.location.href = 'tel:".esc_html($this->adminOptions['admin_number'])."';
                    });
                });
                </script>
            ";
            echo $script;
            return;
        }
        $script = "
                    <script>
                        jQuery( document ).ready(function() {
                        var calds_success_cookie = getCookie('calds_success_cookie'); 
                        if (calds_success_cookie != '') {
                            jQuery('.c-inner_content').html('<div class=\"calds_success\">'+calds_success_cookie+'</div>');
                        }
                        
                        jQuery('.c-inner_cont_time_from').change(function(){
                        ".$this->calds_on_change_time('c-inner_cont_time_to option' , 'c-inner_cont_time_from  option')."    
                        });
                        
                        jQuery(document).on('click' , function(event) {
                            if (event.target.className == 'c-cont_container') {
                                jQuery('.c-overlay_close').click();
                            }
                        });
                  ";
//                        jQuery('.c-inner_cont_time_to').change(function(){
//                        ".$this->calds_on_change_time('c-inner_cont_time_from option' , 'c-inner_cont_time_to  option')."    
//                        }); 
        
        $script .= '
                    jQuery.datepicker.regional["'.$this->caldsHelper->calds_datepicker_lang().'"] = {
                        prevText: "&#x3c;Préc",
                        nextText: "Suiv&#x3e;",
                        monthNames: ["'.$this->caldsHelper->caldsDatePickerMonthNames()["january"].'","'.$this->caldsHelper->caldsDatePickerMonthNames()["february"].'","'.$this->caldsHelper->caldsDatePickerMonthNames()["march"].'","'.$this->caldsHelper->caldsDatePickerMonthNames()["april"].'","'.$this->caldsHelper->caldsDatePickerMonthNames()["may"].'","'.$this->caldsHelper->caldsDatePickerMonthNames()["june"].'",
                        "'.$this->caldsHelper->caldsDatePickerMonthNames()["july"].'","'.$this->caldsHelper->caldsDatePickerMonthNames()["august"].'","'.$this->caldsHelper->caldsDatePickerMonthNames()["september"].'","'.$this->caldsHelper->caldsDatePickerMonthNames()["october"].'","'.$this->caldsHelper->caldsDatePickerMonthNames()["november"].'","'.$this->caldsHelper->caldsDatePickerMonthNames()["december"].'"],
                        monthNamesShort: ["'.$this->caldsHelper->caldsDatePickerMonthNamesShort()["january"].'","'.$this->caldsHelper->caldsDatePickerMonthNamesShort()["february"].'","'.$this->caldsHelper->caldsDatePickerMonthNamesShort()["march"].'","'.$this->caldsHelper->caldsDatePickerMonthNamesShort()["april"].'","'.$this->caldsHelper->caldsDatePickerMonthNamesShort()["may"].'","'.$this->caldsHelper->caldsDatePickerMonthNamesShort()["june"].'",
                        "'.$this->caldsHelper->caldsDatePickerMonthNamesShort()["july"].'","'.$this->caldsHelper->caldsDatePickerMonthNamesShort()["august"].'","'.$this->caldsHelper->caldsDatePickerMonthNamesShort()["september"].'","'.$this->caldsHelper->caldsDatePickerMonthNamesShort()["october"].'","'.$this->caldsHelper->caldsDatePickerMonthNamesShort()["november"].'","'.$this->caldsHelper->caldsDatePickerMonthNamesShort()["december"].'"],
                        dayNames: ["'.$this->caldsHelper->caldsDatePickerDayNames()["sunday"].'","'.$this->caldsHelper->caldsDatePickerDayNames()["monday"].'","'.$this->caldsHelper->caldsDatePickerDayNames()["tuesday"].'","'.$this->caldsHelper->caldsDatePickerDayNames()["wednesday"].'","'.$this->caldsHelper->caldsDatePickerDayNames()["thursday"].'","'.$this->caldsHelper->caldsDatePickerDayNames()["friday"].'","'.$this->caldsHelper->caldsDatePickerDayNames()["saturday"].'"],
                        dayNamesShort: ["'.$this->caldsHelper->caldsDatePickerDayNamesShort()["sunday"].'","'.$this->caldsHelper->caldsDatePickerDayNamesShort()["monday"].'","'.$this->caldsHelper->caldsDatePickerDayNamesShort()["tuesday"].'","'.$this->caldsHelper->caldsDatePickerDayNamesShort()["wednesday"].'","'.$this->caldsHelper->caldsDatePickerDayNamesShort()["thursday"].'","'.$this->caldsHelper->caldsDatePickerDayNamesShort()["friday"].'","'.$this->caldsHelper->caldsDatePickerDayNamesShort()["saturday"].'"],
                        dayNamesMin: ["'.$this->caldsHelper->caldsDatePickerDayNamesMin()["sunday"].'","'.$this->caldsHelper->caldsDatePickerDayNamesMin()["monday"].'","'.$this->caldsHelper->caldsDatePickerDayNamesMin()["tuesday"].'","'.$this->caldsHelper->caldsDatePickerDayNamesMin()["wednesday"].'","'.$this->caldsHelper->caldsDatePickerDayNamesMin()["thursday"].'","'.$this->caldsHelper->caldsDatePickerDayNamesMin()["friday"].'","'.$this->caldsHelper->caldsDatePickerDayNamesMin()["saturday"].'"],
                        beforeShow: function (input, inst) {
                            setTimeout(function () {
                                inst.dpDiv.css({
                                    top: (jQuery(".calds_date_picker").offset().top - jQuery(".on_click_el").offset().top) + jQuery(".calds_date_picker").height(),
                                    left: jQuery(".calds_date_picker").offset().left
                                });
                            }, 0);
                        },
                        firstDay: 1,
                        isRTL: '.$this->caldsHelper->calds_is_rtl().',
                        yearSuffix: "",
                        minDate: 0,
                        maxDate: "+12M +0D",
                        numberOfMonths: 1,
                    };
                    jQuery(".calds_date_picker").datepicker(jQuery.datepicker.regional["'.$this->caldsHelper->calds_datepicker_lang().'"]);
                       
                    
                    
                   ';
        
        $script .= "
                    jQuery('.on_load_icon , .calds_trigger_overlay').click(function() {
                        jQuery('.on_click_el').css('display' , 'block');
                        jQuery('html , body').css('overflow' , 'hidden');
                    });
                     
                    jQuery('.c-overlay_close').click(function() {
                        jQuery('.on_click_el').css('display' , 'none');
                        jQuery('html , body').css('overflow' , '');
                    });
                    ";
        
        if($this->adminOptions['enab_rev_scr'] == 1) {
            if (!empty($this->adminOptions['rev_post_id'])) {
                if (is_single() || is_page()) {
                    global $post;
                    $postid = $post->id;
                    $to_reveal_ids = (explode(",",$this->adminOptions['rev_post_id']));
                    if(in_array( $postid , $to_reveal_ids )) {
                        $script .= $this->calds_reveal_script();    
                    }      
                }      
            }else {
                $script .= $this->calds_reveal_script();
            }             
        }
        
        if($this->adminOptions['enb_exit_intent'] == 1) {
            if (!empty($this->adminOptions['exit_intent_post_id'])) {
                if (is_single() || is_page()) {
                    global $post;
                    $postid = $post->id;
                    $to_reveal_ids = (explode(",",$this->adminOptions['exit_intent_post_id']));
                    if(in_array( $postid , $to_reveal_ids )) {
                        $script .= $this->calds_exit_intent_script();    
                    }
                }     
            }else {
                $script .= $this->calds_exit_intent_script();
            }             
        }
        
        
         $script .= "
                       function setCookie(cname, cvalue, exdays) {
                            var d = new Date();
                    ";
         $min_cookies = array(3, 5, 10, 15, 20, 30, 60, 180);
         if (in_array($this->adminOptions['reveal_cookies_dur'] , $min_cookies)) {
            $script .= "d.setTime(d.getTime() + (exdays*60*1000));";       
         }else{
            $script .= "d.setTime(d.getTime() + (exdays*24*60*60*1000));";
         }
        
         $script .= "
                            var expires = 'expires='+ d.toUTCString();
                            document.cookie = cname + '=' + cvalue + ';' + expires + ';path=/';
                       }
  
                       function getCookie(cname) {
                            var name = cname + '=';
                            var decodedCookie = decodeURIComponent(document.cookie);
                            var ca = decodedCookie.split(';');
                            for(var i = 0; i <ca.length; i++) {
                                var c = ca[i];
                                while (c.charAt(0) == ' ') {
                                    c = c.substring(1);
                                }
                                if (c.indexOf(name) == 0) {
                                    return c.substring(name.length, c.length);
                                }
                            }
                            return '';
                        }
                    ";
        
         $script .= "
                       jQuery( document ).on( 'submit' , '#calds_front_submission' , function(e) { 
                            e.preventDefault();
                            jQuery('.c-custom_input_submit').addClass('calds_disable_click');
                            jQuery('.c-custom_input , .c-custom_select').removeClass('calds_front_error');
                            var datas = {  
                                'action':           'calds_save_wp_submissions',
                                'calds_wp_nonce':   jQuery( '#calds_wp_save_nonce' ).val(),
                                'submissions':      jQuery( this ).serialize()
                            };
                            
                            jQuery.ajax({
                                type: 'POST',
                                url: '".$this->ajax_url."',
                                data: datas,
                                success: function( data ) {
                                    if(data.error == 'all') {
                                        jQuery('.c-custom_input , .c-custom_select').addClass('calds_front_error');
                                        jQuery( '.c-custom_input_submit' ).removeClass( 'calds_disable_click' );
                                    }
                                    
                                    if(data.error == 'mixed') {
                                        if(data.errors['c-inner_cont_name']) {
                                            jQuery('.c-inner_cont_name').addClass( 'calds_front_error' ); 
                                        } 
                                        
                                        if(data.errors['c-inner_cont_email']) {
                                            jQuery('.c-inner_cont_email').addClass( 'calds_front_error' ); 
                                        } 
                                        
                                        if(data.errors['c-inner_cont_phone']) {
                                            jQuery('.c-inner_cont_phone').addClass( 'calds_front_error' ); 
                                        } 
                                        
                                        if(data.errors['c-inner_cont_date']) {
                                            jQuery('.c-inner_cont_date').addClass( 'calds_front_error' ); 
                                        } 
                                        
                                        if(data.errors['c-inner_cont_time_from']) {
                                            jQuery('.c-inner_cont_time_from').addClass( 'calds_front_error' ); 
                                        } 
                                        
                                        if(data.errors['c-inner_cont_time_to']) {
                                            jQuery('.c-inner_cont_time_to').addClass( 'calds_front_error' ); 
                                        } 
                                        
                                        if(data.errors['g-recaptcha-response']) {
                                            jQuery('.calds_recaptcha').addClass( 'calds_front_error' ); 
                                        } 
                                        
                                        jQuery( '.c-custom_input_submit' ).removeClass( 'calds_disable_click' );
                                    } 
                                    
                                    if(data.error == 0) {
                                        jQuery('.c-inner_content').html('<div class=\"calds_success\">'+data.message+'</div>');
                                        var calds_success_cookie = data.message;
                                        setCookie('calds_success_cookie', calds_success_cookie, ".(int)$this->adminOptions['reveal_cookies_dur'].");
                                        if (data.redirect != '') {
                                             setTimeout(function(){window.location.href = data.redirect;}, 30000);
                                        }
                                    }
                                    
                                    if(data.error == 1) {
                                        jQuery('.c-inner_cont').append('<div class=\"calds_success\">'+data.message+'</div>').fadeOut(3000);
                                        jQuery( '.c-custom_input_submit' ).removeClass( 'calds_disable_click' );
                                    }
                                },
                                error: function( xhr,status,error ) {
                                    jQuery( '.c-custom_input_submit' ).removeClass( 'calds_disable_click' );
                                    
                                }
                            }); 
                        });
                    ";
         $script .= "
            jQuery(\".c-inner_cont_phone\").keydown(function(e){
                var innerInput = jQuery(this).val(); 
                var prefix = '".$phn_code."';

                if(e.keyCode == 8 || e.keyCode == 46) {
                    if(innerInput.length == prefix.length && innerInput == prefix){
                       jQuery(this).val(prefix);
                       return false;
                    }

                }

            });
            jQuery(\".c-inner_cont_phone\").bind(\"keypress\", function (e) {
              var keyCode = e.which ? e.which : e.keyCode
              if (!(keyCode >= 48 && keyCode <= 57)) {              
                return false;
              }
            });
            jQuery( \".c-inner_cont_phone\" ).focus(function() {
                var innerInput = jQuery(this).val(); 
                var prefix = '".$phn_code."';
                if(innerInput == ''){
                    jQuery(this).val(prefix);
                }
            });
            jQuery(\".c-inner_cont_phone\").keyup(function(e){
                var innerInput = jQuery(this).val();
                var prefix = '".$phn_code."';
                var res = innerInput.substring(0, prefix.length);
                var totalCharacters = 15;

                if(innerInput.length > totalCharacters) {
                    jQuery(this).val(innerInput.substring(0, totalCharacters));
                    return false;
                }
                if(prefix != res) {
                    jQuery(this).val(prefix+innerInput);
                 }
            });
         ";
        
         $script .= "
                       });
                       </script>
                     ";  
        echo $script;
    }
    
    public function calds_save_wp_submissions() {
        $phn_code = '+'.$this->caldsHelper->calds_country_call_code_list()[$this->adminOptions['phn_code']]['code'];
    
        // Verify nonce
        $error = array();
        if ( ! isset( $_POST['calds_wp_nonce'] ) || ! wp_verify_nonce( $_POST['calds_wp_nonce'] , 'calds_wp_nonce' ) ) {
            $feedback = array(
                'error'  =>  'all'
            );
            wp_send_json($feedback); 
        }
        
        unset($_POST['calds_wp_save_nonce']);
        unset($_POST['action']);
        unset($_POST['_wp_http_referer']);
        
        parse_str($_POST['submissions'], $the_submissions);
        
        if ($this->adminOptions['enb_g_captcha'] != 0 && !empty($this->adminOptions['g_site_key']) && !empty($this->adminOptions['g_secr_key'])) {
            if(!isset($the_submissions["g-recaptcha-response"]) || empty($the_submissions["g-recaptcha-response"])) {
                $error['g-recaptcha-response'] = 'g-recaptcha-response';    
            }    
        }
        $new_submissions = array();
        $default_params = array(
                               'en_dis_el_date'        => 'c-inner_cont_date',
                               'en_dis_el_time'        =>  array('c-inner_cont_time_from','c-inner_cont_time_to'),
                               'en_dis_el_name'        =>  'c-inner_cont_name',
                               'en_dis_el_email'       =>  'c-inner_cont_email',
                               'en_dis_el_phone'       =>  'c-inner_cont_phone'
                          );
        
        foreach($default_params as $key => $value) {
            if ($this->adminOptions[$key] != 0 ) {
                if ($key == 'en_dis_el_time') {
                    
                    if(empty($the_submissions[$value[0]])){
                        $error[$value[0]] =  $value[0];        
                    }else {
                        $new_submissions[$value[0]] = $this->caldsHelper->calds_time_array()[((int)$the_submissions[$value[0]] - 1)];
                    }
                    
                    if(empty($the_submissions[$value[1]])){
                        $error[$value[1]] =  $value[1];    
                    }else{
                        $new_submissions[$value[1]] = $this->caldsHelper->calds_time_array()[((int)$the_submissions[$value[1]] - 1)];
                    }
                    
                    if(!empty($the_submissions[$value[0]]) && !empty($the_submissions[$value[1]])) {
                        if($the_submissions[$value[0]] > $the_submissions[$value[1]]) {
                            $error[$value[0]] =  $value[0]; 
                            $error[$value[1]] =  $value[1];
                        }    
                    }
                }elseif($key == 'en_dis_el_email'){
                    if(!is_email($the_submissions[$value])){
                        $error[$value] =  $value;
                    }else{
                        $new_submissions[$value] = sanitize_text_field($the_submissions[$value]);    
                    }    
                }elseif($key == 'en_dis_el_phone'){
                    if(empty($the_submissions[$value])){
                        $error[$value] =  $value;       
                    }else{
                        if($the_submissions[$value] == $phn_code){
                            $error[$value] =  $value;     
                        }else{
                            $new_submissions[$value] = sanitize_text_field($the_submissions[$value]);
                        }
                    } 
                }else{
                    if(empty($the_submissions[$value])){
                        $error[$value] =  $value;       
                    }else{
                        $new_submissions[$value] = sanitize_text_field($the_submissions[$value]);
                    }
                }    
            }              
        }
        
        
        if(!empty($error)) {
            $feedback = array(
                'error'   =>  'mixed',
                'errors'  =>  $error
            );
            wp_send_json($feedback);     
        }
        
        
        if ($this->caldsHelper->calds_add_new_call_lead($new_submissions) == true){
            // Send the email notification
            $new_submissions['calds_admin_email'] = $this->adminOptions['adm_email'];
            if ($this->adminOptions['enab_email_notif'] == 1 && !empty($new_submissions['calds_admin_email'])) {
                $this->caldsHelper->calds_send_admin_email_notif($new_submissions);    
            }

            // Send the SMS notification
            if (($this->adminOptions['enab_sms_notif_admin'] == 1 || $this->adminOptions['enab_sms_notif_lead'] == 1) && !empty($this->adminOptions['twilio_id']) && !empty($this->adminOptions['twilio_token']) && !empty($this->adminOptions['twilio_phn_num'])) {
                
                $new_submissions['enab_sms_admin'] = $this->adminOptions['enab_sms_notif_admin'];
                $new_submissions['enab_sms_lead'] = $this->adminOptions['enab_sms_notif_lead'];
                $new_submissions['admin_number'] = $this->adminOptions['phn_num'];
                $new_submissions['twilio_id'] = $this->adminOptions['twilio_id'];
                $new_submissions['twilio_token'] = $this->adminOptions['twilio_token'];
                $new_submissions['twilio_phn_num'] = $this->adminOptions['twilio_phn_num'];
                $new_submissions['calds_text_area_sms'] = $this->adminOptions['calds_text_area_sms'];
                
                $this->caldsHelper->calds_send_admin_sms_notif($new_submissions);    
            } 
            
            if ( !empty($data['calds_text_area_sms'])) {
                $feedback_text = $data['calds_text_area_after_sub'];
            }else {
                $feedback_text = __('Thank you [[name]], we have received your call request for [[cdate]] From: [[cfrom]] To: [[cto]], once it is time, one of our support team will reach out to you.', 'callleads');    
            }
            $break = "\r\n";
            $calds_u_name = (isset($new_submissions['c-inner_cont_name']) && !empty($new_submissions['c-inner_cont_name'])) ? $new_submissions['c-inner_cont_name'] : '';
            $calds_u_email = (isset($new_submissions['c-inner_cont_email']) && !empty($new_submissions['c-inner_cont_email'])) ? $new_submissions['c-inner_cont_email'] : '';
            $calds_u_phone = (isset($new_submissions['c-inner_cont_phone']) && !empty($new_submissions['c-inner_cont_phone'])) ? $new_submissions['c-inner_cont_phone'] : '';
            $calds_u_date = (isset($new_submissions['c-inner_cont_date']) && !empty($new_submissions['c-inner_cont_date'])) ? $new_submissions['c-inner_cont_date'] : '';
            $calds_u_from = (isset($new_submissions['c-inner_cont_time_from']) && !empty($new_submissions['c-inner_cont_time_from'])) ? $new_submissions['c-inner_cont_time_from'] : '';
            $calds_u_to = (isset($new_submissions['c-inner_cont_time_to']) && !empty($new_submissions['c-inner_cont_time_to'])) ? $new_submissions['c-inner_cont_time_to'] : '';
            $formt_feedbk_text = str_replace('[[name]]',$calds_u_name,$feedback_text);
            $formt_feedbk_text = str_replace('[[phone]]',$calds_u_phone,$formt_feedbk_text);
            $formt_feedbk_text = str_replace('[[email]]',$calds_u_email,$formt_feedbk_text);
            $formt_feedbk_text = str_replace('[[cdate]]',$calds_u_date,$formt_feedbk_text);
            $formt_feedbk_text = str_replace('[[cfrom]]',$calds_u_from,$formt_feedbk_text);
            $formt_feedbk_text = str_replace('[[cto]]',$calds_u_to,$formt_feedbk_text);
            $formt_feedbk_text = str_replace('[[linebreak]]',$break,$formt_feedbk_text);
            
            $feedback = array(
                'error'    =>  0,
                'success'  =>  1,
                'message'  =>  $formt_feedbk_text, 
                'redirect' =>  $this->adminOptions['sub_redr_url']
            );  
            wp_send_json($feedback);
            
         }else {
            $feedback = array(
                'error'    =>  1,
                'success'  =>  0,
                'message'  =>  __('Sorry, An Error was encountered when sending your call request, Please try again.', 'callleads'), 
                'redirect' =>  ''
            );  
            wp_send_json($feedback);
        }
        
        
    }
    
    public function calds_column_head( $defaults ) {
        unset( $defaults['title'] );
        unset( $defaults['date'] );
        $defaults['name'] = __( 'Name' , 'callleads' );
        $defaults['email'] = __( 'Email' , 'callleads' );
        $defaults['phone'] = __( 'Phone' , 'callleads' );
        $defaults['call_date'] = __( 'Call Date' , 'callleads' );
        $defaults['time_from'] = __( 'From' , 'callleads' );
        $defaults['date'] = __( 'Date' , 'callleads' ); 
        return $defaults;
    }
    
    public function calds_column_content( $column_name , $postid ) {
        if ( $column_name == 'name' ) {
            if ( !empty( $name = get_post_meta( $postid , 'name' , true ) ) ) {
                echo $name;
            }   
        }
        
        if ( $column_name == 'email' ) {
            if ( !empty( $email = get_post_meta( $postid , 'email' , true ) ) ) {
                echo $email;
            }   
        }
        
        if ( $column_name == 'phone' ) {
            if ( !empty( $phone = get_post_meta( $postid , 'phone' , true ) ) ) {
                echo $phone;
            }   
        }
        
        if ( $column_name == 'call_date' ) {
            if ( !empty( $date = get_post_meta( $postid , 'call_date' , true ) ) ) {
                echo $date;
            }   
        }
        
        if ( $column_name == 'time_from' ) {
            if ( !empty( $time_from = get_post_meta( $postid , 'time_from' , true ) ) ) {
                echo $time_from;
            }   
        }
    }
       
    public function calds_visib_post_ids() {
        if( is_single() || is_page() ) {
            global $post;   
            $postid = $post->ID;
            
            if (!empty($this->adminOptions['visib_post_ids'])) {
                $the_reveal_ids = (explode(",",$this->adminOptions['visib_post_ids']));
                $reveal_icon_on_post =  (in_array( $postid , $the_reveal_ids )) ? true : false; 
                if ($this->adminOptions['in_post_ids'] == 'incl_only' && $reveal_icon_on_post == false) {
                    return true;    
                } 
                
                if ($this->adminOptions['in_post_ids'] == 'excl_only' && $reveal_icon_on_post == true) {
                    return true;
                }
            }
        }   
    }
    
    public function calds_reveal_script() {
        $script = "
                var calds_revealed = getCookie('calds_revealed');
                if ( calds_revealed == '' ) {
                    jQuery(window).bind('scroll' , function(e){
                        var scrollTop = jQuery(window).scrollTop();
                        var docHeight = jQuery(document).height();
                        var winHeight = jQuery(window).height();
                        var scrollPercent = (scrollTop) / (docHeight - winHeight);
                        var scrollPercentRounded = Math.round(scrollPercent*100);

                        if ( scrollPercentRounded >= parseFloat(' {$this->adminOptions['rev_scrl_perc']}') ) {   
                            jQuery('.on_load_icon').click();
                            var calds_revealed_content = 'Call Leads has ben revealed';
                            setCookie('calds_revealed', calds_revealed_content, ".(int)$this->adminOptions['reveal_cookies_dur'].");
                            jQuery(window).unbind('scroll');
                        }

                    });
                }
            "; 
         return $script;
    }
    
    public function calds_exit_intent_script() {
        $script = "
            var calds_exit_intent_shown = getCookie('calds_exit_intent_shown'); 
            if (calds_exit_intent_shown == '') {
                jQuery(document).bind('mousemove' , function(e) {
                   if(e.pageY <= 5 ){
                        jQuery('.on_load_icon').click();
                        var calds_exit_intent_content = 'Call Leads exit intent has been executed';
                        setCookie('calds_exit_intent_shown', calds_exit_intent_content, ".(int)$this->adminOptions['reveal_cookies_dur'].");
                        jQuery(document).unbind('mousemove');
                    }
                });    
            }
        ";
        
        return $script;
    }
    
    public function calds_on_change_time($a='' , $b='') {
        $script = "
            jQuery('.".$a."').each(function(){
                jQuery(this).removeAttr('disabled');
            });
            var selected_optn = jQuery('.".$b.":selected').val();
            jQuery('.".$a."').each(function(){
                if(jQuery(this).val() <=  parseInt(selected_optn)){
                    jQuery(this).attr('disabled' , 'disabled');
                }
            });
        ";
        return $script;
    }
    
    public function calds_load_textdomain() {
        $plugin_dir = 'callleads/lang';
        load_plugin_textdomain( 'callleads' , false, $plugin_dir );
    }
    
}