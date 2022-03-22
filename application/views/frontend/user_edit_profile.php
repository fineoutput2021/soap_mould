<div class="container-fluid mt-5 mb-5" style="background-color: #f4f1eb; padding:20px 5px">
<div class="row">
<div class="col-12 text-center d-flex justify-content-center align-items-center">
   <a href="<?=base_url()?>/Home">Home</a><span class="px-3">/</span><a href="<?=base_url()?>/Home/user_profile">Profile</a><span class="px-3">/</span>
   <p class="margin-0">Profile Edit</p>
</div>
</div>
</div>
<div class="container">
   <div class="row justify-content-center">
      <div class="col-12 col-lg-10 col-xl-8 mx-auto">
         <h2 class="h3 mb-4 page-title">Edit Profile</h2>
         <div class="my-4">
            <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
               <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Profile</a>
               </li>
            </ul>
            <form>
               <div class="row mt-5 align-items-center">
                  <div class="col-md-3 text-center mb-5">
                     <div class="avatar avatar-xl">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="..." class="avatar-img rounded-circle" />
                     </div>
                  </div>
                  <div class="col">
                     <div class="row align-items-center">
                        <div class="col-md-7">
                           <h4 class="mb-1">Demo</h4>
                           <p class="small mb-3"><span class="badge badge-dark">india</span></p>
                        </div>
                     </div>
                     <div class="row mb-4">
                        <div class="col-md-7">
                           <p class="text-muted">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit nisl ullamcorper, rutrum metus in, congue lectus. In hac habitasse platea dictumst. Cras urna quam, malesuada vitae risus at,
                              pretium blandit sapien.
                           </p>
                        </div>
                        <div class="col">
                           <p class="small mb-0 text-muted">Nec Urna Suscipit Ltd</p>
                           <p class="small mb-0 text-muted">P.O. Box 464, 5975 Eget Avenue</p>
                           <p class="small mb-0 text-muted">(000) 000-000</p>
                        </div>
                     </div>
                  </div>
               </div>
               <hr class="my-4" />
               <div class="form-row row">
                  <div class="form-group col-md-6">
                     <label for="firstname">Firstname</label>
                     <input type="text" id="firstname" class="form-control" placeholder="Firstname..." />
                  </div>
                  <div class="form-group col-md-6">
                     <label for="lastname">Lastname</label>
                     <input type="text" id="lastname" class="form-control" placeholder="Lastname..." />
                  </div>
               </div>
               <div class="form-group">
                  <label for="inputEmail4">Email</label>
                  <input type="email" class="form-control" id="inputEmail4" placeholder="Email..." />
               </div>
               <div class="form-group">
                  <label for="inputAddress5">Address</label>
                  <input type="text" class="form-control" id="inputAddress5" placeholder="Address..." />
               </div>
               <div class="form-row row">
                  <div class="form-group col-md-6">
                     <label for="inputCompany5">Company</label>
                     <input type="text" class="form-control" id="inputCompany5" placeholder="Company Name..." />
                  </div>
                  <div class="form-group col-md-4">
                     <label for="inputState5">State</label>
                     <select id="inputState5" class="form-control">
                        <option selected="">Choose...</option>
                        <option>...</option>
                     </select>
                  </div>
                  <div class="form-group col-md-2">
                     <label for="inputZip5">Zip</label>
                     <input type="text" class="form-control" id="inputZip5" placeholder="00000" />
                  </div>
               </div>
               <hr class="my-4" />
               <div class="row mb-4">
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="inputPassword4">Old Password</label>
                        <input type="password" class="form-control" id="inputPassword5" />
                     </div>
                     <div class="form-group">
                        <label for="inputPassword5">New Password</label>
                        <input type="password" class="form-control" id="inputPassword5" />
                     </div>
                     <div class="form-group">
                        <label for="inputPassword6">Confirm Password</label>
                        <input type="password" class="form-control" id="inputPassword6" />
                     </div>
                  </div>
                  <div class="col-md-6" style="color: #416e7a;">
                     <p class="mb-2">Password requirements</p>
                     <p class="small mb-2">To create a new password, you have to meet all of the following requirements:</p>
                     <ul class="small pl-4 mb-0">
                        <li>Minimum 8 character</li>
                        <li>At least one special character</li>
                        <li>At least one number</li>
                        <li>Can’t be the same as a previous password</li>
                     </ul>
                  </div>
               </div>
               <button type="submit" class="btn btn-primary">Save Change</button>
               <a href="<?=base_url()?>/Home/user_profile" class="btn">Cancel</a>
            </form>
         </div>
      </div>
   </div>
</div>
