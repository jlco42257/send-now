<article class="bg-light mt-5">
    <h2 class="text-capitalize text-primary text-center pt-5 my-5 fw-bold fs-1">add admin profiles</h2>

    <section class="py-5 mb-5 d-flex flex-wrap justify-content-center">
    <!-- form -->
    <form class="border p-5 rounded form" action="" method="post">
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
               <div class="d-flex justify-content-center flex-wrap">
                   <!-- sign in -->
                   <button type="submit" 
                       class="btn btn-primary w-100 my-4 rounded-pill fs-4">
                       add admin
                   </button>
               </div>
               <?php
                   if(isset($_POST['pass'])){
                       include($user."php/".$_GET['page'].".php");
                   }
               ?>
           </form>
    </section>
</article>