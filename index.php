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
<section class="dd-header-wrap">
	<div class="my-container">
		<div class="dd-big-h4-wrap">
			<div class="dd-big-h4">
				<span>Твой кейс с носками</span>
			</div>
		</div>
		<div class="dd-big-h4-wrap2">
			<div class="dd-big-h4-2">
				<span>От</span>
				<span>1 399 р.</span>
			</div>
		</div>
		<div class="dd-keys">
			<img class="img-responsive" src="img/keys.png" alt="">
		</div>
		<!-- Таймер -->
		<div class="dd-timer-all-wrap">
			<div class="dd-timer">
				<img src="img/tolko-segodnya.png" alt="">
				<div class="dd-timer-title">
					<span>До конца акции осталось:</span>
				</div>
				<div class="dd-times">
					<div class="dd-div">
						<div class="dd-line"><img src="img/line.png" alt=""></div>
						<div class="dd-line2"><img src="img/line.png" alt=""></div>
						<span id="dd-hours">14</span>
					</div>
					<div class="dd-div">
						<div class="dd-line"><img src="img/line.png" alt=""></div>
						<div class="dd-line2"><img src="img/line.png" alt=""></div>
						<span id="dd-min">27</span>
					</div>
					<div class="dd-div">
						<div class="dd-line"><img src="img/line.png" alt=""></div>
						<div class="dd-line2"><img src="img/line.png" alt=""></div>
						<span id="dd-sec">54</span>
					</div>
					<div class="dd-time-txt">
						<span>часов</span>
					</div>
					<div class="dd-time-txt dd-time-txt2">
						<span>минут</span>
					</div>
					<div class="dd-time-txt dd-time-txt3">
						<span>секунд</span>
					</div>
				</div>
			</div>
		</div>
		<!-- Конец Таймер -->
		<div class="dd-atsia-wrap">
			<img class="img-responsive" src="img/actsia.jpg" alt="">
		</div>
		<div class="clearfix"></div>
	</div>
</section>

<script>

	var count=60;

	var counter=setInterval(timer, 1000); //1000 will  run it every 1 second

	function timer()
	{
		count=count-1;
		if (count <= 9)
		{
			count = '0'+count;	
		}
		if (count <= 0)
		{
			count=60;

		}
		$("#dd-sec").html(count);

	}

	
</script>

