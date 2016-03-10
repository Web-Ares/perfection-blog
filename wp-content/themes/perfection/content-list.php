<?php
$author_id= get_field('post_author',get_the_ID());

$authors = getAuthor($author_id);?>
<li>
	<a href="<?php the_permalink(); ?>">
	<?php if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) : ?>
		<div class="blog-home__pic">
				<?php the_post_thumbnail('blog-width'); ?>
		</div>
	<?php endif; ?>

	<!-- blog-home__inner -->
	<div class="blog-home__inner">
		<span class="blog-home__title"><?php the_title(); ?></span>
		<span class="blog-home__name">By <?php echo $authors['first'].' '.$authors['last']?></span>
		<time datetime="<?php echo get_the_date('Y-j-n'); ?>"><?php echo get_the_date('j'); ?><span><?php echo get_the_date('M'); ?></span></time>
		<?php the_excerpt();?>
		<span class="blog-home__more"><?php echo get_field('read_more_field', 'options'); ?></span>
	</div>
	<!-- /blog-home__inner -->
	</a>

</li>
