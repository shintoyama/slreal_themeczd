<?php
	
function shortcode_jinstar10($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'color' => '#ffc32c',
		'size' => '16px',
	),$atts));
	return '<span class="jinstar" style="color:'.$color.'; font-size:'.$size.';"><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></span>';
}
add_shortcode( 'jinstar1.0', 'shortcode_jinstar10' );


function shortcode_jinstar15($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'color' => '#ffc32c',
		'size' => '16px',
	),$atts));
	return '<span class="jinstar" style="color:'.$color.'; font-size:'.$size.';"><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></span>';
}
add_shortcode( 'jinstar1.5', 'shortcode_jinstar15' );


function shortcode_jinstar20($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'color' => '#ffc32c',
		'size' => '16px',
	),$atts));
	return '<span class="jinstar" style="color:'.$color.'; font-size:'.$size.';"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></span>';
}
add_shortcode( 'jinstar2.0', 'shortcode_jinstar20' );


function shortcode_jinstar25($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'color' => '#ffc32c',
		'size' => '16px',
	),$atts));
	return '<span class="jinstar" style="color:'.$color.'; font-size:'.$size.';"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i></span>';
}
add_shortcode( 'jinstar2.5', 'shortcode_jinstar25' );


function shortcode_jinstar30($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'color' => '#ffc32c',
		'size' => '16px',
	),$atts));
	return '<span class="jinstar" style="color:'.$color.'; font-size:'.$size.';"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></span>';
}
add_shortcode( 'jinstar3.0', 'shortcode_jinstar30' );


function shortcode_jinstar35($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'color' => '#ffc32c',
		'size' => '16px',
	),$atts));
	return '<span class="jinstar" style="color:'.$color.'; font-size:'.$size.';"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i></span>';
}
add_shortcode( 'jinstar3.5', 'shortcode_jinstar35' );


function shortcode_jinstar40($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'color' => '#ffc32c',
		'size' => '16px',
	),$atts));
	return '<span class="jinstar" style="color:'.$color.'; font-size:'.$size.';"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></span>';
}
add_shortcode( 'jinstar4.0', 'shortcode_jinstar40' );


function shortcode_jinstar45($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'color' => '#ffc32c',
		'size' => '16px',
	),$atts));
	return '<span class="jinstar" style="color:'.$color.'; font-size:'.$size.';"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>';
}
add_shortcode( 'jinstar4.5', 'shortcode_jinstar45' );


function shortcode_jinstar50($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'color' => '#ffc32c',
		'size' => '16px',
	),$atts));
	return '<span class="jinstar" style="color:'.$color.'; font-size:'.$size.';"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>';
}
add_shortcode( 'jinstar5.0', 'shortcode_jinstar50' );




function shortcode_star0() {
	$star_path = get_template_directory_uri().'/img/star0.png';
	return '<img class="star" src="'.$star_path.'" />';
}
add_shortcode( 'star0', 'shortcode_star0' );

function shortcode_star5() {
	$star_path = get_template_directory_uri().'/img/star5.png';
	return '<img class="star" src="'.$star_path.'" />';
}
add_shortcode( 'star0.5', 'shortcode_star5' );

function shortcode_star10() {
	$star_path = get_template_directory_uri().'/img/star10.png';
	return '<img class="star" src="'.$star_path.'" />';
}
add_shortcode( 'star1.0', 'shortcode_star10' );

function shortcode_star15() {
	$star_path = get_template_directory_uri().'/img/star15.png';
	return '<img class="star" src="'.$star_path.'" />';
}
add_shortcode( 'star1.5', 'shortcode_star15' );

function shortcode_star20() {
	$star_path = get_template_directory_uri().'/img/star20.png';
	return '<img class="star" src="'.$star_path.'" />';
}
add_shortcode( 'star2.0', 'shortcode_star20' );

function shortcode_star25() {
	$star_path = get_template_directory_uri().'/img/star25.png';
	return '<img class="star" src="'.$star_path.'" />';
}
add_shortcode( 'star2.5', 'shortcode_star25' );

