<?php
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

function __renderVotedRow( $review, $unvotedIcon = '', $votedIcon = '') {
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
	for ( $i = 0; $i <= 4; $i++) {
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
	$data   = array();
	foreach ( $reviews as $k => $review ) {
		$rating = __renderVotedRow($review, $unvotedUrl, $votedUrl);
		array_push( $data, array(
				'name'   => $review['fio'],
				'photo'   => $review['photo'],
				'work'   => $review['profesy'],
				'rating' => $rating,
				'text'   => $review['rev-text'],
			)
		);
	}
	$returned['title'] = $title;
	$returned['content'] = $data;
	return $returned;
}
