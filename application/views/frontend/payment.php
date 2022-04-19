<div class="container-fluid mt-5 mb-5" style="background-color: #f4f1eb; padding:20px 5px">
<div class="row">
   <div class="col-12 text-center d-flex justify-content-center align-items-center">
      <a href="<?=base_url()?>/Home">Home</a><span class="px-3">/</span><a href="<?=base_url()?>/Home/checkout">Checkout</a><span class="px-3">/</span>
      <p class="margin-0">Payment</p>
   </div>
</div>
</div>

<div class="container">
      <div class="row">
         <div class="col-md-7">
            <main>
               <a href="<?=base_url()?>/Home/"><img src="#" alt="logo"></a>
               <div>
                  <ul class="breadcrumb">
                     <li><a href="<?=base_url()?>/Home/cart">Cart</a></li>
                     <li><a href="<?=base_url()?>/Home/checkout">Information</a></li>
                     <li><a href="<?=base_url()?>/Home/shipping">Shipping</a></li>
                     <li style="font-weight: bold;">Payment</li>
                  </ul>
               </div>
               <form>
                  <div class="table-responsive border rounded-3 p-2 mb-4">
                   <table class="table">
                     <!-- <thead>
                       <tr>
                              <th scope="col" class="h5 text-center"></th>
                              <th scope="col"></th>
                              <th scope="col"></th>
                           </tr>
                     </thead> -->
                     <tbody>
                       <tr>
                         <th scope="col" class="font-weight-normal">Contact</th>
                         <th scope="col" class="font-weight-normal">hello@gmail.com</th>
                         <th scope="col"><a href="<?=base_url()?>/Home/checkout" class="txt-deco-no green">Change</a></th>
                       </tr>
                       <tr class="">
                         <th scope="col" class="font-weight-normal">Ship to</th>
                         <th scope="col" class="font-weight-normal">helloAddress</th>
                         <th scope="col"><a href="<?=base_url()?>/Home/checkout" class="txt-deco-no green">Change</a></th>
                       </tr>
                           <tr class="border-white">
                              <th scope="col" class="font-weight-normal">Method</th>
                              <th scope="col" class="font-weight-normal">Free Shipping·<span style="font-weight:bold;"> Free</span></th>
                           </tr>
                     </tbody>
                   </table>
                  </div>
                  <div class="row">
                     <div class="col">
                        <h4>Payment</h4>
                        <p>All transactions are secure and encrypted.
                        </p>
                     </div>
                     <div class="table-responsive border rounded-3 mb-4" >
                        <table class="table">
                           <thead>
                              <tr>
                                 <th scope="row"><img src="https://cdn.shopify.com/s/files/applications/e273f27d4c4fa65fc8e2af05e552f04e.png?height=24&1637057371" class="img-fluid rounded-3" style="height: 24px;display: block;"></th>
                                 <th scope="row"><img src="<?=base_url()?>assets/frontend/images/payment/pay.png" class="img-fluid rounded-3" style="height: 24px;display: block;"></th>
                                 <th scope="row" class="font-weight-normal">and more...</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr class="text-center border-white justify-content-center">
                                 <th class="col" colspan="3">
                                    <img src="icon/payment.svg">
                                 </th>
                              </tr>
                              <tr class="text-center justify-content-center">
                                 <th class="col font-weight-normal" colspan="3">
                                    After clicking “Complete order”, you will be redirected to Razorpay (Cards, UPI, NetBanking, Wallets, Paypal) to complete your purchase securely.
                                 </th>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <div class="form-group border p-3 mb-4 rounded-3" >
                       <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
           <label class="form-check-label px-2" for="flexRadioDefault1" style="font-weight:bold;"> Same as shipping address</label>
               <br>
               <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
               <label class="form-check-label px-2" for="flexRadioDefault2" style="font-weight:bold;"> Use a different billing address</label>
                  </div>
                  <button type="submit" class="btn btn-primary btn-lg">
                     <a class="txt-deco-no white">Complete Order</a>
                      <!-- href="<?=base_url()?>/Home/order_success" -->
                  </button>
                  <button type="submit" class="btn btn-lg"><a href="<?=base_url()?>/Home/shipping" class="txt-deco-no green">Return to Shipping</a></button>
               </form>
               <hr>
               <footer class="checkout-footer" role="">
                  <ul class="" >
                     <li class="">
                        <a href="#exampleModalRefund" class="btn txt-deco-no green" data-bs-toggle="modal" role="button">Refund policy</a>
                     </li>
                     <li class="">
                        <a href="#exampleModalshipping" class="btn txt-deco-no green" data-bs-toggle="modal" role="button">Shipping policy</a>
                     </li>
                     <li class="">
                        <a href="#exampleModalprivacy" class="btn txt-deco-no green" data-bs-toggle="modal" role="button">Privacy policy</a>
                     </li>
                     <li class="px-2">
                        <a href="#exampleModaltermsservices" class="btn txt-deco-no green" data-bs-toggle="modal" role="button">Terms of service</a>
                     </li>
                  </ul>
               </footer>
            </main>
         </div>
         <div class="col-md-5 border">
            <div class="row">
               <div class="col">
                  <div class="table-responsive">
                     <table class="table">
                        <thead>
                           <tr>
                              <th scope="col" class="h5 text-center">Product Detail</th>
                              <!--<th scope="col">Format</th> -->
                              <th scope="col">Total</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <th scope="row">
                                 <div class="d-flex align-items-center">
                                    <img src="<?=base_url()?>assets/frontend/images/product/1.jpg" class="img-fluid rounded-3" style="width: 120px;" alt=""><span class="bg-green white" style="    padding: 5px 12px;border-radius: 100px;margin-top: -17%;margin-left: -5%;">4</span>
                                    <div class="flex-column ms-4">
                                       <p class="mb-2">Coconut Milk, Lavender & Lemongrass Scalp Mask (Plant Based)</p>
                                       <!-- <p class="mb-0">Daniel Kahneman</p> -->
                                    </div>
                                 </div>
                              </th>
                              <!-- <td class="align-middle">
                                 <p class="mb-0" style="font-weight: 500;">Digital</p>
                                 </td> -->
                              <td class="align-middle">
                                 <p class="mb-0" style="font-weight: 500;">₹1,796.00</p>
                              </td>
                           </tr>
                           <tr>
                              <th scope="row">
                                 <div class="d-flex align-items-center">
                                    <img src="<?=base_url()?>assets/frontend/images/product/1.jpg" class="img-fluid rounded-3" style="width: 120px;" alt=""><span class="bg-green white" style="    padding: 5px 12px;border-radius: 100px;margin-top: -17%;margin-left: -5%;">4</span>
                                    <div class="flex-column ms-4">
                                       <p class="mb-2">Coconut Milk, Lavender & Lemongrass Scalp Mask (Plant Based)</p>
                                       <!-- <p class="mb-0">Daniel Kahneman</p> -->
                                    </div>
                                 </div>
                              </th>
                              <!-- <td class="align-middle">
                                 <p class="mb-0" style="font-weight: 500;">Digital</p>
                                 </td> -->
                              <td class="align-middle">
                                 <p class="mb-0" style="font-weight: 500;">₹1,796.00</p>
                              </td>
                           </tr>
                           <tr>
                              <th colspan="2">
                                 <div class="form-group d-flex">
                                    <input type="text" class="form-control form-control-lg mt-3 mx-3" id="" placeholder="Discount Code">
                                    <a href="#"><button type="submit" class="btn btn-primary btn-lg mt-3">Apply</button></a>
                                 </div>
                              </th>
                           </tr>
                           <tr>
                              <th colspan="2">
                                 <div class="">
                                    <div class="float-start">
                                       <h6>Subtotal</h6>
                                       <h6 class="mt-3"><a href="#exampleModalshipping" class="btn txt-deco-no green" data-bs-toggle="modal" role="button" style="padding: 0;">Shipping</a></h6>
                                    </div>
                                    <div class="float-end">
                                       <h4>₹2,295.00</h4>
                                       <h6>Calculated at next step</h6>
                                    </div>
                                 </div>
                              </th>
                           </tr>
                           <tr>
                              <th colspan="2">
                                 <div class="">
                                    <div class="float-start">
                                       <h6>Total</h6>
                                       <h6 class="mt-3">Including ₹189.50 in taxes</h6>
                                    </div>
                                    <div class="float-end">
                                       <h4 class="mb-0 mt-3"></span>₹2,295.00</h4>
                                    </div>
                                 </div>
                              </th>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Modal -->
   <!-- Refund policy -->
   <div class="modal fade" id="exampleModalRefund" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
      <div class="modal-dialog modal-dialog-scrollable">
         <div class="modal-content">
            <div class="modal-header exampleModalScrollableTitle">
               <h5 class="modal-title green" id="exampleModalToggleLabel">Refund policy</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               Refunds & Returns<br><br>
               Your 100% satisfaction is important to us. We aim to satisfy our customers and provide an enjoyable shopping experience. However, please note that we cannot accept exchange or return products/parcels.
               <br><br>
               That said, in exceptional cases, we will surely be happy to refund our customers. If you think your case is genuine, please message us on Instagram at <span><a href="<?=base_url()?>/Home/" class="txt-deco-no green">@CompanyName</a></span> as it is the fastest way to reach out to us.
            </div>
            <!-- <div class="modal-footer justify-content-center">
               </div> -->
         </div>
      </div>
   </div>
   </div>
   <!-- shipping policy -->
   <div class="modal fade" id="exampleModalshipping" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
      <div class="modal-dialog modal-dialog-scrollable">
         <div class="modal-content">
            <div class="modal-header exampleModalScrollableTitle">
               <h5 class="modal-title green" id="exampleModalToggleLabel">Shipping policy</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               Shipping<br>
               Your order will be dispatched in 3 to 4 working days and delivered in 7 to 14 days. Once the order is dispatched, you will receive an email with the tracking ID.
               <br><br>
               Orders received before 1:00 pm IST Monday – Friday should be
               processed and shipped that day, excluding holidays of course.
               <br><br>
               Weekend orders will be processed the following Monday or the next business day if it’s a holiday.
               <br><br>
               Once it is ready, it will be on its way to you. Orders can be
               tracked here if you’re like us and like to count the minutes.
               <br><br>
               Our shipping terms and conditions are as follows:
               <br><br>
               - FREE SHIPPING on orders of Rs999 or more (after discounts).
               Standard shipping (estimated 7-14 business days).
               - For orders under Rs999: Rs100 Shipping Fee. Standard shipping
               (estimated 7-14 business days)
               <br><br>
               Once the parcel is delivered, you will receive an email and SMS on registered email ID and phone number respectively. If there's any issue, it has to be informed within 48 hours from the delivery date.
            </div>
            <!-- <div class="modal-footer justify-content-center">
               </div> -->
         </div>
      </div>
   </div>
   </div>
   <!-- privacy policy -->
   <div class="modal fade" id="exampleModalprivacy" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
      <div class="modal-dialog modal-dialog-scrollable">
         <div class="modal-content">
            <div class="modal-header exampleModalScrollableTitle">
               <h5 class="modal-title green" id="exampleModalToggleLabel">Privacy policy</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               Privacy<br>
               Section 1 - What information do we collect?
               <br><br>
               We collect information from you when you register on our site, place an order, or subscribe to our newsletter.
               <br><br>
               When ordering or registering on our site, as appropriate, you may be asked to enter your: name, e-mail address, mailing address, or phone number. Credit card and/or other payment information may be collected by our payment gateway partners. You may, however, visit our site anonymously.
               <br><br>
               Section 2 - Consent
               <br><br>
               How do you get my consent?
               When you provide us with personal information to complete a transaction, place an order, arrange for a delivery or return a purchase, we imply that you consent to our collecting it and using it for that specific reason only.
               <br><br>
               Section 3 - Disclosure
               <br><br>
               We may disclose your personal information if we are required by law to do so or if you violate our Terms of Service.
               <br><br>
               Section 4 - Woocommerce
               <br><br>
               Our store is hosted on Woocommerce Inc. They provide us with an online e-commerce platform that allows us to sell our products and services to you.
               Your data is stored through Woocommerce’s data storage, databases, and the general Woocommerce application. They store your data on a highly secure server behind a firewall.
               <br><br>
               Section 5 - Third-Party Services
               <br><br>
               In general, the third-party providers used by us will only collect, use, and disclose your information to the extent necessary to allow them to perform the services they provide to us.
               However, certain third-party service providers, such as payment gateways and other payment transaction processors, have their own privacy policies with respect to the information we are required to provide to them for your purchase-related transactions.
               For these providers, we recommend that you read their privacy policies so you can understand the manner in which your personal information will be handled by these providers.
               <br><br>
               Section 6 - Security
               <br><br>
               To protect your personal information, we take reasonable precautions and follow industry best practices to make sure it is not inappropriately lost, misused, accessed, disclosed, altered, or destroyed.
               If you provide us with your credit card information, the information is encrypted using secure socket layer technology (SSL) and stored with AES-256 encryption. Although no method of transmission over the Internet or electronic storage is 100% secure, we follow all PCI-DSS requirements and implement additional generally accepted industry standards.
               <br><br>
               Section 7 - Cookies
               <br><br>
               We use Cookies. (Cookies are small files that a site or its service provider transfers to your computer's hard drive through your Web browser (if you allow) that enables the sites or service providers systems to recognize your browser and capture and remember certain information.)
               <br><br>
               Section 8 - Age of Consent
               <br><br>
               By using this site, you represent that you are at least the age of majority in your state or province of residence, or that you are the age of majority in your state or province of residence and you have given us your consent to allow any of your minor dependents to use this site.
               <br><br>
               Section 9 - Changes to This Privacy Policy
               <br><br>
               We reserve the right to modify this privacy policy at any time, so please review it frequently. Changes and clarifications will take effect immediately upon their posting on the website. If we make material changes to this policy, we will notify you here that it has been updated, so that you are aware of what information we collect, how we use it, and under what circumstances, if any, we use and/or disclose it.
               If our store is acquired or merged with another company, your information may be transferred to the new owners so that we may continue to sell products to you.
            </div>
            <!-- <div class="modal-footer justify-content-center">
               </div> -->
         </div>
      </div>
   </div>
   </div>
   <!-- Terms of service -->
   <div class="modal fade" id="exampleModaltermsservices" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
      <div class="modal-dialog modal-dialog-scrollable">
         <div class="modal-content">
            <div class="modal-header exampleModalScrollableTitle">
               <h5 class="modal-title green" id="exampleModalToggleLabel">Terms of service</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               OVERVIEW<br>
               This website is operated by Soap Square. Throughout the site, the terms “we”, “us” and “our” refer to Soap Square. Soap Square offers this website, including all information, tools and services available from this site to you, the user, conditioned upon your acceptance of all terms, conditions, policies and notices stated here.
               <br><br>
               By visiting our site and/ or purchasing something from us, you engage in our “Service” and agree to be bound by the following terms and conditions (“Terms of Service”, “Terms”), including those additional terms and conditions and policies referenced herein and/or available by hyperlink. These Terms of Service apply to all users of the site, including without limitation users who are browsers, vendors, customers, merchants, and/ or contributors of content.
               <br><br>
               Please read these Terms of Service carefully before accessing or using our website. By accessing or using any part of the site, you agree to be bound by these Terms of Service. If you do not agree to all the terms and conditions of this agreement, then you may not access the website or use any services. If these Terms of Service are considered an offer, acceptance is expressly limited to these Terms of Service.
               <br><br>
               Any new features or tools which are added to the current store shall also be subject to the Terms of Service. You can review the most current version of the Terms of Service at any time on this page. We reserve the right to update, change or replace any part of these Terms of Service by posting updates and/or changes to our website. It is your responsibility to check this page periodically for changes. Your continued use of or access to the website following the posting of any changes constitutes acceptance of those changes.
               <br><br>
               Our store is hosted on Shopify Inc. They provide us with the online e-commerce platform that allows us to sell our products and services to you.
               <br><br>
               SECTION 1 - ONLINE STORE TERMS
               By agreeing to these Terms of Service, you represent that you are at least the age of majority in your state or province of residence, or that you are the age of majority in your state or province of residence and you have given us your consent to allow any of your minor dependents to use this site.
               You may not use our products for any illegal or unauthorized purpose nor may you, in the use of the Service, violate any laws in your jurisdiction (including but not limited to copyright laws).
               You must not transmit any worms or viruses or any code of a destructive nature.
               A breach or violation of any of the Terms will result in an immediate termination of your Services.
               <br><br>
               SECTION 2 - GENERAL CONDITIONS
               We reserve the right to refuse service to anyone for any reason at any time.
               You understand that your content (not including credit card information), may be transferred unencrypted and involve (a) transmissions over various networks; and (b) changes to conform and adapt to technical requirements of connecting networks or devices. Credit card information is always encrypted during transfer over networks.
               You agree not to reproduce, duplicate, copy, sell, resell or exploit any portion of the Service, use of the Service, or access to the Service or any contact on the website through which the service is provided, without express written permission by us.
               The headings used in this agreement are included for convenience only and will not limit or otherwise affect these Terms.
               <br><br>
               SECTION 3 - ACCURACY, COMPLETENESS AND TIMELINESS OF INFORMATION
               We are not responsible if information made available on this site is not accurate, complete or current. The material on this site is provided for general information only and should not be relied upon or used as the sole basis for making decisions without consulting primary, more accurate, more complete or more timely sources of information. Any reliance on the material on this site is at your own risk.
               This site may contain certain historical information. Historical information, necessarily, is not current and is provided for your reference only. We reserve the right to modify the contents of this site at any time, but we have no obligation to update any information on our site. You agree that it is your responsibility to monitor changes to our site.
               <br><br>
               SECTION 4 - MODIFICATIONS TO THE SERVICE AND PRICES
               Prices for our products are subject to change without notice.
               We reserve the right at any time to modify or discontinue the Service (or any part or content thereof) without notice at any time.
               We shall not be liable to you or to any third-party for any modification, price change, suspension or discontinuance of the Service.
               <br><br>
               SECTION 5 - PRODUCTS OR SERVICES (if applicable)
               Certain products or services may be available exclusively online through the website. These products or services may have limited quantities and are subject to return or exchange only according to our Return Policy.
               We have made every effort to display as accurately as possible the colors and images of our products that appear at the store. We cannot guarantee that your computer monitor's display of any color will be accurate.
               We reserve the right, but are not obligated, to limit the sales of our products or Services to any person, geographic region or jurisdiction. We may exercise this right on a case-by-case basis. We reserve the right to limit the quantities of any products or services that we offer. All descriptions of products or product pricing are subject to change at anytime without notice, at the sole discretion of us. We reserve the right to discontinue any product at any time. Any offer for any product or service made on this site is void where prohibited.
               We do not warrant that the quality of any products, services, information, or other material purchased or obtained by you will meet your expectations, or that any errors in the Service will be corrected.
               <br><br>
               SECTION 6 - ACCURACY OF BILLING AND ACCOUNT INFORMATION
               We reserve the right to refuse any order you place with us. We may, in our sole discretion, limit or cancel quantities purchased per person, per household or per order. These restrictions may include orders placed by or under the same customer account, the same credit card, and/or orders that use the same billing and/or shipping address. In the event that we make a change to or cancel an order, we may attempt to notify you by contacting the e‑mail and/or billing address/phone number provided at the time the order was made. We reserve the right to limit or prohibit orders that, in our sole judgment, appear to be placed by dealers, resellers or distributors.
               <br><br>
               You agree to provide current, complete and accurate purchase and account information for all purchases made at our store. You agree to promptly update your account and other information, including your email address and credit card numbers and expiration dates, so that we can complete your transactions and contact you as needed.
               <br><br>
               For more detail, please review our Returns Policy.
               <br><br>
               SECTION 7 - OPTIONAL TOOLS
               We may provide you with access to third-party tools over which we neither monitor nor have any control nor input.
               You acknowledge and agree that we provide access to such tools ”as is” and “as available” without any warranties, representations or conditions of any kind and without any endorsement. We shall have no liability whatsoever arising from or relating to your use of optional third-party tools.
               Any use by you of optional tools offered through the site is entirely at your own risk and discretion and you should ensure that you are familiar with and approve of the terms on which tools are provided by the relevant third-party provider(s).
               We may also, in the future, offer new services and/or features through the website (including, the release of new tools and resources). Such new features and/or services shall also be subject to these Terms of Service.
               <br><br>
               SECTION 8 - THIRD-PARTY LINKS
               Certain content, products and services available via our Service may include materials from third-parties.
               Third-party links on this site may direct you to third-party websites that are not affiliated with us. We are not responsible for examining or evaluating the content or accuracy and we do not warrant and will not have any liability or responsibility for any third-party materials or websites, or for any other materials, products, or services of third-parties.
               We are not liable for any harm or damages related to the purchase or use of goods, services, resources, content, or any other transactions made in connection with any third-party websites. Please review carefully the third-party's policies and practices and make sure you understand them before you engage in any transaction. Complaints, claims, concerns, or questions regarding third-party products should be directed to the third-party.
               <br><br>
               SECTION 9 - USER COMMENTS, FEEDBACK AND OTHER SUBMISSIONS
               If, at our request, you send certain specific submissions (for example contest entries) or without a request from us you send creative ideas, suggestions, proposals, plans, or other materials, whether online, by email, by postal mail, or otherwise (collectively, 'comments'), you agree that we may, at any time, without restriction, edit, copy, publish, distribute, translate and otherwise use in any medium any comments that you forward to us. We are and shall be under no obligation (1) to maintain any comments in confidence; (2) to pay compensation for any comments; or (3) to respond to any comments.
               We may, but have no obligation to, monitor, edit or remove content that we determine in our sole discretion are unlawful, offensive, threatening, libelous, defamatory, pornographic, obscene or otherwise objectionable or violates any party’s intellectual property or these Terms of Service.
               You agree that your comments will not violate any right of any third-party, including copyright, trademark, privacy, personality or other personal or proprietary right. You further agree that your comments will not contain libelous or otherwise unlawful, abusive or obscene material, or contain any computer virus or other malware that could in any way affect the operation of the Service or any related website. You may not use a false e‑mail address, pretend to be someone other than yourself, or otherwise mislead us or third-parties as to the origin of any comments. You are solely responsible for any comments you make and their accuracy. We take no responsibility and assume no liability for any comments posted by you or any third-party.
               <br><br>
               SECTION 10 - PERSONAL INFORMATION
               Your submission of personal information through the store is governed by our Privacy Policy. To view our Privacy Policy.
               <br><br>
               SECTION 11 - ERRORS, INACCURACIES AND OMISSIONS
               Occasionally there may be information on our site or in the Service that contains typographical errors, inaccuracies or omissions that may relate to product descriptions, pricing, promotions, offers, product shipping charges, transit times and availability. We reserve the right to correct any errors, inaccuracies or omissions, and to change or update information or cancel orders if any information in the Service or on any related website is inaccurate at any time without prior notice (including after you have submitted your order).
               We undertake no obligation to update, amend or clarify information in the Service or on any related website, including without limitation, pricing information, except as required by law. No specified update or refresh date applied in the Service or on any related website, should be taken to indicate that all information in the Service or on any related website has been modified or updated.
               <br><br>
               SECTION 12 - PROHIBITED USES
               In addition to other prohibitions as set forth in the Terms of Service, you are prohibited from using the site or its content: (a) for any unlawful purpose; (b) to solicit others to perform or participate in any unlawful acts; (c) to violate any international, federal, provincial or state regulations, rules, laws, or local ordinances; (d) to infringe upon or violate our intellectual property rights or the intellectual property rights of others; (e) to harass, abuse, insult, harm, defame, slander, disparage, intimidate, or discriminate based on gender, sexual orientation, religion, ethnicity, race, age, national origin, or disability; (f) to submit false or misleading information; (g) to upload or transmit viruses or any other type of malicious code that will or may be used in any way that will affect the functionality or operation of the Service or of any related website, other websites, or the Internet; (h) to collect or track the personal information of others; (i) to spam, phish, pharm, pretext, spider, crawl, or scrape; (j) for any obscene or immoral purpose; or (k) to interfere with or circumvent the security features of the Service or any related website, other websites, or the Internet. We reserve the right to terminate your use of the Service or any related website for violating any of the prohibited uses.
               <br><br>
               SECTION 13 - DISCLAIMER OF WARRANTIES; LIMITATION OF LIABILITY
               We do not guarantee, represent or warrant that your use of our service will be uninterrupted, timely, secure or error-free.
               We do not warrant that the results that may be obtained from the use of the service will be accurate or reliable.
               You agree that from time to time we may remove the service for indefinite periods of time or cancel the service at any time, without notice to you.
               You expressly agree that your use of, or inability to use, the service is at your sole risk. The service and all products and services delivered to you through the service are (except as expressly stated by us) provided 'as is' and 'as available' for your use, without any representation, warranties or conditions of any kind, either express or implied, including all implied warranties or conditions of merchantability, merchantable quality, fitness for a particular purpose, durability, title, and non-infringement.
               In no case shall Soap Square, our directors, officers, employees, affiliates, agents, contractors, interns, suppliers, service providers or licensors be liable for any injury, loss, claim, or any direct, indirect, incidental, punitive, special, or consequential damages of any kind, including, without limitation lost profits, lost revenue, lost savings, loss of data, replacement costs, or any similar damages, whether based in contract, tort (including negligence), strict liability or otherwise, arising from your use of any of the service or any products procured using the service, or for any other claim related in any way to your use of the service or any product, including, but not limited to, any errors or omissions in any content, or any loss or damage of any kind incurred as a result of the use of the service or any content (or product) posted, transmitted, or otherwise made available via the service, even if advised of their possibility. Because some states or jurisdictions do not allow the exclusion or the limitation of liability for consequential or incidental damages, in such states or jurisdictions, our liability shall be limited to the maximum extent permitted by law.
               <br><br>
               SECTION 14 - INDEMNIFICATION
               You agree to indemnify, defend and hold harmless Soap Square and our parent, subsidiaries, affiliates, partners, officers, directors, agents, contractors, licensors, service providers, subcontractors, suppliers, interns and employees, harmless from any claim or demand, including reasonable attorneys’ fees, made by any third-party due to or arising out of your breach of these Terms of Service or the documents they incorporate by reference, or your violation of any law or the rights of a third-party.
               <br><br>
               SECTION 15 - SEVERABILITY
               In the event that any provision of these Terms of Service is determined to be unlawful, void or unenforceable, such provision shall nonetheless be enforceable to the fullest extent permitted by applicable law, and the unenforceable portion shall be deemed to be severed from these Terms of Service, such determination shall not affect the validity and enforceability of any other remaining provisions.
               <br><br>
               SECTION 16 - TERMINATION
               The obligations and liabilities of the parties incurred prior to the termination date shall survive the termination of this agreement for all purposes.
               These Terms of Service are effective unless and until terminated by either you or us. You may terminate these Terms of Service at any time by notifying us that you no longer wish to use our Services, or when you cease using our site.
               If in our sole judgment you fail, or we suspect that you have failed, to comply with any term or provision of these Terms of Service, we also may terminate this agreement at any time without notice and you will remain liable for all amounts due up to and including the date of termination; and/or accordingly may deny you access to our Services (or any part thereof).
               <br><br>
               SECTION 17 - ENTIRE AGREEMENT
               The failure of us to exercise or enforce any right or provision of these Terms of Service shall not constitute a waiver of such right or provision.
               These Terms of Service and any policies or operating rules posted by us on this site or in respect to The Service constitutes the entire agreement and understanding between you and us and govern your use of the Service, superseding any prior or contemporaneous agreements, communications and proposals, whether oral or written, between you and us (including, but not limited to, any prior versions of the Terms of Service).
               Any ambiguities in the interpretation of these Terms of Service shall not be construed against the drafting party.
               <br>
               <br>
               SECTION 18 - GOVERNING LAW
               These Terms of Service and any separate agreements whereby we provide you Services shall be governed by and construed in accordance with the laws of India.
               <br>
               <br>
               SECTION 19 - CHANGES TO TERMS OF SERVICE
               You can review the most current version of the Terms of Service at any time at this page.
               We reserve the right, at our sole discretion, to update, change or replace any part of these Terms of Service by posting updates and changes to our website. It is your responsibility to check our website periodically for changes. Your continued use of or access to our website or the Service following the posting of any changes to these Terms of Service constitutes acceptance of those changes.
               <br>
               <br>
               SECTION 20 - CONTACT INFORMATION
               Questions about the Terms of Service should be sent to us at info@soapsquare.in.
            </div>
            <!-- <div class="modal-footer justify-content-center">
               </div> -->
         </div>
      </div>
   </div>
   </div>