function shortcode_star30() {
	$star_path = get_template_directory_uri().'/img/star30.png';
	return '<img class="star" src="'.$star_path.'" />';
}
add_shortcode( 'star3.0', 'shortcode_star30' );

function shortcode_star35() {
	$star_path = get_template_directory_uri().'/img/star35.png';
	return '<img class="star" src="'.$star_path.'" />';
}
add_shortcode( 'star3.5', 'shortcode_star35' );

function shortcode_star40() {
	$star_path = get_template_directory_uri().'/img/star40.png';
	return '<img class="star" src="'.$star_path.'" />';
}
add_shortcode( 'star4.0', 'shortcode_star40' );

function shortcode_star45() {
	$star_path = get_template_directory_uri().'/img/star45.png';
	return '<img class="star" src="'.$star_path.'" />';
}
add_shortcode( 'star4.5', 'shortcode_star45' );

function shortcode_star50() {
	$star_path = get_template_directory_uri().'/img/star50.png';
	return '<img class="star" src="'.$star_path.'" />';
}
add_shortcode( 'star5.0', 'shortcode_star50' );



function shortcode_num1() {
	$star_path = get_template_directory_uri().'/img/rank01.png';
	return '<img class="ranking-number" src="'.$star_path.'" />';
}
add_shortcode( '1', 'shortcode_num1' );

function shortcode_num2() {
	$star_path = get_template_directory_uri().'/img/rank02.png';
	return '<img class="ranking-number" src="'.$star_path.'" />';
}
add_shortcode( '2', 'shortcode_num2' );

function shortcode_num3() {
	$star_path = get_template_directory_uri().'/img/rank03.png';
	return '<img class="ranking-number" src="'.$star_path.'" />';
}
add_shortcode( '3', 'shortcode_num3' );

function shortcode_num4() {
	$star_path = get_template_directory_uri().'/img/rank04.png';
	return '<img class="ranking-number" src="'.$star_path.'" />';
}
add_shortcode( '4', 'shortcode_num4' );



function shortcode_num1_girly() {
	$star_path = get_template_directory_uri().'/img/rank01-girly.png';
	return '<img class="ranking-number-girly" src="'.$star_path.'" />';
}
add_shortcode( '1g', 'shortcode_num1_girly' );

function shortcode_num2_girly() {
	$star_path = get_template_directory_uri().'/img/rank02-girly.png';
	return '<img class="ranking-number-girly" src="'.$star_path.'" />';
}
add_shortcode( '2g', 'shortcode_num2_girly' );

function shortcode_num3_girly() {
	$star_path = get_template_directory_uri().'/img/rank03-girly.png';
	return '<img class="ranking-number-girly" src="'.$star_path.'" />';
}
add_shortcode( '3g', 'shortcode_num3_girly' );

function shortcode_num4_girly() {
	$star_path = get_template_directory_uri().'/img/rank04-girly.png';
	return '<img class="ranking-number-girly" src="'.$star_path.'" />';
}
add_shortcode( '4g', 'shortcode_num4_girly' );

function shortcode_num5_girly() {
	$star_path = get_template_directory_uri().'/img/rank05-girly.png';
	return '<img class="ranking-number-girly" src="'.$star_path.'" />';
}
add_shortcode( '5g', 'shortcode_num5_girly' );

function shortcode_num6_girly() {
	$star_path = get_template_directory_uri().'/img/rank06-girly.png';
	return '<img class="ranking-number-girly" src="'.$star_path.'" />';
}
add_shortcode( '6g', 'shortcode_num6_girly' );

function shortcode_num7_girly() {
	$star_path = get_template_directory_uri().'/img/rank07-girly.png';
	return '<img class="ranking-number-girly" src="'.$star_path.'" />';
}
add_shortcode( '7g', 'shortcode_num7_girly' );

