<div class="container content" id="monster" style="display: block">
	<div class="row col-sm-2"></div>
	<div class="row col-sm-9">
		<form id="monster_form">
		    <div class="form-group">
				<input type="text" name="name" class="form-control" placeholder="name" style="display: inline-block;">
				<button class="submit">SUBMIT</button>
				<a href="monster/add/"><div class="add">ADD</div></a>
			</div>
		</form>
		<div style="text-align: right">符合條件數量<span id="monster_count" class="badge"><?php echo count($data) ?></span></div>
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
		    <tbody>
		    	<?php foreach($data as $value): ?>
  					<?php 
  						echo "<tr><td style='width:7.5%'>".$value->{'id'}
  							."</td><td style='width:15%'>".$value->{'name'}
  							."</td><td style='width:10%'>".$value->{'lv'}
  							."</td><td style='width:10%'>".$value->{'hp'}
  							."</td><td style='width:10%'>".$value->{'mp'}
  							."</td><td style='width:10%'>".$value->{'atk'}
  							."</td><td style='width:10%'>".$value->{'def'}
  							."</td><td style='width:12.5%'>".$value->{'exp'}
  							."</td><td style='width:15%'><img src='".$value->{'imgurl'}
  							."' style='width:50px;height:50px'></td></tr>";
  						?>
  				<?php endforeach; ?>
		    </tbody>
		  </table>
	</div>
</div>