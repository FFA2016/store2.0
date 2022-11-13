<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <title>Haine Store</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
        <!--added a cdn link by searching font awesome4 cdn and getting this link from https://www.bootstrapcdn.com/fontawesome/ this url*/-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>
        <!--<div class ="header">-->
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="../index.html"><img src="../images/logo.png" width="125px"></a>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="../index.html">Home</a></li>
                         <li><a href="../products.html">Products</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                         <li><a href="../account.html">Account</a></li>

                    </ul>
                </nav>
                <a href="../cart.php"><img src="../images/cart.png" width="30px" height="30px"></a>
                <img src="../images/menu.png" class="menu-icon" onClick="menutoggle()" >
            </div>
           
        </div>
    <!--</div>-->
    
        
        <!------------------------------ Single product details------------------------------>
        <div class="small-container single-product">
            
            
            <!--<h2 class="title" >Featured Products</h2>-->
            <div class="row">
                    <div class="col-2">
                        <img src="../images/Basic-Hoodie.png" width="100%" id="productImg">
                        
                        
                        <div class="small-img-row">
                            <div class="small-img-col">
                                <img src="../images/Basic-Hoodie.png" width="100%" class="small-img">
                            </div>
                             <div class="small-img-col">
                                <img src="../images/hoodie-beige-blau-back.png" width="100%" class="small-img">
                            </div>
                        </div>
                    </div>
                
                    <div class="col-2">
                        <p>Home / Hoodies</p>
                        <h1>Hoodie</h1>
                        <h4>
                            <?php
                            $pdo = new PDO('mysql:host=185.236.11.136;dbname=shop', 'webshopabfragen', '7L0eze64$');

                            $sql = "SELECT preis FROM produkte WHERE produkt_nr='1'";
                            foreach ($pdo->query($sql) as $row) {
                                echo $row['preis']  . '€';
                            }
                            ?>
                        </h4>
                        <select>
                            <option>Select Size</option>
                            <option>6<!--Small (s)--></option>
                            <option>7<!--Medium (M)--></option>
                            <option>8<!--Large (L)--></option>
                            <option>9<!--XL--></option>
                            <option>10<!--XXL--></option>
                        </select>
                        <input type="number" value='1'>
                        <a href="../cart.php" class="btn" onclick="
                                addtocart({price:

                        <?php
                        $pdo = new PDO('mysql:host=185.236.11.136;dbname=shop', 'webshopabfragen', '7L0eze64$');

                        $sql = "SELECT preis FROM `produkte` WHERE produkt_nr='1'";
                        foreach ($pdo->query($sql) as $row) {
                            echo $row['preis'];
                        }
                        ?>
                                , name:

                        <?php
                        $pdo = new PDO('mysql:host=185.236.11.136;dbname=shop', 'webshopabfragen', '7L0eze64$');

                        $sql = "SELECT name FROM `produkte` WHERE produkt_nr='1'";
                        foreach ($pdo->query($sql) as $row) {
                            echo "'" . $row['name'] . "'" ;
                        }
                        ?> }, 3, 'XXL')">Add to Cart</a>
                        <h3>Product Details <i class="fa fa-indent" ></i></h3>
                        <br>
                        <p>
                            <?php
                            $pdo = new PDO('mysql:host=185.236.11.136;dbname=shop', 'webshopabfragen', '7L0eze64$');

                            $sql = "SELECT beschreibung FROM produkte WHERE produkt_nr='1'";
                            foreach ($pdo->query($sql) as $row) {
                                echo $row['beschreibung'];
                            }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        
        
        <!----------------------------------Title------------------------------------->
        <div class="small-container">
            <div class="row row-2">
                <h2>Related Products</h2>
                <a href="../products.html"><p>View More</p></a>
            </div>
        </div>
                
        <!----------------------------------products------------------------------------->
        <div class="small-container">
             <div class="row">
                     <div class="col-4">
                        <a href="basic-hoodie.html"><img src="../images/Basic-Hoodie.png"></a>
                        <a href="basic-hoodie.html"><h4>Downshifter Sports Shoes</h4></a>
                        <div class="rating">
                            
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-half-o" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <p>$50.00</p>
                    </div>
                    <div class="col-4">
                        <a href="basic-hoodie.html"><img src="../images/product-2.jpg"></a>
                        <h4>Lace-Up Running Shoes</h4>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-half-o" ></i>
                        </div>
                        <p>$35.00</p>
                    </div>
                    <div class="col-4">
                        <a href="basic-hoodie.html"><img src="../images/product-3.jpg"></a>
                        <h4>Lace Fastening Shoes</h4>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <p>$15.00</p>
                    </div>
                    <div class="col-4">
                        <a href="basic-hoodie.html"><img src="../images/product-10.jpg"></a>
                        <h4>Flat Lace-Fastening Shoes</h4>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-o" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <p>$48.00</p>
                    </div>  
                </div>
        </div>

        <!----------------------------------footer------------------------------------->
        <div class ="footer">
            <div class="container">

                <!--<div class="row">
                    <div class="footer-col-1">
                        <h3>Download Our App</h3>
                        <p>Download App for Android and ios mobile phone.</p>
                        <div class="app-logo">
                            <img src="images/play-store.png" alt="">
                            <img src="images/app-store.png" alt="">
                        </div>
                    </div>-->
                <div class="footer-col-2">
                    <img src="../images/logo-white.png">
                    <!--Motto--><p>Our Purpose Is To Sustainably Make the Pleasure and Benefits of Sports Accessible to the Many.</p>
                </div>
                <!--<div class="footer-col-3">
                    <h3>Useful Links</h3>
                   <ul>
                       <li>Coupons</li>
                       <li>Blog Post</li>
                       <li>Return Policy</li>
                       <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow us</h3>
                   <ul>
                       <li>Facebook</li>
                       <li>Twitter</li>
                       <li>Instagram</li>
                       <li>Youtube</li>
                    </ul>
                </div>

            </div>
            -->
                <hr><!--horizontal line-->
                <p class="copyright">Copyright 2022 - Apurba Kr. Pramanik modified by Alexander Abt</p>

            </div>
        </div>
        
        
        <!-----------------------------------js for toggle menu----------------------------------------------->
        <script>
            var menuItems=document.getElementById("MenuItems");
            
            MenuItems.style.maxHeight="0px";
            function menutoggle(){
                if(MenuItems.style.maxHeight == "0px"){
                    MenuItems.style.maxHeight="200px";
                }
                else{
                    MenuItems.style.maxHeight="0px";
                }
            }
        </script>
        
        <!-----------------------js for product gallery-------------------->
        
        <script>
            var productImg=document.getElementById("productImg");
            var smallImg=document.getElementsByClassName("small-img");
            
            smallImg[0].onclick=function(){
                productImg.src=smallImg[0].src;
            }
             smallImg[1].onclick=function(){
                productImg.src=smallImg[1].src;
            }
              smallImg[2].onclick=function(){
                productImg.src=smallImg[2].src;
            }
               smallImg[3].onclick=function(){
                productImg.src=smallImg[3].src;
            }
            
            
        </script>

        <!----------------js for cart--------------->

        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js'></script>
        <script  src="../js/cart.js"></script>
    </body>
</html>