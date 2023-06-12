<?php
    include("../template/header.php");
?>
    <section >
        <article class="py-5 d-flex flex-wrap justify-content-center">
           <h1 class="my-5 text-center w-100 fw-bpld fs-1">Sign Up</h1> 
           <!-- form -->
           <form class="border p-5 w-75 rounded formAjax" action="../php/signUp.php" method="post">
               <!-- img -->
               <div class="d-flex justify-content-center">
                   <img class="w-50 border rounded-circle opacity-50 bg-light"
                        src="../images/header/profile-icon.png" alt="profile-icon">
               </div>
               <!-- name -->
               <div>
                   <input type="text" name="name" id="name" 
                       class="form-control my-4 border-0 border-bottom fs-4" 
                       placeholder="Name">
               </div>
               <!-- last name -->
               <div>
                   <input type="text" name="lastName" id="lastName" 
                       class="form-control my-4 border-0 border-bottom fs-4" 
                       placeholder="Last Name">
               </div>
               <!-- username -->
               <div>
                   <input type="text" name="userName" id="userName" 
                       class="form-control my-4 border-0 border-bottom fs-4" 
                       placeholder="Username">
               </div>
               <!-- phone -->
               <div>
                   <input type="number" name="phone" id="phone" 
                       class="form-control my-4 border-0 border-bottom fs-4" 
                       placeholder="Phone Number">
               </div>
               <!-- email -->
               <div>
                   <input type="email" name="email" id="email" 
                       class="form-control my-4 border-0 border-bottom fs-4" 
                       placeholder="Email">
               </div>
               <!-- pass -->
               <div>
                   <input type="password" name="pass" id="pass" 
                       class="form-control my-4 border-0 border-bottom fs-4" 
                       placeholder="Password">
               </div>
               <!-- pass confirm -->
               <div>
                   <input type="password" 
                       name="confirmPass" id="confirmPass" 
                       class="form-control border-0 border-bottom fs-4"
                       placeholder="Confirm Password">
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
           </form>
        </article>
    </section>
    <script src="../javascript/signUp.js"></script>
<?php
    include("../template/footer.php");
?>
