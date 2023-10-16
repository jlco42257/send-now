  <main class="flex-grow-1 d-flex flex-column justify-content-center">
    <section class="pb-5 d-flex flex-wrap justify-content-center">
      <!-- form -->
      <form class="border p-5 pb-0 rounded form col-10 col-sm-7 col-md-6 mt-5" action="" method="post">
        <h1 class="text-center w-100 fw-bold fs-2 text-capitalize">sign up</h1>
        <!-- img -->
        <figure class="d-flex justify-content-center">
          <img class="form__img border rounded-circle opacity-50 bg-light w-50 h-25"src="global/img/unLoginProfilePicture/profile-icon.png" alt="profile-icon">
        </figure>
        <!-- name and last name -->
        <div class="d-flex">
          <input type="text" name="name" id="name" class="form-control m-4 border-0 border-bottom fs-4 w-50 text-capitalize" placeholder="name" required>
          <input type="text" name="lastName" id="lastName" class="form-control m-4 border-0 border-bottom fs-4 w-50 text-capitalize" placeholder="last name" required>
        </div>
        <!-- username and country -->
        <div class="d-flex">
          <input type="text" name="userName" id="userName" class="form-control m-4 border-0 border-bottom fs-4 w-50 text-capitalize" placeholder="username" required>
          <input type="text" name="country" id="country" class="form-control m-4 border-0 border-bottom fs-4 w-50 text-capitalize" placeholder="country" required>
        </div>
        <!-- phone and email -->
        <div class="d-flex">
          <input type="number" name="phone" id="phone" class="form-control m-4 border-0 border-bottom fs-4 w-50 text-capitalize" placeholder="phone number" required>
          <input type="email" name="email" id="email" class="form-control m-4 border-0 border-bottom fs-4 w-50 text-capitalize" placeholder="email" required>
        </div>
        <!-- pass and confirm -->
        <div class="d-flex">
          <input type="password" name="pass" id="pass" class="form-control m-4 border-0 border-bottom fs-4 text-capitalize" placeholder="password" required>
          <input type="password" name="confirmPass" id="confirmPass" class="form-control m-4 border-0 border-bottom fs-4 text-capitalize"placeholder="confirm password" required>
        </div>
        <article class="d-flex justify-content-center flex-wrap">
          <!-- sign in -->
          <button type="submit" class="btn btn-primary w-100 my-4 rounded-pill fs-4">Sign up</button>
          <!-- sign up -->
          <span id="passwordHelpBlock" class="form-text">You have a account?</span>
          <button type="submit" class="btn btn-link w-100 rounded-pill fs-4 form__btn">Sign in</button>
        </article>
        <?php
          if(isset($_POST['name']) && isset($_POST['lastName']) && isset($_POST['userName']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['confirmPass'])){
            include($user."php/".$_GET['page'].".php");
          }
        ?>
      </form>
    </section>
  </main>
  <script src="<?php echo $user; ?>js/signUp.js"></script>