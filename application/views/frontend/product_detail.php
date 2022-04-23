
<head>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>
<style>
.swiper {
width: 100%;
height: 100%;
}

.swiper-slide {
text-align: center;
font-size: 18px;
background: #fff;

/* Center slide text vertically */
display: -webkit-box;
display: -ms-flexbox;
display: -webkit-flex;
display: flex;
-webkit-box-pack: center;
-ms-flex-pack: center;
-webkit-justify-content: center;
justify-content: center;
-webkit-box-align: center;
-ms-flex-align: center;
-webkit-align-items: center;
align-items: center;
}

.swiper-slide img {
display: block;
width: 100%;
height: 100%;
object-fit: cover;
}

.swiper {
width: 100%;
height: 300px;
margin-left: auto;
margin-right: auto;
}

.swiper-slide {
background-size: cover;
background-position: center;
}

.mySwiper2 {
height: 80%;
width: 100%;
}

.mySwiper {
height: 20%;
box-sizing: border-box;
padding: 10px 0;
}

.mySwiper .swiper-slide {
width: 25%;
height: 100%;
opacity: 1;
}

.mySwiper .swiper-slide-thumb-active {
opacity: 1;
}

.swiper-slide img {
display: block;
width: 100%;
height: 100%;
object-fit: cover;
}

.btn-primary{
background-color: #416e7a !important;
border-color: #416e7a !important;
}
.green{
color: #416e7a !important;
}
.form-control:focus{
  color:none;
background-color: none;
border-color :none;
box-shadow: none;
border-color: #eef0f3 !important;
outline: 0 !important;
}

</style>
<style type="text/css">
/* .slick-list emulates .row */
#slick .slick-list {
margin-left: -15px;
margin-right: -15px;
}

/* .slick-slide emulates .col- */
#slick .slick-slide {
padding-right: 15px;
padding-left: 15px;
}

#slick .slick-slide:focus {
outline: none;
}

/* Center website */
/* .main {} */

/* Add padding BETWEEN each column */
/* .rowline,
.rowline>.column {} */

/* Create three equal columns that floats next to each other */
.column {
display: none;
/* Hide all elements by default */
}

/* Clear floats after rowlines */
.rowline:after {
content: "";
display: table;
clear: both;
}

/* Content */
/* .content {} */

.active {
border-bottom: 2px solid #416e7a;
transition: all 1s;
}

/* The "show" class is added to the filtered elements */
.show {
display: block;
}

/* Style the buttons */
</style>

<body>
<div class="container-fluid mt-5 mb-5" style="background-color: #f4f1eb; padding:20px 5px">
<div class="row">
<div class="col-12 text-center d-flex justify-content-center align-items-center">
<a href="<?=base_url()?>/Home" class="green">Home</a><span class="px-3">/</span>
<?
            $this->db->select('*');
$this->db->from('tbl_products');
$this->db->where('id',$type_data->product_id);
$pro_data= $this->db->get()->row();
?>
<a href="<?=base_url()?>/Home/all_products/<?=base64_encode($pro_data->subcategory_id)?>/<?=base64_encode(2)?>" class="green">All Products</a><span
    class="px-3">/</span>
