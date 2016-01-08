<?php
	
	namespace Models;

	use Core\Model;

	class Db extends Model {
		protected $db;

		public function __construct(){
			parent::__construct();
		}
	

		public function pushUsers($user)
		{
			$result = $this->db->select("SELECT wachtwoord FROM klanten WHERE email = '$user'");
			
			return $result;
		}
		public function insertUsers($geslacht, $voorletters, $voornaam, $tussenvoegsel, $achternaam, $adres, $postcode, $woonplaats, $telefoonnummer, $mobiel, $email, $niveau, $geboortedatum, $wachtwoord, $url)
		{
			$sql = "INSERT INTO `zeilschooldewaai`.`klanten` (`klant_id`, `geslacht`, `voorletters`, `voornaam`, `tussenvoegsel`, `achternaam`, `adres`, `postcode`, `woonplaats`, `telefoonnummer`, `mobiel`, `email`, `niveau`, `geboortedatum` , `wachtwoord`, `url`, `priviledged`) 
			VALUES (NULL, '$geslacht', '$voorletters', '$voornaam', '$tussenvoegsel', '$achternaam', '$adres', '$postcode', '$woonplaats', '$telefoonnummer', '$mobiel', '$email', '$niveau', '$geboortedatum' , '$wachtwoord', '$url', '0'); ";
			$this->db->raw($sql);
		}
	}