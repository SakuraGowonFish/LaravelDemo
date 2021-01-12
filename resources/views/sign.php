<!DOCTYPE HTML>
<!--
	Solarize by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<head>
	<title>期末報告-買賣股票</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
	<?php require_once "js/jquery.min.php"?> 
	<?php require_once "js/jquery.dropotron.min.php"?> 
	<?php require_once "js/skel.min.php"?> 
	<?php require_once "js/skel-layers.min.php"?> 
	<?php require_once "js/init.php"?> 
	<!-- <noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="/css/table.css" />
		</noscript> -->
	<style>
		#table {
			font-family: Arial, Helvetica, sans-serif;
			border-collapse: collapse;
			table-layout: fixed;
			height: 500px;
			width: 700px;
			float: left 100px;
		}

		#tabletd,
		#table th {
			border: 1px solid #ddd;
			padding: 8px;
		}

		#table tr:nth-child(even) {
			background-color: #268ab198;
		}

		#table tr:hover {
			background-color: #ddd;
		}

		#table th {
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: left;
			background-color: #4c6daf;
			color: white;
		}

		thead th {
			position: sticky;
			top: 0;
			text-align: center;
		}

		th:first-child {
			z-index: 2;
		}

		#stock {
			height: 600px;
			width: 45%;
			margin-left: 100px;
			overflow: auto;
			float: left;
		}

		.change img {
			position: absolute;
			/* CSS3淡出淡入效果,1秒 */
			-webkit-transition: opacity 1s ease-in-out;
			-moz-transition: opacity 1s ease-in-out;
			-o-transition: opacity 1s ease-in-out;
			transition: opacity 1s ease-in-out;
		}


		.change :hover {
			content: url("images/fish01.png");
		}

		#right {
			width: 40%;
			float: right;
		}
		.helper:hover span {display:none}
		.helper:hover:before {content:"徐國榮"}
	</style>
	<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
</head>

<body class="homepage">

	<!-- Header Wrapper -->
	<div class="wrapper style1">

		<!-- Header -->
		<div id="header">
			<div class="container">

				<!-- Logo -->
				<h1><a href="#" id="logo">Solarize</a></h1>

				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="#findstock">stock</a></li>
						<li><a href="#byline">member</a></li>
					</ul>
				</nav>

			</div>
		</div>

		<!-- Banner -->
		<div id="banner">
			<section class="container">
				<p>股票買賣 投資理財<br>毫無準備 宛如賭博</p>
			</section>
		</div>
	</div>
	<div class="wrapper style2" id="findstock" style="height: 800px;">
		<!-- 插入股票 -->
		<div id="stock" class="stock">
			<table id="table"> </table>
		
		</div>
		<?php require_once "js\stock.php"?>  
		<div id="right">
			<!-- 登入畫面 -->

			<form action="UserSave.php" method="POST" >
				<label >輸入帳號：</label>
				<input type="text" name="user_id" id="user_id" class="form-control" placeholder="請輸入帳號">
				<label >輸入密碼：</label>
                <input type="password" name="user_passwd" id="user_passwd" class="form-control" required="required" placeholder="請輸入密碼">
                <label >輸入名稱：</label>
                <input type="text" name="user_name" id="user_name"  class="form-control" required="required" placeholder="請輸入名稱">
                <label >輸入本金：</label>
                <input type="number" name="user_money" id="user_money" class="form-control" required="required" placeholder="請輸入本金" min="10000" max="10000000">
                <br>(申請會員最高設置一佰萬本金，沒有送S級火槍兵)
				<input type="submit"  value="儲存">
			</form>
		</div>


	</div>



	<!-- Section Three -->
	<div class="wrapper style4">

		<section class="container">
			<header class="major">
			<span id = "byline"class="byline" style="font-size: 50px;">股票模擬買賣 讓你試著入門 並且學會放棄</span>
			</header>
		</section>
	</div>

	<!-- Team -->
	<div class="wrapper style5">
		<section id="team" class="container">
			<header class="major">
			<h2>SakuraGoWonFish股份有限公司股東及製作團隊</h2>
			</header>
			<div class="row">
				<div class="3u">
					<a class="image"><img src="images/kiki.jpg" alt=""></a>
					<h3>許云瀞</h3>
					<p>負責項目:透過強大的GOOGLE搜尋系統搜尋並且製作圖片IMAGE</p>
				</div>
				<div class="3u">
					<a class="image"><img src="images/tracy.jpg" alt=""></a>
					<h3>郭宇晴</h3>
					<p>負責項目:Html,CSS</p>
				</div>
				<div class="3u">
					<a class="image"><img src="images/fish.png" onmouseover="this.src='images/fish01.png'"
							onmouseout="this.src='images/fish.png'"></a>
					<h3>羅盛軒</h3>
					<p>負責項目:Html,CSS,PHP,Javascript,SQL</p>
				</div>
				<div class="3u">
					<a class="image"><img src="images/jeckson.png" alt=""></a>
					<h3 class="helper"><span>鄭品榕<br></span></h3>
					<p>致敬<br>協助後端開發人員</p>
				</div>
			</div>
		</section>
	</div>

	<!-- Footer -->
	<div id="footer">
		<section class="container">
			<header class="major">
				<span class="byline">聯絡人:黑弦<br>聯絡信箱:stocktry@gmail.com<br>連絡電話:0912-345-678</span>
			</header>
			<hr />
		</section>
	</div>
</body>

</html>
