<?php
$latest_cars = get_posts([
    'post_type' => 'car',
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'DESC',
]);

if ($latest_cars): ?>
    <section class="latest-cars py-12">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl mb-6">Latest Cars</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <?php 
                    foreach ($latest_cars as $post): setup_postdata($post); 
                        get_template_part('components/partials/CarCard');
                    endforeach; wp_reset_postdata(); 
                ?>
            </div>
        </div>
    </section>
<?php endif; ?>
