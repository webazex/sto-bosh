<?php
add_action( 'after_setup_theme', 'sto_theme_actions' );
function sto_theme_actions() {
	$menuLocations = array(
		'header' => "Меню в шапке сайта",
		'footer' => "Меню в подвале сайта",
	);
	register_nav_menus( $menuLocations );
}

add_action( 'wp_enqueue_scripts', 'jquery_add' );
function jquery_add() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', false, null, true );
	wp_enqueue_script( 'jquery' );
}

add_action( 'wp_enqueue_scripts', 'sto_themes_ss' );
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function sto_themes_ss() {
	wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/css/slick.css' );
	wp_enqueue_style( 'slick-t-css', get_template_directory_uri() . '/css/slick-theme.css' );
	wp_enqueue_style( 'main-css', get_template_directory_uri() . '/css/main.css' );
	wp_enqueue_script( 'jquery-ui', '//code.jquery.com/ui/1.12.1/jquery-ui.js', array(), '1.0.0', true );
	wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/js/slick.js', array(), '1.0.0', true );
	wp_enqueue_script( 'datapicker-js', get_template_directory_uri() . '../js/datepicker-ru.js', array(), '1.0.0', true );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
}

function change_wp_nav_menu( $classes, $args, $depth ) {
	foreach ( $classes as $key => $class ) {
		if ( $class == 'sub-menu' ) {
			$classes[ $key ] = 'submenu__list';
		}
	}

//		print_r($args);

	return $classes;
}

class STO_Walker_Menu extends Walker_Nav_Menu {

	// add classes to ul sub-menus
	function start_lvl( &$output, $depth = 0, $args = null ) {
		// depth dependent classes
		$indent        = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent
		$display_depth = ( $depth + 1 ); // because it counts the first submenu as 0
		$classes       = array(
			'sub-menu submenu__list',
			( $display_depth % 2 ? 'menu-odd' : 'menu-even' ),
			( $display_depth >= 2 ? 'sub-sub-menu' : '' ),
			'menu-depth-' . $display_depth
		);
		$class_names   = implode( ' ', $classes );


		// build html
		$output .= "\n" . $indent . '</div><div class="menu-item__submenu"><ul class="' . $class_names . '">' . "\n";
	}

	// add main/sub classes to li's and links
	function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		global $wp_query;
		$indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

		// depth dependent classes
		$depth_classes = array(
			( $depth == 0 ? 'main-menu-item' : 'sub-menu-item list__container' ),
			( $depth >= 2 ? 'sub-sub-menu-item' : '' ),
			( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
			'menu-item-depth-' . $depth
		);

		$depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

		// passed classes
		$classes     = empty( $item->classes ) ? array() : (array) $item->classes;
		$class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );
		if ( $depth >= 1 ) {
			$html = '<div class="container__item"><span>';
		} else {
			$html = '<div class="menu-item__item"><span>';
		}

		// build html
		$output .= $indent . '<li id="nav-menu-item-' . $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">' . $html;

		// link attributes
		$attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) . '"' : '';
		$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) . '"' : '';
		$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) . '"' : '';
		$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) . '"' : '';
		$attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';

		$item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
			$args->before,
			$attributes,
			$args->link_before,
			apply_filters( 'the_title', $item->title, $item->ID ),
			$args->link_after,
			$args->after
		);

		// build html
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}


function sto_menu_header_classes( $classes, $item ) {
	$classes[] = 'container__menu-item';

	return $classes;
}

