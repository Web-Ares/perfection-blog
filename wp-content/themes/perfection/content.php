<?php

$author_id= get_field('post_author',get_the_ID());

$authors = getAuthor($author_id);
$top_img=get_field('top_image');
if(!empty($top_img)){
	$style_top='style="background-image: url(\''.$top_img.'\')"';
}else{
	$style_top='';
}

?>

<!-- site__content__caption -->
<div     style='background: url("<?php $cur_bg_post=get_field('background_on_post');
	if(empty($cur_bg_post)){
	echo BLOGINFO ?>/img/caption-bg4.jpg<?php } else{
		echo $cur_bg_post;
	}?>") center no-repeat;' class="site__content__caption site__content__caption_blog-article" <?php echo $style_top;?> id="post-<?php the_ID(); ?>">
	<div>
		<div>
			<h1><?php the_title(); ?></h1>
		</div>
	</div>
	<div class="site__content-persona">

		<div class="site__content-data">
			<?php if(!empty($authors['first'])){?>
			<span>
				<?php echo $authors['first'].' '.$authors['last']?>
				<img src="<?php echo $authors['photo']?>" width="48" height="48" alt="author"/>
			</span>
			<?php }?>
			<time datetime="<?php echo get_the_date('Y-j-n'); ?>"><?php echo get_the_date('j F Y'); ?></time>
		</div>
		<!-- social-network -->
			<div class="social-network share42init" id="share42" data-url="<?php the_permalink() ?>" data-title="<?php the_title() ?>"></div>
		<!-- /social-network -->


	</div>
</div>
<!-- /site__content__caption -->

<!-- content -->
<div class="content">

	<!-- blog-article -->
	<div class="blog-article">

		<!-- container-fluid -->
		<div class="container-fluid">
			<div class="row">

				<!-- blog-article__inner -->
				<div class="blog-article__inner">
					<?php the_content(); ?>
				</div>
				<!-- /blog-article__inner -->

				<?php comments_template(); ?>

				<?php
				if(!empty($authors['first'])){?>
					<!-- blog-article__personality -->
					<div class="blog-article__personality">
						<span>
							By <?php echo $authors['first'].' '.$authors['last']?>
							<img src="<?php echo $authors['photo']?>" width="96" height="97" alt="author"/>
						</span>
						<?php echo $authors['desc']?>
					</div>
					<!-- /blog-article__personality -->
				<?php };?>


				<?php adoric_post_nav(); ?>

			</div>
		</div>
		<!-- /container-fluid -->

	</div>
	<!-- /blog-article -->

</div>
<!-- /content -->




