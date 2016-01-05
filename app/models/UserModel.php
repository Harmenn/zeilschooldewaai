<?php
namespace App\Models;

use Lib\Model;

class UserModel extends Model {

    public function getUserById($id) {
        $sql = "SELECT *, CONCAT_WS(' ',firstName,middleName,lastName) AS fullName FROM users WHERE id = :id LIMIT 1";
        $query = $this->db->prepare($sql);
        $query->execute(array(":id" => $id));
        return $query->fetch(\PDO::FETCH_ASSOC);
    }

    public function getAllUsers() {
        $sql = "SELECT *, CONCAT_WS(' ',firstName,middleName,lastName) AS fullName FROM users";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function updateUser($user) {
        $sql = "UPDATE users firstName=:firstName,middleName=:middleName,lastName=:lastName,role=:role,email=:email,password=:password WHERE id=:id";
        $query = $this->db->prepare($sql);
        $query->execute(array(
            "id" => $user["id"],
            "firstName" => $user["firstName"],
            "middleName" => $user["middleName"],
            "lastName" => $user["lastName"],
            "role" => $user["role"],
            "email" => $user["email"],
            "password" => $user["password"]
        ));
    }

    public function createUser($user) {
        $sql = "INSERT INTO users SET id=:id,firstName=:firstName,middleName=:middleName,lastName=:lastName,role=:role,email=:email,password=:password";
        $query = $this->db->prepare($sql);
        $query->execute(array(
            "id" => $user["id"],
            "firstName" => $user["firstName"],
            "middleName" => $user["middleName"],
            "lastName" => $user["lastName"],
            "role" => $user["role"],
            "email" => $user["email"],
            "password" => $user["password"]
        ));
    }

}