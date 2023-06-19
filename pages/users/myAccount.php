<?php
    include("php/main.php");
?>
<section class="bg-light p-2">
    <h2 class="pt-5 my-5 text-center fs-1 fw-bold">My Account</h2>
    <!-- img -->
    <div class="d-flex justify-content-center">
        <img class="w-50 border rounded-circle opacity-50 bg-primary"
             src="images/header/profile-icon.png" alt="profile-icon">
    </div>
    <p class="fs-1 fw-bold text-center"><?php echo $_SESSION['userName']; ?></p>
    <!-- shopping -->
    <h2 class="fs-2 my-5">My shopping</h2>
    <article class="dropdown-center">
        <button class="btn btn-outline-light my-1 text-dark btn-lg col-12 border border-primary-subtle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Purchased Products
        </button>
        <ul class="dropdown-menu col-12">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Action two</a></li>
            <li><a class="dropdown-item" href="#">Action three</a></li>
        </ul>
    </article>
    <!-- money -->
    <article class="dropdown-center">
        <button class="btn btn-outline-light my-1 text-dark btn-lg col-12 border border-primary-subtle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Spent Money
        </button>
        <ul class="dropdown-menu col-12">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Action two</a></li>
            <li><a class="dropdown-item" href="#">Action three</a></li>
        </ul>
    </article>
    <!-- car -->
    <article class="dropdown-center">
        <button class="btn btn-outline-light my-1 text-dark btn-lg col-12 border border-primary-subtle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Shopping Cart
        </button>
        <ul class="dropdown-menu col-12">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Action two</a></li>
            <li><a class="dropdown-item" href="#">Action three</a></li>
        </ul>
    </article>
    <!-- products -->
    <h2 class="fs-2 my-5">My products</h2>
    <article class="dropdown-center">
        <button class="btn btn-outline-light my-1 text-dark btn-lg col-12 border border-primary-subtle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Published Products
        </button>
        <ul class="dropdown-menu col-12">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Action two</a></li>
            <li><a class="dropdown-item" href="#">Action three</a></li>
        </ul>
    </article>
    <!-- sold -->
    <article class="dropdown-center">
        <button class="btn btn-outline-light my-1 text-dark btn-lg col-12 border border-primary-subtle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Sold Products
        </button>
        <ul class="dropdown-menu col-12">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Action two</a></li>
            <li><a class="dropdown-item" href="#">Action three</a></li>
        </ul>
    </article>
    <!-- money -->
    <article class="dropdown-center">
        <button class="btn btn-outline-light my-1 text-dark btn-lg col-12 border border-primary-subtle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Money Entered
        </button>
        <ul class="dropdown-menu col-12">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Action two</a></li>
            <li><a class="dropdown-item" href="#">Action three</a></li>
        </ul>
    </article>
    <!-- balance -->
    <h2 class="fs-2 my-5">My money</h2>
    <article class="dropdown-center">
        <button class="btn btn-outline-light my-1 text-dark btn-lg col-12 border border-primary-subtle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Balance
        </button>
        <ul class="dropdown-menu col-12">
            <li class="dropdown-item fs-2 text-center">Your balance is :
               <?php 
                   $email = $_SESSION['email'];
                   $balance = connect();
                   $balance = $balance->query("SELECT * from users where email='$email'");
                   $balance = $balance->fetch();
                   echo strval($balance['balance']);
               ?> 
            </li>
        </ul>
    </article>
    <!-- top up -->
    <article>
        <button class="btn btn-outline-light my-1 text-dark btn-lg col-12 border border-primary-subtle topUp__button" type="button">
            Top Up Balance
        </button>
    </article>
    <article class="d-none topUp__form d-flex justify-content-center my-3">
        <form class="border p-5 w-75 rounded formAjax" action="php/myAccount.php" method="post">
               <!-- balance -->
               <div>
                   <input type="number" name="balance" id="balance" 
                       class="form-control my-4 border-0 border-bottom fs-4 form__balance" 
                       placeholder="Balance">
               </div>
               <!-- phone number -->
               <div>
                   <input type="number" name="phoneNumber" id="phoneNumber" 
                       class="form-control my-4 border-0 border-bottom fs-4 form__phone" 
                       placeholder="Phone Number">
               </div>
               <!-- pass -->
               <div>
                   <input type="password" 
                       name="pass" id="pass" 
                       class="form-control border-0 border-bottom fs-4 form__pass"
                       placeholder="Password">
               </div>
               <div class="d-flex justify-content-center flex-wrap">
                   <!-- top up balance -->
                   <button type="submit" 
                       class="btn btn-primary w-100 my-4 rounded-pill fs-4">
                       Top Up Balance
                   </button>
               </div>
               <div class="formRest"></div>
           </form>
    </article>
    <!-- coupons -->
    <article class="dropdown-center">
        <button class="btn btn-outline-light my-1 text-dark btn-lg col-12 border border-primary-subtle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Coupons
        </button>
        <ul class="dropdown-menu col-12">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Action two</a></li>
            <li><a class="dropdown-item" href="#">Action three</a></li>
        </ul>
    </article>
    <!-- log out -->
    <article class="my-5">
        <a class="btn btn-primary btn-lg col-5 mx-5 logOut__button" role="button">Log out</a>
    <!-- edit profile -->
        <a class="btn btn-primary btn-lg col-5 mx-5" href="editProfile.php" role="button">Edit profile</a>
    </article>
</section>
<script src="userJs/myAccount.js"></script>
<script src="javascript/ajax.js"></script>
