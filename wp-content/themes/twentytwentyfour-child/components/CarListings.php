<?php
$cars = get_posts([
    'post_type' => 'car',
    'posts_per_page' => 6,
    'orderby' => 'date',
    'order' => 'ASC',
]);

if ($cars): ?>
<section class="car-listings py-12">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl mb-6">Explore Our Car Listings</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php 
                foreach ($cars as $post): setup_postdata($post);
                    get_template_part('components/partials/CarCard');
                endforeach; wp_reset_postdata();
            ?>
        </div>
    </div>
</section>
<?php endif; ?>