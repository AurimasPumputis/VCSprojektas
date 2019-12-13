<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Movie Store</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="fontawesome-free-5.11.2-web/css/all.min.css">
    </head>

    <body>
        <div class="container"> <!-- container pradžia -->
            <div class="logo"><a href="index.php"><img src="images/logo.png" alt="Movie Store logo"></a></div> <!-- logo -->
            <div class="nav"> <!-- nav pradžia -->
                <ul class="nav-flex">
                    <li class="nav-only-big">
                        <div class="nav-icon"><a href="index.php"><i id="nav-home" class="fas fa-home fa-lg"></i></a></div>
                        <span id="nav-home-text"><a class="nav-text-color" href="index.php">Home</a></span>
                    </li>
                    <li class="nav-only-big">
                        <div class="nav-icon"><a href="movies.php"><i id="nav-movies" class="fas fa-film fa-lg"></i></a></div>
                        <span id="nav-movies-text"><a class="nav-text-color" href="movies.php">Movies</a></span>
                    </li>
                    <li class="nav-only-big">
                        <div class="nav-icon"><a href="tv.php"><i id="nav-tv" class="fas fa-tv fa-lg"></i></a></div>
                        <span id="nav-tv-text"><a class="nav-text-color" href="tv.php">TV Shows</a></span>
                    </li>
                    <li class="nav-only-big">
                        <div class="nav-icon"><a href="lists.php"><i id="nav-lists" class="fas fa-list-alt fa-lg"></i></a></div>
                        <span id="nav-lists-text"><a class="nav-text-color" href="lists.php">My Lists</a></span>
                    </li>
                    <li class="nav-only-big">
                        <div class="nav-icon"><a href="contact.php"><i id="nav-contact" class="far fa-envelope fa-lg"></i></a></div>
                        <span id="nav-contact-text"><a class="nav-text-color" href="contact.php">Contact us</a></span>
                    </li>
                    <li class="burger">
                        <a id="burger-icon" href="javascript:void(0);"><i class="fas fa-bars fa-lg"></i></a>
                        <div id="nav-burger">
                            <span class="nav-burger-item"><a href="index.php">Home</a></span>
                            <span class="nav-burger-item"><a href="movies.php">Movies</a></span>
                            <span class="nav-burger-item"><a href="tv.php">TV Shows</a></span>
                            <span class="nav-burger-item"><a href="lists.php">My Lists</a></span>
                            <span class="nav-burger-item"><a href="contact.php">Contact us</a></span>

                            <?php 
                                if (isset($_SESSION['u_email'])) :
                            ?>

                            <span class="nav-burger-item"><a href="settings.php">Settings</a></span>
                            <span class="nav-burger-item"><a href="includes/logout.inc.php">Logout</a></span>

                            <?php else: ?>

                            <span class="nav-burger-item"><a href="login.php">Login</a></span>
                            <span class="nav-burger-item"><a href="signup.php">Register</a></span>
                            
                            <?php endif; ?>

                        </div>
                    </li>

                </ul>
            </div> <!-- nav pabaiga -->
            <div class="fill"></div> <!-- užpildymui, kad nav geriau išsirikiuotų -->
            <div class="user-nav"> <!-- user-nav pradžia -->
                <ul class="user-nav-flex">
                    <li>
                        <?php 
                            if (isset($_SESSION['u_email'])) :
                        ?>

                        <div class="nav-icon"><a href="settings.php"><i id="nav-settings" class="fas fa-users-cog fa-lg"></i></a></div>
                        <span id="nav-settings-text"><a class="nav-text-color" href="settings.php">Settings</a></span>

                        <?php else : ?>

                        <div class="nav-icon"><a href="#"><i id="nav-register" class="fas fa-user-plus fa-lg"></i></a></div>
                        <span id="nav-register-text"><a class="nav-text-color" href="#">Register</a></span>
                        <div id="register-content" class="hide"> <!-- register-content pradžia -->
                            <form id="register-form" action="includes/signup.inc.php" method="post">
                                <fieldset id="register-info">
                                    <input id="reg-username" type="email" placeholder="E-mail" name="email" required>
                                    <input id="reg-pass" type="password" placeholder="Password" name="pwd" required>
                                    <input id="pass-confirm" type="password" placeholder="Please confirm your password" name="pwd_confirm" required>
                                </fieldset>
                                <fieldset id="register-submit">
                                    <button id="register-btn" type="submit" name="submit">Register</button>
                                </fieldset>
                            </form>
                        </div> <!-- register-content pabaiga -->

                        <?php endif; ?>

                    </li>
                    <li>
                        <?php 
                            if (isset($_SESSION['u_email'])) :
                        ?>

                        <div class="nav-icon"><a href="includes/logout.inc.php"><i id="nav-logout" class="fas fa-sign-out-alt fa-lg"></i></i></a></div>
                        <span id="nav-logout-text"><a class="nav-text-color" href="includes/logout.inc.php">Logout</a></span>

                        <?php else : ?>

                        <div class="nav-icon"><a href="#"><i id="nav-login" class="fas fa-sign-in-alt fa-lg"></i></a></div>
                        <span id="nav-login-text"><a class="nav-text-color" href="#">Log in</a></span>
                        <div id="login-content" class="hide"> <!-- login-content pradžia -->
                            <form id="login-form" action="includes/login.inc.php" method="post">
                                <fieldset id="login-info">
                                    <input id="login-username" type="email" placeholder="E-mail" name="email" required>
                                    <input id="login-pass" type="password" placeholder="Password" name="pwd" required>
                                </fieldset>
                                <fieldset id="login-submit">
                                    <button id="login-btn" type="submit" name="submit">Log in</button>
                                </fieldset>
                            </form>
                        </div> <!-- login-content pabaiga -->

                        <?php endif; ?>

                    </li>
                </ul>
            </div> <!-- user-nav pabaiga -->
            <div class="featured-image"> <!-- featured-image pradžia -->
                <div id="btn-align">
                    <button id="featured-btn">WATCH NOW</button>
                </div>
                <div class="featured-image-content"> <!-- featured-image-content pradžia -->
                    <div class="featured-image-overlay"> <!-- featured-image-overlay pradžia -->
                        <div class="featured-image-left"><!-- featured-image-left pradžia -->
                            <h3 id="published-text">Published</h3>
                            <p id="published-date">Feb 20, 2014</p>
                            <h3 id="updated-text">Updated</h3>
                            <p id="updated-date">Feb 20, 2014</p>
                            <h3>Rating</h3>
                            <p><i class="fas fa-star fa-sm"></i></p>
                            <p><i class="fas fa-star fa-sm"></i></p>
                            <p><i class="fas fa-star fa-sm"></i></p>
                            <p><i class="fas fa-star fa-sm"></i></p>
                            <p><i class="far fa-star fa-sm"></i></p>
                        </div> <!-- featured-image-left pabaiga -->
                        <div class="featured-image-right"> <!-- featured-image-right pradžia -->
                            <p><i class="far fa-heart fa-sm"></i></p>
                            <h3>2,548</h3>
                            <p><i class="far fa-comments fa-sm"></i></p>
                            <h3>21</h3>
                            <p><i class="far fa-save fa-sm"></i></p>
                            <h3>564</h3>
                        </div><!-- featured-image-right pabaiga -->
                    </div> <!-- featured-image-overlay pabaiga -->
                </div> <!-- featured-image-content pabaiga -->
            </div> <!-- featured-image pabaiga -->