<section class="df-bg-orange">
	<div class="container">		
		<div class="row">			
			<h2>ВЫбери свой кейс с носками</h2>
			<div class="df-box-case">
				<span class="df-span1">Кейс носков</span><br>
				<span class="df-span2 df-tovar-name">«Хлопок»</span>
				<div class="df-case">
					<div class="df-tovar-picture">
						<img src="img/df-case1.png" alt="">
					</div>
					<span class="df-vigodno">Выгодно!</span>
					<span class="df-chose">Выбери свой кейс</span>
					<input type="hidden" class="hprice" value="">
					<input type="hidden" class="hpare" value="">
					<div class="df-inputs">
						<label>
							<input class="checkbox" type="radio" name="checkbox1" value="">
							<span class="checkbox-custom"></span>
							<span class="label"></span>
						</label>
						<span class="df-price"><span class="df-price-d">1 399 р.</span><span class="df-cur-pare">— 30 пар в кейсе </span></span><br>
						<label>
							<input class="checkbox" type="radio" name="checkbox1" value="" checked>
							<span class="checkbox-custom"></span>
							<span class="label"></span>
						</label>
						<span class="df-price"><span class="df-price-d">1 799 р.</span><span class="df-cur-pare">— 50 пар в кейсе </span></span><br>
						<label>
							<input class="checkbox" type="radio" name="checkbox1" value="">
							<span class="checkbox-custom"></span>
							<span class="label"></span>
						</label>
						<span class="df-price"><span class="df-price-d">2 499 р.</span><span class="df-cur-pare">— 100 пар в кейсе </span></span><br>
						<a href="#thanks2"  name="tovar" class="df-link">100% хлопок заказать</a>
					</div>						
				</div>
			</div>				
			<div class="df-box-case">
				<span class="df-span1">Кейс носков</span><br>
				<span class="df-span2 df-tovar-name">«Бамбуковые носки»</span>
				<div class="df-case">

					<div class="df-tovar-picture">
						<img src="img/df-case1.png" alt="">
					</div>
					<span class="df-vigodno">Бизнес класс!</span>
					<span class="df-chose">Выбери свой кейс</span>
					<input type="hidden" class="hprice" value="">
					<input type="hidden" class="hpare" value="">
					<div class="df-inputs">
						<label>
							<input class="checkbox" type="radio" name="checkbox2" checked>
							<span class="checkbox-custom"></span>
							<span class="label"></span>
						</label>
						<span class="df-price"><span class="df-price-d">1 799 р.</span><span>— 30 пар в кейсе </span></span><br>
						<label>
							<input class="checkbox" type="radio" name="checkbox2" value="">
							<span class="checkbox-custom"></span>
							<span class="label"></span>
						</label>
						<span class="df-price"><span class="df-price-d">2 499 р.</span><span class="df-cur-pare">— 50 пар в кейсе </span></span><br>
						<label>
							<input class="checkbox" type="radio" name="checkbox2" value="">
							<span class="checkbox-custom"></span>
							<span class="label"></span>
						</label>
						<span class="df-price"><span class="df-price-d">3 999 р.</span><span class="df-cur-pare">— 100 пар в кейсе </span></span><br>
						<a href="#thanks2" name="tovar" class="df-link">Бамбуковые носки заказать</a>
					</div>						
				</div>
			</div>
			<div class="df-box-case">
				<span class="df-span1">Кейс носков</span><br>
				<span class="df-span2 df-tovar-name">«Хлопок - Люкс»</span>
				<div class="df-case">
					<div class="df-tovar-picture">
						<img src="img/df-case1.png" alt="">
					</div>
					<span class="df-vigodno">Премиум- класс</span>
					<span class="df-chose df-tovar-name">Выбери свой кейс</span>
					<input type="hidden" class="hprice" value="">
					<input type="hidden" class="hpare" value="">
					<div class="df-inputs">
						<label>
							<input class="checkbox" type="radio" name="checkbox3" checked>
							<span class="checkbox-custom"></span>
							<span class="label"></span>
						</label>
						<span class="df-price"><span class="df-price-d">1 999 р.</span><span class="df-cur-pare">— 30 пар в кейсе </span></span><br>
						<label>
							<input class="checkbox" type="radio" name="checkbox3" >
							<span class="checkbox-custom"></span>
							<span class="label"></span>
						</label>
						<span class="df-price"><span class="df-price-d">2 999 р.</span><span class="df-cur-pare">— 50 пар в кейсе </span></span><br>
						<label>
							<input class="checkbox" type="radio" name="checkbox3">
							<span class="checkbox-custom"></span>
							<span class="label"></span>
						</label>
						<span class="df-price"><span class="df-price-d">4 999 р.</span><span class="df-cur-pare">— 100 пар в кейсе </span></span><br>
						<a href="#thanks2" name="tovar" class="df-link">Хлопок - Люкс заказать</a>
					</div>						
				</div>
			</div>
			<div class="df-box-case">
				<span class="df-span1">Кейс носков микс</span><br>
				<span class="df-span2 df-tovar-name">«Бамбук MIX»</span>
				<div class="df-case">
					<div class="df-tovar-picture">
						<img src="img/df-case2.png" alt="">
					</div>
					<span class="df-vigodno">Выгодно!</span>
					<span class="df-chose">Выбери свой кейс</span>
					<input type="hidden" class="hprice" value="">
					<input type="hidden" class="hpare" value="">
					<div class="df-inputs">
						<label>
							<input class="checkbox" type="radio" name="checkbox4" checked>
							<span class="checkbox-custom"></span>
							<span class="label"></span>
						</label>
						<span class="df-price"><span class="df-price-d">1 799 р.</span><span class="df-cur-pare">— 30 пар в кейсе </span></span><br>
						<label>
							<input class="checkbox" type="radio" name="checkbox4" >
							<span class="checkbox-custom"></span>
							<span class="label"></span>
						</label>
						<span class="df-price"><span class="df-price-d">2 499 р.</span><span class="df-cur-pare">— 50 пар в кейсе </span></span><br>
						<label>
							<input class="checkbox" type="radio" name="checkbox4">
							<span class="checkbox-custom"></span>
							<span class="label"></span>
						</label>
						<span class="df-price"><span class="df-price-d">3 999 р.</span><span class="df-cur-pare">— 100 пар в кейсе </span></span><br>
						<a href="#thanks2" name="tovar" class="df-link">Бамбук MIX заказать</a>
					</div>

				</div>
			</div>
			<div class="df-box-case">
				<span class="df-span1">Кейс носков микс</span><br>
				<span class="df-span2 df-tovar-name">«Носки ХБ MIX»</span>
				<div class="df-case">
					<div class="df-tovar-picture">
						<img src="img/df-case2.png" alt="">
					</div>
					<span class="df-vigodno">Комфортно!</span>
					<span class="df-chose">Выбери свой кейс</span>
					<input type="hidden" class="hprice" value="">
					<input type="hidden" class="hpare" value="">
					<div class="df-inputs">
						<label>
							<input class="checkbox" type="radio" name="checkbox5" checked>
							<span class="checkbox-custom"></span>
							<span class="label"></span>
						</label>
						<span class="df-price"><span class="df-price-d">1 499 р.</span><span class="df-cur-pare">— 30 пар в кейсе </span></span><br>
						<label>
							<input class="checkbox" type="radio" name="checkbox5" >
							<span class="checkbox-custom"></span>
							<span class="label"></span>
						</label>
						<span class="df-price"><span class="df-price-d">1 899 р.</span><span class="df-cur-pare">— 50 пар в кейсе </span></span><br>
						<label>
							<input class="checkbox" type="radio" name="checkbox5">
							<span class="checkbox-custom"></span>
							<span class="label"></span>
						</label>
						<span class="df-price"><span class="df-price-d">2 799 р.</span><span class="df-cur-pare">— 100 пар в кейсе </span></span><br>
						<a href="#thanks2" name="tovar" class="df-link">Носки ХБ MIX заказать</a>
					</div>
					
				</div>
			</div>
			<div class="df-box-case">
				<span class="df-span1">Кейс носков</span><br>
				<span class="df-span2 df-tovar-name">«Шерсть»</span>
				<div class="df-case">
					<div class="df-tovar-picture">
						<img src="img/df-case1.png" alt="">
					</div>
					<span class="df-vigodno">идеально для зимы!</span>
					<span class="df-chose">Выбери свой кейс</span>
					<input type="hidden" class="hprice" value="">
					<input type="hidden" class="hpare" value="">
					<div class="df-inputs">
						<label>
							<input class="checkbox" type="radio" name="checkbox6" checked>
							<span class="checkbox-custom"></span>
							<span class="label"></span>
						</label>
						<span class="df-price"><span class="df-price-d">2 299 р.</span><span class="df-cur-pare">— 30 пар в кейсе </span></span><br>
						<label>
							<input class="checkbox" type="radio" name="checkbox6" >
							<span class="checkbox-custom"></span>
							<span class="label"></span>
						</label>
						<span class="df-price"><span class="df-price-d">3 199 р.</span><span class="df-cur-pare">— 50 пар в кейсе </span></span><br>
						<label>
							<input class="checkbox" type="radio" name="checkbox6">
							<span class="checkbox-custom"></span>
							<span class="label"></span>
						</label>
						<span class="df-price"><span class="df-price-d">5 399 р.</span><span class="df-cur-pare">— 100 пар в кейсе </span></span><br>
						<a href="#thanks2" name="tovar" class="df-link">Шерсть заказать</a>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</section>		

