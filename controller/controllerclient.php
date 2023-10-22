<?php
/**
 * Ce fichier représente le contrôleur de la table livre
 */
// Inclure le fichier
require_once  "./model/model_client.php";
require_once  "./model/model_admin.php";

if(isset($_REQUEST['action']))	
/* recupère l'action passée dans l'URL*/
	$action = $_REQUEST['action'];
// Exécuter l'action
switch($action){
    case "cart":

        require_once "./view/cart.php";
    
    break;
case "signup":

    require_once "./view/signup.php";

break;
    case "signupex":
        
        $name = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $num = (int)$_POST["num"]; 
        $adr = $_POST["adr"];
        $mail = $_POST["mail"];
        $ps = $_POST["ps"];

        if(!empty($name)&& !empty($prenom)&& !empty($num)&&!empty($adr)&& !empty($mail)&& !empty($ps)){
       
        $ps1=md5($ps);
        $client=new client();
        $resultat=$client->insert([
            "nom_client" => $name,
            "prenom_client" => $prenom,  
            "num" => $num,
            "adr" => $adr,  
            "email" => $mail,  
            "mdp" => $ps1  
  ]);
  
require_once "./view/login.php";

}else{
  echo " <script>alert('vérifier les informations manquantes');</script>";
  require "./view/signup.php";
}     
 
       // require_once "view/";
        break;
    
    
    case "delete":
       
            $mail= $_SESSION ["mail"];
            $client=new client();
            $user=$client->delete($mail);

            require_once "./view/logout.php";
        break;


        case "home":
        require_once "./view/home.php";
        break;
        case "prod":

           
            require_once "./view/products.php";
            break;

            case "logout":
             require_once "./view/logout.php";
             break;
        
            case "pro":
             if (isset($_SESSION["mail"])){

                  require_once "./view/profile.php";
    
            }else{
    
                    require_once "./view/login.php";
            }  
           break;
        case "update":

        
          $name = $_POST["nom"];
          $prenom = $_POST["prenom"];
          $num = (int)$_POST["num"]; 
          $adr = $_POST["adr"];
          $mail = $_POST["email"];
          $ps = $_POST["ps"];
            $id = $_SESSION["id"];
        
          
          if (!empty($name)&& !empty($prenom)&& !empty($num)&& !empty($adr)&& !empty($mail)&& !empty($ps) ){
             

                $ps1 = md5($ps);
                $client=new client();
                $user=$client->update( ["nom_client" => $name,
                "prenom_client" => $prenom,
                "num" => $num,
                "adr" => $adr,
                "email" => $prenom,
                "mdp" => $ps1,],$mail
                );
                echo " <script>alert('user  have been updated');</script>";
                require_once "./view/home.php";
          }else{

            echo " <script>alert('vérifier les informations manquantes');</script>";
            require_once "./view/profile.php";

          }
                        break;
            
        case "login":

           
            require_once "./view/login.php";
            break;

            case "loginex":
                
                $mail = $_POST["mail"];
                $ps = $_POST["ps"];
                if ( !empty($mail)&& !empty($ps) ){
                    $ps1 = md5($ps);
                    $client=new client();
                    $user=$client->getById($mail);
                    if ($user !==false && $user->email==$mail && $user->mdp==$ps1)
                    {
                    
                        $_SESSION["id"] = $user->id_client;
                        $_SESSION["nom"] = $user->nom_client;
                        $_SESSION ["mail"]=  $user->email;
                        require_once "./view/home.php";
                    } else{
    
                        echo " <script>alert('mail ou mdp invalide');</script>";

                        
                        require "./view/login.php";
                    }
                
                
            }
           break;
}
?>