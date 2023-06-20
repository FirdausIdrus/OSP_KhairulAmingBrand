<?php

$conn = mysqli_connect('localhost','root','','osp_website') or die('connection failed');

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart';
   }else{
      $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
      $message[] = 'product added to cart succesfully';
   }

}

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Khairul Aming Brand</title>
            
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/templatemo-tiya-golf-club.css" rel="stylesheet">  

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


        

    </head> 
    
    <body>
    <?php
        if(isset($message)){
        foreach($message as $message){
            echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
        };
        };

    ?>

        <main>

        <nav class="navbar navbar-expand-lg">                
                <div class="container">
                    <a class="navbar-brand d-flex align-items-center" href="index.php">
                        <span class="navbar-brand-text">
                            BRAND<br>
                            <small>Khairul Aming</small>
                        </span>
                    </a>

                    <div class="d-lg-none ms-auto me-3">
                        <a class="btn custom-btn custom-border-btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Member Login</a>
                    </div>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-auto">

                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="aboutUs.php">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="career.php">Careers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="product.php">Product</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Community</a>

                                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                    <li><a class="dropdown-item" href="recipeupdate.php">KA Recipes</a></li>
                                    <li><a class="dropdown-item" href="forum_index.php">Forum</a></li>
                                </ul>
                            </li>

                        </ul>

                        <div class="d-none d-lg-block ms-lg-3">
                            <a class="btn custom-btn custom-border-btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Members</a>
                        </div>

                        <?php
      
                        $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
                        $row_count = mysqli_num_rows($select_rows);

                        ?>

                        <a href="cart.php" class="cart nav-link "><i class="fas fa-shopping-cart"style="padding: 0 10px;"></i><span><?php echo $row_count; ?></span> </a>
                    </div>
                </div>
            </nav>

            <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">                
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Members</h5>
                    
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                
                <div class="offcanvas-body d-flex flex-column">
                    <form class="custom-form member-login-form" action="membership_check.php" method="post" role="form">
                        <div class="member-login-form-body">

                            <div class="mb-4">
                                <label class="form-label mb-2" for="member-login-number">Membership No.</label>
                                <input type="text" name="membership_no" id="member-login-number" class="form-control" placeholder="123154" required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label mb-2" for="member-login-password">Password</label>
                                <input type="text" name="password" id="member-login-password" class="form-control" placeholder="315759" required="">
                            </div>

                            <div class="col-lg-5 col-md-7 col-8 mx-auto">
                                <button type="submit" class="form-control">Login</button>
                            </div>  

                            <div class="text-center my-4">
                                <a href="#">Forgotten password?</a>
                            </div>
                        </div>
                    </form>

                    <div class="mt-auto mb-5">
                        <p>
                            <strong class="text-white me-3">Any Questions?</strong>
                            <p><strong>Khairul Aming Team</strong></p>
                        </p>
                    </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#3D405B" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
            </div>
            

            <section class="hero-section hero-50 d-flex justify-content-center align-items-center" id="section_1">

                <div class="section-overlay"></div>

                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center">

                            <h1 class="text-white mb-4 pb-2">Sambal Nyet by Khairul Aming.</h1>

                            <a href="#section_2" class="button custom-btn smoothscroll me-3">Product</a>
                        </div>

                    </div>
                </div>

                <svg viewBox="0 0 1962 178" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="#ffffff" d="M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z" stroke-width="0"></path> <path fill="#ffffff" d="M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z" stroke-width="0"></path> <path fill="#ffffff" d="M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z" stroke-width="0"></path></svg>
            </section>

            <section class="events-section events-listing-section section-padding" id="section_2">
                <div class="container">
                    <div class="row">

                        <div class="row custom-block mb-3">

                            <div class="col-lg-5 col-12 order-1 order-lg-0">

                                <div class="custom-block-image-wrap">
                                    <a href="#section_3">
                                        <img src="images/sambal_3.png" class="custom-block-image img-fluid" alt="">

                                        <i class="custom-block-icon bi-link"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6 col-12 order-3 order-lg-0">

                                <div class="custom-block-info mt-2 mt-lg-0">
                                    <a href="#section_3" class="events-title mb-3">Sambal Nyet Berapi by Khairul Aming Brand</a>

                                    <h2>RM 14.00</h2>
                                    

                                    <div class="d-flex flex-wrap border-top mt-4 pt-3">

                                        <div class="mb-4 mb-lg-0">
                                            <div class="d-flex flex-wrap align-items-center mb-1">
                                                <span class="custom-block-span">Shipping:</span>
                                                
                                                <p class="mb-0">Free Shipping</p>
                                            </div>
                                            <div class="d-flex flex-wrap align-items-center mb-1">
                                                <span class="custom-block-span"></span>
                                                <div class="row">
                                                    <div class="col-lg-8 mt-2">
                                                        <p class="mb-0">Shipping To</p>
                                                        <div class="span">KL, City, Kuala Lumpur</div>
                                                    </div>
                                                    <div class="col-lg-6 mt-2">
                                                    <p class="mb-0">Shipping Fee</p>
                                                        <div class="span">RM 0.00</div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="d-flex flex-wrap align-items-center mt-3">
                                                <div class="col">
                                                    
                                                    <?php
                                                        $select_products = mysqli_query($conn, "SELECT * FROM `products`");
                                                        if(mysqli_num_rows($select_products) > 0){
                                                            while($fetch_product = mysqli_fetch_assoc($select_products)){
                                                        ?>

                                                        <form action="" method="post">
                                                            <div class="box">
                                                                <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
                                                                <h6><?php echo $fetch_product['name']; ?></h6>
                                                                <div class="price h6">RM<?php echo $fetch_product['price']; ?>.00</div>
                                                                <input type="hidden" class="" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                                                                <input type="hidden" class="" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                                                                <input type="hidden" class="" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                                                                <input type="submit" class="button custom-btn custom-border-btn" value="ADD TO CART" name="add_to_cart">
                                                            </div>
                                                        </form>

                                                        <?php
                                                            };
                                                        };
                                                        ?>
                                                    

                                                </div>

                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        

                    </div>
                </div>
            </section>


            <section class="events-section events-detail-section section-bg section-padding" id="section_3">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 mb-4 mb-lg-0 mx-auto">
                            <h3 class="mb-3">Product General Information</h3>

                            <p><strong>Category: </strong>Condiment.</p>
                            <p><strong>Ingredients: </strong>Handpicked chili peppers, aromatic spices, premium quality ingredients.</p>
                            <p><strong>Usage Instructions: </strong>Add a spoonful of Sambal to your favorite dishes, such as noodles, rice, grilled meats, or stir-fries, to enhance the flavor and add a delightful kick. Adjust the amount according to your preferred level of spiciness.</p>
                            <p><strong>Benefits: </strong>Sambal adds a burst of flavor to your meals, with its perfect blend of spiciness and sweetness. It is a versatile condiment that elevates a wide range of cuisines, making every dish more exciting and delicious.</p>
                            <p><strong>Weight: </strong>300ml.</p>
                            <p><strong>Shelf Life: </strong>Our Sambal has a long shelf life, allowing you to enjoy its exquisite flavors for up to 7 hours.</p>
                            <p><strong>Storage Instructions:</strong>Store in a cool, dry place away from direct sunlight. Once opened, refrigerate to maintain freshness and flavor.</p>
                            <p><strong>Country of Origin: </strong>Proudly made in Malaysia.</p>
                            <p><strong>Pack Size: </strong>Available in a convenient 300ml glass tub, ensuring easy storage and portioning for your culinary adventures.</p>
                        </div>

                    </div>
                </div>
            </section>

        </main>

        <?php include 'footer.php' ?>

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/custom.js"></script>

        <script src="js/script.js"></script>
        

    </body>
</html>