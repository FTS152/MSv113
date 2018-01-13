<form style="width:33.33%; margin-left:33.33%;margin-bottom: 50px">
	<div class="form-group">
		<input type="hidden" name="id" value=<?php echo $data[0]->{'id'}; ?> size="8">
	</div>
	<div class="form-group">
		<label for="name">地圖名稱: </label>
		<input type="text" class="form-control" name="name" size="8" value=<?php echo $data[0]->{'name'}; ?>>
	</div>
	<div class="form-group">
		<label for="area">所屬區域: </label>
		<input type="text" class="form-control" name="area" size="8" value=<?php echo $data[0]->{'area'}; ?>>
	</div>
	<div class="form-group">
		<label for="hauntlist">Haunt List: </label>
		<textarea name="hauntlist" rows="5" cols="50" class="form-control"></textarea>
	</div>
	<div class="form-group">
		<label for="trophylist">Trophy List: </label>
		<textarea name="trophylist" rows="5" cols="50" class="form-control"></textarea>
	</div>
	<button class="submit" style="margin-left:37.5%">EDIT</button>
</form>