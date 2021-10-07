<?php
/*
Template Name: Автозапчасти
*/
get_header();
$title = CFS()->get('title', intval(get_the_ID()));
$subtitle = CFS()->get('subtitle', intval(get_the_ID()));
$src = CFS()->get('bg', intval(get_the_ID()));
$text = CFS()->get('seo_txt', intval(get_the_ID()));
?>
<main class="avtoz">
    <?=renderPopups();?>
    <?=renderFirstSection($src, $title, $subtitle); ?>
    <?=renderSectionOne();?>
	<section>
		<div class="site-size">
			<div class="site-size__content">
				<div class="content__container-form-left-img">
					<div class="container-form-left-img__box">
						<div class="box__layout"></div>
						<img src="img/img-with-form.jpg" alt="">
					</div>
					<div class="container-form-left-img__form">
						<span class="form__title">Онлайн запись на СТО</span>
						<form>
							<label>
								<input type="text" name="car" placeholder="Автомобиль">
							</label>
							<label>
								<input type="text" name="name" placeholder="Имя">
							</label>
							<label>
								<input type="tel" name="phone" placeholder="+38">
							</label>

							<label>
								<input type="text" name="service_type" placeholder="Вид услуг">
							</label>
							<div class="right-part-sto__submit-text-row">
								<div class="submit-text-row__checkbox-text">
									<input type="checkbox" name="agreement" class="checkbox-text__input-checkbox"
									       id="agree3">
									<label for="agree3">
										<span></span>
									</label>

									<span>Я даю свое согласие на обработку указанных мною персональных данных*</span>
								</div>
							</div>
							<button type="submit">
								<span>Оставить заявку</span>
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="site-size">
			<div class="site-size__content-text">
				<p>Компания выпускает детали в огромном количестве более 35 товарных групп и 147 000 наименований.</p>

				<p>В BOSCH «Центр Херсон» — наши сертифицированные специалисты помогут вам подобрать автозапчасти BOSCH:
					детали двигателя, детали КПП, детали ходовой, детали топливной системы, мультимедиа, автомобильную
					электронику, рулевое управление.</p>

				<p>Мы предлагаем огромный ассортимент автозапчастей BOSCH для автомобилей Audi, Bmw, Ford, Honda, Mazda,
					Mercedes, Mitsubishi , Nissan, Opel, Toyota, Volkswagen, ВАЗ и многих других.

					BOSCH Service «Центр Херсон» — это 100% гарантия на услуги и запасные — части на протяжении 12
					месяцев.</p>
			</div>
		</div>
	</section>
	<section>
		<div class="site-size">
			<div class="site-size__content-z">
				<div class="content-z__container-form-left-img">
					<div class="container-form-left-img__box">
						<div class="box__layout">
							<span>BOSCH Auto Service - “Центр Херон”</span>
						</div>
						<img src="img/img-with-form.jpg" alt="">
					</div>
					<div class="container-form-left-img__form">
						<span class="form__title">Онлайн запись на СТО</span>
						<form>
							<label>
								<input type="text" name="car" placeholder="Автомобиль">
							</label>
							<label>
								<input type="text" name="vin" placeholder="VIN-code">
							</label>
							<label>
								<input type="text" name="z" placeholder="Название автозапчасти">
							</label>
							<label>
								<input type="text" name="name" placeholder="Имя и Фамилия">
							</label>
							<label>
								<input type="email" name="mail" placeholder="Электронный адрес">
							</label>
							<label>
								<input type="tel" name="phone" placeholder="+38">
							</label>
							<label>
								<textarea type="text" name="comment" placeholder="Комментарий"></textarea>
							</label>
							<div class="right-part-sto__submit-text-row">
								<div class="submit-text-row__checkbox-text">
									<input type="checkbox" name="agreement" class="checkbox-text__input-checkbox"
									       id="agree4">
									<label for="agree4">
										<span></span>
									</label>

									<span>Я даю свое согласие на обработку указанных мною персональных данных*</span>
								</div>
							</div>
							<button type="submit">
								<span>Оставить заявку</span>
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

</main>
<?php get_footer(); ?>
