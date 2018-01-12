<!DOCTYPE html>
<head>
	<base href="<?php echo base_url();?>"/>
	<meta charset="utf-8">
	<title>合太谷v113攻略圖鑑</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse">
  		<div class="container-fluid">
    		<div class="navbar-header">
      			<a class="navbar-brand" href="#">合太谷v113攻略圖鑑</a>
   	 		</div>
    		<ul class="nav navbar-nav">
				<li id="li1"><a href="#npc">NPC一覽</a></li>
				<li id="li2"><a href="#profession">職業資訊</a></li>
				<li id="li3"><a href="#map">地圖檢視</a></li>
				<li id="li4"><a href="#monster">怪物圖鑑</a></li>
				<li id="li5"><a href="#mission">任務查詢</a></li>
				<li id="li6"><a href="#item">道具資料</a></li>
		    </ul> 
		    <ul class="nav navbar-nav navbar-right">
		    	<li><a href="login"><span class="glyphicon glyphicon-user"></span>LOG IN</a></li>
		    </ul>
		</div>
	</nav>
	
	<div class="container content" id="npc">
		<div class="row col-sm-3"></div>
		<div class="row col-sm-6">
			<form id="npc_form">
				<div class="form-group">
					<select class="form-control" id="npc-loc">
<<<<<<< HEAD
						<option>請選擇地區</option>
=======
						<option>{{data binding to location list}}</option>
>>>>>>> origin/master
					</select>
				</div>
			    <div class="form-group">
					<input type="text" name="name" class="form-control" placeholder="name" value="流浪" style="display: inline-block;">
					<button class="submit">SUBMIT</button>
				</div>
			</form>
			<div style="text-align: right">符合條件數量：<span></span></div>
			<table class="table table-striped">
			    <thead>
			      <tr>
			        <th>ID</th>
			        <th>Name</th>
			        <th>Description</th>
			        <th>Img</th>
			      </tr>
			    </thead>
			    <tbody>
			      <!--<tr>
			        <td>0</td>
			        <td>測試</td>
			        <td>測試用NPC</td>
			        <td><img src="http://s1.heyxus.com/maple/custom/npc/np_a001.gif"></td>
			      </tr>-->
			    </tbody>
			  </table>
		</div>
	</div>

	<div class="container content" id="profession">
		<div class="row col-sm-3"></div>
		<div class="row col-sm-6">
<<<<<<< HEAD
=======
			<form id="profession_form">
			    <div class="form-group">
					<input type="text" name="name" class="form-control" placeholder="name" value="初心者" style="display: inline-block;">
					<button class="submit">SUBMIT</button>
				</div>
			</form>
>>>>>>> origin/master
			<div style="text-align: right">符合條件數量：<span></span></div>
			<table class="table table-striped">
			    <thead>
			      <tr>
			        <th>ID</th>
			        <th>職業名稱</th>
			        <th>幾轉職業</th>
			        <th>母職業</th>
			      </tr>
			    </thead>
			    <tbody>
			      <!--<tr>
			        <td>0</td>
			        <td>測試</td>
			        <td>測試用NPC</td>
			        <td><img src="http://s1.heyxus.com/maple/custom/npc/np_a001.gif"></td>
			      </tr>-->
			    </tbody>
			  </table>
		</div>
	</div>

	<div class="container content" id="map">
		<div class="row">
			<h3>地圖檢視</h3>
		</div>
	</div>

	<div class="container content" id="monster">
		<div class="row col-sm-3"></div>
		<div class="row col-sm-8">
			<form id="monster_form">
			    <div class="form-group">
					<input type="text" name="name" class="form-control" placeholder="name" value="綠" style="display: inline-block;">
					<button class="submit">SUBMIT</button>
				</div>
			</form>
			<div style="text-align: right">符合條件數量：<span></span></div>
			<table class="table table-striped">
			    <thead>
			      <tr>
			        <th>ID</th>
			        <th>怪獸名稱</th>
			        <th>等級</th>
			        <th>血量</th>
			        <th>魔量</th>
			        <th>攻擊</th>
			        <th>防守</th>
			        <th>經驗值</th>
			        <th>圖片</th>
			      </tr>
			    </thead>
			    <tbody>
			   <!--    <tr>
			        <td style="width:7.5%">1</td>
			        <td style="width:15%">木箱子</td>
			        <td style="width:10%">0</td>
			        <td style="width:10%">4</td>
			        <td style="width:10%">0</td>
			        <td style="width:10%">0</td>
			        <td style="width:10%">0</td>
			        <td style="width:12.5%">0</td>
			        <td style="width:15%"><img src="http:\/\/s6.heyxus.com\/maple\/custom\/monster\/large\/mo000001.gif"></td>
			      </tr> -->
			      <!-- "id":"1","name":"木箱子","lv":"0","hp":"4","mp":"0","atk":"0","def":"0","exp":"0","imgurl":"http:\/\/s6.heyxus.com\/maple\/custom\/monster\/large\/mo000001.gif" -->
			    </tbody>
			  </table>
		</div>
	</div>

	<div class="container content" id="mission">
		<div class="row">
			<h3>任務查詢</h3>
		</div>
	</div>
	<div class="container content" id="item">
		<div class="row">
			<h3>道具資料</h3>
		</div>
	</div>
