<!--========== Carousel ============-->
<div class="container-fluid">
   <div class="row">
      <div class="col">
         <div id="demo" class="carousel slide" data-bs-ride="carousel">
           <!-- Indicators/dots -->
           <div class="carousel-indicators">
             <?php $i=0; foreach($slider_data->result() as $data) { ?>
              <button type="button" data-bs-target="#demo" data-bs-slide-to="<?=$i?>" class="<?if ($i==0){echo ' active';}?>" aria-current="true"></button>
              <?php $i++; } ?>
           </div>

           <!-- The slideshow/carousel -->
           <div class="carousel-inner">
            <?php $i=1; foreach($slider_data->result() as $data) { ?>
              <div class="carousel-item <?if ($i==1){ echo ' active'; }?> ">
                 <img src="<?=base_url().$data->image?>" alt="Slide <?=$i?>" class="d-block" style="width:100%">
              </div>
              <?php $i++; } ?>
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
<?
$this->db->select('*');
$this->db->from('tbl_products');
$this->db->where('is_active',1);
$this->db->where('bestseller',1);
$bestseller= $this->db->get();
if(!empty($bestseller)){
?>
<div class="album">
   <div class="container">
      <div class="row text-center py-5">
         <div class="col-md-12 text-center">
            <h6>Most popular</h6>
            <h1 class="green">Bestsellers</h1>
         </div>
      </div>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4" id="wishlist">

        <? //--------BestSeller-------------------------
        foreach($bestseller->result() as $best){
                      $this->db->select('*');
          $this->db->from('tbl_type');
          $this->db->where('product_id',$best->id);
          $type_data= $this->db->get()->row();
          if(!empty($type_data)){
          // print_r($type_data);die();
        ?>
         <div class="col product-grid">
            <div class="card bordre-none product-image">
               <a href="<?=base_url()?>/Home/product_detail/<?=base64_encode($type_data->id)?>" class="image">
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

               <!-- <ul class="product-links">
                  <li><a href=""><i class="bi bi-heart green"></i></a></li>
                  <li><a href="images/product/1.jpg"><i class="fa fa-compass" aria-hidden="true"></i></a></li>
               </ul> -->

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
          <button class="txt-deco-no add-to-cart" onclick="addToCartOffline(this)" product_id="<?=base64_encode($type_data->product_id)?>" type_id="<?=base64_encode($type_data->id)?>"  quantity=1>Add To Cart</button>
          <?}else{?>
          <button class="txt-deco-no add-to-cart" onclick="addToCartOnline(this)" product_id="<?=base64_encode($type_data->product_id)?>" type_id="<?=base64_encode($type_data->id)?>" quantity=1>Add To Cart</button>
          <?}?>
            </div>
            <div class="card-body product-content">
               <h3 class="title card-text"><a href="<?=base_url()?>/Home/product_detail/<?=base64_encode($type_data->id)?>" class="txt-deco-no"><?=$type_data->name?></a>
               </h3>
               <div class="price">₹<?=$type_data->spgst?><span class="px-2">₹<?=$type_data->mrp;?></span></div>
            </div>
         </div>
         <?}}?>
      </div>
   </div>
</div>
<?}?>

<!-- ======= Winter Collection ======= -->
<div class="album">
   <div class="container mb-5 mt-5">
     <?
     $this->db->select('*');
     $this->db->from('tbl_products');
     $this->db->where('is_active',1);
     $this->db->where('season',1);
     $seasonal= $this->db->get();
     if(!empty($seasonal)){
     ?>
      <div class="row text-center py-3">
         <div class="col-md-12 text-center">
            <h6>BEST FOR YOU</h6>
            <h1 class="green">Season Collection</h1>
            <p>Shea butter is one of the best moisturizing, anti-aging, regenerating and protecting natural agent
               for the skin.
            </p>
         </div>
      </div>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
        <? //--------Seasonal Collection-------------------------
        foreach($seasonal->result() as $season){
                      $this->db->select('*');
          $this->db->from('tbl_type');
          $this->db->where('product_id',$season->id);
          $type_data= $this->db->get()->row();
          if(!empty($type_data)){
          // print_r($type_data);die();
        ?>
         <div class="col product-grid">
            <div class="card bordre-none product-image">
               <a href="<?=base_url()?>/Home/product_detail/<?=base64_encode($type_data->id)?>" class="image">
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

               <!-- <ul class="product-links">
                  <li><a href=""><i class="bi bi-heart green"></i></a></li>
                  <li><a href="images/product/1.jpg"><i class="fa fa-compass" aria-hidden="true"></i></a></li>
               </ul> -->

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
          <button class="txt-deco-no add-to-cart" onclick="addToCartOffline(this)" product_id="<?=base64_encode($type_data->product_id)?>" type_id="<?=base64_encode($type_data->id)?>"  quantity=1>Add To Cart</button>
          <?}else{?>
          <button class="txt-deco-no add-to-cart" onclick="addToCartOnline(this)" product_id="<?=base64_encode($type_data->product_id)?>" type_id="<?=base64_encode($type_data->id)?>" quantity=1>Add To Cart</button>
          <?}?>
            </div>
            <div class="card-body product-content">
               <h3 class="title card-text"><a href="<?=base_url()?>/Home/product_detail/<?=base64_encode($type_data->id)?>" class="txt-deco-no"><?=$type_data->name?></a>
               </h3>
               <div class="price">₹<?=$type_data->spgst?><span class="px-2">₹<?=$type_data->mrp;?></span></div>
            </div>
         </div>
         <?}}?>
   </div>
   <?}?>
</div>
