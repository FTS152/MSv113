<p class="title">Mission List</p>
<?php
$attributes = array(
	'id' => 'search',
	'name' => 'search',
	'method' => 'get'
);
echo form_open('mission/',$attributes);
?>
Name:<input type="text" name="name" size="8">
Level:<input type="text" name="level" size="8">　
 <input type="submit" value="search">

 </form>