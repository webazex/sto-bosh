<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>STO home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap"
	      rel="stylesheet">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
	<?php wp_head(); ?>
</head>
<body>
<header>
	<div class="header-bg">
		<div class="site-size">
			<div class="site-size__header">
				<div class="header__logo-block">
					<img src="img/logo.png" alt="">
					<span>Bosch Service</span>
				</div>
				<div class="header__others-blocks">
					<div class="others-blocks__menu">
						<button class="menu__burger" id="mBtnBurger">
							<span></span>
							<span></span>
							<span></span>
						</button>
                        <?=renderStoHeaderMenu(); ?>
<!--						<ul class="menu__container">-->
<!--							<li class="container__menu-item has-subitem">-->
<!--								<div class="menu-item__item">-->
<!--									<span>Услуги</span>-->
<!--								</div>-->
<!--								<div class="menu-item__submenu">-->
<!--									<ul class="submenu__list">-->
<!--										<li class="list__container">-->
<!--											<div class="container__item">-->
<!--												<span>Диагностика перед покупкой</span>-->
<!--											</div>-->
<!--										</li>-->
<!--										<li class="list__container">-->
<!--											<div class="container__item">-->
<!--												<span>Диагностика перед покупкой</span>-->
<!--											</div>-->
<!--										</li>-->
<!--										<li class="list__container">-->
<!--											<div class="container__item">-->
<!--												<span>Диагностика перед покупкой</span>-->
<!--											</div>-->
<!--										</li>-->
<!--										<li class="list__container">-->
<!--											<div class="container__item">-->
<!--												<span>Диагностика перед покупкой</span>-->
<!--											</div>-->
<!--										</li>-->
<!--										<li class="list__container">-->
<!--											<div class="container__item">-->
<!--												<span>Диагностика перед покупкой</span>-->
<!--											</div>-->
<!--										</li>-->
<!--									</ul>-->
<!--								</div>-->
<!---->
<!--							</li>-->
<!--							<li class="container__menu-item">-->
<!--								<div class="menu-item__item">-->
<!--									<span>Автозапчасти BOSH</span>-->
<!--								</div>-->
<!--							</li>-->
<!--							<li class="container__menu-item">-->
<!--								<div class="menu-item__item">-->
<!--									<span>Цены</span>-->
<!--								</div>-->
<!--							</li>-->
<!--							<li class="container__menu-item">-->
<!--								<div class="menu-item__item">-->
<!--									<span>Контакты</span>-->
<!--								</div>-->
<!--							</li>-->
<!--						</ul>-->
					</div>
					<button class="others-blocks__callback-call">
						<span class="callback-call__text">Заказать звонок</span>
					</button>
				</div>
			</div>
		</div>
	</div>
	<div class="mobile-dropdown">
		<ul class="mobile-dropdown__mobile-menu">
			<li class="mobile-menu__container-item has-subitem">
				<div class="container-item__item">
					<span>Услуги</span>
				</div>
				<ul class="container-item__submenu">
					<li class="submenu__container">
						<div class="container__item">
							<span>Диагностика перед покупкой</span>
						</div>
					</li>
					<li class="submenu__container">
						<div class="container__item">
							<span>Ремонт ходовой</span>
						</div>
					</li>
					<li class="submenu__container">
						<div class="container__item">
							<span>АКП</span>
						</div>
					</li>
				</ul>
			</li>
			<li class="mobile-menu__container-item">
				<div class="container-item__item">
					<span>Услуги</span>
				</div>
			</li>
			<li class="mobile-menu__container-item has-subitem">
				<div class="container-item__item">
					<span>Услуги</span>
				</div>
				<ul class="container-item__submenu">
					<li class="submenu__container">
						<div class="container__item">
							<span>Диагностика перед покупкой</span>
						</div>
					</li>
					<li class="submenu__container">
						<div class="container__item">
							<span>Ремонт ходовой</span>
						</div>
					</li>
					<li class="submenu__container">
						<div class="container__item">
							<span>АКП</span>
						</div>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</header>