<div class="df-bg-noski">
	<div class="container">		
		<div class="row">
			<div class="col-md-12">
				<h2>В чем удобство?</h2>
			</div>
			<div class="col-md-6 col-xs-12 col-sm-6">
				<div class="df-2box">
					<div class="df-left">
						<span>Куча разных целых и рваных носков</span>
						<span>Каждый день надо искать пару</span>
						<span>Высокие цены в магазинах (от 100 руб.)</span>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-xs-12 col-sm-6">
				<div class="df-2box">
					<div class="df-right">
						<span>От 30 до 100 пар носков в кейсе</span>
						<span>Все носки собраны в одном месте</span>
						<span>Низкая цена (от 25 руб. за пару)</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>		

<section class="db-all-container">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
					<span class="db-header">Оставьте заявку и мы поможем выбрать</span>
			</div>
			<div class="clearfix"></div>
			<form action="thanks.php" method="post" class="form1">
				<div class="col-md-4">
					<div class="db-input-one">
						<input type="text" placeholder="Ваше имя" name="uname">
					</div>
				</div>
				<div class="col-md-4">
					<div class="db-input-two">
						<input type="text" placeholder="Номер телефона" name="phone" class="phone">
					</div>
				</div>
				<div class="col-md-4">
					<div class="db-input-three">
						<input type="submit" value="Отправить" name="submit">
					</div>
				</div>
				<div class="clearfix"></div>
			</form>

		</div>
	</div>
</section>

<section class="dd-how-look-wrap">
	<div class="my-container">
		<div class="dd-how-look">
			<div class="dd-how-look-img">
				<div class="dd-title">
					<span>Как выглядит кейс?</span>
				</div>
				<img class="img-responsive" src="img/howlook.png" alt="">
			</div>
			<div class="dd-look-txt dd-look-txt1">
				<span>Качественно</span><br>
				<span class="dd-look-txt__sub-text">Такой кейс носков внешне выглядит по-настоящему мужским подарком.</span>
				<span class="k2 hidden-xs hidden-sm"></span>
			</div>
			<div class="dd-look-txt dd-look-txt2">
				<span>Солидно</span><br>
				<span class="dd-look-txt__sub-text">30 - 100 пар носков упаковываются в черный лакированный кейс из твердого картона.</span>
				<span class="k3 hidden-xs hidden-sm"></span>
			</div>
			<div class="dd-look-txt dd-look-txt3">
				<span>Стильно</span><br>
				<span  class="dd-look-txt__sub-text">Он будет удобен при переносе и отлично подойдет для хранения носков.</span>
				<span class="k1 hidden-xs hidden-sm"></span>
			</div>
		</div>
	</div>
