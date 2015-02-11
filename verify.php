<?php
if ( isset( $_POST['submit'] ) ) {
	$report = array(
		'result' => '',
		'message' => ''
	);
	$report = send_email();
	echo '<div class="popup_div ' . $report['result'] . '">';
	echo '<h2>' . $report['result'] . '</h2>';
	echo '<p>' . $report['message'] . '</p>';
	echo '</div>';
}

function send_email() {
	if( isset( $_POST['g-recaptcha-response'] ) ) {
		$captcha = $_POST['g-recaptcha-response'];
	}
	if( !$captcha ) {
		// If the captcha is missing or not set, retun with error
		$report['result'] = 'error';
		$report['message'] = 'Please check the captcha form and try again.';
		return $report;
	}
	$now     = $today = date( "F j, Y, g:i a" );
	$name    = stripslashes( $_POST['name'] );
	$email   = stripslashes( $_POST['email'] );
	$text    = stripslashes( $_POST['text'] );

	if ( !isset( $name ) && !isset( $email ) && !isset( $text ) ) {
		$report['result'] = 'error';
		$report['message'] = 'Please check out all the mandatory fields and try again.';
		return $report;
	}

	$message = '
	<html>
	<head>
	<title>EddiMilkovitsch.it</title>
	</head>
	<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
	<center>
	<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
	<tr>
	<td align="center" valign="top" style="padding-bottom:40px;">
	<table border="0" cellpadding="0" cellspacing="0" width="600" id="templateContainer">
	<tr>
	<td align="center" valign="top" style="padding-bottom:20px;">
	<table border="0" cellpadding="0" cellspacing="0" width="600" id="templatePreheader">
	</table>
	</td>
	</tr>
	<tr>
	<td align="center" valign="top">
	<table border="0" cellpadding="0" cellspacing="0" width="600" id="templateHeader">
	<tr>
	<td align="center" valign="top" style="padding-top:20px; padding-bottom:20px;">
	<table border="0" cellpadding="0" cellspacing="0" width="100%">
	<tr>
	<td class="headerContent" mc:edit="header_content"><h1>Ciao Eddi,<br>
	<span style="font-size:30px">Hai ricevuto un nuovo messaggio da ' . $name . ':</span></h1>
	<br>
	Data: ' . $now . '<br>
	Mittente: ' . $email . '</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	<tr>
	<td align="center" valign="top">
	<table border="0" cellpadding="40" cellspacing="0" width="600" id="templateBody">
	<tr>
	<td align="center" valign="top" style="padding-top:20px; padding-bottom:20px;">
	<table border="0" cellpadding="0" cellspacing="0" width="100%">
	<tr>
	<td valign="top" class="upperBodyContent" mc:edit="body_content01">' . $text . '</td>
	</tr>

	</table>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	<tr>
	<td align="center" valign="top">
	<table border="0" cellpadding="20" cellspacing="0" width="600" id="templateFooter">
	<tr>
	<td align="center" valign="top" style="padding-right:40px; padding-left:40px;">
	<table border="0" cellpadding="0" cellspacing="0" width="100%">
	<tr>
	<td valign="top" class="footerContent" style="border-top:1px solid #BBBBBB; padding-top:20px;" mc:edit="footer_social"></td>
	</tr>
	<tr>
	<td valign="top" class="footerContent" style="padding-top:20px;" mc:edit="footer_utility">E-mail inviata da&nbsp;<a href="http://www.eddimilkovitsch.it" target="_blank">www.eddimilkovitsch.it</a><br>
	Se non si desidera continuare a ricevere questi messaggi o per altre informazioni riguardo queste notifiche, contattare l&#39;amministratore di sistema al seguente indirizzo: <a href="mailto:andreasonny83@gmail.com" target="_blank">andreasonny83@gmail.com</a></td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	</center>
	</body>
	</html>
	';
	$headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	$headers .= 'From: EddiMilkovitsch.it' . "\r\n";
	$subject = 'EddiMilkovitsch.it';
	$response = file_get_contents( "https://www.google.com/recaptcha/api/siteverify?secret=6LdLXf8SAAAAANtLr1ieLr8A2llP9LGc1FyB_Rj6&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
	$to = 'info@eddimilkovitsch.it';
	$admin = 'andreasonny83@gmail.com';

	if( $response.success == false ) {
		$report['result'] = 'error';
		$report['message'] = 'You are spammer ! Get the @$%K out';
		return $report;
	}
	else {
		$send_contact = mail( "$to", "$subject", $message, $headers );
		// send to admin a copy
		mail( "$admin", "$subject", $message, $headers );
		
		if( $send_contact ) {
			$report['result'] = 'sent';
			$report['message'] = 'Thanks for posting comment.';
			return $report;
		}
		else {
			$report['result'] = 'error';
			$report['message'] = 'Ops! Something went wrong. Please, try sending the message again.';
			return $report;
		}
	}
}
?>