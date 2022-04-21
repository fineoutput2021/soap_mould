<?php

if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}
class Order extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/login_model");
        $this->load->model("admin/base_model");
    }

    //-------------calculate--------------

    public function calculate()
    {

              $user_id = $this->session->userdata('user_id');
            //---------get cart data----------------
                $this->db->select('*');
                $this->db->from('tbl_cart');
                $this->db->where('user_id', $user_id);
                $cartInfo= $this->db->get();
                $cart_e = $cartInfo->row();

                if (!empty($cart_e)) {
                    $ip = $this->input->ip_address();
                    date_default_timezone_set("Asia/Calcutta");
                    $cur_date=date("Y-m-d H:i:s");
                    $total = 0;
                    foreach ($cartInfo->result() as $cart) {
                        $price=0;
                        $this->db->select('*');
                        $this->db->from('tbl_type');
                        $this->db->where('id', $cart->type_id);
                        $pro_data= $this->db->get()->row();

                        //-----check inventory------
                                    $this->db->select('*');
                        $this->db->from('tbl_inventory');
                        $this->db->where('type_id',$type_id);
                        $inventory= $this->db->get();
                        if (!empty($inventory->quantity)) {
                            if ($inventory->quantity >= $cart->quantity) {
                                $price = $pro_data->sp * $cart->quantity;
                                $total= $total + $price;
                            } else {
                                $this->session->set_flashdata('emessage', ''.$pro_data->name.'  is out of stock');
                                redirect($_SERVER['HTTP_REFERER']);
                            }
                        } else {
                            $this->session->set_flashdata('emessage', ''.$pro_data->name.'  is out of stock');
                            redirect($_SERVER['HTTP_REFERER']);
                        }
                        $user_id = $this->session->userdata('user_id');
                        $final_amount = $total ;
                    }
                    //------order1 entry-------------
                    $order1_insert = array('user_id'=>$user_id,
          'total_amount'=>$total,
          'final_amount'=>round($final_amount),
          'payment_status'=>0,
          'order_status'=>0,
          'ip' =>$ip,
          'date'=>$cur_date
          );

                    $last_id=$this->base_model->insert_table("tbl_order1", $order1_insert, 1) ;

                    if (!empty($last_id)) {

//---------------order2 entires-------------------
                        foreach ($cartInfo->result() as $cart2) {
                            $this->db->select('*');
                            $this->db->from('tbl_type');
                            $this->db->where('id', $cart2->product_id);
                            $pro_data= $this->db->get()->row();

                            $total = $pro_data->selling_price * $cart2->quantity;

                            $order2_insert = array('main_id'=>$last_id,
                        'product_id'=>$cart2->product_id,
                        'type_id'=>$cart2->type_id,
                        'quantity'=>$cart2->quantity,
                        'mrp'=>$pro_data->mrp,
                        'selling_price'=>$pro_data->selling_price,
                        'total_amount'=>$total,
                        'date'=>$cur_date
                        );

                            $last_id2=$this->base_model->insert_table("tbl_order2", $order2_insert, 1);
                        }
                        if (!empty($last_id2)) {
                            $this->session->set_userdata('order_id', base64_encode($last_id));
                            redirect("Home/checkout", "refresh");
                        } else {
                            $this->session->set_flashdata('emessage', 'Some error occured! Please try again');
                            redirect($_SERVER['HTTP_REFERER']);
                        }
                    } else {
                        $this->session->set_flashdata('emessage', 'Some error occured');
                        redirect($_SERVER['HTTP_REFERER']);
                    }
                } else {
                    $this->session->set_flashdata('emessage', 'Please add product for process to checkout');
                    redirect("/", "refresh");
                }
          }
        }
