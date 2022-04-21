<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH . 'core/CI_finecontrol.php');
class User extends CI_finecontrol{
function __construct()
{
	parent::__construct();
	$this->load->model("login_model");
	$this->load->model("admin/base_model");
	$this->load->library('user_agent');
}

public function login(){
      if(empty($this->session->userdata('user_data'))){
				$referer = $this->input->get('referer');
				if(empty($referer)){
					$referer = '';
				}
				$data['referer'] = $referer;

  			$this->load->view('login',$data);

    }else{
  	redirect("home","refresh");
    }
    }

    public function login_process(){

    			$this->load->helper(array('form', 'url'));
    			$this->load->library('form_validation');
    			$this->load->helper('security');
          $data['data'] = '';
    			if($this->input->post())
    			{
						$referer = $this->input->get('referer');
						if(empty($referer)){
							$referer = '';
						}
    				$this->form_validation->set_rules('email', 'email', 'required|valid_email|xss_clean|trim');
    				$this->form_validation->set_rules('password', 'password', 'required|xss_clean|trim');
    				if($this->form_validation->run()== TRUE)
    				{

    					$email=$this->input->post('email');
    					$passw=$this->input->post('password');
    					$pass=md5($passw);
    												$this->db->select('*');
    												$this->db->from('tbl_users');
    												$this->db->where('email',$email);
    												$da_customer= $this->db->get();
    												$da=$da_customer->row();
    												if(!empty($da)){

    															$db_name=$da->name;
    															$db_id=$da->id;

                                  $db_email=$da->email;
    															$db_password=$da->password;


    													if($db_password==$pass){

    														$db_id=$da->id;

    												$this->session->set_userdata('user_data',1);
                            $this->session->set_userdata('user_id', $db_id);
    												$this->session->set_userdata('customer_name', $db_name);

                            $this->session->set_userdata('customer_email', $db_email);
                            $this->session->set_userdata('customer_contact', $db_contact);

    											//	redirect("home","refresh");
	                         $data['data']=true;
													 $data['cusomer_id']=$db_id;
													 $data['referer'] = $referer;

redirect("order/OpenCategories","refresh");
    					}
							else{

								$this->session->set_flashdata('emessage','Invalid Password!');
								redirect($_SERVER['HTTP_REFERER']);

							}
						}
						else{
							$this->session->set_flashdata('emessage','Invalid Credentials!');
							redirect($_SERVER['HTTP_REFERER']);

						}
    				}
    				else{
							$this->session->set_flashdata('emessage',validation_errors());
							redirect($_SERVER['HTTP_REFERER']);
    				}

    			}
    	}


			public function login_process_page(){

	    			$this->load->helper(array('form', 'url'));
	    			$this->load->library('form_validation');
	    			$this->load->helper('security');
	          $data['data'] = '';
	    			if($this->input->post())
	    			{
							$referer = $this->input->get('referer');
							if(empty($referer)){
								$referer = '';
							}
	    				$this->form_validation->set_rules('email', 'email', 'required|valid_email|xss_clean|trim');
	    				$this->form_validation->set_rules('password', 'password', 'required|xss_clean|trim');
	    				if($this->form_validation->run()== TRUE)
	    				{

	    					$email=$this->input->post('email');
	    					$passw=$this->input->post('password');
	    					$pass=md5($passw);
	    												$this->db->select('*');
	    												$this->db->from('tbl_users');
	    												$this->db->where('email',$email);
	    												// $this->db->where('password',$pass);
	    												$da_customer= $this->db->get();
	    												$da=$da_customer->row();
	    												if(!empty($da)){

	    															$db_first_name=$da->name;

	                                  $db_email=$da->email;
	    															$db_password=$da->password;


	    													if($db_password==$pass){

	    														$db_id=$da->id;

	    												$this->session->set_userdata('user_data',1);
	    												$this->session->set_userdata('user_id',$db_id);
	    												$this->session->set_userdata('user_name', $db_first_name);
	                            $this->session->set_userdata('user_email', $db_email);

	    											//	redirect("home","refresh");
		                         $data['data']=true;
														 $data['cusomer_id']=$db_id;
														 $data['referer'] = $referer;

	                            redirect("/","refresh");
	    					}
								else{
									$this->session->set_flashdata('emessage','Invalid Password!');
									redirect($_SERVER['HTTP_REFERER']);

								}
							}
							else{

								$this->session->set_flashdata('emessage','Invalid Credentials!');
								redirect($_SERVER['HTTP_REFERER']);

							}
	    				}
	    				else{
								$this->session->set_flashdata('emessage',validation_errors());
								redirect($_SERVER['HTTP_REFERER']);
	    				}

		}else{
			$this->session->set_flashdata('emessage','Please insert some data, No data available');
			redirect($_SERVER['HTTP_REFERER']);
		}
	    	}

