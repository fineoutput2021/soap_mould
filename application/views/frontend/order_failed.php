<head>

  <head>
    <title>Order Faield</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- icon link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
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
  <div class="container-fluid mt-5 mb-5" style="background-color: #f4f1eb; padding:20px 5px">
    <div class="row">
      <div class="col-12 text-center d-flex justify-content-center align-items-center">
        <a href="<?=base_url()?>/Home">Home</a><span class="px-3">/</span><a href="<?=base_url()?>/Home/payment">Payment</a><span class="px-3">/</span>
        <p class="margin-0">Order-failed</p>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto mt-5">
        <div class="error">
          <div class="error_header">
            <div class="check_now"><i class="bi bi-exclamation-triangle" aria-hidden="true"></i></div>
          </div>
          <div class="content_error">
            <h1>Opps! Something Went Wrong</h1>
            <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. </p>
            <a href="<?=base_url()?>/Home" class="txt-deco-no">Go to Home</a>
          </div>

        </div>
      </div>
    </div>
  </div>

</body>
