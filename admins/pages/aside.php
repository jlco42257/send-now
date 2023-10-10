        <!-- MY ACCOUNT OFFCANVAS -->
        <aside class="offcanvas offcanvas-start" tabindex="-1" id="myAccountOffcanva" aria-labelledby="offcanvasExampleLabel">
          <header class="offcanvas-header d-flex bg-dark">
            <h3 class="offcanvas-title flex-grow-1 text-light text-center text-capitalize" id="offcanvasExampleLabel">
                <?php echo $_SESSION['name']." ".$_SESSION['lastName']; ?>
            </h3>
            <button type="button" class="btn-close bg-light" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </header>
          <article class="offcanvas-body">
              <section>
                  <h4 class="text-capitalize bg-primary rounded fs-3 w-100 text-light text-center p-2">manage products</h4>
                  <ul class="list-group rounded my-3 p-2">
                      <li class="list-group-item">
                          <a class="text-capitalize text-decoration-none" href="<?php echo $url; ?>?page=addProducts&user=admin">add events</a>
                      </li>
                      <li class="list-group-item">
                          <a class="text-capitalize text-decoration-none" href="<?php echo $url; ?>?page=addProducts&user=admin">reported products</a>
                      </li>
                  </ul>
              </section>
              <section>
                  <h4 class="text-capitalize bg-primary rounded fs-3 w-100 text-light text-center p-2">manage users</h4>
                  <ul class="list-group rounded my-3 p-2">
                      <li class="list-group-item">
                          <a class="text-capitalize text-decoration-none" href="<?php echo $url; ?>?page=addAdmins&user=admin">add admin profiles</a>
                      </li>
                      <li class="list-group-item">
                          <a class="text-capitalize text-decoration-none" href="<?php echo $url; ?>?page=deleteAdmins&user=admin">delete admin profiles</a>
                      </li>
                      <li class="list-group-item">
                          <a class="text-capitalize text-decoration-none" href="<?php echo $url; ?>?page=addProducts&user=admin">reported users</a>
                      </li>
                      <li class="list-group-item">
                          <a class="text-capitalize text-decoration-none" href="<?php echo $url; ?>?page=users&user=admin">all users</a>
                      </li>
                  </ul>
              </section>
              <section>
                  <h4 class="text-capitalize bg-primary rounded fs-3 w-100 text-light text-center p-2">admin account</h4>
                  <ul class="list-group rounded my-3 p-2">
                      <li class="list-group-item">
                          <a class="text-capitalize text-decoration-none" href="<?php echo $url; ?>?page=addProducts&user=admin">settings</a>
                      </li>
                      <li class="list-group-item">
                          <a class="text-capitalize text-decoration-none" href="<?php echo $url; ?>?page=addProducts&user=admin">edit profile</a>
                      </li>
                      <li class="list-group-item">
                          <a class="text-capitalize text-decoration-none" href="<?php echo $url; ?>?page=addProducts&user=admin">activity</a>
                      </li>
                      <li class="list-group-item">
                          <a class="text-capitalize text-decoration-none logOut__button">log out</a>
                          <script src="<?php echo $user; ?>js/myAccount.js"></script>
                      </li>
                  </ul>
              </section>
          </article>
        </aside>
