<<<<<<< HEAD
<div class="container content" id="npc" style="display:block">
	<div class="row col-sm-2"></div>
	<div class="row col-sm-9">
		<form id="npc_form">
		    <div class="form-group">
				<input type="text" name="name" class="form-control" placeholder="name" style="display: inline-block;">
				<button class="submit">SUBMIT</button>
				<a href="npc/add/"><div class="add">ADD</div></a>
			</div>
		</form>
		<div style="text-align: right">符合條件數量<span id="npc_count" class="badge"><?php echo count($data) ?></span></div>
		<table class="table table-striped result">
		    <thead>
		      <tr>
		        <th>ID</th>
		        <th>NPC名稱</th>
		        <th>NPC敘述</th>
		        <th>圖片</th>
		      </tr>
		    </thead>
		    <tbody>
		    	<?php foreach($data as $value): ?>
  					<?php 
  						echo "<tr><td style='width:10%'>".$value->{'id'}
  							."</td><td style='width:25%'>".$value->{'name'}
  							."</td><td style='width:50%'>".$value->{'description'}
  							."</td><td style='width:15%'><img src='".$value->{'imgurl'}
  							."'></td></tr>";
  					?>
  				<?php endforeach; ?>
		    </tbody>
		  </table>
	</div>
</div>
=======
>>>>>>> origin/master