</section>

<div class="container df-bg-white">		
	<div class="row">
		<div class="col-md-12">
			<h2 class="title">Часто задаваемые вопросы</h2>
			<div class="df-questions">
				<h4>Как угадать с размером? Вдруг носки не подойдут?</h4>
				<p>Вам не придется угадывать! Просто сообщите менеджеру размер обуви, и мы подберем для Вас нужную маркировку носков. Они точно подойдут, так как один размер носков подходит на два размера по обуви (например,  39-40, 41-42 и т.д. ). Более того, после стирок носки не вытягиваются и не садятся, сохраняя свою форму и длину в изначальном виде</p>
				<h4>На носках есть узоры или рисунки? </h4>
				<p>Рисунков и узоров нет. Все носки гладкие и одинаковые, что избавит вас от сложностей подбора нужной пары после стирки</p>
				<h4>Они прочные? Быстро рвутся?</h4>
				<p>Все носки изготавливаются из качественных материалов, поэтому  каждая пара выдерживает  до 3-4 месяцев постоянной носки с учетом многократных стирок</p>
				<h4>Носки красят ноги?</h4>
				<p>Конечно, нет. Все ткани и нити, из которых изготавливаются носки, проходят специальную обработку на фабрике,  что исключает их перекрашивание и выцветание</p>
				<h4>Почему цена существенно ниже, чем в рознице?</h4>
				<p>Мы напрямую работаем с фабрикой-производителем, поэтому избегаем многократных наценок оптовиков и перекупщиков, и имеем возможность  работать практически без наценки</p>
			</div>
		</div>
	</div>
</div>		

<section class="db-all-container db-all-container2">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
					<span class="db-header">Оставьте заявку и мы поможем выбрать</span>
			</div>
			<div class="clearfix"></div>
			<form action="#" method="post" class="form1">
				<div class="col-md-4">
					<div class="db-input-one">
						<input type="text" placeholder="Ваше имя" name="uname">
					</div>
				</div>
				<div class="col-md-4">
					<div class="db-input-two">
						<input type="text" placeholder="Номер телефона" name="phone" class="phone">
					</div>
				</div>
				<div class="col-md-4">
					<div class="db-input-three">
						<input type="submit" value="Отправить" name="submit">
					</div>
				</div>
				<div class="clearfix"></div>
			</form>

		</div>
	</div>
