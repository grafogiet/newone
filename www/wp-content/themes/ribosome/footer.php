<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package Ribosome
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<div class="credits credits-left"><?php echo wp_kses_post(get_theme_mod('ribosome_footer_text_left', __('Copyright 2015', 'ribosome'))); ?></div>
			<div class="credits credits-center"><?php echo wp_kses_post(get_theme_mod('ribosome_footer_text_center', __('Footer text center', 'ribosome'))); ?></div>
			<div class="credits credits-right">
			<a href="http://galussothemes.com/wordpress-themes/ribosome">Ribosome</a> / <a href="http://wp-templates.ru/" title="Шаблоны WordPress">WordPress</a><br><a href="http://builderbody.ru/" title="Бодибилдинг и фитнес - упражнения, тренировки, спортивное питание" target="_blank">Фитнес</a>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php
	if (get_theme_mod('ribosome_boton_ir_arriba', 1) == 1){ ?>
		<div class="ir-arriba"><i class="fa fa-arrow-up"></i></div>
	<?php } 
	
wp_footer(); ?>

</body>
</html>