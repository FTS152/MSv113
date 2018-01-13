<div class="container">
	<div class="row col-sm-3"></div>
	<div class="row col-sm-6">	
		<div class="panel panel-default">
			<div class="panel-heading" style="font-size:20px;font-weight:bold;text-align:center"><?php echo $data[0]->{'name'} ?></div>
			<div class="panel-body" style="text-align: center">
				所屬區域：<?php echo $data[0]->{'area'} ?><br><br>
				<a href=<?php echo "map/delete/?id=".$data[0]->{'id'} ?> ><div class="btn btn-danger">DELETE</div></a>
				<a href=<?php echo "map/edit/?id=".$data[0]->{'id'} ?> ><div class="btn btn-info">EDIT</div></a>
			</div>
		</div>
		<div class="panel panel-warning">
			<div class="panel-heading">NPC列表</div>
  			<div class="panel-body">這裡會放NPC名字~ 按了可以連到NPC的介紹頁</div>
		</div>
		<div class="panel panel-warning">
			<div class="panel-heading">怪獸列表</div>
  			<div class="panel-body">這裡會放怪獸名字~ 按了可以連到怪獸的介紹頁</div>
		</div>
	</div>
</div>