<div class="container content" id="mission" style="display: block">
	<div class="row col-sm-2"></div>
	<div class="row col-sm-9">
		<form id="mission_form">
		    <div class="form-group">
		    	<input type="text" name="level" class="form-control" placeholder="level" style="margin-bottom: 10px;">
				<input type="text" name="name" class="form-control" placeholder="name" style="display: inline-block;">
				<button class="submit">SUBMIT</button>
				<a href="mission/add/"><div class="add">ADD</div></a>
			</div>
		</form>
		<div style="text-align: right">符合條件數量<span id="mission_count" class="badge"><?php echo count($data) ?></span></div>
		<table class="table table-striped result">
		    <thead>
		      <tr>
		        <th>ID</th>
		        <th>任務名稱</th>
		        <th>任務敘述</th>
		        <th>最低等級</th>
		        <th>最高等級</th>
		      </tr>
		    </thead>
		    <tbody>
		    	<?php foreach($data as $value): ?>
  					<?php 
  						echo "<tr><td style='width:10%'>".$value->{'id'}
  							."</td><td style='width:25%'>".$value->{'name'}
  							."</td><td style='width:40%'>".$value->{'description'}
  							."</td><td style='width:10%'>".$value->{'lowest_lv'}
  							."</td><td style='width:10%'>".$value->{'highest_lv'}
  							."</td></tr>";
  					?>
  				<?php endforeach; ?>
		    </tbody>
		  </table>
	</div>
</div>