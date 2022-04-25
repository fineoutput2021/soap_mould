<!-- ======= Custumly ======= -->
<div class="container-fluid custumply">
   <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
         <div class="col">
            <div class="d-flex">
               <div class="icon green-dark">
                  <i class="bi bi-calendar4-week"></i>
               </div>
               <div class="content green-dark">
                  <h4>Free Shipping</h4>
                  <p class="green">Free Shipping of all orders above $999</p>
               </div>
            </div>
         </div>
         <div class="col">
            <div class="d-flex">
               <div class="icon green-dark">
                  <i class="bi bi-currency-exchange"></i>
               </div>
               <div class="content green-dark">
                  <h4>Pan India Shipping</h4>
                  <p class="green">We Ship All Across India</p>
               </div>
            </div>
         </div>
         <div class="col">
            <div class="d-flex">
               <div class="icon green-dark">
                  <i class="bi bi-shield-lock-fill"></i>
               </div>
               <div class="content green-dark">
                  <h4>Secured Payment</h4>
                  <p class="green">We accept all major Credit Cards, PayTM, UPI and more</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- ================= footer ============ -->
<footer>
   <div class="container-fluid light-gray site-footer">
      <div class="container">
         <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
               <h2 class="green-dark text-center">
                  Quick Links
               </h2>
               <ul class="text-center footer-link">
                  <li class="footer-link-li"><a href="#" class="green">Shipping Policy</a></li>
                  <li class="footer-link-li"><a href="#" class="green">Return Policy</a></li>
                  <li class="footer-link-li"><a href="#" class="green">Terms of Service</a></li>
                  <li class="footer-link-li"><a href="#" class="green">Privacy Policy</a></li>
               </ul>
            </div>
            <div class="col">
               <h2 class="green-dark text-center">
                  Keep In Touch
               </h2>
               <ul class="green text-center">
                  <li>We promise we won't write to you often</li>
               </ul>
               <div class="text-center subscribe d-flex justify-content-center">
                  <input type="email" name="email" placeholder="Enter Email..." style="" class="p-2">
                  <button class="btn green-dark" style="">Subscribe</button>
               </div>
            </div>
            <div class="col">
               <h2 class="green-dark text-center">
                  Contact Us
               </h2>
               <ul class="green text-center">
                  <li class="footer-link-li"><a href="" class="green-dark">Message us on WhatsApp</a></li>
                  <li class="footer-link-li"><a href="" class="green-dark">Send us a DM on Instagram</a></li>
                  <li class="footer-link-li"><a href="" class="green-dark">Email us at info@soapsquare.in</a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</footer>
<section class="bg-dark  z-index-min footer-second">
   <div class="container">
      <div class="row p-2">
         <div class="col-md-11 mt-2">
            <p class="white">This website uses cookies to ensure you get the best experience on our website. <a
               href="#" class="white">Learn More</a></p>
         </div>
         <div class="col-md-1 bg-green mt-2">
            <a href="#" class="btn bg-green white" role="btn">Got it</a>
         </div>
      </div>
   </div>
</section>
<!-- back top top button -->
<button type="button" class="btn bg-green btn-floating btn-lg btn-radius" id="btn-back-to-top">
<i class="bi bi-arrow-up white"></i>
</button>
<!-- model start login/register -->
<!-- model strat -->
<!-- model off canvas -->
<!-- index model -->