function shortcode_num8_girly() {
	$star_path = get_template_directory_uri().'/img/rank08-girly.png';
	return '<img class="ranking-number-girly" src="'.$star_path.'" />';
}
add_shortcode( '8g', 'shortcode_num8_girly' );

function shortcode_num9_girly() {
	$star_path = get_template_directory_uri().'/img/rank09-girly.png';
	return '<img class="ranking-number-girly" src="'.$star_path.'" />';
}
add_shortcode( '9g', 'shortcode_num9_girly' );

function shortcode_num10_girly() {
	$star_path = get_template_directory_uri().'/img/rank10-girly.png';
	return '<img class="ranking-number-girly" src="'.$star_path.'" />';
}
add_shortcode( '10g', 'shortcode_num10_girly' );


function shortcode_num1_rich() {
	$star_path = get_template_directory_uri().'/img/rank01-rich.png';
	return '<img class="ranking-number-rich" src="'.$star_path.'" />';
}
add_shortcode( '1r', 'shortcode_num1_rich' );

function shortcode_num2_rich() {
	$star_path = get_template_directory_uri().'/img/rank02-rich.png';
	return '<img class="ranking-number-rich" src="'.$star_path.'" />';
}
add_shortcode( '2r', 'shortcode_num2_rich' );

function shortcode_num3_rich() {
	$star_path = get_template_directory_uri().'/img/rank03-rich.png';
	return '<img class="ranking-number-rich" src="'.$star_path.'" />';
}
add_shortcode( '3r', 'shortcode_num3_rich' );

function shortcode_num4_rich() {
	$star_path = get_template_directory_uri().'/img/rank04-rich.png';
	return '<img class="ranking-number-rich" src="'.$star_path.'" />';
}
add_shortcode( '4r', 'shortcode_num4_rich' );




function shortcode_kaisetsubox01($atts, $content = null) {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'title' => 'ここにボックスタイトルを入力',
	),$atts));
	return '<div class="kaisetsu-box1"><div class="kaisetsu-box1-title">'.$title.'</div><p>'.$content.'</p></div>';
}
add_shortcode( 'box01', 'shortcode_kaisetsubox01' );

function shortcode_kaisetsubox02($atts, $content = null) {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'title' => 'ここにボックスタイトルを入力',
	),$atts));
	return '<div class="kaisetsu-box2"><div class="kaisetsu-box2-title">'.$title.'</div><p>'.$content.'</p></div>';
}
add_shortcode( 'box02', 'shortcode_kaisetsubox02' );

function shortcode_kaisetsubox03($atts, $content = null) {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'title' => 'ここにボックスタイトルを入力',
	),$atts));
	return '<div class="kaisetsu-box3"><div class="kaisetsu-box3-title">'.$title.'</div><p>'.$content.'</p></div>';
}
add_shortcode( 'box03', 'shortcode_kaisetsubox03' );

function shortcode_kaisetsubox04($atts, $content = null) {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'title' => 'ここにボックスタイトルを入力',
	),$atts));
	return '<div class="kaisetsu-box4"><div class="kaisetsu-box4-title">'.$title.'</div><p>'.$content.'</p></div>';
}
add_shortcode( 'box04', 'shortcode_kaisetsubox04' );

function shortcode_kaisetsubox05($atts, $content = null) {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'title' => 'ここにボックスタイトルを入力',
	),$atts));
	return '<div class="kaisetsu-box5"><div class="kaisetsu-box5-title">'.$title.'</div><p>'.$content.'</p></div>';
}
add_shortcode( 'box05', 'shortcode_kaisetsubox05' );

function shortcode_innerlink_box01($atts, $content = null) {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'title' => 'ここにボックスタイトルを入力',
	),$atts));
	return '<div class="innerlink-box1"><div class="innerlink-box1-title"><i class="fas fa-file-alt"></i> '.$title.'</div><p>'.$content.'</p></div>';
}
add_shortcode( 'box06', 'shortcode_innerlink_box01' );