function renderStoHeaderMenu( $mobile = false ) {
	$argsSubMenu = [
		'container'       => 'div',
		'container_class' => 'menu-item__submenu',
	];
	add_filter( 'nav_menu_submenu_css_class', 'change_wp_nav_menu', 10, 3 );

//	add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );
//	function my_wp_nav_menu_args( $args = '' ){
//		$args['container'] = false;
//		return $args;
//	}


	// свой класс построения меню:


	add_filter( 'nav_menu_css_class', 'sto_menu_header_classes', 10, 2 );


	if ( $mobile === true ) {
		$args = [
			'theme_location'  => 'header',
			'menu'            => '',
			'container'       => false,
			'container_class' => '',
			'container_id'    => '',
			'menu_class'      => 'mobile-dropdown__mobile-menu',
			'menu_id'         => '',
			'echo'            => false,
			'fallback_cb'     => '__return_empty_string',
//		'before'          => '<div class="menu-item__item"><span>',
			'before'          => '',
//		'after'           => '</span></div>',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'depth'           => 0,
			'walker'          => new STO_Walker_Menu(),
		];
	} else {
		$args = [
			'theme_location'  => 'header',
			'menu'            => '',
			'container'       => false,
			'container_class' => '',
			'container_id'    => '',
			'menu_class'      => 'menu menu__container',
			'menu_id'         => '',
			'echo'            => false,
			'fallback_cb'     => '__return_empty_string',
//		'before'          => '<div class="menu-item__item"><span>',
			'before'          => '',
//		'after'           => '</span></div>',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'depth'           => 0,
			'walker'          => new STO_Walker_Menu(),
		];
	}
	$menu = wp_nav_menu( $args );

	return $menu;
}

function renderServiseSection( $sliderField = 'services__slider', $pageId = 100 ) {
	$html   = '<div class="site-size__slider-section">';
	$title  = CFS()->get( 'service__title', $pageId );
	$html   .= '<h2 class="slider-section__title">
						<span class="title__text">' . $title . '</span>
					</h2>';
	$slider = CFS()->get( $sliderField, $pageId );
	$html   .= '<div class="slider-section__slider">';
	foreach ( $slider as $k => $slide ) {
		$src   = $slide['icon'];
		$title = $slide['title'];
		$text  = $slide['service__desc'];
		$html  .= '<div class="slider__item" id="' . $k . '">';
		$html  .= '<img src="' . $src . '" alt="">
		<h5>' . $title . '</h5>
		<p>' . $text . '</p></div>';
	}
	$html .= '</div></div>';

	return $html;
}

function renderCallbackCallForm( $pageId = 100 ) {
	$id        = "cf" . $pageId . 'sf' . $pageId;
	$title     = CFS()->get( 'сcf__title' );
	$sectionBg = CFS()->get( 'ccf-section__bg' );
	$html      = '<section style="background-color: ' . $sectionBg . '; padding: 50px 0;">
			<div class="site-size">
				<div class="site-size__callback-form">
					<span class="callback-form__text">' . $title . '</span>
					<form action="" method="post" id="' . $id . '">
						<input type="text" name="name" placeholder="Имя">
						<input type="tel" name="phone" placeholder="Телефон">
						<button type="submit"><span>Отправить</span></button>
					</form>
				</div>
			</div>
		</section>';

	return $html;
}

function __getAdvantage( $field, $number ) {
	$title = $field['title'];
	$desc  = $field['desc'];
	$html  = '<div class="row__adv-item">
							<span class="adv-item__title">' . $title . '</span>
							<p>' . $desc . '</p>
							<span class="adv-item__number">' . $number . '</span>
						</div>';

	return $html;
}

function renderAdvantagesSection( $pageId = 100 ) {
	$sectionTitle = get_field( 'section-adv__title', $pageId );
	$sectionBg    = get_field( 'section-adv__bg', $pageId );
	$advOne       = __getAdvantage( get_field( 'adv_1', $pageId ), 1 );
	$advTwo       = __getAdvantage( get_field( 'adv_2', $pageId ), 2 );
	$advThree     = __getAdvantage( get_field( 'adv_3', $pageId ), 3 );
	$html         = '<section style="background-color: ' . $sectionBg . '">
			<div class="site-size">
				<div class="site-size__advantages-content">
					<h2 class="advantages-content__title-h2">
						<span class="title-h2__text">
							' . $sectionTitle . '
						</span>
					</h2>
					<div class="advantages-content__row">
						' . $advOne . $advTwo . $advThree . '
					</div>
				</div>
			</div>
		</section>';

	return $html;
}

