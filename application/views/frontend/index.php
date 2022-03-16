<!--========== Carousel ============-->
<div class="container-fluid">
   <div class="row">
      <div class="col">
         <div id="demo" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicators/dots -->
            <div class="carousel-indicators">
               <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
               <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
               <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>
            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
               <div class="carousel-item active ">
                  <img src="<?base_url()?>assets/frontend/images/banner-slide1.jpg" alt="Slide 1" class="d-block" style="width:100%">
                  <!-- <div class="container">
                     <div class="carousel-caption text-start">
                        <h1>Example headline.</h1>
                        <p>Some representative placeholder content for the first slide of the carousel.</p>
                        <p><a class="btn btn-lg btn-primary bg-primary" href="#">Sign up today</a></p>
                     </div>
                     </div> -->
               </div>
               <div class="carousel-item">
                  <img src="<?base_url()?>assets/frontend/images/banner-slide2.jpg" alt="Slide 2" class="d-block" style="width:100%">
                  <!-- <div class="container">
                     <div class="carousel-caption text-center">
                        <h1>Example headline.</h1>
                        <p>Some representative placeholder content for the first slide of the carousel.</p>
                        <p><a class="btn btn-lg btn-primary bg-primary" href="#">Sign up today</a></p>
                     </div>
                     </div> -->
               </div>
               <div class="carousel-item ">
                  <img src="<?base_url()?>assets/frontend/images/banner-slide3.jpg" alt="Slide 3" class="d-block" style="width:100%">
                  <!-- <div class="container">
                     <div class="carousel-caption text-end">
                        <h1>Example headline.</h1>
                        <p>Some representative placeholder content for the first slide of the carousel.</p>
                        <p><a class="btn btn-lg btn-primary bg-primary" href="#">Sign up today</a></p>
                     </div>
                     </div> -->
               </div>
            </div>
            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            </button>
         </div>
      </div>
   </div>
