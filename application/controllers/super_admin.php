<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//session_start();
class Super_Admin extends CI_Controller {
	 public function __construct()
   {
		
		parent::__construct();
		$this->load->library(array('session'));
		//$this->load->helper(array('url'));
		$this->load->model('user_model');
      
	  $admin_user_name=$this->session->userdata('user_name');
	  if($admin_user_name!=NULL)
	  {
		  redirect('admin','refresh');
	  }
	}

	public function index()
	{
		$this->load->view('admin/login');
	}
	public function admin_login_check()
	{
		$admin_uname=$this->input->post('user_name',true);
		$admin_password=$this->input->post('password',true);
		$this->load->model('admin_model');
		$result=$this->admin_model->check_login_admin_info($admin_uname,$admin_password);
		
		if($result)
		{
		$sdata['user_name']=$result->user_name;
		$sdata['password']=$result->password;
		$this->session->set_userdata($sdata);
		  redirect('admin/index');
		  //$this->load->view('admin/index');	
		}
		else
		{
			$data['message']='<h3 style="color:white;" align="center">User Id or Password Invalid!</h3><h5 style="color:white;" align="center">Please Enter Correct information</h5>';
			$this->session->set_userdata($data);
			redirect('super_admin/index');
		}
		
		//$this->load->view('admin/login');
	}
}