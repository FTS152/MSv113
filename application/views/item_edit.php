<form style="width:33.33%; margin-left:33.33%;margin-bottom: 50px">
	<div class="form-group">
		<input type="hidden" name="id" value=<?php echo $data[0]->{'id'}; ?> size="8">
	</div>
	<div class="form-group">
		<label for="name">道具名稱: </label>
		<input type="text" class="form-control" name="name" size="8" value=<?php echo $data[0]->{'name'}; ?>>
	</div>
	<div class="form-group">
		<label for="type">道具種類: </label>
		<input type="text" class="form-control" name="type" size="8" value=<?php echo $data[0]->{'type'}; ?>>
	</div>
	<div class="form-group">
		<label for="description">道具敘述: </label>
		<textarea name="description" rows="5" cols="50" class="form-control"><?php echo $data[0]->{'description'}; ?></textarea>
	</div>
	<div class="form-group">
		<label for="rewardlist">任務獎勵: </label>
		<textarea name="rewardlist" rows="5" cols="50" class="form-control"><?php foreach($data as $value): ?><?php if(property_exists($value, 'mission_id'))echo $value->{'name'}."\n";?><?php endforeach; ?></textarea>
	</div>
	<div class="form-group">
		<label for="trophylist">掉落怪物: </label>
		<textarea name="trophylist" rows="5" cols="50" class="form-control"><?php foreach($data as $value): ?><?php if(property_exists($value, 'monster_id'))echo $value->{'name'}."\n";?><?php endforeach; ?></textarea>
	</div>
	<button class="submit" style="margin-left:37.5%">SUBMIT</button>
</form>