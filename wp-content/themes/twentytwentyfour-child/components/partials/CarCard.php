<!-- Car Tile -->
<div class="car-tile bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden" data-id="<?php echo get_the_ID(); ?>">
    <div class="relative aspect-video bg-cover bg-center"
        style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>');">
        <?php if (get_field('on_sale')): ?>
            <span class="absolute top-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded">SALE</span>
        <?php endif; ?>
    </div>
    <div class="p-4">
        <h3 class="text-lg"><?php echo esc_html(get_the_title()); ?></h3>
        <p class="text-gray-700">Model: <?php the_field('car_model'); ?></p>
        <p class="text-gray-700">Engine: <?php the_field('engine_size'); ?></p>
        <p class="mt-2 text-gray-700">
            <?php if (get_field('on_sale')): ?>
                <del class="text-gray-400">₱<?php echo number_format(get_field('price')); ?></del>
                <span class="ml-2">₱<?php echo number_format(get_field('sale_price')); ?></span>
            <?php else: ?>
                ₱<?php echo number_format(get_field('price')); ?>
            <?php endif; ?>
        </p>
        <p class = "text-red-500 hover:opacity-50 transition-opacity duration-200 text-sm mt-4">
            More Info <i class="fas fa-arrow-right mt-1"></i>
        </p>
    </div>
</div>

<!-- Car Modal -->
<div class="car-modal overflow-hidden" data-id="<?php echo get_the_ID(); ?>">
    <div class="content-wrapper bg-white p-4 rounded w-full">
        <button class="modal-close text-red-500">X</button>
        <!-- Owl Carousel for Modal Images -->
        <div class="modal-images owl-carousel my-4">
            <?php for ($i = 1; $i <= 4; $i++):
                $image = get_field("modal_image_$i");
                if ($image): ?>
                    <div class="item">
                        <img src="<?php echo esc_url($image['url']); ?>" 
                            alt="<?php echo esc_attr($image['alt']); ?>"
                            class="rounded w-full object-cover h-64 sm:h-80 lg:h-96" />
                    </div>
                <?php endif;
            endfor; ?>
        </div>
         <?php if (get_field('on_sale')): ?>
            <div class="on-sale text-sm bg-red-500 text-white px-2 py-1 rounded">SALE</div>
        <?php endif; ?>
        <h2 class="text-2xl mt-2 mb-4"><?php echo esc_html(get_the_title()); ?></h2>
        <p class="text-gray-700"><strong>Model:</strong> <?php the_field('car_model'); ?></p>
        <div class="flex">
            <p class="text-gray-700 mr-2"><strong>Engine Size:</strong> <?php the_field('engine_size'); ?></p>
            <p class="text-gray-700 mr-2"><strong>Color:</strong> <?php the_field('car_color'); ?></p>
            <p class="text-gray-700 mr-2"><strong>Seats:</strong> <?php the_field('number_of_seats'); ?></p>
            <p class="text-gray-700 mr-2"><strong>Year:</strong> <?php the_field('year_manufactured'); ?></p>
        </div>
        <div class="mt-4">
            <?php if (get_field('on_sale')): ?>
                <del class="text-gray-400">₱<?php echo number_format(get_field('price')); ?></del>
                <span class="ml-2">₱<?php echo number_format(get_field('sale_price')); ?></span>
            <?php else: ?>
                <span>₱<?php echo number_format(get_field('price')); ?></span>
            <?php endif; ?>
        </div>
    </div>
</div>

