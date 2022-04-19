<!DOCTYPE html>
<html>
   <head>
      <title>Soap Square - Herbal &amp; Handcrafted</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- icon link  -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
      <!-- animation -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
      <!-- external classes -->
      <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/frontend/css/style.css">
      <!-- exterenel script -->
      <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
   </head>
   <body onload="myFunction()">
   <!-- <body> -->
      <div id="loader"></div>
      <div style="display: none;" id="myDiv" class="animate-bottom">



         <!-- ======= header ======= -->
         <!-- ======= Top Bar ======= -->
         <section id="topbar" class="d-flex align-items-center p-2">
            <div class="container d-flex justify-content-center justify-content-md-between">
               <div class="contact-info d-flex align-items-center topbar">
                  <i class="bi bi-bag-check d-flex align-items-center ms-4 white"><span class="ml_5">FREE SHIPPING ON
                  ORDERS ABOVE ₹999/-</span></i>
               </div>
               <div class="social-links d-none d-md-flex align-items-center white">
                  <a href="#exampleModalToggle" class="btn white txt-deco-no" data-bs-toggle="modal" role="button">Sign
                  in</a>
                  <span class="ml_5 mr_5">/</span>
                  <a href="#exampleModalToggle2" class="btn white txt-deco-no mr_4" data-bs-toggle="modal"
                     role="button">Register</a>
                  <!-- <span href="#" class="white txt-deco-no mr_5 bd_r"></span> -->
                  <div class="before-line">
                     <a href="<?=base_url()?>Home/user_profile" class="white txt-deco-no ml_10 mr_10">My Profile</a>
                     <a href="<?=base_url()?>Home/contact" class="white txt-deco-no ml_10 mr_10">Contact us</a>
                     <a href="#" class="white txt-deco-no ml_10 mr_10">Faq</a>
                  </div>
                  <!-- <span href="#" class="white txt-deco-no mr_5 bd_r"></span> -->
                  <a href="#" class="facebook white ml_10 mr_10"><i class="bi bi-facebook"></i></a>
                  <a href="#" class="twitter white ml_10 mr_10"><i class="bi bi-instagram"></i></a>
                  <a href="#" class="youtube white ml_10 mr_10"><i class="bi bi-youtube"></i></a>
               </div>
            </div>
         </section>
         <header class="sticky">
            <nav class="navbar navbar-expand-sm bg-white navbar-dark">
               <div class="container-fluid mobileheader">
                  <!-- <button class="btn mobiledb " type="button">
                     <span class=" green" style="font-size: 30px;margin-top: -8px;"><i class="bi bi-cart4"></i></span>
                     </button> -->
                  <div class="d-flex">
                     <!-- <button class="btn mobiledb" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight2"
                        aria-controls="offcanvasRight"> <span class=" green" style="font-size: 30px;margin-top: -8px;"><i
                        class="bi bi-cart4"></i></span></button> --><a href="<?=base_url()?>/Home/user_profile">
                        <button class="btn mobiledb" type="button"> <span class=" green" style="font-size: 30px;margin-top: -8px;"><i
                        class="bi bi-person-circle"></i></span></button></a>
                     <button class="btn mobiledb" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                        aria-controls="offcanvasRight"> <span class=" green" style="font-size: 30px;margin-top: -8px;"><i
                        class="bi bi-cart4"></i></span></button>
                  </div>
                  <a class="navbar-brand" href="<?=base_url()?>Home">
                     <!-- <h5 class="primary">Company Name</h5> -->
                     <img src="<?=base_url()?>assets/frontend/images/logo/logo3.png" class="img-fluid">
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                     data-bs-target="#collapsibleNavbar">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="collapsibleNavbar" style="justify-content: space-between !important;"> <!-- justify-content-end  -->
                     <div class="mobiledb height100">
                        <div class="search">
                           <input type="text" class="searchTerm" placeholder="What are you looking for?">
                           <button type="submit" class="searchButton">
                           <i class="fa fa-search"></i>
                           </button>
                        </div>
                        <div class="accordion" id="accordionExample">
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                 Face Cleaner
                                 </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne"
                                 data-bs-parent="#accordionExample">
                                 <div class="accordion-body">
                                    <li><a href="#">
                                       Facial Soap
                                       </a>
                                    </li>
                                    <li><a href="#">
                                       Face Scrub
                                       </a>
                                    </li>
                                    <li><a href="#">
                                       Face Mask
                                       </a>
                                    </li>
                                    <li><a href="#">
                                       Facial Mist / Toner
                                       </a>
                                    </li>
                                    <li><a href="#">
                                       Facial Gel
                                       </a>
                                    </li>
                                    <li><a href="#">
                                       Facial Oil
                                       </a>
                                    </li>
                                    <li><a href="#">
                                       Face Cream
                                       </a>
                                    </li>
                                    <li><a href="#">
                                       Under-eye Cream
                                       </a>
                                    </li>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingTwo">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                 Lips
                                 </button>
                              </h2>
                              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="#accordionExample">
                                 <div class="accordion-body">
                                    <li><a href="#">Lips scrub</a></li>
                                    <li><a href="#">Lips butter</a></li>
                                    <li><a href="#">Lips tint</a></li>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingThree">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                 Body
                                 </button>
                              </h2>
                              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                 data-bs-parent="#accordionExample">
                                 <div class="accordion-body">
                                    <li><a href="#">Body Soap</a></li>
                           <li><a href="#">Butter Soap</a></li>
                           <li><a href="#">Loofah Soap</a></li>
                           <li><a href="#">Body Scrub</a></li>
                           <li><a href="#">Bath Salt</a></li>
                           <li><a href="#">Body Massage Oil</a></li>
                           <li><a href="#">Body Butter</a></li>
                           <li><a href="#">Loofah</a></li>
                           <li><a href="#">Soap for Kids</a></li>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingfour">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                 Hair
                                 </button>
                              </h2>
                              <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour"
                                 data-bs-parent="#accordionExample">
                                 <div class="accordion-body">
                                    <li><a href="#">Ayurvedic Hair Oil</a></li>
                           <li><a href="#">Shampoo Bar</a></li>
                           <li><a href="#">Hair Cleanser</a></li>
                           <li><a href="#">Hair Dye/Colour</a></li>
                           <li><a href="#">Hair Pack</a></li>
                           <li><a href="#">Hair Mist</a></li>
                           <li><a href="#">Scalp Mask</a></li>
                           <li><a href="#">Aloe Vera Gel</a></li>
                           <li><a href="#">Wooden Comb</a></li>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingfive">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                 Foot
                                 </button>
                              </h2>
                              <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive"
                                 data-bs-parent="#accordionExample">
                                 <div class="accordion-body">
                                    <li><a href="#">Foot Soak</a></li>
                           <li><a href="#">Foot Butter</a></li>
                           <li><a href="#">Clay Foot Scrubber</a></li>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingsix">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                 Wellness
                                 </button>
                              </h2>
                              <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix"
                                 data-bs-parent="#accordionExample">
                                 <div class="accordion-body">
                                    <li><a href="#">Essential Oil</a></li>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingseven">
                                 <button class=" btn" type="button">
                                 <a href="#">Valentine's Special</a>
                                 </button>
                              </h2>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingseven">
                                 <button class=" btn" type="button">
                                 <a href="<?=base_url()?>/Home/contact">Contact Now</a>
                                 </button>
                              </h2>
                           </div>
                        </div>
                        <br>
                        <div class="d-grid gap-2 d-md-block">
                           <a href="#exampleModalToggle" class="txt-deco-no" data-bs-toggle="modal" role="button"><button class="btn btn-primary w-100" type="button">Sign In</button></a>
                           <a href="#exampleModalToggle2" class="txt-deco-no" data-bs-toggle="modal" role="button"><button class="btn btn-primary w-100" type="button">Register</button></a>
                           <!-- <button class="btn btn-primary" type="button"></button> -->
                        </div>
                     </div>
                     <ul class="navbar-nav mobiledn" style="margin-left: 50px;">
                     <li class="dropdown nav-item">
                        <a href="<?=base_url()?>Home/all_products" class="nav-link green ">
                           <span>Face</span> <!-- <i class="bi bi-chevron-down"></i> -->
                        </a>
                        <ul>
                           <li><a href="<?=base_url()?>Home/all_products">Face Cleanser</a></li>
                           <li><a href="<?=base_url()?>Home/all_products">
                              Facial Soap
                              </a>
                           </li>
                           <li><a href="<?=base_url()?>Home/all_products">
                              Face Scrub
                              </a>
                           </li>
                           <li><a href="<?=base_url()?>Home/all_products">
                              Face Mask
                              </a>
                           </li>
                           <li><a href="<?=base_url()?>Home/all_products">
                              Facial Mist / Toner
                              </a>
                           </li>
                           <li><a href="<?=base_url()?>Home/all_products">
                              Facial Gel
                              </a>
                           </li>
                           <li><a href="<?=base_url()?>Home/all_products">
                              Facial Oil
                              </a>
                           </li>
                           <li><a href="<?=base_url()?>Home/all_products">
                              Face Cream
                              </a>
                           </li>
                           <li><a href="<?=base_url()?>Home/all_products">
                              Under-eye Cream
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="dropdown nav-item">
                        <a href="<?=base_url()?>Home/all_products" class="nav-link green">
                           <span>Lips</span> <!-- <i class="bi bi-chevron-down"></i> -->
                        </a>
                        <ul>
                           <li><a href="<?=base_url()?>Home/all_products">Lip Scrub</a></li>
                           <li><a href="<?=base_url()?>Home/all_products">Lip Butter</a></li>
                           <li><a href="<?=base_url()?>Home/all_products">Lip Tint</a></li>
                        </ul>
                     </li>
                     <li class="dropdown nav-item">
                        <a href="<?=base_url()?>Home/all_products" class="nav-link green">
                           <span>Body</span> <!-- <i class="bi bi-chevron-down"></i> -->
                        </a>
                        <ul>
                           <li><a href="<?=base_url()?>Home/all_products">Body Soap</a></li>
                           <li><a href="<?=base_url()?>Home/all_products">Butter Soap</a></li>
                           <li><a href="<?=base_url()?>Home/all_products">Loofah Soap</a></li>
                           <li><a href="<?=base_url()?>Home/all_products">Body Scrub</a></li>
                           <li><a href="<?=base_url()?>Home/all_products">Bath Salt</a></li>
                           <li><a href="<?=base_url()?>Home/all_products">Body Massage Oil</a></li>
                           <li><a href="<?=base_url()?>Home/all_products">Body Butter</a></li>
                           <li><a href="<?=base_url()?>Home/all_products">Loofah</a></li>
                           <li><a href="<?=base_url()?>Home/all_products">Soap for Kids</a></li>
                        </ul>
                     </li>
                     <li class="dropdown nav-item">
                        <a href="<?=base_url()?>Home/all_products" class="nav-link green">
                           <span>Hair</span> <!-- <i class="bi bi-chevron-down"></i> -->
                        </a>
                        <ul>
                           <li><a href="<?=base_url()?>Home/all_products">Ayurvedic Hair Oil</a></li>
                           <li><a href="<?=base_url()?>Home/all_products">Shampoo Bar</a></li>
                           <li><a href="<?=base_url()?>Home/all_products">Hair Cleanser</a></li>
                           <li><a href="<?=base_url()?>Home/all_products">Hair Dye/Colour</a></li>
                           <li><a href="<?=base_url()?>Home/all_products">Hair Pack</a></li>
                           <li><a href="<?=base_url()?>Home/all_products">Hair Mist</a></li>
                           <li><a href="<?=base_url()?>Home/all_products">Scalp Mask</a></li>
                           <li><a href="<?=base_url()?>Home/all_products">Aloe Vera Gel</a></li>
                           <li><a href="<?=base_url()?>Home/all_products">Wooden Comb</a></li>
                        </ul>
                     </li>
                     <li class="dropdown nav-item">
                        <a href="<?=base_url()?>Home/all_products" class="nav-link green">
                           <span>Foot</span> <!-- <i class="bi bi-chevron-down"></i> -->
                        </a>
                        <ul>
                           <li><a href="<?=base_url()?>Home/all_products">Foot Soak</a></li>
                           <li><a href="<?=base_url()?>Home/all_products">Foot Butter</a></li>
                           <li><a href="<?=base_url()?>Home/all_products">Clay Foot Scrubber</a></li>
                        </ul>
                     </li>
                     <li class="dropdown nav-item">
                        <a href="<?=base_url()?>Home/all_products" class="nav-link green">
                           <span>Wellness</span> <!-- <i class="bi bi-chevron-down"></i> -->
                        </a>
                        <ul>
                           <li><a href="<?=base_url()?>Home/all_products">Essential Oil</a></li>
                        </ul>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link green" href="<?=base_url()?>Home/all_products">Valentine's Special</a>
                     </li>
                     <!-- <li class="nav-item ">
                        <a class="nav-link green" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop"
                           aria-controls="offcanvasTop"><i class="bi bi-search"></i></a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link green" href="<?=base_url()?>Home/cart"><i class="bi bi-cart4"></i></a>
                     </li>
                     <li class="nav-item">
                        <button class="btn nav-link" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRightweb"
                        aria-controls="offcanvasRight"><i class="bi bi-list green" style="font-size: 20px;"></i></button>
                     </li> -->
                   </ul>
                   <ul class="navbar-nav mobiledn">
                     <li class="nav-item ">
                        <a class="nav-link green" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop"
                           aria-controls="offcanvasTop"><i class="bi bi-search" style="font-size:20px;"></i></a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link green" href="<?=base_url()?>Home/cart"><i class="bi bi-cart4" style="font-size:20px;"></i></a>
                     </li>
                     <li class="nav-item">
                        <button class="btn nav-link" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRightweb"
                        aria-controls="offcanvasRight"><i class="bi bi-list green" style="font-size: 23px;"></i></button>
                     </li></ul>
                  </div>
               </div>
            </nav>
         </header>
