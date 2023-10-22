<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" >
        
        <title>Gaming store</title>
        <link rel="stylesheet" href="./CSS/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
  
      

    
    <body>
        <div class="header">
            <div class="container">
                <div class="navbar">
                    <div class="logo">
                        <a href="index.php?controller=client&action=home" ><img class="logo" src="./photos/logo-du-moteur-de-jeu-jeu-logo-design-l-icone-du-controleur-de-jeu-vector-illustration-sur-fond-blanc-games-store-logo-modele-de-conception-de-l-icone-de-jeu-2a1gxtb.jpg" alt="not found" width="110px"></a>
                    </div>
              <nav>
                        <ul id="MenuItems">
                            <li><a id="navlinks" href="index.php?controller=client&action=home">Home</a></li>
                            <li><a id="navlinks" href="index.php?controller=client&action=prod">Products</a></li>
                            <?php
                            if (isset($_SESSION ["mail"])){
                                ?>
                                <li><a id="navlinks" href='index.php?controller=client&action=pro'><?php echo $_SESSION["nom"]; ?></a></li>
                                <li><a id="navlinks" href='index.php?controller=client&action=logout'>Logout</a></li>
                                <?php
                                
                            }else {?>
                                <li><a id="navlinks" href='index.php?controller=client&action=login'>Login</a></li>
                                
                                <?php
                            }
                            
                            ?>
                        </ul>
                    </nav>
                    <a href="index.php?controller=client&action=cart"><img src="./images/cart.png" height="40px" width="40px"></a>
                    
        
                    </div>
                </div>
            </div>
            </head>