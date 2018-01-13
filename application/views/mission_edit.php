<form style="width:33.33%; margin-left:33.33%;margin-bottom: 50px">
	<div class="form-group">
		<input type="hidden" name="id" value=<?php echo $data[0]->{'id'}; ?> size="8">
	</div>
	<div class="form-group">
		<label for="name">任務名稱: </label>
		<input type="text" class="form-control" name="name" size="8" value=<?php echo $data[0]->{'name'}; ?>>
	</div>
	<div class="form-group">
		<label for="description">任務敘述: </label>
		<textarea name="description" rows="3" cols="50" class="form-control"><?php echo $data[0]->{'description'}; ?></textarea>
	</div>
	<div class="form-group">
		<label for="lowest_lv">最低等級: </label>
		<input type="text" class="form-control" name="lowest_lv" size="8" value=<?php echo $data[0]->{'lowest_lv'}; ?>>
	</div>
	<div class="form-group">
		<label for="highest_lv">最高等級: </label>
		<input type="text" class="form-control" name="highest_lv" size="8" value=<?php echo $data[0]->{'highest_lv'}; ?>>
	</div>
	<div class="form-group">
		<label for="npc_name">接取任務NPC名稱: </label>
		<input type="text" class="form-control" name="npc_name" size="8" value=<?php echo $data[1]->{'name'}; ?>>
	</div>
	<div class="form-group">
		<label for="rewardlist">Reward List: </label>
		<textarea name="hauntlist" rows="5" cols="50" class="form-control"></textarea>
	</div>
	<button class="submit" style="margin-left:37.5%">SUBMIT</button>
</form>