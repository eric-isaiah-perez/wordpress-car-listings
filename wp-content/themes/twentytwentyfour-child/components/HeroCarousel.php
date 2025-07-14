<?php
$car_posts = get_field('hero_banners_cars_po');

if ($car_posts): ?>
<div class="hero owl-carousel owl-theme">
	<?php foreach ($car_posts as $post): setup_postdata($post); ?>
		<?php
			$image = get_the_post_thumbnail_url($post->ID, 'large');
			$title = get_the_title($post->ID);
		?>
		<div class="carousel-item h-screen bg-cover bg-center bg-no-repeat" style="background-image: url('<?php echo esc_url($image); ?>');">
			<div class = "content-wrapper px-3">
				<h2 class="carousel-item-title text-4xl text-white"><?php echo esc_html($title); ?></h2>
				<button class="carousel-item-button mt-3">
					<a class = "text-white hover:opacity-50 transition-opacity duration-200" href="#">Learn More <i class="fas fa-arrow-right mt-1"></i></a>
				</button>
			</div>
		</div>
	<?php endforeach; wp_reset_postdata(); ?>
</div>
<?php endif; ?>
