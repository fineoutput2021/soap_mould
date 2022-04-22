
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-12 col-12">
				<div class="">
          <div class="tab-content" id="nav-tabContent">
             <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                <h4>Wishlist</h4>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                  <?foreach($wish_data->result() as $data){
                                $this->db->select('*');
                    $this->db->from('tbl_type');
                    $this->db->where('id',$data->type_id);
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
                            <li><i class="bi bi-heart"></i></a></li>
                            <?}else{?>
                              <a href="javascript:void(0);" title="Remove from Wishlist" onclick="wishlist(this)" product_id="<?=base64_encode($type_data->product_id)?>" type_id="<?=base64_encode($type_data->id)?>" status="remove"
                                  user_id="<?=base64_encode($this->session->userdata('user_id'))?>" status="add" >
                                <li><i class="bi bi-heart-fill"></i></a></li>
                                      <?}}?>                </ul>
           <button class="txt-deco-no add-to-cart" style="width:100%"  title="Add to Wishlist" onclick="wishlist(this)" product_id="<?=base64_encode($type_data->product_id)?>" type_id="<?=base64_encode($type_data->id)?>" status="move"
               user_id="<?=base64_encode($this->session->userdata('user_id'))?>" status="move">Move To Cart</button>
             </div>
             <div class="card-body product-content">
                <h3 class="title card-text"><a href="<?=base_url()?>/Home/product_detail/<?=base64_encode($type_data->id)?>" class="txt-deco-no"><?echo $type_data->name?></a></h3>
                <div class="price">$<?=$type_data->sp;?><span class="px-2">$<?=$type_data->sp*1.5;?></span></div>
             </div>
          </div>
          <?}?>
                </div>
             </div>
          </div>
				</div>
			</div>
		</div>
	</div>