<p class="margin-0"><?=$pro_data->name?></p>
</div>
</div>
</div>
<div class="container-fluid mt-5 mb-5 floatdiv">
<div class="row d-flex justify-content-center">
<div class="col-md-12">
<div class="card">
    <div class="row">
        <div class="col-md-6">

            <!-- swiper-slide -->
            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                class="swiper mySwiper2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" >
                        <img id="image1" src="<?=base_url().$type_data->image1;?>" />
                    </div>
                    <div class="swiper-slide" >
                        <img id="image2" src="<?=base_url().$type_data->image2;?>" />
                    </div>
                    <div class="swiper-slide">
                        <img  id="image3" src="<?=base_url().$type_data->image3;?>" />
                    </div>
                    <div class="swiper-slide">
                        <img  id="image4" src="<?=base_url().$type_data->image4;?>" />
                    </div>
                </div>
                <!-- <div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div> -->
            </div>
            <div thumbsSlider="" class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img id="img1" src="<?=base_url().$type_data->image1;?>" />
                    </div>
                    <div class="swiper-slide">
                        <img id="img2" src="<?=base_url().$type_data->image2;?>" />
                    </div>
                    <div class="swiper-slide">
                        <img id="img3" src="<?=base_url().$type_data->image3;?>" />
                    </div>
                    <div class="swiper-slide">
                        <img id="img4" src="<?=base_url().$type_data->image4;?>" />
                    </div>
                </div>
            </div>
            <!-- swiper slide end -->

        </div>
        <div class="col-md-6">
            <div class="product p-4">
                <div class="mt-4 mb-3">
                    <h5 class="text-uppercase"><?=$pro_data->name;?></h5>
                        <div class="price d-flex flex-row align-items-center mt-3" >
                            <span class="h4 green" id="price" value="<?=$type_data->sp;?>">₹<?=$type_data->sp;?></span>
                            <div class="ml-2">
                                <!-- <small class="px-2">80g(Static)</small> -->
                            </div>
                        </div>

                </div>
                <div class="row">
                <div class="d-flex col-md-6 mobview-quantity" style="align-items: center;">
                    <label class="green">Quantity:</label>
                    <button class="btn btn-link "
                        onclick="decreaseValue()">
                        <i class="bi bi-dash green"></i>
                    </button>
                    <input id="qty" min="1" product_id="<?=base64_encode($type_data->product_id)?>" type_id="<?=base64_encode($type_data->id)?>" name="qty" readonly value="1" type="number"
                        class="form-control form-control-md" style="width: 50px;" />
                    <button class="btn btn-link "
                        onclick="increaseValue()">
                        <i class="bi bi-plus green"></i>
                    </button>
                </div>
                <div class="d-flex col-md-6 mobview-type">
                  <div class=col-md-3>
                    <label class="green mt-1">Type:</label>
                  </div>
                  <div class=col-md-9>
                    <select class="form-control green" onchange="type_change(this)" type_id="<?=base64_encode($type_data->id)?>" name="category_id" required>
                        <?php $i=1; foreach ($type_full->result() as $data) { ?>
                        <option id="type_name" value="<?=base64_encode($data->id)?>" <?if ($data->id==$type_data->id) {
                                 echo " selected";
                             }?>><?=$data->name?></option>
                        <?php $i++; } ?>
                      </select>
                  </div>
                </div>
              </div>
                <div class="mt-3 align-items-center justify-content-center">
                  <?if(empty($this->session->userdata('user_data'))){?>
             <button class="mt-3 m-2 btn btn-primary text-uppercase px-4 mobview-btn"  onclick="addToCartOffline(this)" product_id="<?=base64_encode($type_data->product_id)?>" type_id="<?=base64_encode($type_data->id)?>" id="add_cart"  quantity=1>Add To Cart</button>
             <?}else{?>
             <button class="mt-3 m-2 btn btn-primary text-uppercase px-4 mobview-btn"  onclick="addToCartOnline(this)" product_id="<?=base64_encode($type_data->product_id)?>" type_id="<?=base64_encode($type_data->id)?>" id="add_cart" quantity=1>Add To Cart</button>
             <?}?>
                    <!-- <a href="<?=base_url()?>Home/checkout" class="mt-3">
                        <button class="mt-3 m-2 btn btn-primary text-uppercase px-4 mobview-btn">Buy it
                            Now</button></a> -->
                </div>
                <hr>
                <?if(!empty($this->session->userdata('user_data'))){?>
                <div class="row">
                    <div class="col-md-6">
                      <?if(!empty($this->session->userdata('user_data'))){
                                            $this->db->select('*');
                                $this->db->from('tbl_wishlist');
                                $this->db->where('id',$type_data->id);
                                $this->db->where('user_id',$this->session->userdata('user_id'));
                                $wishlist_data= $this->db->get()->row();
                                if(empty($wishlist_data)){
                                ?>
                        <div class="hover-green"><a href="javascript:void(0);" title="Add to Wishlist" onclick="wishlist(this)" product_id="<?=base64_encode($type_data->product_id)?>" type_id="<?=base64_encode($type_data->id)?>" status="add"
                            user_id="<?=base64_encode($this->session->userdata('user_id'))?>" status="add" class="green">
                          <i class="bi bi-heart-half px-2"></i>Add to Wishlist</a></div>
                          <?}else{?>
                            <div class="hover-green"><a href="javascript:void(0);" title="Remove from Wishlist" onclick="wishlist(this)" product_id="<?=base64_encode($type_data->product_id)?>" type_id="<?=base64_encode($type_data->id)?>" status="remove"
                                user_id="<?=base64_encode($this->session->userdata('user_id'))?>" status="add" class="green">
                              <i class="bi bi-heart-half px-2"></i>Remove from Wishlist</a></div>
                                    <?}}?>

                    </div>
                </div>
                <?}?>
                <div class="row justify-content-center">
                    <div class="col-lg-12 bg-green text-center mb-5">
                        <h6 style="padding: 10px 0px 10px;" class="white"><i class="bi bi-truck"
                                style="margin-right: 10px;"></i>Cash on delivery!</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

<script>
function change_image(image) {

var container = document.getElementById("main-image");

container.src = image.src;
}
document.addEventListener("DOMContentLoaded", function (event) {
});
</script>
<script>
// bootstrap 3 breakpoints
const breakpoint = {
// extra small screen / phone
xs: 480,
// small screen / tablet
sm: 768,
// medium screen / desktop
md: 992,
// large screen / large desktop
lg: 1200
};

