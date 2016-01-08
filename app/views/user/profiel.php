<?php
/**
 * Sample layout
 */

use Core\Language;
if (\Helpers\Session::get('id')) {
	?>
		<div class="page-header">
		        <h1>Profiel</h1>
		        
		</div>
	<?php
	var_dump($data['klant']);
	echo '<br><br><br>';
	foreach($data['klant'] as $key => $value){
		echo $key[0];
	}


}
else{
	\Helpers\Url::redirect('home');
}