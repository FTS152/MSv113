<p class="title">Login</p>
<?php
$attributes = array(
	'id' => 'login',
	'name' => 'login',
	'method' => 'get'
);
echo form_open('login/',$attributes);
?>
username:<input type="text" name="username" size="8">
password:<input type="text" name="password" size="8">　
 <input type="submit" value="login">

 </form>