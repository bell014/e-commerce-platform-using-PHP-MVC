<?php


/* require_once "../model/functions.php";
$db = connexionDB();
if ($_SERVER['REQUEST_METHOD'] == "POST") {

  
  $name = $_POST["nom"];
  $prenom = $_POST["prenom"];
  $num = (int)$_POST["num"]; 
  $adr = $_POST["adr"];
  $mail = $_POST["mail"];
  $ps = $_POST["ps"];


  
  if (!empty($name)&& !empty($prenom)&& !empty($num)&& !empty($adr)&& !empty($mail)&& !empty($ps) ){

    $req = "SELECT * from clients where email='$mail'";
    $resultat=$db->query($req);
if ( $resultat->rowCount()>0 ){
      
echo "user already exist";
}
else{
  $ps1 = md5($ps);  
  $req1= "INSERT INTO clients (nom_client,prenom_client,num,adr,email,mdp) values ( '$name','$prenom',$num,'$adr','$mail','$ps1')";
  
  
    $resultat1 = $db->exec($req1);
 

    header("Location: login.php");

}

  }
  else{

    echo " <script>alert('vérifier les informations manquantes');</script>";
  }


}

 */



?>


<?php        require_once "./view/header.php";  ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- -----------account page----------->
    <div class="account-page1">
      <div class="container">
        <div class="row">
        <section class="vh-100" style="background-color: #FFFFFF;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Sign up</h3>
            <form action="index.php?controller=client&action=signupex" method="post">
            <div class="form-outline mb-4">
            
              <label class="form-label" for="typeEmailX-2">nom</label>
              <input type="text" id="typeEmailX-2" class="form-control form-control-lg" name="nom"
              placeholder="votre nom"/>
             
            </div>

            <div class="form-outline mb-4">

            <label class="form-label" for="typePasswordX-2">prenom</label>
              <input type="text" id="typePasswordX-2" class="form-control form-control-lg" name="prenom" placeholder="votre prenom" />
              
            </div>
            
            <div class="form-outline mb-4">

            <label class="form-label" for="typePasswordX-2">num</label>
              <input type="number" id="typePasswordX-2" class="form-control form-control-lg" name="num" placeholder="votre num de num" />
              
            </div>
            <div class="form-outline mb-4">

            <label class="form-label" for="typePasswordX-2">adresse</label>
              <input type="text" id="typePasswordX-2" class="form-control form-control-lg" name="adr" placeholder="votre adresse" />
              
            </div>
            <div class="form-outline mb-4">

            <label class="form-label" for="typePasswordX-2">mail</label>
              <input type="email" id="typePasswordX-2" class="form-control form-control-lg" name="mail" placeholder="votre mail" />
              
            </div>
            <div class="form-outline mb-4">

<label class="form-label" for="typePasswordX-2">mot de passe</label>
  <input type="password" id="typePasswordX-2" class="form-control form-control-lg" name="ps" placeholder="votre mot de passe" />
  
</div>

            

            <button class="btn btn-primary btn-lg btn-block" type="submit">signup</button>
            <br>
             <a href="index.php?controller=client&action=login">already have a account ?</a>
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