<?php

require_once "./model/functions.php";
$db = connexionDB();
$s="SELECT * from produit";
$r=$db->query($s)





?>








<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" >
        
        <title>All Products - GAMING store</title>
        <link rel="stylesheet" href="./CSS/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

      

    </head>
    <body>
            <div class="container">
                <div class="navbar">
                    <div class="logo">
                     <a href="index.php?controller=client&action=home" ><img class="logo" src="./photos/logo-du-moteur-de-jeu-jeu-logo-design-l-icone-du-controleur-de-jeu-vector-illustration-sur-fond-blanc-games-store-logo-modele-de-conception-de-l-icone-de-jeu-2a1gxtb.jpg" alt="not found" width="110px"></a>
                    </div>
                    <nav>
                        <ul id="MenuItems">
                            <li><a  id="navlinks" href="index.php?controller=client&action=home">Home</a></li>
                            <li><a  id="navlinks" href="index.php?controller=client&action=prod">Products</a></li>
                            <?php
                            if (isset($_SESSION ["mail"])){
                                ?>
                                <li><a  id="navlinks" href='index.php?controller=client&action=pro'><?php echo $_SESSION["nom"]; ?></a></li>
                                <li><a  id="navlinks" href='index.php?controller=client&action=logout'>Logout</a></li>
                                <?php
                            }else {?>
                                <li><a  id="navlinks" href='index.php?controller=client&action=login'>Login</a></li>
                                <?php
                            }
                            
                            ?>
                        </ul>
                    </nav>
                    <a href="index.php?controller=client&action=cart"><img src="./images/cart.png" height="40px" width="40px"></a>
                    
        
        
        
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
           
</div>
<div class="small-containe">
    <div class="row ">      
    <?php 
    $row = $r->fetch(PDO::FETCH_ASSOC);
    while ($row)
    {
    ?>            
    <div class="col-4">
    <img src="<?php echo $row["img"]?>" alt="ps4" >
    <h4> <?php echo $row["description"]?></h4>
    <div class="addtocartcontainer" style="display: flex;justify-content: left; align-items: center;" >
        <button class="add" data-id="<?php echo  $row["id_p"]; ?>" style="background-color:white;margin-right:9px;padding-top:4px;padding-right:3px;padding-left:3px;border:1px solid black" ></button>
        <p style="font-weight: 500;" >add to cart</p>
    </div>
    <p> <?php echo $row["prix"]?></p>
    </div>   
    <?php   
    $row = $r->fetch(PDO::FETCH_ASSOC);}
    
    ?>    
                
                    
                </div>
</div>
         <script> 
        var product_id =document.getElementsByClassName("add");
        for (var i=0 ;i<product_id.length;i++){
            product_id[i].addEventListener("click",function(event){
             var target= event.target;
             var id = target.getAttribute("data-id");
              alert (id);
              
                
            });


        }
        </script>
           
                
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
                            <img src="./images/play-store.png" alt="">
                            <img src="./images/app-store.png" alt="">
                        </div>

                    </div>
                    <div class="footer-col-2">
                        <img src="./photos/logo.png" >
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