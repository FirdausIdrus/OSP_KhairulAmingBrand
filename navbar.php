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
                    <input type="password" name="password" id="member-login-password" class="form-control" placeholder="315759" required="">
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