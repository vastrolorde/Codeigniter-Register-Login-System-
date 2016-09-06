<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

   public function __construct()
   {
		
		parent::__construct();
		//$this->load->library(array('session'));
		$this->load->helper(array('url'));
        $this->load->helper('form');
		//$this->load->library('database');
		$this->load->model('ajax_model');             		
		
	}
	
	public function index()
	{						
		$this->load->view('ajax_reg');	
	}
	public function checkdata()
	{
		
	if(isset($_POST['user_name']))
      {
		$name=$this->input->post('user_name',true);
		$query=$this->db->query("select name from ajax_user where name = '{$name}'");
		if($query->num_rows() > 0)
			{
            echo 'User Name Already Exist';  
            }
        else
           {
           echo "OK";
           }
	 exit();
	  }	

     if(isset($_POST['user_email']))
        {
         $emailId=$this->input->post('user_email');

         $query=$this->db->query("select email from ajax_user where email = '{$emailId}'");
		   if($query->num_rows() > 0)
			{
            echo "Email Already Exist";
            }
            else
             {
              echo "OK";
             }
            exit();
          }	  
	 }
	public function insertdata()
	  {	  
                $data = array(
	        'name'=>$this->input->post('name'),
                'uname'=>$this->input->post('uname'),
                'email'=>$this->input->post('email'),
				'phone'=>$this->input->post('phone'),
                'password'=>$this->input->post('pass')
            ); //insert code
            $this->db->insert('ajax_user',$data);
			echo "<h2 align='center' style='color:green; font-weight:bold; font-style: italic;'>Data Successfully Inserted</h2>";
			//unset($_POST['user_name']);
            //redirect('ajax');			
		  
	  }
}