<div class="container-fluid mt-5 mb-5" style="background-color: #f4f1eb; padding:20px">
<div class="row">
<div class="col-12 text-center d-flex justify-content-center align-items-center">
   <a href="<?=base_url()?>Home">Home</a><span class="px-3">/</span>
   <a href="<?=base_url()?>Home/user_profile">Profile</a><span class="px-3">/</span>
   <a href="<?=base_url()?>Order/view_order">My Orders</a><span class="px-3">/</span>
   <p class="margin-0">Order Details</p>
</div>
</div>
</div>
<div class="container">
   <div class="row">
     <div class="col-lg-12 col-xl-12">
        <div class="card-box">
           <div class="tab-content" style="padding: 10px 10px ;">
<div class="table-responsive">
   <table class="table table-borderless mb-2">
      <thead class="thead-light">
         <tr>
            <th>#</th>
            <th>Order Id</th>
            <th>Image</th>
            <th>Product Name</th>
            <th>Type</th>
            <th>Quantity</th>
            <th>Total Amount</th>
         </tr>
      </thead>
      <tbody>
        <?$i=1;foreach($order_detail->result() as $data){?>
         <tr>
            <td><? echo $i;?></td>
            <td><?=$data->main_id;?></td>
            <td><?
                        $this->db->select('*');
            $this->db->from('tbl_type');
            $this->db->where('id',$data->type_id);
            $type_img= $this->db->get()->row();
            if(!empty($type_img)){?>
              <img src="<?=base_url().$type_img->image1?>" height="80px">
            <?}elseif(!empty($type_img->image2)){?>
              <img src="<?=base_url().$type_img->image2?>" height="80px">
          <?  }
            ?></td>
            <td><?
            $this->db->select('*');
            $this->db->from('tbl_products');
            $this->db->where('id',$data->product_id);
            $promo_data= $this->db->get()->row();
            if(!empty($promo_data)){
              echo $promo_data->name;
            }else{
              echo "N/A";

            }
            ?></td>
            <td><?
            if(!empty($type_img)){
              echo $type_img->name;
            }else{
              echo "N/A";

            }
            ?></td>
            <td><?=$data->quantity;?></td>
            <td>₹<?=$data->total_amount;?></td>

         </tr>
         <?$i++;}?>
      </tbody>
   </table>
</div>
</div>
</div>
</div>
</div>
</div>
