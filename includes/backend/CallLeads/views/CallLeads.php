<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
<form action="" method="post" id="calds_admin_datas">
    <?php wp_nonce_field( 'calds_admin_nonce', 'calds_admin_save_nonce' ); ?>
    <input type="hidden" name="animation_splash" id="animation_splash" value="<?php echo ($data['animation_splash']) ? $data_helper->calds_sanitize($data['animation_splash']) : ''; ?>" />
    <div class="c-dashb_cont"> <!--- C dashboard container --->
		<div class="c-dashb_cont_tit_sec"> <!--- C dashboard container title--->
			<div class="c-dashb_cont_tit"><?php _e('Call Leads Settings' , 'callleads'); ?></div>
		</div> <!--- C dashboard container title end--->
		<div class="c-dashb_cont_cont"> <!--- C dashboard container content--->
		
			<div class="c-dashb_sec c-dashb_sec_enable_call_leads"> <!--- C dashboard section enable call leads --->
				<div class="c-dashb_sec_tit">
					<?php _e('Enable Call Leads:' , 'callleads'); ?>
				</div>
				<div class="c-dashb_sec_content">
                    <input type="hidden" name="enable_call_leads" value="0">
					<label class="c-dashb_switch">
					  <input type="checkbox" name="enable_call_leads" id="enable_call_leads" class="enable_call_leads" value="1"  <?php echo ($data['enable_call_leads'] == 1) ? 'checked' : '' ?> >
					  <span class="c-dashb_slider c-dashb_round"></span>
					</label>
				</div>
			</div> <!--- C dashboard section enable wp call lead end--->
			
			<div class="c-dashb_sec c-dashb_sec_pri_color"> <!--- C dashboard section click to call --->
				<div class="c-dashb_sec_tit">
					<?php _e('Click to Call Only:' , 'callleads'); ?>
				</div>
				<div class="c-dashb_sec_content">
				    <input type="hidden" name="enable_click_to_call" value="0">
					<label class="c-dashb_switch">
					  <input type="checkbox" name="enable_click_to_call" id="enable_click_to_call" class="enable_click_to_call" value="1"  <?php echo ($data['enable_click_to_call'] == 1) ? 'checked' : '' ?> >
					  <span class="c-dashb_slider c-dashb_round"></span>
					</label>	  
				</div>
			</div> <!--- C dashboard section click to call end--->
			
			<div class="c-dashb_sec c-dashb_sec_adm_phn_num"> <!--- C dashboard section admin phone number --->
				<div class="c-dashb_sec_tit">
					<?php _e('Admin Phone Number:' , 'callleads'); ?>
				</div>
				<div class="c-dashb_sec_content">
					  <input type="text" name="phn_num" placeholder="" id="phn_num" class="phn_num" value="<?php echo ($data['phn_num']) ? $data_helper->calds_sanitize($data['phn_num']) : ''; ?>">
				</div>
			</div> <!--- C dashboard section admin phone number end--->
			
			<div class="c-dashb_sec c-dashb_sec_adm_email"> <!--- C dashboard section admin email --->
				<div class="c-dashb_sec_tit">
					<?php _e('Admin Email:' , 'callleads'); ?>
				</div>
				<div class="c-dashb_sec_content">
					  <input type="text" name="adm_email" id="adm_email" class="adm_email" value="<?php echo ($data['adm_email']) ? $data_helper->calds_sanitize($data['adm_email']) : ''; ?>">
				</div>
			</div> <!--- C dashboard section admin email end--->
			
			<div class="c-dashb_sec c-dashb_sec_contry_phn_code"> <!--- C dashboard section country phone code --->
				<div class="c-dashb_sec_tit">
					<?php _e('Country phone code:' , 'callleads'); ?>
				</div>
				<div class="c-dashb_sec_content">
                    <select name="phn_code" id="phn_code" class="phn_code">
                        <?php
                            foreach( $data_helper->calds_country_call_code_list() as $key => $value ) {
                                if($data['phn_code'] == $key) {
                                    $selected = 'selected';
                                }else {
                                    $selected = '';
                                } 
                                echo "<option value='$key' {$selected}>{$value['name']} +{$value['code']}</option>";
                            }
                        ?>
                    </select> 
				</div>
			</div> <!--- C dashboard section country phone code end--->
            
            <div class="c-dashb_sec c-dashb_sec_pri_col"> <!--- C dashboard section primary color --->
				<div class="c-dashb_sec_tit">
					<?php _e('Primary Color:' , 'callleads'); ?>
				</div>
				<div class="c-dashb_sec_content">
				    <input type="text" name="pri_col" id="calds_pri_col" class="color-picker" data-alpha="true" value="<?php echo ($data['pri_col']) ? $data_helper->calds_sanitize($data['pri_col']) : ''; ?>">	  
				</div>
			</div> <!--- C dashboard section primary color end--->
            
            <div class="c-dashb_sec c-dashb_sec_ovrly_bg_col"> <!--- C dashboard section overlay background color --->
				<div class="c-dashb_sec_tit">
					<?php _e('Overlay Background Color:' , 'callleads'); ?>
				</div>
				<div class="c-dashb_sec_content">
				    <input type="text" name="overlay_bg_col" id="overlay_bg_col" class="color-picker" data-alpha="true" value="<?php echo ($data['overlay_bg_col']) ? $data_helper->calds_sanitize($data['overlay_bg_col']) : ''; ?>">	  
				</div>
			</div> <!--- C dashboard section overlay background color end--->
			
			<div class="c-dashb_sec c-dashb_sec_rtl"> <!--- C dashboard section enable rtl --->
				<div class="c-dashb_sec_tit">
					<?php _e('Enable RTL:' , 'callleads'); ?>
				</div>
				<div class="c-dashb_sec_content">
                    <input type="hidden" name="enable_rtl" value="0">
					<label class="c-dashb_switch">
					  <input type="checkbox" name="enable_rtl" id="enable_rtl" class="enable_rtl" value="1" <?php echo ($data['enable_rtl'] == 1) ? 'checked' : ''; ?>>
					  <span class="c-dashb_slider c-dashb_round"></span>
					</label>
				</div>
			</div> <!--- C dashboard section enable rtl end--->
			
			<div class="c-dashb_sec"><h2 class="c-dashb_sectn_tit"><?php _e('On Load Settings' , 'callleads'); ?></h2></div>
			
			<div class="c-dashb_sec c-dashb_sec_on_load_view"> <!--- C dashboard section on load view --->
				<div class="c-dashb_sec_tit">
					<?php _e('On Load View:' , 'callleads'); ?>
				</div>
				<div class="c-dashb_sec_content">
					<div class="c-on_load_icons c-clear_fix">
						<div class="c-on_load_icon c-on_load_icon_one">
							<div class="c-on_load_icon_img_cont">
                                <img src="<?php echo CALDS_PLUGIN_URL.'assets/img/just_icon.png'; ?>" class="img_load_preview <?php echo ($data['img_load_preview'] == 1) ? 'img_load_preview_bordered' : '' ; ?>" />
                                <input type="hidden" name="img_load_preview" data-value="1" value="<?php echo ($data['img_load_preview'] == 1) ? 1 : '' ; ?>" />
                            </div>
						</div>
						<div class="c-on_load_icon c-on_load_icon_two">
							<div class="c-on_load_icon_img_cont">
                                <img src="<?php echo CALDS_PLUGIN_URL.'assets/img/icon_with_icon.png'; ?>" class="img_load_preview <?php echo ($data['img_load_preview'] == 2) ? 'img_load_preview_bordered' : '' ; ?>" />
                                <input type="hidden" name="img_load_preview" data-value="2" value="<?php echo ($data['img_load_preview'] == 2) ? 2 : '' ; ?>" />
                            </div>
						</div>
						<div class="c-on_load_icon c-on_load_icon_three">
							<div class="c-on_load_icon_img_cont">
                                <img src="<?php echo CALDS_PLUGIN_URL.'assets/img/icon_with_image.png'; ?>" class="img_load_preview <?php echo ($data['img_load_preview'] == 3) ? 'img_load_preview_bordered' : '' ; ?>" />
                                <input type="hidden" name="img_load_preview" data-value="3" value="<?php echo ($data['img_load_preview'] == 3) ? 3 : '' ; ?>" />
                            </div>
						</div>
                        <div class="c-on_load_icon c-on_load_icon_four">
							<div class="c-on_load_icon_img_cont">
                                <img src="<?php echo CALDS_PLUGIN_URL.'assets/img/icon_with_text.png'; ?>" class="img_load_preview <?php echo ($data['img_load_preview'] == 4) ? 'img_load_preview_bordered' : '' ; ?>" />
                                <input type="hidden" name="img_load_preview" data-value="4" value="<?php echo ($data['img_load_preview'] == 4) ? 4 : '' ; ?>" />
                            </div>
						</div>
					</div>
				</div>
			</div> <!--- C dashboard section on load view end--->
			
			<div class="c-dashb_sec c-dashb_sec_icon_pos"> <!--- C dashboard section on load icon position --->
				<div class="c-dashb_sec_tit">
					<?php _e('On Load Icon position:' , 'callleads'); ?>
				</div>
				<div class="c-dashb_sec_content">
                    <select name="load_icon_pos" id="load_icon_pos" class="load_icon_pos">
                        <?php
                            foreach( $data_helper->calds_icon_pos() as $key => $value ) {
                                if($data['load_icon_pos'] == $key) {
                                    $selected = 'selected';
                                }else {
                                    $selected = '';
                                } 
                                echo "<option value='$key' {$selected}>{$value}</option>";
                            }
                        ?>
                    </select>
				</div>
			</div> <!--- C dashboard section on load icon position end--->
			
			<div class="c-dashb_sec c-dashb_sec_icon_text_one"> <!--- C dashboard section icon text one --->
				<div class="c-dashb_sec_tit">
					<?php _e('On Load Icon Text one:' , 'callleads'); ?>
				</div>
				<div class="c-dashb_sec_content">
					  <input type="text" name="icon_text_one" id="icon_text_one" class="icon_text_one" value="<?php echo ($data['icon_text_one']) ? $data_helper->calds_sanitize($data['icon_text_one']) : ''; ?>">
				</div>
			</div> <!--- C dashboard section icon text one end--->
			
			<div class="c-dashb_sec c-dashb_sec_icon_text_two"> <!--- C dashboard section icon text two --->
				<div class="c-dashb_sec_tit">
					<?php _e('On Load Icon Text two:' , 'callleads'); ?>
				</div>
				<div class="c-dashb_sec_content">
					  <input type="text" name="icon_text_two" id="icon_text_two" class="icon_text_two" value="<?php echo ($data['icon_text_two']) ? $data_helper->calds_sanitize($data['icon_text_two']) : ''; ?>">
				</div>
			</div> <!--- C dashboard section icon text two end--->
			
			<div class="c-dashb_sec c-dashb_sec_load_icon_img"> <!--- C dashboard section on load icon img --->
				<div class="c-dashb_sec_tit">
					<?php _e('On Load Icon Image:' , 'callleads'); ?>
				</div>
				<div class="c-dashb_sec_content">
				    <input type="button" id="d_ovrly_bg_img" class="calds_upload_img" value="Upload Image">                 
                    <input type="button" id="remove_image_d" class="calds_remv_img" value="Remove Image" <?php echo empty($data['load_icon_img']) ? 'style="display: none;"' : ''; ?>>    
                    <img src="<?php echo ($data['load_icon_img']) ? $data_helper->calds_sanitize($data['load_icon_img']) : ''; ?>" width="100px" height="auto" class="calds_img_preview" >	 
                    <input type="hidden" name="load_icon_img" id="load_icon_img" class="load_icon_img" value="<?php echo ($data['load_icon_img']) ? $data_helper->calds_sanitize($data['load_icon_img']) : ''; ?>">
				</div>
			</div> <!--- C dashboard section on load icon img end--->
			
			<div class="c-dashb_sec c-dashb_sec_enab_icon_anim"> <!--- C dashboard section enable icon animation --->
				<div class="c-dashb_sec_tit">
					<?php _e('Enable Icon Animation:' , 'callleads'); ?>
				</div>
				<div class="c-dashb_sec_content">
                    <input type="hidden" name="enab_icon_anim" value="0">
					<label class="c-dashb_switch">
					  <input type="checkbox" name="enab_icon_anim" id="enab_icon_anim" class="enab_icon_anim" value="1" <?php echo ($data['enab_icon_anim'] == 1) ? 'checked' : ''; ?>>
					  <span class="c-dashb_slider c-dashb_round"></span>
					</label>
				</div>
			</div> <!--- C dashboard section enable icon animation end--->
			
			<div class="c-dashb_sec c-dashb_sec_enab_icon_shadow"> <!--- C dashboard section enable icon box shadow --->
				<div class="c-dashb_sec_tit">
					<?php _e('Enable Icon Box Shadow:' , 'callleads'); ?>
				</div>
				<div class="c-dashb_sec_content">
                    <input type="hidden" name="enab_icon_shadow" value="0">
					<label class="c-dashb_switch">
					  <input type="checkbox" name="enab_icon_shadow" id="enab_icon_shadow" class="enab_icon_shadow" value="1" <?php echo ($data['enab_icon_shadow'] == 1) ? 'checked' : ''; ?>>
					  <span class="c-dashb_slider c-dashb_round"></span>
					</label>
				</div>
			</div> <!--- C dashboard section enable icon box shadow end--->
			
			<div class="c-dashb_sec"><h2 class="c-dashb_sectn_tit"><?php _e('On Click Settings' , 'callleads'); ?></h2></div>
			
			<div class="c-dashb_sec c-dashb_sec_on_click_el_tit"> <!--- C dashboard section on click title --->
				<div class="c-dashb_sec_tit">
					<?php _e('On Click Element Title:' , 'callleads'); ?>
				</div>
				<div class="c-dashb_sec_content">
					  <input type="text" name="click_el_tit" id="click_el_tit" class="click_el_tit" value="<?php echo ($data['click_el_tit']) ?  $data_helper-> calds_sanitize($data['click_el_tit']) : ''; ?>">
				</div>
			</div> <!--- C dashboard section on click title end--->
			
			<div class="c-dashb_sec c-dashb_sec_on_cl_el_subtit"> <!--- C dashboard section on click subtitle --->
				<div class="c-dashb_sec_tit">
					<?php _e('On Click Element SubTitle:' , 'callleads'); ?>
				</div>
				<div class="c-dashb_sec_content">
					  <input type="text" name="cl_el_subtit" id="cl_el_subtit" class="cl_el_subtit" value="<?php echo ($data['cl_el_subtit']) ? $data_helper->calds_sanitize($data['cl_el_subtit']) : ''; ?>">
				</div>
			</div> <!--- C dashboard section on click subtitle end--->
			
			<div class="c-dashb_sec c-dashb_sec_on_cl_el_btn_txt"> <!--- C dashboard section on click element btn text --->
				<div class="c-dashb_sec_tit">
					<?php _e('On Click Element button text:' , 'callleads'); ?>
				</div>
				<div class="c-dashb_sec_content">
					  <input type="text" name="cl_el_btn_txt" id="cl_el_btn_txt" class="cl_el_btn_txt" value="<?php echo ($data['cl_el_btn_txt']) ? $data_helper->calds_sanitize($data['cl_el_btn_txt']) : ''; ?>">
				</div>
			</div> <!--- C dashboard section on click element btn text end--->
            
            <div class="c-dashb_sec c-dashb_sec_on_cl_el_ftr_txt"> <!--- C dashboard section on click element footer text --->
				<div class="c-dashb_sec_tit">
					<?php _e('On Click Element Footer text:' , 'callleads'); ?>
				</div>
				<div class="c-dashb_sec_content">
					  <input type="text" name="cl_el_fotr_txt" id="cl_el_fotr_txt" class="cl_el_fotr_txt" value="<?php echo ($data['cl_el_fotr_txt']) ? $data_helper->calds_sanitize($data['cl_el_fotr_txt']) : ''; ?>">
				</div>
			</div> <!--- C dashboard section on click element footer text end--->
			
			<div class="c-dashb_sec c-dashb_sec_en_dis_el"> <!--- C dashboard section enable and disable element --->
				<div class="c-dashb_sec_tit">
					<?php _e('Enable / Disable Element:' , 'callleads'); ?>
				</div>
				<div class="c-dashb_sec_content">
					<div class="c-dashb_en_el">
                        <input type="hidden" name="en_dis_el_tit" value="0">
						<label class="c-dashb_switch">
						  <input type="checkbox" name="en_dis_el_tit" id="en_dis_el_tit" class="en_dis_el_tit" value="1" <?php echo ($data['en_dis_el_tit'] == 1) ? 'checked' : ''; ?>>
						  <span class="c-dashb_slider c-dashb_round"></span>
						</label>
						<span><?php _e('Title' , 'callleads'); ?></span>
					</div>
					<div class="c-dashb_en_el">
                        <input type="hidden" name="en_dis_el_subtit" value="0">
						<label class="c-dashb_switch">
						  <input type="checkbox" name="en_dis_el_subtit" id="en_dis_el_subtit" class="en_dis_el_subtit" value="1" <?php echo ($data['en_dis_el_subtit'] == 1) ? 'checked' : ''; ?>>
						  <span class="c-dashb_slider c-dashb_round"></span>
						</label>
						<span><?php _e('SubTitle' , 'callleads'); ?></span>
					</div>
					<div class="c-dashb_en_el">
                        <input type="hidden" name="en_dis_el_date" value="0">
						<label class="c-dashb_switch">
						  <input type="checkbox" name="en_dis_el_date" id="en_dis_el_date" class="en_dis_el_date" value="1" <?php echo ($data['en_dis_el_date'] == 1) ? 'checked' : ''; ?>>
						  <span class="c-dashb_slider c-dashb_round"></span>
						</label>
						<span><?php _e('Date Field' , 'callleads'); ?></span>
					</div>
					<div class="c-dashb_en_el">
                        <input type="hidden" name="en_dis_el_time" value="0">
						<label class="c-dashb_switch">
						  <input type="checkbox" name="en_dis_el_time" id="en_dis_el_time" class="en_dis_el_time" value="1" <?php echo ($data['en_dis_el_time'] == 1) ? 'checked' : ''; ?>>
						  <span class="c-dashb_slider c-dashb_round"></span>
						</label>
						<span><?php _e('Time Field' , 'callleads'); ?></span>
					</div>
					<div class="c-dashb_en_el">
                        <input type="hidden" name="en_dis_el_name" value="0">
						<label class="c-dashb_switch">
						  <input type="checkbox" name="en_dis_el_name" id="en_dis_el_name" class="en_dis_el_name" value="1" <?php echo ($data['en_dis_el_name'] == 1) ? 'checked' : ''; ?>>
						  <span class="c-dashb_slider c-dashb_round"></span>
						</label>
						<span><?php _e('Name Field' , 'callleads'); ?></span>
					</div>
					<div class="c-dashb_en_el">
                        <input type="hidden" name="en_dis_el_email" value="0">
						<label class="c-dashb_switch">
						  <input type="checkbox" name="en_dis_el_email" id="en_dis_el_email" class="en_dis_el_email" value="1" <?php echo ($data['en_dis_el_email'] == 1) ? 'checked' : ''; ?>>
						  <span class="c-dashb_slider c-dashb_round"></span>
						</label>
						<span><?php _e('Email Field' , 'callleads'); ?></span>
					</div>
					<div class="c-dashb_en_el">
                        <input type="hidden" name="en_dis_el_phone" value="0">
						<label class="c-dashb_switch">
						  <input type="checkbox" name="en_dis_el_phone" id="en_dis_el_phone" class="en_dis_el_phone" value="1" <?php echo ($data['en_dis_el_phone'] == 1) ? 'checked' : ''; ?>>
						  <span class="c-dashb_slider c-dashb_round"></span>
						</label>
						<span><?php _e('Phone Field' , 'callleads'); ?></span>
					</div>
                    <div class="c-dashb_en_el">
                        <input type="hidden" name="en_dis_fotr_txt" value="0">
						<label class="c-dashb_switch">
						  <input type="checkbox" name="en_dis_fotr_txt" id="en_dis_fotr_txt" class="en_dis_fotr_txt" value="1" <?php echo ($data['en_dis_fotr_txt'] == 1) ? 'checked' : ''; ?>>
						  <span class="c-dashb_slider c-dashb_round"></span>
						</label>
						<span><?php _e('Footer Text' , 'callleads'); ?></span>
					</div>
				</div>
			</div> <!--- C dashboard section enable and disable element end--->
			
			<div class="c-dashb_sec c-dashb_sec_on_cl_bg_col"> <!--- C dashboard section on click element bg color --->
				<div class="c-dashb_sec_tit">
					<?php _e('On Click Element Background Color:' , 'callleads'); ?>
				</div>
				<div class="c-dashb_sec_content">
				    <input type="text" name="on_cl_bg_col" id="on_cl_bg_col" class="on_cl_bg_col color-picker" data-alpha="true" value="<?php echo ($data['on_cl_bg_col']) ? $data_helper->calds_sanitize($data['on_cl_bg_col']) : ''; ?>">	  
				</div>
			</div> <!--- C dashboard section on click element bg color end--->
			
			<div class="c-dashb_sec c-dashb_sec_on_cl_bg_img"> <!--- C dashboard section on click element bg img --->
				<div class="c-dashb_sec_tit">
					<?php _e('On Click Element Background Image:' , 'callleads'); ?>
				</div>
				<div class="c-dashb_sec_content">
				    <input type="button" id="d_ovrly_bg_img" class="calds_upload_img" value="Upload Image">                 
                    <input type="button" id="remove_image_d" class="calds_remv_img" value="Remove Image" <?php echo empty($data['on_cl_bg_img']) ? 'style="display: none;"' : ''; ?>>    
                    <img src="<?php echo ($data['on_cl_bg_img']) ? $data_helper->calds_sanitize($data['on_cl_bg_img']) : ''; ?>" alt="" width="100px" height="auto" class="calds_img_preview" >	 
                    <input type="hidden" name="on_cl_bg_img" id="on_cl_bg_img" class="on_cl_bg_img" value="<?php echo ($data['on_cl_bg_img']) ? $data_helper->calds_sanitize($data['on_cl_bg_img']) : ''; ?>">	  
				</div>
			</div> <!--- C dashboard section on click element bg img end--->
			
			<div class="c-dashb_sec c-dashb_sec_on_cl_bg_img_ovr "> <!--- C dashboard section on click element bg img ovr --->
				<div class="c-dashb_sec_tit">
					<?php _e('On Click Element Background overlay:' , 'callleads'); ?>
				</div>
				<div class="c-dashb_sec_content">
				    <input type="text" name="on_cl_bg_img_ovr" id="on_cl_bg_img_ovr" class="on_cl_bg_img_ovr color-picker" data-alpha="true" value="<?php echo ($data['on_cl_bg_img_ovr']) ? $data_helper->calds_sanitize($data['on_cl_bg_img_ovr']) : ''; ?>">	  
				</div>
			</div> <!--- C dashboard section on click element bg img ovr end--->
			
			<div class="c-dashb_sec"><h2 class="c-dashb_sectn_tit"><?php _e('Icon Visibility Settings and Triggers' , 'callleads'); ?></h2></div>
			
			<div class="c-dashb_sec c-dashb_sec_post_ids"> <!--- C dashboard section post ids --->
				<div class="c-dashb_sec_tit">
					<?php _e('Post ID(s):' , 'callleads'); ?>
				</div>
				<div class="c-dashb_sec_content">
					  <input type="text" name="visib_post_ids" id="visib_post_ids" class="visib_post_ids" value="<?php echo ($data['visib_post_ids']) ? $data_helper->calds_sanitize($data['visib_post_ids']) : ''; ?>"> <br />
					  <em><?php _e('Enter post id separated by commas where you want the call request icon to show or excluded, leave blank to show on all pages.' , 'callleads'); ?></em><br /><br />
					  <label>
						<input type="radio" name="in_post_ids" value="incl_only" <?php echo ($data['in_post_ids'] == 'incl_only') ? 'checked' : ''; ?>> 
						<span class=""><?php _e('Show icon for pages or posts with the following id(s)' , 'callleads'); ?></span>
					  </label><br />
					  <label>
						<input type="radio" name="in_post_ids" value="excl_only" <?php echo ($data['in_post_ids'] == 'excl_only') ? 'checked' : ''; ?>> 
						<span class=""><?php _e('Exclude icon for pages or posts with the following id(s)' , 'callleads'); ?></span>
					  </label><br />
				</div>
			</div> <!--- C dashboard section post ids end--->
			
			<div class="c-dashb_sec c-dashb_sec_enab_rev_scr"> <!--- C dashboard section enable reveal on scroll --->
				<div class="c-dashb_sec_tit">
					<?php _e('Enable reveal on scroll:' , 'callleads'); ?>
				</div>
				<div class="c-dashb_sec_content">
                    <input type="hidden" name="enab_rev_scr" value="0">
				    <label class="c-dashb_switch">
					  <input type="checkbox" name="enab_rev_scr" id="enab_rev_scr" class="enab_rev_scr" value="1" <?php echo ($data['enab_rev_scr'] == 1) ? 'checked' : ''; ?>>
					  <span class="c-dashb_slider c-dashb_round"></span>
					</label><br>
					<span><em><?php _e('Check to trigger call request overlay display on website scroll.' , 'callleads'); ?></em></span>
					<br><br>
                    <label><?php _e('Scroll percent:' , 'callleads'); ?></label><input name="rev_scrl_perc" type="number" value="<?php echo ($data['rev_scrl_perc']) ? $data_helper->calds_sanitize($data['rev_scrl_perc']) : ''; ?>" class="regular-text"><br><br>
                    <label><?php _e('Post ID(s):' , 'callleads'); ?> </label>
                    <input name="rev_post_id" type="text" value="<?php echo ($data['rev_post_id']) ? $data_helper->calds_sanitize($data['rev_post_id']) : ''; ?>" class="regular-text"><br>
                    <span><em><?php _e('Enter post id separated by commas.' , 'callleads'); ?></em></span>
				</div>
			</div> <!--- C dashboard section enable reveal on scroll end--->
			
			<div class="c-dashb_sec c-dashb_sec_enab_exit_int"> <!--- C dashboard section enable exit intent --->
				<div class="c-dashb_sec_tit">
					<?php _e('Enable exit intent:' , 'callleads'); ?>
				</div>
				<div class="c-dashb_sec_content">
                    <input type="hidden" name="enb_exit_intent" value="0">
				    <label class="c-dashb_switch">
					  <input type="checkbox" name="enb_exit_intent" id="enb_exit_intent" class="enb_exit_intent" value="1" <?php echo ($data['enb_exit_intent'] == 1) ? 'checked' : ''; ?>>
					  <span class="c-dashb_slider c-dashb_round"></span>
					</label><br>
					<span><em><?php _e('Check to trigger call request overlay display on website exit.' , 'callleads'); ?></em></span>
					<br><br>
                    <label><?php _e('Post ID(s):' , 'callleads'); ?> </label>
                    <input name="exit_intent_post_id" type="text" value="<?php echo ($data['exit_intent_post_id']) ? $data_helper->calds_sanitize($data['exit_intent_post_id']) : ''; ?>" class="regular-text"><br>
                    <span><em><?php _e('Enter post id separated by commas.' , 'callleads'); ?></em></span>
				</div>
			</div> <!--- C dashboard section exit intent end--->
			
			<div class="c-dashb_sec c-dashb_sec_click_trig"> <!--- C dashboard section on click trigger --->
				<div class="c-dashb_sec_tit">
					<?php _e('On Click trigger:' , 'callleads'); ?>
				</div>
				<div class="c-dashb_sec_content">
					<label>
                        <p class="wpcm_on_click" style="margin-bottom:5px;">calds_trigger_overlay</p>
                        <em><?php _e('Copy the class above and add it to the element class you want the overlay to be shown when clicked.' , 'callleads'); ?></em>
                    </label>
				</div>
			</div> <!--- C dashboard section on click trigger end--->
			
			<div class="c-dashb_sec"><h2 class="c-dashb_sectn_tit"><?php _e('Email Notification Settings' , 'callleads'); ?></h2></div>
			
			<div class="c-dashb_sec c-dashb_sec_enab_email_notif"> <!--- C dashboard section enable email notification --->
				<div class="c-dashb_sec_tit">
					<?php _e('Enable Email Notification:' , 'callleads'); ?>
				</div>
				<div class="c-dashb_sec_content">
                    <input type="hidden" name="enab_email_notif" value="0">
					<label class="c-dashb_switch">
					  <input type="checkbox" name="enab_email_notif" id="enab_email_notif" class="enab_email_notif" value="1" <?php echo ($data['enab_email_notif'] == 1) ? 'checked' : ''; ?>>
					  <span class="c-dashb_slider c-dashb_round"></span>
					</label>
				</div>
			</div> <!--- C dashboard section enable email notification end--->
			
			<div class="c-dashb_sec"><h2 class="c-dashb_sectn_tit"><?php _e('SMS Notification Settings' , 'callleads'); ?></h2></div>
			
			<div class="c-dashb_sec c-dashb_sec_enab_sms_notif_admin"> <!--- C dashboard section enable sms notification for admin--->
				<div class="c-dashb_sec_tit">
					<?php _e('Enable SMS Notification for Admin:' , 'callleads'); ?>
				</div>
				<div class="c-dashb_sec_content">
                    <input type="hidden" name="enab_sms_notif_admin" value="0">
					<label class="c-dashb_switch">
					  <input type="checkbox" name="enab_sms_notif_admin" id="enab_sms_notif" class="enab_sms_notif_admin" value="1" <?php echo ($data['enab_sms_notif_admin'] == 1) ? 'checked' : ''; ?>>
					  <span class="c-dashb_slider c-dashb_round"></span>
					</label>
				</div>
			</div> <!--- C dashboard section enable sms notification for admin end--->
			
			<div class="c-dashb_sec c-dashb_sec_twilio_id"> <!--- C dashboard section twilio id --->
				<div class="c-dashb_sec_tit">
					<?php _e('Twilio id:' , 'callleads'); ?>
				</div>
				<div class="c-dashb_sec_content">
					  <input type="text" name="twilio_id" id="twilio_id" class="twilio_id" value="<?php echo ($data['twilio_id']) ? $data_helper->calds_sanitize($data['twilio_id']) : ''; ?>">
				</div>
			</div> <!--- C dashboard section twilio id end--->
			
			<div class="c-dashb_sec c-dashb_sec_twilio_token"> <!--- C dashboard section twilio_token --->
				<div class="c-dashb_sec_tit">
					<?php _e('Twilio token:' , 'callleads'); ?>
				</div>
				<div class="c-dashb_sec_content">
					  <input type="text" name="twilio_token" id="twilio_token" class="twilio_token" value="<?php echo ($data['twilio_token']) ? $data_helper->calds_sanitize($data['twilio_token']) : ''; ?>">
				</div>
			</div> <!--- C dashboard section twilio_token end--->
			
			<div class="c-dashb_sec c-dashb_sec_twilio_phn_num"> <!--- C dashboard section twilio phone number --->
				<div class="c-dashb_sec_tit">
					<?php _e('Twilio Phone Number:' , 'callleads'); ?>
				</div>
				<div class="c-dashb_sec_content">
					  <input type="text" name="twilio_phn_num" id="twilio_phn_num" class="twilio_phn_num" value="<?php echo ($data['twilio_phn_num']) ? $data_helper->calds_sanitize($data['twilio_phn_num']) : ''; ?>">
				</div>
			</div> <!--- C dashboard section twilio phone number end--->
            
            <div class="c-dashb_sec c-dashb_sec_enab_sms_notif_lead"> <!--- C dashboard section enable sms notification for lead--->
				<div class="c-dashb_sec_tit">
					<?php _e('Enable SMS Notification for Lead:' , 'callleads'); ?>
				</div>
				<div class="c-dashb_sec_content">
                    <input type="hidden" name="enab_sms_notif_lead" value="0">
					<label class="c-dashb_switch">
					  <input type="checkbox" name="enab_sms_notif_lead" id="enab_sms_notif" class="enab_sms_notif_lead" value="1" <?php echo ($data['enab_sms_notif_lead'] == 1) ? 'checked' : ''; ?>>
					  <span class="c-dashb_slider c-dashb_round"></span>
					</label>
				</div>
			</div> <!--- C dashboard section enable sms notification end for lead--->
			
			<div class="c-dashb_sec c-dashb_sec_sms_notif_lead"> <!--- C dashboard section sms notification msg to lead --->
				<div class="c-dashb_sec_tit">
					<?php _e('SMS Notification Message to Lead:' , 'callleads'); ?>
				</div>
				<div class="c-dashb_sec_content">
					<?php 
                        ($data['calds_text_area_sms']) ? $my_content = $data_helper->calds_sanitize($data['calds_text_area_sms']) : $my_content = ''; 
                        wp_editor($my_content,"calds_text_area_sms", array(
                            'textarea_rows'=>8
                        )); 
                    ?>
                    <small>The following Shortcodes are available and can be used in the field above: [[name]] [[cdate]] [[cfrom]] [[cto]] </small>
				</div>
			</div> <!--- C dashboard section sms notification msg to lead end--->
            
            <div class="c-dashb_sec"><h2 class="c-dashb_sectn_tit"><?php _e('After Submittion Settings' , 'callleads'); ?></h2></div>
            
            <div class="c-dashb_sec c-dashb_sec_aft_sub_msg"> <!--- C dashboard section after form submission msg --->
				<div class="c-dashb_sec_tit">
					<?php _e('After Form Submission Message:' , 'callleads'); ?>
				</div>
				<div class="c-dashb_sec_content">
					<?php 
                        ($data['calds_text_area_after_sub']) ? $my_content = $data_helper->calds_sanitize($data['calds_text_area_after_sub']) : $my_content = ''; 
                        wp_editor($my_content,"calds_text_area_after_sub", array(
                            'textarea_rows'=>8
                        )); 
                    ?>
                    <small>The following Shortcodes are available and can be used in the field above: [[name]] [[cdate]] [[cfrom]] [[cto]] </small>
				</div>
			</div> <!--- C dashboard section after form submission msg end--->
            
            <div class="c-dashb_sec c-dashb_sec_twilio_id"> <!--- C dashboard section after submission redirect --->
				<div class="c-dashb_sec_tit">
					<?php _e('After Submission Redirect URL:' , 'callleads'); ?>
				</div>
				<div class="c-dashb_sec_content">
					  <input type="text" name="sub_redr_url" id="sub_redr_url" class="sub_redr_url" value="<?php echo ($data['sub_redr_url']) ? esc_url($data['sub_redr_url']) : ''; ?>">
				</div>
			</div> <!--- C dashboard section after submission redirect end--->
			
			<div class="c-dashb_sec"><h2 class="c-dashb_sectn_tit"><?php _e('Spam Protection' , 'callleads'); ?></h2></div>
			
			<div class="c-dashb_sec c-dashb_sec_enab_gog_capt"> <!--- C dashboard section enable google captcha --->
				<div class="c-dashb_sec_tit">
					<?php _e('Enable Google Captcha:' , 'callleads'); ?>
				</div>
				<div class="c-dashb_sec_content">
                    <input type="hidden" name="enb_g_captcha" value="0">
					<label class="c-dashb_switch">
					  <input type="checkbox" name="enb_g_captcha" id="enb_g_captcha" class="enb_g_captcha" value="1" <?php echo ($data['enb_g_captcha'] == 1) ? 'checked' : ''; ?>>
					  <span class="c-dashb_slider c-dashb_round"></span>
					</label>
				</div>
			</div> <!--- C dashboard section enable google captcha end--->
			
			<div class="c-dashb_sec c-dashb_sec_site_key"> <!--- C dashboard section captcha site key --->
				<div class="c-dashb_sec_tit">
					<?php _e('Site Key:' , 'callleads'); ?>
				</div>
				<div class="c-dashb_sec_content">
					  <input type="text" name="g_site_key" id="g_site_key" class="g_site_key" value="<?php echo ($data['g_site_key']) ? $data_helper->calds_sanitize($data['g_site_key']) : ''; ?>">
				</div>
			</div> <!--- C dashboard section captcha site key end--->
			
			<div class="c-dashb_sec c-dashb_sec_secret_key"> <!--- C dashboard section captcha secret key --->
				<div class="c-dashb_sec_tit">
					<?php _e('Secret Key:' , 'callleads'); ?>
				</div>
				<div class="c-dashb_sec_content">
					  <input type="text" name="g_secr_key" id="g_secr_key" class="g_secr_key" value="<?php echo ($data['g_secr_key']) ? $data_helper->calds_sanitize($data['g_secr_key']) : ''; ?>">
				</div>
			</div> <!--- C dashboard section captcha secret key end--->
			
			<div class="c-dashb_sec c-dashb_sec_cooki_dur"> <!--- C dashboard section form cookies duration --->
				<div class="c-dashb_sec_tit">
					<?php _e('Form Display Cookies intervals:' , 'callleads'); ?>
				</div>
				<div class="c-dashb_sec_content">
                    <select name="reveal_cookies_dur" id="reveal_cookies_dur" class="reveal_cookies_dur">
                        <?php
                            foreach( $data_helper->calds_cookies_time() as $key => $value ) {
                                if($data['reveal_cookies_dur'] == $key) {
                                    $selected = 'selected';
                                }else {
                                    $selected = '';
                                } 
                                echo "<option value='$key' {$selected}>{$value}</option>";
                            }
                        ?>
                    </select>
				</div>
			</div> <!--- C dashboard section form cookies duration end--->
			
            <div>
                <button type="submit" class="calds_admin_submit">
                    <span>
                        <?php _e('Submit' , 'callleads'); ?>
                        <i class="demo-icon icon-spinner spin-anim calds_hide_el"></i>
                    </span> 
                </button>
                <div class="calds_admin_feedback"></div>
            </div>
		</div> <!--- C dashboard container content end--->
	</div>
</form>    