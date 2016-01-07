<?php
/**
 * Sample layout
 */

use Core\Language;
if (\Helpers\Session::get('username')) {
	?>
	<div class="page-header">
		<h1>Log uit</h1>
	</div>
		<form action="" method="post">
			<input class="btn btn-info" type="submit" name="logout" value="log uit">
		</form>
	<?php
}
else{
?>
<<<<<<< HEAD
<div class="page-header">
		<h1>Login</h1>
	</div>
	<form action="" method="post">
	<div class="LUC DEZE IS VOOR JOU"><?php echo $data["error"]; ?></div>
	<p>E-mail<br /><input type='text' name='username'></p>
	<p>Wachtwoord<br /><input type='password' name='password'></p>
	<p><input class="btn btn-info" type='submit' name='submit' value='Login'></p>
	</form>
=======
    <div class="page-header">
            <h1>Login</h1>
    </div>
        <form action="" method="post" class="col-xs-3">
            <p>E-mail<br /><input class="form-control" type='text' name='username'></p>
            <p>Wachtwoord<br /><input class="form-control" type='password' name='password'></p>
            <p style="float: right"><input class="btn btn-info" type='submit' name='submit' value='Login'></p>
        </form>
>>>>>>> origin/master

	<?php }