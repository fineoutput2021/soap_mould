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
        $this->load->view('frontend/common/header');
        $this->load->view('frontend/index');
        $this->load->view('frontend/common/footer');
    }
    public function all_products()
    {
        $this->load->view('frontend/common/header');
        $this->load->view('frontend/all_products');
        $this->load->view('frontend/common/footer');
    }

    public function contact()
    {
        $this->load->view('frontend/common/header');
        $this->load->view('frontend/contact');
        $this->load->view('frontend/common/footer');
    }

    public function cart()
    {
        $this->load->view('frontend/common/header');
        $this->load->view('frontend/cart');
        $this->load->view('frontend/common/footer');
    }

    public function wishlist()
    {
        $this->load->view('frontend/common/header');
        $this->load->view('frontend/wishlist');
        $this->load->view('frontend/common/footer');
    }

    public function user_profile()
    {
        $this->load->view('frontend/common/header');
        $this->load->view('frontend/user_profile');
        $this->load->view('frontend/common/footer');
    }

    public function checkout()
    {
        $this->load->view('frontend/common/header');
        $this->load->view('frontend/checkout');
        $this->load->view('frontend/common/footer');
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

    public function product_detail()
    {
        $this->load->view('frontend/common/header');
        $this->load->view('frontend/product_detail');
        $this->load->view('frontend/common/footer');
    }

    public function error404()
    {
        $this->load->view('errors/error404');
    }
}
