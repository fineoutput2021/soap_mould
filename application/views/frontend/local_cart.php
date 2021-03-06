
<style media="screen">
  .mobview_100{

  }
  @media (max-width:767px) {
    .mobview_100{
      width: 100% !important;
    }
  }
</style>

<div class="container-fluid mt-5 mb-5" style="background-color: #f4f1eb; padding:20px">
<div class="row">
<div class="col-12 text-center d-flex justify-content-center align-items-center">
   <a href="<?=base_url()?>/Home">Home</a><span class="px-3">/</span>
   <p class="margin-0">Cart</p>
</div>
</div>
</div>
<section class="pt-0 mb-5" id="cartData">
   <div class="container">
      <div class="row">
        <?if (empty($this->session->userdata('cart_data'))) {?>
            <h4>Your cart is empty! Please add some product</h4>
            <?} else {
            $cartdata= $this->session->userdata('cart_data');
            $total=0;
            $i=1;
            foreach ($cartdata as $cart) {
            $this->db->select('*');
            $this->db->from('tbl_type');
            $this->db->where('product_id', $cart['product_id']);
            $this->db->where('id', $cart['type_id']);
            $pro_data= $this->db->get()->row(); ?>
         <div class="col-lg-12">
            <div class="row">
               <div class="col-md-12 col-lg-12">
                  <div class="row border  mb-3 py-3 mx-0">
                    <!--Cart Card Start-->
                     <div class="col-12"><button type="button" class="btn-close"
                        data-bs-dismiss="modal" onclick="deleteCartOffline(this)" product_id="<?=base64_encode($cart['product_id'])?>" type_id="<?=base64_encode($cart['type_id'])?>" aria-label="Close" style="float: right;"></button></div>
                     <div class="col-lg-2"><img class="w-100" src="<?=base_url().$pro_data->image1;?>"></div>
                     <div class="col-lg-7">
                        <a href="#" class="txt-deco-no green">
                           <p class="fs--1 fw-300"><?=$pro_data->name?></p>
                        </a>
                        <div class="d-flex col-md-12 mobview-quantity" style="align-items: center;">
                          <label class="green">Quantity:</label>
                          <button class="btn btn-link "
                              onclick="decreaseValue(<?=$i;?>)">
                              <i class="bi bi-dash green"></i>
                          </button>
                          <input id="qty<?=$i;?>" min="1" product_id="<?=base64_encode($cart['product_id'])?>" type_id="<?=base64_encode($cart['type_id'])?>" name="qty" readonly value="<?=$cart['quantity']?>" price="<?=$pro_data->spgst*$cart['quantity'];?>" type="number"
                              class="form-control form-control-md" style="width: 50px;" />
                          <button class="btn btn-link "
                              onclick="increaseValue(<?=$i;?>)">
                              <i class="bi bi-plus green"></i>
                          </button>
                        </div>
                     </div>
                     <div class="col-lg-3 ">
                           <p class="mb-0 green mobview-quantity"><strong id="price<?=$i;?>">???<?=$pro_data->spgst*$cart['quantity']?></strong></p>
                           <input type="hidden" name="amount" id="amount<?=$i?>" min="1" value="<?=$cart['quantity']?>" maxlength="12" i="<?=$i?>" product_id="<?=base64_encode($cart['product_id'])?>" type_id="<?=base64_encode($cart['type_id'])?>" sp="<?=$pro_data->spgst?>">
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
               style="margin-right: 10px;"></i>Free Shipping On All Orders!</h6>
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
                    <?
                    $subtotal=0;
                    $cartdata= $this->session->userdata('cart_data');
                    $price=0;
                    $i=1;
                    foreach ($cartdata as $cart) {
                    $this->db->select('*');
                    $this->db->from('tbl_type');
                    $this->db->where('product_id', $cart['product_id']);
                    $this->db->where('id', $cart['type_id']);
                    $pro_data= $this->db->get()->row();
                    $price = $pro_data->spgst*$cart['quantity'];
                    $total = $total + $price;
                  }
                  $subtotal = $subtotal+$total;
                  echo '???'.$subtotal;
                    ?>
                  </h2>
                  <p>Tax included.</p><a href="#exampleModalToggle"
                  class="txt-deco-no white" data-bs-toggle="modal" role="button">
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

  function deleteCartOffline(obj) {
    var product_id = $(obj).attr("product_id");
    var type_id = $(obj).attr("type_id");
    // alert(product_id);
    var base_path = "<?=base_url();?>";
    $.ajax({
      url: '<?=base_url();?>Cart/deleteCartOffline',
      method: 'post',
      data: {
        product_id: product_id,
        type_id: type_id
      },
      dataType: 'json',
      success: function(response) {
        // alert(response)
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
            template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-danger  alert-dismissible fade show alert-{0}" role="alert">' +
            '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' +
              '<span data-notify="title">{1}</span> ' +
              '<span data-notify="message">{2}</span>' +
              '<a href="{3}" target="{4}" data-notify="url"></a>' +
              '</div>'
          });

          $( "#cartData" ).load(window.location.href + " #cartData > *" );
          $( "#cartCount" ).load(window.location.href + " #cartCount > *" );

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

  function updateCartOffline(i) {
    var product_id = $("#qty"+i).attr("product_id");
    var type_id = $("#qty"+i).attr("type_id");
    var price = $("#qty"+i).attr("price");
    var qty = $("#qty"+i).val();
    if(qty==0){
      window.location.reload();
      return;

    }
    var base_path = "<?=base_url();?>";
    $.ajax({
      url: '<?=base_url();?>Cart/updateCartOffline',
      method: 'post',
      data: {
        product_id: product_id,
        quantity: qty,
        type_id: type_id,
        price: price
      },
      dataType: 'json',
      success: function(response) {
        // alert(response)
        if (response.data == true) {
            // document.getElementById('price'+i).value = "$"+response.newprice;
          $.notify({
            // icon: 'fa fa-check',
            title: 'Alert!',
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

          document.getElementById('subTot').innerHTML = '???'+response.data_subtotal;
          $('#price'+i).html('???'+response.newprice);
          // $('#price_'+i).html(price);
        } else if (response.data == false) {
          $.notify({
            icon: 'fa fa-cancel',
            title: 'Alert!',
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
          $( "#here" ).load(window.location.href + " #here > *" );
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

    updateCartOffline(i);

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

    updateCartOffline(i);

  }
</script>
