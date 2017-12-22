<p class="title">Npc List</p>
<?php
$attributes = array(
	'id' => 'search',
	'name' => 'search',
	'method' => 'get'
);
echo form_open('npc/',$attributes);
?>
Name:<input type="text" name="name" size="8">　
 <input type="submit" value="search">

 </form>