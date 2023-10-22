<?php
    if(isset($_POST["username"]) OR isset($_POST["pass"])){
      $user = $_POST["username"];
      $pass = $_POST["pass"];
      $_SESSION["key"] = 'open';
    }
if ($_SESSION["key"] == 'open') {
    $stmt = $db->prepare("SELECT * FROM acheteur WHERE (username = :user OR email = :user) AND password = :pass");
    $stmt->execute(array(':user' => $user, ':pass' => $pass));
    $resultat = $stmt->fetchObject();
    if ($stmt->rowCount() == 1) {
        $_SESSION["id"] = $resultat->id_client;
        $_SESSION["username"] = $resultat->username;
        $_SESSION["surname"] = $resultat->surname;
        $_SESSION["name"] = $resultat->name;
        $_SESSION["tel"] = $resultat->tel;
    } else {
        echo "<center class='w-100 text-light bg-warning'>Invalid username or password</center>";
    }
    if ($resultat->type == "vendeur") {
        header('Location: ./vendeur profile.php');
    } else {
        header('Location: ./profile.php');
    }
}
?>

<?php
session_start();
if(session_destroy()){
    $_SESSION["key"] = 'close';
    header("location:../assets/login.php");
}else{
    echo "<script>alert('error...!');</script>";
}
?>

