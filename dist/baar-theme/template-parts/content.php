<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Baar_Theme
 */

?>
<section>
		<div class="row">
      <div class="col-xs-12">
        <h1><?php the_title(); ?></h1>
      </div>
    </div>
    <div class="row clearfix">
      <div class="col-xs-12 col-sm-6">
        <img src="<?php the_post_thumbnail_url( 'large' ); ?>" class="img-responsive">
      </div>
      <div class="col-xs-12 col-sm-6 description">
        <?php the_content(); ?>
      </div>
    </div>
    <div class="row gallery">
			<?php
				$imageGallery = get_field('bilder_galerie');
				if ($imageGallery) {
					echo '
			      <div class="col-xs-12 center-block">
			        <ul class="bxslider">
					';
					foreach ( $imageGallery as $image ) {
						echo '<li><a href="'.$image[url].'" rel="lightbox" title="'.$image[title].'"><img src="'.$image[url].'" alt="'.$image[alt].'" title="'.$image[title].'"></a></li>';
					}
					echo '
							</ul>
						</div>
					';
				}
		?>
    </div>
</section>
