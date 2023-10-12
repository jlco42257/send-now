<main class="bg-light py-5">
  <h2 class="mb-5 text-center fs-1 fw-bold text-primary text-capitalize">edit profile</h2>
  <figure class="d-flex justify-content-center flex-wrap">
    <img class="profile__img w-25 h-25 rounded-circle" src="users/profileImg/phone-1.jpeg">
    <figcaption class="col-12 text-center">
      <span class="fw-bold">
        <?php
          echo $_SESSION['userName'];
        ?>
      </span>
      <span>
        <?php
          echo $_SESSION['name']." ".$_SESSION['lastName']
        ?>
      </span>
    </figcaption>
  </figure>
  <form class="border p-5 rounded mx-5" method="post" action="">
    <div class="d-flex mb-3">
      <label class="text-capitalize fs-4 w-50">change user name:</label>
      <input type="text" name="newUserName" id="name" 
                       class="ms-2 ps-2 border-0 border-bottom fs-4 m-0 text-dark w-50" value="<?php echo $_SESSION['userName'] ?>">
    </div>
    <div class="d-flex my-3">
      <label class="text-capitalize fs-4 w-50">add phone number:</label>
      <input type="number" name="newPhone" class="ms-2 ps-2 border-0 border-bottom fs-4 m-0 text-dark w-50">
    </div>
    <div class="d-flex my-3">
      <label class="text-capitalize fs-4 w-50">add email:</label>
      <input type="email" name="newEmail" class="ms-2 ps-2 border-0 border-bottom fs-4 m-0 text-dark w-50">
    </div>
    <div class="d-flex flex-wrap justify-content-center mb-3">
      <label class="text-capitalize fs-4 w-100 text-center">change password:</label>
      <input type="text" name="newPass" class="ps-2 m-2 border-0 border-bottom fs-4 m-0 text-dark w-50" placeholder="old password">
      <input type="text" name="confirmNewPass" class="ps-2 my-2 border-0 border-bottom fs-4 m-0 text-dark w-50" placeholder="new password">
    </div>
    <div class="d-flex justify-content-center">
      <button type="submit" class="text-capitalize btn btn-primary w-100 my-4 rounded-pill fs-4">confirm</button>
    </div>
    <?php
      if(isset($_POST['newUserName'])){
        include($user."php/editProfile.php");
      }
    ?>
  </form>
</section>