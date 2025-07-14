<?php
/**
 * Template Name: Car Listings Page
 */

get_header();

?>

<main class="car-listings-page">
        <!-- Hero Banner Carousel -->
        <?php get_template_part('components/HeroCarousel'); ?>

        <!-- Featured Car -->
        <?php get_template_part('components/FeaturedCar'); ?>

        <!-- Latest Cars -->
         <?php get_template_part('components/LatestCars'); ?>

</main>

<?php
get_footer();
