<div class="container-fluid mt-5 mb-5" style="background-color: #f4f1eb; padding:20px 5px">
<div class="row">
<div class="col-12 text-center d-flex justify-content-center align-items-center">
   <a href="<?=base_url()?>/Home">Home</a><span class="px-3">/</span><a href="<?=base_url()?>/Home/cart">Cart</a><span class="px-3">/</span>
   <p class="margin-0">Checkout</p>
</div>
</div>
</div>
<!-- model start login/register -->
<!-- model strat -->
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title green" id="exampleModalToggleLabel">Login Now</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-footer justify-content-center">
            <div class="text-center bg-green w-100">
               <button class="btn btn-primary btn-lg" type="Submit" style="">Login Now</button>
            </div>
            <div class="w-100 text-center">
               <button class="btn" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" style="text-decoration: underline;">Register</button>
            </div>
            <div class="w-100 text-center"><button class="btn " data-bs-target="#exampleModalToggle3" data-bs-toggle="modal">Forgot Password</button></div>
            <!-- <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Register</button>
               <button class="btn " data-bs-target="#exampleModalToggle3" data-bs-toggle="modal">Forgot Password</button> -->
         </div>
      </div>
   </div>
</div>
<div class="container">
   <div class="row">
      <div class="col-md-7">
         <main>
            <div>
               <ul class="breadcrumb">
                  <li><a href="<?=base_url()?>/Home/cart">Cart</a></li>
                  <li style="font-weight: bold;">Information</li>
                  <li>Shipping</li>
                  <li>Payment</li>
               </ul>
            </div>
            <form action="<?=base_url()?>Order/checkout" method="POST" enctype="multipart/form-data">
               <div class="fixedElement" >
<h2>Checkout</h2>
<br />
<div class="card mb-4">
  <div class="card-header py-3">
    <h5 class="mb-0">Billing details</h5>
  </div>
  <div class="card-body">
    <!-- <form id="address_form" action="<?=base_url()?>Order/add_address" method="post" enctype="multipart/form-data"> -->
      <!-- 2 column grid layout with text inputs for the first and last names -->
      <div class="row ">
        <div class="col-12 col-md-6">
          <div class="form-outline">
            <label class="form-label" for="name">Name<span class="sp">*</span></label>
            <input type="text" id="name" name="name" class="form-control mt-0" required onkeyup='saveValue(this);'/>
            <input type="hidden" name="order_id" value="<?=base64_encode($order_data->id);?>">
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="form-outline">
            <label class="form-label" for="email">Email<span class="sp">*</span></label>
            <input type="email" id="email" name="email" class="form-control mt-0" required onkeyup='saveValue(this);'/>
            <label style="font-size:12px;color:red;" id="email_alert"></label>
          </div>
        </div>
      </div>

      <!-- Text input -->
      <div class="row mb-4">
        <div class="col-12 col-md-6">
          <div class="form-outline">
            <label class="form-label" for="phone">Contact<span class="sp">*</span></label>
            <input type="text" id="phone" name="phone" maxlength="10" minlength="10" class="form-control mt-0" required onkeypress="return isNumberKey(event)" onkeyup='saveValue(this);'/>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="form-outline">
            <label class="form-label" for="pincode">Pincode<span class="sp">*</span></label>
            <input type="text" id="pincode" name="pincode"  minlength="4" class="form-control mt-0" required  onkeyup='saveValue(this);'/>
            <label style="font-size:12px;color:red;" id="alert"></label>
          </div>
        </div>
      </div>

      <!-- address input -->
      <div class="form-outline col-md-12" >
        <label class="form-label" for="address">Address<span class="sp">*</span></label>
        <textarea class="form-control" id="address" name="address" rows="4" required onkeyup='saveValue(this);'></textarea>
      </div>

      <!-- Checkbox -->
      <!-- <div class="form-check d-flex justify-content-center mb-2">
        <button class="chk" style="width:30%">
        Save Address
        </button>
      </div> -->
    <!-- </form> -->
  </div>
</div>
</div>
<div class="form-group form-check py-3">
   <input type="checkbox" class="form-check-input" id="exampleCheck1">
   <label class="form-check-label" for="exampleCheck1">
   Email me with news and offers</label>
