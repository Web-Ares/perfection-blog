<?php get_header('second');?>

<!-- promo -->
<div class="promo promo_inner">

	<!-- promo__wrap -->
	<div class="promo__wrap promo__wrap_inner">

		<!-- site__centered -->
		<div class="site__centered">

			<!-- promo__content -->
			<div class="promo__content promo__content_inner">

				<!-- promo__topic -->
				<h1 class="promo__topic"><?php the_title();?></h1>
				<!-- /promo__topic -->

				<p><?php the_field('page_subtitle'); ?></p>

			</div>
			<!-- /promo__content -->

		</div>
		<!-- /site__centered -->

	</div>
	<!-- /promo__wrap -->

</div>
<!-- /promo -->

<!-- site__content -->
<section class="site__inner-page">

	<!-- site__centered -->
	<div class="site__centered">

		<!-- article -->
		<article class="article">

			<?php the_content();?>

		</article>
		<!-- /article -->

	</div>
	<!-- site__centered -->

</section>
<!-- /site__content -->

<?php get_footer(); ?>