</div>
<!-- ======= Bestsellers ======= -->
<div class="album mt-5 ">
   <div class="container">
      <div class="row text-center py-5">
         <div class="col-md-12 text-center">
            <h6>Most populler</h6>
            <h1 class="green">Bestsellers</h1>
         </div>
      </div>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
         <div class="col product-grid">
            <div class="card bordre-none product-image">
               <a href="product_detail.html" class="image">
               <img src="<?base_url()?>assets/frontend/images/product/1.jpg">
               </a>
               <span class="product-discount-label">-23%</span>
               <ul class="product-links">
                  <li><a href=""><i class="bi bi-heart"></i></a></li>
                  <li><a href="<?base_url()?>assets/frontend/images/product/1.jpg"><i class="fa fa-compass" aria-hidden="true"></i></a></li>
               </ul>
               <a href="cart.html" class="txt-deco-no add-to-cart">Add to Cart</a>
            </div>
            <div class="card-body product-content">
               <h3 class="title card-text"><a href="#" class="txt-deco-no">HIBISCUS, LAVENDER & SHEA BUTTER
                  SHAMPOO BAR (FOR DRY & DAMAGED HAIR)</a>
               </h3>
               <div class="price">$75.55<span class="px-2">$68.88</span></div>
            </div>
         </div>
         <div class="col product-grid">
            <div class="card bordre-none product-image">
               <a href="#" class="image">
               <img src="<?base_url()?>assets/frontend/images/product/2.jpg">
               </a>
               <!--                      <span class="product-discount-label">-23%</span>
                  -->
               <ul class="product-links">
                  <li><a href=""><i class="bi bi-heart"></i></a></li>
                  <li><a href="#"><i class="fa fa-compass" aria-hidden="true"></i>
               </ul>
               <a href="cart.html" class="txt-deco-no add-to-cart">Add to Cart</a>
            </div>
            <div class="card-body product-content">
               <h3 class="title card-text"><a href="#" class="txt-deco-no">HIBISCUS, LAVENDER & SHEA BUTTER
                  SHAMPOO BAR (FOR DRY & DAMAGED HAIR)</a>
               </h3>
               <div class="price">$75.55<span class="px-2">$68.88</span></div>
            </div>
         </div>
         <div class="col product-grid">
            <div class="card bordre-none product-image">
               <a href="#" class="image">
               <img src="<?base_url()?>assets/frontend/images/product/3.jpg">
               </a>
               <!--                      <span class="product-discount-label">-23%</span>
                  -->
               <ul class="product-links">
                  <li><a href=""><i class="bi bi-heart"></i></a></li>
                  <li><a href="#"><i class="fa fa-compass" aria-hidden="true"></i>
               </ul>
               <a href="cart.html" class="txt-deco-no add-to-cart">Add to Cart</a>
            </div>
            <div class="card-body product-content">
               <h3 class="title card-text"><a href="#" class="txt-deco-no">HIBISCUS, LAVENDER & SHEA BUTTER
                  SHAMPOO BAR (FOR DRY & DAMAGED HAIR)</a>
               </h3>
               <div class="price">$75.55<span class="px-2">$68.88</span></div>
            </div>
         </div>
         <!-- <div class="col">
            <div class="card shadow-sm box bordre-none">
               <img src="<?base_url()?>assets/frontend/images/product/4.jpg" width="100%" height="100%">
               <div class="box-content">
                  <div class="content">
                     <ul class="social">
                        <li><a href=""><i class="bi bi-heart-fill"></i></a></li>
                        <li><a href=""><i class="bi bi-cart-check-fill"></i></a></li>
                     </ul>
                  </div>
               </div>
               <div class="card-body">
                  <p class="card-text">HIBISCUS, LAVENDER & SHEA BUTTER SHAMPOO BAR (FOR DRY & DAMAGED HAIR)</p>
                  <div class="d-flex justify-content-between align-items-center">
                     <small class="text-muted">Rs.<span class="primary"> 339.00</span></small>
                  </div>
                  <div class="d-flex justify-content-between align-items-center mt-2">
                     <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary bg-primary white">Shop Now</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary ">View More</button>
                     </div>
                  </div>
               </div>
            </div>
            </div> -->
         <div class="col product-grid">
            <div class="card bordre-none product-image">
               <a href="#" class="image">
               <img src="<?base_url()?>assets/frontend/images/product/4.jpg">
               </a>
               <!--                      <span class="product-discount-label">-23%</span>
                  -->
               <ul class="product-links">
                  <li><a href=""><i class="bi bi-heart"></i></a></li>
                  <li><a href="#"><i class="fa fa-compass" aria-hidden="true"></i>
               </ul>
               <a href="cart.html" class="txt-deco-no add-to-cart">Add to Cart</a>
            </div>
            <div class="card-body product-content">
               <h3 class="title card-text"><a href="#" class="txt-deco-no">HIBISCUS, LAVENDER & SHEA BUTTER
                  SHAMPOO BAR (FOR DRY & DAMAGED HAIR)</a>
               </h3>
               <div class="price">$75.55<span class="px-2">$68.88</span></div>
            </div>
         </div>
      </div>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4 mt-3">
         <div class="col product-grid">
            <div class="card bordre-none product-image">
               <a href="#" class="image">
               <img src="<?base_url()?>assets/frontend/images/product/4.jpg">
               </a>
               <!--                      <span class="product-discount-label">-23%</span>
                  -->
               <ul class="product-links">
                  <li><a href=""><i class="bi bi-heart"></i></a></li>
                  <li><a href="#"><i class="fa fa-compass" aria-hidden="true"></i>
               </ul>
               <a href="cart.html" class="txt-deco-no add-to-cart">Add to Cart</a>
            </div>
            <div class="card-body product-content">
               <h3 class="title card-text"><a href="#" class="txt-deco-no">HIBISCUS, LAVENDER & SHEA BUTTER
                  SHAMPOO BAR (FOR DRY & DAMAGED HAIR)</a>
               </h3>
               <div class="price">$75.55<span class="px-2">$68.88</span></div>
            </div>
         </div>
         <div class="col product-grid">
            <div class="card bordre-none product-image">
               <a href="#" class="image">
               <img src="<?base_url()?>assets/frontend/images/product/5.jpg">
               </a>
               <!--                      <span class="product-discount-label">-23%</span>
                  -->
               <ul class="product-links">
                  <li><a href=""><i class="bi bi-heart"></i></a></li>
                  <li><a href="#"><i class="fa fa-compass" aria-hidden="true"></i>
               </ul>
               <a href="cart.html" class="txt-deco-no add-to-cart">Add to Cart</a>
            </div>
            <div class="card-body product-content">
               <h3 class="title card-text"><a href="#" class="txt-deco-no">HIBISCUS, LAVENDER & SHEA BUTTER
                  SHAMPOO BAR (FOR DRY & DAMAGED HAIR)</a>
               </h3>
               <div class="price">$75.55<span class="px-2">$68.88</span></div>
            </div>
         </div>
         <div class="col product-grid">
            <div class="card bordre-none product-image">
               <a href="#" class="image">
               <img src="<?base_url()?>assets/frontend/images/product/6.jpg">
               </a>
               <!--                      <span class="product-discount-label">-23%</span>
                  -->
               <ul class="product-links">
                  <li><a href=""><i class="bi bi-heart"></i></a></li>
                  <li><a href="#"><i class="fa fa-compass" aria-hidden="true"></i>
               </ul>
               <a href="cart.html" class="txt-deco-no add-to-cart">Add to Cart</a>
            </div>
            <div class="card-body product-content">
               <h3 class="title card-text"><a href="#" class="txt-deco-no">HIBISCUS, LAVENDER & SHEA BUTTER
                  SHAMPOO BAR (FOR DRY & DAMAGED HAIR)</a>
               </h3>
               <div class="price">$75.55<span class="px-2">$68.88</span></div>
            </div>
         </div>
         <div class="col product-grid">
            <div class="card bordre-none product-image">
               <a href="#" class="image">
               <img src="<?base_url()?>assets/frontend/images/product/12.jpg">
               </a>
               <!--                      <span class="product-discount-label">-23%</span>
                  -->
               <ul class="product-links">
                  <li><a href=""><i class="bi bi-heart"></i></a></li>
                  <li><a href="#"><i class="fa fa-compass" aria-hidden="true"></i>
               </ul>
               <a href="cart.html" class="txt-deco-no add-to-cart">Add to Cart</a>
            </div>
            <div class="card-body product-content">
               <h3 class="title card-text"><a href="#" class="txt-deco-no">HIBISCUS, LAVENDER & SHEA BUTTER
                  SHAMPOO BAR (FOR DRY & DAMAGED HAIR)</a>
               </h3>
               <div class="price">$75.55<span class="px-2">$68.88</span></div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- ======= Winter Collection ======= -->
