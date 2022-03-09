                          <div class="content-wrapper">
                            <section class="content-header">
                              <h1>
                                Add Dispatch Remarks
                              </h1>
                              <ol class="breadcrumb">
                                <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                                <li><a href="<?php echo base_url() ?>admin/college"><i class="fa fa-dashboard"></i> Dispatch Order </a></li>

                              </ol>
                            </section>
                            <section class="content">
                              <div class="row">
                                <div class="col-lg-12">

                                  <div class="panel panel-default">
                                    <div class="panel-heading">
                                      <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Add Dispatch Remarks</h3>
                                    </div>

                                    <? if(!empty($this->session->flashdata('smessage'))){ ?>
                                    <div class="alert alert-success alert-dismissible">
                                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                      <h4><i class="icon fa fa-check"></i> Alert!</h4>
                                      <? echo $this->session->flashdata('smessage'); ?>
                                    </div>
                                    <? }
                                                      			     if(!empty($this->session->flashdata('emessage'))){ ?>
                                    <div class="alert alert-danger alert-dismissible">
                                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                      <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                                      <? echo $this->session->flashdata('emessage'); ?>
                                    </div>
                                    <? } ?>


                                    <div class="panel-body">
                                      <div class="col-lg-10">
                                        <form action="<?php echo base_url() ?>dcadmin/Orders/dispatch_order" method="POST" id="slide_frm" enctype="multipart/form-data">
                                          <div class="table-responsive">
                                            <table class="table table-hover">
                                              <input type="hidden" name="id" value="<?=$id?>">
                                              <tr>
                                                <td> <strong>Review</strong></td>
                                                <td>
                                                  <input type="text" name="remarks" class="form-control" placeholder="" value="" />
                                                </td>
                                              </tr>
                                              <tr>
                                                <td colspan="2">
                                                  <input type="submit" class="btn btn-success" value="Dispatch">
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


                          <script type="text/javascript" src="<?php echo base_url() ?>assets/slider/ajaxupload.3.5.js"></script>
                          <link href="<? echo base_url() ?>assets/cowadmin/css/jqvmap.css" rel='stylesheet' type='text/css' />
