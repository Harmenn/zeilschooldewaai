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
    <div class="page-header">
            <h1>Login</h1>
    </div>
        <form action="" method="post" class="col-xs-3">
        <?php echo $data["error"]; ?>
            <p>E-mail<br /><input class="form-control" type='text' name='username'></p>
            <p>Wachtwoord<br /><input class="form-control" type='password' name='password'></p>
            <p style="float: right"><input class="btn btn-info" type='submit' name='submit' value='Login'></p>
        </form>

	<?php }