</div>
<button type="submit" class="btn btn-primary btn-lg">
Place order
</button>
<button class="btn btn-lg"><a href="<?=base_url()?>Home/cart" class="txt-deco-no green">Return to Cart</a></button>
</form>


            </footer>
         </main>
      </div>
      <div class="col-md-5 border">
         <div class="row">
            <div class="col">
               <div class="table-responsive">
                  <table class="table">
                     <thead>
                        <tr>
                           <th scope="col" class="h5 text-center">Order details</th>
                           <th scope="col">Total</th>
                        </tr>
                     </thead>
                     <tbody>
                       <?$this->db->select('*');
                        $this->db->from('tbl_order2');
                        $this->db->where('main_id', $order_data->id);
                        $cart_data= $this->db->get();
                       foreach($cart_data->result() as $cart){
                                     $this->db->select('*');
                         $this->db->from('tbl_type');
                         $this->db->where('id',$cart->type_id);
                         $type_data= $this->db->get()->row();
                       ?>
                        <tr>
                           <th scope="row">
                              <div class="d-flex align-items-center">
                                 <img src="<?=base_url().$type_data->image1?>" style="width: 120px;" alt=""><span class="bg-green white" style="    padding: 5px 12px;border-radius: 100px;margin-top: -17%;margin-left: -5%;"><?=$cart->quantity?></span>
                                 <div class="flex-column ms-4">
                                    <p class="mb-2"><?=$type_data->name?></p>
                                 </div>
                              </div>
                           </th>
                           <td class="align-middle">
                              <p class="mb-0" style="font-weight: 500;">₹<?=$type_data->sp*$cart->quantity?></p>
                           </td>
                        </tr>
                        <?}?>
                        <tr>
                           <th colspan="2">
                             <div id="orderDetails">
                               <?if (!empty($order_data->promocode_id)) {
                                    $this->db->select('*');
                                    $this->db->from('tbl_promocode');
                                    $this->db->where('id', $order_data->promocode_id);
                                    $promo_data= $this->db->get()->row(); ?>
                            <a href="javascript:void(0);" style="color:unset;"><p id="promoCode" style="color:#416e7a">
                            <?=$promo_data->name; ?>&nbsp;<i class="fa fa-times" aria-hidden="true" onclick="remove_promocode(this)"
                              order_id="<?=base64_encode($order_data->id)?>"
                            ></i></p></a>
                            <?}?>
                          </div>
                              <form action="javascript:void(0)" id="promocode_form" method="post" enctype="multipart/form-data">
                              <div class="form-group d-flex">
                                 <input type="text" name="promocode" class="form-control form-control-lg mt-3 mx-3" id="promocode_submit" value="<?if (!empty($order_data->promocode_id)) {echo $promo_data->name;}?>" placeholder="Apply Promocode" /><button type="submit" class="btn btn-primary btn-lg mt-3">Apply</button>
                                 <input type="hidden" name="order_id" value="<?=base64_encode($order_data->id);?>">
                              </div>
                            </form>
                           </th>
                        </tr>
                        <tr>
                           <th colspan="2">
                              <div >
                                 <div class="float-start">
                                    <h6>Subtotal</h6>

                                 </div>
                                 <div class="float-end">
                                    <h4>
                                        <?
                                        echo "₹".$order_data->total_amount;
                                        ?>
                                      </h4>
                                    <h6>
                                      <?if(!empty($order_data->p_discount)){
                                        echo "₹".$order_data->p_discount;
                                      }else{
                                        echo "₹0";
                                      }
                                      ?>
                                    </h6>
                                 </div>
                              </div>
                           </th>
                        </tr>
                        <tr>
                           <th colspan="2">
                              <div class="">
                                 <div class="float-start">
                                    <h6>Total</h6>
                                    <!-- <h6 class="mt-3">Including ₹189.50 in taxes</h6> -->
                                 </div>
                                 <div class="float-end">
                                    <h4 class="mb-1"><?echo "₹".$order_data->final_amount;?></h4>
                                 </div>
                              </div>
                           </th>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<script>
document.getElementById("name").value = getSavedValue("name");
document.getElementById("email").value = getSavedValue("email");
document.getElementById("phone").value = getSavedValue("phone");
document.getElementById("address").value = getSavedValue("address");
document.getElementById("pincode").value = getSavedValue("pincode");
document.getElementById("h_name").value = getSavedValue("name");
document.getElementById("h_email").value = getSavedValue("email");
document.getElementById("h_phone").value = getSavedValue("phone");
document.getElementById("h_address").value = getSavedValue("address");

function saveValue(e){

var id = e.id;  // get the sender's id to save it .
var val = e.value; // get the value.
localStorage.setItem(id, val);// Every time user writing something, the localStorage's value will override .
document.getElementById("h_name").value = getSavedValue("name");
document.getElementById("h_phone").value = getSavedValue("phone");
document.getElementById("h_address").value = getSavedValue("address");
document.getElementById("h_address").value = getSavedValue("pincode");
if(!validateEmail(document.getElementById("email").value)){
document.getElementById('email_alert').innerHTML = "Please enter valid email address";
document.getElementById("h_email").value = "";
}else{
  document.getElementById("h_email").value = getSavedValue("email");
  document.getElementById('email_alert').innerHTML = "";


}
}

function getSavedValue  (v){
if (!localStorage.getItem(v)) {
return "";// You can change this to your defualt value.
}
return localStorage.getItem(v);
}

