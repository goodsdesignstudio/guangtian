<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body style="background: url(images/poem-bg.jpg) 0 0/cover no-repeat;">
	<section class="poem-detailWrap">
		<div class="back"><a href="poem2.php"><img src="images/pd-poem-back.png"></a></div>

		<div class="poem-detail-innerWrap">
			<div class="deco-ink"><img src="images/pd-poem-ink.png"></div>

			<div class="head">
				<i>第</i>
				<i>六</i>
				<i>籤</i>
			</div>

			<div class="poem-area">
				<div class="title-area flex-container align-middle">
					<div class="deco-1"><img src="images/pd-poem-deco.png"></div>
					<div class="deco-2"><img src="images/pd-poem-deco.png"></div>

					<div class="title">相如完璧歸趙</div>
					<div class="note">甲己　下下</div>
				</div>
				<div class="content">
					何勞鼓瑟更吹笙<br>
					寸步如登萬里程<br>
					彼此懷疑不相信<br>
					休將私意憶濃情<br>
				</div>
			</div>

			<ul class="explainList">
				<li>
					<div class="title">典故</div>
					<div class="content">戰國。藺相如。趙人也。時趙有良璧。秦請易以十五城。相如奉璧入秦。而秦負約。 相如將璧先使舍人懷歸。以理折服秦王。完璧歸趙。相如在趙。秦終不能勝趙。</div>
				</li>
				<li>
					<div class="title">典故</div>
					<div class="content">戰國。藺相如。趙人也。時趙有良璧。秦請易以十五城。相如奉璧入秦。而秦負約。 相如將璧先使舍人懷歸。以理折服秦王。完璧歸趙。相如在趙。秦終不能勝趙。</div>
				</li>
				<li>
					<div class="title">典故</div>
					<div class="content">戰國。藺相如。趙人也。時趙有良璧。秦請易以十五城。相如奉璧入秦。而秦負約。 相如將璧先使舍人懷歸。以理折服秦王。完璧歸趙。相如在趙。秦終不能勝趙。</div>
				</li>
				<li>
					<div class="title">典故</div>
					<div class="content">戰國。藺相如。趙人也。時趙有良璧。秦請易以十五城。相如奉璧入秦。而秦負約。 相如將璧先使舍人懷歸。以理折服秦王。完璧歸趙。相如在趙。秦終不能勝趙。</div>
				</li>
				<li>
					<div class="title">典故</div>
					<div class="content">戰國。藺相如。趙人也。時趙有良璧。秦請易以十五城。相如奉璧入秦。而秦負約。 相如將璧先使舍人懷歸。以理折服秦王。完璧歸趙。相如在趙。秦終不能勝趙。</div>
				</li>
				<li>
					<div class="title">典故</div>
					<div class="content">戰國。藺相如。趙人也。時趙有良璧。秦請易以十五城。相如奉璧入秦。而秦負約。 相如將璧先使舍人懷歸。以理折服秦王。完璧歸趙。相如在趙。秦終不能勝趙。</div>
				</li>
				<li>
					<div class="title">典故</div>
					<div class="content">戰國。藺相如。趙人也。時趙有良璧。秦請易以十五城。相如奉璧入秦。而秦負約。 相如將璧先使舍人懷歸。以理折服秦王。完璧歸趙。相如在趙。秦終不能勝趙。</div>
				</li>
				<li>
					<div class="title">典故</div>
					<div class="content">戰國。藺相如。趙人也。時趙有良璧。秦請易以十五城。相如奉璧入秦。而秦負約。 相如將璧先使舍人懷歸。以理折服秦王。完璧歸趙。相如在趙。秦終不能勝趙。</div>
				</li>
				<li>
					<div class="title">典故</div>
					<div class="content">戰國。藺相如。趙人也。時趙有良璧。秦請易以十五城。相如奉璧入秦。而秦負約。 相如將璧先使舍人懷歸。以理折服秦王。完璧歸趙。相如在趙。秦終不能勝趙。</div>
				</li>
				<li>
					<div class="title">典故</div>
					<div class="content">戰國。藺相如。趙人也。時趙有良璧。秦請易以十五城。相如奉璧入秦。而秦負約。 相如將璧先使舍人懷歸。以理折服秦王。完璧歸趙。相如在趙。秦終不能勝趙。</div>
				</li>
			</ul>
		</div>
	</section>
</body>

<?php include 'script.php'; ?>
</html>

<script>
	$(".poem-detailWrap").addClass("is-show")



	const scrollContainer = $(".poem-detail-innerWrap").get(0);

	scrollContainer.addEventListener("wheel", (e) => {
    e.preventDefault();
    scrollContainer.scrollLeft += e.deltaY;
	});
</script>