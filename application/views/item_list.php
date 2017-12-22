<p class="title">Item List</p>
<?php
$attributes = array(
	'id' => 'search',
	'name' => 'search',
	'method' => 'get'
);
echo form_open('item/',$attributes);
?>
Name:<input type="text" name="name" size="8">
Type:<input type="text" name="type" size="8">
 <input type="submit" value="search">

 </form>