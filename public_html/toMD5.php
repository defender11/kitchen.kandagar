<?php 
	if ($_SERVER['REQUEST_METHOD'] == 'post') {
		$pass = trim(strip_tags($_POST['passw']);
		$pass = md5($pass);
	}

?>
<form action="" method="POST">
	<input type="text" name='passw'>
	<input type="submit" placeholder="Enter">
</form>

<div class="pass">
	<h2><?=$pass;?></h2>
</div>