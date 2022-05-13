<?php

    if (! defined('BASEPATH')) {
        exit('No direct script access allowed');
    }
       require_once(APPPATH . 'core/CI_finecontrol.php');
       class Products extends CI_finecontrol
       {
           public function __construct()
           {
               parent::__construct();
               $this->load->model("login_model");
               $this->load->model("admin/base_model");
               $this->load->library('user_agent');
               $this->load->library('upload');
           }

           public function view_products()
           {
               if (!empty($this->session->userdata('admin_data'))) {
                   $data['user_name']=$this->load->get_var('user_name');

                   // echo SITE_NAME;
                   // echo $this->session->userdata('image');
                   // echo $this->session->userdata('position');
                   // exit;

                   $this->db->select('*');
                   $this->db->from('tbl_products');
                   //$this->db->where('id',$usr);
                   $data['products_data']= $this->db->get();

                   $this->load->view('admin/common/header_view', $data);
                   $this->load->view('admin/products/view_products');
                   $this->load->view('admin/common/footer_view');
               } else {
                   redirect("login/admin_login", "refresh");
               }
           }

           public function add_products()
           {
               if (!empty($this->session->userdata('admin_data'))) {
                   $this->db->select('*');
                   $this->db->from('tbl_category');
                   $this->db->where('is_active', 1);
                   $data['category_data']= $this->db->get();
                   $this->load->view('admin/common/header_view', $data);
                   $this->load->view('admin/products/add_products');
                   $this->load->view('admin/common/footer_view');
               } else {
                   redirect("login/admin_login", "refresh");
               }
           }

           public function update_products($idd)
           {
               if (!empty($this->session->userdata('admin_data'))) {
                   $data['user_name']=$this->load->get_var('user_name');

                   // echo SITE_NAME;
                   // echo $this->session->userdata('image');
                   // echo $this->session->userdata('position');
                   // exit;

                   $id=base64_decode($idd);
                   $data['id']=$idd;

                   $this->db->select('*');
                   $this->db->from('tbl_category');
                   $this->db->where('is_active', 1);
                   $data['category_data']= $this->db->get();
                   $cat_data = $data['category_data']->row();

                   $this->db->select('*');
                   $this->db->from('tbl_subcategory');
                   $this->db->where('is_active', 1);
                   $this->db->where('category_id', $cat_data->id);
                   $data['subcategory_data']= $this->db->get();

                   $this->db->select('*');
                   $this->db->from('tbl_products');
                   $this->db->where('id', $id);
                   $data['products_data']= $this->db->get()->row();


                   $this->load->view('admin/common/header_view', $data);
                   $this->load->view('admin/products/update_products');
                   $this->load->view('admin/common/footer_view');
               } else {
                   redirect("login/admin_login", "refresh");
               }
           }

           public function add_products_data($t, $iw="")
           {
               if (!empty($this->session->userdata('admin_data'))) {
                   $this->load->helper(array('form', 'url'));
                   $this->load->library('form_validation');
                   $this->load->helper('security');
                   if ($this->input->post()) {
                       // print_r($this->input->post());
                       // exit;
                       $this->form_validation->set_rules('category_id', 'category_id', 'required');
                       $this->form_validation->set_rules('subcategory_id', 'subcategory_id', 'required');
                       $this->form_validation->set_rules('name', 'name', 'required');
                       $this->form_validation->set_rules('s_description', 's_description', 'required');
                       $this->form_validation->set_rules('l_description', 'l_description', 'required');
                       $this->form_validation->set_rules('bestseller', 'bestseller');



                       if ($this->form_validation->run()== true) {
                           $category_id=$this->input->post('category_id');
                           $subcategory_id=$this->input->post('subcategory_id');
                           $name=$this->input->post('name');
                           $s_description=$this->input->post('s_description');
                           $l_description=$this->input->post('l_description');
                           $bestseller=$this->input->post('bestseller');

                           $ip = $this->input->ip_address();
                           date_default_timezone_set("Asia/Calcutta");
                           $cur_date=date("Y-m-d H:i:s");
                           $addedby=$this->session->userdata('admin_id');

                           $typ=base64_decode($t);

                           if ($typ==1) {
                               $data_insert = array('category_id'=>$category_id,
                                           'subcategory_id'=>$subcategory_id,
                                           'name'=>$name,
                                           's_description'=>$s_description,
                                           'l_description'=>$l_description,
                                           'bestseller'=>$bestseller,
                                           'ip' =>$ip,
                                           'added_by' =>$addedby,
                                           'is_active' =>1,
                                           'date'=>$cur_date

                                           );

                               $last_id=$this->base_model->insert_table("tbl_products", $data_insert, 1) ;
                               if ($last_id!=0) {
                                   $this->session->set_flashdata('smessage', 'Products inserted successfully');
                                   redirect("dcadmin/Products/view_products", "refresh");
                               } else {
                                   $this->session->set_flashdata('emessage', 'Sorry error occured');
                                   redirect($_SERVER['HTTP_REFERER']);
                               }
                           }
                           if ($typ==2) {
                               $idw=base64_decode($iw);


                               $this->db->select('*');
                               $this->db->from('tbl_products');
                               $this->db->where('id', $idw);
                               $dsa=$this->db->get();
                               $da=$dsa->row();




                               $data_insert = array(
                                'category_id'=>$category_id,
                                'subcategory_id'=>$subcategory_id,
                                'bestseller'=>$bestseller,
                                'name'=>$name,
                                's_description'=>$s_description,
                                'l_description'=>$l_description,

                     );
                               $this->db->where('id', $idw);
                               $last_id=$this->db->update('tbl_products', $data_insert);
                               if ($last_id!=0) {
                                   $this->session->set_flashdata('smessage', 'Products updated successfully');
                                   redirect("dcadmin/Products/view_products", "refresh");
                               } else {
                                   $this->session->set_flashdata('emessage', 'Sorry error occured');
                                   redirect($_SERVER['HTTP_REFERER']);
                               }
                           }
                       } else {
                           $this->session->set_flashdata('emessage', validation_errors());
                           redirect($_SERVER['HTTP_REFERER']);
                       }
                   } else {
                       $this->session->set_flashdata('emessage', 'Please insert some data, No data available');
                       redirect($_SERVER['HTTP_REFERER']);
                   }
               } else {
                   redirect("login/admin_login", "refresh");
               }
           }

           public function updateproductsStatus($idd, $t)
           {
               if (!empty($this->session->userdata('admin_data'))) {
                   $data['user_name']=$this->load->get_var('user_name');

                   // echo SITE_NAME;
                   // echo $this->session->userdata('image');
                   // echo $this->session->userdata('position');
                   // exit;
                   $id=base64_decode($idd);

                   if ($t=="active") {
                       $data_update = array(
                        'is_active'=>1

                        );

                       $this->db->where('id', $id);
                       $zapak=$this->db->update('tbl_products', $data_update);

                       if ($zapak!=0) {
                           $this->session->set_flashdata('smessage', 'Products status updated successfully');

                           redirect("dcadmin/products/view_products", "refresh");
                       } else {
                           $this->session->set_flashdata('emessage', 'Sorry error occured');
                           redirect($_SERVER['HTTP_REFERER']);
                       }
                   }
                   if ($t=="inactive") {
                       $data_update = array(
                         'is_active'=>0

                         );

                       $this->db->where('id', $id);
                       $zapak=$this->db->update('tbl_products', $data_update);

                       if ($zapak!=0) {
                           $this->session->set_flashdata('smessage', 'Products status updated successfully');

                           redirect("dcadmin/products/view_products", "refresh");
                       } else {
                           $this->session->set_flashdata('emessage', 'Sorry error occured');
                           redirect($_SERVER['HTTP_REFERER']);
                       }
                   }
               } else {
                   redirect("login/admin_login", "refresh");
               }
           }



           public function delete_products($idd)
           {
               if (!empty($this->session->userdata('admin_data'))) {
                   $data['user_name']=$this->load->get_var('user_name');

                   // echo SITE_NAME;
                   // echo $this->session->userdata('image');
                   // echo $this->session->userdata('position');
                   // exit;
                   $id=base64_decode($idd);

                   if ($this->load->get_var('position')=="Super Admin") {
                       $this->db->select('*');
                       $this->db->from('tbl_type');
                       $this->db->where('product_id', $id);
                       $type_data= $this->db->get();
                       foreach ($type_data->result() as $type) {
                           $zapak1=$this->db->delete('tbl_inventory', array('type_id' => $type->id));
                           $zapak2=$this->db->delete('tbl_type', array('id' => $type->id));
                           $zapak=$this->db->delete('tbl_cart', array('type_id' => $id));
                           
                       }
                       $zapak=$this->db->delete('tbl_products', array('id' => $id));
                       if ($zapak!=0) {
                           $this->session->set_flashdata('smessage', 'Products deleted successfully (Along with its types)');

                           redirect("dcadmin/Products/view_products", "refresh");
                       } else {
                           $this->session->set_flashdata('emessage', 'Sorry error occured');
                           redirect($_SERVER['HTTP_REFERER']);
                       }
                   } else {
                       $this->session->set_flashdata('emessage', 'Sorry you not a super admin you dont have permission to delete anything');
                       redirect($_SERVER['HTTP_REFERER']);
                   }
               } else {
                   redirect("login/admin_login", "refresh");
               }
           }
           public function getSubcategory()
           {
               if (!empty($this->session->userdata('admin_data'))) {
                   $isl=$_GET['isl'];

                   $this->db->select('*');
                   $this->db->from('tbl_subcategory');
                   $this->db->where('category_id', $isl);
                   $data= $this->db->get();

                   $i=1;
                   foreach ($data->result() as $row) {
                       $sub_category[] = array('id' =>$row->id ,'name'=>$row->name );
                       $i++;
                   }
                   if (!empty($sub_category)) {
                       // code...
                       echo json_encode($sub_category);
                   } else {
                       echo 'NA';
                   }
               } else {
                   redirect("login/admin_login", "refresh");
               }
           }
       }
