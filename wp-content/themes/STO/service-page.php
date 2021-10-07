<?php
/*
Template Name: Страница услуги
*/
get_header();
?>
<main class="service">
	<?=renderPopups();?>
	<?=renderFirstSection('', "Service one");?>
	<?=renderServiceContentSection();?>
	<section>
		<div class="site-size">
			<div class="site-size__container">
				<?=renderFormOrder('', '');?>
			</div>
		</div>
	</section>
	<section>
		<div class="site-size">
			<div class="site-size__container">
				<div class="container__default-content">
					<?=the_content(); ?>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
