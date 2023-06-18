<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Khairul Aming Brand</title>

        <!-- CSS FILES -->                
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/templatemo-tiya-golf-club.css" rel="stylesheet">
        
<!--

TemplateMo 587 Tiya Golf Club

https://templatemo.com/tm-587-tiya-golf-club

-->
    </head>
    
    <body>

        <main>

            <nav class="navbar navbar-expand-lg">                
                <div class="container">
                    <a class="navbar-brand d-flex align-items-center" href="index.html">
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

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Home</a>

                                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                    <li><a class="dropdown-item click-scroll" href="section_update">Updates</a></li>
                                    <li><a class="dropdown-item click-scroll" href="section_2">About Founder</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">About Us</a>

                                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                    <li><a class="dropdown-item" href="aboutUs.php">How To Contact</a></li>

                                    <li><a class="dropdown-item" href="aboutUs.php">Our Team</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Careers</a>

                                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                    <li><a class="dropdown-item" href="career.php">Apply Now</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Community</a>

                                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                    <li><a class="dropdown-item" href="event-listing.html">KA Recipes</a></li>

                                    <li><a class="dropdown-item" href="event-detail.html">Recipe Sharing</a></li>

                                    <li><a class="dropdown-item" href="event-detail.html">Forum</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Product</a>

                                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                    <li><a class="dropdown-item" href="product.php">Order Now</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>

                                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                    <li><a class="dropdown-item" href="event-listing.html">Event Listing</a></li>

                                    <li><a class="dropdown-item" href="event-detail.html">Event Detail</a></li>
                                </ul>
                            </li>
                        </ul>

                        <div class="d-none d-lg-block ms-lg-3">
                            <a class="btn custom-btn custom-border-btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Members</a>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">                
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Members</h5>
                    
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                
                <div class="offcanvas-body d-flex flex-column">
                    <form class="custom-form member-login-form" action="#" method="post" role="form">

                        <div class="member-login-form-body">
                            <div class="mb-4">
                                <label class="form-label mb-2" for="member-login-number">Membership No.</label>

                                <input type="text" name="member-login-number" id="member-login-number" class="form-control" placeholder="11002560" required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label mb-2" for="member-login-password">Password</label>

                                <input type="password" name="member-login-password" id="member-login-password" pattern="[0-9a-zA-Z]{4,10}" class="form-control" placeholder="Password" required="">
                            </div>

                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                              
                                <label class="form-check-label" for="flexCheckDefault">
                                    Remember me
                                </label>
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

                            <a href="tel: 010-020-0340" class="contact-link">
                            	010-020-0340
                            </a>
                        </p>
                    </div>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#3D405B" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
            </div>
            

            <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">

                <div class="section-overlay"></div>


                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                            <h2 class="text-white">Sambal</h2>
                            <h2 class="text-white">Nyet</h2>

                            <h1 class="cd-headline rotate-1 text-white mb-2 pb-2">
                                <span class="cd-words-wrapper">
                                    <b class="is-visible">BERAPI</b>
                                    <b>BERASAP</b>
                                    <b>BERHANTU</b>
                                </span>
                            </h1>

                            <p2>Sambal Nyet adalah pilihan terbaik untuk pecinta makanan pedas di seluruh Malaysia. Ia adalah pesaing utama dalam dunia sambal dengan cita rasa yang benar-benar mengagumkan dan nikmat yang memukau lidah anda. Dari suku-suku tradisional hingga hidangan moden, Sambal Nyet mampu memberikan keunikan tersendiri kepada hidangan anda. </p2>

                            <div class="custom-btn-group mt-3">
                                <a href="#section_2" class="btn custom-btn smoothscroll me-3">Our Story</a>
                            </div>
                        </div>
                </div>
            </section>

            <section class="about-section section-padding" id="section_0">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center">
                            <h2 class="mb-lg-5 mb-4 mt-4">“Great Thing Come From Hard Work and Perseverance.
                                No Excuses”</h2>
                        </div>

                        <div class="col-lg-4 col-12 mb-4 mb-lg-0 text-center">
                                <h3 class="mb-3">3.7 Million</h3>

                                <p><strong>Instagram Followers</strong></p>
                            </div>
                            <div class="col-lg-4 col-12 mb-4 mb-lg-0 text-center">
                                <h3 class="mb-3">1.8 Million+</h3>

                                <p><strong>Total Bottles Sold!</strong> </p>
                            </div>
                            <div class="col-lg-4 col-12 mb-4 mb-lg-0 text-center">
                                <h3 class="mb-3">RM14 Million Sales</h3>

                                <p><strong>People Choice's of Sambal</strong></p>
                            </div>
                        </div>

                </div>
            </section>

            <section class="section-bg-image" id = "section_update">

                <svg viewBox="0 0 1265 144" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="rgba(255, 255, 255, 1)" d="M 0 40 C 164 40 164 20 328 20 L 328 20 L 328 0 L 0 0 Z" stroke-width="0"></path> <path fill="rgba(255, 255, 255, 1)" d="M 327 20 C 445.5 20 445.5 89 564 89 L 564 89 L 564 0 L 327 0 Z" stroke-width="0"></path> <path fill="rgba(255, 255, 255, 1)" d="M 563 89 C 724.5 89 724.5 48 886 48 L 886 48 L 886 0 L 563 0 Z" stroke-width="0"></path><path fill="rgba(255, 255, 255, 1)" d="M 885 48 C 1006.5 48 1006.5 67 1128 67 L 1128 67 L 1128 0 L 885 0 Z" stroke-width="0"></path><path fill="rgba(255, 255, 255, 1)" d="M 1127 67 C 1196 67 1196 0 1265 0 L 1265 0 L 1265 0 L 1127 0 Z" stroke-width="0"></path></svg>

                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <div class="section-bg-image-block">
                                <h2 class="mb-lg-3">Get our updates</h2>

                                <p>Stay in the loop with all the latest updates, exclusive offers, and mouthwatering recipes by subscribing to our website. Enter your email below to become a part of our cooking community and never miss a spicy beat.</p>

                                <form action="#" method="get" class="custom-form mt-lg-4 mt-2" role="form">
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-text bi-envelope" id="basic-addon1"></span>

                                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required="">

                                        <button type="submit" class="form-control">Subscribe</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

                <svg viewBox="0 0 1265 144" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="rgba(255, 255, 255, 1)" d="M 0 40 C 164 40 164 20 328 20 L 328 20 L 328 0 L 0 0 Z" stroke-width="0"></path> <path fill="rgba(255, 255, 255, 1)" d="M 327 20 C 445.5 20 445.5 89 564 89 L 564 89 L 564 0 L 327 0 Z" stroke-width="0"></path> <path fill="rgba(255, 255, 255, 1)" d="M 563 89 C 724.5 89 724.5 48 886 48 L 886 48 L 886 0 L 563 0 Z" stroke-width="0"></path><path fill="rgba(255, 255, 255, 1)" d="M 885 48 C 1006.5 48 1006.5 67 1128 67 L 1128 67 L 1128 0 L 885 0 Z" stroke-width="0"></path><path fill="rgba(255, 255, 255, 1)" d="M 1127 67 C 1196 67 1196 0 1265 0 L 1265 0 L 1265 0 L 1127 0 Z" stroke-width="0"></path></svg>
            </section>

  


            <section class="about-section section-padding" id="section_2">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center">
                            <h2 class="mb-lg-5 mb-4">About Founder</h2>
                        </div>

                        <div class="col-lg-5 col-12 mb-4 mb-lg-0 mx-auto">
                            <h3 class="mb-3">Behind the Founder: Khairul Aming</h3>

                            <p><strong>Since 1984</strong>, Our founder, a proud Kelantanese, was born and raised in the vibrant state of Kelantan, Malaysia. Armed with a burning passion for culinary arts and an insatiable curiosity, he embarked on a unique path. After completing his studies as a mechanical engineer at Harvard University, he made the bold decision to follow his true calling in the world of food. </p>

                            <p>Combining his engineering expertise with his love for cooking, he embarked on a remarkable journey, captivating the hearts and palates of Malaysians with his innovative approach to chili paste. With his relentless pursuit of culinary excellence, he has become a trailblazer, revolutionizing the industry and leaving an indelible mark as a visionary in the realm of flavor.</p>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-0 mx-auto">
                            <div class="member-block">
                                <div class="member-block-image-wrap">
                                    <img src="images/KA_yellowshirt.png" class="member-block-image img-fluid" alt="">

                                    <ul class="social-icon">
                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-twitter"></a>
                                        </li>

                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-whatsapp"></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="member-block-info d-flex align-items-center">
                                    <h4>Khairul Amin</h4>

                                    <p class="ms-auto">Founder</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


<?php include 'footer.php'?>


        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/animated-headline.js"></script>
        <script src="js/modernizr.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>