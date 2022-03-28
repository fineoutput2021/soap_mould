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
	<div class="bg-image-banner">
	<div class="container" >
		<div class="row">
			<div class="col-12">
				<h1 class="white">Wishlist Page</h1>
				<div>
                     <ul class="breadcrumb">
                        <li><a href="<?=base_url()?>/Home"  class="white">Home</a></li>
                        <li style="font-weight: bold;" class="white">Wishlist</li>
                     </ul>
                  </div>
			</div>
		</div>
	</div>
	</div>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-12 col-12">
				<div class="">
					<table class="table table-responsive table-bordered rounded-3">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col" colspan="2">Product Detail</th>
      <th scope="col"  class="text-center">Check Status</th>
      <th scope="col"  class="text-center">Add to cart</th>
      <th scope="col"  class="text-center">Price</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <tr>
      <th scope="row">1</th>
      <td colspan="2" class="align-middle"><div class="d-flex align-items-center">
                           <img src="images/product/1.jpg" class="img-fluid rounded-3 " style="width: 120px;" alt="">
                           <div class="flex-column ms-4">
                              <p class="mb-2">Lorem ipsum dolor sit amet</p>
                              <p class="mb-0">Daniel Kahneman</p>
                           </div>
                        </div></td>
      <td  class="text-center align-middle">In Stock</td>
      <td class="text-center align-middle"><a href="<?=base_url()?>/Home/cart"><button class="btn btn-primary">Add to Cart</button></a></td>
      <td  class="text-center align-middle">₹1,796.00</td>
      <td  class="text-center align-middle"><div class="" style=""><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td colspan="2" class="align-middle"><div class="d-flex align-items-center">
                           <img src="images/product/1.jpg" class="img-fluid rounded-3 " style="width: 120px;" alt="">
                           <div class="flex-column ms-4">
                              <p class="mb-2">Lorem ipsum dolor sit amet</p>
                              <p class="mb-0">Daniel Kahneman</p>
                           </div>
                        </div></td>
      <td  class="text-center align-middle text-danger">Out of Stock</td>
      <td class="text-center align-middle"><a href="<?=base_url()?>/Home/cart"><button class="btn btn-primary">Add to Cart</button></a></td>
      <td  class="text-center align-middle">₹1,796.00</td>
      <td  class="text-center align-middle"><div class="" style=""><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div></td>
    </tr>
  </tbody>
</table>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
