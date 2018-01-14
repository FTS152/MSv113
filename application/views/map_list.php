<div class="container content" id="map" style="display:block">
	<div class="row col-sm-2"></div>
	<div class="row col-sm-9">
		<form id="map_form">
		    <div class="form-group">
		    	<input type="text" name="area" class="form-control" placeholder="area" style="margin-bottom: 10px;">
				<input type="text" name="name" class="form-control" placeholder="name" style="display: inline-block;">
				<button class="submit">SUBMIT</button>
				<a href="map/add/"><div class="add">ADD</div></a>
			</div>
		</form>
		<div style="text-align: right">符合條件數量<span id="map_count" class="badge"><?php echo count($data) ?></span></div>
		<table class="table table-striped result">
		    <thead>
		      <tr>
		        <th>ID</th>
		        <th>地圖名稱</th>
		        <th>所在區域</th>
		      </tr>
		    </thead>
		    <tbody>
		    	<?php foreach($data as $value): ?>
  					<?php 
  						echo "<tr><td style='width:10%'>".$value->{'id'}
  							."</td><td style='width:45%'>".$value->{'name'}
  							."</td><td style='width:45%'>".$value->{'area'}
  							."</td></tr>";
  					?>
  				<?php endforeach; ?>
		    </tbody>
		  </table>
	</div>
</div>