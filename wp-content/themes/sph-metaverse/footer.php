<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * 
 */

?>

<?php if (have_rows('footer', 'option')) : ?>

	<?php while (have_rows('footer', 'option')) : the_row(); ?>

		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="footer_logo">
							<a href=""><img src="<?php echo get_sub_field('logo'); ?>" alt=""></a>
						</div>
					</div>
					<div class="col-md-6">
						<p><?php echo get_sub_field('copywrite'); ?></p>
					</div>
					<div class="col-md-3">
						<div class="footer_social_icon">

							<?php if (have_rows('socialmedia')) : ?>
								<ul>
									<?php while (have_rows('socialmedia', 'option')) : the_row(); ?>

										<li><a href="<?php echo get_sub_field('link'); ?>"><img src="<?php echo get_sub_field('icon'); ?>"></a></li>

									<?php endwhile; ?>
								</ul>
							<?php endif; ?>



						</div>
					</div>
				</div>
			</div>
		</footer>

	<?php endwhile; ?>

<?php endif; ?>

<?php wp_footer(); ?>

</body>

</html>