</body>
<<<<<<< HEAD
</html>
<script src="js/serializeObject.js"></script>
<script src="js/index.js"></script>
<link rel="stylesheet" href="js/style.css">
<script>

</script>
=======
<script src="././js/serializeObject.js"></script>
<script src="././js/index.js"></script>
</html>
<style>
.navbar{
	background: rgb(255, 137, 35);
	border: none;
	color: white !important;
}
.navbar-inverse .navbar-brand, .navbar-inverse .navbar-nav>li>a{
	color: white;
}
.navbar-nav>li:hover{
	background: rgb(255,223,70);
}
.submit{
	display: inline-block;
	margin-left: 25px;
	padding: 5px 7px;
	width:100px;
	font-size: 14px;
	cursor: pointer;
	text-align: center;
	text-decoration: none;
	outline: none;
	background-color: rgb(65, 157, 155);
	color: white;
	border: none;
	border-radius: 3px;
	box-shadow: 4px 3px rgb(175,171,171);
}
.submit:hover{
	background-color: rgb(180, 224, 223);
	color: rgb(65, 157, 155);
	box-shadow:  4px 3px rgb(65, 157, 155);
}
.submit:active {
	background-color: rgb(65, 157, 155);
	color: white;
	box-shadow: 4px 3px rgb(175,171,171);
	transform: translateY(2px);
}
tbody tr:nth-child(2n+1) {
	background: rgb(225, 225, 225);
}
tbody tr:nth-child(2n+2){
	background: rgb(240, 240, 240);
}
thead, thead>tr>th{
	text-align: center;
	text-transform: uppercase;
	background: rgb(165, 165, 165);
	color:white;
	border:2px solid white !important;
}
tbody>tr>td:first-child{
	width:10%;
	text-align: center;
	vertical-align: middle;
	border-width: 2px;
	border-color: white;
	border-style: none solid solid none;
}
tbody>tr>td:nth-child(2){
	width:25%;
	text-align: center;
	vertical-align: middle;
	border-width: 2px;
	border-color: white;
	border-style: none solid solid none;
}
tbody>tr>td:nth-child(3){
	width:50%;
	text-align: center;
	vertical-align: middle;
	border-width: 2px;
	border-color: white;
	border-style: none solid solid none;
}
tbody>tr>td:nth-child(4){
	width:15%;
	text-align: center;
	vertical-align: middle;
	border-width: 2px;
	border-color: white;
	border-style: none none solid none;
}
tbody>tr>td img{
	width:50px;
	height:65px;
}
.form-group{
	margin-left:20%;
}
.form-group input, .form-group select{
	width: 50%;
}
</style>
>>>>>>> origin/master
