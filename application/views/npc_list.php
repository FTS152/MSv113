<p class="title">Monster List</p>
<?php
$attributes = array(
	'id' => 'search',
	'name' => 'search',
	'method' => 'get'
);
echo form_open('monster/',$attributes);
?>
Name:<input type="text" name="name" size="8">　
 <input type="submit" value="search">

 </form>