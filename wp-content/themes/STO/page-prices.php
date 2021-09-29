<?php
/*
Template Name: Цены
*/
get_header();
?>
	<main class="prices">
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
							<span class="title-h1__text">Пакеты услуг для вашего авто — BOSCH Auto Service «Центр Херсон»</span>
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
		<section style="background: linear-gradient(180deg, #0B1228 30.21%, #131D3B 60.42%);">
			<div class="service-pack-content">
				<div class="service-pack-content__droplist">
					<div class="droplist__item-row">
						<div class="site-size item-row">
							<div class="item-row__service-pack">
								<span class="service-pack__text">Пакет обслуживания двигателя</span>
								<div class="service-pack__icon">
									<span></span>
									<span></span>
								</div>
							</div>
							<div class="item-row__grid-service-prop">
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p>Toyota Prado, Land Cruiser, Бизнесlander, VW Touareg, Volvo XC 90, Audi Q7, Infiniti QX70, Mercedes S Class, MB GLE, GLS</p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p>Toyota Prado, Land Cruiser, Бизнесlander, VW Touareg, Volvo XC 90, Audi Q7, Infiniti QX70, Mercedes S Class, MB GLE, GLS</p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p>Toyota Prado, Land Cruiser, Бизнесlander, VW Touareg, Volvo XC 90, Audi Q7, Infiniti QX70, Mercedes S Class, MB GLE, GLS</p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p>Toyota Prado, Land Cruiser, Бизнесlander, VW Touareg, Volvo XC 90, Audi Q7, Infiniti QX70, Mercedes S Class, MB GLE, GLS</p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p></p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
							</div>
						</div>
					</div>
					<div class="droplist__item-row">
						<div class="site-size item-row">
							<div class="item-row__service-pack">
								<span class="service-pack__text">Пакет обслуживания двигателя</span>
								<div class="service-pack__icon">
									<span></span>
									<span></span>
								</div>
							</div>
							<div class="item-row__grid-service-prop">
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p>Toyota Prado, Land Cruiser, Бизнесlander, VW Touareg, Volvo XC 90, Audi Q7, Infiniti QX70, Mercedes S Class, MB GLE, GLS</p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p>Toyota Prado, Land Cruiser, Бизнесlander, VW Touareg, Volvo XC 90, Audi Q7, Infiniti QX70, Mercedes S Class, MB GLE, GLS</p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p>Toyota Prado, Land Cruiser, Бизнесlander, VW Touareg, Volvo XC 90, Audi Q7, Infiniti QX70, Mercedes S Class, MB GLE, GLS</p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p>Toyota Prado, Land Cruiser, Бизнесlander, VW Touareg, Volvo XC 90, Audi Q7, Infiniti QX70, Mercedes S Class, MB GLE, GLS</p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p></p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
							</div>
						</div>
					</div>
					<div class="droplist__item-row">
						<div class="site-size item-row">
							<div class="item-row__service-pack">
								<span class="service-pack__text">Пакет обслуживания двигателя</span>
								<div class="service-pack__icon">
									<span></span>
									<span></span>
								</div>
							</div>
							<div class="item-row__grid-service-prop">
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p>Toyota Prado, Land Cruiser, Бизнесlander, VW Touareg, Volvo XC 90, Audi Q7, Infiniti QX70, Mercedes S Class, MB GLE, GLS</p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p>Toyota Prado, Land Cruiser, Бизнесlander, VW Touareg, Volvo XC 90, Audi Q7, Infiniti QX70, Mercedes S Class, MB GLE, GLS</p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p>Toyota Prado, Land Cruiser, Бизнесlander, VW Touareg, Volvo XC 90, Audi Q7, Infiniti QX70, Mercedes S Class, MB GLE, GLS</p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p>Toyota Prado, Land Cruiser, Бизнесlander, VW Touareg, Volvo XC 90, Audi Q7, Infiniti QX70, Mercedes S Class, MB GLE, GLS</p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p></p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
							</div>
						</div>
					</div>
					<div class="droplist__item-row">
						<div class="site-size item-row">
							<div class="item-row__service-pack">
								<span class="service-pack__text">Пакет обслуживания двигателя</span>
								<div class="service-pack__icon">
									<span></span>
									<span></span>
								</div>
							</div>
							<div class="item-row__grid-service-prop">
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p>Toyota Prado, Land Cruiser, Бизнесlander, VW Touareg, Volvo XC 90, Audi Q7, Infiniti QX70, Mercedes S Class, MB GLE, GLS</p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p>Toyota Prado, Land Cruiser, Бизнесlander, VW Touareg, Volvo XC 90, Audi Q7, Infiniti QX70, Mercedes S Class, MB GLE, GLS</p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p>Toyota Prado, Land Cruiser, Бизнесlander, VW Touareg, Volvo XC 90, Audi Q7, Infiniti QX70, Mercedes S Class, MB GLE, GLS</p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p>Toyota Prado, Land Cruiser, Бизнесlander, VW Touareg, Volvo XC 90, Audi Q7, Infiniti QX70, Mercedes S Class, MB GLE, GLS</p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p></p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
							</div>
						</div>
					</div>
					<div class="droplist__item-row">
						<div class="site-size item-row">
							<div class="item-row__service-pack">
								<span class="service-pack__text">Пакет обслуживания двигателя</span>
								<div class="service-pack__icon">
									<span></span>
									<span></span>
								</div>
							</div>
							<div class="item-row__grid-service-prop">
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p>Toyota Prado, Land Cruiser, Бизнесlander, VW Touareg, Volvo XC 90, Audi Q7, Infiniti QX70, Mercedes S Class, MB GLE, GLS</p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p>Toyota Prado, Land Cruiser, Бизнесlander, VW Touareg, Volvo XC 90, Audi Q7, Infiniti QX70, Mercedes S Class, MB GLE, GLS</p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p>Toyota Prado, Land Cruiser, Бизнесlander, VW Touareg, Volvo XC 90, Audi Q7, Infiniti QX70, Mercedes S Class, MB GLE, GLS</p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p>Toyota Prado, Land Cruiser, Бизнесlander, VW Touareg, Volvo XC 90, Audi Q7, Infiniti QX70, Mercedes S Class, MB GLE, GLS</p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p></p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
							</div>
						</div>
					</div>
					<div class="droplist__item-row">
						<div class="site-size item-row">
							<div class="item-row__service-pack">
								<span class="service-pack__text">Пакет обслуживания двигателя</span>
								<div class="service-pack__icon">
									<span></span>
									<span></span>
								</div>
							</div>
							<div class="item-row__grid-service-prop">
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p>Toyota Prado, Land Cruiser, Бизнесlander, VW Touareg, Volvo XC 90, Audi Q7, Infiniti QX70, Mercedes S Class, MB GLE, GLS</p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p>Toyota Prado, Land Cruiser, Бизнесlander, VW Touareg, Volvo XC 90, Audi Q7, Infiniti QX70, Mercedes S Class, MB GLE, GLS</p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p>Toyota Prado, Land Cruiser, Бизнесlander, VW Touareg, Volvo XC 90, Audi Q7, Infiniti QX70, Mercedes S Class, MB GLE, GLS</p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p>Toyota Prado, Land Cruiser, Бизнесlander, VW Touareg, Volvo XC 90, Audi Q7, Infiniti QX70, Mercedes S Class, MB GLE, GLS</p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p></p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
							</div>
						</div>
					</div>
					<div class="droplist__item-row">
						<div class="site-size item-row">
							<div class="item-row__service-pack">
								<span class="service-pack__text">Пакет обслуживания двигателя</span>
								<div class="service-pack__icon">
									<span></span>
									<span></span>
								</div>
							</div>
							<div class="item-row__grid-service-prop">
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p>Toyota Prado, Land Cruiser, Бизнесlander, VW Touareg, Volvo XC 90, Audi Q7, Infiniti QX70, Mercedes S Class, MB GLE, GLS</p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p>Toyota Prado, Land Cruiser, Бизнесlander, VW Touareg, Volvo XC 90, Audi Q7, Infiniti QX70, Mercedes S Class, MB GLE, GLS</p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p>Toyota Prado, Land Cruiser, Бизнесlander, VW Touareg, Volvo XC 90, Audi Q7, Infiniti QX70, Mercedes S Class, MB GLE, GLS</p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p>Toyota Prado, Land Cruiser, Бизнесlander, VW Touareg, Volvo XC 90, Audi Q7, Infiniti QX70, Mercedes S Class, MB GLE, GLS</p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p></p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
							</div>
						</div>
					</div>
					<div class="droplist__item-row">
						<div class="site-size item-row">
							<div class="item-row__service-pack">
								<span class="service-pack__text">Пакет обслуживания двигателя</span>
								<div class="service-pack__icon">
									<span></span>
									<span></span>
								</div>
							</div>
							<div class="item-row__grid-service-prop">
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p>Toyota Prado, Land Cruiser, Бизнесlander, VW Touareg, Volvo XC 90, Audi Q7, Infiniti QX70, Mercedes S Class, MB GLE, GLS</p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p>Toyota Prado, Land Cruiser, Бизнесlander, VW Touareg, Volvo XC 90, Audi Q7, Infiniti QX70, Mercedes S Class, MB GLE, GLS</p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p>Toyota Prado, Land Cruiser, Бизнесlander, VW Touareg, Volvo XC 90, Audi Q7, Infiniti QX70, Mercedes S Class, MB GLE, GLS</p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p>Toyota Prado, Land Cruiser, Бизнесlander, VW Touareg, Volvo XC 90, Audi Q7, Infiniti QX70, Mercedes S Class, MB GLE, GLS</p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p></p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
							</div>
						</div>
					</div>
					<div class="droplist__item-row">
						<div class="site-size item-row">
							<div class="item-row__service-pack">
								<span class="service-pack__text">Пакет обслуживания двигателя</span>
								<div class="service-pack__icon">
									<span></span>
									<span></span>
								</div>
							</div>
							<div class="item-row__grid-service-prop">
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p>Toyota Prado, Land Cruiser, Бизнесlander, VW Touareg, Volvo XC 90, Audi Q7, Infiniti QX70, Mercedes S Class, MB GLE, GLS</p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p>Toyota Prado, Land Cruiser, Бизнесlander, VW Touareg, Volvo XC 90, Audi Q7, Infiniti QX70, Mercedes S Class, MB GLE, GLS</p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p>Toyota Prado, Land Cruiser, Бизнесlander, VW Touareg, Volvo XC 90, Audi Q7, Infiniti QX70, Mercedes S Class, MB GLE, GLS</p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p>Toyota Prado, Land Cruiser, Бизнесlander, VW Touareg, Volvo XC 90, Audi Q7, Infiniti QX70, Mercedes S Class, MB GLE, GLS</p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p></p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
							</div>
						</div>
					</div>
					<div class="droplist__item-row">
						<div class="site-size item-row">
							<div class="item-row__service-pack">
								<span class="service-pack__text">Пакет обслуживания двигателя</span>
								<div class="service-pack__icon">
									<span></span>
									<span></span>
								</div>
							</div>
							<div class="item-row__grid-service-prop">
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p>Toyota Prado, Land Cruiser, Бизнесlander, VW Touareg, Volvo XC 90, Audi Q7, Infiniti QX70, Mercedes S Class, MB GLE, GLS</p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p>Toyota Prado, Land Cruiser, Бизнесlander, VW Touareg, Volvo XC 90, Audi Q7, Infiniti QX70, Mercedes S Class, MB GLE, GLS</p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p>Toyota Prado, Land Cruiser, Бизнесlander, VW Touareg, Volvo XC 90, Audi Q7, Infiniti QX70, Mercedes S Class, MB GLE, GLS</p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p>Toyota Prado, Land Cruiser, Бизнесlander, VW Touareg, Volvo XC 90, Audi Q7, Infiniti QX70, Mercedes S Class, MB GLE, GLS</p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p></p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
							</div>
						</div>
					</div>
					<div class="droplist__item-row">
						<div class="site-size item-row">
							<div class="item-row__service-pack">
								<span class="service-pack__text">Пакет обслуживания двигателя</span>
								<div class="service-pack__icon">
									<span></span>
									<span></span>
								</div>
							</div>
							<div class="item-row__grid-service-prop">
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p>Toyota Prado, Land Cruiser, Бизнесlander, VW Touareg, Volvo XC 90, Audi Q7, Infiniti QX70, Mercedes S Class, MB GLE, GLS</p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p>Toyota Prado, Land Cruiser, Бизнесlander, VW Touareg, Volvo XC 90, Audi Q7, Infiniti QX70, Mercedes S Class, MB GLE, GLS</p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p>Toyota Prado, Land Cruiser, Бизнесlander, VW Touareg, Volvo XC 90, Audi Q7, Infiniti QX70, Mercedes S Class, MB GLE, GLS</p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p>Toyota Prado, Land Cruiser, Бизнесlander, VW Touareg, Volvo XC 90, Audi Q7, Infiniti QX70, Mercedes S Class, MB GLE, GLS</p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
								<div class="grid-service-prop__title">
									<span>Масляное ТО – пакет люкс (синтетическое масло)</span>
								</div>
								<div class="grid-service-prop__desc">
									<p></p>
								</div>
								<div class="grid-service-prop__price">
									<span>1900</span><span>грн.</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
<?php get_footer(); ?>
