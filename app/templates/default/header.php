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
<!DOCTYPE html>
<html lang="<?php echo LANGUAGE_CODE; ?>">
<head>

	<!-- Site meta -->
	<meta charset="utf-8">
	<?php
	//hook for plugging in meta tags
	$hooks->run('meta');
	?>
	<title><?php echo $data['title'].' - '.SITETITLE; //SITETITLE defined in app/Core/Config.php ?></title>

	<!-- CSS -->
	<?php
	Assets::css(array(
		'//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css',
		'//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css',
		Url::templatePath() . 'css/header.css',
		Url::templatePath() . 'css/footer.css',

	));

	//hook for plugging in css
	$hooks->run('css');
	?>

</head>
<body>
<?php
//hook for running code after body tag
$hooks->run('afterBody');
?>


<!-- Header -->
<div id="HeaderImg">

</div>
<div id="navbar">
	<div class="container">
		<div id="NavItemsLeft">
			<div class="NavItem active">Home</div>
			<div class="NavItem">Boten</div>
			<div class="NavItem">Cursussen</div>
		</div>
	</div>
</div>
<div class="container">
