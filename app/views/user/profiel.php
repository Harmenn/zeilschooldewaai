<?php
/**
 * Sample layout
 */

use Core\Language;
if (\Helpers\Session::get('username')) {
	?>
		<div class="page-header">
		        <h1>Profiel</h1>
		</div>
	<?php
}
else{
	\Helpers\Url::redirect('home');
}