function renderContentSection( $pageId = 100 ) {
	$content   = get_field( 'block-content', $pageId );
	$sectionBg = $content['content-section__bg'];
	$title     = $content['content-section__title'];
	$text      = $content['home__text-content'];
	$img       = $content['home__img'];
	$textTwo   = $content['home__text-content_2'];
	//order
	//text, video, img, text2
	//repeat
	if ( intval( $content['video__source'] ) == 1 ) {
		$youtube = $content['youtube_frame'];
		$video   = '<iframe width="100%" height="250px" src="' . $youtube . '" 
title="YouTube video player" frameborder="0"
allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
	} elseif ( intval( $content['video__source'] ) == 2 ) {
		$src   = $content['home__link-content'];
		$video = '<video src="' . $src . '" controls="controls" muted="muted"></video>';
	}
	$html = '<section style="background-color: ' . $sectionBg . '">
			<div class="site-size">
				<div class="site-size__content-snake">
					<h2 class="content-snake__title">
						<span class="title-h2__text">' . $title . '</span>
					</h2>
					<div class="content-snake__grid">
						<div class="grid__item">
							' . $text . '
						</div>
						<div class="grid__item">
							' . $video . '
						</div>
						<div class="grid__item">
							<img src="' . $img . '" alt="">
						</div>
						<div class="grid__item">
							' . $textTwo . '
						</div>
					</div>
				</div>
			</div>
		</section>';

	return $html;
}

function __renderVotedRow( $review, $unvotedIcon = '', $votedIcon = '' ) {
	try {
		$vote = intval( array_values( $review['rating'] )[0] );
	} catch ( Exception $e ) {
		$vote = 0;
		echo 'Ошибка получения оценки для отзыва: ', $e->getMessage(), "\n";
		echo 'Обратитесь к webazex@gmail.com';
	}
	if ( empty( $unvotedIcon ) ) {
		$unvotedIcon = get_template_directory_uri() . '/css/pic/t-star.png';
		$cssUnvote   = 'style="background-image: url(\'' . $unvotedIcon . '\')"';

	} else {
		$cssUnvote = 'style="background-image: url(\'' . $unvotedIcon . '\')"';
	}
	//=======
	if ( empty( $votedIcon ) ) {
		$votedIcon = get_template_directory_uri() . '/css/pic/gold-s.png';
		$cssVote   = 'style="background-image: url(\'' . $votedIcon . '\')';
	} else {
		$cssVote = 'style="background-image: url(\'' . $votedIcon . '\')';
	}

	//======
	$stars = '';
	for ( $i = 0; $i <= 4; $i ++ ) {
		if ( $i <= $vote ) {
			$stars .= '<span class="stars-row__star grey-star" ' . $cssVote . '"></span>';
		} else {
			$stars .= '<span class="stars-row__star" ' . $cssUnvote . '"></span>';
		}
	}
	$html = '<div class="item__stars-row">' . $stars . '</div>';

	return $html;
}

function renderReviewsSection( $pageId = 100 ) {
	$title      = CFS()->get( 'reviews__title', $pageId );
	$unvotedUrl = CFS()->get( 'unvoted_icon', $pageId );
	$votedUrl   = CFS()->get( 'voted_icon', $pageId );
	$reviews    = CFS()->get( 'reviews_slider', $pageId );
	$data       = array();
	foreach ( $reviews as $k => $review ) {
		$rating = __renderVotedRow( $review, $unvotedUrl, $votedUrl );
		array_push( $data, array(
				'name'   => $review['fio'],
				'photo'  => $review['photo'],
				'work'   => $review['profesy'],
				'rating' => $rating,
				'text'   => $review['rev-text'],
			)
		);
	}
	$returned['title']   = $title;
	$returned['content'] = $data;

	return $returned;
}

function renderFirstSection( $img, $title, $subtitle = false, $pageId = false ) {
	if ( ( empty( $img ) or isset( $img ) ) ) {
		$img = get_template_directory_uri() . '/css/pic/home-bg.jpg';
	}
	if ( ( empty( $subtitle ) or isset( $subtitle ) or ( $subtitle = false ) ) ) {
		$subtitle = '';
	} else {
		$dom = '<h4 class="center-block__title-h4">
							<span class="title-h4__text">' . $subtitle . '</span>
						</h4>';
	};
	if ( ! $pageId ) {
		// получаем данные с произвольных полей, используя этот id
	}
	$html = '<div class="home__container-title">
                <div class="container-title__layer"></div>
                <div class="container-title__services-bg" style="background-image: url(' . $img . '"></div>
                <div class="container-title__services-content">
                    <div class="services-content__center-block">
                        <h1 class="center-block__title-h1">
                            <span class="title-h1__text">' . $title . '</span>
                        </h1>' . $dom . '                        
                        <div class="center-block__row-btns-order">
                            <a href="#" id="stoBtn" class="row-btns__link call-order">
                                <span class="link__text">Заказать звонок</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>';

	return $html;
}

