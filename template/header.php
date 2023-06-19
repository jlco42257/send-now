<?php
    $url = "http://".$_SERVER['HTTP_HOST']."/envia-ya";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send now!</title>
    <!--             BOOTSTRAP CSS             -->
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
        crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="pages_styles/header-footer.css">
</head>
<body>
    <header>
        <!--             NAVBAR             -->
        <nav class="navbar navbar-expand-lg bg-primary">
            <div class="container-fluid bg-primary navbar-dark fixed-top">
                <!--            BRAND             -->
                <a class="navbar-brand fs-1 fw-bold" href="<?php echo $url; ?>">Send Now!</a>     
                <!--             COLLAPSE BUTTON             -->
                <button 
                    class="navbar-toggler nav__container--button" 
                    type="button" 
                    data-bs-toggle="collapse" 
                    data-bs-target="#navbarMenu" 
                    aria-controls="navbarMenu" 
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!--             MENU             -->
                <div class="collapse navbar-collapse" id="navbarMenu">
                    <ul class="navbar-nav me-5">
                        <!-- home -->
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" 
                                href="<?php echo $url; ?>">
                                Home
                            </a>
                        </li>
                        <!-- products -->
                        <li class="nav-item">
                           <a class="nav-link" href="<?php echo $url; ?>?page=products">Products</a> 
                        </li>
                        <!-- account -->
                        <li class="nav-item dropdown">
                            <a 
                                class="nav-link dropdown-toggle" 
                                href="#" 
                                role="button" 
                                data-bs-toggle="dropdown" 
                                aria-expanded="false">
                                Account
                            </a>
                            <!-- account dropdown -->
                            <ul class="dropdown-menu">
                                <li>
                                    <a 
                                        class="dropdown-item" 
                                        href="<?php echo $url; ?>?page=signIn">
                                        Sign in
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <a 
                                        class="dropdown-item" 
                                        href="<?php echo $url; ?>?page=signUp">
                                        Sign up
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <a 
                                        class="dropdown-item" 
                                        href="<?php echo $url; ?>?page=signIn">
                                        My account
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!--             SEARCH BAR             -->
                    <form class="d-flex my-2 nav__form flex-grow-1" role="search"
                         action="products.php" method="post">
                        <input 
                             class="form-control me-2 nav__form--input" 
                             type="search" placeholder="Search" 
                             aria-label="Search">
                        <button 
                            class="btn btn-outline-light nav__form--button" 
                            type="submit">
                            Search
                        </button>
                    </form>
                </div>
            </div>
        </nav>
    </header>