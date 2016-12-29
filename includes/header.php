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