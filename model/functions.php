<?php
require_once "./config/config.php";

function connexionDB (){
try {
    $db = new PDO("mysql:host=".config::SERVER.";dbname=".config::DB,config::USER,config::PASSWORD);
     $db->query("SET NAMES 'utf8'");

        return $db;
} 
catch (PDOException $exception) {
    die ($exception-> getMessage());
}

}

?>