        public function register_process(){


        	          if(empty($this->session->userdata('user_data'))){
          					$data['data'] = '';

        											$this->load->helper(array('form', 'url'));
        											$this->load->library('form_validation');
        											$this->load->helper('security');
        	            if($this->input->post())
        	           {

        // echo "yespost"; die();

        $this->form_validation->set_rules('name', 'name', 'required|xss_clean|trim');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email|xss_clean|trim|is_unique[tbl_users.email]');
        $this->form_validation->set_rules('password', 'password', 'required|xss_clean|trim');
        	             if($this->form_validation->run()== TRUE)
        	             {
        // echo "yes"; die();
        	              	$email=$this->input->post('email');
        	      	 			 	$password=$this->input->post('password');
                          $pass= md5($password);
        								 	$name=$this->input->post('name');
        //$otp_id= $this->session->userdata('user_otp_id');
        // $this->db->select('*');
        // $this->db->from('tbl_otp');
        // $this->db->where('id',$otp_id);
        // $otp_data= $this->db->get()->row();


        								  // $genrated_otp = 	$otp_data->otp;
        								  // $otp = $this->input->post('otp');
        	                $ip = $this->input->ip_address();
        	      					date_default_timezone_set("Asia/Calcutta");
        	                $cur_date=date("Y-m-d H:i:s");



        	        // if(!empty($nnnn)){
        	        // $nnn=$nnnn;
        	        // }
        	        // else{
        	        // $nnn="";
        	        // }


        	                  $data_insert = array(
        	                       	 'email'=>$email,
        	       	 			 						'password'=>$pass,
                                    'name'=>$name,
        	                            'ip' =>$ip,
        	                            'is_active' =>1,
        	                            'date'=>$cur_date

        	                            );


        	$last_id=$this->base_model->insert_table("tbl_users",$data_insert,1) ;

          $this->session->set_userdata('user_data',1);
          	$this->session->set_userdata('user_id',$last_id);
          	$this->session->set_userdata('user_name', $name);
            $this->session->set_userdata('user_email', $email);



        	            // if($last_id!=0){
                      //
                      //
        							// 	$this->session->set_userdata('user_data',1);
        							// 	$this->session->set_userdata('user_id',$last_id);
        							// 	$this->session->set_userdata('customer_name', $name);
        							// 	// $this->session->set_userdata('customer_last_name', $last_name);
        							//   $this->session->set_userdata('customer_email', $email);
        							// 	$this->session->set_userdata('customer_id', $last_id);
                      //
                      //
        							// 	// Email send to info@oswalsoap.com
                      //
        							// 						  $config = Array(
        							// 								'protocol' => 'smtp',
        							// 	'smtp_host' => SMTP_HOST,
        							// 	'smtp_port' => 26,
        							// 	'smtp_user' => USER_NAME, // change it to yours
        							// 	'smtp_pass' => PASSWORD, // change it to yours
        							// 	'mailtype' => 'html',
        							// 	'charset' => 'iso-8859-1',
        							// 	'wordwrap' => TRUE
        							// 						  );
        							// 	          $this->load->library('email', $config);
                      //
        							// 							$data=array(
        							// 								'name'=>$first_name,
        							// 							);
        					    //           $mesg = $this->load->view('emails/signup',$data,true);
        							// 	        $this->email->set_newline("");
        							// 	        $this->email->from('office.fineoutput@gmail.com'); // change it to yours
        							// 	        $this->email->to($email);// change it to yours
        							// 	        $this->email->subject('Signup successfull');
        							// 	        $this->email->message($mesg);
        							// 	        if($this->email->send())
        							// 	       {
        							// 	        //echo 'Email sent.';
        							// 	       }
        							// 	       else
        							// 	      {
        							// 	       //show_error($this->email->print_debugger());
        							// 	      }
                      //
                      //       }else{
                      //         // $data['data']=false;
                      //         // $data['data_message']='Error Occured in data insert, Please try again';
                      //
                      //         $this->session->set_flashdata('emessage','Error Occured in data insert, Please try again');
                      //           redirect($_SERVER['HTTP_REFERER']);
                      //
                      //       }

											//insert cart data into cart table---------
                                    $cart_data = $this->session->userdata('cart_data');
                                    // print_r($cart_data);
                                    // exit;
                                    if (!empty($cart_data)) {
                                        foreach ($cart_data as $value) {
                                            $this->db->select('*');
                                            $this->db->from('tbl_cart');
                                            $this->db->where('user_id', $last_id);
                                            $this->db->where('product_id', $value['product_id']);
                                            $this->db->where('type_id', $value['type_id']);
                                            $cartInfo= $this->db->get()->row();
                                            if (empty($cartInfo)) {
                                                //---------inventory check------------
                                                $this->db->select('*');
                                                $this->db->from('tbl_inventory');
                                                $this->db->where('type_id', $value['type_id']);
                                                $pro_data= $this->db->get()->row();
                                                if (!empty($pro_data)) {
                                                    if ($pro_data->quantity>=$value['quantity']) {
                                                        $data_insert = array('user_id'=> $last_id,
                                              'product_id'=>$value['product_id'],
                                              'type_id'=>$value['type_id'],
                                              'quantity'=>$value['quantity'],
                                              'ip' =>$ip,
                                              'date'=>$cur_date
                                              );

                                                        $cart_id=$this->base_model->insert_table("tbl_cart", $data_insert, 1) ;
                                                    }
                                                }///end check innventory
                                            }
                                        }
                                    }
                                    $this->session->unset_userdata('cart_data');

        								redirect("/","refresh");
        								// $data['data']=true;



        	                  } // VALIDATION PART ENDS
        	                      else{
        // echo "syy";die();
        	                          $this->session->set_flashdata('emessage',validation_errors());
        	                          redirect($_SERVER['HTTP_REFERER']);

        	                          }

        	                    } // POST DATA ENDS
        	            else{
        	              $this->session->set_flashdata('emessage','No data found, Please insert some data');
        	              redirect($_SERVER['HTTP_REFERER']);
        	            }
        							// echo json_encode($data);
        	          } // LOGIN CHECK ENDS HERE

        	      else{
        	        redirect("home","refresh");
        	      }
        	    }


              public function logout(){

              		if(!empty($this->session->userdata('user_data'))){

                    $this->session->unset_userdata('user_data');
                    	$this->session->unset_userdata('user_id');
                    	$this->session->unset_userdata('user_name');
                      $this->session->unset_userdata('user_email');

              		// redirect("home","refresh");
              		redirect("/","refresh");

              		}
              		else{
              				redirect("/","refresh");
              		}

              	}



}
