<div class="container">
	<div class="row col-sm-3"></div>
	<div class="row col-sm-6">	
		<div class="panel panel-default">
			<div class="panel-heading" style="font-size:20px;font-weight:bold;text-align:center"><?php echo $data[0]->{'name'} ?></div>
			<div class="panel-body" style="text-align: center">
				<img src= <?php 
					if( $data[0]->{'imgurl'} == NULL) echo "http://s6.heyxus.com/maple/custom/monster/large/mo000001.gif";
					else echo $data[0]->{'imgurl'}; 
				?> style="width:100px;height:auto"><br><br>
				<a href=<?php echo "monster/delete/?id=".$data[0]->{'id'} ?> ><div class="btn btn-danger">DELETE</div></a>
				<a href=<?php echo "monster/edit/?id=".$data[0]->{'id'} ?> ><div class="btn btn-info">EDIT</div></a>
				<table class="table table-bordered" style="text-align:center;font-size:14px;margin-top:25px">
					<thead><tr>
						<th>等級</th>
				        <th>血量</th>
				        <th>魔量</th>
				        <th>攻擊</th>
				        <th>防守</th>
				        <th>經驗值</th>
					</tr></thead>
					<tbody><tr>
						<th><?php echo $data[0]->{'lv'} ?></th>
						<th><?php echo $data[0]->{'hp'} ?></th>
						<th><?php echo $data[0]->{'mp'} ?></th>
						<th><?php echo $data[0]->{'atk'} ?></th>
						<th><?php echo $data[0]->{'def'} ?></th>
						<th><?php echo $data[0]->{'exp'} ?></th>
					</tr></tbody>
				</table>
			</div>
		</div>
<<<<<<< HEAD
		
		<div class="panel panel-warning">
			<div class="panel-heading">出沒地點</div>
  			<div class="panel-body">
  				<?php foreach($data as $value): ?>
  					<?php 
  						if(property_exists($value, 'map_id')){
  							$id = $value->{'map_id'};
  							$name = $value->{'name'};
  							echo "<a href='map/view?id=".$id."'>".$name."</a><br>";
  						}
  							
  					?>
  				<?php endforeach; ?>
  			</div>
		</div>
		<div class="panel panel-warning">
			<div class="panel-heading">掉落道具</div>
  			<div class="panel-body">
  				<?php foreach($data as $value): ?>
  					<?php 
  						if(property_exists($value, 'item_id')){
  							$id = $value->{'item_id'};
  							$name = $value->{'name'};
  							echo "<a href='item/view?id=".$id."'>".$name."</a><br>";
  						}
  							
  					?>
  				<?php endforeach; ?>
  			</div>
		</div>
	</div>
</div>
=======
		<div class="panel panel-warning">
			<div class="panel-heading">出沒地點</div>
  			<div class="panel-body">這裡會放常出沒的地點~ 按了可以連到地圖</div>
		</div>
		<div class="panel panel-warning">
			<div class="panel-heading">掉落道具</div>
  			<div class="panel-body">這裡會放怪獸會掉落的道具~ 按了可以連到道具的介紹頁</div>
		</div>
	</div>
</div>
>>>>>>> origin/master
