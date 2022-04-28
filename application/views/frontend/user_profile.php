
<div class="container-fluid mt-5 mb-5" style="background-color: #f4f1eb; padding:20px 5px">
<div class="row">
<div class="col-12 text-center d-flex justify-content-center align-items-center">
   <a href="<?=base_url()?>/Home">Home</a><span class="px-3">/</span>
   <p class="margin-0">Profile</p>
</div>
</div>
</div>

<div class="container">
   <div class="row justify-content-center">
      <div class="col-lg-6 col-xl-6">
         <div class="card-box text-center">
            <!-- <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="rounded-circle avatar-xl img-thumbnail" alt="profile-image"> -->
            <h4 class="mb-0">Demo</h4>
            <p class="text-muted"><?=$user_data->email?></p>
            <a href="<?=base_url()?>Order/view_order" style="color:white;" class="txt-deco-no green">
            <button class="btn btn-primary btn-lg">
              View orders
            </button></a>
            <br>
            <button class="btn btn-block order-button"><a href="<?=base_url()?>Home" class="green txt-deco-no"><i class="bi bi-arrow-left px-1"></i>Continue Shopping</a></button>
            <div class="text-left mt-3">
               <p class="text-muted mb-2 font-13"><strong>Name :</strong> <span class="ml-2">Demo</span></p>
               <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ml-2 "><?=$user_data->email;?></span></p>
               <p class="text-muted mb-2 font-13">
              <a href="<?=base_url()?>User/logout" class=" txt-deco-no ml_10 mr_10">Logout</a>
</p>
            </div>
         </div>
         <!-- end card-box -->
      </div>
   </div>
   <!-- end col -->
</div>
</div>
