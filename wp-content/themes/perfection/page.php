<?php

get_header();

?>
<!-- site__content -->
<div class="site__content">

	<!-- site__wrap -->
	<div class="site__wrap">

		<div>
			<!-- content -->
			<div class="content">
				<div>
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</div>
			</div>
			<!-- /content -->
		</div>

	</div>
	<!-- /site__wrap -->


</div><!-- site__content -->

<?php get_footer(); ?>