<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
   tabindex="-1">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title green" id="exampleModalToggleLabel">Login Now</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <form method="POST" action="<?=base_url()?>User/login_process_page" enctype="multipart/form-data">
               <div class="mb-3">
                  <label for=" " class="form-label">Enter Email</label>
                  <input type="text" name="email" required class="form-control"  aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
               </div>
               <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" required name="password" class="form-control" value="">
                  <!-- <input type="checkbox" onclick="myFunction()">
                     <spam class="ml_5">Show Password</spam> -->
               </div>
         </div>
         <div class="modal-footer justify-content-center">
            <div class="text-center bg-green w-100" style="cursor:pointer;">
               <button class="btn btn-primary btn-lg" type="Submit" style="">Login</button>
            </div>
            </form>
            <div class="w-100 text-center">
               <button class="btn" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"
                  style="text-decoration: underline;">Register</button>
            </div>

            <div class="w-100 text-center"><button class="btn " data-bs-target="#exampleModalToggle3"
               data-bs-toggle="modal">Forgot Password</button></div>
            <!-- <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Register</button>
               <button class="btn " data-bs-target="#exampleModalToggle3" data-bs-toggle="modal">Forgot Password</button> -->
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
   tabindex="-1">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title green" id="exampleModalToggleLabel2">Register</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <form method="POST" action="<?=base_url()?>User/register_process" enctype="multipart/form-data">
               <div class="mb-3">
                  <label for=" " class="form-label">Name</label>
                  <input type="text" required name="name" class="form-control" id="Name">
               </div>
               <div class="mb-3">
                  <label for=" " class="form-label">Email</label>
                  <input type="text" required name="email" class="form-control"  aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
               </div>
               <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Enter Password</label>
                  <input type="password" required name="password" class="form-control" >
                  <!-- <input type="checkbox" onclick="myFunction()">
                     <spam class="ml_5">Show Password</spam> -->
               </div>
         </div>
         <div class="modal-footer">
            <div class="text-center bg-green w-100">
               <button class="btn btn-primary btn-lg" type="Submit" style="">Register</button>
            </div>
         </div>
       </form>
      </div>
   </div>
</div>
<div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel23"
   tabindex="-1">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title green" id="exampleModalToggleLabel23">Forgot Password</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>


         <!--Forgot password-->
         <div class="modal-body">
            <form>
               <div class="mb-3">
                  <label for=" " class="form-label">Name</label>
                  <input type="name" class="form-control" id="InputName">
               </div>
               <div class="mb-3">
                  <label for=" " class="form-label">Address</label>
                  <input type="email" class="form-control"  aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
               </div>
               <div class="mb-3">
                  <label for="exampleInputOTP" class="form-label">Enter OTP</label>
                  <input type="number" class="form-control" id="exampleInputOTP">
               </div>
               <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Enter New Password</label>
                  <input type="password" class="form-control"
                     value="">
                  <!-- <input type="checkbox" onclick="myFunction()">
                     <spam class="ml_5">Show Password</spam> -->
               </div>
            </form>
         </div>
         <div class="modal-footer">
            <div class="text-center bg-green w-100">
               <input class="btn btn-primary btn-lg" type="Submit" style="" data-bs-target="#exampleModalToggle"
                  data-bs-toggle="modal">
            </div>
            <div class="text-center w-100">
               <a href="" class="btn green" data-bs-dismiss="modal" aria-label="Close">Cancel</a>
               <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>
            <!-- <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Submit Now</button> -->
         </div>
      </div>
   </div>
</div>
<!-- search offcanvas -->
<div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
   <div class="offcanvas-header">
      <h5 id="offcanvasTopLabel">Search Now</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
   </div>
   <div class="offcanvas-body">
     <form action="<?=base_url()?>Home/search" method="get" enctype="multipart/form-data">
      <div class="input-group">
         <div class="form-outline d-flex" style="width: 100%;">
            <input type="text" id="search" name="search" class="form-control form-control-lg " placeholder="search here..." />
            <button type="submit" class="btn btn-primary">
            <i class="bi bi-search"></i>
            </button>
         </div>
      </div>
    </form>
   </div>
</div>
<!-- mobileview -->
<div class="offcanvas minicart offcanvas-end mobiledb" tabindex="-1" id="offcanvasRight"
   aria-labelledby="offcanvasRightLabel">
   <div class="offcanvas-header">
      <h5 id="offcanvasRightLabel">Shopping Cart</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
         aria-label="Close"></button>
   </div>
   <div class="offcanvas-body mobiledb">
      <p class="h6 green">No products in the cart.</p>
      <hr>
      <div style="display: flex;justify-content: space-around;">
         <p class="h6">Total</p>
         <p class="h6">₹0.00</p>
      </div>
      <div class=" justify-content-center">
         <div class="col-12 bg-green text-center mb-2">
            <p style="padding: 10px 0px 10px;" class="white"><i class="bi bi-truck" style="margin-right: 10px;"></i>Your order is free delivery !</p>
         </div>
         <p>Taxes and shipping calculated at checkout</p>
      </div>
   </div>
