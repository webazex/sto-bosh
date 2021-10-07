<?php
$phones = getContactsPhones(166);
?>
<footer>
	<div class="footer-container">
		<div class="container__footer-content">
			<div class="footer-content__col-f">
				<div class="col-f__logo-block">
					<img src="<?=getFooterLogo(); ?>" alt="">
					<span>Bosch Service</span>
				</div>
				<div class="col-f__adress">
					<span class="adress__text"><?=getContactAdress(166); ?></span>
				</div>
				<div class="col-f__workstime-block">
            <span class="workstime-block__text">
                График работы:<br>
                <?=getWorksTime(); ?>
            </span>
				</div>
				<div class="col-f__mail">
					<a href="mailto:<?=getContactEmail(166); ?>">
						<span class="mail__text"><?=getContactEmail(166); ?></span>
					</a>
				</div>
				<div class="col-f__phones">
					<?php foreach ($phones as $item):
						$href = preg_replace("/[\D]/", '', $item['phone']);?>
                        <a href="tel:+<?=$href; ?>" class="phones__text"><?=$item['phone']; ?></a>
					<?php endforeach; ?>
				</div>
			</div>
			<div class="footer-container__col-s">

				<div class="col-s__menu-footer">
					<?=getFooterMenu(); ?>
<!--					<a href="#" class="menu-footer__link">-->
<!--						<span class="link__text-menu-f">Услуги</span>-->
<!--					</a>-->
<!--					<a href="#" class="menu-footer__link">-->
<!--						<span class="link__text-menu-f">Автозапчасти BOSCH</span>-->
<!--					</a>-->
<!--					<a href="#" class="menu-footer__link">-->
<!--						<span class="link__text-menu-f">Цены</span>-->
<!--					</a>-->
<!--					<a href="#" class="menu-footer__link">-->
<!--						<span class="link__text-menu-f">Контакты</span>-->
<!--					</a>-->
				</div>

				<div class="col-s__links-footer">
					<?=getFooterSocialLinks();?>
				</div>
				<div class="col-s__copywrite-block">
					<span class="copywrite-block__text">© 2021 BOSCH Auto Service. All rights reserved.</span>
				</div>
			</div>
			<div class="footer-container__col-t">
            <span class="col-t__text">
                В автосервисе возможен расчет карточками Visa и MasterCard
            </span>
				<div class="col-t__img-row">
					<img src="img/visa.png" alt="">
					<img src="img/masterCard.png" alt="">
				</div>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
