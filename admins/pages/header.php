<?php
    $url = "http://".$_SERVER['HTTP_HOST']."/envia-ya";
    #    verifying the session    #
    if(!isset($_SESSION['email'])){
        session_destroy();  
        if(headers_sent()){
            echo '<script>
                    location.assign("./");
                </script>';
        }else{
            header("Location: ./");
        }  
    }
?>
<body>
    <header>
        <!--             NAVBAR             -->
        <nav class="navbar navbar-expand-lg bg-primary fixed-top">
            <div class="container-fluid bg-primary navbar-dark">
                <!--            BRAND             -->
                <a class="navbar-brand fs-1 fw-bold" href="<?php echo $url; ?>?user=admin">Send Now!</a>     
                <!--             SEARCH BAR             -->
                    <form class="d-flex my-2 flex-grow-1 nav__form mx-5" role="search"
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
                <div class="collapse navbar-collapse flex-grow-0 me-3" id="navbarMenu">
                    <ul class="navbar-nav">
                        <!-- home -->
                        <li class="nav-item btn btn-primary fs-4">
                            <a class="nav-link" aria-current="page" href="<?php echo $url; ?>?user=admin">
                                Home
                            </a>
                        </li>
                        <!-- account -->
                        <li class="nav-item dropdown btn btn-primary fs-4">
                            <a 
                                class="nav-link dropdown-toggle" 
                                href="#" 
                                role="button" 
                                data-bs-toggle="dropdown" 
                                aria-expanded="false">
                                Categories
                            </a>
                            <!-- account dropdown -->
                            <ul class="dropdown-menu w-100">
                                <li>
                                    <a 
                                        class="dropdown-item" 
                                        href="<?php echo $url; ?>?page=users/signIn">
                                        Sign in
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <a 
                                        class="dropdown-item" 
                                        href="<?php echo $url; ?>?page=users/signUp">
                                        Sign up
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <a 
                                        class="dropdown-item" 
                                        href="<?php echo $url; ?>?page=users/myAccount">
                                        My account
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- my account -->
                        <li class="nav-item mx-2 fs-4 dropdown">
                           <a class="nav-link dropdown-toggle" href="#"
                                role="button" 
                                data-bs-toggle="dropdown" 
                                aria-expanded="false"
                            >
                               <!-- img -->
                               <img class="bg-primary object-fit-cover rounded-circle border border-light"
                                     src="images/main/ofertas/phone-1.jpeg" alt="profile-icon" style="width: 4rem;
                                height: 4rem;">
                           </a>
                           <!-- account dropdown -->
                            <ul class="dropdown-menu w-100">
                                <li>
                                    <a 
                                        class="dropdown-item" 
                                        href="<?php echo $url; ?>?page=myAccount&user=admin">
                                        My Account
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
