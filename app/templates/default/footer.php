<?php
/**
 * Sample layout
 */

use Helpers\Assets;
use Helpers\Url;
use Helpers\Hooks;

//initialise hooks
$hooks = Hooks::get();
?>

</div>


<div id="footer">
		
		<div class="top-footer">
			<div class="container">
				<span class="title">Heeft u zich al ingeschreven voor een cursus? Schrijf u nu in!</span>
			</div>
		</div>
		<div class="container">
			<div class="col-md-4">
				<h2>Over het bedrijf</h2>
			</div>
			<div class="col-md-4">
				<h2>Links</h2>
			</div>
			<div class="col-md-4">
				<h2>Adres gegevens</h2>
			</div>
		</div>


</div>





<!-- JS -->
<?php
Assets::js(array(
	Url::templatePath() . 'js/jquery.js',
	'//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'
));

//hook for plugging in javascript
$hooks->run('js');

//hook for plugging in code into the footer
$hooks->run('footer');
?>

</body>
</html>
