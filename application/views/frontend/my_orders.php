<div class="container-fluid mt-5 mb-5" style="background-color: #f4f1eb; padding:20px">
<div class="row">
<div class="col-12 text-center d-flex justify-content-center align-items-center">
   <a href="<?=base_url()?>/Home">Home</a><span class="px-3">/</span>
   <p class="margin-0"><a href="<?=base_url()?>/Home/user_profile" >Profile</a></p><span class="px-3">/</span>
   <p class="margin-0">My Orders</p>
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
            <th>Promocode</th>
            <th>Order Amount</th>
            <th>Order Date</th>
            <th>Order Status</th>
            <th>Order details</th>
            <th>Cancel order</th>
         </tr>
      </thead>
      <tbody>
        <?$i=1;foreach($order1_data->result() as $data){?>
         <tr>
            <td><? echo $i;?></td>
            <td><?=$data->id;?></td>
            <td><?
                        $this->db->select('*');
            $this->db->from('tbl_promocode');
            $this->db->where('id',$data->promocode_id);
            $promo_data= $this->db->get()->row();
            if(!empty($promo_data->name)){
              echo $promo_data->name;
            }else{
              echo "N/A";
            }
            ?></td>
            <td>₹<?=$data->final_amount;?></td>
            <td><?=$data->date;?></td>
            <td><?php if ($data->order_status==1) { ?>
              <p class="label bg-yellow">Placed</p>
              <?php } elseif ($data->order_status==2) { ?>
              <p class="label bg-aqua">Accepted</p>
              <?php		} elseif ($data->order_status==3) { ?>
              <p class="label bg-blue">Dispatched </p>
              <?php		} elseif ($data->order_status==4) { ?>
              <p class="label bg-green">Delivered</p>
              <?} elseif ($data->order_status==5) { ?>
              <p class="label bg-red">Cancelled</p>
              <?php		}   ?>
            </td>
            <td>
              <a class="btn btn-primary" href="<?php echo base_url() ?>Order/order_details/<?=base64_encode($data->id);?>" role="button" style="">View Details</a>
            </td>
            <td>
              <?if ($data->order_status==1){?>
                <a class="btn btn-danger" href="<?php echo base_url() ?>Order/cancel_order/<?=base64_encode($data->id);?>" role="button" style=""><i class="fa fa-times" aria-hidden="true"></i></a>
              <?}else{?>

              <?}?>
            </td>
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
