jQuery(function($){

    $('.color-picker').wpColorPicker();
    
    $(".calds_upload_img").on("click", function(e) {
        e.preventDefault();
        var clicked_uploader = $(this);
        var images = wp.media({
            title: "Upload Image",
            multiple: false
        }).open().on("select", function(e) {
            var uploadedImages = images.state().get("selection").first();
            var selectedImages = uploadedImages.toJSON();

            clicked_uploader.siblings('img').attr( 'src' , selectedImages.url );
            clicked_uploader.siblings('input[type="hidden"]').attr( 'value' , selectedImages.url );
            clicked_uploader.siblings ('.calds_remv_img').fadeIn(1000);

        });
        
    });
    
    $('.calds_remv_img').on("click", function(e) {
        e.preventDefault();
        $(this).siblings('img').attr('src' , '');
        $(this).siblings('input[type="hidden"]').attr( 'value' , '' );
        $(this).fadeOut(1000);
    });
    
    $('.img_load_preview').on("click", function(e) {
        e.preventDefault();
        $('.img_load_preview').removeClass('img_load_preview_bordered');
        $(this).toggleClass('img_load_preview_bordered');
        var this_selected = $(this).siblings('input[type="hidden"]').attr('data-value');       
        $('.img_load_preview').siblings('input[type="hidden"]').attr('value' , '');
        $('.img_load_preview').siblings('input[type="hidden"]').attr('name' , '');
        $(this).siblings('input[type="hidden"]').attr('name' , 'img_load_preview');
        $(this).siblings('input[type="hidden"]').attr('value' , this_selected);
    });
    
    $('#calds_pri_col').change(function(){   
        var str = $( this ).val(); 

        if (str.match(/rgba/g)){
            var splash_shadow = '0 0 0 0 '+str;    
        }else{
            if(str.match(/rgb/g) && !str.match(/rgba/g) ){
                var splash_shadow = '0 0 0 0 '+str.replace("rgb", "rgba").slice(0,-1)+',0.5)'; 
            }else if(str.slice(0, 1) == '#') {
                var splash_shadow = '0 0 0 0 '+hex2rgba_convert(str,50);  

            }else {
                var splash_shadow = '';    
            }    
        }
        $('#animation_splash').val(splash_shadow);
    });
        
    
    $( document ).on( 'submit' , '#calds_admin_datas' , function(e) { 
        e.preventDefault();
        $('.calds_admin_submit i').removeClass('calds_hide_el');
        $('.img_load_preview_bordered').click();
        $('.calds_admin_submit').addClass('disable_click');

        var datas = {  
            'action':              'calds_save_admin_settings',
            'calds_admin_nonce':   $( '#calds_admin_save_nonce' ).val(),
            'submissions':         $( this ).serialize()
        };
        $.ajax({
            type: 'POST',
            url: calds_js_obj.ajax_url,
            data: datas,
            success: function( data ) {
                $('.calds_admin_submit i').addClass('calds_hide_el');
                $('.calds_admin_submit').removeClass('disable_click');
                if ( data.success == 0 ) {
                    $('.calds_admin_feedback').html('<span class="calds_feedbk_error">'+data.feedback+'</span>');
                    $('.calds_feedbk_success').fadeOut(3000);      
                }else {
                    $('.calds_admin_feedback').html('<span class="calds_feedbk_success">'+data.feedback+'</span>');
                    $('.calds_feedbk_success').fadeOut(3000);    
                }
            },
            error: function( xhr,status,error ) {
                $('.calds_admin_submit i').addClass('calds_hide_el');
                $('.calds_admin_submit').removeClass('disable_click');
                $('.calds_admin_feedback').html('<span class="calds_feedbk_error">'+calds_js_obj.admin_feedbak_er+'</span>');
                $('.calds_feedbk_error').fadeOut(3000);
            }
        });                      
    });
    
    function hex2rgba_convert(hex,opacity){
        hex = hex.replace('#','');
        r = parseInt(hex.substring(0,2), 16);
        g = parseInt(hex.substring(2,4), 16);
        b = parseInt(hex.substring(4,6), 16);

        result = 'rgba('+r+','+g+','+b+','+opacity/100+')';
        return result;
    }
    
});