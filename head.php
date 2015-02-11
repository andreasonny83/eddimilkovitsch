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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/lightSlider.css">
	<link rel="stylesheet" href="css/lightGallery.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>