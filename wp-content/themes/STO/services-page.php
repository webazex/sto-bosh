<?php
/*
Template Name: Страница услуг
*/
get_header();
$title = "w"
?>
    <main class="service">
        <section>
            <?=renderFirstSection('', "Sample Maxima title");?>
        </section>
        <section style="background-color: #E5E5E5;">
            <div class="site-size">
                <div class="site-size__service-content">
                    <h3 class="service-content__title">
                        <span class="title-h3__text">Услуги сервиса — BOSCH Auto Service «Центр Херсон»</span>
                    </h3>
                    <div class="service-content__container-grid">
                        <div class="container-grid__item-row">
                            <img class="item-row__icon" src="css/pic/i1.png" alt="">
                            <span class="item-row__text">Капитальный ремонт двигателя</span>
                        </div>
                        <div class="container-grid__item-row">
                            <img class="item-row__icon" src="css/pic/i1.png" alt="">
                            <span class="item-row__text">Капитальный ремонт двигателя</span>
                        </div>
                        <div class="container-grid__item-row">
                            <img class="item-row__icon" src="css/pic/i1.png" alt="">
                            <span class="item-row__text">Капитальный ремонт двигателя</span>
                        </div>
                        <div class="container-grid__item-row">
                            <img class="item-row__icon" src="css/pic/i1.png" alt="">
                            <span class="item-row__text">Капитальный ремонт двигателя</span>
                        </div>
                        <div class="container-grid__item-row">
                            <img class="item-row__icon" src="css/pic/i1.png" alt="">
                            <span class="item-row__text">Капитальный ремонт двигателя</span>
                        </div>
                        <div class="container-grid__item-row">
                            <img class="item-row__icon" src="css/pic/i1.png" alt="">
                            <span class="item-row__text">Капитальный ремонт двигателя</span>
                        </div>
                        <div class="container-grid__item-row">
                            <img class="item-row__icon" src="css/pic/i1.png" alt="">
                            <span class="item-row__text">Капитальный ремонт двигателя</span>
                        </div>
                        <div class="container-grid__item-row">
                            <img class="item-row__icon" src="css/pic/i1.png" alt="">
                            <span class="item-row__text">Капитальный ремонт двигателя</span>
                        </div>
                        <div class="container-grid__item-row">
                            <img class="item-row__icon" src="css/pic/i1.png" alt="">
                            <span class="item-row__text">Капитальный ремонт двигателя</span>
                        </div>
                        <div class="container-grid__item-row">
                            <img class="item-row__icon" src="css/pic/i1.png" alt="">
                            <span class="item-row__text">Капитальный ремонт двигателя</span>
                        </div>
                        <div class="container-grid__item-row">
                            <img class="item-row__icon" src="css/pic/i1.png" alt="">
                            <span class="item-row__text">Капитальный ремонт двигателя</span>
                        </div>
                        <div class="container-grid__item-row">
                            <img class="item-row__icon" src="css/pic/i1.png" alt="">
                            <span class="item-row__text">Капитальный ремонт двигателя</span>
                        </div>
                        <div class="container-grid__item-row">
                            <img class="item-row__icon" src="css/pic/i1.png" alt="">
                            <span class="item-row__text">Капитальный ремонт двигателя</span>
                        </div>
                        <div class="container-grid__item-row">
                            <img class="item-row__icon" src="css/pic/i1.png" alt="">
                            <span class="item-row__text">Капитальный ремонт двигателя</span>
                        </div>
                        <div class="container-grid__item-row">
                            <img class="item-row__icon" src="css/pic/i1.png" alt="">
                            <span class="item-row__text">Капитальный ремонт двигателя</span>
                        </div>
                        <div class="container-grid__item-row">
                            <img class="item-row__icon" src="css/pic/i1.png" alt="">
                            <span class="item-row__text">Капитальный ремонт двигателя</span>
                        </div>
                        <div class="container-grid__item-row">
                            <img class="item-row__icon" src="css/pic/i1.png" alt="">
                            <span class="item-row__text">Капитальный ремонт двигателя</span>
                        </div>
                    </div>
                    <div class="service-content__container-form-left-img">
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
                                               id="agree1">
                                        <label for="agree1">
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
<?php get_footer();
