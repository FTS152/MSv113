<p class="title">Map List</p>
<?php
$attributes = array(
	'id' => 'search',
	'name' => 'search',
	'method' => 'get'
);
echo form_open('map/',$attributes);
?>
Name:<input type="text" name="name" size="8">
Area:<input type="text" name="area" size="8">　
 <input type="submit" value="search">

 </form>