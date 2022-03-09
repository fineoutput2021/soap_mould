<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH . 'core/CI_finecontrol.php');
class Inventory extends CI_finecontrol{
function __construct()
		{
			parent::__construct();
			$this->load->model("login_model");
			$this->load->model("admin/base_model");
			$this->load->library('user_agent');
		}

public function view_inventory(){

                 if(!empty($this->session->userdata('admin_data'))){


                   $data['inventory_name']=$this->load->get_var('inventory_name');

                   // echo SITE_NAME;
                   // echo $this->session->userdata('image');
                   // echo $this->session->userdata('position');
                   // exit;
                   $this->db->select('*');
                   $this->db->from('tbl_inventory');
                   //$this->db->where('id',$usr);
                   $data['inventory_data']= $this->db->get();

                   $this->db->select('*');
                   $this->db->from('tbl_type');
                   //$this->db->where('id',$usr);
                   $data['type_data']= $this->db->get();


                   $this->load->view('admin/common/header_view',$data);
                   $this->load->view('admin/Inventory/view_inventory');
                   $this->load->view('admin/common/footer_view');

               }
               else{

                  redirect("login/admin_login","refresh");
               }

               }

public function update_inventory($idd)
               {
                   if (!empty($this->session->userdata('admin_data'))) {
                       $data['inventory_name']=$this->load->get_var('inventory_name');

                       // echo SITE_NAME;
                       // echo $this->session->userdata('image');
                       // echo $this->session->userdata('position');
                       // exit;

                       $id=base64_decode($idd);
                       $data['id']=$idd;
// echo $id;die();
                       $this->db->select('*');
                       $this->db->from('tbl_inventory');
                       $this->db->where('id', $id);
                       $data['inventory_data']= $this->db->get()->row();


                       $this->load->view('admin/common/header_view', $data);
                       $this->load->view('admin/Inventory/update_inventory');
                       $this->load->view('admin/common/footer_view');
                   } else {
                       redirect("login/admin_login", "refresh");
                   }
               }
               public function update_inventory_data($t, $iw="")
               {
                   if (!empty($this->session->userdata('admin_data'))) {
                       $this->load->helper(array('form', 'url'));
                       $this->load->library('form_validation');
                       $this->load->helper('security');
                       if ($this->input->post()) {
                           // print_r($this->input->post());
                           // exit;
                           $this->form_validation->set_rules('quantity', 'quantity', 'required');




                           if ($this->form_validation->run()== true) {
                               $name=$this->input->post('name');
                               $quantity=$this->input->post('quantity');


                               $ip = $this->input->ip_address();
                               date_default_timezone_set("Asia/Calcutta");
                               $cur_date=date("Y-m-d H:i:s");
                               $addedby=$this->session->userdata('admin_id');

                               $typ=base64_decode($t);
                               $last_id = 0;
                               if ($typ==2) {
                                   $idw=base64_decode($iw);


                                   $this->db->select('*');
                                   $this->db->from('tbl_inventory');
                                   $this->db->where('id', $idw);
                                   $dsa=$this->db->get();
                                   $da=$dsa->row();


                                   $data_insert = array(
                                     'quantity'=>$quantity,


                         );
                                   $this->db->where('id', $idw);
                                   $last_id=$this->db->update('tbl_inventory', $data_insert);
                               }
                               if ($last_id!=0) {
                                   $this->session->set_flashdata('smessage', 'Data inserted successfully');
                                   redirect("dcadmin/Inventory/view_inventory", "refresh");
                               } else {
                                   $this->session->set_flashdata('emessage', 'Sorry error occured');
                                   redirect($_SERVER['HTTP_REFERER']);
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

}