function renderServiceListSection( $title, $backgroundColor = "#E5E5E5", $pageId = false ) {
	if ( ( empty( $title ) or isset( $title ) ) ) {
		$title = CFS()->get( 'service_title', $pageId );
	}

	$html         = '<h3 class="service-content__title">
                        <span class="title-h3__text">' . $title . '</span>
                    </h3>';
	$servicesList = CFS()->get( 'service_list', $pageId );
	if ( empty( $servicesList ) ) {
		$html .= '<div class="service-content__none">
<span>В скором времени услуги будут добавлены на сайт, ожидайте.</span>
</div>';
	} else {
		$html .= '<div class="service-content__container-grid">';
		foreach ( $servicesList as $service ) {
			$icon = $service['icon'];
			$text = $service['text'];
			$html .= '<div class="container-grid__item-row">
                            <img class="item-row__icon" src="' . $icon . '" alt="">
                            <span class="item-row__text">' . $text . '</span>
                        </div>';
		}
		$html .= '</div>';
	}

	return $html;
}

function renderServicesPage( $title, $img, $pageId = false, $backgroundColor = "#E5E5E5", $action = false, $method = 'POST' ) {
	$html = '<section style="background-color: ' . $backgroundColor . ';">
            <div class="site-size">
                <div class="site-size__service-content">';
	$html .= renderServiceListSection( $title );
	$html .= renderFormOrder( $img, '', $action, $pageId, $method );
	$html .= '</div>
            </div>
        </section>';

	return $html;
}

function renderFormOrder( $img, $formTitle, $action = false, $pageId = false, $method = 'POST' ) {
	if ( ( empty( $img ) or isset( $img ) ) ) {
		$img = get_template_directory_uri() . '/img/img-with-form.jpg';
	}
	if ( ( empty( $formTitle ) or isset( $formTitle ) or ( $formTitle === false ) ) ) {
		$formTitle = "Онлайн запись на СТО";
	}
	if ( ( empty( $action ) or isset( $action ) or ( $action === false ) ) ) {
		$action = get_template_directory_uri() . '/back/mail/sender.php';
	}
	if ( ( empty( $pageId ) or isset( $pageId ) or ( $action === $pageId ) ) ) {
		$pageId = get_the_ID();
	}
	$html = '<div class="service-content__container-form-left-img">';
	$html .= '<div class="container-form-left-img__box">
                            <div class="box__layout"></div>
                            <img src="' . $img . '" alt="">
                        </div>
                        <div class="container-form-left-img__form">
                            <span class="form__title">' . $formTitle . '</span>
                            <form action="' . $action . '" method="' . $method . '">
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
                                               id="' . $pageId . '">
                                        <label for="' . $pageId . '">
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
                    </div>';

	return $html;
}

