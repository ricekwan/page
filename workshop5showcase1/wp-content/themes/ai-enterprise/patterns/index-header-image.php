<?php
/**
 * Title: Index Header Image
 * Slug: ai-enterprise/index-header-image
 * Categories: ai-enterprise, index-header-image
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/images/banner.png'); ?>","id":15,"dimRatio":50,"minHeight":400} -->
<div class="wp-block-cover" style="min-height:400px"><img class="wp-block-cover__image-background wp-image-15" alt="" src="<?php echo esc_url( get_template_directory_uri() . '/images/banner.png'); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","style":{"typography":{"textTransform":"uppercase"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="text-transform:uppercase"><?php echo esc_html__('blog','ai-enterprise'); ?></h2>
<!-- /wp:heading --></div></div>
<!-- /wp:cover -->