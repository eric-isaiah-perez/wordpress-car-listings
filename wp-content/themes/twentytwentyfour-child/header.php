<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="bg-gray-100 shadow-sm">
    <div class="mx-auto px-4 py-4 flex flex-col md:flex-row justify-between md:items-center gap-4">
        <!-- Site Title -->
        <a href="<?php echo esc_url(home_url('/')); ?>" class="text-lg font-bold block md:w-auto w-full">
            <?php bloginfo('name'); ?>
        </a>

        <!-- Navigation Menu -->
        <nav class="main-nav w-full md:w-auto">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'menu_class'     => 'flex flex-col md:flex-row gap-2 md:gap-6 text-sm font-medium text-gray-700',
                'container'      => false,
                'fallback_cb'    => false,
            ]);
            ?>
        </nav>
    </div>
</header>
