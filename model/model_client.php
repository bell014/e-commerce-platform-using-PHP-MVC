<?php

require_once ("Model.php"); 

class Client extends Model{

  private $id_client;
  private $nom;
  private $prenom;
  private $email;
  private $adresse;
  private $tel;
  private $password;
  protected  $table = 'clients';
  protected $primary = 'email';
   
  public function __construct($id_client = NULL, $nom = NULL, $prenom = NULL, $email = NULL, $adresse = NULL, $tel = NULL, $user_name = NULL, $password = NULL) {
    if (!is_null($id_client) && !is_null($nom) && !is_null($prenom) && !is_null($email)  && !is_null($adresse)  && !is_null($tel)  && !is_null($password)  ) {
      $this->id_client = $id_client;
      $this->nom = $nom;
      $this->prenom = $prenom;
      $this->email = $email;
      $this->adresse = $adresse;
      $this->tel = $tel;
      $this->password = $password;
     }
  } 
public function getId_client() {
       return $this->id_client;  
  }
   public function getNom() {
       return $this->nom;  
  }
   public function getPrenom() {
       return $this->prenom;  
  }
   public function getEmail() {
       return $this->email;  
  }
   public function getAdresse() {
       return $this->adresse;  
  }
   public function getTel() {
       return $this->tel;  
  }

   public function getPassword() {
       return $this->password;  
  }
}
?>