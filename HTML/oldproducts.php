<?php
session_start();


?>








<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" >
        
        <title>All Products - GAMING store</title>
        <link rel="stylesheet" href="../CSS/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

      

    </head>
    <body>
            <div class="container">
                <div class="navbar">
                    <div class="logo">
                     <a href="../HTML/home.php" ><img class="logo" src="../photos/logo-du-moteur-de-jeu-jeu-logo-design-l-icone-du-controleur-de-jeu-vector-illustration-sur-fond-blanc-games-store-logo-modele-de-conception-de-l-icone-de-jeu-2a1gxtb.jpg" alt="not found" width="110px"></a>
                    </div>
                    <nav>
                        <ul id="MenuItems">
                            <li><a  id="navlinks" href="../HTML/home.php">Home</a></li>
                            <li><a  id="navlinks" href="../HTML/products.php">Products</a></li>
                            <?php
                            if (isset($_SESSION ["mail"])){
                                ?>
                                <li><a  id="navlinks" href='../HTML/profile.php'><?php echo $_SESSION["nom"]; ?></a></li>
                                <li><a  id="navlinks" href='../HTML/logout.php'>Logout</a></li>
                                <?php
                            }else {?>
                                <li><a  id="navlinks" href='../HTML/login.php'>Login</a></li>
                                <?php
                            }
                            
                            ?>
                        </ul>
                    </nav>
                    <a href="../HTML/cart.php"><img src="../images/cart.png" height="40px" width="40px"></a>
                    
        
        
        
                    </div>
                </div>
            </div>
        <div class="small-container">
            <div class="row row-2">
                <h2>All Products</h2>
                <select >
                    <option >Default Shorting</option>
                    <option >Short by Price</option>
                    <option >Short by Ppopularity</option>
                    <option >Short by Rating</option>
                    <option >Short by Sale</option>
                </select>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="col-4">
                        <img src="../photos/ps4.jpeg" alt="ps4" >
                        <h4>Sony playstation 4 console</h4>
                       
                        <p>1200 DT</p>
                    </div>
                    
                </div>
                <div class="col-4">
                    <img src="../photos/xbox one.jpeg" alt="xbox one">
                    <h4>xbox one console</h4>
                   
                    <p>1200 DT</p>
                   
                </div>
                <div class="col-4">
                    <img src="../photos/xbox-serie-x.png" alt="xbox">
                    <h4>xbox serie x console</h4>
                   
                    <p>2600 DT</p>
                    
                </div>
                <div class="col-4">
                    <img src="../photos/fifa-23-pc-jeu-origin.jpg" alt="fifa" width="250px" height="210px">
                    <h4>Ea sports fifa 23 </h4>
                   
                    <p>250 DT</p>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <img src="../photos/mw2-reveal-meta-share.jpg" alt="cod" width="250px" height="210px">
                    <h4>call of duty MW2 </h4>
                  
                    <p>270 DT</p>
                </div>
                <div class="col-4">
                    <img src="../photos/spid.webp" alt="spiderman" width="250px" height="210px">
                    <h4>Marvels spiderman </h4>
                  
                    <p>220 DT</p>
                </div>
                <div class="col-4">
                    <img src="../photos/xbox one.jpeg" alt="xbox one">
                    <h4>xbox one console</h4>
                   
                    <p>1200 DT</p>
                   
                </div>
                <div class="col-4">
                    <img src="../photos/godps.webp" alt="cd" width="250px" height="210px">
                    <h4>God of War Ragnarok</h4>
                  
                    <p>280 DT</p>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <img src="../photos/horizon.webp" alt="cd" width="250px" height="210px">
                    <h4>horizon forbidden west</h4>
                  
                    <p>260 DT</p>
                </div>
                <div class="col-4">
                    <img src="../photos/last of us 2.jpg" alt="cd" width="250px" height="210px">
                    <h4>Last of us 2</h4>
                  
                    <p>230 DT</p>
                </div>
                <div class="col-4">
                    <img src="../photos/red dead 2.jpg" alt="cd" width="250px" height="210px">
                    <h4>red </h4>
                  
                    <p>200 DT</p>
                </div>
                <div class="col-4">
                    <img src="../photos/ps5 contrôler.webp" alt="cd" width="250px" height="210px">
                    <h4>Ps5 contrôler </h4>
                  
                    <p>250 DT</p>
                </div>
            </div>

            <div class="page-btn">
                <span>1</span>
                <span>2</span>
                <span>3</span>
                <span>4</span>
                <span>&#8594</span>
            </div>
        </div>
        <!-- -----------footer----------- -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col-1">
                        <h3>Download Our App</h3>
                        <p>Download App for Android and Ios mobile phone.</p>
                        <div class="app-logo">
                            <img src="../images/play-store.png" alt="">
                            <img src="../images/app-store.png" alt="">
                        </div>

                    </div>
                    <div class="footer-col-2">
                        <img src="../photos/logo.png" >
                        <p>Our Purpose Is To Sustainably Make the people happy and Benefits of our product and services   </p>
                    </div>
                    <div class="footer-col-3">
                        <h3>Useful Links</h3>
                        <ul>
                            <li><a href="https://www.playstation.com/en-us/"> Sony</a></li>
                            <li><a href="https://www.xbox.com/en-US/"> Xbox </a></li>
                            <li><a href="https://www.nintendo.com/"> Nintendo</a></li>
                        </ul>
                    </div>
                    <div class="footer-col-4">
                        <h3>Follow Us</h3>
                        <ul>
                            <li>Facebook</li>
                            <li>Twitter</li>
                            <li>Instagram</li>
                            <li>Youtube</li>
                        </ul>
                    </div>


                </div>
                <hr>
                <p class="copyright">Created By Hamza drissi & neder tarroui </p>
            </div>
        </div>
      
        
        
    </body>

</html>