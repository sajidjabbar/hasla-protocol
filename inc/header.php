<header id="header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <div class="logo-wrapper">
                    <a href="#">
                        <figure>
                            <img src="img/logo.png" class="img-fluid" alt="">
                        </figure>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="menu-wrapper">
                    <ul class="navbar-nav flex-row">
                        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="about.php" class="nav-link">About us</a></li>
                        <li class="nav-item"><a href="exchange.php" class="nav-link">Exchange</a></li>
                        <li class="nav-item"><a href="contactus.php" class="nav-link">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="header-cta-wrapper">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        data-bs-whatever="@mdo">Register Now <i class="fa fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Login modal starts here -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="login-form-wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="img-wrapper">
                            <figure>
                                <img src="img/login-img.png" class="img-fluid" alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="login-wrapper">
                            <div class="heading-wrapper">
                                <h2>Login</h2>
                            </div>
                            <div class="login-para-wrapper">
                                <p>Welcome Back to <span>Hasla Protocol</span></p>
                                <a href="#" class="Member">Not a Member ?</a> <a href="#" class="Register">Register</a>
                            </div>
                            <div class="form-wrapper">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="Password" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Remember Me
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <a class="for" href="#">Forgot Password ?</a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn" type="submit">Sign In <i class="fa fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login modal starts here -->