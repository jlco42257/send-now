<?php
    $url = "http://".$_SERVER['HTTP_HOST']."/send-now";
?>
<body class="d-flex flex-column">
  <header>
  <!--             NAVBAR             -->
    <nav class="navbar navbar-expand-lg bg-primary">
      <div class="container-fluid bg-primary navbar-dark d-flex flex-wrap">
        <!--            BRAND             -->
        <a class="navbar-brand fs-1 fw-bold ms-2" href="<?php echo $url; ?>">Send Now!</a>     
        <!--             SEARCH BAR             -->
        <form class="d-flex my-2 flex-grow-1 nav__form mx-5 col-3 d-flex" role="search" action="products.php" method="post">
          <input class="form-control rounded-0 rounded-start-pill nav__form--input ms-0 ms-sm-5 border-light fs-4" type="search" placeholder="Search" aria-label="Search" style="height:3.2rem">
          <button class="btn btn-outline-light nav__form--button rounded-0 rounded-end-pill me-0" type="submit" style="height:3.2rem">
            <span class="material-symbols-outlined">search</span>
          </button>
        </form>
        <!--             MENU             -->
        <div class="flex-grow-0 me-0 col-auto d-flex justify-content-end" id="navbarMenu">
          <ul class="navbar-nav d-inline-block">
            <!-- account  -->
            <li class="nav-item me-4 ms-3 mx-sm-5 nav__signUp d-sm-none w-auto pt-2">
              <a class="nav-link p-0 fs-1" href="<?php echo $url; ?>?page=signUp">
                <i class="fi fi-rr-circle-user"></i>
              </a>
            </li>
            <!-- home -->
            <li class="nav-item btn btn-primary fs-4 d-none d-lg-inline-block">
              <a class="nav-link" aria-current="page" href="<?php echo $url; ?>">Home</a>
            </li>
            <!-- sign up  -->
            <li class="nav-item mx-2 fs-4 btn btn-outline-light rounded-pill nav__signUp d-none d-sm-inline-block">
              <a class="nav-link" href="<?php echo $url; ?>?page=signUp">Sign Up</a>
            </li>
            <!-- sign in -->
            <li class="nav-item mx-2 fs-4 btn btn-outline-dark rounded-pill nav__signIn d-none d-sm-inline-block">
              <a class="nav-link" href="<?php echo $url; ?>?page=signIn">Sign In</a>
            </li>
          </ul>
        </div>
        <!-- categories -->
        <ul class="col-12 d-flex justify-content-center nav border-top border-dark-subtle mt-2" data-bs-theme="dark">
          <li class="text-capitalize nav-item text-light">
            <a class="nav-link" href="categories">categories</a>
          </li>
          <li class="text-capitalize mx-5 nav-item text-light">
            <a class="nav-link" href="sales">sales</a>
          </li>
          <li class="text-capitalize nav-item text-light">
            <a class="nav-link" href="#companies">companies</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>