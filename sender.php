<?php
$headers = "Content-type: text/html; charset=utf-8 \r\n";
$headers .= "From: info@pl-education.com.ua\r\n";
$headers .= "Reply-To: info@pl-education.com.ua\r\n";
require $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php';
//$to = get_post_meta(15, 'callback_email')[0];
$pageHomeId = get_option( 'page_on_front' );
$to = CFS()->get('email', $pageHomeId);
if((empty($to) or isset($to))){
	$to = get_option( 'admin_email', $default = false );
}
$message = 'test';
$subject = "test";
$to = 'webazex@gmail.com';
print_r($_GET);
if($_GET['send'] == 1){
	$send = mail($to, $subject, $message, $headers);
}else {
	$send = false;
}

var_dump($send);



