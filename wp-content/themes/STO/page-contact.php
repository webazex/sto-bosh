<?php
/*
Template Name: Контакты
*/
get_header();
$phones = getContactsPhones();
$personals = getPersonals();
?>
<main class="contacts">
	<section>
		<div class="contact-bg">
			<div class="container-contact-content">
				<div class="contact-content__center-block">
					<h3 class="center-block__title-h3">
						<span class="title-h3__text"><?=getContactTitle(); ?></span>
					</h3>
					<div class="center-block__content">
						<div class="content__grid-persons">
							<?php foreach ($personals as $person):?>

							<div class="grid-persons__person-item">
								<img src="<?=$person['photo']; ?>" class="person-item__img" alt="">
								<div class="person-item__data">
									<span class="data__item professy"><?=$person['prof']; ?></span>
									<span class="data__item name"><?=$person['fio']; ?></span>
									<a href="tel:+<?=preg_replace('/[\D]/', '', $person['phone']); ?>" class="data__item phone"><?=$person['phone']; ?></a>
								</div>
							</div>
							<?php endforeach; ?>
						</div>
						<div class="content__info-block">
							<span class="info-block__adress"><?=getContactAdress();?></span>
							<div class="info-block__phone-block">
								<?php foreach ($phones as $item):
								$href = preg_replace("/[\D]/", '', $item['phone']);?>
								<a href="tel:+<?=$href; ?>" class="phone-block__item"><?=$item['phone']; ?></a>
								<?php endforeach; ?>
							</div>
							<a href="mailto:<?=getContactEmail(); ?>" class="info-block__mail"><?=getContactEmail();?></a>
						</div>
					</div>
				</div>
			</div>
			<div class="contact-bg__layer-dotted">
				<span></span>
				<span></span>
			</div>
			<div class="contact-bg__layer-square">
				<span></span>
				<span></span>
			</div>
		</div>
	</section>
	<section>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2737.7642194841033!2d32.585834316058744!3d46.67091597913382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c41090b20b8ebf%3A0xc3f3fd41b5e11083!2sBosch%20Car%20Service%20-%20Kherson%20Center!5e0!3m2!1sru!2sua!4v1573065990967!5m2!1sru!2sua"
		        width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
	</section>
</main>
<?php get_footer(); ?>
