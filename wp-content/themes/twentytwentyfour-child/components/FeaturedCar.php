<?php
$featured_car = get_field('featured_car_po');

if ($featured_car):
    $model = get_field('car_model', $featured_car->ID);
    $engine = get_field('engine_size', $featured_car->ID);
    $price = get_field('price', $featured_car->ID);
    $on_sale = get_field('on_sale', $featured_car->ID);
    $sale_price = get_field('sale_price', $featured_car->ID);
    $main_photo = get_the_post_thumbnail_url($featured_car->ID, 'large');
    ?>
    <section class="featured-car bg-gray-100 py-8">
        <div class="max-w-5xl mx-auto px-4">
            <h2 class="text-3xl mb-6">Featured Car</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center bg-white p-6 rounded shadow">
                <div class="aspect-video bg-cover bg-center rounded" style="background-image: url('<?php echo esc_url($main_photo); ?>');"></div>
                <div>
                    <h3 class="text-2xl font-semibold mb-2 text-gra"><?php echo esc_html(get_the_title($featured_car->ID)); ?></h3>
                    <p class="text-gray-700 mb-1">Model: <strong><?php echo esc_html($model); ?></strong></p>
                    <p class="text-gray-700 mb-1">Engine: <strong><?php echo esc_html($engine); ?></strong></p>

                    <p class="text-gray-700 my-4">
                        <?php if ($on_sale): ?>
                            <span class="text-sm bg-red-500 text-white px-2 py-1 rounded mr-2">SALE</span>
                            <del class="text-gray-700">₱<?php echo number_format($price); ?></del>
                            <span class="text-lg ml-2">₱<?php echo number_format($sale_price); ?></span>
                        <?php else: ?>
                            <span class="text-gray-700 text-lg">₱<?php echo number_format($price); ?></span>
                        <?php endif; ?>
                    </p>
                    <a class = "text-red-500 hover:opacity-50 transition-opacity duration-200" href="#">
                        Learn More <i class="fas fa-arrow-right mt-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <?php
endif;
?>
