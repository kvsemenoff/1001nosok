<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Главная</title>

	<link rel="stylesheet" href="libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<!-- <link href="//netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet"> -->
	<link rel="stylesheet" href="libs/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="libs/owl.carousel/assets/owl.carousel.css" />
	<!-- <link rel="stylesheet" href="libs/wow/animate.css"> -->
	<link type="text/css" href="css/jquery.jscrollpane.css" rel="stylesheet" media="all" />

	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
	<script src="libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="libs/owl.carousel/owl.carousel.js"></script>
	<script src="libs/fancybox/jquery.fancybox.pack.js"></script>
	<script src="libs/wow/wow.min.js"></script>
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
	<script type="text/javascript" src="js/comon.js"></script>

	<script>
		new WOW().init();
	</script>

	<script src="js/responsiveTabs.js"></script>
	<script src="js/jquery.maskedinput.min.js"></script>
	<script src="js/common.js"></script>
	<div class="n-wrapper">
		<div class="n-header">
			<section class="dd-header-wrap dd-header-wrap2">
				<div class="my-container">
					<div class="dd-header-top">
						<div class="dd-left">
							<a href="#">
								<div class="dd-logo">
									<h4>1001NOSOK.RU</h4>
								</div>
							</a>
							<div class="dd-phone">
								<span>8 (499) 322-70-17</span>
							</div>
						</div>
						<div class="dd-right">
							<ul class="dd-contacts">
								<li ><a href="#">Доставка и гарантия</a></li>
								<li class="dd-padding-right"><a href="#">Контакты</a></li>
							</ul>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</section>

		</div>
		<div class="n-content">
			<div class="n-content-inner vertical-align">
			<section>
					<div class="dd-form-wrap">
						<div class="form-wrap-main">
							<div class="dd-close"></div>
							<div class="form-wrap-red">
								<div class="form-title dd-padding-bottom">
									Спасибо за заявку!
								</div>
								<div class="dd-form-txt dd-padding-bottom">
									Наш менеджер свяжется с вами в ближайшее время!
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
		<div class="n-footer">
			<?php require('includes/we_help_select2.php'); ?>
			<?php require_once('includes/footer.php'); ?>
		</div>
	</div>
</body>
</html>

