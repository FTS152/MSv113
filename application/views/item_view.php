 <div class="container">
	<div class="row col-sm-3"></div>
	<div class="row col-sm-6">	
		<div class="panel panel-default">
			<div class="panel-heading" style="font-size:20px;font-weight:bold;text-align:center"><?php echo $data[0]->{'name'} ?></div>
			<div class="panel-body" style="text-align: center">
				道具類型：<?php echo $data[0]->{'type'} ?> <br>
				道具敘述：<?php echo $data[0]->{'description'} ?> 
				<br><br>
				<a href=<?php echo "item/delete/?id=".$data[0]->{'id'} ?> ><div class="btn btn-danger">DELETE</div></a>
				<a href=<?php echo "item/edit/?id=".$data[0]->{'id'} ?> ><div class="btn btn-info">EDIT</div></a>
			</div>
		</div>
		<div class="panel panel-warning">
			<div class="panel-heading">任務獎勵</div>
  			<div class="panel-body">這裡會放會掉此道具的任務清單~ 按了可以連到任務</div>
		</div>
		<div class="panel panel-warning">
			<div class="panel-heading">掉落怪物</div>
  			<div class="panel-body">這裡會放會掉這個道具的怪獸清單~ 按了可以連到怪獸</div>
		</div>
	</div>
</div>