function balloon_shortcode($atts, $content = null) {
	$content = do_shortcode( shortcode_unautop( $content ) );
	$path = get_stylesheet_directory_uri().'/img/';
	// athomemade delete
	$dir_info = wp_upload_dir();
	// ベースディレクトリ情報
	$basedir = $dir_info['basedir'];
	// ベースURL情報
	$baseurl = $dir_info['baseurl'];
	extract(shortcode_atts(array(
		'face' => 'man1',
		'name' => '',
		'align' => 'left',
		'border' => 'gray',
		'bg' => 'none',
		'style' => '',
	),$atts));
	switch ($face) {
		case "man1":
			$imageUrl = get_template_directory_uri().'/img/man1.png';
		break;
		case "man2":
			$imageUrl = get_template_directory_uri().'/img/man2.png';
		break;
		case "man3":
			$imageUrl = get_template_directory_uri().'/img/man3.png';
		break;
		case "woman1":
			$imageUrl = get_template_directory_uri().'/img/woman1.png';
		break;
		case "woman2":
			$imageUrl = get_template_directory_uri().'/img/woman2.png';
		break;
		case "woman3":
			$imageUrl = get_template_directory_uri().'/img/woman3.png';
		break;
		default:
			// athomemade
			// ファイル名からファイルのパスを取得
			$result = array();
			foreach(glob($basedir . '/*/*/'.$face) as $file) {	
				$result[] = $file;
			}
			if (empty($result)) {
				$result[0] = "";
			}
			// ファイルパスをURLに変更
			$path_result = str_replace($basedir, $baseurl, $result[0]);
			$imageUrl = $path_result; //任意のアバター画像を挿入する
		break;
	}
	return '<div class="balloon-box balloon-'.$align.' balloon-'.$border.' balloon-bg-'.$bg.' clearfix">
	<div class="balloon-icon '.$style.'"><img src="'.strip_tags($imageUrl).'" alt="'.$name.'"></div>
	<div class="icon-name">'.$name.'</div>
	<div class="balloon-serif"><div class="balloon-content">'.$content.'</div></div>
	</div>';
}
add_shortcode('chat','balloon_shortcode');



function shortcode_jin_2column_box($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'bg_color' => 'transparent',
	),$atts));
	return '<div class="jin-2column" style="background-color:'.$bg_color.';">'.$content.'</div>';
}
add_shortcode( '2col-box', 'shortcode_jin_2column_box' );


function shortcode_jin_2column_left($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'bg_color' => '',
		'title' => '',
		'style' => '',
		'radius' => '',
	),$atts));
	
	if( ! $title == "" ){
		if( ! $bg_color == "" ){
			return '<div class="jin-2column-left" style="background-color:'.$bg_color.'; border-radius:'.$radius.';"><div class="jincol-h3 jincolumn-h3style'.$style.'">'.$title.'</div>'.$content.'</div>';
		}else{
			return '<div class="jin-2column-left col-nocolor" style="background-color:'.$bg_color.'; border-radius:'.$radius.';"><div class="jincol-h3 jincolumn-h3style'.$style.'">'.$title.'</div>'.$content.'</div>';
		}
	}else{
		if( ! $bg_color == "" ){
			return '<div class="jin-2column-left" style="background-color:'.$bg_color.'; border-radius:'.$radius.';">'.$content.'</div>';
		}else{
			return '<div class="jin-2column-left col-nocolor" style="background-color:'.$bg_color.'; border-radius:'.$radius.';">'.$content.'</div>';
		}
	}
}
add_shortcode( '2-left', 'shortcode_jin_2column_left' );


