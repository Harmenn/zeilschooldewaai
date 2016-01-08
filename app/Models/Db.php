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
			$result = $this->db->select("SELECT wachtwoord, klant_id FROM klanten WHERE email = '$user'");
			
			return $result;
		}
		public function insertUsers($voorletters, $geslacht, $voornaam, $tussenvoegsels, $achternaam, $adres, $postcode, $woonplaats, $telefoonnummer, $mobiel, $email, $geboortedatum, $niveau, $wachtwoord, $url)
		{
			$sql = "INSERT INTO `zeilschooldewaai`.`klanten` (`klant_id`, `geslacht`, `voorletters`, `voornaam`, `tussenvoegsel`, `achternaam`, `adres`, `postcode`, `woonplaats`, `telefoonnummer`, `mobiel`, `email`, `geboortedatum`, `niveau`, `wachtwoord`, `url`, `priviledged`) 
			VALUES (NULL, '$voorletters', '$geslacht', '$voornaam', '$tussenvoegsels', '$achternaam', '$adres', '$postcode', '$woonplaats', 'telefoonnummer', '$mobiel', '$email', '$geboortedatum', '$niveau', '$wachtwoord', '$url', '0'); ";
			$this->db->raw($sql);
		}
	}