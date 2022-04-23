<div class="container-fluid mt-5 mb-5" style="background-color: #f4f1eb; padding:20px 5px">
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
      <label class="form-label" for="name">Name</label>
      <input class="form-control" name="name" type="text" placeholder="Name" data-sb-validations="required" />
      <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
    </div>

    <!-- Email address input -->
    <div class="mb-3">
      <label class="form-label" for="emailAddress">Email Address</label>
      <input class="form-control" name="email" type="email" placeholder="Email Address" data-sb-validations="required, email" />
      <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
      <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
    </div>

    <!-- Number address input -->
    <div class="mb-3">
      <label class="form-label" for="phonenumber">Phone Number</label>
      <input class="form-control" name="phone" type="text" placeholder="Enter Phone Number" data-sb-validations="required, phone-number" />
      <div class="invalid-feedback" data-sb-feedback="phonenumber:required">Phone Number is required.</div>
      <div class="invalid-feedback" data-sb-feedback="phonenumber:email">Phone Number is not valid.</div>
    </div>

    <!-- Message input -->
    <div class="mb-3">
      <label class="form-label" for="message">Message</label>
      <textarea class="form-control" name="message" type="text" placeholder="Message" style="height: 10rem;" data-sb-validations="required"></textarea>
      <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
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
