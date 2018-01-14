<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<base href="<?php echo base_url();?>"/>
	<title>合太谷v113攻略圖鑑</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="js/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-image:url('background.jpg');background-size:100vw 100vh;">
	<div class="container" style="position:relative;top:60vh;left:0;">
		<div class="row col-sm-3"></div>
		<div class="row col-sm-8">
			<a href="npc/"><button class="submit_big">NPC一覽</button></a>
			<a href="profession/"><button class="submit_big">職業資訊</button></a>
			<a href="map/"><button class="submit_big">地圖檢視</button></a>
			<br><br>
			<a href="monster/"><button class="submit_big">怪物圖鑑</button></a>
			<a href="mission/"><button class="submit_big">任務查詢</button></a>
			<a href="item/"><button class="submit_big">道具資料</button></a>
		</div>
	</div>
</body>
</html>
<style>
.submit_big{
	font-family: Microsoft JhengHei;
	display: inline-block;
	margin-left: 25px;
	padding: 7px 7px;
	width:180px;
	font-size: 24px;
	font-weight: bold;
	cursor: pointer;
	text-align: center;
	text-decoration: none;
	outline: none;
	background-color: rgb(255, 137, 35);
	color: white;
	border: none;
	border-radius: 3px;
	box-shadow: 4px 3px rgb(244, 113, 0);
}
.submit_big:hover{
	background-color: rgb(255,223,70);
	color: rgb(255, 137, 35);
	box-shadow:  4px 3px rgb(242, 205, 29);
}
.submit_big:active {
	background-color: rgb(255, 137, 35);
	color: white;
	box-shadow: 4px 3px rgb(244, 113, 0);
	transform: translateY(2px);
}
</style>