<?php

if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/login_model");
        $this->load->model("admin/base_model");
    }
    public function index()
    {
      $this->db->select('*');
      $this->db->from('tbl_slider');
      $this->db->where('is_active',1);
      $data['slider_data']= $this->db->get();
        $this->load->view('frontend/common/header',$data);
        $this->load->view('frontend/index');
        $this->load->view('frontend/common/footer');
    }
    public function all_products($idd, $typ)
    {
         $id=base64_decode($idd);

        $ty = base64_decode($typ);
        $data['typ']=$ty;
        // echo $ty;die();
        if($ty==1){
        $this->db->select('*');
        $this->db->from('tbl_products');
        $this->db->where('is_active', 1);
        $this->db->where('category_id',$id);
        $data['sub_data']= $this->db->get();
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('id', $id);
        $cat_dat = $this->db->get()->row();
        $data['heading'] = $cat_dat->name;
      }else{
        $this->db->select('*');
        $this->db->from('tbl_products');
        $this->db->where('is_active', 1);
        $this->db->where('subcategory_id',$id);
        $data['sub_data']= $this->db->get();
        $this->db->select('*');
        $this->db->from('tbl_subcategory');
        $this->db->where('id', $id);
        $cat_dat = $this->db->get()->row();
        $data['heading'] = $cat_dat->name;
      }
        $pro_check = $data['sub_data']->row();
        $this->db->select('*');
        $this->db->from('tbl_type');
        $this->db->where('is_active', 1);
        $this->db->where('product_id', $pro_check->id);
        $type_check= $this->db->get()->row();
        if(!empty($type_check)){
          $this->load->view('frontend/common/header',$data);
          $this->load->view('frontend/all_products');
          $this->load->view('frontend/common/footer');
        }else{
          $this->session->set_flashdata('emessage', "No Products Found");
          redirect($_SERVER['HTTP_REFERER']);
        }

    }

    public function contact()
    {
        $this->load->view('frontend/common/header');
        $this->load->view('frontend/contact');
        $this->load->view('frontend/common/footer');
    }

    public function subscribe()
    {
          $this->load->helper(array('form', 'url'));
        	$this->load->library('form_validation');
        	$this->load->helper('security');
        	if($this->input->post())
        	{
        	$this->form_validation->set_rules('email', 'email', 'required|xss_clean|trim');

        		if($this->form_validation->run()== TRUE)
        		{
               $email=$this->input->post('email');
               $ip = $this->input->ip_address();
               date_default_timezone_set("Asia/Calcutta");
               $cur_date=date("Y-m-d H:i:s");
               $this->db->select('*');
               $this->db->from('tbl_subscribe');
               $this->db->where('email', $email);
               $sub_da = $this->db->get()->row();
               if(empty($sub_da)){
                 $insert = array('email'=>$email, 'ip'=>$ip, 'date'=>$cur_date);
                 $last_id=$this->base_model->insert_table("tbl_subscribe", $insert, 1) ;
                 $this->session->set_flashdata('smessage', 'Thank you for subscribing us!');
                 redirect($_SERVER['HTTP_REFERER']);
               }else{
                 $this->session->set_flashdata('smessage', 'You are already subscribed to us');
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
    }

    public function cart()
    {
      if (!empty($this->session->userdata('user_data'))) {
        $user_id = $this->session->userdata('user_id');

        $this->db->select('*');
        $this->db->from('tbl_cart');
        $this->db->where('user_id', $user_id);
        $data['cart_data']= $this->db->get();

        $this->load->view('frontend/common/header', $data);
        $this->load->view('frontend/cart');
        $this->load->view('frontend/common/footer');
    } else {
        $this->load->view('frontend/common/header');
        $this->load->view('frontend/local_cart');
        $this->load->view('frontend/common/footer');
    }
    }

    public function wishlist()
    {

        $id = $this->session->userdata('user_id');
                    $this->db->select('*');
        $this->db->from('tbl_wishlist');
        $this->db->where('user_id',$id);
        $data['wish_data']= $this->db->get();
        $this->load->view('frontend/common/header', $data);
        $this->load->view('frontend/wishlist');
        $this->load->view('frontend/common/footer');
    }

    public function user_profile()
    {
                    $this->db->select('*');
        $this->db->from('tbl_users');
        $this->db->where('id',$this->session->userdata('user_id'));
        $data['user_data']= $this->db->get()->row();
        $this->load->view('frontend/common/header', $data);
        $this->load->view('frontend/user_profile');
        $this->load->view('frontend/common/footer');
    }

    public function checkout()
    {
        if(!empty($this->session->userdata('user_data'))){

          $user_id = $this->session->userdata('user_id');
                      $this->db->select('*');
          $this->db->from('tbl_cart');
          $this->db->where('user_id',$user_id);
          $data['cart_data']= $this->db->get();
        $this->load->view('frontend/common/header', $data);
        $this->load->view('frontend/checkout');
        $this->load->view('frontend/common/footer');
      }
    }

    public function user_edit_profile()
    {
        $this->load->view('frontend/common/header');
        $this->load->view('frontend/user_edit_profile');
        $this->load->view('frontend/common/footer');
    }

    public function shipping()
    {
        $this->load->view('frontend/common/header');
        $this->load->view('frontend/shipping');
        $this->load->view('frontend/common/footer');
    }

    public function payment()
    {
        $this->load->view('frontend/common/header');
        $this->load->view('frontend/payment');
        $this->load->view('frontend/common/footer');
    }

    public function order_success()
    {
        $this->load->view('frontend/common/header');
        $this->load->view('frontend/order_success');
        $this->load->view('frontend/common/footer');
    }

    public function order_failed()
    {
        $this->load->view('frontend/common/header');
        $this->load->view('frontend/order_failed');
        $this->load->view('frontend/common/footer');
    }

    public function product_detail($idd)
    {
        $id=base64_decode($idd);
        $data['id']=$idd;

        // echo $id;die();

        $this->db->select('*');
        $this->db->from('tbl_type');
        $this->db->where('id',$id);
        $this->db->where('is_active',1);
        $data['type_data']= $this->db->get()->row();

        $this->db->select('*');
        $this->db->from('tbl_type');
        $this->db->where('product_id',$data['type_data']->product_id);
        $this->db->where('is_active', 1);
        $data['type_full']= $this->db->get();
        $this->load->view('frontend/common/header', $data);
        $this->load->view('frontend/product_detail');
        $this->load->view('frontend/common/footer');
    }

    public function contact_info_submit(){
        $this->load->helper(array('form', 'url'));
      	$this->load->library('form_validation');
      	$this->load->helper('security');
      	if($this->input->post())
      	{
      	$this->form_validation->set_rules('name', 'name', 'xss_clean|trim');
      	$this->form_validation->set_rules('email', 'email', 'xss_clean|trim');
      	$this->form_validation->set_rules('phone', 'phone', 'xss_clean|trim');
      	$this->form_validation->set_rules('message', 'message', 'xss_clean|trim');


      		if($this->form_validation->run()== TRUE)
      		{
            $email=$this->input->post('email');
             $name=$this->input->post('name');
             $phone=$this->input->post('phone');
             $message=$this->input->post('message');
             $ip = $this->input->ip_address();
             date_default_timezone_set("Asia/Calcutta");
             $cur_date=date("Y-m-d H:i:s");
             $addedby=$this->session->userdata('admin_id');

             $contact_insert = array('name'=>$name,
                    'email'=>$email,
                    'phone'=>$phone,
                    'message'=>$message,
                    'ip'=>$ip,
                    'date'=>$cur_date
              );
              $last_id=$this->base_model->insert_table("tbl_contact_us", $contact_insert, 1) ;
              $this->session->set_flashdata('smessage', 'Thank you for contacting us!');

              redirect("/");

          } else {
              $this->session->set_flashdata('emessage', validation_errors());
              redirect($_SERVER['HTTP_REFERER']);
          }
      } else {
          $this->session->set_flashdata('emessage', 'Please insert some data, No data available');
          redirect($_SERVER['HTTP_REFERER']);
      }
    }

    //-------search---------------
    public function search()
    {
        $string= $this->input->get('search');

        $this->db->select('*');
        $this->db->from('tbl_type');
        $this->db->like('name', $string);
        $this->db->where('is_active', 1);
        $data['search_data']= $this->db->get();

        $this->load->view('frontend/common/header', $data);
        $this->load->view('frontend/search_results');
        $this->load->view('frontend/common/footer');
    }

    //================Product Details page type change==============================
    public function type_change(){
        $this->load->helper(array('form', 'url'));
      	$this->load->library('form_validation');
      	$this->load->helper('security');
      	if($this->input->post())
      	{
      	$this->form_validation->set_rules('type_id', 'type_id', 'xss_clean|trim');


      		if($this->form_validation->run()== TRUE)
      		{
             $type_id=base64_decode($this->input->post('type_id'));

             $this->db->select('*');
             $this->db->from('tbl_type');
             $this->db->where('id',$type_id);
             $type_data= $this->db->get()->row();

             if(!empty($this->session->userdata('user_data'))){
             // -----wishlist check----------
             $this->db->select('*');
             $this->db->from('tbl_wishlist');
             $this->db->where('user_id', $this->session->userdata('user_id'));
             $this->db->where('type_id', $type_id);
             $wish_data = $this->db->get()->row();
             if(!empty($wish_data)){
               $existsInWishlist = 1;
             }else{
               $existsInWishlist = 0;
             }
           }else{
             $existsInWishlist = 33;
           }


             $respone['data'] = 'success';
             $respone['data_message'] = 'success';
             $respone['update_type'] = $type_data;
             $respone['existsInWishlist'] = $existsInWishlist;
             echo json_encode($respone);
          } else {
            $respone['data'] = false;
            $respone['data_message'] = validation_errors();
            echo json_encode($respone);
          }
      } else {
        $respone['data'] = false;
        $respone['data_message'] ="Please insert some data, No data available";
        echo json_encode($respone);
      }
    }
    //=============error==========================
    public function error404()
    {
        $this->load->view('errors/error404');
    }
}