</section>
<section class="df-bg-white">
	<div class="container">		
		<div class="row">
			<div class="col-md-12">
			<div class="df-socks">
				<h4>Носки – важный элемент мужского гардероба</h4>
				<p>Интернет магазин носков – это продажа высококачественных изделий, изготовленных из натуральных тканей, осуществляема по всей России. Мы предлагаем не просто приобрести носки, а сделать невероятно выгодную покупку. Мы реализуем целый кейс носков 100 пар, купить который мужчины могут на все случаи жизни. Вашему вниманию представлены кейсы хлопчатобумажных, шерстяных и бамбуковых изделий, изготовленных по уникальным европейским технологиям. Мы позаботились о качестве и доступности наших цен, позволив купить мужские носки каждому. Благодаря прямому сотрудничеству с изготовителем наш магазин носков ведет наиболее лояльную ценовую политику, что позволяет сегодня приобрести носки дешево всем желающим. Больше не нужно месяцами искать качественный товар по адекватной цене, все что вам нужно это купить коробку носков на нашем сайте и на целый год забыть о необходимости докупать носки. <br>
				Кейс носков, купить который предлагает Москва – это годовой запас высококачественных изделий, отличающихся высокими эксплуатационными характеристиками. Плюс ко всему заказать носки мужские у нас могут жители не только крупных городов, но и отдаленных сел.</p>
				<h4>Сочетание качества и стиля</h4>
				<p>Неправильно выбранные, некачественные носки, надетые на мужчине, очень бросаются в глаза, портя при этом всю презентабельность. Поэтому для мужчины невероятно важно заказать носки высокого качества, натуральные, а главное универсальные. В поисках идеального варианта не обязательно выбирать брендовый интернет магазин мужских носков, тратя на их продукцию колоссальные суммы. Заказ носков не менее качественных можно оформить и в более доступном по ценам магазине. Сегодня купить носки в нашем интернет магазине может каждый мужчина в независимости от уровня дохода, а завтра получать удовольствие от натуральности и качества нашего товара. <br>
				Выбирая определенную модель необходимо учитывать несколько несложных правил, при чем не важно решили вы заказать дорогие носки мужские или дешевые. Этот предмет одежды должен гармонировать с цветом брюк. Ни в коем случае не подбирайте его под галстук или туфли. Прежде чем купить носки наш интернет магазин рекомендует определиться и с длиной изделия. Слишком короткие не допустимо надевать под строгий деловой костюм, ведь из-под брюк может выглядывать голый участок кожи, что невероятно портит презентабельность.</p>
				<h4>Универсальный магазин мужских носков или один набор на все случаи жизни</h4>
				<p>Все магазины мужских носков предлагают невероятно большой ассортимент, да еще и высокие цены. Мы постарались клиентам позволить купить носки дешево и представить им универсальные наборы, подходящие как для каждодневного пользования, так и для «выхода в свет». Плюс у нас годовой запас носков купить могут жители Спб, Москвы и более удаленных районов страны. <br>
				Все что нужно это посетить наш каталог кейсов, ознакомится с преимуществами того или иного набора и оформить заказ. О качестве и универсальности продукции можете не переживать. Мы работаем напрямую с производителем, а значит уверенны в качестве и натуральности каждой пары, вошедшей в кейс. А реализуя черные носки мы смогли добиться полной универсальности нашей продукции. Чтобы найти наш магазин достаточно ввести: купить натуральные socks в кейсах.
				</p>
				<h4>Носки с доставкой: выбираем материал</h4>
				<p>У нас только натуральная качественная продукция, упакованная в компактные кейсы по 30, 50 и 100 пар. Несмотря на то, что магазин носков расположен в городе Москва мы поставляем наши кейсы в любо уголок страны. Хлопковые, бамбуковые, шерстяные – все эти носки реализует наш магазин в Москве. Помимо натуральных волокон в состав изделия вошли и синтетические волокна. Это уникальное сочетание позволило производителю улучшить качество продукции и усилить свойства, которыми наделен тот или иной натуральный материал. Мы предлагаем вам высококачественные, прочные, износоустойчивые, гипоаллергенные, эластичные носки купить в наборах и обеспечить себя запасами на целый год.</p>
				<h4>Особенности наборов</h4>
				<p>Выше уже говорилось что у нас можно купить носки в количестве 100 пар исключительно из натуральных материалов и одним набором. Чтобы понять какой набор для вас наиболее подходящий давайте рассмотрим его особенности более подробно. Помимо удобства от материала, из которого изготовлены мужские носки зависит и цена кейса.
				</p>
				<span>Мы предлагаем вас такие кейсы:</span>
				<p class="df-p">1.  «100% хлопок». Такие мужские носки купить в Москве предпочитает каждый третий мужчина. Они отличаются высокими прочностными характеристиками, износоустойчивостью, долговечностью, непритязательностью в уходе. Плюс этот материал «дышит», что снижает потоотделение. Также такие носки купить можно и людям с чувствительной кожей, ведь они гипоаллергенны. И не менее весомым является цена набора – такие носки стоят вовсе недорого, а значит невероятно доступны;
				</p>
				<p class="df-p">2.  «Шерсть». Незаменимый кейс в зимнее время. Наивысшими теплоизоляционными свойствами обладает именно натуральная шерсть, но как известно такие носки не очень практичны в носке. Только не наши. Благодаря сочетанию синтетики и натуральной шерсти носки, купить которые можно онлайн, износоустойчивые, эластичные, прочные и непритязательны в уходе. «Купи носки себе один раз и наслаждайся комфортом и теплом всю зиму» - это выражение как ничто говорит о качестве изделия;
				</p>
				<p class="df-p pad0">3.  «Бамбук». Наиболее дорогостоящий кейс. На эти носки цена полностью оправдана их качеством. Они не только износоустойчивые, прочные, но и очень приятны к телу, гипоаллергенны и обеспечивают высокую теплоизоляцию. Узнайте сколько стоят носки «Бамбук» у нас, и удивитесь их доступности.
				Теперь вы знаете где купить качественные, натуральные мужские носки недорого.</p>
				<h4>Магазин носков в Москве – оформить заказ у нас легко и выгодно</h4>
				<p>Все мы не любим тратить лишние деньги, поэтому не раз задавались вопросом: «где купить носки качественные, но по дешевле?». Наш магазин – лучший ответ на это вопрос. У нас представлены первоклассного качества носки мужские, купить которые можно совсем недорого. Наши кейсы покорили уже тысячи мужчин по всему миру, а теперь они доступны и жителя нашей страны. 
				Мы реализуем носки оптом даже в Иваново напрямую от производителя. У нас каждый клиент оптовый заказчик, ведь в наших наборах минимально комплектуется сразу 30 пар. А это значит, что купить носки оптом дешево от производителя в городе Иваново теперь можно заказав всего лишь один набор. Этот город назван абсолютно наугад, ведь у нас приобрести носки оптом могут как жители Иваново, так и любого другого города нашей огромной страны.  <br>
				Больше не нужно тратить свое свободное время на поиск идеального магазина. Все что нужно – это ввести в поиск «сокс купить наборами», и вы сразу попадете на страницы нашего магазина. Далее все ненамного сложнее. Вам нужно выбрать кейс, который отвечает вашим требованиям и предпочтения, и отправить его «в корзине». <br>
				Помимо интуитивно понятного интерфейса вас ожидают наиболее лояльные цены на высококачественные изделия. Наши кейсы универсальны, а значит их можно презентовать любому мужчине в независимости от статуса и уровня дохода.</p> <br>
				<h4>Купить носки в Москве выгоднее всего именно у нас</h4>	
				<p>Наша продукция на склад поставляется самим производителем, что позволяет нам удерживать наиболее низкие цены. Плюс реализуется наша продукция во все уголки огромной Росси в наиболее сжатые сроки. Мы следим за тем, чтобы каждый мужчина получил свой кейс вовремя. <br>
				На страницах нашего сайте размещены универсальные кейсы. Черный цвет наших изделий позволяет сочетать их с любым стилем одежды, и надевать их как на деловые встречи, так и для похода в спортивный зад.
				За вами остается право выбора кейса не только по материалу изготовления, но и по длине изделия. Ведь только вы знаете какие носки на год купить наиболее рационально. Кто-то предпочитает длинные модели, а кому-то по душе более укороченные или даже спортивные модели. <br>
				Совсем скоро наших клиентов ожидает новинка – кейсы «Микс». Они будут отличаться от уже размещенных на сайте кейсов цветовой гаммой. Кейс «Микс» - идеальный выбор для активных мужчин, любящих сменить деловой костюм на спортивный и отправится устанавливать новые спортивные рекорды в спортзал. <br>
				На наших страницах каждый мужчина найдет свой идеальный кейс, обеспечив себя высококачественными носками на целый год, потратив при этом минимум своего бюджета.</p>
			</div>
			</div>
		</div>
	</div>
