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
						<option>請選擇地區</option>
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
</html>
<script src="js/serializeObject.js"></script>
<script src="js/index.js"></script>
<link rel="stylesheet" href="js/style.css">
<script>

</script>