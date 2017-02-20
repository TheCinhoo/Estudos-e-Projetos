(function($){
    
    jQuery(document).ready(function(){
        
        jQuery('.showMenu').click(function() {
            jQuery('html').toggleClass('menu-open');
        });
        
       jQuery('.item-level1').click(function(){
        
            if(jQuery(this).children('.level2').length && !jQuery('.back-category').hasClass('back-level1')){
                jQuery('.level1').css('transform', 'translateX(-100%)');
                jQuery(this).find(jQuery('.level2')).show();
                jQuery('.back-category').show();
                jQuery('.back-category').addClass('back-level1');
            }
            
        });
        
        jQuery('.item-level2').click(function(){
        
            if(jQuery(this).children('.level3').length && jQuery('.back-category').hasClass('back-level1')){
                jQuery('.level1').css('transform', 'translateX(-200%)');
                jQuery(this).find(jQuery('.level3')).show();
                jQuery('.back-category').addClass('back-level2');
            }
            
        });
        
        
        jQuery('.back-category').click(function() {
            
            if(jQuery(this).hasClass('back-level1') && !jQuery(this).hasClass('back-level2')){
                jQuery('.level1').css('transform', 'translateX(0)');
                jQuery(this).removeClass('back-level1');
                jQuery('.level2').hide();
                jQuery(this).hide();
            }
            
            if(jQuery(this).hasClass('back-level1') && jQuery(this).hasClass('back-level2')){
                jQuery('.level1').css('transform', 'translateX(-100%)');
                jQuery(this).removeClass('back-level2');
                jQuery('.level3').hide();
            }
        });
        
        jQuery('.close-menu-mobile').click(function() {
           jQuery('html').removeClass('menu-open'); 
        }); 
        
    });
  
})(jQuery);