</section>			

<section class="dd-dostavka">
	<div class="my-container2">
		<div class="dd-dostavka-content">
			<div class="dd-title">
				<span>Доставка и оплата</span>
			</div>
			<div class="dd-box dd-box1">
				<div class="dd-box-txt">
					<span>По Москве</span><br>
					<span>Осуществляется курьерской службой.
						Сроки доставки: 1-2 дня.</span>
					</div>
					<img class="img-responsive" src="img/moscow.jpg" alt="">
				</div>
				<div class="dd-box dd-box2">
					<div class="dd-box-txt">
						<span>По России</span><br>
						<span>Осуществляется курьерской службой или почтой России<br>
							(в зависимости от региона). Сроки доставки 2-12 дней.</span>
						</div>
						<img class="img-responsive" src="img/russia.jpg" alt="">
					</div>
					<div class="clearfix"></div>
			</div>
			
		</div>
		<div class="dd-big-txt">
				<span>Стоимость доставки – от 350 р. (в зависимости от региона).<br>
					Точные <span>стоимость</span> и <span>сроки</span> доставки обсуждаются индивидуально с менеджером при подтверждении заказа.<br>
					<span>Оплата производится</span> наличными при получении заказа или предоплатой на банковский счет и электронные кошельки.</span>
				</div>
			</div>
	</section>

<section class="db-all-container db-all-container2">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
					<span class="db-header">Оставьте заявку и мы поможем выбрать</span>
			</div>
			<div class="clearfix"></div>
			<form action="#" method="post" class="form1">
				<div class="col-md-4">
					<div class="db-input-one">
						<input type="text" placeholder="Ваше имя" name="uname">
					</div>
				</div>
				<div class="col-md-4">
					<div class="db-input-two">
						<input type="text" placeholder="Номер телефона" name="phone" class="phone">
					</div>
				</div>
				<div class="col-md-4">
					<div class="db-input-three">
						<input type="submit" value="Отправить" name="submit">
					</div>
				</div>
				<div class="clearfix"></div>
			</form>

		</div>
	</div>
</section>

<section class="dd-sertifikat">
	<div class="dd-content-sertifikat">
		<div class="dd-title">
			<span>Мы и наши фабрики работаем официально</span>
		</div>
		<div class="dd-images">
			<div class="dd-serificat-img">
				<img src="img/s1.jpg" alt="">
			</div>
			<div class="dd-serificat-img dd-serificat-img1">
				<img src="img/s2.jpg" alt="">
			</div>
			<div class="dd-serificat-img dd-serificat-img2">
				<img src="img/s3.jpg" alt="">
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</section>

