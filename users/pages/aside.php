<!-- MY ACCOUNT OFFCANVAS -->
<aside class="offcanvas offcanvas-start" tabindex="-1" id="myAccountOffcanva" aria-labelledby="offcanvasExampleLabel">
  <section class="offcanvas-header d-flex bg-dark">
    <h3 class="offcanvas-title flex-grow-1 text-light text-center text-capitalize" id="offcanvasExampleLabel">
      <?php echo $_SESSION['name']." ".$_SESSION['lastName']; ?>
    </h3>
    <button type="button" class="btn-close bg-light" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </section>
  <section class="offcanvas-body">
    <article>
      <h4 class="text-capitalize bg-primary rounded fs-3 w-100 text-light text-center p-2">buys</h4>
      <ul class="list-group rounded my-3 p-2">
        <li class="list-group-item">
          <a class="text-capitalize text-decoration-none" href="<?php echo $url; ?>?page=addProducts&user=admin">shopping car</a>
        </li>
        <li class="list-group-item">
          <a class="text-capitalize text-decoration-none" href="<?php echo $url; ?>?page=addProducts&user=admin">shopping status</a>
        </li>
      </ul>
    </article>
    <article>
      <h4 class="text-capitalize bg-primary rounded fs-3 w-100 text-light text-center p-2">my products</h4>
      <ul class="list-group rounded my-3 p-2">
        <li class="list-group-item">
          <a class="text-capitalize text-decoration-none" href="<?php echo $url; ?>?page=addProducts&user=admin">upload products</a>
        </li>
        <li class="list-group-item">
          <a class="text-capitalize text-decoration-none" href="<?php echo $url; ?>?page=addProducts&user=admin">my products</a>
        </li>
      </ul>
    </article>
    <article>
      <h4 class="text-capitalize bg-primary rounded fs-3 w-100 text-light text-center p-2">account</h4>
      <ul class="list-group rounded my-3 p-2">
        <li class="list-group-item">
          <a class="text-capitalize text-decoration-none" href="<?php echo $url; ?>?page=myAccount&user=admin">my account</a>
        </li>
        <li class="list-group-item">
          <a class="text-capitalize text-decoration-none" href="<?php echo $url; ?>?page=settings&user=client">settings</a>
        </li>
        <li class="list-group-item">
          <a class="text-capitalize text-decoration-none" href="<?php echo $url; ?>?page=editProfile&user=client">edit profile</a>
        </li>
        <li class="list-group-item">
          <a class="text-capitalize text-decoration-none" href="<?php echo $url; ?>?page=addProducts&user=admin">activity</a>
        </li>
        <li class="list-group-item">
          <a class="text-capitalize text-decoration-none logOut__button">log out</a>
          <script src="<?php echo $user; ?>js/myAccount.js"></script>
        </li>
      </ul>
    </article>
  </section>
</aside>