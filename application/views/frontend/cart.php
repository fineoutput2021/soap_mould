
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
      <div class="row" id="cartData">
        <?$cart_check = $cart_data->row();
if (empty($cart_check)) {?>
<h2>Your cart is empty! Please add some product</h2>
<?} else {
$total=0;
$i=1;
foreach ($cart_data->result() as $cart) {
$this->db->select('*');
$this->db->from('tbl_type');
$this->db->where('product_id', $cart->product_id);
$this->db->where('id', $cart->type_id);
$pro_data= $this->db->get()->row();?>
         <div class="col-lg-12">
            <div class="row">
               <div class="col-md-12 col-lg-12">
                  <div class="row border  mb-3 py-3 mx-0">
                     <div class="col-12"><button type="button" class="btn-close"
                        data-bs-dismiss="modal" aria-label="Close" style="float: right;" onclick="deleteCartOnline(this)" product_id="<?=base64_encode($pro_data->product_id)?>" type_id="<?=base64_encode($pro_data->id)?>"></button></div>
                     <div class="col-lg-2"><img class="w-100" src="<?=base_url().$pro_data->image1;?>"></div>
                     <div class="col-lg-7">
                        <!-- <h5 class="fs-0">Details</h5>
                           <hr class=""> -->
                        <a href="#" class="txt-deco-no green">
                           <p class="fs--1 fw-300"><?=$pro_data->name;?></p>
                        </a>
                        <div class="d-flex col-md-12 mobview-quantity" style="align-items: center;">
                          <label class="green">Quantity:</label>
                          <button class="btn btn-link "
                              onclick="decreaseValue(<?=$i;?>)">
                              <i class="bi bi-dash green"></i>
                          </button>
                          <input id="qty<?=$i;?>" min="1" product_id="<?=base64_encode($cart->product_id)?>" type_id="<?=base64_encode($cart->product_id)?>" name="qty" readonly value="<?=$cart->quantity?>" price="<?=$pro_data->sp*$cart->quantity;?>" type="number"
                              class="form-control form-control-md" style="width: 50px;" />
                          <button class="btn btn-link "
                              onclick="increaseValue(<?=$i;?>)">
                              <i class="bi bi-plus green"></i>
                          </button>
                        </div>
                     </div>
                     <div class="col-lg-3 ">
                           <p class="mb-0 green mobview-quantity"><strong id="price<?=$i?>">₹<?=$pro_data->sp*$cart->quantity;?></strong></p>
                     </div>
                  </div>
               </div>
               <?$i++; }?>
            </div>
         </div>
      </div>
      <!--/.row-->
      <div class="row justify-content-center">
         <div class="col-lg-12 bg-green text-center mb-5">
            <h6 style="padding: 10px 0px 10px;" class="white"><i class="bi bi-truck"
               style="margin-right: 10px;"></i>Cash on delivery</h6>
         </div>
      </div>
      <div class="row justify-content-center" style="">
         <div class="col-12">
            <div class="row">
               <div class="col-md-8 col-12">
                  <!-- <p>Special instructions for seller</p>
                  <textarea style=" padding: 20px; width: 60%;" class="mobview_100" ></textarea> -->
               </div>
               <div class="col-md-4 col-12 text-center">
                  <h2 class="green-dark" style="opacity: 80%;" id="subTot">
                    <?$subtotal=0;
                    foreach ($cart_data->result() as $cart2) {
                        $price=0;
                        $this->db->select('*');
                        $this->db->from('tbl_type');
                        $this->db->where('id', $cart2->type_id);
                        $pro_data= $this->db->get()->row();
                        $price = $pro_data->sp * $cart2->quantity;
                        $total= $total + $price;
                    }
                    echo "₹".$subtotal = $total;
                    ?>
                  </h2>
                  <p>Tax included.</p><a href="<?=base_url()?>Order/calculate"
                  class="txt-deco-no white">
                  <button type="submit" name="checkout"
                     class="btn btn-primary btn-cart-checkout white btn-effect"
                     style="width: 100%; border-bottom: 2px; padding: 10px 30px;">Checkout</button></a>
               </div>
            </div>
         </div>
         <?}?>
      </div>
   </div>
</section>

