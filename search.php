<?php
/**
 * ****************************************************************************
 *
 *   НЕ РЕДАКТИРУЙТЕ ЭТОТ ФАЙЛ
 *   DON'T EDIT THIS FILE
 *
 *   После обновления Вы потереяете все изменения. Используйте дочернюю тему
 *   After update you will lose all changes. Use child theme
 *
 *   https://support.wpshop.ru/docs/general/child-themes/
 *
 * *****************************************************************************
 *
 * @package reboot
 */

global $wpshop_core;

$is_show_sidebar = in_array( $wpshop_core->get_option( 'structure_search_sidebar' ), [ 'left', 'right' ] );

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

            <header class="page-header">
                <h1 class="page-title"><?php echo apply_filters( THEME_SLUG . '_search_with_results_title', __( 'Search results for', THEME_TEXTDOMAIN ) ), ': <span>' . get_search_query() . '</span>' ?></h1>
            </header><!-- .page-header -->

            <?php
            get_template_part( 'template-parts/post-container/' . $wpshop_core->get_option( 'structure_search_posts' ) );

            the_posts_pagination();
            ?>

		<?php else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

    <?php if ( $is_show_sidebar ) get_sidebar() ?>

<?php
get_footer();
