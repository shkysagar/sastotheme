<?php

if(!function_exists('magikCreta_product_pagebanner'))
{
function magikCreta_product_pagebanner()
{
    global $creta_Options;
if (isset($creta_Options['product_banner']) && !empty($creta_Options['product_banner']['url']))
 {?>
 <div class="product-banner-box">
  <a href="<?php echo !empty($creta_Options['product_banner_url']) ? esc_url($creta_Options['product_banner_url']) : '#' ?>">                 
 <img src="<?php echo esc_url($creta_Options['product_banner']['url']); ?>" alt="<?php esc_attr_e('Product Banner', 'creta'); ?>">
   </a> 
  </div>          
<?php }
}
}

if(!function_exists('magikCreta_product_social_share'))
{
function magikCreta_product_social_share()
{
global $creta_Options;
if(isset($creta_Options['enable_product_socialshare']) && !empty($creta_Options['enable_product_socialshare']))
 {

$sharing_facebook = isset($creta_Options['social_facebook']) ? $creta_Options['social_facebook'] : 0;
$sharing_twitter = isset($creta_Options['social_twitter']) ? $creta_Options['social_twitter'] : 0;
$sharing_google = isset($creta_Options['social_googlep']) ? $creta_Options['social_googlep'] : 0;
$sharing_linkedin = isset($creta_Options['social_linkedin']) ? $creta_Options['social_linkedin'] : 0;
$sharing_pinterest = isset($creta_Options['social_pinterest']) ? $creta_Options['social_pinterest'] : 0;


if (!empty($sharing_facebook) ||
!empty($sharing_twitter) ||
!empty($sharing_linkedin) ||
!empty($sharing_google) ||
!empty($sharing_pinterest)
) :
?>
    <div class="social">
                            <ul>
            <?php if (!empty($sharing_facebook)) : ?>
                <li class="fb pull-left">
                    <a onclick="window.open('https://www.facebook.com/sharer.php?s=100&amp;p[url]=<?php echo esc_html(urlencode(get_permalink()));?>','sharer', 'toolbar=0,status=0,width=620,height=280');"  href="javascript:;">
                      
                    </a>
                </li>
            <?php endif; ?>

            <?php if (!empty($sharing_twitter)) :  ?>
                <li class="tw pull-left">
                    <a onclick="popUp=window.open('http://twitter.com/home?status=<?php echo esc_html(urlencode(get_the_title())); ?> <?php echo esc_html(urlencode(get_permalink())); ?>','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;"  href="javascript:;">
                     
                    </a>
                </li>
            <?php endif; ?>

            <?php if (!empty($sharing_google)) :  ?>
                <li class="googleplus pull-left">
               <a href="javascript:;" onclick="popUp=window.open('https://plus.google.com/share?url=<?php echo esc_html(urlencode(get_permalink())); ?>','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;">
                   
                    </a>
                </li>
            <?php endif; ?>

            <?php if (!empty($sharing_linkedin )):?>
                <li  class="linkedin pull-left">
                    <a  onclick="popUp=window.open('http://linkedin.com/shareArticle?mini=true&amp;url=<?php echo esc_html(urlencode(get_permalink())); ?>&amp;title=<?php echo esc_html(urlencode(get_the_title())); ?>','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;" href="javascript:;">
                      
                    </a>
                </li>
            <?php endif; ?>

            

            <?php if (!empty($sharing_pinterest)) :  ?>
                <li class="pintrest pull-left">
                    <a onclick="popUp=window.open('http://pinterest.com/pin/create/button/?url=<?php echo esc_html(urlencode(get_permalink())); ?>&amp;description=<?php echo esc_html(urlencode(get_the_title())); ?>&amp;media=<?php $arrImages = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); echo has_post_thumbnail() ? esc_html($arrImages[0])  : "" ; ?>','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;" href="javascript:;">
                   
                    </a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
<?php endif;
}
}
}