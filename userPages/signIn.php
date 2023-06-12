<?php
    include("../template/uHeader.php");
?>
    <section >
        <article class="py-5 d-flex flex-wrap justify-content-center">
           <h1 class="my-5 text-center w-100 fw-bpld fs-1">Sign In</h1> 
           <!-- form -->
           <form class="border p-5 w-75 rounded formAjax" action="../php/signIn.php" method="post">
               <!-- img -->
               <div class="d-flex justify-content-center">
                   <img class="w-50 border rounded-circle opacity-50 bg-light"
                        src="../images/iniciar-sesion/perfil-icon.png" alt="profile-icon">
               </div>
               <!-- email -->
               <div>
                   <input type="email" name="email" id="email" 
                       class="form-control my-4 border-0 border-bottom fs-4 form__email" 
                       placeholder="Email">
               </div>
               <!-- pass -->
               <div>
                   <input type="password" 
                       name="pass" id="pass" 
                       class="form-control border-0 border-bottom fs-4 form__pass"
                       placeholder="Password">
               </div>
               <div class="d-flex justify-content-center flex-wrap">
                   <!-- sign in -->
                   <button type="submit" 
                       class="btn btn-primary w-100 my-4 rounded-pill fs-4 form__submit">
                       Sign in
                   </button>
                   <!-- sign up -->
                   <div id="passwordHelpBlock" class="form-text">
                       You don't have a account?
                   </div>
                   <button class="btn btn-link w-100 rounded-pill fs-4 form__btn">
                       Create a new account
                   </button>
                   <div class="formRest"></div>
               </div>
           </form>
        </article>
    </section>
    <script src="../javascript/signIn.js"></script>
<?php
    include("../template/uFooter.php");
?>
