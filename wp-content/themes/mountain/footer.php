<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mountain
 */

?>

<script>
	document.addEventListener("DOMContentLoaded", function(event) {
		navbarFixedTopAnimation();
	});
</script>

<footer class="footer-container white-text-container">
	<div class="container">
		<div class="row">


			<div class="col-xs-12">
				<h3>Mountain</h3>

				<div class="row">
					<div class="col-xs-12 col-sm-7">
						<p><small>Website created with <a href="http://www.mashup-template.com/" title="Create website with free html template">Mashup Template</a>/<a href="https://www.unsplash.com/" title="Beautiful Free Images">Unsplash</a></small>
						</p>
					</div>
					<div class="col-xs-12 col-sm-5">
						<p class="text-right">
							<a href="https://facebook.com/" class="social-round-icon white-round-icon fa-icon" title="">
								<i class="fa fa-facebook" aria-hidden="true"></i>
							</a>
							<a href="https://twitter.com/" class="social-round-icon white-round-icon fa-icon" title="">
								<i class="fa fa-twitter" aria-hidden="true"></i>
							</a>
							<a href="https://www.linkedin.com/" class="social-round-icon white-round-icon fa-icon" title="">
								<i class="fa fa-linkedin" aria-hidden="true"></i>
							</a>
						</p>
					</div>
				</div>


			</div>
		</div>
	</div>
</footer>

<script>
	document.addEventListener("DOMContentLoaded", function(event) {
		navActivePage();
		scrollRevelation('.reveal');
	});
</script>

<?php wp_footer(); ?>

</body>

</html>
