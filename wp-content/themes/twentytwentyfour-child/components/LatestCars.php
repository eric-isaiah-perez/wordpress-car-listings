<?php
$latest_cars = get_posts([
    'post_type' => 'car',
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'DESC',
]);

if ($latest_cars): ?>
    <section class="latest-cars py-12">
        <div class="max-w-5xl mx-auto px-4">
            <h2 class="text-3xl mb-6">Latest Cars</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <?php foreach ($latest_cars as $post): setup_postdata($post); 
                    $model = get_field('car_model');
                    $engine = get_field('engine_size');
                    $price = get_field('price');
                    $on_sale = get_field('on_sale');
                    $sale_price = get_field('sale_price');
                    $main_photo = get_field('main_photo') ?: get_the_post_thumbnail_url($post->ID, 'large');
                ?>
                    <div class="bg-white rounded-lg shadow overflow-hidden hover:shadow-lg transition-shadow">
                        <div class="relative aspect-video bg-cover bg-center bg-no-repeat" style="background-image: url('<?php echo esc_url($main_photo); ?>');">
                            <?php if ($on_sale): ?>
                                <span class="absolute top-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded">SALE</span>
                            <?php endif; ?>
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-700"><?php echo esc_html(get_the_title()); ?></h3>
                            <p class="text-gray-700 text-sm">Model: <?php echo esc_html($model); ?></p>
                            <p class="text-gray-700 text-sm">Engine: <?php echo esc_html($engine); ?></p>
                            <p class="text-gray-700 mt-2 text-sm">
                                <?php if ($on_sale): ?>
                                    <del class="text-gray-400">₱<?php echo number_format($price); ?></del>
                                    <span class="ml-2">₱<?php echo number_format($sale_price); ?></span>
                                <?php else: ?>
                                    <span>₱<?php echo number_format($price); ?></span>
                                <?php endif; ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
<?php endif; ?>
