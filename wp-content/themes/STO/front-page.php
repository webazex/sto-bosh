<?php
/*
Template Name: Главная страница
*/
get_header();
?>
	<main class="home">
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
				<div class="container-title__home-bg" style="background-image: url(<?php the_field('home__bg');?>);"></div>
				<div class="container-title__home-content">
					<div class="home-content__center-block">
						<h1 class="center-block__title-h1">
							<span class="title-h1__text"><?php the_field('home__title'); ?></span>
						</h1>
						<h4 class="center-block__title-h4">
							<span class="title-h4__text"><?php the_field('home__subtitle'); ?></span>
						</h4>
						<div class="center-block__row-btns">
							<a href="#" id="stoBtn" class="row-btns__link">
								<span class="link__text">Запись на сервис</span>
							</a>
							<a href="#" class="row-btns__link no-bg borders bt-mw-156">
								<span class="link__text">Детальнее</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section style="background-color: #F2F3F5;">
			<div class="site-size">
				<div class="site-size__content">
					<div class="content__section-prs">
                        <?php
                        $prsOne = get_field('prs_1');
                        $prsTwo = get_field('prs_2');
                        $prsThree = get_field('prs_3');
                        ?>
						<div class="section-prs__item">
							<img src="<?=$prsOne['home__prs-icon'];?>">
							<h3><span><?=$prsOne['home__prs-title'];?></span></h3>
							<p><?=$prsOne['home__prs-text'];?></p>
						</div>
						<div class="section-prs__item">
                            <img src="<?=$prsTwo['home__prs-icon'];?>">
                            <h3><span><?=$prsTwo['home__prs-title'];?></span></h3>
                            <p><?=$prsTwo['home__prs-text'];?></p>
						</div>
						<div class="section-prs__item">
                            <img src="<?=$prsThree['home__prs-icon'];?>">
                            <h3><span><?=$prsThree['home__prs-title'];?></span></h3>
                            <p><?=$prsThree['home__prs-text'];?></p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php
        //service
        get_template_part('parts/service');
        //callbackcall-form
        get_template_part('parts/cbc-form');
        //advantages-section
		get_template_part('parts/advantages');
		//snake-content
		get_template_part('parts/snake-content');
		//reviews
		get_template_part('parts/reviews');
        //map-ifraime
        get_template_part('parts/map');
        ?>

	</main>
<?php get_footer(); ?>