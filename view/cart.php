
<?php        require "./view/header.php"; 



if (isset($_GET["id"]))
{

$id=$_GET["id"];
echo "done ";
}else {

echo "error";}




?>



            <!-- ---------cart items deatils------  -->
            <div class="small-container cart-page">
                <table>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                    </tr>
                    <tr>
                        <td>
                            <div class="cart-info">
                                <img src="../photos/ps5.webp" >
                                <div>
                                    <p class="exclusive-title">ps5</p>
                                    <small>Price : 2800dt</small>
                                    <br>
                                    <a href="">Remove</a>
                                </div>

                                

                            </div>
                        </td>
                        <td><input type="number" value="1"></td>
                        <td>2800 dt</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="cart-info">
                                <img src="../photos/fifa-23-pc-jeu-origin.jpg" >
                                <div>
                                    <p class="exclusive-title">Ea sports fifa 23</p>
                                    <small>Price : 250dt </small>
                                    <br>
                                    <a href="">Remove</a>
                                </div>

                                

                            </div>
                        </td>
                        <td><input type="number" value="1"></td>
                        <td>250dt</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="cart-info">
                                <img src="../photos/ps5 contrôler.webp" >
                                <div>
                                    <p class="exclusive-title">Ps5 contrôler</p>
                                    <small>Price : 250dt</small>
                                    <br>
                                    <a href="">Remove</a>
                                </div>

                                

                            </div>
                        </td>
                        <td><input type="number" value="1"></td>
                        <td>250dt</td>
                    </tr>

                    
                </table>


                <div class="total-price">
                    <table>
                        <tr>
                            <td>Subtotal</td>
                            <td>3300</td>
                        </tr>
                        <tr>
                            <td>Tax</td>
                            <td>150 DT</td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td>3450DT</td>
                        </tr>
                    </table>
                </div>


            </div>

        <!-- -----------footer----------- -->
        <?php  require "./view/footer.php"; ?>