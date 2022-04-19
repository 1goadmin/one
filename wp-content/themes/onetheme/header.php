<!DOCTYPE html>
<html <?= language_attributes();?>>
<head>
<meta charset="<?=bloginfo('charset');?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?=bloginfo('Description');?>">
<title><?=bloginfo('name');?> | <?= is_front_page()? bloginfo('description'): wp_title('');?></title>
<!-- <link rel="stylesheet" href="style.min.css"> -->
	<!-- Font Awesome -->
	<script src="https://kit.fontawesome.com/a5b3b870d7.js" crossorigin="anonymous"></script>
	<!-- Font Awesome -->
  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
  <script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
  <link href="https://file.myfontastic.com/sK9sqngFqBGZKZUVm4zSJ3/icons.css" rel="stylesheet">
  <!-- jquery -->
<?php wp_head();?>
<meta name="description" content="We provide an end-to-end solution for brands to do e-commerce business. Take your online selling activities to the next level by leveraging on our integrated technologies to give you seamless and efficient operations.">
</head>
<body>
	<header class="container-fluid nav-container" style= "z-index:2">
		<nav class="container navigation">
			<ul class="menunav" style="margin-left:.02rem;">
				<li class="logo"><img class="invlogo" src="<?=bloginfo('url');?>/wp-content/themes/onetheme/img/logointl.svg" alt="logo" style="width: 3.3rem;"></li>
				<li class="toggle" style="padding: .3rem .5rem 0  0; flex:1">
					<a id="togmenu" rel="nofollow" style="padding:0;" aria-pressed="false">
						<i id="togmenu" class="fas fa-bars" alt="toggle"></i></a>
				</li>
			</ul>
			<ul class="menu">
				<li class="item"><a href="#">COMPANY</a></li>
				<li class="item"><a href="#">ECOMMERCE AUTOMATION</a></li>
				<li class="item"><a href="#">SERVICES</a></li>
				<li class="item"><a href="#">CONTACT US</a></li>
				<li class="item son"><a href="#">SELL ONLINE <br> NOW!</a></li>
			</ul>
		</nav>
	</header>
<!-- !Navigation Menu Section -->