<section class="df-bg">
<div class="container">		
	<div class="row">
		<div class="col-md-12">			
			<div class="df-ozivi">
			<h2 class="title">Отзывы покупателей</h2>
				<div class="df-otz-tab">
					<a href="#df-tab1" class="df-active"><img src="img/df-tab1.png" alt=""></a>
					<a href="#df-tab2"><img src="img/df-tab2.png" alt=""></a>
					<a href="#df-tab3"><img src="img/df-tab3.png" alt=""></a>
					<a href="#df-tab4"><img src="img/df-tab1.png" alt=""></a>
					<a href="#df-tab5"><img src="img/df-tab2.png" alt=""></a>
					<a href="#df-tab6"><img src="img/df-tab3.png" alt=""></a>
				</div>
				<div class="df-text df-one active" id="df-tab1">
					<span>Валентин, 29 лет<br>г. Уфа</span>
					<p>Взял в этом магазине носки, качество отличное, все советую!)Взял в этом магазине носки, качество отличное, все советую!)Взял в этом магазине носки, качество отличное, все советую!)Взял в этом магазине носки, качество отличное, все советую!) <br>
					Взял в этом магазине носки, качество отличное, все советую!)Взял в этом магазине носки, качество отличное, все советую!)Взял в этом магазине носки, качество отличное, все советую!)</p>
				</div>
				<div class="df-text df-one" id="df-tab2">
					<span>Владимир, 29 лет<br>г. Уфа</span>
					<p>Взял в этом магазине носки, качество отличное, все советую!)Взял в этом магазине носки, качество отличное, все советую!)Взял в этом магазине носки, качество отличное, все советую!)Взял в этом магазине носки, качество отличное, все советую!)
					Взял в этом магазине носки, качество отличное, все советую!)Взял в этом магазине носки, качество отличное, все советую!)Взял в этом магазине носки, качество отличное, все советую!)</p>
				</div>
				<div class="df-text df-one" id="df-tab3">
					<span>Марина, 29 лет<br>г. Уфа</span>
					<p>Взял в этом магазине носки, качество отличное, все советую!)Взял в этом магазине носки, качество отличное, все советую!)Взял в этом магазине носки, качество отличное, все советую!)Взял в этом магазине носки, качество отличное, все советую!)
					Взял в этом магазине носки, качество отличное, все советую!)Взял в этом магазине носки, качество отличное, все советую!)Взял в этом магазине носки, качество отличное, все советую!)</p>
				</div>
				<div class="df-text df-one" id="df-tab4">
					<span>Иван, 29 лет<br>г. Уфа</span>
					<p>Взял в этом магазине носки, качество отличное, все советую!)Взял в этом магазине носки, качество отличное, все советую!)Взял в этом магазине носки, качество отличное, все советую!)Взял в этом магазине носки, качество отличное, все советую!)
					Взял в этом магазине носки, качество отличное, все советую!)Взял в этом магазине носки, качество отличное, все советую!)Взял в этом магазине носки, качество отличное, все советую!)</p>
				</div>
				<div class="df-text df-one" id="df-tab5">
					<span>Петр, 29 лет<br>г. Уфа</span>
					<p>Взял в этом магазине носки, качество отличное, все советую!)Взял в этом магазине носки, качество отличное, все советую!)Взял в этом магазине носки, качество отличное, все советую!)Взял в этом магазине носки, качество отличное, все советую!)
					Взял в этом магазине носки, качество отличное, все советую!)Взял в этом магазине носки, качество отличное, все советую!)Взял в этом магазине носки, качество отличное, все советую!)</p>
				</div>
				<div class="df-text df-one" id="df-tab6">
					<span>Марина, 29 лет<br>г. Уфа</span>
					<p>Взял в этом магазине носки, качество отличное, все советую!)Взял в этом магазине носки, качество отличное, все советую!)Взял в этом магазине носки, качество отличное, все советую!)Взял в этом магазине носки, качество отличное, все советую!)
					Взял в этом магазине носки, качество отличное, все советую!)Взял в этом магазине носки, качество отличное, все советую!)Взял в этом магазине носки, качество отличное, все советую!)</p>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<script>
$('#df-tab1').css('display','block');
	$('.df-otz-tab a').click(function(e) {
		e.preventDefault();
		$('a').removeClass('df-active');
		$(this).addClass('df-active');
		var tab = $(this).attr('href');
		$('.df-one').not(tab).css({'display':'none'});
		$(tab).fadeIn(400);       
});
</script>			

