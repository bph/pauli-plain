<?php
/**
 * Title: index
 * Slug: pauli-basis/index
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:media-text {"align":"full","mediaId":272,"mediaLink":"http://localhost:10115/2560px-the_golden_land_of_andalusia-_spain/","mediaType":"image","imageFill":true,"backgroundColor":"custom-leichtes-gelb"} -->
<div class="wp-block-media-text alignfull is-stacked-on-mobile is-image-fill has-custom-leichtes-gelb-background-color has-background"><figure class="wp-block-media-text__media" style="background-image:url(<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/2560px-The_golden_land_of_Andalusia._Spain-1024x652.jpg);background-position:50% 50%"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/2560px-The_golden_land_of_Andalusia._Spain-1024x652.jpg" alt="" class="wp-image-272 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo __('Ferienziel Andalusien ', 'pauli-basis');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo __('Experience the fusion of imagination and expertise with Études—the catalyst for architectural transformations that enrich the world around us.', 'pauli-basis');?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"custom-teal"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-custom-teal-background-color has-background wp-element-button"><?php echo __('Jetzt Buchen!', 'pauli-basis');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:media-text --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":14,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-standard-posts","name":"Standard"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black"} -->
<!-- wp:media-text {"mediaType":"image","imageFill":false,"useFeaturedImage":true,"backgroundColor":"custom-leichtes-orange"} -->
<div class="wp-block-media-text is-stacked-on-mobile has-custom-leichtes-orange-background-color has-background"><figure class="wp-block-media-text__media"></figure><div class="wp-block-media-text__content"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-excerpt {"moreText":"Weiterlesen"} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:media-text -->

<!-- wp:separator {"opacity":"css"} -->
<hr class="wp-block-separator has-css-opacity"/>
<!-- /wp:separator -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:group {"backgroundColor":"custom-leichtes-orange","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-custom-leichtes-orange-background-color has-background"><!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"tagName":"main","layout":{"contentSize":null,"type":"constrained"}} -->
<main class="wp-block-query"><!-- wp:group {"backgroundColor":"custom-leichtes-orange","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group has-custom-leichtes-orange-background-color has-background"><!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></main>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->