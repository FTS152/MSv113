<div class="container">
	<div class="row col-sm-3"></div>
	<div class="row col-sm-6">	
		<div class="panel panel-default">
			<div class="panel-heading" style="font-size:20px;font-weight:bold;text-align:center"><?php echo $data[0]->{'name'};?></div>
			<div class="panel-body" style="text-align: center">
				<?php echo $data[0]->{'description'}; ?>
				<br><br>
				<a href=<?php echo "mission/delete/?id=".$data[0]->{'id'} ?> ><div class="btn btn-danger">DELETE</div></a>
				<a href=<?php echo "mission/edit/?id=".$data[0]->{'id'} ?> ><div class="btn btn-info">EDIT</div></a>
				<table class="table table-bordered" style="text-align:center;font-size:14px;margin-top:25px">
					<thead><tr>
						<th>最低等級</th>
				        <th>最高等級</th>
				        <th>接任務NPC</th>
					</tr></thead>
					<tbody><tr>
						<th><?php echo $data[0]->{'lowest_lv'} ?></th>
						<th><?php echo $data[0]->{'highest_lv'} ?></th>
						<th><?php $id = $data[1]->{'id'};		 
 								  $name = $data[1]->{'name'};		
 							 	  echo "<a href='npc/view?id=".$id."'>".$name."</a><br>";?></th>					</tr></tbody>
				</table>
			</div>
		</div>
		<div class="panel panel-warning">
			<div class="panel-heading">獎勵道具</div>
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