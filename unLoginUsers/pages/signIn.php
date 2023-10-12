  <main class="my-5">
    <section class="py-5 d-flex flex-wrap justify-content-center">
      <h1 class="my-5 text-center w-100 fw-bpld fs-1">Sign In</h1> 
      <!-- form -->
      <form class="border p-5 rounded" action="" method="post">
        <!-- img -->
        <figure class="d-flex justify-content-center">
          <img class="border rounded-circle opacity-50 bg-light form__img" src="global/img/unLoginProfilePicture/profile-icon.png" alt="profile-icon">
        </figure>
        <!-- email -->
        <div>
          <input type="email" name="email" id="email" class="form-control my-4 border-0 border-bottom fs-4 form__email" placeholder="Email">
        </div>
        <!-- pass -->
        <div>
          <input type="password" name="pass" id="pass" class="form-control border-0 border-bottom fs-4 form__pass" placeholder="Password">
        </div>
        <article class="d-flex justify-content-center flex-wrap">
          <!-- sign in -->
          <button type="submit" class="btn btn-primary w-100 my-4 rounded-pill fs-4 form__submit">Sign in</button>
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
  <script src="<?php echo $user; ?>js/signIn.js"></script>