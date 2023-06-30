<?php
    $url = "http://".$_SERVER['HTTP_HOST']."/envia-ya";
?>
<body>
    <header>
        <!--             NAVBAR             -->
        <nav class="navbar navbar-expand-lg bg-primary fixed-top">
            <div class="container-fluid bg-primary navbar-dark">
                <!--            BRAND             -->
                <a class="navbar-brand fs-1 fw-bold" href="<?php echo $url; ?>">Send Now!</a>     
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
                            <a class="nav-link" aria-current="page" href="<?php echo $url; ?>">
                                Home
                            </a>
                        </li>
                        <!-- shopping car  -->
                        <li class="nav-item mx-2 fs-4 btn btn-outline-light rounded-pill nav__signUp">
                           <a class="nav-link" href="<?php echo $url; ?>?page=signUp">
                               Sign Up
                           </a>
                        </li>
                        <!-- sign in -->
                        <li class="nav-item mx-2 fs-4 btn btn-outline-dark rounded-pill nav__signIn">
                           <a class="nav-link" href="<?php echo $url; ?>?page=signIn">
                               Sign In
                           </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
