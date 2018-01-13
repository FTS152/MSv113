 <form style="width:33.33%; margin-left:33.33%;margin-bottom: 50px">
 	<div class="form-group">
		<input type="hidden" name="id" value=<?php echo $data[0]->{'id'}; ?> size="8">
	</div>
	<div class="form-group">
		<label for="name">NPC名稱: </label>
		<input type="text" class="form-control" name="name" size="8" value=<?php echo $data[0]->{'name'}; ?>>
	</div>
	<div class="form-group">
		<label for="description">NPC敘述: </label>
		<input type="text" class="form-control" name="description" size="8" value=<?php echo $data[0]->{'description'}; ?>>
	</div>
	<div class="form-group">
		<label for="imgurl">圖片連結: </label>
		<input type="text" class="form-control" name="imgurl" size="8" value=<?php echo $data[0]->{'imgurl'}; ?>>
	</div>
	<button class="submit" style="margin-left:37.5%">EDIT</button>
</form>