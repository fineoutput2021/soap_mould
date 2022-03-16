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
         <!-- model start login/register -->
         <!-- model strat -->
         <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
            tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title green" id="exampleModalToggleLabel">Login Now</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                     <form>
                        <div class="mb-3">
                           <label for="exampleInputEmail1" class="form-label">Enter Email</label>
                           <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                           <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                           <label for="exampleInputPassword1" class="form-label">Password</label>
                           <input type="password" class="form-control" id="myPassword exampleInputPassword1" value="">
                           <!-- <input type="checkbox" onclick="myFunction()">
                              <spam class="ml_5">Show Password</spam> -->
                        </div>
                     </form>
                  </div>
                  <div class="modal-footer justify-content-center">
                     <div class="text-center bg-green w-100">
                        <button class="btn btn-primary btn-lg" type="Submit" style="">Login Now</button>
                     </div>
                     <div class="w-100 text-center">
                        <button class="btn" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"
                           style="text-decoration: underline;">Register</button>
                     </div>
                     <div class="w-100 text-center"><button class="btn " data-bs-target="#exampleModalToggle3"
                        data-bs-toggle="modal">Forgot Password</button></div>
                     <!-- <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Register</button>
                        <button class="btn " data-bs-target="#exampleModalToggle3" data-bs-toggle="modal">Forgot Password</button> -->
                  </div>
               </div>
            </div>
         </div>
         <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
            tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title green" id="exampleModalToggleLabel2">Register</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                     <form>
                        <div class="mb-3">
                           <label for="exampleInputEmail1" class="form-label">Email Name</label>
                           <input type="name" class="form-control" id="exampleInputName">
                        </div>
                        <div class="mb-3">
                           <label for="exampleInputEmail1" class="form-label">Email Email</label>
                           <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                           <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                           <label for="exampleInputPassword1" class="form-label">Enter Password</label>
                           <input type="password" class="form-control" id="myPassword exampleInputPassword1">
                           <!-- <input type="checkbox" onclick="myFunction()">
                              <spam class="ml_5">Show Password</spam> -->
                        </div>
                        <!-- <div class="mb-3 form-check">
                           <input type="checkbox" class="form-check-input" id="exampleCheck1">
                           <label class="form-check-label" for="exampleCheck1">Check me out</label>
                           </div> -->
                     </form>
                  </div>
                  <div class="modal-footer">
                     <div class="text-center bg-green w-100">
                        <button class="btn btn-primary btn-lg" type="Submit" style="" data-bs-target="#exampleModalToggle"
                           data-bs-toggle="modal">Register Now</button>
                     </div>
                     <!-- <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Register Now</button> -->
                  </div>
               </div>
            </div>
         </div>
         <div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel23"
            tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title green" id="exampleModalToggleLabel23">Forgot Password</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                     <form>
                        <div class="mb-3">
                           <label for="exampleInputEmail1" class="form-label">Email Name</label>
                           <input type="name" class="form-control" id="exampleInputName">
                        </div>
                        <div class="mb-3">
                           <label for="exampleInputEmail1" class="form-label">Email address</label>
                           <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                           <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                           <label for="exampleInputOTP" class="form-label">Enter OTP</label>
                           <input type="number" class="form-control" id="exampleInputOTP">
                        </div>
                        <div class="mb-3">
                           <label for="exampleInputPassword1" class="form-label">Enter New Password</label>
                           <input type="password" class="form-control" id="myPassword exampleInputPassword1 myInput"
                              value="">
                           <!-- <input type="checkbox" onclick="myFunction()">
                              <spam class="ml_5">Show Password</spam> -->
                        </div>
                     </form>
                  </div>
                  <div class="modal-footer">
                     <div class="text-center bg-green w-100">
                        <button class="btn btn-primary btn-lg" type="Submit" style="" data-bs-target="#exampleModalToggle"
                           data-bs-toggle="modal">Submit Now</button>
                     </div>
                     <div class="text-center w-100">
                        <a href="" class="btn green" data-bs-dismiss="modal" aria-label="Close">Cancel</a>
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                     </div>
                     <!-- <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Submit Now</button> -->
                  </div>
               </div>
            </div>
         </div>
         <!-- search offcanvas -->
         <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
            <div class="offcanvas-header">
               <h5 id="offcanvasTopLabel">Search Now</h5>
               <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
               <div class="input-group">
                  <div class="form-outline d-flex" style="width: 100%;">
                     <input type="search" id="form1" class="form-control form-control-lg " placeholder="search here..." />
                     <button type="button" class="btn btn-primary">
                     <i class="bi bi-search"></i>
                     </button>
                  </div>
               </div>
            </div>
         </div>
         <!-- off canvas right -->
         <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRightweb"
            aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
               <h5 id="offcanvasRightLabel" class="white">News latter</h5>
               <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                  aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
               <div class="d-flex">
                  <a href=""><img src="<?=base_url()?>assets/frontend/images/logo/logo3.png" class="img-fluid"></a>
                  <div class="mt-3">
                     <a href="" class="px-5"><i class="bi bi-heart" style="font-size: 20px;"></i></a>
                     <a href=""><i class="bi bi-compass" style="font-size: 20px;"></i></a>
                  </div>
               </div>
              <h2 class="mt-5">Newsletter</h2>
              <div class="Newsletter d-flex py-3">
                  <input type="email" name="email" placeholder="Enter Email..." style="" class="w-100 p-3">
                  <button class="btn btn-primary" style=""><i class="bi bi-send-fill white" style=""></i></button>
               </div>
               <div class="d-flex">
                  <a href="" class="p-2"><i class="bi bi-facebook" style="font-size: 20px;"></i></a>
                  <a href="" class="p-2"><i class="bi bi-instagram"  style="font-size: 20px;"></i></a>
                  <a href="" class="p-2"><i class="bi bi-twitter"  style="font-size: 20px;"></i></a>
               </div>
            </div>
         </div>

         <!-- mpbileview -->
         <div class="offcanvas minicart offcanvas-end mobiledb" tabindex="-1" id="offcanvasRight"
            aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
               <h5 id="offcanvasRightLabel">Shopping Cart</h5>
               <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                  aria-label="Close"></button>
            </div>
            <div class="offcanvas-body mobiledb">
               <p class="h6 green">No products in the cart.</p>
               <hr>
               <div style="display: flex;justify-content: space-around;">
                  <p class="h6">Total</p>
                  <p class="h6">₹0.00</p>
               </div>
               <div class=" justify-content-center">
                  <div class="col-12 bg-green text-center mb-2">
                     <p style="padding: 10px 0px 10px;" class="white"><i class="bi bi-truck" style="margin-right: 10px;"></i>Your order is free delivery !</p>
                  </div>
                  <p>Taxes and shipping calculated at checkout</p>
               </div>
            </div>
         </div>


         <div class="offcanvas minicart offcanvas-end mobiledb" tabindex="-1" id="offcanvasRight2"
            aria-labelledby="offcanvasRightLabel" aria-controls="offcanvasScrolling">
            <div class="offcanvas-header">
               <h5 id="offcanvasRightLabel">Shopping Cart</h5>
               <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                  aria-label="Close"></button>
            </div>
            <div class="offcanvas-body mobiledb">
               <section class="pt-0">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="row">
                     <div class="col-md-12 col-lg-12">
                        <div class="row border  mb-3 py-3 mx-0">
                           <div class="col-12"><button type="button" class="btn-close"
                              data-bs-dismiss="modal" aria-label="Close" style="float: right;"></button></div>
                           <div class="col-lg-2"><img class="w-100" src="<?=base_url()?>assets/frontend/images/product/1.jpg"></div>
                           <div class="col-lg-7">
                              <!-- <h5 class="fs-0">Details</h5>
                                 <hr class=""> -->
                              <a href="#" class="txt-deco-no green">
                                 <p class="fs--1 fw-300">Lorem Ipsum is simply</p>
                              </a>
                              <div class="d-flex col-md-12 mobview-quantity" style="align-items: center;">
                                 <label class="green">Quantity:</label>
                                 <button class="btn btn-link "
                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                 <i class="bi bi-dash green"></i>
                                 </button>
                                 <input id="form1" min="1" name="quantity" value="1" type="number"
                                    class="form-control form-control-md" style="width: 50px;" />
                                 <button class="btn btn-link "
                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                 <i class="bi bi-plus green"></i>
                                 </button>
                              </div>
                           </div>
                           <div class="col-lg-3 ">
                                 <p class="mb-0 green mobview-quantity"><strong>₹1,796.00</strong></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--/.row-->
            <div class=" justify-content-center">
               <div class="col-lg-12 bg-green text-center mb-5">
                  <h6 style="padding: 10px 0px 10px;" class="white"><i class="bi bi-truck"
                     style="margin-right: 10px;"></i>Your order is free delivery !</h6>
               </div>
            </div>
            <div class="row justify-content-center mb-3" style="">
               <div class="col-12">
                  <div class="row">
                     <div class="col-md-4 col-6 text-center">
                        <h2 class="green-dark" style="opacity: 80%;">₹1,796.00</h2>
                        <p>Tax included.</p>
                        <button type="submit" name="checkout"
                           class="btn btn-primary btn-cart-checkout white btn-effect"
                           style="width: 100%; border-bottom: 2px;"><a href="checkout.html"
                           class="txt-deco-no white">Check Out</a></button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--/.container-->
      </section>
               <div class=" justify-content-center">
                  <div class="col-12 bg-green text-center mb-2">
                     <p style="padding: 10px 0px 10px;" class="white"><i class="bi bi-truck" style="margin-right: 10px;"></i>Your order is free delivery !</p>
                  </div>
               </div>
            </div>
         </div>
         <!-- end off canvas right -->
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
               <div class="container mobileheader">
                  <!-- <button class="btn mobiledb " type="button">
                     <span class=" green" style="font-size: 30px;margin-top: -8px;"><i class="bi bi-cart4"></i></span>
                     </button> -->
                  <div class="d-flex">
                     <!-- <button class="btn mobiledb" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight2"
                        aria-controls="offcanvasRight"> <span class=" green" style="font-size: 30px;margin-top: -8px;"><i
                        class="bi bi-cart4"></i></span></button> --><a href="user_profile.html">
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
                  <div class="collapse navbar-collapse justify-content-end " id="collapsibleNavbar">
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
                                 <a href="contact.html">Contact Now</a>
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
                     <ul class="navbar-nav mobiledn">
                     <li class="dropdown nav-item">
                        <a href="<?=base_url()?>Home/all_products" class="nav-link green ">
                           <span>Face</span> <!-- <i class="bi bi-chevron-down"></i> -->
                        </a>
                        <ul>
                           <li><a href="#">Face Cleanser</a></li>
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
                        </ul>
                     </li>
                     <li class="dropdown nav-item">
                        <a href="#" class="nav-link green">
                           <span>Lips</span> <!-- <i class="bi bi-chevron-down"></i> -->
                        </a>
                        <ul>
                           <li><a href="#">Lip Scrub</a></li>
                           <li><a href="#">Lip Butter</a></li>
                           <li><a href="#">Lip Tint</a></li>
                        </ul>
                     </li>
                     <li class="dropdown nav-item">
                        <a href="#" class="nav-link green">
                           <span>Body</span> <!-- <i class="bi bi-chevron-down"></i> -->
                        </a>
                        <ul>
                           <li><a href="#">Body Soap</a></li>
                           <li><a href="#">Butter Soap</a></li>
                           <li><a href="#">Loofah Soap</a></li>
                           <li><a href="#">Body Scrub</a></li>
                           <li><a href="#">Bath Salt</a></li>
                           <li><a href="#">Body Massage Oil</a></li>
                           <li><a href="#">Body Butter</a></li>
                           <li><a href="#">Loofah</a></li>
                           <li><a href="#">Soap for Kids</a></li>
                        </ul>
                     </li>
                     <li class="dropdown nav-item">
                        <a href="#" class="nav-link green">
                           <span>Hair</span> <!-- <i class="bi bi-chevron-down"></i> -->
                        </a>
                        <ul>
                           <li><a href="#">Ayurvedic Hair Oil</a></li>
                           <li><a href="#">Shampoo Bar</a></li>
                           <li><a href="#">Hair Cleanser</a></li>
                           <li><a href="#">Hair Dye/Colour</a></li>
                           <li><a href="#">Hair Pack</a></li>
                           <li><a href="#">Hair Mist</a></li>
                           <li><a href="#">Scalp Mask</a></li>
                           <li><a href="#">Aloe Vera Gel</a></li>
                           <li><a href="#">Wooden Comb</a></li>
                        </ul>
                     </li>
                     <li class="dropdown nav-item">
                        <a href="#" class="nav-link green">
                           <span>Foot</span> <!-- <i class="bi bi-chevron-down"></i> -->
                        </a>
                        <ul>
                           <li><a href="#">Foot Soak</a></li>
                           <li><a href="#">Foot Butter</a></li>
                           <li><a href="#">Clay Foot Scrubber</a></li>
                        </ul>
                     </li>
                     <li class="dropdown nav-item">
                        <a href="#" class="nav-link green">
                           <span>Wellness</span> <!-- <i class="bi bi-chevron-down"></i> -->
                        </a>
                        <ul>
                           <li><a href="#">Essential Oil</a></li>
                        </ul>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link green" href="#">Valentine's Special</a>
                     </li>
                     <li class="nav-item ">
                        <a class="nav-link green" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop"
                           aria-controls="offcanvasTop"><i class="bi bi-search"></i></a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link green" href="<?=base_url()?>Home/cart"><i class="bi bi-cart4"></i></a>
                     </li>
                     <li class="nav-item">
                        <button class="btn nav-link" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRightweb"
                        aria-controls="offcanvasRight"><i class="bi bi-list green" style="font-size: 20px;"></i></button>
                     </li>
                  </div>
               </div>
            </nav>
         </header>