</div>


<div class="offcanvas minicart offcanvas-end mobiledb" tabindex="-1" id="offcanvasRight2"
   aria-labelledby="offcanvasRightLabel" aria-controls="offcanvasScrolling">
   <div class="offcanvas-header">
      <h5 id="offcanvasRightLabel">Shopping Cart</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
         aria-label="Close"></button>
   </div>
   <div class="offcanvas-body mobiledb">
      <section class="pt-0">
<div class="container">
   <div class="row">
      <div class="col-lg-12">
         <div class="row">
            <div class="col-md-12 col-lg-12">
               <div class="row border  mb-3 py-3 mx-0">
                  <div class="col-12"><button type="button" class="btn-close"
                     data-bs-dismiss="modal" aria-label="Close" style="float: right;"></button></div>
                  <div class="col-lg-2"><img class="w-100" src="<?=base_url()?>assets/frontend/images/product/1.jpg"></div>
                  <div class="col-lg-7">
                     <!-- <h5 class="fs-0">Details</h5>
                        <hr class=""> -->
                     <a href="#" class="txt-deco-no green">
                        <p class="fs--1 fw-300">Lorem Ipsum is simply</p>
                     </a>
                     <div class="d-flex col-md-12 mobview-quantity" style="align-items: center;">
                        <label class="green">Quantity:</label>
                        <button class="btn btn-link "
                           onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                        <i class="bi bi-dash green"></i>
                        </button>
                        <input id="form1" min="1" name="quantity" value="1" type="number"
                           class="form-control form-control-md" style="width: 50px;" />
                        <button class="btn btn-link "
                           onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                        <i class="bi bi-plus green"></i>
                        </button>
                     </div>
                  </div>
                  <div class="col-lg-3 ">
                        <p class="mb-0 green mobview-quantity"><strong>₹1,796.00</strong></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--/.row-->
   <div class=" justify-content-center">
      <div class="col-lg-12 bg-green text-center mb-5">
         <h6 style="padding: 10px 0px 10px;" class="white"><i class="bi bi-truck"
            style="margin-right: 10px;"></i>Your order is free delivery !</h6>
      </div>
   </div>
   <div class="row justify-content-center mb-3" style="">
      <div class="col-12">
         <div class="row">
            <div class="col-md-4 col-6 text-center">
               <h2 class="green-dark" style="opacity: 80%;">₹1,796.00</h2>
               <p>Tax included.</p>
               <button type="submit" name="checkout"
                  class="btn btn-primary btn-cart-checkout white btn-effect"
                  style="width: 100%; border-bottom: 2px;"><a href="<?=base_url()?>/Home/checkout"
                  class="txt-deco-no white">Check Out</a></button>
            </div>
         </div>
      </div>
   </div>
</div>
<!--/.container-->
</section>
      <div class=" justify-content-center">
         <div class="col-12 bg-green text-center mb-2">
            <p style="padding: 10px 0px 10px;" class="white"><i class="bi bi-truck" style="margin-right: 10px;"></i>Your order is free delivery !</p>
         </div>
      </div>
   </div>
</div>
<!-- end off canvas right -->




<!-- end model offcanvas -->
</div>
<script>
// show password
function myFunction() {
   var x = document.getElementById("myPassword");
   if (x.type === "password") {
      x.type = "text";
   } else {
      x.type = "password";
   }
}
//Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
   scrollFunction();
};

