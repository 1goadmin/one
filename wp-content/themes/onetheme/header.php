<!DOCTYPE html>
<html <?= language_attributes();?>>
<head>
<meta charset="<?=bloginfo('charset');?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?=bloginfo('Description');?>">
<title><?=bloginfo('name');?> | <?= is_front_page()? bloginfo('description'): wp_title('');?></title>
<meta name="description" content="We provide an end-to-end solution for brands to do e-commerce business. Take your online selling activities to the next level by leveraging on our integrated technologies to give you seamless and efficient operations.">

<!-- Priority -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.min.css"/>
<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
<!-- jquery -->
<link rel="preload" href="<?=bloginfo('url');?>/wp-content/plugins/elementor/assets/css/frontend-lite.min.css" as="style"/>
<!-- Priority -->
<!-- Pre-connects -->
<link rel="preconnect" href="https://kit.fontawesome.com/">
<script src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
<link rel="preconnect" href="https://file.myfontastic.com/sK9sqngFqBGZKZUVm4zSJ3/">
<!--  Pre-connects -->

<?php wp_head();?>

<script src="https://kit.fontawesome.com/a5b3b870d7.js" crossorigin="anonymous"></script>
<link href="https://file.myfontastic.com/sK9sqngFqBGZKZUVm4zSJ3/icons.css" rel="stylesheet">
</head>


<body>
	<header class="container-fluid nav-container" style= "z-index:2">
		<nav class="container navigation">
			<ul class="menunav" style="margin-left:.02rem;">
				<li class="logo" style="text-align:left;"><a  href="<?=bloginfo('url');?>/"><img class="invlogo" src="<?=bloginfo('url');?>/wp-content/themes/onetheme/img/logointl.svg" alt="logo" style="width: 3.3rem; position:relative;"></a></li>
				<li class="toggle" style="padding: .3rem .5rem 0  0; flex:1; position:relative;">
					<a id="togmenu" rel="nofollow" style="padding:0;" aria-pressed="false">
						<i id="togmenu" class="fas fa-bars" alt="toggle"></i></a>
				</li>
			</ul>
			<ul class="menu">
				<li class="item"><a href="<?=bloginfo('url');?>/company/">COMPANY</a></li>
				<li class="item"><a href="<?=bloginfo('url');?>/ecom-auto/">ECOMMERCE AUTOMATION</a></li>
				<li class="item"><a href="<?=bloginfo('url');?>/#namedSolutions">SOLUTIONS</a></li>
				<li class="item"><a href="#">CONTACT US</a></li>
				<li class="item son"><a class="sona" href="#">SELL ONLINE <br> NOW! <i class="fa-solid fa-arrow-right-long"></i> </a></li>
			</ul>
		</nav>
	</header>
<!-- !Navigation Menu Section -->