// bootstrap 3 responsive multi column slick carousel
$('#slick').slick({
autoplay: false,
autoplaySpeed: 9000,
draggable: true,
pauseOnHover: false,
infinite: true,
dots: false,
arrows: false,
speed: 1000,

mobileFirst: true,

slidesToShow: 1,
slidesToScroll: 1,

responsive: [{
breakpoint: breakpoint.xs,
settings: {
    slidesToShow: 3,
    slidesToScroll: 1
}
},
{
breakpoint: breakpoint.sm,
settings: {
    slidesToShow: 3,
    slidesToScroll: 1
}
},
{
breakpoint: breakpoint.md,
settings: {
    slidesToShow: 4,
    slidesToScroll: 2
}
},
{
breakpoint: breakpoint.lg,
settings: {
    slidesToShow: 4,
    slidesToScroll: 2
}
}
]
});
</script>
<script>
filterSelection("all")
function filterSelection(c) {
var x, i;
x = document.getElementsByClassName("column");
if (c == "all") c = "";
for (i = 0; i < x.length; i++) {
w3RemoveClass(x[i], "show");
if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
}
}

function w3AddClass(element, name) {
var i, arr1, arr2;
arr1 = element.className.split(" ");
arr2 = name.split(" ");
for (i = 0; i < arr2.length; i++) {
if (arr1.indexOf(arr2[i]) == -1) { element.className += " " + arr2[i]; }
}
}

function w3RemoveClass(element, name) {
var i, arr1, arr2;
arr1 = element.className.split(" ");
arr2 = name.split(" ");
for (i = 0; i < arr2.length; i++) {
while (arr1.indexOf(arr2[i]) > -1) {
    arr1.splice(arr1.indexOf(arr2[i]), 1);
}
}
element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
btns[i].addEventListener("click", function () {
var current = document.getElementsByClassName("active");
current[0].className = current[0].className.replace(" active", "");
this.className += " active";
});
}
</script>
<script>

var swiper = new Swiper(".mySwiper", {
spaceBetween: 10,
slidesPerView: 4,
freeMode: true,
watchSlidesProgress: true,

});
var swiper2 = new Swiper(".mySwiper2", {
spaceBetween: 10,
navigation: {
nextEl: ".swiper-button-next",
prevEl: ".swiper-button-prev",
},
thumbs: {
swiper: swiper,
},
});

</script>
<script>
function increaseValue() {
    var value = parseInt(document.getElementById('qty').value, 10);
    var price = $("#price").attr("value");
    // var price = $("#price").val();
    // alert(price)
    value = isNaN(value) ? 0 : value;
    value++;
    newprice = price*value;
    // alert(price);
    document.getElementById('qty').value = value;
    document.getElementById('add_cart').setAttribute("quantity", value);
    document.getElementById('price').innerHTML = '₹'+newprice;
  }

  function decreaseValue() {

    var value = parseInt(document.getElementById('qty').value, 10);
    var price = $("#price").attr("value");
    // alert(price)
    if (value == 1) {
      document.getElementById('qty').value = value;
      return;
    }
    value = isNaN(value) ? 0 : value;
    value < 1 ? value = 1 : '';
    value--;
    newprice = price*value;
    document.getElementById('qty').value = value;
    document.getElementById('price').value = "₹"+newprice;
    document.getElementById('price').innerHTML = '₹'+newprice;

  }
</script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/slider/ajaxupload.3.5.js"></script>
<script>
function type_change(obj){

  var type_id = $(obj).val();

            $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Home/type_change",
            data: {
            type_id: type_id,
            },
            dataType: 'json',
            success: function(response){
                  if(response.data == 'success'){
                     var BASE_URL = "<?php echo base_url();?>";
                    // alert(response.update_type.sp)
                      var pro_id = btoa(response.update_type.product_id);
                      var type_id = btoa(response.update_type.id);
                      $("#qty").attr("product_id", response.update_type.product_id);
                      $("#qty").attr("type_id", response.update_type.id);
                      $("#add_cart").attr("product_id", pro_id);
                      $("#add_cart").attr("type_id", type_id);
                      // $("#price").html();
                    document.getElementById("price").innerHTML = '₹'+response.update_type.sp;
                     $("#price").attr("value", response.update_type.sp);

                     $("#image1").attr('src', BASE_URL+response.update_type.image1);
                     $("#image2").attr('src', BASE_URL+response.update_type.image2);
                     $("#image3").attr('src', BASE_URL+response.update_type.image3);
                     $("#image4").attr('src', BASE_URL+response.update_type.image4);

                     $("#img1").attr('src', BASE_URL+response.update_type.image1);
                     $("#img2").attr('src', BASE_URL+response.update_type.image2);
                     $("#img3").attr('src', BASE_URL+response.update_type.image3);
                     $("#img4").attr('src', BASE_URL+response.update_type.image4);

                     $("#add_cart").attr('quantity', 1);
                     $("#qty").val(1);



                  }
                  else{

                      }

            }
            });   //$.ajax ends here
            // Put the results in a div
            // posting.done(function( data ) {
            //
            //
            //
            //   var content = $( data ).find( "#content" );
            //   // console.log(content)
            //     alert(JSON.stringify(content));
            //   $( "#result" ).empty().append( content );
            // });

}
</script>
