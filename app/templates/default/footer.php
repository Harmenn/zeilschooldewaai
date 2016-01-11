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
				<span class="title"><i class="fa fa-pencil"></i> Heeft u zich al ingeschreven voor een cursus? <a href="cursussen#inschrijven"><button class="button">Schrijf je nu in!</button></a></span>
			</div>
		</div>
		<div class="container">
			<div class="col-md-4">
				<h2>In het kort</h2><hr>
				<p>Zeilschool de Waai is een zeilschool waar voornamelijk cursussen worden gehouden. U kan zich gemakkelijk aanmelden voor een cursus en ook welk niveau. Aan elk niveau wordt automatisch een boot toegevoegd. Hopelijk tot snel.</p>
			</div>
			<div class="col-md-4">
				<img src="/zeilschooldewaai/app/templates/default/img/logo.png" id="Logo" /><br>
				&copy; <?php echo date('Y'); ?> Zeilschool de Waai.<br>
				Alle rechten voorbehouden.
			</div>
			<div class="col-md-4">
				<h2>Contact opnemen</h2><hr>
				<p>Heeft u vragen of opmerkingen? Dat horen wij graag en lossen het ook graag op. Neem contact op via het contactformulier op de contact pagina, <a href="contact">klik hier.</a></p>
			</div>
		</div>


</div>





<!-- JS -->
<?php
Assets::js(array(
	Url::templatePath() . 'js/jquery.js',
	'https://www.google.com/recaptcha/api.js',
	'//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js',
	Url::templatePath() . 'js/script.js',
	Url::templatePath() . 'js/validation.js'

));

//hook for plugging in javascript
$hooks->run('js');

//hook for plugging in code into the footer
$hooks->run('footer');
?>

</body>
</html>
