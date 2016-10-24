<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Morpheus
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
if ( ! is_active_sidebar( 'sidebar-2' ) ) {
    return;
}
if ( ! is_active_sidebar( 'sidebar-3' ) ) {
    return;
}
?>

<section class="row menu-bottom">
    <aside id="secondary" class="widget-area four columns" role="complementary">
    	<?php dynamic_sidebar( 'sidebar-1' ); ?>
    </aside><!-- #secondary -->
    <aside id="secondary" class="widget-area four columns" role="complementary">
        <?php dynamic_sidebar( 'sidebar-2' ); ?>
    </aside><!-- #secondary -->
    <aside id="secondary" class="widget-area four columns" role="complementary">
        <?php dynamic_sidebar( 'sidebar-3' ); ?>
    </aside><!-- #secondary -->
</section>
