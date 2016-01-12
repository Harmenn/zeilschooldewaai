<?php
/**
 * Sample layout
 */

use Core\Language;
if (\Helpers\Session::get('rechten')==3) 
{
	echo "SuperAdmin";
}
elseif(\Helpers\Session::get('rechten')==2)
{
?>


<br />


<?php }
else
{
	echo "geen rechten";
}