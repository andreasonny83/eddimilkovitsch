<?php
	// Get the lang from the URL
	$lang_passed = isset( $_GET['lang'] ) ? $_GET['lang'] : 'it';
	// If available, display the correct website
	// Otherwise Italian must be the default
	$lang = $lang_array[$lang_passed];
	$lang = isset( $lang ) ? $lang : 'it';
?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Eddi Milkovitsch</title>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic&subset=latin,latin-ext">
	<link rel="stylesheet" href="css/main.min.css">
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
