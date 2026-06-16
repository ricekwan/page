<?php
/**
 * Title: Latest News
 * Slug: ai-enterprise/latest-news
 * Categories: ai-enterprise, latest-news
 */
?>
<!-- wp:group {"className":"latest-news","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group latest-news" style="margin-top:0px;margin-bottom:0px;padding-top:0;padding-right:0;padding-bottom:0"><!-- wp:group {"className":"head-box wow zoomIn","layout":{"type":"default"}} -->
<div class="wp-block-group head-box wow zoomIn"><!-- wp:heading {"level":3,"className":"latest-news-sec-title","style":{"typography":{"fontSize":"32px","textTransform":"capitalize","lineHeight":"1.5","textAlign":"center"},"spacing":{"margin":{"bottom":"0","top":"var:preset|spacing|20"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading"} -->
<h3 class="wp-block-heading has-text-align-center latest-news-sec-title has-heading-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:0;font-size:32px;line-height:1.5;text-transform:capitalize"><?php echo esc_html__('Our ','ai-enterprise'); ?><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-secondary-color"><?php echo esc_html__('Blog','ai-enterprise'); ?></mark></h3>
<!-- /wp:heading -->

<!-- wp:heading {"level":3,"className":"about-sec-title","style":{"typography":{"textTransform":"none","lineHeight":"1.5","fontStyle":"normal","fontWeight":"400","textAlign":"center"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"small","fontFamily":"poppins"} -->
<h3 class="wp-block-heading has-text-align-center about-sec-title has-primary-color has-text-color has-link-color has-poppins-font-family has-small-font-size" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:0;font-style:normal;font-weight:400;line-height:1.5;text-transform:none"><?php echo esc_html__('Latest AI Insights & Technology Trends','ai-enterprise'); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":10,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"wow zoomIn news-boxes owl-carousel","style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"latest-news-box","style":{"border":{"radius":"12px","width":"2px"},"spacing":{"padding":{"top":"12px","bottom":"50px","left":"12px","right":"12px"}}},"backgroundColor":"base","borderColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group latest-news-box has-border-color has-secondary-border-color has-base-background-color has-background" style="border-width:2px;border-radius:12px;padding-top:12px;padding-right:12px;padding-bottom:50px;padding-left:12px"><!-- wp:post-featured-image {"height":"200px","style":{"border":{"radius":{"topLeft":"5px","topRight":"5px","bottomLeft":"0px","bottomRight":"0px"},"color":"#00000000","width":"1px"},"spacing":{"margin":{"bottom":"15px"}}}} /-->

<!-- wp:post-title {"isLink":true,"className":"news-title","style":{"typography":{"fontSize":"20px","textTransform":"capitalize"},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"bottom":"15px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading"} /-->

<!-- wp:post-excerpt {"excerptLength":25,"style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontFamily":"poppins"} /-->

<!-- wp:read-more {"content":"Read More","className":"news-btn","style":{"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"600","textDecoration":"none"},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"},"padding":{"top":"6px","bottom":"6px","left":"25px","right":"25px"}},"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"},"width":"2px"}},"textColor":"heading","fontFamily":"inter"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"80px"} -->
<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
