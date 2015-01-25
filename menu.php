<?php
// echo $_SERVER['SERVER_NAME'] . '<br>';
// echo $_SERVER['PHP_SELF'] . '<br>';
// echo $_SERVER['HTTP_HOST'] . '<br>';
// $site_url = $_SERVER['HTTP_HOST'] . '/eddimilkovitsch/';
$site_url = $_SERVER['PHP_SELF'];
// $site_url = '/eddimilkovitsch/';
// $url = site_url();
?>
	<div id="home">

		<header>
			<h1>eddi milkovitsch</h1>
			<nav id="navbar">
				<ul id="lang_menu">
					<li class="flag lang_it"><a href="<?php echo $site_url;?>"><img src="images/flag_ita.jpg"></a></li>
					<li class="flag lang_en"><a href="<?php echo $site_url;?>?lang=en"><img src="images/flag_uk.jpg"></a></li>
				</ul>
				<ul id="main_menu">
					<li class="home"><a href=""><?php echo $menu[$lang][0]?></a></li>
					<li class="about"><a href=""><?php echo $menu[$lang][1]?></a></li>
					<li class="exibitions"><a href=""><?php echo $menu[$lang][2]?></a></li>
					<li class="works"><a href=""><?php echo $menu[$lang][3]?></a></li>
					<li class="contact"><a href=""><?php echo $menu[$lang][4]?></a></li>
				</ul>
			</nav>
		</header>
