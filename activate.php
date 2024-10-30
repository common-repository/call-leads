<?php

calds_admin_settings_options();

function calds_admin_settings_options() {
    $general_options = get_option( 'calds_admin_settings_options' );
    
    if ( !$general_options ){
       $the_options = array(
           'enable_call_leads'              =>  0,
           'enable_click_to_call'           =>  0,
           'phn_num'                        =>  '',
           'adm_email'                      =>  get_bloginfo('admin_email'),
           'phn_code'                       =>  'US',
           'pri_col'                        =>  '#663399',
           'overlay_bg_col'                 =>  'rgba(0, 0, 0, 0.5)',
           'enable_rtl'                     =>  0,
           
           'img_load_preview'               =>  2,   
           'load_icon_pos'                  =>  'b_right',
           'icon_text_one'                  =>  __('Have a Question?' , 'callleads'),
           'icon_text_two'                  =>  __('Let Us Call You' , 'callleads'),
           'load_icon_img'                  =>  '',
           'enab_icon_anim'                 =>  1,
           'enab_icon_shadow'               =>  0,
           
           'click_el_tit'                   =>  __('Let Us Call You' , 'callleads'), 
           'cl_el_subtit'                   =>  __('We are consistently in service with clients, so we will put a call through as soon as we are on break.' , 'callleads'), 
           'cl_el_btn_txt'                  =>  __('Request a Call Back' , 'callleads'), 
           'cl_el_fotr_txt'                 =>  __('Your personal information will be kept strictly confidential and will not be sold, reused, rented, loaned or otherwise disclosed.' , 'callleads'), 
           'en_dis_el_tit'                  =>  1,
           'en_dis_el_subtit'               =>  1,
           'en_dis_el_date'                 =>  1,
           'en_dis_el_time'                 =>  1,
           'en_dis_el_name'                 =>  1,
           'en_dis_el_email'                =>  1,
           'en_dis_el_phone'                =>  1,
           'en_dis_fotr_txt'                =>  1,
           'on_cl_bg_col'                   =>  '#ffffff',
           'on_cl_bg_img'                   =>  '',
           'on_cl_bg_img_ovr'               =>  '',
            
           'visib_post_ids'                 =>  '',
           'in_post_ids'                  =>  'incl_only',
           'enab_rev_scr'                   =>  0,
           'rev_scrl_perc'                  =>  70,
           'rev_post_id'                    =>  '',
           'enb_exit_intent'                =>  0,
           'exit_intent_post_id'            =>  '',

           'enab_email_notif'               =>  1,

           'enab_sms_notif_admin'           =>  0,
           'twilio_id'                      =>  '',
           'twilio_token'                   =>  '',
           'twilio_phn_num'                 =>  '',
           'enab_sms_notif_lead'            =>  0,
           'calds_text_area_sms'            =>  __('Hello [[name]], we have received your call request for [[cdate]] From: [[cfrom]] To: [[cto]], once it is time, one of our support team will reach out to you.' , 'callleads'),

           'calds_text_area_after_sub'      =>  __('Thank you [[name]], we have received your call request for [[cdate]] From: [[cfrom]] To: [[cto]], once it is time, one of our support team will reach out to you.' , 'callleads'),
           'sub_redr_url'                   =>  '',

           'enb_g_captcha'                  =>  0,
           'g_site_key'                     =>  '',
           'g_secr_key'                     =>  '',
           'reveal_cookies_dur'             =>  3,
           
           'animation_splash'               =>  '0 0 0 0 rgba(102, 51, 153,0.5)'
       ); 
       add_option( 'calds_admin_settings_options' , $the_options );
    }
     
}