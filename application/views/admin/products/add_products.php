<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Add New Products
    </h1>

  </section>
  <section class="content">
    <div class="row">
      <div class="col-lg-12">

        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Add New Products</h3>
          </div>

          <?php if (!empty($this->session->flashdata('smessage'))) {  ?>
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> Alert!</h4>
            <?php echo $this->session->flashdata('smessage');  ?>
          </div>
          <?php }
                                              if (!empty($this->session->flashdata('emessage'))) {  ?>
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-ban"></i> Alert!</h4>
            <?php echo $this->session->flashdata('emessage');  ?>
          </div>
          <?php }  ?>


          <div class="panel-body">
            <div class="col-lg-10">
              <form action=" <?php echo base_url()  ?>dcadmin/products/add_products_data/<?php echo base64_encode(1);  ?>" method="POST" id="slide_frm" enctype="multipart/form-data">
                <div class="table-responsive">
                  <table class="table table-hover">
                    <tr>
                      <td> <strong>Category</strong> <span style="color:red;">*</span></strong> </td>
                      <td> <select class="form-control" name="category_id" required id="category">
                          <option value="">------select category---------</option>
                          <?php $i=1; foreach ($category_data->result() as $data) { ?>
                          <option value="<?=$data->id?>"><?=$data->name?></option>
                          <?php $i++; } ?>
                        </select> </td>
                    </tr>
                    <tr>
                      <td> <strong>Subcategory</strong> <span style="color:red;">*</span></strong> </td>
                      <td> <select class="form-control" name="subcategory_id" required id="subcategory">
                          <option value="">Select Sub Category</option>
                        </select>

                      </td>
                    </tr>
                    <tr>
                      <td> <strong>Name</strong> <span style="color:red;">*</span></strong> </td>
                      <td> <input type="text" name="name" class="form-control" placeholder="" required value="" /> </td>
                    </tr>
                    <tr>
                      <td> <strong>Short Description</strong> <span style="color:red;">*</span></strong> </td>
                      <td>
                        <textarea  name="s_description" class="form-control" rows="4" cols="50"></textarea></td>
                    </tr>
                    <tr>
                      <td> <strong>Long Description</strong> <span style="color:red;">*</span></strong> </td>
                      <td>
                        <textarea  name="l_description" class="form-control" rows="4" cols="50"></textarea></td>
                    </tr>



                    <tr>
                      <td colspan="2">
                        <input type="submit" class="btn btn-success" value="save">
                      </td>
                    </tr>
                  </table>
                </div>

              </form>

            </div>



          </div>

        </div>

      </div>
    </div>
  </section>
</div>
<script type="text/javascript">
  $(document).ready(function() {
    $("#category").change(function() {
      // alert("hello");
      var vf = $(this).val();
      if (vf == "") {
        return false;
      } else {
        $('#subcategory option').remove();
        var opton = "<option value='0'>Select Sub Category</option>";
        $.ajax({
          url: base_url + "dcadmin/Products/getSubcategory?isl=" + vf,
          data: '',
          type: "get",
          success: function(html) {
            if (html != "NA") {
              var s = jQuery.parseJSON(html);
              $.each(s, function(i) {

                opton += '<option value="' + s[i]['id'] + '">' + s[i]['name'] + '</option>';
              });
              $('#subcategory').append(opton);
            } else {
              alert('No Sub Category Found');
              return false;
            }

          }

        })
      }


    })
  });
</script>

<script type="text/javascript" src=" <?php echo base_url()  ?>assets/slider/ajaxupload.3.5.js"></script>
<link href=" <?php echo base_url()  ?>assets/cowadmin/css/jqvmap.css" rel='stylesheet' type='text/css' />