function shortcode_jin_2column_right($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'bg_color' => '',
		'title' => '',
		'style' => '',
		'radius' => '',
	),$atts));
	
	if( ! $title == "" ){
		if( ! $bg_color == "" ){
			return '<div class="jin-2column-right" style="background-color:'.$bg_color.'; border-radius:'.$radius.';"><div class="jincol-h3 jincolumn-h3style'.$style.'">'.$title.'</div>'.$content.'</div>';
		}else{
			return '<div class="jin-2column-right col-nocolor" style="background-color:'.$bg_color.'; border-radius:'.$radius.';"><div class="jincol-h3 jincolumn-h3style'.$style.'">'.$title.'</div>'.$content.'</div>';
		}
	}else{
		if( ! $bg_color == "" ){
			return '<div class="jin-2column-right" style="background-color:'.$bg_color.'; border-radius:'.$radius.';">'.$content.'</div>';
		}else{
			return '<div class="jin-2column-right col-nocolor" style="background-color:'.$bg_color.'; border-radius:'.$radius.';">'.$content.'</div>';
		}
	}
}
add_shortcode( '2-right', 'shortcode_jin_2column_right' );



function shortcode_jin_3column_box($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'bg_color' => 'transparent',
	),$atts));
	return '<div class="jin-3column" style="background-color:'.$bg_color.';">'.$content.'</div>';
}
add_shortcode( '3col-box', 'shortcode_jin_3column_box' );


function shortcode_jin_3column_left($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'bg_color' => '',
		'title' => '',
		'style' => '',
		'radius' => '',
	),$atts));
	
	if( ! $title == "" ){
		if( ! $bg_color == "" ){
			return '<div class="jin-3column-left" style="background-color:'.$bg_color.'; border-radius:'.$radius.';"><div class="jincol-h3 jincolumn-h3style'.$style.'">'.$title.'</div>'.$content.'</div>';
		}else{
			return '<div class="jin-3column-left col-nocolor" style="background-color:'.$bg_color.'; border-radius:'.$radius.';"><div class="jincol-h3 jincolumn-h3style'.$style.'">'.$title.'</div>'.$content.'</div>';
		}
	}else{
		if( ! $bg_color == "" ){
			return '<div class="jin-3column-left" style="background-color:'.$bg_color.'; border-radius:'.$radius.';">'.$content.'</div>';
		}else{
			return '<div class="jin-3column-left col-nocolor" style="background-color:'.$bg_color.'; border-radius:'.$radius.';">'.$content.'</div>';
		}
	}
}
add_shortcode( '3-left', 'shortcode_jin_3column_left' );


function shortcode_jin_3column_center($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'bg_color' => '',
		'title' => '',
		'style' => '',
		'radius' => '',
	),$atts));
	
	if( ! $title == "" ){
		if( ! $bg_color == "" ){
			return '<div class="jin-3column-center" style="background-color:'.$bg_color.'; border-radius:'.$radius.';"><div class="jincol-h3 jincolumn-h3style'.$style.'">'.$title.'</div>'.$content.'</div>';
		}else{
			return '<div class="jin-3column-center col-nocolor" style="background-color:'.$bg_color.'; border-radius:'.$radius.';"><div class="jincol-h3 jincolumn-h3style'.$style.'">'.$title.'</div>'.$content.'</div>';
		}
	}else{
		if( ! $bg_color == "" ){
			return '<div class="jin-3column-center" style="background-color:'.$bg_color.'; border-radius:'.$radius.';">'.$content.'</div>';
		}else{
			return '<div class="jin-3column-center col-nocolor" style="background-color:'.$bg_color.'; border-radius:'.$radius.';">'.$content.'</div>';
		}
	}

}
add_shortcode( '3-center', 'shortcode_jin_3column_center' );


function shortcode_jin_3column_right($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'bg_color' => '',
		'title' => '',
		'style' => '',
		'radius' => '',
	),$atts));
	
	if( ! $title == "" ){
		if( ! $bg_color == "" ){
			return '<div class="jin-3column-right" style="background-color:'.$bg_color.'; border-radius:'.$radius.';"><div class="jincol-h3 jincolumn-h3style'.$style.'">'.$title.'</div>'.$content.'</div>';
		}else{
			return '<div class="jin-3column-right col-nocolor" style="background-color:'.$bg_color.'; border-radius:'.$radius.';"><div class="jincol-h3 jincolumn-h3style'.$style.'">'.$title.'</div>'.$content.'</div>';
		}
	}else{
		if( ! $bg_color == "" ){
			return '<div class="jin-3column-right" style="background-color:'.$bg_color.'; border-radius:'.$radius.';">'.$content.'</div>';
		}else{
			return '<div class="jin-3column-right col-nocolor" style="background-color:'.$bg_color.'; border-radius:'.$radius.';">'.$content.'</div>';
		}
	}
}
add_shortcode( '3-right', 'shortcode_jin_3column_right' );