function scrollFunction() {
   if (
      document.body.scrollTop > 20 ||
      document.documentElement.scrollTop > 20
   ) {
      mybutton.style.display = "block";
   } else {
      mybutton.style.display = "none";
   }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
   document.body.scrollTop = 0;
   document.documentElement.scrollTop = 0;
}
</script>
<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 0000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>

<script>

$(document).ready(function() {
<?php if(!empty($this->session->flashdata('emessage'))){ ?>
 var fail_message = '<?php echo $this->session->flashdata('emessage')?>';
 loadErrorNotify(fail_message);
<?php  } ?>

<?php  if(!empty($this->session->flashdata('validationemessage'))){
$valid_errors = $this->session->flashdata('validationemessage');
$valid_errors = substr($valid_errors, 0, -1); ?>
loadErrorNotify("<?=$valid_errors?>");
<?php  } ?>

<?php if(!empty($this->session->flashdata('smessage'))){ ?>
  var succ_message = '<?php echo $this->session->flashdata('smessage');?>';
  loadSuccessNotify(succ_message);
 <?php  } ?>

});
function loadSuccessNotify(succ_message){
  $.notify({
             icon: 'bi-check-circle-fill',
             // title: 'Alert!',
             message: succ_message
         },{
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
             offset: 0,
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
             '<div class="progress" data-notify="progressbar">' +
              '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                    '</div>' +
             '<a href="{3}" target="{4}" data-notify="url"></a>' +
             '</div>'
         });

}

    function loadErrorNotify(message){
      $.notify({
                 icon: 'bi-exclamation-octagon-fill',
                 // title: 'Alert!',
                 message: message
             },{
                 element: 'body',
                 position: null,
                 type: "danger",
                 allow_dismiss: true,
                 newest_on_top: false,
                 showProgressbar: false,
                 placement: {
                     from: "top",
                     align: "right"
                 },
                 offset: 0,
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
                 '<span data-notify="icon"></span> ' +
                 '<span data-notify="title">{1}</span> ' +
                 '<span data-notify="message">{2}</span>' +
                 '<a href="{3}" target="{4}" data-notify="url"></a>' +
                 '</div>'
             });

    }


    //-----------add to cart offline-----

      function addToCartOffline(obj){

        var product_id = $(obj).attr("product_id");
        var type_id = $(obj).attr("type_id");
        var quantity = $(obj).attr("quantity");
        var base_path = "<?=base_url();?>";
           $.ajax({
           url:'<?=base_url();?>Cart/addToCartOffline',
           method: 'post',
           data: {product_id: product_id, type_id: type_id, quantity: quantity},
           dataType: 'json',
           success: function(response){
           if(response.data == true){
             // alert(response.data_message)
              // var msg = response.data_message;
              // alert("product Added")
                  $.notify({
                            icon: 'bi-check-circle-fill',
                            // title: 'Alert!',
                            message: "Item successfully added in your cart"
                        },{
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
                            offset: 0,
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
                            '<span data-notify="icon"></span> ' +
                            '<span data-notify="title">{1}</span> ' +
                            '<span data-notify="message">{2}</span>' +
                            '<a href="{3}" target="{4}" data-notify="url"></a>' +
                            '</div>'
                        });
                        // window.setTimeout(function(){location.reload()},2000)
                        $( "#mobileHeader" ).load(window.location.href + " #mobileHeader > *" );
                            $( "#collapsibleNavbar" ).load(window.location.href + " #collapsibleNavbar > *" );

           }else if(response.data == false){
             var msg = response.data_message;
                    // alert(msg);
                   $.notify({
                               icon: 'bi-exclamation-octagon-fill',
                               // title: 'Alert!',
                               message: msg
                           },{
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
                               offset: 0,
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
                               '<span data-notify="icon"></span> ' +
                               '<span data-notify="title">{1}</span> ' +
                               '<span data-notify="message">{2}</span>' +
                               '<a href="{3}" target="{4}" data-notify="url"></a>' +
                               '</div>'
                           });
                           // window.setTimeout(function(){location.reload()},2000)
                           $( "#mobileHeader" ).load(window.location.href + " #mobileHeader > *" );
                               $( "#collapsibleNavbar" ).load(window.location.href + " #collapsibleNavbar > *" );

           }
         }
           });

      }

    ///-----------add to cart online-----------

      function addToCartOnline(obj){

        var product_id = $(obj).attr("product_id");
        var type_id = $(obj).attr("type_id");
        var quantity = $(obj).attr("quantity");
        var base_path = "<?=base_url();?>";
        // alert(type_id)
           $.ajax({
           url:'<?=base_url();?>Cart/addToCartOnline',
           method: 'post',
           data: {product_id: product_id, type_id: type_id, quantity: quantity},
           dataType: 'json',
           success: function(response){
             // alert(response)
           if(response.data == true){
             // alert(response.data_message)
              // var msg = response.data_message;
                  $.notify({
                            icon: 'bi-check-circle-fill',
                            // title: 'Alert!',
                            message: "Item successfully added in your cart"
                        },{
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
                            offset: 0,
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
                            '<span data-notify="icon"></span> ' +
                            '<span data-notify="title">{1}</span> ' +
                            '<span data-notify="message">{2}</span>' +
                            '<a href="{3}" target="{4}" data-notify="url"></a>' +
                            '</div>'
                        });
                        // window.setTimeout(function(){location.reload()},2000)
                        $( "#mobileHeader" ).load(window.location.href + " #mobileHeader > *" );
                            $( "#collapsibleNavbar" ).load(window.location.href + " #collapsibleNavbar > *" );


           }else if(response.data == false){
             var msg = response.data_message;
                   $.notify({
                               icon: 'bi-exclamation-octagon-fill',
                               // title: 'Alert!',
                               message: msg
                           },{
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
                               offset: 0,
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
                               '<span data-notify="icon"></span> ' +
                               '<span data-notify="title">{1}</span> ' +
                               '<span data-notify="message">{2}</span>' +
                               '<a href="{3}" target="{4}" data-notify="url"></a>' +
                               '</div>'
                           });
                           // window.setTimeout(function(){location.reload()},2000)
                           $( "#mobileHeader" ).load(window.location.href + " #mobileHeader > *" );
                               $( "#collapsibleNavbar" ).load(window.location.href + " #collapsibleNavbar > *" );


           }
         }
           });

      }

      //---------------wishlist----------
