<p class="title">Monster Edit</p>
<?php
$attributes = array(
	'id' => 'edit',
	'name' => 'edit',
	'method' => 'GET'
);
echo form_open('monster/edit/',$attributes);
?>
<input type="hidden" name="id" value=<?php echo $_GET['id']; ?> size="8">
Name:<input type="text" name="name" size="8">
Level:<input type="text" name="level" size="8">
Hp:<input type="text" name="hp" size="8">
Mp:<input type="text" name="mp" size="8">
Atk:<input type="text" name="atk" size="8">
Def:<input type="text" name="def" size="8">
Exp:<input type="text" name="exp" size="8">
<div>
Haunt list :<textarea name="hauntlist" rows="15" cols="50"></textarea>
<div>
Trophy list :<textarea name="trophylist" rows="15" cols="50"></textarea>
 <input type="submit" value="edit">

 </form>