function renderServiceContentSection( $title = '', $content = '', $img = '', $pageId = false, $imgWidth = 'default', $order = 'default' ) {
	if ( $pageId === false ) {
		$pageId = get_the_ID();
	}
	if ( empty( $content ) or isset( $content ) ) {
		$content = CFS()->get( 'content__text-block', $pageId );
	}
	if ( empty( $img ) or isset( $img ) ) {
		$img = CFS()->get( 'content__img', $pageId );
	}
	if ( empty( $title ) or isset( $title ) ) {
		$titleHtml = '';
	} else {
		$titleHtml = '<h2 class="content__h2-title"><span>' . $title . '</span></h2>';
	}
	if ( empty( $imgWidth ) or isset( $imgWidth ) ) {
		$imgSizeType = CFS()->get( 'content__img-size-type', $pageId );
	} else {
		$imgSizeType = $imgWidth;
	}
	if ( empty( $imgSizeType ) or isset( $imgSizeType ) ) {
		$imgSizeType = 'default';
	}
	$showPrice         = boolval( CFS()->get( 'show_price', $pageId ) );
	$pricesContent     = CFS()->get( 'service-content__price', $pageId );
	$priceSectionTitle = CFS()->get( 'price-section__title', $pageId );
	$showStages        = boolval( CFS()->get( 'show_repaire', $pageId ) );
	$customWidth       = '';
	switch ( $imgSizeType ) {
		case 'default':
			$imgSizeClass = 'default-size';
			break;
		case 'min':
			$imgSizeClass = 'min-size';
			break;
		case 'large':
			$imgSizeClass = 'large-size';
			break;
		default:
			try {
				$customWidth = intval( $imgSizeType );
			} catch ( Exception $e ) {
				echo "Ожидаемое значение не было целым числом, либо преобразование не удалось.";
			}
			$imgSizeClass = 'custom-size';
			break;
	}
	$html = '<section><div class="site-size"><div class="site-size__content">' . $titleHtml;
	$html .= '<div class="content__grid-area">
	
		<div class="grid-area__content ' . $imgSizeClass . '">
			<img class="content__img" src="' . $img . '" alt="" width="' . $customWidth . '">
		</div>
		<div class="content__text-service-page">' . $content . '</div>
	</div>';
	if ( $showPrice ) {
		$html .= '';
	} else {
		$html .= '';
	}
	if ( $showStages ) {

	} else {
		$html .= '';
	}
	$html .= '</div></div></section>';

	return $html;
}

function getContactTitle( $pageId = false ) {
	if ( $pageId == false ) {
		return CFS()->get( 'contacts__title' );
	} else {
		return CFS()->get( 'contacts__title', $pageId );
	}

}

function getContactEmail( $pageId = false ) {
	if ( $pageId == false ) {
		return CFS()->get( 'email' );
	} else {
		return CFS()->get( 'email', $pageId );
	}
}

function getContactAdress( $pageId = false ) {
	if ( $pageId == false ) {
		return CFS()->get( 'adress' );
	} else {
		return CFS()->get( 'adress', $pageId );
	}
}

function getContactsPhones( $pageId = false ) {
	if ( $pageId == false ) {
		return CFS()->get( 'phones' );
	} else {
		return CFS()->get( 'phones', $pageId );
	}

}

function getPersonals( $pageId = false ) {
	if ( $pageId == false ) {
		return CFS()->get( 'personals' );
	} else {
		return CFS()->get( 'personals', $pageId );
	}
}

function renderPopups( $render = false ) {
	$html           = '';
	$stoPopup       = '<div class="popups__sto" id="sto">
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
            </div>';
	$callOrderPopup = '<div class="popups__callOrder">
		<form action="" method="post">
		<input type="tel" name="phone" placeholder="Ваш номер">
		<button type="submit" class="btn-submit">
		<span>Заказать звонок</span>
		</button>
		</form>
</div>';
	if ( $render === false ) {
		$html .= $callOrderPopup . $stoPopup;
	} elseif ( $render == "callOrder" ) {
		$html .= $callOrderPopup;
	} elseif ( $render == "sto" ) {
		$html .= $stoPopup;
	}

	return $html;
}

function getHeaderLogo(){
	$homeId = get_option( 'page_on_front' );
	return CFS()->get('logo_header', $homeId);
}

function getFooterLogo(){
	$homeId = get_option( 'page_on_front');
	return CFS()->get('logo_footer', $homeId);
}

