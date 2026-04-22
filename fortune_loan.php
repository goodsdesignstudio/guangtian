<!DOCTYPE html>
<html>

<head>
	<?php include 'html_head.php'; ?>
	<style>
		/* ﾚ(ﾟ∀ﾟ;)ﾍ　ﾍ( ﾟ∀ﾟ;)ﾉ */
		html,
		body {
			overflow-x: clip !important;
		}
	</style>
</head>

<body>
	<?php include 'topmenu.php'; ?>

	<main class="lamp-detail-allWrap" style="position: relative;">

		<div class="share_loan show-for-large">


			<div class="share-area">


				<div class="text"><img src="images/nd-share.svg"></div>





				<nav class="shareList">


					<a href="javascript:;"><img src="images/nd-copy.svg"></a>


					<a href="javascript:;"><img src="images/nd-fb.svg"></a>


					<a href="javascript:;"><img src="images/nd-line.svg"></a>

					<a href="javascript:;"><img src="images/new-ig.svg"></a>


				</nav>


			</div>


		</div>

		<div class="lamp-top-en">

			<img src="images/loan_1.svg" class="show-for-large">

			<img src="images/loan_1.svg" class="hide-for-large">

		</div>

		<div class="lamp-detailWrap">

			<div class="loanpic1">

				<img src="images/loan_pic1.svg" alt="pic">

			</div>
			<div class="cover-area">

				<div class="title-area">

					<div class="cat">農曆三月十五</div>

					<div class="title">丙午年財神借庫 開放預約</div>

				</div>

				<div class="pic">

					<!-- <img src="images/ld-1.jpg"> -->

					<div class="pic-area grid-x align-center">

						<div class="repeat-area" data-img="images/sign-repeat.svg">

							<div class="item" style="opacity: 1;">

								<div class="borderbox_loan"><img src="images/sign-fortune-border.svg"></div>

								<div class="pic_loan cell large-shrink"><img src="images/loan-1.webp"></div>

							</div>

							<!-- <div class="item" style="opacity: 0;"><img src="images/sign-repeat.svg"></div>
							<div class="item" style="opacity: 0;"><img src="images/sign-repeat.svg"></div>
							<div class="item" style="opacity: 0;"><img src="images/sign-repeat.svg"></div>
							<div class="item" style="opacity: 0;"><img src="images/sign-repeat.svg"></div>
							<div class="item" style="opacity: 0;"><img src="images/sign-repeat.svg"></div>
							<div class="item" style="opacity: 0;"><img src="images/sign-repeat.svg"></div>
							<div class="item" style="opacity: 0;"><img src="images/sign-repeat.svg"></div>
							<div class="item" style="opacity: 0;"><img src="images/sign-repeat.svg"></div> -->

						</div>

					</div>

				</div>

			</div>

			<div class="price-area grid-x align-center-middle">

				<div class="text cell shrink"><img src="images/loan_tag.svg"></div>

				<div class="piece cell shrink"><b>500</b> /每份</div>

				<div class="loan_p">

					<p>登記時間：即日起至 2026/05/01止<br>寄送時間：自 2026/05/15 起陸續安排</p>

				</div>

			</div>

			<div class="mobile-share-area hide-for-large">

				<div class="text"><img src="images/ld-share.svg"></div>

				<nav class="shareList">

					<a href="javascript:;"><img src="images/ld-copy.svg"></a>

					<a href="javascript:;"><img src="images/ld-fb.svg"></a>

					<a href="javascript:;"><img src="images/ld-line.svg"></a>

				</nav>

			</div>

			<div class="content">

				<b>緣起</b>

				<br>

				財神爺趙公明掌管三界財運、財氣、財庫。近來感念眾生為財所苦，每年農曆三月十五日財神聖誕子時，大開金輪寶庫，特許有緣信眾可向財神爺借得財庫。信眾可以虔誠祈求財運，借庫後祈求財神爺庇祐，期盼一整年財運亨通、生意興隆、健康平安。<br>

				<div class="hr"><span></span></div>

				<b>財神借庫與求財補庫的區別？</b>

				<br>

				<p>「求財」與「補庫」是兩回事</p>

				「求財」是向財神爺祈求未來的財運以及財氣，透過「財神好運酒」來「酒氣化財氣、財氣永藏酒」，而「補庫」是因累世所犯下的無心之過，而造成今生的冤親債主，透過補財庫的科儀，化解與冤親債主之間的冤債，來避免阻礙今生的運勢，所以求財之前一定要先補財庫，財庫補足了，求財才能留得住，才能讓財運一年比一年更好。
				<br><br>

				向財神爺「借財庫」與「求財補庫」也是兩回事若是財庫補不夠、補得慢，每年農曆三月十五財神聖誕，財神爺在聖誕這天曾大開金輪寶庫，讓有緣信眾可以「向財神爺借庫」，象徵向財神爺借金輪寶庫之財庫，借得財庫可提升自身財庫的上限，讓我們的財運更好、更快的到來。每年僅在財神爺聖誕這一天可向財神爺借庫，機會難得！<br>

			</div>

		</div>

		<div class="applyWrap">

			<div class="head">填寫資料－搶先預約</div>


			<div class="process_info">
				<?php $process_info = [
					[
						'img' => 'images/one.svg',
						'title' => '填寫資料',
						'text' => '真實姓名 / 性別 / 生日 / 手機 / 地址'
					],
					[
						'img' => 'images/two.svg',
						'title' => '確認金額',
						'text' => '功德金 500 / 份 + 郵寄工本費 130'
					],
					[
						'img' => 'images/three.svg',
						'title' => '線上預約',
						'text' => '預約完成後將於法會後，陸續電聯寄送'
					],
				] ?>
				<?php foreach ($process_info as $item): ?>
					<div class="item">
						<img src="<?php echo $item['img'] ?>" alt="<?php echo $item['title'] ?>">
						<div class="text">
							<h6><?php echo $item['title'] ?></h6>
							<p><?php echo $item['text'] ?></p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>

			<svg width="0" height="0" style="position:absolute;" aria-hidden="true" focusable="false">
				<defs>
					<clipPath id="btnPath" clipPathUnits="objectBoundingBox">
						<path transform="scale(0.00606, 0.0196)"
							d="M142.88,51.48l22.37-20.18c-3.07-3.07-3.07-8.05,0-11.12L142.88,0H22.37L0,20.18c3.07,3.07,3.07,8.05,0,11.12l22.37,20.18h120.51Z" />
					</clipPath>
				</defs>
			</svg>
			<svg width="0" height="0" style="position:absolute;" aria-hidden="true" focusable="false">
				<defs>
					<clipPath id="privacyPath" clipPathUnits="objectBoundingBox">
						<path style="stroke: #666; stroke-miterlimit: 10; stroke-width: .5px;"
							transform="scale(0.00606, 0.0196)"
							d="M846.16,356.34H15.25c0-8.28-6.72-15-15-15V15.25c8.28,0,15-6.72,15-15h830.91c0,8.28,6.72,15,15,15v326.09c-8.28,0-15,6.72-15,15Z" />
					</clipPath>
				</defs>
			</svg>

			<div class="memb_two">
				<form action="" class="loan_form">
					<div class="row-two">
						<div class="item required">
							<h4 for="name">姓名</h4>
							<input type="text" placeholder="請輸入真實姓名" id="name" required>
						</div>
						<div class="item required">
							<h4 for="gender">性別</h4>
							<input type="radio" id="gender" name="gender" required>
							<label for="gender">信士</label>
							<input type="radio" id="gender" name="gender" required>
							<label for="gender">信女</label>
						</div>
					</div>
					<div class="item w-full required date">
						<h4>國曆生日</h4>
						<select class="yearList year-select sel-year">
							<option value="">
								西元
							</option>
							<?php for ($i = 1900; $i <= date("Y"); $i++) { ?>
								<option value="<?php echo $i; ?>">
									<?php echo $i; ?>年
								</option>
							<?php } ?>
						</select>
						<select class="yearList year-select sel-month">
							<option value="">
								月份
							</option>
							<?php for ($i = 1; $i <= 12; $i++) { ?>
								<option value="<?php echo $i; ?>">
									<?php echo $i; ?>月
								</option>
							<?php } ?>
						</select>
						<select class="yearList year-select sel-day">
							<option value="">
								日期
							</option>
							<?php for ($i = 1; $i <= 31; $i++) { ?>
								<option value="<?php echo $i; ?>">
									<?php echo $i; ?>號
								</option>
							<?php } ?>
						</select>
						<select class="yearList year-select">
							<option value="">
								生辰吉時
							</option>
							<option value="吉時">
								吉時
							</option>
							<option value="子時">
								子時
							</option>
							<option value="丑時">
								丑時
							</option>
							<option value="寅時">
								寅時
							</option>
							<option value="卯時">
								卯時
							</option>
							<option value="辰時">
								辰時
							</option>
							<option value="巳時">
								巳時
							</option>
							<option value="午時">
								午時
							</option>
							<option value="未時">
								未時
							</option>
							<option value="申時">
								申時
							</option>
							<option value="酉時">
								酉時
							</option>
							<option value="戌時">
								戌時
							</option>
							<option value="亥時">
								亥時
							</option>
						</select>
					</div>
					<div class="item required">
						<h4 for="phone">手機</h4>
						<input type="number" placeholder="請輸入正確的手機號碼" id="phone" required>
					</div>
					<div class="item required">
						<h4 for="email">信箱</h4>
						<input type="email" placeholder="請輸入正確的email格式" id="email" required>
					</div>
					<div class="item w-full address required">
						<h4>地址</h4>
						<div id="twzipcode"></div>
						<input type="text" placeholder="地址" id="address" required>
					</div>
					<div class="row-two">
						<div class="item required" style="width: 35%;">
							<h4>報名份數</h4>

							<select class="yearList year-select">
								<option value="1份">
									1份
								</option>
								<option value="2份">
									2份
								</option>
								<option value="3份">
									3份
								</option>
								<option value="4份">
									4份
								</option>
								<option value="5份">
									5份
								</option>
							</select>
						</div>
						<div class="item required" style="width: fit-content;">
							<h4>指定寄送日期</h4>

							<select class="yearList year-select">
								<option value="2026/05/15">
									2026/05/15
								</option>
								<option value="2026/05/16">
									2026/05/16
								</option>
								<option value="2026/05/17">
									2026/05/17
								</option>
								<option value="2026/05/18">
									2026/05/18
								</option>
								<option value="2026/05/19">
									2026/05/19
								</option>
							</select>
						</div>
					</div>
					<div class="row-two">
						<div class="item required" style="width: fit-content;">
							<h4 for="payment">付款方式</h4>
							<input type="radio" id="payment" name="payment" required>
							<label for="payment">信用卡付款</label>
							<input type="radio" id="payment" name="payment" required>
							<label for="payment">LINE Pay</label>
						</div>
					</div>
					<div class="item required">
						<h4 for="note">備註</h4>
						<input type="text" placeholder="請輸入備註" id="note" required>
					</div>
					<div class="item required" style="justify-content: right;">
						<input type="radio" id="agree" name="agree" required>
						<label for="agree">我已詳閱並同意 <strong class="warning_btn">注意事項與個資告知</strong></label>
					</div>
					<div class="details">
						<h6>結帳明細</h6>
						<div class="text">
							<p>功德金 500 / 份 + 郵寄工本費 130 / 份</p>
						</div>
						<div class="info">
							<p>寄送前會電話聯繫，請保持暢通，如未接通電話將無法寄出，
								則財神借庫功德金將轉為隨喜功德。</p>
							<div class="total">
								<h5>總計</h5>
								<h6><i>$</i>630</h6>
							</div>
						</div>
					</div>
					<div class="btnlist">
						<button class="reedit">
							<h5>預覽資料</h5>
						</button>
						<button class="confirm">
							<h5>確認並付款</h5>
						</button>
					</div>
				</form>
			</div>
		</div>


		<!-- 注意事項 -->
		<dialog class="noteWrap warning">
			<div class="box">
				<div class="pic"><img src="images/loan_lightpic.svg" alt="pic"></div>
				<div class="head">
					<img src="images/warning.svg" alt="warning">
					<h5>注意事項與個資告知</h5>
				</div>
				<div class="content">
					<p><i>1. </i>本頁用於「財神借庫」線上預約與付款，付款完成後由專人安排寄送。</p>
					<p><i>2. </i>資料僅供本次活動通知、寄送與寺務相關聯繫，不另作他途。</p>
					<p><i>3. </i>如需修改資料，請於付款前確認；付款後欲更改，請洽服務台。</p>
					<p><i>4. </i>金流委託銀行端處理，請留意信用卡驗證與簡訊通知。</p>
				</div>
				<button>
					<h5>我已了解</h5>
				</button>
			</div>
		</dialog>


		<!-- 確認資料 -->
		<dialog class="noteWrap confirm">
			<div class="box">
				<div class="pic"><img src="images/loan_lightpic.svg" alt="pic"></div>
				<div class="head">
					<img src="images/warning.svg" alt="warning">
					<h5>請確認您的資料</h5>
				</div>
				<table class="content">
					<tr>
						<td>姓名：</td>
						<td>林很好</td>
					</tr>
					<tr>
						<td>性別：</td>
						<td>男</td>
					</tr>
					<tr>
						<td>生日：</td>
						<td>1990-01-01</td>
					</tr>
					<tr>
						<td>手機號碼：</td>
						<td>0912345678</td>
					</tr>
					<tr>
						<td>收件地址：</td>
						<td>台北市大安區信義路一段1號</td>
					</tr>
					<tr>
						<td>報名份數：</td>
						<td>1份</td>
					</tr>
					<tr>
						<td>指定寄送日期：</td>
						<td>2026-05-18</td>
					</tr>
					<tr>
						<td>備註：</td>
						<td>無</td>
					</tr>
					<tr>
						<td>總金額：</td>
						<td>630元</td>
					</tr>
				</table>
				<div class="row-two">
					<button class="reedit">
						<h5>重新修改</h5>
					</button>
					<button>
						<h5>我已確認</h5>
					</button>
				</div>
			</div>
		</dialog>






		<section class="c-qa-area is-white">

			<div class="head">

				<img src="images/c-qa-head.svg" class="show-for-large">

				<img src="images/c-qa-head-mobile.svg" class="hide-for-large">

			</div>



			<div class="loanpic2">
				<img src="images/loan_pic2.svg" alt="pic">
			</div>

			<div class="cd-slide-wrap">

				<div class="cd-slide-container is-fortune">

					<ul class="qaList">

						<li>

							<div class="title">什麼是財神借庫？</div>

							<div class="answer">
								相傳財神爺趙公明於聖誕開庫賜財，信眾得以象徵性向財神借取一整年的好運與護佑，祈求事業亨通、財利兩全。
							</div>

							<div class="arrow">

								<svg xmlns="http://www.w3.org/2000/svg" width="41.87" height="41.87"
									viewBox="0 0 41.87 41.87">

									<circle class="cls-1" cx="20.94" cy="20.94" r="20.44"
										transform="translate(-8.67 20.94) rotate(-45)" />

									<path class="cls-2" d="M8.59,17.16,18.82,27.39a3,3,0,0,1,4.24,0L33.29,17.16" />

								</svg>

							</div>

						</li>

						<li>

							<div class="title">功德金與費用如何計算？</div>

							<div class="answer">
								功德金每份500元，郵寄工本費130元，合計630元。
							</div>

							<div class="arrow">

								<svg xmlns="http://www.w3.org/2000/svg" width="41.87" height="41.87"
									viewBox="0 0 41.87 41.87">

									<circle class="cls-1" cx="20.94" cy="20.94" r="20.44"
										transform="translate(-8.67 20.94) rotate(-45)" />

									<path class="cls-2" d="M8.59,17.16,18.82,27.39a3,3,0,0,1,4.24,0L33.29,17.16" />

								</svg>

							</div>

						</li>

						<li>

							<div class="title">何時會寄送？</div>

							<div class="answer">
								相傳財神爺趙公明於聖誕開庫賜財，信眾得以象徵性向財神借取一整年的好運與護佑，祈求事業亨通、財利兩全。
							</div>

							<div class="arrow">

								<svg xmlns="http://www.w3.org/2000/svg" width="41.87" height="41.87"
									viewBox="0 0 41.87 41.87">

									<circle class="cls-1" cx="20.94" cy="20.94" r="20.44"
										transform="translate(-8.67 20.94) rotate(-45)" />

									<path class="cls-2" d="M8.59,17.16,18.82,27.39a3,3,0,0,1,4.24,0L33.29,17.16" />

								</svg>

							</div>

						</li>

						<li>

							<div class="title">可以帶親友預約嗎？</div>

							<div class="answer">
								相傳財神爺趙公明於聖誕開庫賜財，信眾得以象徵性向財神借取一整年的好運與護佑，祈求事業亨通、財利兩全。
							</div>

							<div class="arrow">

								<svg xmlns="http://www.w3.org/2000/svg" width="41.87" height="41.87"
									viewBox="0 0 41.87 41.87">

									<circle class="cls-1" cx="20.94" cy="20.94" r="20.44"
										transform="translate(-8.67 20.94) rotate(-45)" />

									<path class="cls-2" d="M8.59,17.16,18.82,27.39a3,3,0,0,1,4.24,0L33.29,17.16" />

								</svg>

							</div>

						</li>


						<li>

							<div class="title">需要填寫哪些資料？</div>

							<div class="answer">
								相傳財神爺趙公明於聖誕開庫賜財，信眾得以象徵性向財神借取一整年的好運與護佑，祈求事業亨通、財利兩全。
							</div>

							<div class="arrow">

								<svg xmlns="http://www.w3.org/2000/svg" width="41.87" height="41.87"
									viewBox="0 0 41.87 41.87">

									<circle class="cls-1" cx="20.94" cy="20.94" r="20.44"
										transform="translate(-8.67 20.94) rotate(-45)" />

									<path class="cls-2" d="M8.59,17.16,18.82,27.39a3,3,0,0,1,4.24,0L33.29,17.16" />

								</svg>

							</div>

						</li>



					</ul>

				</div>


				<div class="mobile-open-btn hide-for-large">

					<img src="images/cd-mobile-openbtn-fortune.svg">

					<img src="images/cd-mobile-openbtn-fortune-arrow.svg" class="mob-arrow">

				</div>

			</div>

		</section>

		<div class="mobile-ld-backWrap hide-for-large">
			<div class="share-area">
				<div class="text"><img src="images/ld-share.svg"></div>

				<nav class="shareList">
					<a href="javascript:;"><img src="images/ld-copy.svg"></a>
					<a href="javascript:;"><img src="images/ld-fb.svg"></a>
					<a href="javascript:;"><img src="images/ld-line.svg"></a>
				</nav>
			</div>

			<div class="btn">
				<div class="bg">
					<svg xmlns="http://www.w3.org/2000/svg" width="134.25" height="41.82" viewBox="0 0 134.25 41.82">
						<path class="cls-1"
							d="M116.08,41.82l18.17-16.39a6.4,6.4,0,0,1,0-9L116.08,0H18.17L0,16.39a6.4,6.4,0,0,1,0,9L18.17,41.82Z" />
					</svg>
				</div>
				<div class="text">返回</div>
			</div>
		</div>
	</main>

	<?php include 'footer.php'; ?>
