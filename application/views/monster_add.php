<p class="title">Monster Add</p>
<?php
$attributes = array(
	'id' => 'add',
	'name' => 'add',
	'method' => 'GET'
);
echo form_open('monster/add/',$attributes);
?>
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
 <input type="submit" value="add">

 </form>