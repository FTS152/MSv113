<div class="container content" id="profession" style="display:block">
	<div class="row col-sm-2"></div>
	<div class="row col-sm-9">
		<div style="text-align: right">符合條件數量<span id="profession_count" class="badge"><?php echo count($data) ?></span></div>
		<table class="table table-striped result">
		    <thead>
		      <tr>
		        <th>ID</th>
		        <th>職業名稱</th>
		        <th>幾轉職業</th>
		        <th>母職業</th>
		      </tr>
		    </thead>
		    <tbody>
		    	<?php foreach($data as $value): ?>
  					<?php 
  						echo "<tr><td style='width:10%'>".$value->{'id'}
  							."</td><td style='width:30%'>".$value->{'name'}
  							."</td><td style='width:30%'>".$value->{'stage'}
  							."</td><td style-'width:30%'>".$value->{'parent'}
  							."</td></tr>";
  					?>
  				<?php endforeach; ?>
		    </tbody>
		  </table>
	</div>
</div>