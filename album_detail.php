<!DOCTYPE html>
<html>

<head>
	<?php include 'html_head.php'; ?>
	<title>行醫濟世-宇宙消毒大隊 | 台中廣天宮財神開基祖廟</title>
</head>

<body id="album_detail">
	<?php include 'topmenu.php'; ?>
	<div class="album-detail-container">
		<div class="album-bannerWrap show-for-large">
			<img src="images/album-banner.jpg">
		</div>
		<div class="album-bannerWrap hide-for-large">
			<img src="images/album-banner-mobile.jpg">
		</div>

		<div class="album-sloganWrap">
			<div class="album-deco-1 hide-for-large">
				<img src="./images/album-deco-1.png" alt="">
			</div>
			<div class="title">行醫濟世-宇宙消毒大隊</div>
			<div class="content">台中廣天宮在農曆新年之際，財神爺大發慈悲，與全台灣所有信眾結緣，除了有「頭頂財天、腳踏財地、身過錢門、錢財隨身」過錢門與結緣紅包之外，所有的年斗燈也都會在新春點燈安奉......</div>
		</div>

		<div class="album-detailWrap">
			<div class="deco-1 show-for-large">
				<img src="images/ceremony-deco-2.png">
			</div>

			<div class="album-deco-2 hide-for-large">
				<img src="./images/future-deco.png" alt="">
			</div>
			<ul class="albumList">
				<li>
					<div class="pic"><img src="images/ad-1.jpg"></div>
					<div class="hover-area"><img src="images/album-hover.svg"></div>
				</li>
				<li>
					<div class="pic"><img src="images/ad-2.jpg"></div>
					<div class="hover-area"><img src="images/album-hover.svg"></div>
				</li>
				<li>
					<div class="pic"><img src="images/ad-3.jpg"></div>
					<div class="hover-area"><img src="images/album-hover.svg"></div>
				</li>
				<li>
					<div class="pic"><img src="images/ad-1.jpg"></div>
					<div class="hover-area"><img src="images/album-hover.svg"></div>
				</li>
				<li>
					<div class="pic"><img src="images/ad-2.jpg"></div>
					<div class="hover-area"><img src="images/album-hover.svg"></div>
				</li>
				<li>
					<div class="pic"><img src="images/ad-3.jpg"></div>
					<div class="hover-area"><img src="images/album-hover.svg"></div>
				</li>
				<li>
					<div class="pic"><img src="images/ad-1.jpg"></div>
					<div class="hover-area"><img src="images/album-hover.svg"></div>
				</li>
				<li>
					<div class="pic"><img src="images/ad-2.jpg"></div>
					<div class="hover-area"><img src="images/album-hover.svg"></div>
				</li>
				<li>
					<div class="pic"><img src="images/ad-3.jpg"></div>
					<div class="hover-area"><img src="images/album-hover.svg"></div>
				</li>
			</ul>
		</div>
	</div>

	<div class="m-fancyWrap show-for-large">
		<div class="fancy-closeBlock"></div>

		<!-- code here -->
		<div class="album-fancyContainer">
			<ul class="adf-sliderList">
				<li><img src="images/ad-fancy-1.jpg"></li>
				<li><img src="images/ad-fancy-2.jpg"></li>
				<li><img src="images/ad-fancy-3.jpg"></li>
			</ul>

			<div class="adf-sider-pager">
				<span class="now">1</span>/<span class="total">15</span>
			</div>

			<div class="prev"><img src="images/adf-prev.svg"></div>
			<div class="next"><img src="images/adf-next.svg"></div>
		</div>
	</div>

	<div class="m-fancyWrap hide-for-large">
		<div class="close">
			<img src="./images/album-close.svg" alt="">
		</div>
		<div class="swiper mySwiper">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<img src="images/ad-fancy-1.jpg">
					<div class="num">1/12</div>
				</div>
				<div class="swiper-slide">
					<img src="images/ad-fancy-2.jpg">
					<div class="num">2/12</div>
				</div>
				<div class="swiper-slide">
					<img src="images/ad-fancy-3.jpg">
					<div class="num">3/12</div>
				</div>
			</div>
		</div>
	</div>
	<div class="space-for-mobile">

	</div>

	<?php include 'footer.php'; ?>
</body>

<?php include 'script.php'; ?>

</html>

<script>
	$(".topmenu-bg").addClass("is-red");

	$(".albumList li").on("click", function() {
		$(".m-fancyWrap").addClass("is-show").scrollTop(0)
		$("body").addClass("is-lock")
	})

	$(".fancy-close, .fancy-closeBlock").on("click", function() {
		$(".m-fancyWrap").removeClass("is-show")
		gsap.delayedCall(0.5, function() {
			$("body").removeClass("is-lock")
		});
	})


	var $carousel_fancy = $(".adf-sliderList").flickity({
		"prevNextButtons": false,
		"pageDots": false,
		"wrapAround": true,
		"autoPlay": 4000,
		"cellAlign": "center",
		"imagesLoaded": true,
		"arrowShape": ""
	});


	if (device == 'mobile') {
		$(".albumList li").on("click", function() {
			$(".m-fancyWrap").addClass("is-show").scrollTop(0)
			$("html").addClass("is-lock")
			$(".album-detail-container").addClass("not-show")
			$(".space-for-mobile").addClass("is-show")
			$(".footerWrap").addClass("is-fixed")
		})

		$(".m-fancyWrap .close").on("click", function() {
			$(".m-fancyWrap").removeClass("is-show")
			$("html").removeClass("is-lock")
			$(".album-detail-container").removeClass("not-show")
			$(".space-for-mobile").removeClass("is-show")
			$(".footerWrap").removeClass("is-fixed")
			// gsap.delayedCall(0.5, function() {

			// });
		})
		var winWidth = window.innerWidth;
		console.log(winWidth);
		if (winWidth > 639 & winWidth <1025 ) {
			const swiper = new Swiper('.swiper', {
				slidesPerView: 1.5,
				spaceBetween: 30,
				direction: 'vertical',
				loop: true,
				allowTouchMove: true,
				centeredSlides: true,
			});
		}
		else{
			const swiper = new Swiper('.swiper', {
				slidesPerView: 2.5,
				spaceBetween: 30,
				direction: 'vertical',
				loop: true,
				allowTouchMove: true,
				centeredSlides: true,
			});
		}


	}


	var cellElements = $carousel_fancy.flickity('getCellElements');


	$carousel_fancy.on('change.flickity', function(event, index) {
		$(".adf-sider-pager .now").text(index + 1);
	});


	$(".adf-sider-pager .total").text(cellElements.length);



	$(".album-fancyContainer .prev").on("click", function() {
		$carousel_fancy.flickity('previous');
	})

	$(".album-fancyContainer .next").on("click", function() {
		$carousel_fancy.flickity('next');
	})
</script>