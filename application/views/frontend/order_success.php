<div class="container-fluid mt-5 mb-5" style="background-color: #f4f1eb; padding:20px">
<div class="row">
  <div class="col-12 text-center d-flex justify-content-center align-items-center">
     <a href="<?=base_url()?>/Home">Home</a><span class="px-3">/</span><a href="<?=base_url()?>/Home/payment">payment</a><span class="px-3">/</span>
     <p  class="margin-0">Order-Sucess</p>
  </div>
</div>
</div>

<div class="container mt-4 mb-4">
<div class="row d-flex cart align-items-center justify-content-center">
    <div class="col-md-10">
        <div class="card">
            <div class="d-flex justify-content-center border-bottom">
                <div class="p-3">
                    <div class="progresses">
                        <div class="steps"> <span><i class="bi bi-check"></i></span> </div> <span class="line"></span>
                        <div class="steps"> <span><i class="bi bi-check"></i></span> </div> <span class="line"></span>
                        <div class="steps"> <span class="font-weight-bold">3</span> </div>
                    </div>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-md-12 border-right p-5">
                    <div class="text-center order-details">
                        <div class="d-flex justify-content-center mb-5 flex-column align-items-center"> <span class="check1"><i class="bi bi-bag-check-fill"></i></span> <span class="font-weight-bold">Order Confirmed</span> <small class="mt-2">Your Order will be delivered soon</small> </div>
                         <a href="<?=base_url()?>Order/view_order" class="text-decoration-none invoice-link"><button class="btn btn-primary btn-block order-button">Go to your Order</button></a>
                         <br>
                        <button class="btn btn-block order-button"><a href="<?=base_url()?>Home" class="green txt-deco-no"><i class="bi bi-arrow-left px-1"></i>Continue Shopping</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
