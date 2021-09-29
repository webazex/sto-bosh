<?php
/*
Template Name: Цены
*/
get_header();
$title = CFS()->get('price_title');
$img = CFS()->get('price_bg');
$subtitle = CFS()->get('price_subtitle');
$prices = CFS()->get('prices');
?>
	<main class="prices">
		<section>
			<?=renderFirstSection($img, $title, $subtitle); ?>
		</section>
		<section style="background: linear-gradient(180deg, #0B1228 30.21%, #131D3B 60.42%);">
			<div class="service-pack-content">
				<div class="service-pack-content__droplist">
					<?php foreach ($prices as $row): ?>
					<div class="droplist__item-row">
						<div class="site-size item-row">
							<div class="item-row__service-pack">
								<span class="service-pack__text"><?=$row['prices__row-title']; ?></span>
								<div class="service-pack__icon">
									<span></span>
									<span></span>
								</div>
							</div>
							<div class="item-row__grid-service-prop">
								<?php foreach ($row['prices__row'] as $item): ?>
								<div class="grid-service-prop__title">
									<span><?=$item['title']; ?></span>
								</div>
								<div class="grid-service-prop__desc">
									<p><?=$item['desc']; ?></p>
								</div>
								<div class="grid-service-prop__price">
									<span><?=$item['price']; ?></span>
								</div>
								<?php endforeach; ?>

							</div>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</section>
	</main>
<?php get_footer(); ?>
