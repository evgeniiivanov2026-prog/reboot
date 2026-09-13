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

$is_show_search_form   = $wpshop_core->get_option( 'structure_404_search_form_show' );
$is_show_related_posts = $wpshop_core->get_option( 'structure_404_related_show' );
$is_show_sidebar       = in_array( $wpshop_core->get_option( 'structure_404_sidebar' ), [ 'left', 'right' ] );

get_header();
?>

    <div id="primary" class="content-area">
         <main id="main" class="site-main">

             <section class="error-404 not-found">
                 <header class="page-header">
                     <h1 class="page-title"><?php echo apply_filters( THEME_SLUG . '_404_title', __( 'Oops! That page can&rsquo;t be found.', THEME_TEXTDOMAIN ) ) ?></h1>
                 </header><!-- .page-header -->

                 <div class="page-content">
                     <p><?php echo apply_filters( THEME_SLUG . '_404_text', __( 'It looks like nothing was found at this location. Try one of the links below or use a search.', THEME_TEXTDOMAIN ) ) ?></p>
                     <?php if ( $is_show_search_form ) get_search_form() ?>
                 </div><!-- .page-content -->
             </section><!-- .error-404 -->

             <?php if ( $is_show_related_posts ) get_template_part( 'template-parts/related', 'posts' ) ?>

         </main><!-- #main -->
	</div><!-- #primary -->

    <?php if ( $is_show_sidebar ) get_sidebar() ?>

<?php
get_footer();
