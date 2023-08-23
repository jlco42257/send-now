    <section class="my-5">
        <article class="py-5 d-flex flex-wrap justify-content-center">
           <h1 class="my-5 text-center w-100 fw-bpld fs-1">Sign Up</h1> 
           <!-- form -->
           <form class="border p-5 rounded form" action="" method="post">
               <!-- img -->
               <div class="d-flex justify-content-center">
                   <img class="form__img border rounded-circle opacity-50 bg-light"
                        src="global/img/unLoginProfilePicture/profile-icon.png" alt="profile-icon">
               </div>
               <!-- name -->
               <div>
                   <input type="text" name="name" id="name" 
                       class="form-control my-4 border-0 border-bottom fs-4" 
                       placeholder="Name" required>
               </div>
               <!-- last name -->
               <div>
                   <input type="text" name="lastName" id="lastName" 
                       class="form-control my-4 border-0 border-bottom fs-4" 
                       placeholder="Last Name" required>
               </div>
               <!-- username -->
               <div>
                   <input type="text" name="userName" id="userName" 
                       class="form-control my-4 border-0 border-bottom fs-4" 
                       placeholder="Username" required>
               </div>
               <!-- country -->
               <div>
                   <input type="text" name="country" id="country" 
                       class="form-control my-4 border-0 border-bottom fs-4" 
                       placeholder="Country" required>
               </div>
               <!-- phone -->
               <div>
                   <input type="number" name="phone" id="phone" 
                       class="form-control my-4 border-0 border-bottom fs-4" 
                       placeholder="Phone Number" required>
               </div>
               <!-- email -->
               <div>
                   <input type="email" name="email" id="email" 
                       class="form-control my-4 border-0 border-bottom fs-4" 
                       placeholder="Email" required>
               </div>
               <!-- pass -->
               <div>
                   <input type="password" name="pass" id="pass" 
                       class="form-control my-4 border-0 border-bottom fs-4" 
                       placeholder="Password" required>
               </div>
               <!-- pass confirm -->
               <div>
                   <input type="password" 
                       name="confirmPass" id="confirmPass" 
                       class="form-control border-0 border-bottom fs-4"
                       placeholder="Confirm Password"
                       required>
               </div>
               <div class="d-flex justify-content-center flex-wrap">
                   <!-- sign in -->
                   <button type="submit" 
                       class="btn btn-primary w-100 my-4 rounded-pill fs-4">
                       Sign up
                   </button>
                   <!-- sign up -->
                   <div id="passwordHelpBlock" class="form-text">
                       You have a account?
                   </div>
                   <button type="submit" class="btn btn-link w-100 rounded-pill fs-4 form__btn">
                       Sign in
                   </button>
                   <div class="formRest"></div>
               </div>
               <?php
                   if(isset($_POST['name']) && isset($_POST['lastName']) && isset($_POST['userName']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['confirmPass'])){
                       include($user."php/".$_GET['page'].".php");
                   }
               ?>
           </form>
        </article>
    </section>
    <script src="<?php echo $user; ?>js/signUp.js"></script>
