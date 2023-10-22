<?php


/* 
require_once "./model/functions.php";
$db = connexionDB();
if (isset($_POST['update'])) {

  
  $name = $_POST["nom"];
  $prenom = $_POST["prenom"];
  $num = (int)$_POST["num"]; 
  $adr = $_POST["adr"];
  $mail = $_POST["email"];
  $ps = $_POST["ps"];
    $id = $_SESSION["id"];

  
  if (!empty($name)&& !empty($prenom)&& !empty($num)&& !empty($adr)&& !empty($mail)&& !empty($ps) ){
        $ps1 = md5($ps);


        $stmt = $db->prepare("UPDATE clients SET nom_client=:nom,prenom_client=:prenom,num=:num,adr=:adr,email=:mail,mdp=:ps1 WHERE id_client=:id");
        $stmt->bindParam(':nom', $name);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':num', $num);
        $stmt->bindParam(':adr', $adr);
        $stmt->bindParam(':mail', $mail);
        $stmt->bindParam(':ps1', $ps1);
        $stmt->bindParam(':id', $id);

        $resultat = $stmt->execute();
   
if ($resultat ){
      
echo " <script>alert('user  have been updated');</script>";

}
else{
  
 
    echo " <script>alert('error404');</script>";
}

  }
  else{

    echo " <script>alert('vérifier les informations manquantes');</script>";
  }


}

if (isset($_POST['delete'])) {
/    / Delete from db
   // $stmt = $db->prepare("DELETE  FROM clients WHERE id_client =:id ");
  //  $stmt->bindParam(':id', $id);
   // $stmt->execute();
   $id1=$_SESSION["id"];
   $s =("DELETE  FROM clients WHERE id_client = '$id1' ");
    $db->exec($s);
    
    // Logout
    
    session_destroy();

    
    header("Location: home.php");

}
 */





?>


       
<!DOCTYPE html>
<html>


<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="stylesheet" href="./CSS/style1.css">



</head>
<body>



<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://img.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg?w=2000"><span class="font-weight-bold"><?php echo $_SESSION["nom"]; ?></span><span class="text-black-50"><?php echo $_SESSION["mail"]; ?></span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <form action="index.php?controller=client&action=update" method="post">
                    <div class="col-md-12"><label class="labels">Nom:</label><input type="text" class="form-control" placeholder="Nom" name="nom" ></div>
                    <div class="col-md-12"><label class="labels">Pénom:</label><input type="text" class="form-control" value="" placeholder="Pénom"name="prenom"  ></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Numéro de téléphone mobile 📱📞:</label><input type="number" class="form-control" placeholder="enter phone number" name="num" max="8"></div>
                    <div class="col-md-12"><label class="labels">votre adress 🏡:</label><input type="text" class="form-control" placeholder="votre adress" name="adr" ></div>
                    <div class="col-md-12"><label class="labels">votre E-mail 📧:</label><input type="mail" class="form-control" placeholder="votre E-mail " name="email" ></div>
                    <div class="col-md-12"><label class="labels">Mot de passe🔒:</label><input type="password" class="form-control" placeholder="mot de passe" name="ps" ></div>
                    <div class="col-md-12"><label class="labels">vérification du Mot de passe🔐:</label><input type="password" class="form-control" placeholder="vérification du mot de passe" name="psv" ></div>

                </div>
                <div class="row mt-3">
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit" name="update">Save Profile</button></div></form>
                <form action="index.php?controller=client&action=delete" method="post">
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit" name="delete">delete Profile</button></div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                <div class="col-md-12"></div> <br>
                <div ></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>







</body>
</html>