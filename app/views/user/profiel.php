<?php
/**
 * Sample layout
 */

use Core\Language;
if (\Helpers\Session::get('id')) {
	?>
		<div class="page-header">
		        <h1>Profiel van <?php 	foreach($data['klant'] as $key => $value){ echo $value->voornaam; }?></h1>
		</div>

		<form class="form-horizontal" method="post">
			<?php

				$skip_data = ['klant_id', 'url', 'priviledged', 'wachtwoord'];

				foreach($data['klant'][0] as $key => $value){
					if(!in_array($key, $skip_data)){
						if($key == "geslacht"){
							?>
								<div class="form-group">
								  <label for="<?php echo $key; ?>" class="col-sm-2 control-label"><?php echo ucfirst($key); ?></label>
								  <div class="col-sm-10">
								    <select class="form-control" id="<?php echo $key; ?>">
								      <option name="man" <?php if($value == "man"){ echo "selected"; } ?> >Man</option>
								      <option name="vrouw" <?php if($value == "vrouw"){ echo "selected"; } ?>>Vrouw</option>
								    </select>
								  </div>
								</div>							
							<?php
						}else if($key == "niveau"){
							?>
								<div class="form-group">
								  <label for="<?php echo $key; ?>" class="col-sm-2 control-label"><?php echo ucfirst($key); ?></label>
								  <div class="col-sm-10">
								    <select class="form-control" id="<?php echo $key; ?>">
								      <option name="1" <?php if($value == "1"){ echo "selected"; } ?> >1</option>
								      <option name="2" <?php if($value == "2"){ echo "selected"; } ?>>2</option>
								      <option name="3" <?php if($value == "3"){ echo "selected"; } ?>>3</option>
								    </select>
								  </div>
								</div>							
							<?php
						}else{
					?>
						<div class="form-group">
						  <label for="<?php echo $key; ?>" class="col-sm-2 control-label"><?php echo ucfirst($key); ?></label>
						  <div class="col-sm-10">
						    <input type="text" class="form-control" id="<?php echo $key; ?>" name="<?php echo $key; ?>" value="<?php echo $value; ?>">
						  </div>
						</div>
					<?php
						}
					}else if($key == "wachtwoord"){
						?>
							<br><hr><br>
							<div class="form-group">
						    	<label for="<?php echo $key; ?>" class="col-sm-2 control-label"><?php echo ucfirst($key); ?></label>
						    	<div class="col-sm-10">
						      		<input type="password" class="form-control" id="<?php echo $key; ?>" placeholder="Wachtwoord..">
						    	</div>
						  	</div>

						  	<div class="form-group">
						      	<label for="<?php echo $key; ?>" class="col-sm-2 control-label"><?php echo ucfirst($key); ?></label>
						      	<div class="col-sm-10">
						        	<input type="password" class="form-control" id="<?php echo $key; ?>" placeholder="Herhaal wachtwoord..">
						      	</div>
						    </div>
						<?php
					}
				}
			?>


		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <input class="btn btn-primary" type='submit' name='submit' value='Verander gegevens'>
		    </div>
		  </div>
		</form>
	<?php
}
else{
	\Helpers\Url::redirect('home');
}