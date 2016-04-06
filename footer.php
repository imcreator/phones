<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package phones
 */

?>

	<footer class="section">
		<div class="container">
			<?php get_sidebar() ?>
			<div class="col-md-3">
				<h4 class="footer-title">Recent posts</h4>
				<ul>
					<?php get_phones_recent_posts(); ?>
				</ul>
			</div>
			<div class="col-md-3">
				<h4 class="footer-title">Tags</h4>
				<div id="tags_list">
					<?php echo get_phones_category(); ?>
				</div>
			</div>
			<div class="col-md-3">
				<h4 class="footer-title">Categories</h4>
				<ul id="categories">
					<?php wp_list_categories('title_li='); ?>
				</ul>
			</div>
		</div>
	</footer>

	<!-- JavaScript -->
	<script src="https://code.jquery.com/jquery-1.12.2.min.js" integrity="sha256-lZFHibXzMHo3GGeehn1hudTAP3Sc0uKXBXAzHX1sjtk=" crossorigin="anonymous"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	
	<?php wp_footer(); ?>
</body>
</html>