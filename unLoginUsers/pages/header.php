<?php
    $url = "http://".$_SERVER['HTTP_HOST']."/send-now";
?>
<body>
    <header>
        <!--             NAVBAR             -->
        <nav class="navbar navbar-expand-lg bg-primary fixed-top">
            <div class="container-fluid bg-primary navbar-dark">
                <!--            BRAND             -->
                <a class="navbar-brand fs-1 fw-bold" href="<?php echo $url; ?>">Send Now!</a>     
                <!--             SEARCH BAR             -->
                    <form class="d-flex my-2 flex-grow-1 nav__form mx-5 d-none d-md-flex" role="search"
                         action="products.php" method="post">
                        <input 
                             class="form-control rounded-0 rounded-start-pill nav__form--input ms-5 border-light fs-4" 
                             type="search" placeholder="Search" 
                             aria-label="Search">
                        <button 
                            class="btn btn-outline-light nav__form--button rounded-0 rounded-end-pill me-5" 
                            type="submit">
                            <span class="material-symbols-outlined">
                                search
                            </span>
                        </button>
                    </form>
                <!--             MENU             -->
                <div class="flex-grow-0 me-3 col-6 col-md-auto d-flex justify-content-end" id="navbarMenu">
                    <ul class="navbar-nav d-inline-block">
                        <!-- account  -->
                        <li class="nav-item mx-2 nav__signUp d-lg-none">
                           <a class="nav-link p-0" href="<?php echo $url; ?>?page=signUp">
                           <span class="material-symbols-outlined fs-1">
                                account_circle
                           </span>
                           </a>
                        </li>
                        <!-- home -->
                        <li class="nav-item btn btn-primary fs-4 d-none d-lg-inline-block">
                            <a class="nav-link" aria-current="page" href="<?php echo $url; ?>">
                                Home
                            </a>
                        </li>
                        <!-- sign up  -->
                        <li class="nav-item mx-2 fs-4 btn btn-outline-light rounded-pill nav__signUp d-none d-lg-inline-block">
                           <a class="nav-link" href="<?php echo $url; ?>?page=signUp">
                               Sign Up
                           </a>
                        </li>
                        <!-- sign in -->
                        <li class="nav-item mx-2 fs-4 btn btn-outline-dark rounded-pill nav__signIn d-none d-lg-inline-block">
                           <a class="nav-link" href="<?php echo $url; ?>?page=signIn">
                               Sign In
                           </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
