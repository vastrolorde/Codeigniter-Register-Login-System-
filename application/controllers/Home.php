<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

   public function __construct()
   {
		
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
                $this->load->helper('form');
		//$this->load->library('database');
		$this->load->model('user_model');
                $this->load->model('userlist');
		
		
	}
	
	public function index()
	{
		
		$this->load->view('header');
		$this->load->view('nav_bar');
		$this->load->view('slider');
		$this->load->view('home_view');
		$this->load->view('footer');
	}
	
          public function aboutus()
         
	{
          $user_name=$this->session->userdata('name');
	  if($user_name==NULL)
	  {
	      $msg['aboutlogin']='<h3 style="color:orange;" align="center">This Page is Protected<br>You need to Log in First.</h3>';
              $this->session->set_userdata($msg);
              //$this->load->view('login');               
             redirect('Oath_login');
	  }else
              {  
              //$data['user_login']=='<h3 style="color:orange;" align="center">Now Your are Logged in</h3>';
              //$this->session->set_userdata($msg);
              $this->load->view('about_us');              
              }
		
	}
       /* public function aboutus()
         
	{
            $this->load->view('about_us');
        }*/
	public function services()
	{
		$this->load->view('services');
	}
	public function portfolio()
	{
		$this->load->view('portfolio');
	}
	public function blogsingle()
	{
		$this->load->view('blog-item');
	}
	public function pricing()
	{
		$this->load->view('pricing');
	}
	public function errorpage()
	{
		$this->load->view('404');
	}
	public function shortcodes()
	{
		$this->load->view('shortcodes');
	}
	public function blog()
	{
		$this->load->view('blog');
	}
	public function contactus()
	{
		$this->load->view('contact-us');
	}
	public function accounts()
	{
		$this->load->view('account');
	}
	public function signup()
	{
		$this->load->view('signup');
	}
	public function create_mem()
	{
		// create the data object
		//$data = new stdClass();
		
		// load form helper and validation library
		$this->load->helper('form');
		$this->load->library('form_validation');
		// set validation rules
		$this->form_validation->set_rules('name', 'Name *', 'required');
		$this->form_validation->set_rules('uname', 'User Name *', 'trim|required|is_unique[register.uname]', array('is_unique' => 'This username already exists. Please choose another one.'));
		$this->form_validation->set_rules('email', 'Email *', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		$this->form_validation->set_rules('pass', 'Password *', 'trim|required');
		$this->form_validation->set_rules('cpass', 'Confirm Password *', 'trim|required|matches[pass]');
		
		if ($this->form_validation->run() == false)              
		{
			
			// validation not ok, send validation errors to the view
		     $this->load->view('signup');
		} 
		else
			{
			$this->load->model('user_model');
			
			if($query= $this->user_model->create_member())
			{
				$data['account_created']='your account has been created.<br>You may login now.';
				
				$this->load->view('login',$data);
			}
			else
			{
				$this->load->view('signup');
			}
		  
	
		}
				
	}
	/**
	 * login function.
	 * 
	 * @access public
	 * @return void
	 */
	public function login()
	{
		
		$this->load->view("login");

        }
	 public function loggedinchecklogin()
	{
		$user_name=$this->session->userdata('name');
		if($user_name==NULL)
		{
		redirect("Oath_login");
	    }
	  else
	    {
		redirect("home/loggeduser");
	    }
    }
	public function loggedinchecksignup()
	{
		$user_name=$this->session->userdata('name');
		if($user_name==NULL)
		{
		redirect("home/signup");
	    }
	  else
	    {
		redirect("home/loggeduser");
	    }
    }
	 
	 public function loginvalidate()
	 {
		$username=$this->input->post('username',true);
		$password=$this->input->post('pass',true);
		$this->load->model('user_model');
		$result=$this->user_model->login_validate($username,$password);
		//echo '<pre>';
		//print_r($result);
		//exit();
		if($result)
		{
		   $sdata['id']=$result->id;
		   $sdata['name']=$result->name;
		   $sdata['password']=$result->password;
		   $this->session->set_userdata($sdata);
		   redirect('home/loginsuccess');
		   //$this->load->view('login_success');
		} 
		else {
			$data['data_error']='You typed an incorrect Username or Password<br>Please Try Again';
			$this->session->set_userdata($data);
			redirect('Oath_login');
		}
	 }
	 
	 public function logout() 
	 
	 {
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('name');
		$this->session->unset_userdata('password');
		$sdata['message']='You Are Successfully Logged Out!';
		$this->session->set_userdata($sdata);
		redirect('Oath_login');
	 }	
	public function loginsuccess()
	{
		$this->load->view('login_success');
	}
	public function loggeduser()
	{
		$this->load->view('loggeduser');
	}
	public function viewprofile()
	{                
		$id=$this->session->userdata('id');
		$this->load->model('user_model');
		$userdetail['userdetail']=$this->user_model->view_profile_by_session_id($id);
		$this->load->view('view_profile',$userdetail);	         				
	}
	
	public function viewprofilepage()
	{
	$this->load->view('view_profile');
	}
	public function updateprofilepage($ID)
	{
           $this->load->model('user_model');
           $userdetail['detail']=$this->user_model->get_user_by_id($ID);
           $this->load->view('update_profile',$userdetail);	   
	}	
	public function updateuser()
	{
       $this->load->helper(array('form','file','file','url')); 
       $this->load->library('form_validation');
       $this->form_validation->set_rules('name', 'Name:', '');
       $this->form_validation->set_rules('uname', 'User Name:','');
       $this->form_validation->set_rules('email', 'Email:', '');
       $this->form_validation->set_rules('phone', 'Phone:', 'trim|required');
       $this->form_validation->set_rules('pass', 'Password:', '');
       $config_image=array();
       $config_image['upload_path']='./profile_images';
       $config_image['allowed_types']='jpg|png|jpeg|gif';
       $config_image['max_size']='1904024';
       //$config_image['max_height']='1024';
       //$config_image['max_width']='1024';
       $this->load->library('upload',$config_image);
       
       if($this->form_validation->run()==false and empty($_FILES['userfile']['name'][0]))       
           {                      
             $msg['messege']='<h3 style="color:green;" align="center">Nothing Was Updated.</h3>';
             $this->session->set_userdata($msg);
	     redirect('home/viewprofile',$msg);                 
        }elseif($this->form_validation->run()==true and empty($_FILES['userfile']['name'][0]))
        {
        $name=$this->input->post('name');
	$username=$this->input->post('uname');
	$email=$this->input->post('email');
	$phone=$this->input->post('phone');
	$password=$this->input->post('pass');	
        $eid=$this->input->post('eid');	
	$data= array('name'=>$name,'uname'=>$username,'email'=>$email,'phone'=>$phone,'password'=>$password,);
	$this->load->model('user_model');
	if($this->user_model->updateuser($data,$eid));	
	{       
            $msg['messege']='<h3 style="color:green;" align="center">Your Profile Has Been Updated Succesfully.</h3>';
             $this->session->set_userdata($msg);
	     redirect('home/viewprofile',$msg);
		}          
        }elseif($this->form_validation->run()==true and !empty($_FILES['userfile']['name'][0]))
        {
            $this->upload->do_upload();
            $data=array(
                      'upload_data' => $this->upload->data()
                    );
            $this->image_resize($data['upload_data']['full_path'],$data['upload_data']['file_name']);
            $name=$this->input->post('name');
	    $username=$this->input->post('uname');
	    $email=$this->input->post('email');
	    $phone=$this->input->post('phone');
	    $password=$this->input->post('pass');	
            $eid=$this->input->post('eid');	            
            $query=$this->db->query("select * from register where id = '{$eid}'");
            foreach ($query->result() as $row)
            {
                unlink('./profile_images/'.$row->image);
                unlink('./profile_images/thumb/'.$row->image);
            }
            $data= array(
                'name'=>$name,
                'uname'=>$username,
                'email'=>$email,
                'phone'=>$phone,
                'password'=>$password,
                'image' => $data['upload_data']['file_name']
                );            
            $this->load->model('user_model');
	    if($this->user_model->updateuser($data,$eid));                        
	       {      
             $msg['messege']='<h3 style="color:green;" align="center">Your Profile Has Been Updated Succesfully.</h3>';
             $this->session->set_userdata($msg);
             redirect('home/viewprofile',$msg);
		}
        }
        
        /*$name=$this->input->post('name');
	$username=$this->input->post('uname');
	$email=$this->input->post('email');
	$phone=$this->input->post('phone');
	$password=$this->input->post('pass');	
        $eid=$this->input->post('eid');	
	$data= array('name'=>$name,'uname'=>$username,'email'=>$email,'phone'=>$phone,'password'=>$password,);
	$this->load->model('user_model');
	$result=$this->user_model->updateuser($data,$eid);
	if($result)
	{       $msg['messege']='<h3 style="color:green;" align="center">Your Profile Has Been Updated Succesfully.</h3>';
             $this->session->set_userdata($msg);
			redirect('home/viewprofile');
		}
	else
	  {
		$smsg['msg']='<h3 style="color:orange;" align="center">Your Have Not Typed Anything.</h3>';
             $this->session->set_userdata($smsg);
		     redirect('home/viewprofile');
	  }*/
	
	}
        
        public function image_resize($path,$file)
          {
           $config_resize = array();
           $config_resize['image_library'] = 'gd2';
           $config_resize['source_image'] = $path;
           //$config_resize['create_thumb'] = TRUE;
           $config_resize['maintain_ratio'] = TRUE; 
           $config_resize['width']  = 80;
           $config_resize['height']  = 80;          
           $config_resize['new_image']='./profile_images/thumb/'.$file;
           $this->load->library('image_lib',$config_resize);
           $this->image_lib->resize();
          }
          
        public function userlistpage()
        {
            $this->load->library('pagination');
            
            $config = array();
            $config["base_url"] = base_url() . "index.php/home/userlistpage";
            $config["per_page"] = 5;
            $config["total_rows"] =  $this->userlist->num_rows(); 
            $config["full_tag_open"]   = "<ul class='pagination'>";
            $config["full_tag_close"]  = "</ul>";
            $config["first_tag_open"]  = '<li>';
            $config["first_tag_close"] = '</li>';
            $config["last_tag_open"]   = '<li>';
            $config["last_tag_close"]  = '</li>';
            $config["next_tag_open"]   = '<li>';
            $config["next_tag_close"]  = '</li>';
            $config["prev_tag_open"]   = '<li>';
            $config["prev_tag_close"]  = '</li>';
            $config["num_tag_open"]    = '<li>';
            $config["num_tag_close"]   = '</li>';
            $config["cur_tag_open"]    = "<li class='active'><a>";
            $config["cur_tag_close"]   = '</a></li>';
            $config['next_link'] = 'Next';
             $config['prev_link'] = 'Previous';
            
            
            $this->pagination->initialize($config);
            $this->load->model('userlist');
            $userlist['list']=$this->userlist->userlist($config["per_page"], $this->uri->segment(3));
            $userlist['links']=$this->pagination->create_links();
            $userlist['popup']='';            
            $this->load->view('user_listing',$userlist);
        }
        public function search_user()
        {
            $name=$this->input->post('search');            
            if(isset($name) and $name!=NULL)
            {
                $userlist['list']=$this->userlist->search_user($name);
                if($this->userlist->search_user($name)!=NULL)
                  {
                    $userlist['links']='';                                
                    $userlist['popup']='<h3 style="color:green;">Keep The Search Bar Empty and Click on Search Button to Refresh Data</h3>';
                    $this->load->view('user_listing',$userlist); 
                  }else
                    {
                    $userlist['links']='';
                    $userlist['no_record']='<h3 align="center" style="color:red;">No Record Found</h3>';
                    $this->session->set_userdata($userlist);
                    $userlist['popup']='<h3 style="color:green;">Keep The Search Bar Empty and Click on Search Button to Refresh Data</h3>';
                    $this->load->view('user_listing',$userlist); 
                    }
            }else
               {
                $userlist['nothong_typed']='<h3 align="center" style="color:red;">Nothing Was Typed in The Search Box</h3>';
                $this->session->set_userdata($userlist);
                redirect('home/userlistpage',$userlist);
               }
            
         }
        
        public function edituserprofile($id)
        {            
            //echo $userlist_id;
            
            $this->load->model('userlist');
            $userlist=$this->userlist->fetchuser($id);
            
            $this->load->view('edit_profile',['sdata'=>$userlist]);
        }
	public function updateuserprofile()
        {
        $name=$this->input->post('name');
	$username=$this->input->post('uname');
	$email=$this->input->post('email');
	$phone=$this->input->post('phone');		
        $uid=$this->input->post('eid');	
	$data= array('name'=>$name,'uname'=>$username,'email'=>$email,'phone'=>$phone,);
	$this->load->model('userlist');
	$result=$this->userlist->update_user($data,$uid);
        if($result)
	{       $mssg['mesg']='<h3 style="color:green;" align="center">User Profile Has Been Updated Succesfully.</h3>';
                $this->session->set_userdata($mssg);
	         redirect('home/userlistpage');
		}
	
        }
        public function deleteuserprofile()
        {
            
        //print_r($this->input->post());
         $userlist_id=$this->input->post('$userlist_id'); 
         $this->load->model('userlist');
         $this->userlist->delete_user($userlist_id);
         if($this->userlist->delete_user($userlist_id)) 
            {
            $cdata[success]='<h2 style="color:green;" align="center">Profile Deleted Successfully.</h2>';
            $this->session->set_userdata($cdata);
            
            } else {
            $fdata[failed]='<h2 style="color:green;" align="center">Profile Cannot Be Deleted.</h2>';
            $this->session->set_userdata($fdata);
            }
            return redirect('home/userlistpage');
        }
        public function newuseradd()
        {
            // create the data object
		//$data = new stdClass();
		
		// load form helper and validation library
		$this->load->helper('form');
		$this->load->library('form_validation');
		// set validation rules
		$this->form_validation->set_rules('name', 'Name *', 'required');
		$this->form_validation->set_rules('uname', 'User Name *', 'trim|required|is_unique[register.uname]', array('is_unique' => 'This username already exists. Please choose another one.'));
		$this->form_validation->set_rules('email', 'Email *', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		$this->form_validation->set_rules('pass', 'Password *', 'trim|required');
		$this->form_validation->set_rules('cpass', 'Confirm Password *', 'trim|required|matches[pass]');
		
		if ($this->form_validation->run() == false)              
		{
			
			// validation not ok, send validation errors to the view
		     $this->load->view('add_new_user');
		} 
		else
			{
			$this->load->model('userlist');
			$query= $this->userlist->user_add();
			if($query)
			{
				$data['added']='<h3 style="color:green;" align="center">User Added Successfully.</h3>';
                                $this->session->set_userdata($data);
				redirect('home/userlistpage');
			}
			else
			{
				$this->load->view('add_new_user');
			}
		  
	
		    }
					           
             }                               
            public function fetch_user_profile()
            {
                $this->load->library('pagination');
            
            $config = array();
            $config["base_url"] = base_url() . "index.php/home/fetch_user_profile";
            $config["per_page"] = 1;
            $config["total_rows"] =  $this->userlist->num_rows(); 
            $config["full_tag_open"]   = "<ul class='pagination'>";
            $config["full_tag_close"]  = "</ul>";
            $config["first_tag_open"]  = '<li>';
            $config["first_tag_close"] = '</li>';
            $config["last_tag_open"]   = '<li>';
            $config["last_tag_close"]  = '</li>';
            $config["next_tag_open"]   = '<li>';
            $config["next_tag_close"]  = '</li>';
            $config["prev_tag_open"]   = '<li>';
            $config["prev_tag_close"]  = '</li>';
            $config["num_tag_open"]    = '<li>';
            $config["num_tag_close"]   = '</li>';
            $config["cur_tag_open"]    = "<li class='active'><a>";
            $config["cur_tag_close"]   = '</a></li>';
            $config['next_link'] = 'Next';
             $config['prev_link'] = 'Previous';
            
            
            $this->pagination->initialize($config);            
            $this->load->model('userlist');
            $userlist['list']=$this->userlist->userlist_single($config["per_page"], $this->uri->segment(3));
            $this->load->view('user_single_view',$userlist);           
            }
            public function change_pass()
            {                
                $this->load->view('change_pass');
            }
            public function change_password()
             {
                $oldpass=$this->input->post('old_pass');
                $newpass=$this->input->post('new_pass');
                $confirmpass=$this->input->post('confirm_pass');
                // load form helper and validation library
		$this->load->helper('form');
		$this->load->library('form_validation');
		// set validation rules
		$this->form_validation->set_rules('old_pass', 'Old Password *', 'trim|required');
		$this->form_validation->set_rules('new_pass', 'New Password *', 'trim|required');
		$this->form_validation->set_rules('confirm_pass', 'Conform Password *', 'trim|required|matches[new_pass]');
                if ($this->form_validation->run() == false)              
		{				            
		     $this->load->view('change_pass');
		} 
		else
                {   
                    $id=$this->input->post('uid');
                    $this->load->model('user_model'); 
                    $result=$this->user_model->user_info($id);
                    if($oldpass==$result->password)
                    {
                    $data= array(
                        'password'=>$newpass
                        );	            
	               $this->user_model->user_change_password($data,$oldpass,$id);             
                          {
                            $data['update_pass']='<h3 style="color:green;" align="center">Password Updated Successfully.</h3>';
                            $this->session->set_userdata($data);
                            redirect('home/loginsuccess');
                          }  
                    }
                          else 
                              {
                              $data['update_pass_fail']='<h3 style="color:green;" align="center"><b>Old Password Does Not Match Your Current Password.</b></h3>';
                              $this->session->set_userdata($data);                                                       
                              redirect('home/loginsuccess');
                              }
                 }
		
               }
                
               
               
}

