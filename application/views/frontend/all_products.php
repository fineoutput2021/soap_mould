<div class="container-fluid mt-5 mb-5" style="background-color: #f4f1eb; padding:20px">
<div class="row">
<div class="col-12 text-center d-flex justify-content-center align-items-center">
   <a href="<?=base_url()?>/Home">Home</a><span class="px-3">/</span>
   <p class="margin-0">All Products</p>
</div>
</div>
</div>
<div class="container  mb-5">
   <div class="row text-center">
      <div class="col-md-12 ">
         <h2 class="text-center green">Shopping Now</h2>
      </div>
   </div>
</div>
<div class="container">
   <div class="row">
      <div class="col-8">
         <div class="tab-content"id="wishlist">
            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
               <h4>All Products</h4>
               <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                 <?foreach($sub_data->result() as $data){
                               $this->db->select('*');
                   $this->db->from('tbl_type');
                   $this->db->where('product_id',$data->id);
                   $type_data= $this->db->get()->row();
                   ?>
                  <div class="col product-grid">
            <div class="card bordre-none product-image">
               <a href="<?=base_url()?>Home/product_detail/<?=base64_encode($type_data->id)?>" class="image">
                 <?if(!empty($type_data->image1)){?>
               <img src="<?=base_url().$type_data->image1;?>">
               <?}elseif(!empty($type_data->image2)){?>
                 <img src="<?=base_url().$type_data->image2;?>">
                 <?}elseif(!empty($type_data->image3)){?>
                   <img src="<?=base_url().$type_data->image3;?>">
                   <?}elseif(!empty($type_data->image4)){?>
                     <img src="<?=base_url().$type_data->image4;?>">
                     <?}?>
               </a>
               <ul class="product-links">
                 <?if(!empty($this->session->userdata('user_data'))){
                                       $this->db->select('*');
                           $this->db->from('tbl_wishlist');
                           $this->db->where('type_id',$type_data->id);
                           $this->db->where('user_id',$this->session->userdata('user_id'));
                           $wishlist_data= $this->db->get()->row();
                           if(empty($wishlist_data)){
                           ?>
                   <a href="javascript:void(0);" title="Add to Wishlist" onclick="wishlist(this)" product_id="<?=base64_encode($type_data->product_id)?>" type_id="<?=base64_encode($type_data->id)?>" status="add"
                       user_id="<?=base64_encode($this->session->userdata('user_id'))?>" status="add" >
                     <li><i class="bi bi-heart green"></i></a></li>
                     <?}else{?>
                       <a href="javascript:void(0);" title="Remove from Wishlist" onclick="wishlist(this)" product_id="<?=base64_encode($type_data->product_id)?>" type_id="<?=base64_encode($type_data->id)?>" status="remove"
                           user_id="<?=base64_encode($this->session->userdata('user_id'))?>">
                         <li><i class="bi bi-heart-fill green"></i></a></li>
                               <?}}?>
               </ul>
               <?if(empty($this->session->userdata('user_data'))){?>
          <button class="txt-deco-no add-to-cart" style="width:100%"  onclick="addToCartOffline(this)" product_id="<?=base64_encode($type_data->product_id)?>" type_id="<?=base64_encode($type_data->id)?>"  quantity=1>Add To Cart</button>
          <?}else{?>
          <button class="txt-deco-no add-to-cart" style="width:100%" onclick="addToCartOnline(this)" product_id="<?=base64_encode($type_data->product_id)?>" type_id="<?=base64_encode($type_data->id)?>" quantity=1>Add To Cart</button>
          <?}?>
            </div>
            <div class="card-body product-content">
               <h3 class="title card-text"><a href="<?=base_url()?>/Home/product_detail/<?=base64_encode($type_data->id)?>" class="txt-deco-no"><?echo $type_data->name?></a></h3>
               <div class="price">₹<?=$type_data->spgst;?><span class="px-2">₹<?=$type_data->mrp;?></span></div>
            </div>
         </div>
         <?}?>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- pagination -->
<!-- <div class="container">
   <div class="row py-5 justify-content-center">
      <div class="col-3">
         <nav aria-label="..." style="box-shadow: none;">
            <ul class="pagination pagination-lg">
               <li class="page-item disabled">
                  <a class="page-link white" href="#" tabindex="-1">1</a>
               </li>
               <li class="page-item"><a class="page-link" href="#">2</a></li>
               <li class="page-item"><a class="page-link" href="#">3</a></li>
               <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                     <span aria-hidden="true">&raquo;</span>
                  </a>
               </li>
            </ul>
         </nav>
      </div>
   </div>
</div> -->
<!-- <div class="container">
   <div class="row justify-content-center mb-4">
      <div class="col text-center"><h2 class="green">More Product</h2></div>
   </div>
   <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
                  <div class="col">
                     <div class="card shadow-sm box bordre-none">
                        <img src="<?=base_url()?>assets/frontend/images/product/5.jpg" width="100%" height="100%">
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
                              <small class="text-muted">Rs.<span class="primary"> 499.00</span></small>
                           </div>
                           <div class="d-flex justify-content-between align-items-center mt-2">
                              <div class="btn-group">
                                 <button type="button" class="btn btn-sm btn-outline-secondary bg-primary white">Shop Now</button>
                                 <button type="button" class="btn btn-sm btn-outline-secondary ">View More</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="card shadow-sm box bordre-none">
                        <img src="<?=base_url()?>assets/frontend/images/product/1.jpg" width="100%" height="100%">
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
                              <small class="text-muted">Rs.<span class="primary"> 499.00</span></small>
                           </div>
                           <div class="d-flex justify-content-between align-items-center mt-2">
                              <div class="btn-group">
                                 <button type="button" class="btn btn-sm btn-outline-secondary bg-primary white">Shop Now</button>
                                 <button type="button" class="btn btn-sm btn-outline-secondary ">View More</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="card shadow-sm box bordre-none">
                        <img src="<?=base_url()?>assets/frontend/images/product/5.jpg" width="100%" height="100%">
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
                              <small class="text-muted">Rs.<span class="primary"> 499.00</span></small>
                           </div>
                           <div class="d-flex justify-content-between align-items-center mt-2">
                              <div class="btn-group">
                                 <button type="button" class="btn btn-sm btn-outline-secondary bg-primary white">Shop Now</button>
                                 <button type="button" class="btn btn-sm btn-outline-secondary ">View More</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="card shadow-sm box bordre-none">
                        <img src="<?=base_url()?>assets/frontend/images/product/1.jpg" width="100%" height="100%">
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
                              <small class="text-muted">Rs.<span class="primary"> 499.00</span></small>
                           </div>
                           <div class="d-flex justify-content-between align-items-center mt-2">
                              <div class="btn-group">
                                 <button type="button" class="btn btn-sm btn-outline-secondary bg-primary white">Shop Now</button>
                                 <button type="button" class="btn btn-sm btn-outline-secondary ">View More</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
   </div> -->
