<div class="container">
	<div class="row col-sm-3"></div>
	<div class="row col-sm-6">	
		<div class="panel panel-default">
			<div class="panel-heading" style="font-size:20px;font-weight:bold;text-align:center"><?php echo $data[0]->{'name'} ?></div>
			<div class="panel-body" style="text-align: center">
				<img src= <?php 
					if( $data[0]->{'imgurl'} == NULL) echo "http://s6.heyxus.com/maple/custom/npc/np_e014.gif";
					else echo $data[0]->{'imgurl'}; 
				?> style="width:100px;height:auto"><br><br>
				NPC敘述：<?php echo $data[0]->{'description'}; ?> <br><br>
				<a href=<?php echo "npc/delete/?id=".$data[0]->{'id'} ?> ><div class="btn btn-danger">DELETE</div></a>
				<a href=<?php echo "npc/edit/?id=".$data[0]->{'id'} ?> ><div class="btn btn-info">EDIT</div></a>
			</div>
		</div>
		<div class="panel panel-warning">
			<div class="panel-heading">觸發任務</div>
  			<div class="panel-body">這裡會放可以觸發的任務~ 按了可以連到任務</div>
		</div>
		<div class="panel panel-warning">
			<div class="panel-heading">出現地點</div>
  			<div class="panel-body">這裡會放出現的地點~ 按了可以連到地圖</div>
		</div>
	</div>
</div>