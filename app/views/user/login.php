<?php
/**
 * Sample layout
 */

use Core\Language;
?>
	
	<div class="page-header">
		<h1>Login</h1>
	</div>
	<form action="submit" method="post">

	<p>E-mail<br /><input type='text' name='username'></p>
	<p>Wachtwoord<br /><input type='password' name='password'></p>
	<p><input type='submit' name='submit' value='Login'></p>

	</form>
	<?php
	print_r($data);
	?>