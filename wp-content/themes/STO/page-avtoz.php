<?php
/*
Template Name: Автозапчасти
*/
get_header();
?>
<main class="avtoz">
	<section>
		<div class="home__container-title">
			<!--    =====popups===start====-->
			<div class="popups__sto" id="sto">
				<div class="sto__title-row">
					<span class="title-row__text">Онлайн запись на СТО</span>
				</div>
				<form class="sto__form sto__content" action="" method="post" id="stoForm">
					<div class="form__left-part-sto">
						<div class="left-part-sto__col-title">
							<span class="col-title__text">Выберите дату и время</span>
						</div>
						<div class="left-part-sto__content">
							<div id="datepicker"></div>
							<div class="content__label-block">
								<label class="label-block__label" for="timeStart">
									<span class="label__text">Желаемое время проведения работ</span>
								</label>
								<select class="label__select" id="timeStart" name="time_start">
									<option value="8"><span>8:00</span></option>
									<option value="9"><span>9:00</span></option>
									<option value="10"><span>10:00</span></option>
									<option value="11"><span>11:00</span></option>
									<option value="12"><span>12:00</span></option>
								</select>
							</div>
							<div class="content__label-block">
								<label class="label-block__label" for="timeForCall">
									<span class="label__text">Желаемое время для звонка</span>
								</label>
								<select class="label__select" id="timeForCall" name="timeForCall">
									<option value="8"><span>8:00 - 9:00</span></option>
									<option value="9"><span>10:00 - 11:00</span></option>
									<option value="10"><span>11:00 - 12:00</span></option>
									<option value="11"><span>12:00 - 13:00</span></option>
									<option value="12"><span>13:00 - 14:00</span></option>
								</select>
							</div>

						</div>
					</div>
					<div class="form__right-part-sto">
						<div class="right-part-sto__col-title">
							<span class="col-title__text">Ваша контактная информация</span>
						</div>
						<div class="right-part-sto__container-grid">
							<input type="text" name="fio" class="form__input-fio" required="required"
							       placeholder="Имя и фамилия">
							<input type="text" name="car_model" class="form__input-car-model" required="required"
							       placeholder="Модель авто">
							<input type="email" name="email" class="form__input-email" required="required"
							       placeholder="Электронный адрес">
							<input type="tel" name="phone" class="form__input-phone" required="required"
							       placeholder="Номер телефона">
							<textarea name="text" class="form__textarea-text" required="required"
							          placeholder="Описание неисправности"></textarea>
						</div>
						<div class="right-part-sto__submit-text-row">
							<div class="submit-text-row__checkbox-text">
								<input type="checkbox" name="agreement" class="checkbox-text__input-checkbox"
								       id="agree">
								<label for="agree">
									<span></span>
								</label>

								<span>Я даю свое согласие на обработку указанных мною персональных данных*
</span>
							</div>

							<button type="submit" class="submit-text-row__btn-submit">
								<span>Заказать звонок</span>
							</button>
						</div>
					</div>
				</form>
			</div>
			<div class="container-title__layer"></div>
			<div class="container-title__services-bg" style="background-image: url('css/pic/home-bg.jpg');"></div>
			<div class="container-title__services-content">
				<div class="services-content__center-block">
					<h1 class="center-block__title-h1">
						<span class="title-h1__text">Автозапчасти BOSCH Auto Service«Центр Херсон»</span>
					</h1>
					<div class="center-block__row-btns-order">
						<a href="#" id="stoBtn" class="row-btns__link call-order">
							<span class="link__text">Заказать звонок</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="site-size">
			<div class="site-size__content-avtoz">
				<div class="content-avtoz__grid">
					<div class="grid__item-text">
						<h2 class="item-text__title-h2">
							<span class="title-h2__text">Автозапчасти BOSCH Auto Service «Центр Херсон»</span>
						</h2>
						<p>Автозапчасти BOSCH — известны по всему миру своей гарантией, качеством и надежностью.
							Среди продуктов Bosch можно найти все необходимое для ремонта практически любой иномарки
							BOSCH это первый по величине производитель автомобильных запчастей на мировом рынке, входит
							в состав концерна Robert Bosch GmbH Германия, а их производство развернуто в 150 странах</p>
					</div>
					<img src="img/Rectangle%2041.jpg" alt="" class="grid__item-img">
				</div>
			</div>
		</div>
	</section>
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
