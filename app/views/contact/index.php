<?php
/**
 * Sample layout
 */

use Core\Language;

?>



	<div class="page-header">
		<h1>Contact</h1>
	</div>
	<p>Neem contact met ons op wanneer nu nog vragen of opmerkingen heeft.</p>
	<?php
		if($_POST){
			$name = $_POST['name'];
			$email = $_POST['email'];
			$message = $_POST['message'];
			$form_captcha = $_POST['g-recaptcha-response'];

			if($name == "" || $email == "" || $message == "" || $form_captcha == 0){
				echo '<br><div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <strong>Er is een fout opgetreden.</strong><br>Niet alle velden zijn ingevuld of de captcha is niet ingevuld.</div>';
				?>
					<form id="contact_form" method="post">
						<div class="form-group">
						  <label for="name">Naam:</label>
						  <input type="text" class="form-control" id="name" placeholder="Naam.." name="name" value="<?php echo $name; ?>" required>
						</div>

						<div class="form-group">
						  <label for="email">Email address</label>
						  <input type="email" class="form-control" id="email" placeholder="Email.." name="email" value="<?php echo $email; ?>" required>
						</div>

						<div class="form-group">
						  <label for="message">Uw bericht:</label>
						  <textarea id="message" class="form-control" placeholder="Bericht.." name="message" required><?php echo $message; ?></textarea>
						</div>

						<div class="form-group">
						  <label for="message">Captcha <small>(Tegen bots)</small>:</label>
						  <div class="g-recaptcha" id="captcha" name="form_captcha" data-sitekey="6LdEohQTAAAAAJTVjYk_L35j7aQ_ctXuv0qCPEzj"></div>
						</div>
					  <button class="btn btn-primary" type="submit">Verzenden</button>
					</form>
				<?php 
			}else{	
				//Mail voor de gebruiker.			
				$mail = new \Helpers\PhpMailer\Mail();
				$mail->setFrom('noreply@zeilschooldewaai.nl');
				$mail->addAddress($email);
				$mail->subject('Contactformulier');
				$mail->body("<h1>Contactformulier</h1><p>U heeft het contactformulier ingevuld.</p>");
				$mail->send();

				//Mail voor de beheerder.
				$mail->setFrom('noreply@zeilschooldewaai.nl');
				$mail->addAddress('beheerder@zeilschooldewaai.nl');
				$mail->subject('Contactformulier '.$name);
				$mail->body("<h1>Contactformulier</h1><p>Het bericht:</p> ".$message."om terug te mailen mail ". $email);
				$mail->send();

				echo '<br><div class="alert alert-success alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <strong>Succesvol.</strong><br>Het contactformulier is succesvol verzonden, we nemen binnen 24 uur contact met u op.</div>';
			}
		}else{
			?>
				<form id="contact_form" method="post">
					<div class="form-group">
					  <label for="name">Naam:</label>
					  <input type="text" class="form-control" id="name" placeholder="Naam.." name="name" value="<?php echo $name; ?>" required>
					</div>

					<div class="form-group">
					  <label for="email">Email address</label>
					  <input type="email" class="form-control" id="email" placeholder="Email.." name="email" value="<?php echo $email; ?>" required>
					</div>

					<div class="form-group">
					  <label for="message">Uw bericht:</label>
					  <textarea id="message" class="form-control" placeholder="Bericht.." name="message" required><?php echo $message; ?></textarea>
					</div>

					<div class="form-group">
					  <label for="message">Captcha <small>(Tegen bots)</small>:</label>
					  <div class="g-recaptcha" id="captcha" name="form_captcha" data-sitekey="6LdEohQTAAAAAJTVjYk_L35j7aQ_ctXuv0qCPEzj"></div>
					</div>
				  <button class="btn btn-primary" type="submit">Verzenden</button>
				</form>
			<?php
		}
	?>
