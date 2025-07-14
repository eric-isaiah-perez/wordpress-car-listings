<div class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden">
    <div class="relative aspect-video bg-cover bg-center"
        style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>');">
        <?php if (get_field('on_sale')): ?>
            <span class="absolute top-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded">SALE</span>
        <?php endif; ?>
    </div>
    <div class="p-4">
        <h3 class="text-lg"><?php echo esc_html(get_the_title()); ?></h3>
        <p class="text-gray-700 text-sm">Model: <?php the_field('car_model'); ?></p>
        <p class="text-gray-700 text-sm">Engine: <?php the_field('engine_size'); ?></p>
        <p class="mt-2 text-gray-700 text-sm">
            <?php if (get_field('on_sale')): ?>
                <del class="text-gray-400">₱<?php echo number_format(get_field('price')); ?></del>
                <span class="ml-2">₱<?php echo number_format(get_field('sale_price')); ?></span>
            <?php else: ?>
                ₱<?php echo number_format(get_field('price')); ?>
            <?php endif; ?>
        </p>
    </div>
</div>
