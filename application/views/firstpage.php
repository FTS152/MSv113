<!DOCTYPE html>
<head>
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
				<!-- <li class="active"><a href="#">Home</a></li> -->
				<li><a href="#npc">NPC一覽</a></li> <!-- npc/ -->
				<li><a href="#profession">職業資訊</a></li> <!-- profession/ -->
				<li><a href="#map">地圖檢視</a></li> <!-- map/ -->
				<li><a href="#monster">怪物圖鑑</a></li> <!-- monster/ -->
				<li><a href="#mission">任務查詢</a></li> <!-- mission/ -->
				<li><a href="#item">道具資料</a></li> <!-- item/ -->
		    </ul> 
		</div>
	</nav>
	
	<div class="container content" id="npc">
		<div class="row">
			<h3>NPC一覽</h3>
			<form id="npc_form">
				<input type="text" name="name" placeholder="name" value="流浪">
				<!-- <input type="text" name="id" placeholder="id" value="1"> -->
				<button class="submit">SUBMIT</button>
				<!-- <input type="submit" name="submit" class="submit action-button" value="Submit"/> -->
			</form>
			<table class="table table-striped" style="margin:0px 10%;width:80%">
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
		<div class="row">
			<h3>職業資訊</h3>
		</div>
	</div>
	<div class="container content" id="map">
		<div class="row">
			<h3>地圖檢視</h3>
		</div>
	</div>
	<div class="container content" id="monster">
		<div class="row">
			<h3>怪物圖鑑</h3>
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
<script src="././js/serializeObject.js"></script>
<script src="././js/index.js"></script>
</html>