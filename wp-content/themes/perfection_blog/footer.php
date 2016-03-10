

</div>
<link rel="stylesheet" href="<?php echo TEMPLATEURI;?>/css/bootstrap.min.css" />
<?php if(!is_front_page()){
    echo '<link rel="stylesheet" href="'.TEMPLATEURI.'/css/font-awesome.min.css" />';
}?>
<link rel="stylesheet" href="<?php echo TEMPLATEURI;?>/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo TEMPLATEURI;?>/css/main.css" />
<?php if(!is_front_page()){
    echo '<link rel="stylesheet" href="'.TEMPLATEURI.'/css/blog-article.css"/>';
}else{
    echo '<link rel="stylesheet" href="'.TEMPLATEURI.'/css/blog-home.css" />';
}?>

<script src="<?php echo TEMPLATEURI;?>/js/share42.js"></script>
<script src="<?php echo TEMPLATEURI;?>/js/jquery.main.js"></script>
<?php wp_footer(); ?>
</body>
</html>
