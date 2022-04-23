  <head>
      <title>Soap Mould</title>
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

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="<?=base_url()?>assets/frontend/js/bootstrap-notify.min.js"></script>

      <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->

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
                  <!-- <i class="bi bi-bag-check d-flex align-items-center ms-4 white">
                    <span class="ml_5">FREE SHIPPING ON
                  ORDERS ABOVE ₹999/-</span>
                </i> -->
               </div>
               <div class="social-links d-none d-md-flex align-items-center white">
                 <?if(empty($this->session->userdata('user_data'))){?>
                  <a href="#exampleModalToggle" class="btn white txt-deco-no" data-bs-toggle="modal" role="button">Sign
                  in</a>
                  <span class="ml_5 mr_5">/</span>
                  <a href="#exampleModalToggle2" class="btn white txt-deco-no mr_4" data-bs-toggle="modal"
                     role="button">Register</a>
                     <?}?>
                  <!-- <span href="#" class="white txt-deco-no mr_5 bd_r"></span> -->
                  <div class="">
                     <a href="<?=base_url()?>Home/contact" class="white txt-deco-no ml_10 mr_10">Contact us</a>
                  </div>
                  <!-- <span href="#" class="white txt-deco-no mr_5 bd_r"></span> -->
                  <a href="javascript:void(0)" class="facebook white ml_10 mr_10"><i class="bi bi-facebook"></i></a>
                  <a href="javascript:void(0)" class="twitter white ml_10 mr_10"><i class="bi bi-instagram"></i></a>
                  <a href="javascript:void(0)" class="youtube white ml_10 mr_10"><i class="bi bi-youtube"></i></a>
               </div>
            </div>
         </section>
         <header class="sticky">
            <nav class="navbar navbar-expand-sm bg-white navbar-dark">
               <div class="container-fluid mobileheader" id="mobileHeader">
                  <div class="d-flex mobiledb">
                    <a href="<?=base_url()?>/Home/user_profile">
                        <button class="btn mobiledb" type="button"> <span class=" green" style="font-size: 30px;margin-top: -8px;"><i
                        class="bi bi-person-circle"></i></span></button></a>
                     <a href="<?=base_url()?>Home/cart">
                        <span class=" green" style="font-size: 30px;margin-top: -8px;"><i
                        class="bi bi-cart4">
                        <span class="navbar-tool-label badge bg-primary" id="totalCartItems" style="position: absolute; padding: 0.35em 0.65em; font-size: 9px; margin-right: 2px;margin-left: -8px;bottom: 42px;">
                          <?if(!empty($this->session->userdata('user_data'))){
                            $id=$this->session->userdata('user_id');
                            $this->db->select('*');
                            $this->db->from('tbl_cart');
                            $this->db->where('user_id',$id);
                            $cart_count= $this->db->count_all_results();
                            echo $cart_count;
                          }else{
                           // print_r($this->session->userdata('user_cart'));die();
                            if(!empty($this->session->userdata('cart_data'))){
                            $cart = count($this->session->userdata('cart_data'));
                            echo $cart;
                          }else{
                            echo "0";
                          }
                          }
                          ?>
                        </span></i></span></a>
                  </div>
                  <a class="navbar-brand" href="<?=base_url()?>Home">
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
                        <!--Mobile-->
                        <div class="accordion" id="accordionExample">
                        <?  $this->db->select('*');
                      $this->db->from('tbl_category');
                      $this->db->where('is_active',1);
                      $category_data= $this->db->get();
                      $i=0;
                      foreach($category_data->result() as $category){?>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="heading<?=$i;?>">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse<?=$i;?>" aria-expanded="false" aria-controls="collapse<?=$i;?>">
                                 <?=$category->name;?>
                                 </button>
                              </h2>
                              <div id="collapse<?=$i;?>" class="accordion-collapse collapse " aria-labelledby="heading<?=$i;?>"
                                 data-bs-parent="#accordionExample">
                                 <div class="accordion-body">
                                   <?$this->db->select('*');    //--------Mobile-----------------
                                   $this->db->from('tbl_subcategory');
                                   $this->db->where('category_id',$category->id);
                                   $this->db->where('is_active',1);
                                   $sub_data = $this->db->get();
                                   foreach($sub_data->result() as $sub){?>
                                    <a href="<?=base_url()?>Home/all_products/<?=base64_encode($category->id)?>/<?=base64_encode(1)?>" class="nav-link green "><li>
                                       <?=$sub->name;?>
                                    </li>
                                  </a>
                                    <?}?>
                                 </div>
                              </div>
                           </div>
                           <?$i++;}?>

                        </div>
                        <br>
                        <div class="d-grid gap-2 d-md-block">
                           <a href="#exampleModalToggle" class="txt-deco-no" data-bs-toggle="modal" role="button"><button class="btn btn-primary w-100" type="button">Sign In</button></a>
                           <a href="#exampleModalToggle2" class="txt-deco-no" data-bs-toggle="modal" role="button"><button class="btn btn-primary w-100" type="button">Register</button></a>
                           <!-- <button class="btn btn-primary" type="button"></button> -->
                        </div>
                     </div>
                     <ul class="navbar-nav mobiledn" style="margin-left: 50px;">
                       <?            $this->db->select('*'); //-----------Web--------------
                       $this->db->from('tbl_category');
                       $this->db->where('is_active',1);
                       $category_data= $this->db->get();
                       $i=0;
                       foreach($category_data->result() as $category){
                       ?>
                     <li class="dropdown nav-item">
                        <a href="<?=base_url()?>Home/all_products/<?=base64_encode($category->id)?>/<?=base64_encode(1)?>" class="nav-link green ">
                           <span><?=$category->name;?></span> <!-- <i class="bi bi-chevron-down"></i> -->
                        </a>
                        <ul>
                          <?            $this->db->select('*');
                          $this->db->from('tbl_subcategory');
                          $this->db->where('category_id',$category->id);
                          $this->db->where('is_active',1);
                          $sub_data = $this->db->get();
                          foreach($sub_data->result() as $sub){?>
                           <li><a href="<?=base_url()?>Home/all_products/<?=base64_encode($sub->id)?>/<?=base64_encode(2)?>"><?=$sub->name?></a>
                           </li>
                           <?}?>
                        </ul>
                     </li>
                     <?}?>
                   </ul>
                   <ul class="navbar-nav mobiledn">
                     <li class="nav-item ">
                        <a class="nav-link green" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop"
                           aria-controls="offcanvasTop"><i class="bi bi-search" style="font-size:20px;"></i></a>
                     </li>
                       <?if(!empty($this->session->userdata('user_data'))){?>
                               <a class="nav-link green" href="javascript:void(0)" role="button" id="dropdownUserIcon" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-person-circle" style="font-size:20px;"></i>
        </a>
        <ul class="dropdown-menu dropdownUser" aria-labelledby="dropdownUserIcon">
          <li><a class="dropdown-item" href="<?=base_url()?>Home/user_profile">View Profile</a></li>
          <li><a class="dropdown-item" href="<?=base_url()?>User/logout">Log Out</a></li>
        </ul>

                        <?}?>
                     <li class="nav-item" id="cartCount">
                        <a class="nav-link green" href="<?=base_url()?>Home/cart">
                          <i class="bi bi-cart4 navbar-tool-icon czi-cart" style="font-size:20px;">  <span class="navbar-tool-label badge bg-primary rounded-pill" id="totalCartItems" style="position: absolute;font-size: 10px;padding: 3px;margin-right: 2px;margin-left: -8px;bottom: 46px;">
                            <?if(!empty($this->session->userdata('user_data'))){
                              $id=$this->session->userdata('user_id');
                              $this->db->select('*');
                              $this->db->from('tbl_cart');
                              $this->db->where('user_id',$id);
                              $cart_count= $this->db->count_all_results();
                              echo $cart_count;
                            }else{
                              if(!empty($this->session->userdata('cart_data'))){
                              $cart = count($this->session->userdata('cart_data'));
                              echo $cart;
                            }else{
                              echo "0";
                            }
                            }
                            ?>
                          </span></i></a>
                     </li>
                     <?if(!empty($this->session->userdata('user_data'))){?>
                     <li class="nav-item">
                        <a class="nav-link green" href="<?=base_url()?>Home/wishlist"  ><i class="bi bi-heart-fill" style="font-size: 20px;">
                          <?if(!empty($this->session->userdata('user_data'))){?>
                          <span class="navbar-tool-label badge bg-primary rounded-pill" id="totalCartItems" style="position: absolute;font-size: 10px;padding: 3px;margin-right: 2px;margin-left: -8px;bottom: 46px;">
                            <?if(!empty($this->session->userdata('user_data'))){
                              $id=$this->session->userdata('user_id');
                              $this->db->select('*');
                              $this->db->from('tbl_wishlist');
                              $this->db->where('user_id',$id);
                              $cart_count= $this->db->count_all_results();
                              echo $cart_count;
                            }else{
                              if(!empty($this->session->userdata('user_cart'))){
                              $cart = count($this->session->userdata('user_cart'));
                              echo $cart;
                            }else{
                              echo "0";
                            }
                            }
                            ?>
                          </span>
                          <?}?>
                        </i></a>
                     </li>
                     <?}?>
                   </ul>
                  </div>
               </div>
            </nav>
         </header>
