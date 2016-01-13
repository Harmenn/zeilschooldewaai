<?php
/**
 * Sample layout
 */

use Core\Language;
if (\Helpers\Session::get('id')) {
	?>
		<style>
		    .required{
		        color:red;
		        font-weight:bold;
		        font-size:20px;
		        position: absolute;
		        top: -5px;
		        margin-left:5px;
		    }
		</style>

		<div class="page-header">
		        <h1>Profiel van <?php foreach($data['klant'] as $key => $value){ echo $value->voornaam; }?></h1>
		        <p>Op deze pagina kan u uw gegevens aanpassen, gelieve alleen kloppende informatie plaatsen. </p>
		</div>

		<?php echo $data["melding"]; ?>

		<form class="form-horizontal" method="post">
			<?php

				$skip_data = ['klant_id', 'url', 'priviledged', 'wachtwoord'];

				foreach($data['klant'][0] as $key => $value){
					if(!in_array($key, $skip_data)){
						if($key == "geslacht"){
							?>
								<div class="form-group">
								  <label for="<?php echo $key; ?>" class="col-sm-2 control-label"><?php echo ucfirst($key); ?> <span class="required">*</span></label>
								  <div class="col-sm-10">
								    <select class="form-control" id="<?php echo $key; ?>" name="<?php echo $key; ?>">
								      <option value="man" <?php if($value == "man"){ echo "selected"; } ?> >Man</option>
								      <option value="vrouw" <?php if($value == "vrouw"){ echo "selected"; } ?>>Vrouw</option>
								    </select>
								  </div>
								</div>							
							<?php
						}else if($key == "niveau"){
							?>
								<div class="form-group">
								  <label for="<?php echo $key; ?>" class="col-sm-2 control-label"><?php echo ucfirst($key); ?> <span class="required">*</span></label>
								  <div class="col-sm-10">
								    <select class="form-control" id="<?php echo $key; ?>" name="<?php echo $key; ?>">
								        <option <?php if($value == "1"){ echo 'selected'; } ?> value="1">Beginner</option>
								        <option <?php if($value == "2"){ echo 'selected'; } ?>  value="2">Gevorderd</option>
								    </select>
								  </div>
								</div>							
							<?php
						}else if($key == "tussenvoegsel" || $key == "telefoonnummer" || $key == "mobiel"){
							?>
								<div class="form-group">
								  <label for="<?php echo $key; ?>" class="col-sm-2 control-label"><?php echo ucfirst($key); ?></label>
								  <div class="col-sm-10">
								    <input type="text" class="form-control" id="<?php echo $key; ?>" name="<?php echo $key; ?>" value="<?php echo $value; ?>">
								  </div>
								</div>
							<?php
						}else{
					?>
						<div class="form-group">
						  <label for="<?php echo $key; ?>" class="col-sm-2 control-label"><?php echo ucfirst($key); ?> <span class="required">*</span></label>
						  <div class="col-sm-10">
						    <input type="<?php if($key == "geboortedatum"){ echo 'date'; }else if($key == 'email'){ echo 'email'; }else{ echo 'text'; } ?>" class="form-control" id="<?php echo $key; ?>" name="<?php echo $key; ?>" value="<?php echo $value; ?>" required>
						  </div>
						</div>
					<?php
						}
					}
				}
			?>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <input class="btn btn-primary" type='submit' name='submit-gegevens' value='Verander gegevens'>
		    </div>
		  </div>
		</form>

		<br><hr><br>

		<form class="form-horizontal" method="post">
			
			<div class="form-group">
		    	<label for="wachtwoord" class="col-sm-2 control-label">Wachtwoord</label>
		    	<div class="col-sm-10">
		      		<input type="password" class="form-control" id="wachtwoord" name="wachtwoord" placeholder="Wachtwoord..">
		    	</div>
		  	</div>

		  	<div class="form-group">
		      	<label for="wachtwoord1" class="col-sm-2 control-label">Wachtwoord herhalen</label>
		      	<div class="col-sm-10">
		        	<input type="password" class="form-control" id="wachtwoord1" name="wachtwoord1" placeholder="Herhaal wachtwoord..">
		      	</div>
		    </div>

			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <input class="btn btn-primary" type='submit' name='submit-wachtwoord' value='Verander wachtwoord'>
			    </div>
			  </div>
		</form>		
	<?php
}
else{
	\Helpers\Url::redirect('home');
}