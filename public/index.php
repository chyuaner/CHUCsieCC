<?php
$json = fread(fopen('../status.json', 'r'), 1024);
$status = json_decode($json, true);
?>
<!doctype html>
<html lang="zh-tw">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">

	<title>中華大學資訊工程系 - 計算機中心</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="中華大學, 資訊工程系, 資工系, 計算機中心, 系計中">
	
	<link rel="stylesheet" href="css/html5.css">
	<link rel="stylesheet" href="css/cc.css">

	<script src="js/modernizr-2.6.2.min.js"></script>
</head>
<body>
	<header id="top">
		<h1>中華大學資工系計中</h1>
		<span class="slogan">CHU CSIE - Computer Center</span>
	</header>
	<nav>
		<a href="#status">伺服器狀態</a>
		<a href="#services">服務</a>
		<a href="#opening">開放時間</a>
		<a href="#contact">聯絡</a>
	</nav>
	
	<!--[if lt IE 9]>
	<div id="browser" class="main_block static">
		<div class="block browser">
			<div class="title">
				<h2>選擇更好的瀏覽器</h2>
				<span>- Choose a Better Browser</span>
			</div>
			<div class="content">
				<h3>你的瀏覽器已過時，請更新你的瀏覽器</h3>
				<a href="http://www.google.com/intl/zh-TW/chrome/browser/" target="_blank">
					<img src="img/chrome-logo.png" alt="Chrome">
					<br />
					Chrome
				</a>
				<a href="http://mozilla.com.tw/firefox/" target="_blank">
					<img src="img/firefox-logo.png" alt="Firefox">
					<br />
					Firefox
				</a>
				<a href="http://www.opera.com/zh-tw/computer/windows" target="_blank">
					<img src="img/opera-logo.png" alt="Opera">
					<br />
					Opera
				</a>
				<a href="http://windows.microsoft.com/zh-tw/internet-explorer/download-ie" target="_blank">
					<img src="img/ie9-logo.png" alt="IE 9+">
					<br />
					IE 9+
				</a>
			</div>
		</div>
	</div>
	<![endif]-->

	<div id="status" class="main_block static">
		<div class="block status">
			<div class="title">
				<h2>伺服器狀態</h2>
				<span>- Server Status</span>
			</div>
			<div class="content">
				<div class="dns server">
					<h3>DNS</h3>
					<div class="<?=$status[20] ? "up" : "down"?>"></div>
				</div>
				<div class="ftp server">
					<h3>FTP</h3>
					<div class="<?=$status[11] ? "up" : "down"?>"></div>
				</div>
				<div class="web server">
					<h3>Web</h3>
					<div class="<?=$status[8] ? "up" : "down"?>"></div>
				</div>
				<div class="date">上次更新 <?=$status['date']?></div>
			</div>
		</div>
	</div>

	<div id="services" class="main_block static">
		<div class="block services">
			<div class="title">
				<h2>服務</h2>
				<span>- Services</span>
			</div>
			<div class="content">
				<div class="menu">
					<div class="mirror item active">
						<h3>檔案鏡像站</h3>
						<p>已開放</p>
					</div>
					<div class="personal item">
						<h3>個人網頁空間</h3>
						<p>未開放</p>
					</div>
					<div class="dns item">
						<h3>伺服器域名申請</h3>
						<p>未開放</p>
					</div>
					<div class="classroom item">
						<h3>系計中電腦教室</h3>
						<p>已開放</p>
					</div>
				</div>
				<div class="info">
					<div class="mirror">
						<h3>支援通訊協定</h3>
						<span><a href="ftp://ftp.csie.chu.edu.tw" target="_blank">FTP</a></span>
						<span><a href="http://ftp.csie.chu.edu.tw" target="_blank">HTTP</a></span>
						<hr>
						<h3>Linux安裝光碟 / 套件庫</h3>
						<a href="ftp://ftp.csie.chu.edu.tw/ArchLinux" target="_blank">
							<img src="img/archlinux-logo.png" alt="ArchLinux">
							<br />
							ArchLinux
						</a>
						<a href="ftp://ftp.csie.chu.edu.tw/CentOS" target="_blank">
							<img src="img/centos-logo.png" alt="CentOS">
							<br />
							CentOS
						</a>
						<a href="ftp://ftp.csie.chu.edu.tw/Ubuntu" target="_blank">
							<img src="img/ubuntu-logo.png" alt="Ubuntu">
							<br />
							Ubuntu
						</a>
					</div>
					<div class="personal">
						<h3>網頁空間說明</h3>
						<span>建置中</span>
					</div>
					<div class="dns">
						<h3>相關辦法</h3>
						<span>建置中</span>
					</div>
					<div class="classroom">
						<h3>地點</h3>
						<span>中華大學工程一館 E106</span>
						<hr>
						<h3>使用說明</h3>
						<ol>
							<li>入內請脫鞋</li>
							<li>使用電腦前請在櫃台登記</li>
							<li>教室內禁止飲食</li>
							<li>請勿任意進入機房</li>
							<li>如需列印請自備紙張</li>
							<li>如有問題請詢問值班人員</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="opening" class="main_block static">
		<div class="block opening">
			<div class="title">
				<h2>開放時間</h2>
				<span>- Opening hours</span>
			</div>
			<div class="content">
				<h3>101年度 第2學期</h3>
				<table>
					<thead>
						<tr>
							<td></td><td>Mon</td><td>Tue</td><td>Wed</td><td>Thu</td><td>Fri</td><td>Sat</td><td>Sun</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<h4>1</h4>
								<span>08:30~09:20</span>
							</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
						</tr>
						<tr>
							<td>
								<h4>2</h4>
								<span>09:25~10:15</span>
							</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
						</tr>
						<tr>
							<td>
								<h4>3</h4>
								<span>10:25~11:15</span>
							</td><td></td><td>O</td><td>O</td><td></td><td>O</td><td></td><td></td>
						</tr>
						<tr>
							<td>
								<h4>4</h4>
								<span>11:20~12:10</span>
							</td><td></td><td>O</td><td>O</td><td></td><td>O</td><td></td><td></td>
						</tr>
						<tr>
							<td>
								<h4>5</h4>
								<span>13:10~14:00</span>
							</td><td>O</td><td></td><td>O</td><td>O</td><td>O</td><td></td><td></td>
						</tr>
						<tr>
							<td>
								<h4>6</h4>
								<span>14:10~15:00</span>
							</td><td>O</td><td></td><td>O</td><td>O</td><td>O</td><td></td><td></td>
						</tr>
						<tr>
							<td>
								<h4>7</h4>
								<span>15:10~16:00</span>
							</td><td>O</td><td>O</td><td>O</td><td>O</td><td>O</td><td></td><td></td>
						</tr>
						<tr>
							<td>
								<h4>8</h4>
								<span>16:10~17:00</span>
							</td><td>O</td><td>O</td><td>O</td><td>O</td><td>O</td><td></td><td></td>
						</tr>
						<tr>
							<td>
								<h4>9</h4>
								<span>17:05~17:55</span>
							</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
						</tr>
						<tr>
							<td>
								<h4>A</h4>
								<span>18:00~18:50</span>
							</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
						</tr>
						<tr>
							<td>
								<h4>B</h4>
								<span>18:55~19:45</span>
							</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
						</tr>
						<tr>
							<td>
								<h4>C</h4>
								<span>19:55~20:45</span>
							</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
						</tr>
						<tr>
							<td>
								<h4>D</h4>
								<span>20:50~21:40</span>
							</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<div id="contact" class="main_block static">
		<div class="block contact">
			<div class="title">
				<h2>聯絡</h2>
				<span>- Contact</span>
			</div>
			<div class="content">
				<h3>伺服器管理</h3>
				<p>
					E113 | 網際網路計算實驗室
				</p>
				<br />
				<h3>電腦教室管理</h3>
				<p>
					洪培皓
				</p>

			</div>
		</div>
	</div>

	<footer>
		<div class="top"></div>
		<div class="info">
			Copyright (c) 2013 中華大學資訊工程系 計算機中心
			<br />
			網頁設計: 刀疤
		</div>
	</footer>

	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/cc.js"></script>
</body>
</html>