function wishlist(obj) {
  var product_id = $(obj).attr("product_id");
  var type_id = $(obj).attr("type_id");
  var user_id = $(obj).attr("user_id");
  var status = $(obj).attr("status");
  // alert(product_id);
  // alert(user_id);
  // alert(status);
  // return;
  $.ajax({
    url: '<?=base_url();?>Cart/wishlist',
    method: 'post',
    data: {
      product_id: product_id,user_id: user_id,status : status, type_id: type_id
    },
    dataType: 'json',
    success: function(response) {
      // alert(response.data_message)
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
          offset: 0,
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

        $( "#mobileHeader" ).load(window.location.href + " #mobileHeader > *" );
            $( "#collapsibleNavbar" ).load(window.location.href + " #collapsibleNavbar > *" );
            $( "#wishlist" ).load(window.location.href + " #wishlist > *" );


      } else if (response.data == false) {
        $.notify({
          // icon: 'fa fa-times',
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
          offset: 0,
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
        $( "#mobileHeader" ).load(window.location.href + " #mobileHeader > *" );
            $( "#collapsibleNavbar" ).load(window.location.href + " #collapsibleNavbar > *" );



      }
      // window.setTimeout(function(){location.reload()},10000)

    }
  });
}

    </script>

    <script type="text/javascript">
    $(".fa-bars").click(function () {
      $(".side_bar").css({
        transform: 'translateX(0px)',
      });
    });
    $(".close_side").click(function () {
      $(".side_bar").css({
        transform: 'translateX(-900px)',
      });
    });
</script>
<script src="<?=base_url()?>assets/frontend/assets/js/bootstrap-notify.min.js"></script>
</body>
</html>
