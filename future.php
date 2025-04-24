<!DOCTYPE html>
<html>

<head>
	<?php include 'html_head.php'; ?>
	<title>未來活動 | 台中廣天宮財神開基祖廟</title>
</head>

<body>
	<?php include 'topmenu.php'; ?>

	<main id="future" class="future-allWrap">
		<div class="future-headWrap show-for-large">
			<img src="images/future-head.svg">
		</div>

		<div class="future-headWrap hide-for-large">
			<img src="images/future-head-mobile.svg">
		</div>

		<div class="futureWrap grid-x" data-r='{"opacity": 0, "y": 60, "delay": 0.4}'>
			<ul class="futureList">
				<li class="grid-x">

					<div class="num">01</div>

					<div class="repeat-area large-shrink show-for-large">
						<div class="item"><img src="images/future-repeat.svg"></div>
						<div class="item"><img src="images/future-repeat.svg"></div>
						<div class="item"><img src="images/future-repeat.svg"></div>
						<div class="item"><img src="images/future-repeat.svg"></div>
						<div class="item"><img src="images/future-repeat.svg"></div>
						<div class="item"><img src="images/future-repeat.svg"></div>

						<div class="item">
							<div class="pic-area">
								<div class="borderbox"><img src="images/future-border.svg"></div>
								<div class="pic"><img src="images/future-1.jpg"></div>
							</div>
						</div>
					</div>
					<div class="pic-area hide-for-large">
						<div class="pic">
							<img src="images/future-1.jpg">
						</div>
					</div>

					<div class="article-area cell large-auto">
						<div class="year">2022</div>
						<div class="date">10.10-21</div>
						<div class="title">111年度上元節法會活動</div>
						<div class="content">台中廣天宮在農曆新年之際，財神爺大發慈悲，與全台灣所有信眾結緣，除了有「頭頂財天、腳踏財地、身過錢門、錢財隨身」過錢門與結緣紅包之外，所有的年斗燈也都會在新春點燈安奉......</div>
						<a class="align-top" href="signup_detail.php">
							<div class="more"><img src="images/seemore.svg"></div>
						</a>
					</div>

				</li>
				<li class="grid-x">

					<div class="num">02</div>

					<div class="repeat-area cell large-shrink show-for-large">
						<div class="item"><img src="images/future-repeat.svg"></div>
						<div class="item"><img src="images/future-repeat.svg"></div>
						<div class="item"><img src="images/future-repeat.svg"></div>
						<div class="item"><img src="images/future-repeat.svg"></div>
						<div class="item"><img src="images/future-repeat.svg"></div>
						<div class="item"><img src="images/future-repeat.svg"></div>

						<div class="item">
							<div class="pic-area">
								<div class="borderbox"><img src="images/future-border.svg"></div>
								<div class="pic"><img src="images/future-2.jpg"></div>
							</div>
						</div>
					</div>
					<div class="pic-area hide-for-large">
						<div class="pic">
							<img src="images/future-2.jpg">
						</div>
					</div>

					<div class="article-area cell large-auto">
						<div class="year">2022</div>
						<div class="date">10.25-29</div>
						<div class="title">台中區友宮參訪</div>
						<div class="content">台中廣天宮在農曆新年之際，財神爺大發慈悲，與全台灣所有信眾結緣，除了有「頭頂財天、腳踏財地、身過錢門、錢財隨身」過錢門與結緣紅包之外，所有的年斗燈也都會在新春點燈安奉......</div>
						<a class="align-top" href="signup_detail.php">
							<div class="more"><img src="images/seemore.svg"></div>
						</a>
					</div>

				</li>
			</ul>
		</div>

		<div class="future-more show-for-large">
			<img src="images/future-more.svg">
		</div>
		<div class="future-more hide-for-large">
			<img src="images/future-more-mobile.svg">
		</div>

		<div class="future-deco hide-for-large">
			<img src="./images/future-deco.png" alt="">
		</div>
	</main>

	<?php include 'footer.php'; ?>
</body>

<?php include 'script.php'; ?>

</html>

<script>
	$(".future-more").on("click", function() {
		var $clone = $(".futureList li").slice(-2).clone().css("opacity", 0);

		$clone.appendTo($(".futureList"));

		gsap.to($clone, {
			opacity: 1,
			stagger: 0.12,
		});
	})
</script>