<script>


  function deleteCartOnline(obj) {
    var product_id = $(obj).attr("product_id");
    var type_id = $(obj).attr("type_id");
    // alert(product_id);
    var base_path = "<?=base_url();?>";
    $.ajax({
      url: '<?=base_url();?>Cart/deleteCartOnline',
      method: 'post',
      data: {
        product_id: product_id,
        type_id: type_id,
      },
      dataType: 'json',
      success: function(response) {
        if (response.data == true) {
          $.notify({
            icon: 'bi-check-circle-fill',
            // title: '',
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
              '<span data-notify="title">{1}</span> ' +
              '<span data-notify="message">{2}</span>' +
              '<a href="{3}" target="{4}" data-notify="url"></a>' +
              '</div>'
          });

          $( "#cartData" ).load(window.location.href + " #cartData > *" );

          document.getElementById('subTot').innerHTML = '$'+response.data_subtotal;


        } else if (response.data == false) {
          $.notify({
            icon: 'bi-exclamation-octagon-fill',
            // title: '',
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
            template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-danger  alert-dismissible fade show alert-{0}" role="alert">' +
            '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' +
              '<span data-notify="title">{1}</span> ' +
              '<span data-notify="message">{2}</span>' +
              '<a href="{3}" target="{4}" data-notify="url"></a>' +
              '</div>'
          });
          $( "#here" ).load(window.location.href + " #here > *" );
          $( "#count" ).load(window.location.href + " #count > *" );
          $( "#mySidebar" ).load(window.location.href + " #mySidebar > *" );

        }
      }
    });
  }

  function updateCartOnline(i) {
    var product_id = $("#qty"+i).attr("product_id");
    var type_id = $("#qty"+i).attr("type_id");
    var price = $("#qty"+i).attr("price");
    var quantity = $("#qty"+i).val();
    // alert(quantity);
    if(quantity==0){
      window.location.reload();
      return;
    }
    var base_path = "<?=base_url();?>";
    $.ajax({
      url: '<?=base_url();?>Cart/updateCartOnline',
      method: 'POST',
      data: {
        product_id: product_id,
        type_id: type_id,
        quantity: quantity,
        price: price
      },
      dataType: 'json',
      success: function(response) {
        // alert(response)
        if (response.data == true) {
          document.getElementById('price' + i).innerHTML = "₹"+response.newprice;
          $("#qty"+i).attr("price", response.newprice);
          $.notify({
            icon: 'bi-check-circle-fill',
            // title: 'Alert!',
            message: response.data_message
          }, {
            element: 'body',
            position: null,
            type: "success",
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
            template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-success  alert-dismissible fade show alert-{0}" role="alert">' +
            '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' +
              '<span data-notify="title">{1}</span> ' +
              '<span data-notify="message">{2}</span>' +
              // '<div class="progress" data-notify="progressbar">' +
              // '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
              // '</div>' +
              '<a href="{3}" target="{4}" data-notify="url"></a>' +
              '</div>'
          });

          // window.setTimeout(function(){location.reload()},2000)
          $( "#mySidebar" ).load(window.location.href + " #mySidebar > *" );

    document.getElementById('price'+i).value = "₹"+response.newprice;
    document.getElementById('subTot').innerHTML = '₹'+response.data_subtotal;
    $("#qty"+i).attr("price", newprice);

        } else if (response.data == false) {
          $.notify({
            icon: 'bi-exclamation-octagon-fill',
            // title: 'Alert!',
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
            template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-danger  alert-dismissible fade show alert-{0}" role="alert">' +
            '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' +
              '<span data-notify="title">{1}</span> ' +
              '<span data-notify="message">{2}</span>' +
              // '<div class="progress" data-notify="progressbar">' +
              // '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
              // '</div>' +
              '<a href="{3}" target="{4}" data-notify="url"></a>' +
              '</div>'
          });
          // window.setTimeout(function(){location.reload()},1000)
          $( "#mySidebar" ).load(window.location.href + " #mySidebar > *" );


        }
      }
    });
  }
</script>
<script>
function increaseValue(i) {
    var value = parseInt(document.getElementById('qty'+i).value, 10);
    // var price = $("#price").val();
    // alert(price)
    value = isNaN(value) ? 0 : value;
    value++;
    // alert(price);
    document.getElementById('qty'+i).value = value;

    updateCartOnline(i);

  }

  function decreaseValue(i) {

    var value = parseInt(document.getElementById('qty'+i).value, 10);
    // alert(price)
    if (value == 1) {
      document.getElementById('qty'+i).value = value;
      return;
    }
    value = isNaN(value) ? 0 : value;
    value < 1 ? value = 1 : '';
    value--;
    document.getElementById('qty'+i).value = value;

    updateCartOnline(i);

  }
</script>
