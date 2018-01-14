<div class="container">
	<div class="row col-sm-3"></div>
	<div class="row col-sm-6">	
		<div class="panel panel-default">
			<div class="panel-heading" style="font-size:20px;font-weight:bold;text-align:center">
				<?php echo $data[0]->{'name'} ?>
			</div>
			<div class="panel-body" style="text-align: center">
				幾轉職業：<?php echo $data[0]->{'stage'} ?><br>
				　母職業：<?php echo $data[0]->{'parent'} ?>
			</div>
		</div>
<<<<<<< HEAD
		<table class="table table-hover" style="text-align: center;">
		    <thead>
		      <tr>
		        <th style="width:20%;text-align: center;">技能名稱</th>
		        <th style="width:20%;text-align: center;">技能等級</th>
		        <th style="width:60%;text-align: center;">技能敘述</th>
		      </tr>
		    </thead>
		    <tbody>
		    	<?php foreach($data as $i => $value):?>
  					<?php
  						if($i > 0){
  							echo "<tr><td>".$value->{'name'}."</td>";
  							echo "<td>".$value->{"lv"}."</td>";
  							echo "<td style='text-align:left'>".$value->{'description'}."</td></tr>";
  						}
  						
  					?>
  				<?php endforeach; ?>
=======
		<table class="table table-hover">
		    <thead>
		      <tr>
		        <th>技能名稱</th>
		        <th>技能等級</th>
		        <th>技能敘述</th>
		      </tr>
		    </thead>
		    <tbody>
		      <tr>
		    	<td>技能一</td>
		    	<td>100</td>
		    	<td>敘述一</td>	
		      </tr>
>>>>>>> origin/master
		    </tbody>
		</table>
	</div>
</div>