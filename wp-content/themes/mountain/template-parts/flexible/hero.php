<?php

$heding = get_sub_field('heding');
$sub_heading = get_sub_field('sub_heading');
$link = get_sub_field('link');

?>

<div class="hero-full-container background-image-container white-text-container">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
                    <?php

                    if (!empty($heding))
                        printf('<h1>%s</h1>', $heding);

                    ?>
					<p><?php echo trim($sub_heading); ?></p>
					<br>
					<a href="./project.html" class="btn btn-default btn-lg" title="">Discover</a>
				</div>
			</div>
		</div>
	</div>
