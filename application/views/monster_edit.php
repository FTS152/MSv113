<form style="width:33.33%; margin-left:33.33%;margin-bottom: 50px">
	<div class="form-group">
		<input type="hidden" name="id" value=<?php echo $data[0]->{'id'}; ?> size="8">
	</div>
	<div class="form-group">
		<label for="name">怪獸名稱: </label>
		<input type="text" class="form-control" name="name" size="8" value=<?php echo $data[0]->{'name'} ?>>
	</div>
	<div class="form-group">
		<label for="level">等級: </label>
		<input type="text" class="form-control" name="level" size="8" value=<?php echo $data[0]->{'lv'} ?>>
	</div>
	<div class="form-group">
		<label for="hp">血量: </label>
		<input type="text" class="form-control" name="hp" size="8" value=<?php echo $data[0]->{'hp'} ?>>
	</div>
	<div class="form-group">
		<label for="mp">魔量: </label>
		<input type="text" class="form-control" name="mp" size="8" value=<?php echo $data[0]->{'mp'} ?>>
	</div>
	<div class="form-group">
		<label for="atk">攻擊: </label>
		<input type="text" class="form-control" name="atk" size="8" value=<?php echo $data[0]->{'atk'} ?>>
	</div>
	<div class="form-group">
		<label for="def">防守: </label>
		<input type="text" class="form-control" name="def" size="8" value=<?php echo $data[0]->{'def'} ?>>
	</div>
	<div class="form-group">
		<label for="exp">經驗值: </label>
		<input type="text" class="form-control" name="exp" size="8" value=<?php echo $data[0]->{'exp'} ?>>
	</div>
	<div class="form-group">
		<label for="hauntlist">Haunt List: </label>
		<textarea name="hauntlist" rows="5" cols="50" class="form-control"></textarea>
	</div>
	<div class="form-group">
		<label for="trophylist">Trophy List: </label>
		<textarea name="trophylist" rows="5" cols="50" class="form-control"></textarea>
	</div>
	<button type="submit" class="submit" style="margin-left:37.5%">SUBMIT</button>
</form>