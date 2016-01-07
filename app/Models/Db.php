<?php
	
	namespace Models;

	use Core\Model;

	class Db extends Model {
		protected $db;

		public function __construct(){
			parent::__construct();
		}
	

		public function pushUsers()
		{
			return $this->db->select("SELECT * FROM klanten");
		}
	}