function shortcode_jin_lp_h2($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'style' => '',
	),$atts));
	return '<div class="jin-lp-h2 jinlph2-style'.$style.'"><h2>'.$content.'</h2></div>';
}
add_shortcode( 'lp-h2', 'shortcode_jin_lp_h2' );



function shortcode_jin_sen($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'color' => '',
		'size' => '',
	),$atts));
	return '<div class="jin-sen"><div class="jin-sen-solid" style="border-top-color:'.$color.'; border-top-width:'.$size.';"></div></div>';
}
add_shortcode( 'jin-sen', 'shortcode_jin_sen' );


function shortcode_jin_tensen($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'color' => '',
		'size' => '',
	),$atts));
	return '<div class="jin-sen"><div class="jin-sen-dashed" style="border-top-color:'.$color.'; border-top-width:'.$size.';"></div></div>';
}
add_shortcode( 'jin-tensen', 'shortcode_jin_tensen' );


function shortcode_jin_doublesen($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'color' => '',
		'size' => '',
	),$atts));
	return '<div class="jin-sen"><div class="jin-sen-double" style="border-top-color:'.$color.'; border-top-width:'.$size.';"></div></div>';
}
add_shortcode( 'jin-w-sen', 'shortcode_jin_doublesen' );




function shortcode_jin_yohaku10() {
	return '<div class="jin-yohaku10"></div>';
}
add_shortcode( 'jin-yohaku10', 'shortcode_jin_yohaku10' );

function shortcode_jin_yohaku15() {
	return '<div class="jin-yohaku15"></div>';
}
add_shortcode( 'jin-yohaku15', 'shortcode_jin_yohaku15' );

function shortcode_jin_yohaku20() {
	return '<div class="jin-yohaku20"></div>';
}
add_shortcode( 'jin-yohaku20', 'shortcode_jin_yohaku20' );

function shortcode_jin_yohaku25() {
	return '<div class="jin-yohaku25"></div>';
}
add_shortcode( 'jin-yohaku25', 'shortcode_jin_yohaku25' );

function shortcode_jin_yohaku30() {
	return '<div class="jin-yohaku30"></div>';
}
add_shortcode( 'jin-yohaku30', 'shortcode_jin_yohaku30' );

function shortcode_jin_yohaku35() {
	return '<div class="jin-yohaku35"></div>';
}
add_shortcode( 'jin-yohaku35', 'shortcode_jin_yohaku35' );

function shortcode_jin_yohaku40() {
	return '<div class="jin-yohaku40"></div>';
}
add_shortcode( 'jin-yohaku40', 'shortcode_jin_yohaku40' );

function shortcode_jin_yohaku45() {
	return '<div class="jin-yohaku45"></div>';
}
add_shortcode( 'jin-yohaku45', 'shortcode_jin_yohaku45' );

function shortcode_jin_yohaku50() {
	return '<div class="jin-yohaku50"></div>';
}
add_shortcode( 'jin-yohaku50', 'shortcode_jin_yohaku50' );



function shortcode_jin_img_custom($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'shadow' => 'off',
		'radius' => 'off',
		'border' => 'off',
	),$atts));
	return '<div class="jin-img-custom jin-img-shadow-'.$shadow.' jin-img-radius-'.$radius.' jin-img-border-'.$border.'">'.$content.'</div>';
	
}
add_shortcode( 'jin-img', 'shortcode_jin_img_custom' );



