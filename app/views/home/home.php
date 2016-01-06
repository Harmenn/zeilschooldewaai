<?php
/**
 * Sample layout
 */

use Core\Language;

?>

<style>

.sidebar_image{
	max-width:100%;
	height:auto;
	display:block;
	border-radius:4px;
	border:3px solid #1976d2;
}

.sidebar{
	padding-top:50px;
	padding-bottom:50px;
}


.sidebar_list{
	list-style-type: none;
	padding-left:10px;
	font-size:17px;
}

.sidebar_list i{
	color:#1976d2;
}

hr{
	margin-top:0px;
	margin-bottom:10px;
}

.home_map{
	max-width:100%;
	width:400px;
	height:250px;
	display:block;
}

</style>





<div class="col-md-8">
	<div class="page-header">
		<h1>Home pagina</h1>
	</div>
	<p>
	Welkom op de homepagina van zeilschool de Waai. Op deze website kan u zich gemakkelijk registreren en inschrijven voor een cursus. Omdat er verschillende niveaus zijn hebben wij ook diverse cursussen.<br/><br>
	Krijg meer informatie op andere pagina's, navigeer door de website via het menu hierboven. Wij wensen jullie veel plezier en hopelijk tot snel bij de Zeilschool de Waai.
	</p>
	<iframe class="home_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d77090.91150382684!2d5.372949701799224!3d52.856762982829274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c895a2b353cd9b%3A0x29a949f02a712d45!2s8721+Warns!5e0!3m2!1snl!2snl!4v1452083014828" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<div class="col-md-4 sidebar">
	<img src="/zeilschooldewaai/app/templates/default/img/home_image.jpg" class="sidebar_image" /><br>
	<h3>Waarom zeilschool de Waai?</h3>
	<hr>
	<ul class="sidebar_list">
		<li><i class="fa fa-check"></i> Goed te vinden</li>
		<li><i class="fa fa-check"></i> Cursusen</li>
		<li><i class="fa fa-check"></i> Verschillende niveaus</li>
		<li><i class="fa fa-check"></i> Betaalbare prijs</li>
	</ul>
</div>
