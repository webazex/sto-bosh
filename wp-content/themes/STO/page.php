<?php
/*
Template Name: Шаблон для новых страниц
*/
get_header();
$title = CFS()->get('title', intval(get_the_ID()));
$subtitle = CFS()->get('subtitle', intval(get_the_ID()));
$src = CFS()->get('bg', intval(get_the_ID()));
$text = CFS()->get('seo_txt', intval(get_the_ID()));
?>
<main>
	<?=renderPopups();?>
	<?=renderFirstSection($src, $title, $subtitle); ?>
	<?php //rendersections content =?>
</main>
<?php
get_footer();
?>
