<div class="container-fluid mt-5 mb-5" style="background-color: #f4f1eb; padding:20px">
<div class="row">
  <div class="col-12 text-center d-flex justify-content-center align-items-center">
     <a href="<?=base_url()?>/Home">Home</a><span class="px-3">/</span><a href="<?=base_url()?>/Home/payment">Payment</a><span class="px-3">/</span>
     <p  class="margin-0">Order Failed</p>
  </div>
</div>
</div>

<div class="container mt-4 mb-4">
<div class="row d-flex cart align-items-center justify-content-center">
    <div class="col-md-10">
        <div class="card">
            <div class="row g-0">
                <div class="col-md-12 border-right p-5">
                    <div class="text-center order-details">
                        <div class="d-flex justify-content-center mb-5 flex-column align-items-center"> <span class="check1"><i class="bi bi-emoji-frown"></i></span> <span class="font-weight-bold">Order Failed</span> <small class="mt-2">Something must've happened from our end.</small> </div>
                         <a href="<?=base_url()?>Home/cart" class="text-decoration-none invoice-link"><button class="btn btn-primary btn-block order-button">Checkout Again</button></a>
                         <br>
                        <button class="btn btn-block order-button"><a href="<?=base_url()?>Home" class="green txt-deco-no"><i class="bi bi-arrow-left px-1"></i>Add more products</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
