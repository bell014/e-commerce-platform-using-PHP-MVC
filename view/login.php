<?php

/* require_once "../model/functions.php";
$db = connexionDB();
if ($_SERVER['REQUEST_METHOD'] == "POST") {

  
  $mail = $_POST["mail"];
  $ps = $_POST["ps"];
   

  
  if (  !empty($mail)&& !empty($ps) ){
    
    $ps1 = md5($ps);

    $stmt = $db->prepare("SELECT * FROM clients WHERE  email = :user AND mdp = :pass");
    $stmt->execute(array(':user' => $mail, ':pass' => $ps1));
    $resultat = $stmt->fetchObject();


   // $req = "SELECT * from clients where email='$mail' and mdp='$ps1'";
   // $resultat=$db->query($req);

if ( $stmt->rowCount()==1 ){
  
    $_SESSION["id"] = $resultat->id_client;
    $_SESSION["nom"] = $resultat->nom_client;
    $_SESSION ["mail"]=  $_POST["mail"];
  header("Location: home.php");    

}
else 
{

      echo " <script>alert('mail ou mdp invalide');</script>";
}




}

  }
   */




?>


<?php        require_once "./view/header.php";  ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- -----------account page----------->
    <div class="account-page">
      <div class="container">
        <div class="row">
        <section class="vh-100" style="background-color: #FFFFFF;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Sign in</h3>
            <form action="index.php?controller=client&action=loginex" method="post">
            <div class="form-outline mb-4">
            
              <label class="form-label" for="typeEmailX-2">Email:</label>
              <input type="email" id="typeEmailX-2" class="form-control form-control-lg" name="mail"
              placeholder="votre Email"/>
             
            </div>

            <div class="form-outline mb-4">

            <label class="form-label" for="typePasswordX-2">Password:</label>
              <input type="password" id="typePasswordX-2" class="form-control form-control-lg" name="ps" placeholder="Password" />
              
            </div>
            

            

            <button class="btn btn-primary btn-lg btn-block" type="submit">connecter</button>
            <br>
             <a href="index.php?controller=client&action=signup">créer un nouveau compte ?</a>
            <hr class="my-4">
            </form>
         
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
        </div>
      </div>
    </div>

    <!-- -----------footer----------- -->
    <?php  require "./view/footer.php"; ?>