<div class="container-fluid mt-5 mb-5" style="background-color: #f4f1eb; padding:20px">
	<div class="row">
		<div class="col-12 text-center d-flex justify-content-center align-items-center">
			<a href="<?=base_url()?>Home">Home</a><span class="px-3">/</span>
			<p  class="margin-0">Contact us</p>
		</div>
	</div>
</div>
<div class="container mt-5">
	<div class="row">
		<div class="col-12">
			<h2>Contact Us</h2>
			<p class="mt-2">To get your queries resolved as soon as possible, we would recommend you to check out our FAQ page at <a href=""><b>https://soap.com/pages/faq.</b></a>For any other queries, feel free to contact us on the following:</p>
			<h6 class="mt-3"><a href="">Email us at info@soap.in </a></h6>
			<h6 class="mt-3"><a href="">Customer Support Availability: 9 am to 9 pm. Sundays are closed.</a></h6>
			<p class="mt-4">You can also fill up this form to reach us:</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 col-12">
			<!-- Wrapper container -->
<div class="py-4 subscribe">

  <!-- Bootstrap 5 starter form -->
  <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="<?=base_url()?>Home/contact_info_submit" method="POST" enctype="multipart/form-data">

    <!-- Name input -->
    <div class="mb-3">
      <label class="form-label" for="validationServer01">Name</label>
      <input class="form-control " name="name" type="text" placeholder="Name" id="validationServer01" required/>
			<div class="invalid-feedback">
      Inter Name
    </div>
			<div class="valid-feedback">
      Looks good!
    </div>
    </div>

    <!-- Email address input -->
    <div class="mb-3">
      <label class="form-label" for="validationServer02">Email Address</label>
      <input class="form-control " name="email" type="email" placeholder="Email Address" id="validationServer02" required/>
			<div class="invalid-feedback">
      Enter Email
    </div>
			<div class="valid-feedback">
      Looks good!
    </div>
			</div>

    <!-- Number address input -->
    <div class="mb-3">
      <label class="form-label" for="validationServer03">Phone Number</label>
      <input class="form-control " name="phone" type="text" placeholder="Enter Phone Number" id="validationServer03" required/>
			<div class="invalid-feedback">
      Enter Number
    </div>
			<div class="valid-feedback">
      Looks good!
    </div>
			</div>

    <!-- Message input -->
    <div class="mb-3">
      <label class="form-label" for="validationServer04">Message</label>
      <textarea class="form-control" name="message" type="text" placeholder="Message" style="height: 10rem;" id="validationServer04" required></textarea>
			<div class="invalid-feedback">
      Enter Text Here
    </div>
			<div class="valid-feedback">
      Looks good!
    </div>
			</div>

    <!-- Form submissions success message -->
    <div class="d-none" id="submitSuccessMessage">
      <div class="text-center mb-3">Form submission successful!</div>
    </div>

    <!-- Form submissions error message -->
    <div class="d-none" id="submitErrorMessage">
      <div class="text-center text-danger mb-3">Error sending message!</div>
    </div>

    <!-- Form submit button -->
    <div class="">
      <button class="btn btn-primary btn-lg mobview-btn" id="submitButton" type="submit">Send</button>
    </div>

  </form>

</div>

		</div>

	</div>
</div>
