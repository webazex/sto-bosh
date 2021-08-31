<?php
$id = get_the_ID();
$reviews = renderReviewsSection();
?>
<section>
	<div class="site-size">
		<div class="site-size__content-reviews">
			<h2 class="content-reviews__title-h2">
				<span class="title-h2__text"><?=$reviews['title']; ?></span>
			</h2>
		</div>
		<div class="site-size__reviews slider-reviews">
			<?php foreach ($reviews['content'] as $item): ?>
			<div class="reviews__item">
				<h3 class="item__title-review title-h3">
					<span class="title-h3__text"><?=$item['name']; ?></span>
				</h3>
				<img src="<?=$item['photo'];?>" alt="">
				<h6 class="title-h6 title-professy">
					<span class="title-h6__text"><?=$item['work']; ?></span>
				</h6>
				<?=$item['rating'];?>
				<p><?=$item['text'];?></p>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

