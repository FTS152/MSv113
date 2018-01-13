<!DOCTYPE html>
<head>
	<base href="<?php echo base_url();?>"/>
	<meta charset="utf-8">
	<title>合太谷v113攻略圖鑑</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="js/style.css">
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
		<div class="row col-sm-2"></div>
		<div class="row col-sm-9">
			<form id="npc_form">
				<!-- <div class="form-group">
					<select class="form-control" id="npc-loc">
						<option>請選擇地區</option>
					</select>
				</div> -->
			    <div class="form-group">
					<input type="text" name="name" class="form-control" placeholder="name" value="流浪" style="display: inline-block;">
					<button class="submit">SUBMIT</button>
					<a href="npc/add/"><div class="add">ADD</div></a>
				</div>
			</form>
			<div style="text-align: right">符合條件數量<span id="npc_count" class="badge"></span></div>
			<table class="table table-striped result">
			    <thead>
			      <tr>
			        <th>ID</th>
			        <th>NPC名稱</th>
			        <th>NPC敘述</th>
			        <th>圖片</th>
			      </tr>
			    </thead>
			    <tbody></tbody>
			  </table>
		</div>
	</div>

	<div class="container content" id="profession">
		<div class="row col-sm-2"></div>
		<div class="row col-sm-9">
			<div style="text-align: right">符合條件數量<span id="profession_count" class="badge"></span></div>
			<table class="table table-striped result">
			    <thead>
			      <tr>
			        <th>ID</th>
			        <th>職業名稱</th>
			        <th>幾轉職業</th>
			        <th>母職業</th>
			      </tr>
			    </thead>
			    <tbody></tbody>
			  </table>
		</div>
	</div>

	<div class="container content" id="map">
		<div class="row col-sm-2"></div>
		<div class="row col-sm-9">
			<form id="map_form">
			    <div class="form-group">
			    	<input type="text" name="area" class="form-control" placeholder="area" value="楓">
					<input type="text" name="name" class="form-control" placeholder="name" style="display: inline-block;">
					<button class="submit">SUBMIT</button>
					<a href="map/add/"><div class="add">ADD</div></a>
				</div>
			</form>
			<div style="text-align: right">符合條件數量<span id="map_count" class="badge"></span></div>
			<table class="table table-striped result">
			    <thead>
			      <tr>
			        <th>ID</th>
			        <th>地圖名稱</th>
			        <th>所在區域</th>
			      </tr>
			    </thead>
			    <tbody></tbody>
			  </table>
		</div>
	</div>

	<div class="container content" id="monster">
		<div class="row col-sm-2"></div>
		<div class="row col-sm-9">
			<form id="monster_form">
			    <div class="form-group">
					<input type="text" name="name" class="form-control" placeholder="name" value="綠" style="display: inline-block;">
					<button class="submit">SUBMIT</button>
					<a href="monster/add/"><div class="add">ADD</div></a>
				</div>
			</form>
			<div style="text-align: right">符合條件數量<span id="monster_count" class="badge"></span></div>
			<table class="table table-striped result">
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
			    <tbody></tbody>
			  </table>
		</div>
	</div>

	<div class="container content" id="mission">
		<div class="row col-sm-2"></div>
		<div class="row col-sm-9">
			<form id="mission_form">
			    <div class="form-group">
			    	<input type="text" name="level" class="form-control" placeholder="level" value="10">
					<input type="text" name="name" class="form-control" placeholder="name" style="display: inline-block;">
					<button class="submit">SUBMIT</button>
					<a href="mission/add/"><div class="add">ADD</div></a>
				</div>
			</form>
			<div style="text-align: right">符合條件數量<span id="mission_count" class="badge"></span></div>
			<table class="table table-striped result">
			    <thead>
			      <tr>
			        <th>ID</th>
			        <th>任務名稱</th>
			        <th>任務敘述</th>
			        <th>最低等級</th>
			        <th>最高等級</th>
			        <th>接任務NPC</th>
			      </tr>
			    </thead>
			    <tbody></tbody>
			  </table>
		</div>
	</div>

	<div class="container content" id="item">
		<div class="row col-sm-2"></div>
		<div class="row col-sm-9">
			<form id="item_form">
			    <div class="form-group">
			    	<input type="text" name="name" class="form-control" placeholder="name" value="黑">
					<input type="text" name="type" class="form-control" placeholder="type" style="display: inline-block;">
					<button class="submit">SUBMIT</button>
					<a href="item/add/"><div class="add">ADD</div></a>
				</div>
			</form>
			<div style="text-align: right">符合條件數量<span id="item_count" class="badge"></span></div>
			<table class="table table-striped result">
			    <thead>
			      <tr>
			        <th>ID</th>
			        <th>道具名稱</th>
			        <th>道具種類</th>
			        <th>道具敘述</th>
			      </tr>
			    </thead>
			    <tbody></tbody>
			  </table>
		</div>
	</div>

</body>
</html>
<script src="js/serializeObject.js"></script>
<<<<<<< HEAD
<script src="js/index.js"></script>
=======
<script src="js/index.js"></script>
>>>>>>> origin/master
