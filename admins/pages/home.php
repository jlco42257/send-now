    <aside>
        <!-- MY ACCOUNT OFFCANVAS -->
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
          <div class="offcanvas-header d-flex">
            <h3 class="offcanvas-title flex-grow-1 text-center text-capitalize" id="offcanvasExampleLabel">
                <?php echo $_SESSION['name']." ".$_SESSION['lastName']; ?>
            </h3>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
              <ul>
                  <li>
                      <a class="text-capitalize" href="">agregar productos</a>
                  </li>
              </ul>
          </div>
        </div>
    </aside>
    <section class="bg-light mt-5">
        <!--             CAROUSEL             -->
        <h2 class="text-primary text-center pt-5 mt-5 fw-bold fs-1">
            Fast, Reliable And Safe Deliveries!
        </h2>
        <article 
            id="carouselExampleAutoplaying" 
            class="carousel slide container mt-5 promotions" 
            data-bs-ride="carousel"
        >
            <!-- indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide-to="0" class="active" aria-current="true" 
                    aria-label="Slide 1">
                </button>
                <button type="button" data-bs-target="#carouselExampleIndicators" 
                    data-bs-slide-to="1" aria-label="Slide 2">
                </button>
                <button type="button" data-bs-target="#carouselExampleIndicators" 
                    data-bs-slide-to="2" aria-label="Slide 3">
                </button>
            </div>
            <!-- images -->
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
              <img src="global/img/home/carrousel/black-friday.jpg" class="d-block w-100 promotions__img" alt="oferta_1">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
              <img src="global/img/home/carrousel/black-friday-1.jpg" 
                  class="d-block w-100 promotions__img" alt="oferta_2">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
              <img src="global/img/home/carrousel/black-friday-2.jpg" 
                  class="d-block w-100 promotions__img" alt="oferta_3">
            </div>
          </div>
          <!-- buttons -->
          <button 
              class="carousel-control-prev" 
              type="button" 
              data-bs-target="#carouselExampleAutoplaying" 
              data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button 
              class="carousel-control-next" type="button" 
              data-bs-target="#carouselExampleAutoplaying" 
              data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </article>
        <!--             SALES             -->
        <h2 class="text-center text-primary my-5 fs-1 fw-bold">Sales</h2>
        <article class="container-fluid d-flex justify-content-evenly flex-wrap">
            <!-- first card -->
          <div class="card col-3 cards">
              <img src="global/img/home/products/phone-1.jpeg" class="card-img-top cards__img" alt="product_1">
              <div class="card-body fs-4">
                <strong class="card-title">
                    OPPO A57 128GB/4gb
                </strong>                
                <p class="card-text fs-5">5% off</p>                
                <p class="card-text text-success">$749.900</p>
                <div class="row justify-content-center">
                    <button type="button" class="btn btn-primary btn-lg sales__button">Buy</button>
                </div>
              </div>
          </div>
            <!-- second card -->
          <div class="card col-3 cards">
              <img src="global/img/home/products/phone-1.jpeg" class="card-img-top cards__img" alt="...">
              <div class="card-body fs-4">
                <strong class="card-title">
                    OPPO A57 128GB/4gb
                </strong>                
                <p class="card-text fs-5">5% off</p>                
                <p class="card-text text-success">$749.900</p>
                <div class="row justify-content-center">
                    <button type="button" class="btn btn-primary btn-lg sales__button">Buy</button>
                </div>
              </div>
          </div>
            <!-- thrid card -->
          <div class="card col-3 cards">
              <img src="global/img/home/products/phone-1.jpeg" class="card-img-top cards__img" alt="...">
              <div class="card-body fs-4">
                <strong class="card-title">
                    OPPO A57 128GB/4gb
                </strong>                
                <p class="card-text fs-5">5% off</p>                
                <p class="card-text text-success">$749.900</p>
                <div class="row justify-content-center">
                    <button type="button" class="btn btn-primary btn-lg sales__button">Buy</button>
                </div>
            </div>
        </article>
        <article>
            <div class="text-center mt-5 pb-5">
            <button type="button" class="btn btn-secondary btn-lg col-3 seeMore">
                See more
            </button>
        </div>
        </article>
    </section>
