<?php
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$first_part = $components[1];
$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>

<header id="header" class="<?= ($activePage == 'index') ? 'home' : ''; ?>">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <div class="logo-wrapper">
                    <a href="index.php">
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
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" onclick="location.href='exchange.php'" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Buy Crypto
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="exchange-trade.php">Trading</a></li>
                                <li><a class="dropdown-item" href="exchange.php">Exchange</a></li>
                                <li><a class="dropdown-item" href="staking.php">Staking</a></li>
                                <li><a class="dropdown-item" href="pricing.php">Cloud Mining</a></li>
                            </ul>
                        </li>

                        <!-- <li class="nav-item"><a href="exchange.php" class="nav-link"></a></li> -->
                        <li class="nav-item"><a href="contactus.php" class="nav-link">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="header-cta-wrapper">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Register Now <i class="fa fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Login modal starts here -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <i class="fa fa-close"></i>
            </button>
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
                                <a href="#" class="Member">Not a Member ?</a> <button type="button" class="Register" data-bs-toggle="modal" data-bs-target="#Register_modal" data-bs-whatever="@mdo">Register</button>
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
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
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
<!-- REGISTER modal starts here -->
<div class="modal fade" id="Register_modal" tabindex="-1" aria-labelledby="Register_modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <i class="fa fa-close"></i>
            </button>
            <div class="login-form-wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="img-wrapper">
                            <figure>
                                <img src="img/register-bg.png" class="resgister img-fluid" alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="login-wrapper">
                            <div class="heading-wrapper">
                                <h2>Sign Up</h2>
                            </div>
                            <div class="form-wrapper">
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" placeholder="First Name">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Contact" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="Password" placeholder="Password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="Password" placeholder="Confirm Passwrod" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button class="btn" type="submit">Register <i class="fa fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- REGISTER modal starts here -->