function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test( $email );
}
</script>
<script>
$(document).ready(function() {
  var subtotal = $("#subtotal").val()

  // $("#promocode_form").submit(function(e){
   // $('#promocode_submit').on('click',function(e){
   $('#promocode_form').on('submit',function(e){
   // $("#promocode_submit").click(function(){
    // alert("hi")
    e.preventDefault(); // avoid to execute the actual submit of the form.
    var frm = $(this).closest("#promocode_form");
    var dataString = frm.serialize();
      url = "<?=base_url()?>Order/apply_promocode";
    $.ajax({
      url: url,
      method: 'post',
       data: dataString, // serializes the form's elements.
       dataType: 'json',
      success: function(response) {
        if (response.data == true) {
          $.notify({
            icon: 'fa fa-check',
            title: '',
            message: response.data_message
          }, {
            element: 'body',
            position: null,
            type: "success",
            allow_dismiss: true,
            newest_on_top: false,
            showProgressbar: false,
            placement: {
              from: "top",
              align: "right"
            },
            offset: 20,
            spacing: 10,
            z_index: 1031,
            delay: 1000,
            animate: {
              enter: 'animated fadeInDown',
              exit: 'animated fadeOutUp'
            },
            icon_type: 'class',
            template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-success  alert-dismissible fade show alert-{0}" role="alert">' +
            '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' +
              '<span data-notify="icon"></span> ' +
              '<span data-notify="title">{1}</span> ' +
              '<span data-notify="message">{2}</span>' +
              '<a href="{3}" target="{4}" data-notify="url"></a>' +
              '</div>'
          });

          $( "#orderDetails" ).load(window.location.href + " #orderDetails > *" );
          // window.location.reload();

        } else if (response.data == false) {
          $.notify({
            icon: 'fa fa-cancel',
            title: '',
            message: response.data_message
          }, {
            element: 'body',
            position: null,
            type: "danger",
            allow_dismiss: true,
            newest_on_top: false,
            showProgressbar: true,
            placement: {
              from: "top",
              align: "right"
            },
            offset: 20,
            spacing: 10,
            z_index: 1031,
            delay: 5000,
            animate: {
              enter: 'animated fadeInDown',
              exit: 'animated fadeOutUp'
            },
            icon_type: 'class',
            template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-DANGER  alert-dismissible fade show alert-{0}" role="alert">' +
            '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' +
              '<span data-notify="icon"></span> ' +
              '<span data-notify="title">{1}</span> ' +
              '<span data-notify="message">{2}</span>' +
              '<a href="{3}" target="{4}" data-notify="url"></a>' +
              '</div>'
          });
          // window.location.reload();
          $( "#orderDetails" ).load(window.location.href + " #orderDetails > *" );


        }
      }
    });
  });
  });
  function remove_promocode(obj) {
    var order_id = $(obj).attr("order_id");
    // alert(product_id);
    var base_path = "<?=base_url();?>";
    $.ajax({
      url: '<?=base_url();?>Order/remove_promocode',
      method: 'post',
      data: {
        order_id: order_id
      },
      dataType: 'json',
      success: function(response) {
        if (response.data == true) {
          $.notify({
            icon: 'fa fa-check',
            title: '',
            message: response.data_message
          }, {
            element: 'body',
            position: null,
            type: "success",
            allow_dismiss: true,
            newest_on_top: false,
            showProgressbar: false,
            placement: {
              from: "top",
              align: "right"
            },
            offset: 20,
            spacing: 10,
            z_index: 1031,
            delay: 1000,
            animate: {
              enter: 'animated fadeInDown',
              exit: 'animated fadeOutUp'
            },
            icon_type: 'class',
            template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-success  alert-dismissible fade show alert-{0}" role="alert">' +
            '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' +
              '<span data-notify="icon"></span> ' +
              '<span data-notify="title">{1}</span> ' +
              '<span data-notify="message">{2}</span>' +
              '<a href="{3}" target="{4}" data-notify="url"></a>' +
              '</div>'
          });

          $( "#orderDetails" ).load(window.location.href + " #orderDetails > *" );
          $("#promocode_submit").val("");


        } else if (response.data == false) {
          $.notify({
            icon: 'fa fa-cancel',
            title: '',
            message: response.data_message
          }, {
            element: 'body',
            position: null,
            type: "danger",
            allow_dismiss: true,
            newest_on_top: false,
            showProgressbar: true,
            placement: {
              from: "top",
              align: "right"
            },
            offset: 20,
            spacing: 10,
            z_index: 1031,
            delay: 5000,
            animate: {
              enter: 'animated fadeInDown',
              exit: 'animated fadeOutUp'
            },
            icon_type: 'class',
            template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
              '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
              '<span data-notify="icon"></span> ' +
              '<span data-notify="title">{1}</span> ' +
              '<span data-notify="message">{2}</span>' +
              '<a href="{3}" target="{4}" data-notify="url"></a>' +
              '</div>'
          });
          $( "#orderDetails" ).load(window.location.href + " #orderDetails > *" );
;
        }
      }
    });
  }
</script>
