<div class="container content" id="item" style="display:block">
	<div class="row col-sm-2"></div>
	<div class="row col-sm-9">
		<form id="item_form">
		    <div class="form-group">
		    	<input type="text" name="name" class="form-control" placeholder="name" style="margin-bottom: 10px;">
				<input type="text" name="type" class="form-control" placeholder="type" style="display: inline-block;">
				<button class="submit">SUBMIT</button>
				<a href="item/add/"><div class="add">ADD</div></a>
			</div>
		</form>
		<div style="text-align: right">符合條件數量<span id="item_count" class="badge"><?php echo count($data) ?></span></div>
		<table class="table table-striped result">
		    <thead>
		      <tr>
		        <th>ID</th>
		        <th>道具名稱</th>
		        <th>道具種類</th>
		        <th>道具敘述</th>
		      </tr>
		    </thead>
		    <tbody>
		    	<?php foreach($data as $value): ?>
  					<?php 
  						echo "<tr><td style='width:10%'>".$value->{'id'}
  							."</td><td style='width:20%'>".$value->{'name'}
  							."</td><td style='width:20%'>".$value->{'type'}
  							."</td><td style='width:50%'>".$value->{'description'}
  							."</td></tr>";
  					?>
  				<?php endforeach; ?>
		    </tbody>
		  </table>
	</div>
</div>
