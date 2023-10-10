<?php
    $url = "http://".$_SERVER['HTTP_HOST']."/send-now";
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
      <a class="navbar-brand fs-1 fw-bold" href="<?php echo $url; ?>?user=client">Send Now!</a>     
<!--             SEARCH BAR             -->
      <form class="d-none d-sm-flex my-2 flex-grow-1 nav__form mx-5" role="search" action="products.php" method="post">
        <input class="form-control rounded-0 rounded-start-pill nav__form--input ms-5 border-light fs-4" type="search" placeholder="Search" style="min-height: 4rem;"aria-label="Search">
        <button class="btn btn-outline-light nav__form--button rounded-0 rounded-end-pill me-5" type="submit">
          <span class="material-symbols-outlined">search</span>
        </button>
      </form>
<!--             MENU             -->
      <div class="flex-grow-0" id="navbarMenu">
        <ul class="navbar-nav d-flex flex-row">
        <!-- home -->
          <li class="nav-item btn btn-primary fs-4 d-none d-md-flex">
            <a class="nav-link" aria-current="page" href="<?php echo $url; ?>?user=client">Home</a>
          </li>
          <!-- CATEGORIES -->
          <li class="nav-item dropdown btn btn-primary fs-4 d-none d-md-flex">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categories</a>
          <!-- categories dropdown -->
            <ul class="dropdown-menu w-100">
              <li>
                <a class="dropdown-item" href="<?php echo $url; ?>?page=users/signIn">Sign in</a>
              </li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <a class="dropdown-item" href="<?php echo $url; ?>?page=users/signUp">Sign up</a>
              </li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <a class="dropdown-item" href="<?php echo $url; ?>?page=users/myAccount">My account</a>
              </li>
            </ul>
          </li>
          <!-- shopping car  -->
          <li class="nav-item mx-2 fs-4">
            <a class="nav-link text-light" href="<?php echo $url; ?>?page=users/signUp">
              <span class="material-symbols-outlined pt-2 nav-link">shopping_cart</span>
            </a>
          </li>
          <!-- my account -->
          <li class="nav-item ms-2 fs-4 dropdown">
            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#myAccountOffcanva" aria-controls="offcanvasExample">
            <!-- img -->
              <img class="bg-primary object-fit-cover rounded-circle border border-light" src="global/img/home/products/phone-1.jpeg" alt="profile-icon" style="width: 4rem;height: 4rem;">
            </button>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<section class="bg-primary mt-5 pt-5">
<!--             SEARCH BAR             -->
  <form class="d-flex d-sm-none my-2 flex-grow-1 nav__form mx-5" role="search" action="products.php" method="post">
    <input class="form-control rounded-0 rounded-start-pill nav__form--input ms-5 border-light fs-4" type="search" placeholder="Search" style="min-height: 4rem;" aria-label="Search">
    <button class="btn btn-outline-light nav__form--button rounded-0 rounded-end-pill me-5" type="submit">
      <span class="material-symbols-outlined">search</span>
    </button>
  </form>
</section>