<section class="bg-light p-2 mt-5">
    <h2 class="pt-5 my-5 text-center fs-1 fw-bold">My Account</h2>
    <!-- img -->
    <div class="d-flex justify-content-center mx-auto border rounded-circle img_c bg-dark overflow-hidden">
        <img class="bg-primary object-fit-fill"
             src="images/main/ofertas/phone-1.jpeg" alt="profile-icon">
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
    <!-- log out -->
    <article class="my-5">
        <a class="btn btn-primary btn-lg col-5 mx-5 logOut__button" role="button">Log out</a>
    <!-- edit profile -->
        <a class="btn btn-primary btn-lg col-5 mx-5" href="<?php echo $url; ?>?page=users/editProfile" role="button">Edit profile</a>
    </article>
</section>
<script src="<?php echo $user; ?>js/myAccount.js"></script>
<script src="javascript/ajax.js"></script>
