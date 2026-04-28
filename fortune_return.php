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
		body.no-double-tap {
			touch-action: manipulation;
		}
	</style>
	<script>
		// 關閉點擊放大
		document.addEventListener("DOMContentLoaded", function() {
    // 抓取頁面上現有的 viewport 標籤
    let viewportMeta = document.querySelector('meta[name="viewport"]');
    
    // 如果找到了，就覆寫它的 content 內容
    if (viewportMeta) {
        viewportMeta.setAttribute("content", "width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no");
    } else {
        // 萬一原本沒有，再幫忙建立一個
        let meta = document.createElement('meta');
        meta.name = "viewport";
        meta.content = "width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no";
        document.head.appendChild(meta);
    }
});
	</script>
</head>

<body class="no-double-tap">
	<?php include 'topmenu.php'; ?>

	<main class="lamp-detail-allWrap fortune-return-2026" style="position: relative;">
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
			<img src="images/loan_2.svg" class="show-for-large">
			<img src="images/loan_2.svg" class="hide-for-large">
		</div>
		<div class="lamp-detailWrap">
			<div class="loanpic1">
				<img src="images/loan_pic1.svg" alt="pic">
			</div>
			<div class="cover-area">
				<div class="title-area">
					<div class="cat">甲辰年</div>
					<div class="cat">乙巳年</div>
					<div class="title">恭敬還庫 延續財運</div>
				</div>
				<div class="pic">
					<!-- <img src="images/ld-1.jpg"> -->
					<div class="pic-area grid-x align-center">
						<div class="repeat-area" data-img="images/sign-repeat.svg">
							<div class="item" style="opacity: 1;">
								<div class="borderbox_loan"><img src="images/sign-fortune-border.svg"></div>
								<div class="pic_loan cell large-shrink"><img src="images/loan-2.webp"></div>
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
				<div class="return_p">
					<p>注意!!<br>本頁面不是168發財錢母還金，如需還168發財錢母請洽本宮客服專線或者櫃檯服務人員。</p>
				</div>
			</div>
			<!-- <div class="mobile-share-area hide-for-large">
				<div class="text"><img src="images/ld-share.svg"></div>
				<nav class="shareList">
					<a href="javascript:;"><img src="images/ld-copy.svg"></a>

					<a href="javascript:;"><img src="images/ld-fb.svg"></a>
					<a href="javascript:;"><img src="images/ld-line.svg"></a>
				</nav>
			</div> -->

			<div class="content">
				<b>還庫說明</b>
				<br>
				依自身當時向財神爺借取的財庫金額進行歸還， 以 六千萬貫 為一份， 第一份還庫金包含還庫疏文為800元， 其後每增加 六千萬貫， 每份為 600元。<br>
			</div>
		</div>

		<div class="applyWrap return">
			<div class="head">填寫資料－線上還庫</div>
			<div class="return_content">
				<b>如何在家歸還借庫</b>
				<br>
				線上還庫完成，待收到謝函後即可將借庫紅包燒化，可先向家中神明或住家附近土地公廟燒香稟告； 亦可親至本宮上香稟告，表示已完成歸還，祈願來年更順利、財運增上。<br>
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
						<path style="stroke: #666; stroke-miterlimit: 10; stroke-width: .5px;" transform="scale(0.00606, 0.0196)"
							d="M846.16,356.34H15.25c0-8.28-6.72-15-15-15V15.25c8.28,0,15-6.72,15-15h830.91c0,8.28,6.72,15,15,15v326.09c-8.28,0-15,6.72-15,15Z" />
					</clipPath>
				</defs>
			</svg>

			<div class="memb_two">
				<form action="" class="return_form">
					<div class="row-two show-for-large"">
						<div class=" item required">
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
			<div class="item required mb-name hide-for-large">
				<h4 for="name">姓名</h4>
				<input type="text" placeholder="請輸入真實姓名" id="name" required>
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
			<div class="item required mb-gender hide-for-large">
				<h4 for="gender">性別</h4>
				<input type="radio" id="gender" name="gender" required>
				<label for="gender">信士</label>
				<input type="radio" id="gender" name="gender" required>
				<label for="gender">信女</label>
			</div>
			<div class="item required">
				<h4 for="phone">手機</h4>
				<input type="number" placeholder="請輸入正確的手機號碼" id="phone" required>
			</div>
			<div class="item w-full address required mb-flex">
				<h4>地址<p>(寄回謝函)</p>
				</h4>
				<div id="twzipcode"></div>
				<input type="text" placeholder="地址" id="address" required>
			</div>
			<div class="item required" style="justify-content: left;">
				<h4>還庫年度</h4>

				<select class="yearList year-select mb-w100">
					<option value="113年甲辰年">
						113年甲辰年
					</option>
					<option value="114年乙巳年">
						114年乙巳年
					</option>
					<option value="115年丙午年">
						115年丙午年
					</option>
					<option value="116年丁未年">
						116年丁未年
					</option>
				</select>
			</div>
			<div class="item required mb-flex">
				<h4>還庫份數<p>(每份六千萬貫)</p>
				</h4>

				<select class="yearList year-select mb-w100">
					<option value="1份">
						1份(一億兩千萬貫)
					</option>
					<option value="2份">
						2份(二億四千萬貫)
					</option>
					<option value="3份">
						3份(三億六千萬貫)
					</option>
					<option value="4份">
						4份(四億八千萬貫)
					</option>
					<option value="5份">
						5份(六億貫)
					</option>
				</select>
			</div>
			<div class="row-two">
				<div class="item required  payment" style="width: fit-content;">
					<h4 for="payment">付款方式</h4>
					<div>
						<input type="radio" id="payment" name="payment" required>
						<label for="payment">信用卡付款</label>
					</div>
					<div>
						<input type="radio" id="payment" name="payment" required>
						<label for="payment">LINE Pay</label>
					</div>
				</div>
			</div>
			<div class="item required" style="justify-content: right;">
				<input type="radio" id="agree" name="agree" required>
				<label for="agree">我已詳閱並同意 <strong class="warning_btn">注意事項與個資告知</strong></label>
			</div>
			<div class="details">
				<h6>結帳明細</h6>
				<div class="text">
					<p>還庫金額：一億兩千萬貫（2 份 × 六千萬貫）</p>
				</div>
				<div class="info">
					<p> </p>
					<div class="total">
						<h5>應繳功德金合計</h5>
						<h6><i>$</i>1,400</h6>
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
			<div class="bottom_info">
				<p>如需還庫更大的份額，請來電洽詢。 來電洽詢 <strong>04-2243-4146</strong>。</p>
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
					<p><i>1. </i>本頁用於「歸還財庫」線上付款。</p>
					<p><i>2. </i>資料僅供本次還庫聯繫與寄送使用。</p>
					<p><i>3. </i>金額以六千萬貫為一份：首份800元，其後每份+600元。</p>
					<p><i>4. </i>付款後若需修改，請來電聯繫本宮。</p>
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
				<table class="content mb-td">
					<tr>
						<td>年度：</td>
						<td>113年</td>
					</tr>
					<tr>
						<td>份數：</td>
						<td>1份(一億兩千萬貫)</td>
					</tr>
					<tr>
						<td>總金額：</td>
						<td>NT$ 1,400</td>
					</tr>
					<tr>
						<td>付款方式：</td>
						<td>信用卡付款</td>
					</tr>
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
						<td>手機：</td>
						<td>0912345678</td>
					</tr>
					<tr>
						<td>地址：</td>
						<td>台北市大安區信義路一段1號</td>
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



		<div class="loanpic2 return">
			<img src="images/loan_pic2.svg" alt="pic">
		</div>


		<div class="mobile-ld-backWrap hide-for-large">
			<div class="share-area">
				<div class="text"><img src="images/ld-share.svg"></div>

				<nav class="shareList">
					<a href="javascript:;"><img src="images/ld-copy.svg"></a>
					<a href="javascript:;"><img src="images/ld-fb.svg"></a>
					<a href="javascript:;"><img src="images/ld-line.svg"></a>
					<a href="javascript:;"><img src="images/new-ig.svg"></a>
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
	const winWidth = window.innerWidth;


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


	$('.warning_btn').on('click', function () {
		$('.warning').addClass('active');
		if (winWidth <= 1024) {
			$('.noteWrap.warning').scrollTop(0);
		} $('html, body').css('overflow', 'hidden');
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

	$('button.confirm').on('click', function (e) {
		e.preventDefault(); // 避免表單送出（如果有 default 行為）
		$('.confirm').addClass('active');
		if (winWidth <= 1024) {
			$('.noteWrap.confirm').scrollTop(0);
			$('html, body').addClass('open-lightBox');

		}
		$('html, body').css('overflow', 'hidden');
	})

	$('.confirm button').on('click', function () {
		$('.confirm').removeClass('active');
		$('.confirm').addClass('active');
		if (winWidth <= 1024) {
			$('html, body').removeClass('open-lightBox');

		}
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
			if (winWidth <= 1024) {
				$('html, body').removeClass('open-lightBox');
			}
		}
	});
</script>