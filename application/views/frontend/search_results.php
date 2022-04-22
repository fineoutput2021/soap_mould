<div class="container">
   <div class="row">
<div class="col-8">
   <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
         <h4>Search Results</h4>
         <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
           <?foreach($search_data->result() as $data){
             ?>
            <div class="col product-grid">
      <div class="card bordre-none product-image">
         <a href="<?=base_url()?>Home/product_detail/<?=base64_encode($data->product_id)?>" class="image">
           <?if(!empty($data->image1)){?>
         <img src="<?=base_url().$data->image1;?>">
         <?}elseif(!empty($data->image2)){?>
           <img src="<?=base_url().$data->image2;?>">
           <?}elseif(!empty($data->image3)){?>
             <img src="<?=base_url().$data->image3;?>">
             <?}elseif(!empty($data->image4)){?>
               <img src="<?=base_url().$data->image4;?>">
               <?}?>
         </a>
               <ul class="product-links">
            <li><a href="javascript:void(0)"><i class="bi bi-heart"></i></a></li>
         </ul>
         <?if(empty($this->session->userdata('user_data'))){?>
    <button class="txt-deco-no add-to-cart" style="width:100%"  onclick="addToCartOffline(this)" product_id="<?=base64_encode($data->product_id)?>" type_id="<?=base64_encode($data->product_id)?>"  quantity=1>Add To Cart</button>
    <?}else{?>
    <button class="txt-deco-no add-to-cart" style="width:100%" onclick="addToCartOnline(this)" product_id="<?=base64_encode($data->product_id)?>" type_id="<?=base64_encode($data->product_id)?>" quantity=1>Add To Cart</button>
    <?}?>
      </div>
      <div class="card-body product-content">
         <h3 class="title card-text"><a href="<?=base_url()?>/Home/product_detail/<?=base64_encode($data->id)?>" class="txt-deco-no"><?echo $data->name?></a></h3>
         <div class="price">$<?=$data->sp;?><span class="px-2">$<?=$data->sp*1.5;?></span></div>
      </div>
   </div>
   <?}?>
         </div>
      </div>
   </div>
</div>