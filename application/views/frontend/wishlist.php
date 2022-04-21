<html>
<head>
      <title>Wishlist</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- icon link  -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
      <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
      <!-- animation -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
      <!-- external classes -->
      <link rel="stylesheet" type="text/css" href="style.css">
      <!-- exterenel script -->
      <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
   </head>
<body>
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
                   <li><a href=""><i class="bi bi-heart"></i></a></li>
                   <li><a href="#"><i class="fa fa-compass" aria-hidden="true"></i>
                </ul>
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

</body>
</html>