function shortcode_jin_img_shadow($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="jin-img-shadow">'.$content.'</div>';
	
}
add_shortcode( 'jin-img-shadow', 'shortcode_jin_img_shadow' );


function shortcode_jin_img_kadomaru($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="jin-img-kadomaru">'.$content.'</div>';
	
}
add_shortcode( 'jin-img-kadomaru', 'shortcode_jin_img_kadomaru' );


function shortcode_jin_img_waku($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="jin-img-waku">'.$content.'</div>';
	
}
add_shortcode( 'jin-img-waku', 'shortcode_jin_img_waku' );


function shortcode_jin_img_maruwaku($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="jin-img-maruwaku">'.$content.'</div>';
	
}
add_shortcode( 'jin-img-maruwaku', 'shortcode_jin_img_maruwaku' );


function shortcode_jin_fusen1_down($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'text' => '',
	),$atts));
	return '<div class="jin-photo-title"><span class="jin-fusen1-down">'.$text.'</span></div>';
}
add_shortcode( 'jin-fusen1-down', 'shortcode_jin_fusen1_down' );

function shortcode_jin_fusen1_even($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'text' => '',
	),$atts));
	return '<div class="jin-photo-title"><span class="jin-fusen1-even">'.$text.'</span></div>';
}
add_shortcode( 'jin-fusen1-even', 'shortcode_jin_fusen1_even' );

function shortcode_jin_fusen1_up($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'text' => '',
	),$atts));
	return '<div class="jin-photo-title"><span class="jin-fusen1-up">'.$text.'</span></div>';
}
add_shortcode( 'jin-fusen1-up', 'shortcode_jin_fusen1_up' );



function shortcode_jin_fusen2($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'text' => '',
	),$atts));
	return '<div class="jin-photo-title"><span class="jin-fusen2">'.$text.'</span></div>';
}
add_shortcode( 'jin-fusen2', 'shortcode_jin_fusen2' );


function shortcode_jin_fusen3($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	extract(shortcode_atts(array(
		'text' => '',
	),$atts));
	return '<div class="jin-photo-title"><span class="jin-fusen3">'.$text.'</span></div>';
}
add_shortcode( 'jin-fusen3', 'shortcode_jin_fusen3' );


function shortcode_jin_iconbox01($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="jin-iconbox yellow-iconbox"><div class="jin-iconbox-icons"><i class="fas fa-exclamation-triangle jin-icons"></i></div><div class="jin-iconbox-main yellow--border">'.$content.'</div></div>';
}
add_shortcode( 'jin-iconbox01', 'shortcode_jin_iconbox01' );

function shortcode_jin_iconbox02($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="jin-iconbox yellow-iconbox"><div class="jin-iconbox-icons"><i class="fas fa-star jin-icons"></i></div><div class="jin-iconbox-main yellow--border">'.$content.'</div></div>';
}
add_shortcode( 'jin-iconbox02', 'shortcode_jin_iconbox02' );

function shortcode_jin_iconbox03($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="jin-iconbox yellow-iconbox"><div class="jin-iconbox-icons"><i class="fas fa-lightbulb jin-icons"></i></div><div class="jin-iconbox-main yellow--border">'.$content.'</div></div>';
}
add_shortcode( 'jin-iconbox03', 'shortcode_jin_iconbox03' );

function shortcode_jin_iconbox04($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="jin-iconbox yellow-iconbox"><div class="jin-iconbox-icons"><i class="fas fa-cart-arrow-down jin-icons"></i></div><div class="jin-iconbox-main yellow--border">'.$content.'</div></div>';
}
add_shortcode( 'jin-iconbox04', 'shortcode_jin_iconbox04' );

function shortcode_jin_iconbox05($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="jin-iconbox green-iconbox"><div class="jin-iconbox-icons"><i class="fas fa-bullhorn jin-icons"></i></div><div class="jin-iconbox-main green--border">'.$content.'</div></div>';
}
add_shortcode( 'jin-iconbox05', 'shortcode_jin_iconbox05' );

