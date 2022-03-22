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


</body>
</html>
