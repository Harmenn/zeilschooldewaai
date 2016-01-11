<?php
	
	namespace Models;

	use Core\Model;

	class Db extends Model {
		protected $db;

		public function __construct(){
			parent::__construct();
		}

		public function getUser($id){
			$result = $this->db->select("SELECT * FROM klanten WHERE klant_id = '$id'");
			
			return $result;
		}

		public function checkEmail($email){
			$result = $this->db->select("SELECT email FROM klanten WHERE email = '$email'");
			
			return $result;
		}

		public function pushUsers($user)
		{
			$result = $this->db->select("SELECT wachtwoord, klant_id, priviledged FROM klanten WHERE email = '$user'");
			
			return $result;
		}
		public function insertUsers($geslacht, $voorletters, $voornaam, $tussenvoegsel, $achternaam, $adres, $postcode, $woonplaats, $telefoonnummer, $mobiel, $email, $niveau, $geboortedatum, $wachtwoord, $url)
		{
			$sql = "INSERT INTO `zeilschooldewaai`.`klanten` (`klant_id`, `geslacht`, `voorletters`, `voornaam`, `tussenvoegsel`, `achternaam`, `adres`, `postcode`, `woonplaats`, `telefoonnummer`, `mobiel`, `email`, `geboortedatum`, `niveau`, `wachtwoord`, `url`, `priviledged`) 
			VALUES (NULL, '$voorletters', '$geslacht', '$voornaam', '$tussenvoegsels', '$achternaam', '$adres', '$postcode', '$woonplaats', 'telefoonnummer', '$mobiel', '$email', '$geboortedatum', '$niveau', '$wachtwoord', '$url', '0'); ";
			$this->db->raw($sql);
		}

		public function validateUser($hash)
		{
			$result = $this->db->select("SELECT klant_id FROM klanten WHERE url = '$hash'");

			return $result;
		}

		public function givePrivilage($id)
		{
			$result = $this->db->raw("UPDATE klanten SET priviledged=1, url=NULL WHERE klant_id='$id';");
		}

		public function getAllCourses()
		{
			$result = $this->db->select("SELECT * FROM cursussen");
			return $result;
		}
	}