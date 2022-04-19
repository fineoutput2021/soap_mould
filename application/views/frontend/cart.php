
<style media="screen">
  .mobview_100{

  }
  @media (max-width:767px) {
    .mobview_100{
      width: 100% !important;
    }
  }
</style>

<div class="container-fluid mt-5 mb-5" style="background-color: #f4f1eb; padding:20px 5px">
<div class="row">
<div class="col-12 text-center d-flex justify-content-center align-items-center">
   <a href="<?=base_url()?>/Home">Home</a><span class="px-3">/</span>
   <p class="margin-0">Cart</p>
</div>
</div>
</div>
<section class="pt-0 mb-5">
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
                           <p class="fs--1 fw-300">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
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
      <div class="row justify-content-center">
         <div class="col-lg-12 bg-green text-center mb-5">
            <h6 style="padding: 10px 0px 10px;" class="white"><i class="bi bi-truck"
               style="margin-right: 10px;"></i>Your order is free delivery !</h6>
         </div>
      </div>
      <div class="row justify-content-center" style="">
         <div class="col-12">
            <div class="row">
               <div class="col-md-8 col-12">
                  <p>Special instructions for seller</p>
                  <textarea style=" padding: 20px; width: 60%;" class="mobview_100" ></textarea>
               </div>
               <div class="col-md-4 col-12 text-center">
                  <h2 class="green-dark" style="opacity: 80%;">₹1,796.00</h2>
                  <p>Tax included.</p><a href="<?=base_url()?>/Home/checkout"
                  class="txt-deco-no white">
                  <button type="submit" name="checkout"
                     class="btn btn-primary btn-cart-checkout white btn-effect"
                     style="width: 100%; border-bottom: 2px; padding: 10px 30px;">Check Out</button></a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
