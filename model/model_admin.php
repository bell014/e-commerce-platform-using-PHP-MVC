<?php

require_once ("Model.php"); 

class admin extends Model{

  private $id_admin;
 
  private $email;
  private $password;
  protected  $table = 'admin';
  protected $primary = 'id_admin';
   
  public function __construct($id_admin = NULL,  $email = NULL,  $password = NULL) {
    if (!is_null($id_admin) && !is_null($email)  &&!is_null($password)  ) {
      $this->id_admin = $id_admin;
      $this->email = $email;
      $this->password = $password;
     }
  } 
public function getId_client() {
       return $this->id_admin;  
  }
  
 
   public function getEmail() {
       return $this->email;  
  }

   public function getPassword() {
       return $this->password;  
  }
}
?>