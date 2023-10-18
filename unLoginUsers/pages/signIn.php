  <main class="flex-grow-1 d-flex flex-column justify-content-center">
    <section class="pb-5 d-flex flex-wrap justify-content-center">
      <!-- form -->
      <form class="border p-5 mt-5 rounded col-9 col-sm-7 col-md-6 col-lg-3 d-flex flex-column justify-content-evenly" action="" method="post">
        <h1 class="text-center mb-5 w-100 fw-bold fs-2 text-capitalize">sign in</h1>
        <!-- img -->
        <figure class="d-flex justify-content-center h-50">
          <img class="border rounded-circle opacity-50 bg-light form__img w-50" src="global/img/unLoginProfilePicture/profile-icon.png" alt="profile-icon">
        </figure>
        <!-- email -->
        <div>
          <input type="email" name="email" id="email" class="form-control my-4 border-0 border-bottom fs-4 form__email text-capitalize" placeholder="email">
        </div>
        <!-- pass -->
        <div>
          <input type="password" name="pass" id="pass" class="form-control border-0 border-bottom fs-4 form__pass text-capitalize" placeholder="password">
        </div>
        <article class="d-flex justify-content-center flex-wrap">
          <!-- sign in -->
          <button type="submit" class="btn btn-primary w-100 my-4 rounded-pill fs-3 form__submit">Sign in</button>
          <!-- sign up -->
          <span id="passwordHelpBlock" class="form-text">You don't have a account?</span>
          <button class="btn btn-link w-100 rounded-pill fs-4 form__btn">Create a new account</button>
        </article>
        <?php
          if(isset($_POST['email']) && isset($_POST['pass'])){
            require_once $user."php/signIn.php";
          }
        ?>
      </form>
    </section>
  </main>
  <style>
    .form__img{
      max-height: 10rem;
      max-width: 10rem;
    }
  </style>
  <script src="<?php echo $user; ?>js/signIn.js"></script>