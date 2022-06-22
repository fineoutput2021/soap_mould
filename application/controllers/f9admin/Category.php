<?php

if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}
require_once(APPPATH . 'core/CI_finecontrol.php');
class Category extends CI_finecontrol
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("login_model");
        $this->load->model("admin/base_model");
        $this->load->library('user_agent');
        $this->load->library('upload');
    }

    public function view_category()
    {
        if (!empty($this->session->userdata('admin_data'))) {
            $data['user_name']=$this->load->get_var('user_name');

            // echo SITE_NAME;
            // echo $this->session->userdata('image');
            // echo $this->session->userdata('position');
            // exit;

            $this->db->select('*');
            $this->db->from('tbl_category');
            //$this->db->where('id',$usr);
            $data['category_data']= $this->db->get();

            $this->load->view('admin/common/header_view', $data);
            $this->load->view('admin/category/view_category');
            $this->load->view('admin/common/footer_view');
        } else {
            redirect("login/admin_login", "refresh");
        }
    }

    public function add_category()
    {
        if (!empty($this->session->userdata('admin_data'))) {
            $this->load->view('admin/common/header_view');
            $this->load->view('admin/category/add_category');
            $this->load->view('admin/common/footer_view');
        } else {
            redirect("login/admin_login", "refresh");
        }
    }

    public function update_category($idd)
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
            $this->db->where('id', $id);
            $data['category_data']= $this->db->get()->row();


            $this->load->view('admin/common/header_view', $data);
            $this->load->view('admin/category/update_category');
            $this->load->view('admin/common/footer_view');
        } else {
            redirect("login/admin_login", "refresh");
        }
    }

    public function add_category_data($t, $iw="")
    {
        if (!empty($this->session->userdata('admin_data'))) {
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
            $this->load->helper('security');
            if ($this->input->post()) {
                // print_r($this->input->post());
                // exit;
                $this->form_validation->set_rules('name', 'name', 'required');
                if ($this->form_validation->run()== true) {
                    $name=$this->input->post('name');

                    $ip = $this->input->ip_address();
                    date_default_timezone_set("Asia/Calcutta");
                    $cur_date=date("Y-m-d H:i:s");
                    $addedby=$this->session->userdata('admin_id');

                    $typ=base64_decode($t);
                    $last_id = 0;
                    if ($typ==1) {
                        $data_insert = array(
'name'=>$name,

'ip' =>$ip,
'added_by' =>$addedby,
'is_active' =>1,
'date'=>$cur_date
);


                        $last_id=$this->base_model->insert_table("tbl_category", $data_insert, 1) ;
                        if ($last_id!=0) {
                            $this->session->set_flashdata('smessage', 'Category inserted successfully');
                            redirect("dcadmin/category/view_category", "refresh");
                        } else {
                            $this->session->set_flashdata('emessage', 'Sorry error occured');
                            redirect($_SERVER['HTTP_REFERER']);
                        }
                    }
                    if ($typ==2) {
                        $idw=base64_decode($iw);


                        $this->db->select('*');
                        $this->db->from('tbl_category');
                        $this->db->where('id', $idw);
                        $dsa=$this->db->get();
                        $da=$dsa->row();





                        $data_insert = array(
'name'=>$name,

);
                        $this->db->where('id', $idw);
                        $last_id=$this->db->update('tbl_category', $data_insert);
                        if ($last_id!=0) {
                            $this->session->set_flashdata('smessage', 'Category updated successfully');
                            redirect("dcadmin/category/view_category", "refresh");
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

    public function updatecategoryStatus($idd, $t)
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
                $zapak=$this->db->update('tbl_category', $data_update);

                if ($zapak!=0) {
                    $this->session->set_flashdata('smessage', 'Category status updated successfully');
                    redirect("dcadmin/category/view_category", "refresh");
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
                $zapak=$this->db->update('tbl_category', $data_update);

                if ($zapak!=0) {
                  $this->db->select('*');
                  $this->db->from('tbl_products');
                  $this->db->where('category_id', $id);
                  $pro_del= $this->db->get();
                  foreach ($pro_del->result() as $pro) {
                      $this->db->select('*');
                      $this->db->from('tbl_type');
                      $this->db->where('product_id', $pro->id);
                      $type_data= $this->db->get();
                      foreach ($type_data->result() as $type) {
                          $zapak=$this->db->delete('tbl_cart', array('type_id' => $type->id));
                          $zapak=$this->db->delete('tbl_wishlist', array('type_id' => $type->id));
                      }
                    }
                    $this->session->set_flashdata('smessage', 'Category status updated successfully');
                    redirect("dcadmin/category/view_category", "refresh");
                } else {
                    $this->session->set_flashdata('emessage', 'Sorry error occured');
                    redirect($_SERVER['HTTP_REFERER']);
                }
            }
        } else {
            redirect("login/admin_login", "refresh");
        }
    }



    public function delete_category($idd)
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
                $this->db->from('tbl_products');
                $this->db->where('category_id', $id);
                $pro_del= $this->db->get();
                foreach ($pro_del->result() as $pro) {
                    $this->db->select('*');
                    $this->db->from('tbl_type');
                    $this->db->where('product_id', $pro->id);
                    $type_data= $this->db->get();
                    foreach ($type_data->result() as $type) {
                        $zapak1=$this->db->delete('tbl_inventory', array('type_id' => $type->id));
                        $zapak2=$this->db->delete('tbl_type', array('id' => $type->id));
                        $zapak=$this->db->delete('tbl_cart', array('type_id' => $type->id));
                        $zapak=$this->db->delete('tbl_wishlist', array('type_id' => $type->id));
                    }
                    $zapak1=$this->db->delete('tbl_products', array('id' => $pro->id));
                }
                $zapak1=$this->db->delete('tbl_subcategory', array('category_id' => $id));
                $zapak=$this->db->delete('tbl_category', array('id' => $id));
                if ($zapak!=0) {
                    $this->session->set_flashdata('smessage', 'Category deleted successfully (Subcategory, Products and their respective types were also deleted)');

                    redirect("dcadmin/category/view_category", "refresh");
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
}
