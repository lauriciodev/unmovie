<?php

require_once "models/User.php";

class UserDao implements UserDAOInterface{

private $connection;
private $url;



public function __construct(PDO $connection, $url){
$this->connection = $connection;
$this->connection = $url;
}


  public function buildUser($data){

  }

  public function create(User $user, $authUser = false){

  }

  public function update(User $user){

  }

  public function verifyToken($protected = false){

  }

  public function setTokenToSession($token, $redirect = true){

  }
  public function authenticateUser($email, $password){

  }
  public function findByEmail($email){

  }

  public function findByToken($token){

  }

  public function findById($id){

  }

  public function changePassword(User $user){
    
  }
}


?>