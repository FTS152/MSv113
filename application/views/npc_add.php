<<<<<<< HEAD
 <form style="width:33.33%; margin-left:33.33%;margin-bottom: 50px">
	<div class="form-group">
		<label for="name">NPC名稱: </label>
		<input type="text" class="form-control" name="name" size="8">
	</div>
	<div class="form-group">
		<label for="description">NPC敘述: </label>
		<input type="text" class="form-control" name="description" size="8">
	</div>
	<div class="form-group">
		<label for="imgurl">圖片連結: </label>
		<input type="text" class="form-control" name="imgurl" size="8" value="http://s5.heyxus.com/maple/custom/npc/np_e013.gif">
	</div>
	<button class="submit" style="margin-left:37.5%">EDIT</button>
</form>
=======
 <p class="title">Monster Add</p>
<?php
$attributes = array(
	'id' => 'add',
	'name' => 'add',
	'method' => 'GET'
);
echo form_open('npc/add/',$attributes);
?>
Name:<input type="text" name="name" size="8">
Description:<input type="text" name="description">
ImgUrl:<input type="text" name="imgurl">
 <input type="submit" value="add">

 </form>
>>>>>>> origin/master
