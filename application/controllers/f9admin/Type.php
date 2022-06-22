<?php

if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}
require_once(APPPATH . 'core/CI_finecontrol.php');
class Type extends CI_finecontrol
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("login_model");
        $this->load->model("admin/base_model");
        $this->load->library('user_agent');
        $this->load->library('upload');
    }

    public function view_type($idd)
    {
        if (!empty($this->session->userdata('admin_data'))) {
            $data['type_name']=$this->load->get_var('type_name');

            // echo SITE_NAME;
            // echo $this->session->userdata('image');
            // echo $this->session->userdata('position');
            // exit;
            $id=base64_decode($idd);
            $data['id']=$idd;

            $this->db->select('*');
            $this->db->from('tbl_type');
            $this->db->where('product_id', $id);
            $data['type']= $this->db->get();

            $this->db->select('*');
            $this->db->from('tbl_products');
            // $this->db->where('id',$id);
            $data['product_data']= $this->db->get();


            $this->load->view('admin/common/header_view', $data);
            $this->load->view('admin/type/view_type');
            $this->load->view('admin/common/footer_view');
        } else {
            redirect("login/admin_login", "refresh");
        }
    }
    public function add_type($idd)
    {
        if (!empty($this->session->userdata('admin_data'))) {
            $data['type_name']=$this->load->get_var('type_name');

            // echo SITE_NAME;
            // echo $this->session->userdata('image');
            // echo $this->session->userdata('position');
            // exit;
            $id=base64_decode($idd);
            $data['id']=$idd;

            $this->db->select('*');
            $this->db->from('tbl_products');
            $this->db->where('is_active', 1);
            $data['product_data']= $this->db->get();

            $this->db->select('*');
            $this->db->from('tbl_type');
            $data['type_data']= $this->db->get();

            $this->db->select('*');
            $this->db->from('tbl_inventory');
            $data['inventory_data']= $this->db->get();


            $this->load->view('admin/common/header_view', $data);
            $this->load->view('admin/type/add_type');
            $this->load->view('admin/common/footer_view');
        } else {
            redirect("login/admin_login", "refresh");
        }
    }

    public function add_type_data($t, $iw="")
    {
        if (!empty($this->session->userdata('admin_data'))) {
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
            $this->load->helper('security');
            if ($this->input->post()) {
                // print_r($this->input->post());
                // exit;
                $this->form_validation->set_rules('name', 'name', 'xss_clean');
                $this->form_validation->set_rules('mrp', 'mrp', 'xss_clean');
                $this->form_validation->set_rules('gst', 'gst', 'xss_clean');
                $this->form_validation->set_rules('sp', 'sp', 'xss_clean');
                $this->form_validation->set_rules('gstprice', 'gstprice', 'xss_clean');
                $this->form_validation->set_rules('spgst', 'spgst', 'xss_clean');
                $this->form_validation->set_rules('product_id', 'product_id', 'xss_clean');


                if ($this->form_validation->run()== true) {
                    $email=$this->input->post('email');
                    $passw=$this->input->post('password');

                    $ip = $this->input->ip_address();
                    date_default_timezone_set("Asia/Calcutta");
                    $cur_date=date("Y-m-d H:i:s");

                    $product_id=base64_decode($this->input->post('product_id'));
                    $name=$this->input->post('name');
                    $mrp=$this->input->post('mrp');
                    $gst=$this->input->post('gst');
                    $sp=$this->input->post('sp');
                    $gstprice=$this->input->post('gstprice');
                    $spgst=$this->input->post('spgst');
                    $addedby=$this->session->userdata('admin_id');



                    $img1='image1';
                    $nnnn3='';

                    $file_check=($_FILES['image1']['error']);
                    if ($file_check!=4) {
                        $image_upload_folder = FCPATH . "assets/uploads/type/";
                        if (!file_exists($image_upload_folder)) {
                            mkdir($image_upload_folder, DIR_WRITE_MODE, true);
                        }
                        $new_file_name="type1".date("Ymdhms");
                        $this->upload_config = array(
                             'upload_path'   => $image_upload_folder,
                             'file_name' => $new_file_name,
                             'allowed_types' =>'jpg|jpeg|png',
                             'max_size'      => 25000
                     );
                        $this->upload->initialize($this->upload_config);
                        if (!$this->upload->do_upload($img1)) {
                            $upload_error = $this->upload->display_errors();
                            // echo json_encode($upload_error);

                            $this->session->set_flashdata('emessage', $upload_error);
                            redirect($_SERVER['HTTP_REFERER']);
                        } else {
                            $file_info = $this->upload->data();

                            $videoNAmePath3 = "assets/uploads/type/".$new_file_name.$file_info['file_ext'];
                            $nnnn3=$videoNAmePath3;

                            // echo json_encode($file_info);
                        }
                    }
                    // echo $nnnn3;die();



                    $img4='image2';

                    $nnnn4= "";

                    $file_check=($_FILES['image2']['error']);
                    if ($file_check!=4) {
                        $image_upload_folder = FCPATH . "assets/uploads/type/";
                        if (!file_exists($image_upload_folder)) {
                            mkdir($image_upload_folder, DIR_WRITE_MODE, true);
                        }
                        $new_file_name="type2".date("Ymdhms");
                        $this->upload_config = array(
                             'upload_path'   => $image_upload_folder,
                             'file_name' => $new_file_name,
                             'allowed_types' =>'jpg|jpeg|png',
                             'max_size'      => 25000
                     );
                        $this->upload->initialize($this->upload_config);
                        if (!$this->upload->do_upload($img4)) {
                            $upload_error = $this->upload->display_errors();
                            // echo json_encode($upload_error);

                            $this->session->set_flashdata('emessage', $upload_error);
                            redirect($_SERVER['HTTP_REFERER']);
                        } else {
                            $file_info = $this->upload->data();

                            $videoNAmePath4 = "assets/uploads/type/".$new_file_name.$file_info['file_ext'];
                            $nnnn4=$videoNAmePath4;

                            // echo json_encode($file_info);
                        }
                    }

                    // echo $nnnn4;die();


                    $img5='image3';
                    $nnnn5="";

                    $file_check=($_FILES['image3']['error']);
                    if ($file_check!=4) {
                        $image_upload_folder = FCPATH . "assets/uploads/type/";
                        if (!file_exists($image_upload_folder)) {
                            mkdir($image_upload_folder, DIR_WRITE_MODE, true);
                        }
                        $new_file_name="type3".date("Ymdhms");
                        $this->upload_config = array(
                             'upload_path'   => $image_upload_folder,
                             'file_name' => $new_file_name,
                             'allowed_types' =>'jpg|jpeg|png',
                             'max_size'      => 25000
                     );
                        $this->upload->initialize($this->upload_config);
                        if (!$this->upload->do_upload($img5)) {
                            $upload_error = $this->upload->display_errors();
                            // echo json_encode($upload_error);
                            $this->session->set_flashdata('emessage', $upload_error);
                            redirect($_SERVER['HTTP_REFERER']);
                        } else {
                            $file_info = $this->upload->data();

                            $videoNAmePath5 = "assets/uploads/type/".$new_file_name.$file_info['file_ext'];
                            $nnnn5=$videoNAmePath5;

                            // echo json_encode($file_info);
                        }
                    }



                    $img6='image4';
                    $nnnn6="";


                    $file_check=($_FILES['image4']['error']);
                    if ($file_check!=4) {
                        $image_upload_folder = FCPATH . "assets/uploads/type/";
                        if (!file_exists($image_upload_folder)) {
                            mkdir($image_upload_folder, DIR_WRITE_MODE, true);
                        }
                        $new_file_name="type4".date("Ymdhms");
                        $this->upload_config = array(
                             'upload_path'   => $image_upload_folder,
                             'file_name' => $new_file_name,
                             'allowed_types' =>'jpg|jpeg|png',
                             'max_size'      => 25000
                     );
                        $this->upload->initialize($this->upload_config);
                        if (!$this->upload->do_upload($img6)) {
                            $upload_error = $this->upload->display_errors();
                            // echo json_encode($upload_error);

                            $this->session->set_flashdata('emessage', $upload_error);
                            redirect($_SERVER['HTTP_REFERER']);
                        } else {
                            $file_info = $this->upload->data();

                            $videoNAmePath6 = "assets/uploads/type/".$new_file_name.$file_info['file_ext'];
                            $nnnn6=$videoNAmePath6;

                            // echo json_encode($file_info);
                        }
                    }

                    // echo $nnnn3."ANDD".$nnnn4; die();
                    $typ=base64_decode($t);
                    // echo $typ;die();
                    if ($typ==1) {
                        $data_insert = array('product_id'=>$product_id,
                    'name'=>$name,
                    'mrp'=>$mrp,
                    'gst'=>$gst,
                    'sp'=>$sp,
                    'gstprice'=>$gstprice,
                    'spgst'=>$spgst,
                    'image1'=>$nnnn3,
                    'image2'=>$nnnn4,
                    'image3'=>$nnnn5,
                    'image4'=>$nnnn6,
                    'ip' =>$ip,
                    'added_by' =>$addedby,
                    'is_active' =>1,
                    'date'=>$cur_date

                    );
                        // print_r($data_insert);die();
                        $last_id = $this->base_model->insert_table("tbl_type", $data_insert, 1) ;
                        //-----inventory create---------------------------------------
                        $beta_insert = array('type_id'=>$last_id,
                                        'quantity'=>100,
                                        'ip' =>$ip,
                                        'added_by' =>$addedby,
                                        'date'=>$cur_date
                                        );
                        $least_id=$this->base_model->insert_table("tbl_inventory", $beta_insert, 1);


                        if ($last_id!=0) {
                            $this->session->set_flashdata('smessage', 'Type inserted successfully');
                            redirect("dcadmin/Type/view_type/".base64_encode($product_id), "refresh");
                        } else {
                            $this->session->set_flashdata('emessage', 'Sorry error occured');
                            redirect($_SERVER['HTTP_REFERER']);
                        }
                    }
                    if ($typ==2) {
                        $idw=base64_decode($iw);
                        $this->db->select('*');
                        $this->db->from('tbl_type');
                        $this->db->where('id', $idw);
                        $da= $this->db->get()->row();
                        if (!empty($da)) {
                            $img = $da ->image1;
                            if (!empty($img)) {
                                if (empty($nnnn3)) {
                                    $nnnn3 = $img;
                                }
                            } else {
                                if (empty($nnnn3)) {
                                    $nnnn3= "";
                                }
                            }
                        }
                        if (!empty($da)) {
                            $img = $da ->image2;
                            if (!empty($img)) {
                                if (empty($nnnn4)) {
                                    $nnnn4 = $img;
                                }
                            } else {
                                if (empty($nnnn4)) {
                                    $nnnn4= "";
                                }
                            }
                        }
                        if (!empty($da)) {
                            $img = $da ->image3;
                            if (!empty($img)) {
                                if (empty($nnnn5)) {
                                    $nnnn5 = $img;
                                }
                            } else {
                                if (empty($nnnn5)) {
                                    $nnnn5= "";
                                }
                            }
                        }
                        if (!empty($da)) {
                            $img = $da ->image4;
                            if (!empty($img)) {
                                if (empty($nnnn6)) {
                                    $nnnn6 = $img;
                                }
                            } else {
                                if (empty($nnnn6)) {
                                    $nnnn6= "";
                                }
                            }
                        }


                        $data_insert = array(
                    'name'=>$name,
                    'mrp'=>$mrp,
                    'gst'=>$gst,
                    'sp'=>$sp,
                    'gstprice'=>$gstprice,
                    'spgst'=>$spgst,
                    'image1'=>$nnnn3,
                    'image2'=>$nnnn4,
                    'image3'=>$nnnn5,
                    'image4'=>$nnnn6
                    );




                        $this->db->where('id', $idw);
                        $last_id=$this->db->update('tbl_type', $data_insert);
                        $product_id = $da->product_id;


                        if ($last_id!=0) {
                            $this->session->set_flashdata('smessage', 'Type updated successfully');

                            redirect("dcadmin/Type/view_type/".base64_encode($product_id), "refresh");
                        } else {
                            $this->session->set_flashdata('emessage', 'Sorry error occured');
                            redirect($_SERVER['HTTP_REFERER']);
                        }
                    }

                    // echo $product_id;die();
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


    public function update_type($idd)
    {
        if (!empty($this->session->userdata('admin_data'))) {
            $data['type_name']=$this->load->get_var('type_name');

            // echo SITE_NAME;
            // echo $this->session->userdata('image');
            // echo $this->session->userdata('position');
            // exit;

            $id=base64_decode($idd);
            $data['id']=$idd;

            $this->db->select('*');
            $this->db->from('tbl_products');
            $this->db->where('is_active', 1);
            $data['product_data']= $this->db->get();


            $this->db->select('*');
            $this->db->from('tbl_type');
            $this->db->where('id', $id);
            $data['type_data']= $this->db->get()->row();

            $this->db->select('*');
            $this->db->from('tbl_inventory');
            $this->db->where('id', $id);
            $data['inventory_data']= $this->db->get()->row();


            $this->load->view('admin/common/header_view', $data);
            $this->load->view('admin/type/update_type');
            $this->load->view('admin/common/footer_view');
        } else {
            redirect("login/admin_login", "refresh");
        }
    }

    public function delete_type($idd)
    {
        if (!empty($this->session->userdata('admin_data'))) {
            $data['type_name']=$this->load->get_var('type_name');

            // echo SITE_NAME;
            // echo $this->session->userdata('image');
            // echo $this->session->userdata('position');
            // exit;
            $id=base64_decode($idd);

            if ($this->load->get_var('position')=="Super Admin") {
                $zapak=$this->db->delete('tbl_type', array('id' => $id));
                if ($zapak!=0) {
                    $zapak2=$this->db->delete('tbl_inventory', array('type_id' => $id));
                    $zapak=$this->db->delete('tbl_cart', array('type_id' => $id));
                    if (!empty($zapak2)) {
                      $this->session->set_flashdata('smessage', 'Type deleted successfully');

                        redirect("dcadmin/Products/view_products", "refresh");
                    } else {
                        $this->session->set_flashdata('emessage', 'Some error occured');
                        redirect($_SERVER['HTTP_REFERER']);
                    }
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

    public function updatetypeStatus($idd, $t)
    {
        if (!empty($this->session->userdata('admin_data'))) {
            $data['type_name']=$this->load->get_var('type_name');

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
                $zapak=$this->db->update('tbl_type', $data_update);

                if ($zapak!=0) {
                  $this->session->set_flashdata('smessage', 'Type status changed successfully');

                    redirect("dcadmin/Type/view_type", "refresh");
                } else {
                  $this->session->set_flashdata('emessage', 'Some error occured');
                  redirect($_SERVER['HTTP_REFERER']);
                }
            }
            if ($t=="inactive") {
                $data_update = array(
          'is_active'=>0

          );

                $this->db->where('id', $id);
                $zapak=$this->db->update('tbl_type', $data_update);

                if ($zapak!=0) {
                  $zapak=$this->db->delete('tbl_cart', array('type_id' => $id));
                  $zapak=$this->db->delete('tbl_wishlist', array('type_id' => $id));
                  $this->session->set_flashdata('smessage', 'Type status changed successfully');
                    redirect("dcadmin/Type/view_type", "refresh");
                } else {
                  $this->session->set_flashdata('emessage', 'Some error occured');
                  redirect($_SERVER['HTTP_REFERER']);
                }
            }
        } else {
            $this->load->view('admin/login/index');
        }
    }
}