</body>

<?php include 'script.php'; ?>

</html>

<script>
	$(window).on("scroll", function () {
		var _scrollTop = $(this).scrollTop()

		if (_scrollTop >= 100) {
			$(".logo-fixed, .topmenuWrap").removeClass("is-red")
		} else {
			$(".logo-fixed, .topmenuWrap").addClass("is-red")
		}
	}).trigger("scroll")
	$('.year-select').niceSelect();
	$('#twzipcode').twzipcode({
		'countyName': 'city',
		'districtName': 'area',
		'zipcodeName': '',
		'readonly': false,
		'zipcodeIntoDistrict': false,
		'onCountySelect': function () {
			setTimeout(function () {
				var $areaSelect = $('#twzipcode').find('select[name="area"]');
				$areaSelect.next('.nice-select').remove();
				$areaSelect.niceSelect();
			}, 50);
		},
		'css': [
			'yearList year-select county-sel',
			'yearList year-select district-sel',
			'yearList year-select zip-sel'
		]
	});

	$('#twzipcode').find('select').niceSelect();



	$(".applyWrap .apply-container .article-area .yearList li").on("click", function () {
		$(this).addClass("current").siblings().removeClass("current")
	})

	$('.controll-area .num-area .add').on("click", function () {
		var _num = parseInt($('.num-area .num').text());
		_num++;
		if (_num < 10) {
			$('.num-area .num').text('0' + _num);
		} else {
			$('.num-area .num').text(_num);
		}
	})
	$('.controll-area .num-area .minor').on("click", function () {
		var _num = parseInt($('.num-area .num').text());
		_num--;
		if (_num < 10) {

			if (_num < 0) {
				$('.num-area .num').text('00');
			} else {
				$('.num-area .num').text('0' + _num);
			}
		} else {
			$('.num-area .num').text(_num);
		}
	})


	$(".qaList li").on("click", function () {

		$(this).toggleClass("is-open")

		$(".answer", this).slideToggle(300)

	})

	$('.warning_btn').on('click', function () {
		$('.warning').addClass('active');
		$('html, body').css('overflow', 'hidden');
	})

	$('.warning button').on('click', function () {
		$('.warning').removeClass('active');
		$('html, body').css('overflow', '');
	})

	$('.warning').on('wheel', function (e) {
		if ($(e.target).hasClass('warning')) {
			e.preventDefault();
		}
	});

	$('.warning').on('click', function (e) {
		if ($(e.target).hasClass('warning')) {
			$(this).removeClass('active');
			$('html, body').css('overflow', '');
		}
	});

	$('.confirm').on('click', function () {
		$('.confirm').addClass('active');
		$('html, body').css('overflow', 'hidden');
	})

	$('.confirm button').on('click', function () {
		$('.confirm').removeClass('active');
		$('html, body').css('overflow', '');
	})

	$('.confirm').on('wheel', function (e) {
		if ($(e.target).hasClass('confirm')) {
			e.preventDefault();
		}
	});

	$('.confirm').on('click', function (e) {
		if ($(e.target).hasClass('confirm')) {
			$(this).removeClass('active');
			$('html, body').css('overflow', '');
		}
	});
</script>