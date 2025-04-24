<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body id="news">
	<?php include 'topmenu.php'; ?>

	<div class="news-deco-top">
		<img src="images/news-deco-top.svg" class="show-for-xlarge">
		<!-- <img src="images/news-deco-top-tablet.svg" class="hide-for-large show-for-medium">
		<img src="images/news-deco-top-mobile.svg" class="hide-for-medium"> -->
		<img src="images/news-deco-top-tablet.svg" class="hide-for-xlarge">

	</div>

	<div class="news-head" data-r='{"opacity": 0, "y": 60}'>
		<img src="images/news-head.svg" class="show-for-large">
		<img src="images/news-head-mobile.svg" class="hide-for-large">
	</div>

	<div class="newsWrap grid-x" data-r='{"opacity": 0, "y": 60, "delay": 0.4}'>
		<div class="news-cat-container cell large-shrink">
			<ul class="news-catList">
				<li class="current"><a class="flex-container align-middle" href="news.php">
					<div class="icon"></div>
					<div class="title">全部</div>
				</a></li>
				<li><a class="flex-container align-middle" href="news.php">
					<div class="icon"></div>
					<div class="title">廣天公告</div>
				</a></li>
				<li><a class="flex-container align-middle" href="news.php">
					<div class="icon"></div>
					<div class="title">節慶活動</div>
				</a></li>
			</ul>
		</div>

		<ul class="newsList cell large-auto">
			<li><a class="grid-x" href="news_detail.php">
				<div class="repeat-area cell large-shrink">
					<div class="item"><img src="images/news-repeat.svg"></div>
					<div class="item"><img src="images/news-repeat.svg"></div>
					<div class="item"><img src="images/news-repeat.svg"></div>
					<div class="item"><img src="images/news-repeat.svg"></div>

					<div class="item">
						<div class="pic-area">
							<div class="borderbox"><img src="images/news-border.svg"></div>
							<div class="pic"><img src="images/news-1.jpg"></div>
						</div>
					</div>
				</div>

				<div class="article-area cell large-auto">
					<div class="date-area grid-x align-middle">
						<div class="date cell large-shrink">2020.07.06</div>
						<div class="cat cell large-shrink">廣天公告</div>
					</div>

					<div class="title">黑虎鎮，弭平天下不平之氣</div>
				</div>

				<div class="arrow cell large-shrink align-self-middle show-for-large"><img src="images/signup-arrow.svg"></div>
			</a></li>
			<li><a class="grid-x" href="news_detail.php">
				<div class="repeat-area cell large-shrink">
					<div class="item"><img src="images/news-repeat.svg"></div>
					<div class="item"><img src="images/news-repeat.svg"></div>
					<div class="item"><img src="images/news-repeat.svg"></div>
					<div class="item"><img src="images/news-repeat.svg"></div>

					<div class="item">
						<div class="pic-area">
							<div class="borderbox"><img src="images/news-border.svg"></div>
							<div class="pic"><img src="images/news-1.jpg"></div>
						</div>
					</div>
				</div>

				<div class="article-area cell large-auto">
					<div class="date-area grid-x align-middle">
						<div class="date cell large-shrink">2020.07.06</div>
						<div class="cat cell large-shrink">廣天公告</div>
					</div>

					<div class="title">黑虎鎮，弭平天下不平之氣</div>
				</div>

				<div class="arrow cell large-shrink align-self-middle show-for-large"><img src="images/signup-arrow.svg"></div>
			</a></li>
		</ul>
	</div>

	<div class="news-pager">
		<a href="javascript:;" class="prev"><img src="images/news-pager-prev.svg"></a>
		<a href="javascript:;" class="current"></a>
		<a href="javascript:;"></a>
		<a href="javascript:;"></a>
		<a href="javascript:;"></a>
		<a href="javascript:;" class="next"><img src="images/news-pager-next.svg"></a>
	</div>

	<?php include 'footer.php'; ?>
</body>

<?php include 'script.php'; ?>
</html>