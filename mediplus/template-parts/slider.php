<?php
 $args = array(
    'post_type'      => 'medislider',
    'posts_per_page' => -1,
 );
 $slider_loop = new WP_Query( $args);
 ?>

<?php if($slider_loop->have_posts()):  ?>

<?php 
while($slider_loop->have_posts()): 
 $slider_loop->the_post();
 $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
	<!-- Start Single Slider -->

	<div class="single-slider" style="background-image:url(<?php echo $url; ?>)">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<div class="text">
						<h1><?php the_title();?></h1>
						<p><?php the_content();?> </p>
						<div class="button">
							<a href="<?php echo esc_url(get_post_meta(get_the_ID(),'_sldider_btn_url_',true)) ?>" class="btn"><?php echo get_post_meta(get_the_ID(),'_sldider_btn_label_',true) ?></a>
							<a href="<?php echo esc_url(get_post_meta(get_the_ID(),'_sldider_btn_url_',true)) ?>" class="btn"><?php echo get_post_meta(get_the_ID(),'_sldider_btn_label_',true) ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; ?>
 <?php endif; ?>

				<!-- End Single Slider -->
				<!-- Start Single Slider -->