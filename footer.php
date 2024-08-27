<?php do_action('before_footer'); ?>

<footer role="contentinfo">
	<div class="footer__menus">
		<div class="max__width">
			<?php
			while (have_rows('footer_menus', 'options')) : the_row();

				$footer_menu = get_sub_field('footer_menu');
			?>
				<article class="footer__menu">
					<?php if ($footer_menu) : ?>
						<h5><?php echo $footer_menu->name; ?> <i class="fas fa-chevron-down"></i></h5>
						<?php wp_nav_menu(array('menu' => $footer_menu->name, 'container' => false, 'depth' => 1)); ?>
					<?php endif; ?>
				</article>

			<?php endwhile; ?>

				<article>
					<img src="http://clb-global-travel.com/wp-content/uploads/2024/06/CLB-Global-Travel_X5016_tta-white.png" alt="TTA Logo">
				</article>
		</div>
	</div>
</footer>

<div class="subfooter">
		<div class="max__width">

		<div class="subfooter--left">
			<small>&copy; <?php bloginfo('name') ?> <?php echo date('Y'); ?>. Company number: 15534975</small>
		</div><!-- subfooter--left -->

		<div class="subfooter--right">
			<small><a href="https://thomson-website-solutions.com/" target="_blank">Powered by TWS</a></small>
		</div><!-- subfooter--left -->

	</div><!-- max__width -->
</div><!-- subfooter -->

<div class="spotlight-search">
	<div class="spotlight-search--content">
		<a href="#" class="spotlight-close"><i class="fal fa-times"></i></a>

		<h2>Search <?php bloginfo('name'); ?></h2>
		<form action="<?php echo esc_url(home_url()); ?>">
			<input type="text" name="s" placeholder="ie. Tenants" />
			<button type="submit" class="button primary"><i class="fal fa-search"></i></button>
		</form>
	</div>
</div>

</div><!-- #page -->

<?php wp_footer(); ?>
</body>

</html>