<div class="album py-5 ">
   <div class="container">
      <div class="row text-center py-5">
         <div class="col-md-12 text-center">
            <h6>BEST FOR YOU</h6>
            <h1 class="green">Winter Collection</h1>
            <p>Shea butter is one of the best moisturizing, anti-aging, regenerating and protecting natural agent
               for the skin.
            </p>
         </div>
      </div>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
         <div class="col product-grid">
            <div class="card bordre-none product-image">
               <a href="#" class="image">
               <img src="<?base_url()?>assets/frontend/images/product/13.jpg">
               </a>
               <!--                      <span class="product-discount-label">-23%</span>
                  -->
               <ul class="product-links">
                  <li><a href=""><i class="bi bi-heart"></i></a></li>
                  <li><a href="#"><i class="fa fa-compass" aria-hidden="true"></i>
               </ul>
               <a href="cart.html" class="txt-deco-no add-to-cart">Add to Cart</a>
            </div>
            <div class="card-body product-content">
               <h3 class="title card-text"><a href="#" class="txt-deco-no">HIBISCUS, LAVENDER & SHEA BUTTER
                  SHAMPOO BAR (FOR DRY & DAMAGED HAIR)</a>
               </h3>
               <div class="price">$75.55<span class="px-2">$68.88</span></div>
            </div>
         </div>
         <div class="col product-grid">
            <div class="card bordre-none product-image">
               <a href="#" class="image">
               <img src="<?base_url()?>assets/frontend/images/product/9.jpg">
               </a>
               <!--                      <span class="product-discount-label">-23%</span>
                  -->
               <ul class="product-links">
                  <li><a href=""><i class="bi bi-heart"></i></a></li>
                  <li><a href="#"><i class="fa fa-compass" aria-hidden="true"></i>
               </ul>
               <a href="cart.html" class="txt-deco-no add-to-cart">Add to Cart</a>
            </div>
            <div class="card-body product-content">
               <h3 class="title card-text"><a href="#" class="txt-deco-no">HIBISCUS, LAVENDER & SHEA BUTTER
                  SHAMPOO BAR (FOR DRY & DAMAGED HAIR)</a>
               </h3>
               <div class="price">$75.55<span class="px-2">$68.88</span></div>
            </div>
         </div>
         <div class="col product-grid">
            <div class="card bordre-none product-image">
               <a href="#" class="image">
               <img src="<?base_url()?>assets/frontend/images/product/12.jpg">
               </a>
               <!--                      <span class="product-discount-label">-23%</span>
                  -->
               <ul class="product-links">
                  <li><a href=""><i class="bi bi-heart"></i></a></li>
                  <li><a href="#"><i class="fa fa-compass" aria-hidden="true"></i>
               </ul>
               <a href="cart.html" class="txt-deco-no add-to-cart">Add to Cart</a>
            </div>
            <div class="card-body product-content">
               <h3 class="title card-text"><a href="#" class="txt-deco-no">HIBISCUS, LAVENDER & SHEA BUTTER
                  SHAMPOO BAR (FOR DRY & DAMAGED HAIR)</a>
               </h3>
               <div class="price">$75.55<span class="px-2">$68.88</span></div>
            </div>
         </div>
         <div class="col product-grid">
            <div class="card bordre-none product-image">
               <a href="#" class="image">
               <img src="<?base_url()?>assets/frontend/images/product/16.jpg">
               </a>
               <!--                      <span class="product-discount-label">-23%</span>
                  -->
               <ul class="product-links">
                  <li><a href=""><i class="bi bi-heart"></i></a></li>
                  <li><a href="#"><i class="fa fa-compass" aria-hidden="true"></i>
               </ul>
               <a href="cart.html" class="txt-deco-no add-to-cart">Add to Cart</a>
            </div>
            <div class="card-body product-content">
               <h3 class="title card-text"><a href="#" class="txt-deco-no">HIBISCUS, LAVENDER & SHEA BUTTER
                  SHAMPOO BAR (FOR DRY & DAMAGED HAIR)</a>
               </h3>
               <div class="price">$75.55<span class="px-2">$68.88</span></div>
            </div>
         </div>
      </div>
   </div>
</div>