function getWorksTime(){
	$homeId = get_option( 'page_on_front');
	$html = '';
	$type = CFS()->get('callback_type', $homeId);
	$monday = CFS()->get('monday', $homeId);
	$tuesday = CFS()->get('tuesday', $homeId);
	$wednesday = CFS()->get('wednesday', $homeId);
	$thursday = CFS()->get('thursday', $homeId);
	$friday = CFS()->get('friday', $homeId);
	$saturday = CFS()->get('saturday', $homeId);
	$sunday = CFS()->get('sunday', $homeId);
	$period = CFS()->get('work_period', $homeId);
	$periodSa = CFS()->get('weekend_one', $homeId);
	$periodSt = CFS()->get('weekend_two', $homeId);
	if ($type){
		for($i = 1; $i <=7; $i++){
			switch ($i){
				case 1:
					$html.= '<div><span>Пн</span><span>'.array_values($monday)[0].'</span></div>';
					break;
				case 2:
					$html.= '<div><span>Вт</span><span>'.array_values($tuesday)[0].'</span></div>';
					break;
				case 3:
					$html.= '<div><span>Ср</span><span>'.array_values($wednesday)[0].'</span></div>';
					break;
				case 4:
					$html.= '<div><span>Чт</span><span>'.array_values($thursday)[0].'</span></div>';
					break;
				case 5:
					$html.= '<div><span>Пт</span><span>'.array_values($friday)[0].'</span></div>';
					break;
				case 6:
					$html.= '<div><span>Сб</span><span>'.array_values($saturday)[0].'</span></div>';
					break;
				case 7:
					$html.= '<div><span>Вс</span><span>'.array_values($sunday)[0].'</span></div>';
					break;
			}

		}

	}else{
		for ($i = 1; $i <=3; $i++){
			switch ($i){
				case 1:
					$html .= '<div><span>Пн - Пт</span><span>'.array_values($period)[0].'</span></div>';
					break;
				case 2:
					$html .= '<div><span>Сб</span><span>'.array_values($periodSa)[0].'</span></div>';
					break;
				case 3:
					$html .= '<div><span>Вс</span><span>'.array_values($periodSt)[0].'</span></div>';
					break;
			}
		}
	}
	return $html;
}

function getFooterMenu(){
	$args = [
		'theme_location'  => 'footer',
		'menu'            => '',
		'container'       => false,
		'container_class' => '',
		'container_id'    => '',
		'menu_class'      => '',
		'menu_id'         => '',
		'echo'            => false,
		'fallback_cb'     => '__return_empty_string',
//		'before'          => '<div class="menu-item__item"><span>',
		'before'          => '',
//		'after'           => '</span></div>',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul>%3$s</ul>',
		'depth'           => 1,
		'walker'          => '',
	];
	return wp_nav_menu($args);
}

function getFooterSocialLinks($pId = false){
	if($pId === false){
		$id = get_option( 'page_on_front');
	}else{
		$id = intval($pId);
	}
	$links = CFS()->get('social-links', $id);
	$html = '';
	foreach ($links as $link) {
		$url = $link['link']['url'];
		$target = $link['link']['target'];
		if(empty($link['icon'])){
			$text = $link['link']['text'];
			$html .= '<a href="'.$url.'" class="links-footer__link" target="'.$target.'">
						<span class="link__text-menu-f">'.$text.'</span>
					</a>';
		}else{
			$src = $link['icon'];
			$html .= '<a href="'.$url.'" class="links-footer__link" target="'.$target.'">
						<img src="'.$src.'" alt="">
					</a>';
		}
	}
	return $html;
}

function renderSectionOne($title = '', $img = '', $mark = '', $content = '', $pageId = false) {
	$html = '';

	if($pageId === false){
		$pageId = intval(get_the_ID());
	}else{
		$pageId = intval($pageId);
	}
	$status = boolval(CFS()->get('s1_status', $pageId));

	if($status){
		if(empty($title)){
			$title = CFS()->get('s1_title', $pageId);
		}
		if(empty($content)){
			$content = CFS()->get('s1_text', $pageId);
		}
		if(empty($img)){
			$img = CFS()->get('s1_img', $pageId);
		}
		if(empty($mark)){
			$markContent = CFS()->get('s1_mark', $pageId);
			$text = '<span class="item-text__mark">'.$markContent.'</span>';
		}else{
			$text = '';
		}
		$html .= '<section>
		<div class="site-size">
			<div class="site-size__content-avtoz">
				<div class="content-avtoz__grid">
					<div class="grid__item-text">
					'.$text.'
						<h2 class="item-text__title-h2">
							<span class="title-h2__text">'.$title.'</span>
						</h2>
						'.$content.'
					</div>
					<img src="'.$img.'" alt="" class="grid__item-img">
				</div>
			</div>
		</div>
	</section>';
	}else{
		$html .= '';
	}
	return $html;
}