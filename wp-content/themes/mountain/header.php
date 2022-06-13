<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mountain
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>

	<header>
		<nav class="navbar navbar-default active">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="./index.html" title="">
						<img src="./assets/images/mashup-icon.svg" class="navbar-logo-img" alt="">
						Mashup Template
					</a>
				</div>

				<div class="collapse navbar-collapse" id="navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="./index.html" title="">Home</a></li>
						<li><a href="./project.html" title="">Project</a></li>
						<li>
							<p>
								<a href="./components.html" class="btn btn-default navbar-btn" title="">Components</a>
							</p>
						</li>

					</ul>
				</div>
			</div>
		</nav>
	</header>

	<?php if (0) : ?>
		<div class="section-container">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">


						<div id="carousel-example-generic" class="carousel carousel-fade slide" data-ride="carousel">

							<div class="carousel-inner" role="listbox">

								<div class="item active">
									<img class="img-responsive" src="./assets/images/img-06.jpg" alt="First slide">
									<div class="carousel-caption card-shadow reveal">

										<h3>Moon</h3>
										<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
											<i class="fa fa-chevron-left" aria-hidden="true"></i>
											<span class="sr-only">Previous</span>
										</a>
										<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
											<i class="fa fa-chevron-right" aria-hidden="true"></i>
											<span class="sr-only">Next</span>
										</a>
										<p>
											Sed id tellus in risus pre
											tium imperdiet eu lobortis dolor. Sed pellentesque, urna ac viverra lacinia, erat mauris venenatis purus, mollis egestas urna purus ac ex.
											Aenean nunc sem, lobortis at elit non, lobortis laoreet nibh. Maecenas at mi ipsum.
										</p>

										<p>
											Quisque tempor, ligula pharetra luctus elementum, arcu nisl suscipit ante, pharetra commodo dui est et enim. Sed eu vestibulum elit. Donec ut libero non.
										</p>
										<a href="./project.html" class="btn btn-primary" title="">
											Discover
										</a>
									</div>
								</div>
								<div class="item">
									<img class="img-responsive" src="./assets/images/img-07.jpg" alt="First slide">
									<div class="carousel-caption card-shadow reveal">

										<h3>Lbortis</h3>
										<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
											<i class="fa fa-chevron-left" aria-hidden="true"></i>
											<span class="sr-only">Previous</span>
										</a>
										<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
											<i class="fa fa-chevron-right" aria-hidden="true"></i>
											<span class="sr-only">Next</span>
										</a>
										<p>
											Pre id tellus in risus pre
											tium imperdiet eu lobortis dolor. Sed pellentesque, urna ac viverra lacinia, erat mauris venenatis purus, mollis egestas urna purus ac ex.
											Aenean nunc sem, lobortis at elit non, lobortis laoreet nibh. Maecenas at mi ipsum.
										</p>

										<p>
											Quisque tempor, ligula pharetra luctus elementum, arcu nisl suscipit ante, pharetra commodo dui est et enim. Sed eu vestibulum elit. Donec ut libero non.
										</p>
										<a href="./project.html" class="btn btn-primary" title="">
											Discover
										</a>
									</div>
								</div>
							</div>

						</div>


					</div>

				</div>

			</div>
		</div>
	<?php endif; ?>