<section class="dd-podarki-wrap">
	<div class="my-container">
		<div class="dd-title">
			<span>О подарках</span>
		</div>
		<div class="dd-podarki-content">
			<div class="dd-img">
				<img src="img/im1.jpg" alt="">
			</div>
			<div class="dd-txt">
				<div class="dd-title-txt">
					<span>Две пары стелек в подарок к каждому заказу!</span>
				</div>
				<span>Войлочные фольгированные стельки. Изготовлены из натуральной войлочной основы коричневого цвета. Размерный ряд стелек - в ассортименте. Фольгированная основа удерживает тепло внутри обуви и не пропускает холод. Надежно фиксируется внутри обуви. Сохранят тепло ваших ног, а вас от простуды.</span>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="dd-podarki-content">
			<div class="dd-img">
				<img src="img/im2.jpg" alt="">
			</div>
			<div class="dd-txt">
				<div class="dd-title-txt">
					<span>Фирменное автопортмоне CarWallet</span>
				</div>
				<span>Портмоне CarWallet - это стильный мужской аксессуар, в который легко помещаются документы, деньги и мобильный телефон, т.е. всё самое необходимое для повседневной жизни современного мужчины. Именно это портмоне было разработано Европейскими дизайнерами специально для мужчин, с учетом всех их пожеланий и потребностей! После запуска первой лимитированной коллекции данный кошелёк сразу стал лидером продаж в своём сегменте в странах Европы и США! Портмоне CarWallet - это сочетание качества, надежности, высокого стиля и практичности.</span>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="dd-podarki-content">
			<div class="dd-img">
				<img src="img/im3.jpg" alt="">
			</div>
			<div class="dd-txt">
				<div class="dd-title-txt">
					<span>Стильные японские часы Curren</span>
				</div>
				<span>Ключевые составляющие часов Curren – это японский кварцевый механизм, высококачественные комплектующие и всегда оригинальный дизайн. Эти часы с легкостью можно надеть как на деловую встречу, так и взять их в спорт зал. Этот двойной дизайн очень практичен в наше время. Благодаря совокупности перечисленных достоинств часы Curren быстро завоевывают популярность во всем мире.</span>
			</div>
		</div>
		<div class="clearfix"></div>	
	</div>
</section>

<section class="db-all-container db-all-container2">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
					<span class="db-header">Оставьте заявку и мы поможем выбрать</span>
			</div>
			<div class="clearfix"></div>
			<form action="#" method="post" class="form1">
				<div class="col-md-4">
					<div class="db-input-one">
						<input type="text" placeholder="Ваше имя" name="uname">
					</div>
				</div>
				<div class="col-md-4">
					<div class="db-input-two">
						<input type="text" placeholder="Номер телефона" name="phone" class="phone">
					</div>
				</div>
				<div class="col-md-4">
					<div class="db-input-three">
						<input type="submit" value="Отправить" name="submit">
					</div>
				</div>
				<div class="clearfix"></div>
			</form>

		</div>
	</div>
</section>

<div class="db-footer-block">
<div class="db-footer-all">
	<div class="db-tel">
		8 (499) 322-70-17		
	</div>
	<div class="db-link-one">
		<ul>
			<li><a href="#">Кейс ХБ</a></li>
			<li><a href="#">Кейс "Бамбук"</a></li>
			<li><a href="#">Шерстяные в кейсе</a></li>
			<li><a href="#">Кейс с носками</a></li>
			<li><a href="#">Кейс на год</a></li>
			<li><a href="#">Кейс "Микс"</a></li> 
		</ul>
		</div>
		<div class="clearfix"></div>	
		<div class="db-link-two">
		<ul>
			<li><a href="#">Оптом в кейсах</a></li>
			<li><a href="#">Разнообрезие</a></li>
			<li><a href="#">От лучших поставщиков</a></li>
		</ul>
	</div>
	</div>
</div>

<div id="mask"></div>
<div id="thanks" class="window">
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
</div>
<a href="#thanks" name="modal"></a>
<a href="#thanks2" name="modal"></a>
<div id="thanks2" class="window">
<div class="dd-close2"></div>
	<div class="db-all">
	<div id="db-window-img" class="db-window-img"><!-- <img src="../img/db-socks.png" alt="image"> --></div>
	<div class="db-content-window">
		<div class="db-h-content">

			<span class="db-h-one">Кейс носков</span><br>
			<span id="db-h-two" class="db-h-two"><!-- "ХЛОПОК1" --></span>
		</div>
		<div class="db-price-content">
			<span id="db-price-one" class="db-price-one">Цена: 1 799 р.</span><br>
			<span id="db-price-two" class="db-price-two"><!-- 50 пар в кейсе --></span>
		</div>
		<div class="db-form-content">
			<form action="thanks.php" method="post" class="form1">
				<input type="text" name="uname" placeholder="Ваше имя"><br>
				<input type="text" name="phone" placeholder="Номер телефона" class="phone"><br>
				<input type="submit" name="submit" value="ЗАКАЗАТЬ">
			</form>		
		</div>
	</div>
</div>
</div>
	
</body>
</html>