function shortcode_jin_iconbox06($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="jin-iconbox green-iconbox"><div class="jin-iconbox-icons"><i class="fas fa-comment jin-icons"></i></div><div class="jin-iconbox-main green--border">'.$content.'</div></div>';
}
add_shortcode( 'jin-iconbox06', 'shortcode_jin_iconbox06' );

function shortcode_jin_iconbox07($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="jin-iconbox green-iconbox"><div class="jin-iconbox-icons"><i class="fas fa-check-circle jin-icons"></i></div><div class="jin-iconbox-main green--border">'.$content.'</div></div>';
}
add_shortcode( 'jin-iconbox07', 'shortcode_jin_iconbox07' );

function shortcode_jin_iconbox08($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="jin-iconbox green-iconbox"><div class="jin-iconbox-icons"><i class="fas fa-pen jin-icons"></i></div><div class="jin-iconbox-main green--border">'.$content.'</div></div>';
}
add_shortcode( 'jin-iconbox08', 'shortcode_jin_iconbox08' );

function shortcode_jin_iconbox09($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="jin-iconbox blue-iconbox"><div class="jin-iconbox-icons"><i class="fas fa-thumbs-up jin-icons"></i></div><div class="jin-iconbox-main blue--border">'.$content.'</div></div>';
}
add_shortcode( 'jin-iconbox09', 'shortcode_jin_iconbox09' );

function shortcode_jin_iconbox10($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="jin-iconbox blue-iconbox"><div class="jin-iconbox-icons"><i class="fas fa-info-circle jin-icons"></i></div><div class="jin-iconbox-main blue--border">'.$content.'</div></div>';
}
add_shortcode( 'jin-iconbox10', 'shortcode_jin_iconbox10' );

function shortcode_jin_iconbox11($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="jin-iconbox blue-iconbox"><div class="jin-iconbox-icons"><i class="fas fa-cog jin-icons"></i></div><div class="jin-iconbox-main blue--border">'.$content.'</div></div>';
}
add_shortcode( 'jin-iconbox11', 'shortcode_jin_iconbox11' );

function shortcode_jin_iconbox12($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="jin-iconbox blue-iconbox"><div class="jin-iconbox-icons"><i class="fas fa-clipboard jin-icons"></i></div><div class="jin-iconbox-main blue--border">'.$content.'</div></div>';
}
add_shortcode( 'jin-iconbox12', 'shortcode_jin_iconbox12' );

function shortcode_jin_iconbox13($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="jin-iconbox red-iconbox"><div class="jin-iconbox-icons"><i class="fas fa-heart jin-icons"></i></div><div class="jin-iconbox-main red--border">'.$content.'</div></div>';
}
add_shortcode( 'jin-iconbox13', 'shortcode_jin_iconbox13' );

function shortcode_jin_iconbox14($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="jin-iconbox red-iconbox"><div class="jin-iconbox-icons"><i class="fas fa-thumbs-down jin-icons"></i></div><div class="jin-iconbox-main red--border">'.$content.'</div></div>';
}
add_shortcode( 'jin-iconbox14', 'shortcode_jin_iconbox14' );

function shortcode_jin_iconbox15($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="jin-iconbox red-iconbox"><div class="jin-iconbox-icons"><i class="fas fa-question-circle jin-icons"></i></div><div class="jin-iconbox-main red--border">'.$content.'</div></div>';
}
add_shortcode( 'jin-iconbox15', 'shortcode_jin_iconbox15' );

function shortcode_jin_iconbox16($atts, $content = null)  {
	$content = do_shortcode( shortcode_unautop( $content ) );
	return '<div class="jin-iconbox red-iconbox"><div class="jin-iconbox-icons"><i class="fas fa-flag jin-icons"></i></div><div class="jin-iconbox-main red--border">'.$content.'</div></div>';
}
add_shortcode( 'jin-iconbox16', 'shortcode_jin_iconbox16' );

?>