<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
   {
		
		parent::__construct();
		$this->load->library(array('session'));
		//$this->load->helper(array('url'));
		$this->load->model('admin_model');
		
	  $admin_user_name=$this->session->userdata('user_name');
	  if($admin_user_name==NULL)
	  {
		  redirect('super_admin','refresh');
	  }
		
	}	
	public function index()
	{
		$this->load->view('admin/index');
	}
	public function userlistpage()
        {
            $this->load->library('pagination');
            
            $config = array();
            $config["base_url"] = base_url() . "index.php/admin/userlistpage";
            $config["per_page"] = 5;
            $config["total_rows"] =  $this->admin_model->num_rows(); 
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
            $this->load->model('admin_model');
            $userlist['list']=$this->admin_model->userlist($config["per_page"], $this->uri->segment(3));
            $this->load->view('admin/user_records',$userlist);
        }
        public function fetch_user_profile($id)
            {                            
            $this->load->model('admin_model');
            $userlist['list']=$this->admin_model->userlist_single($id);
            $this->load->view('admin/user_single_view',$userlist);           
            }
            
              

	public function logout()
	{
		$this->session->unset_userdata('user_name');
		$this->session->unset_userdata('password');
		$sdata['logoutmessage']='<h3 style="color:white;" align="center">You Are Successfully Logged Out!</h3>';
		$this->session->set_userdata($sdata);
		redirect('super_admin/index');
	}
	public function error()
	{
		$this->load->view('admin/404');
	}
	public function wrong()
	{
		$this->load->view('admin/500');
	}
	public function advancedcomponents()
	{
		$this->load->view('admin/advanced-components');
	}
	public function blankpage()
	{
		$this->load->view('admin/blank-page');
	}
	public function boxedlayout()
	{
		$this->load->view('admin/boxed-layout');
	}
	public function buttons()
	{
		$this->load->view('admin/buttons');
	}
	public function calendar()
	{
		$this->load->view('admin/calendar');
	}
	public function chartjs()
	{
		$this->load->view('admin/chartjs');
	}
	public function collapsedmenu()
	{
		$this->load->view('admin/collapsed-menu');
	}
	public function differentthemelayouts()
	{
		$this->load->view('admin/different-theme-layouts');
	}
	public function flotchart()
	{
		$this->load->view('admin/flot-chart');
	}
	public function fontawesome()
	{
		$this->load->view('admin/fontawesome');
	}
	public function formeditor()
	{
		$this->load->view('admin/form-editor');
	}
	public function formlayout()
	{
		$this->load->view('admin/form-layout');
	}
	public function formvalidation()
	{
		$this->load->view('admin/form-validation');
	}
	public function formwizard()
	{
		$this->load->view('admin/form-wizard');
	}
	public function gallery()
	{
		$this->load->view('admin/gallery');
	}
	public function general()
	{
		$this->load->view('admin/general');
	}
	public function googlemap()
	{
		$this->load->view('admin/google-map');
	}
	public function grid()
	{
		$this->load->view('admin/grid');
	}
	public function inbox()
	{
		$this->load->view('admin/inbox');
	}
	public function inboxcompose()
	{
		$this->load->view('admin/inbox-compose');
	}
	public function inboxdetails()
	{
		$this->load->view('admin/inbox-details');
	}
	public function invoice()
	{
		$this->load->view('admin/invoice');
	}
	public function ionslider()
	{
		$this->load->view('admin/ion-slider');
	}
	public function layout1()
	{
		$this->load->view('admin/layout-1');
	}
	public function layout2()
	{
		$this->load->view('admin/layout-2');
	}
	public function layout3()
	{
		$this->load->view('admin/layout-3');
	}
	public function layout4()
	{
		$this->load->view('admin/layout-4');
	}
	public function lineicon()
	{
		$this->load->view('admin/line-icon');
	}
	public function lock()
	{
		$this->load->view('admin/lock');
	}
	public function login()
	{
		$this->load->view('admin/login');
	}
	public function morrischart()
	{
		$this->load->view('admin/morris-chart');
	}
	public function nestable()
	{
		$this->load->view('admin/nestable');
	}
	public function nonstickyheadersidebar()
	{
		$this->load->view('admin/non-sticky-header-sidebar');
	}
	public function profile()
	{
		$this->load->view('admin/profile');
	}
	public function registration()
	{
		$this->load->view('admin/registration');
	}
	public function stickysidebar()
	{
		$this->load->view('admin/sticky-sidebar');
	}
	public function tabledynamic()
	{
		$this->load->view('admin/table-dynamic');
	}
	public function tablestatic()
	{
		$this->load->view('admin/table-static');
	}
	public function timeline()
	{
		$this->load->view('admin/timeline');
	}
	public function toastr()
	{
		$this->load->view('admin/toastr');
	}
	public function tree()
	{
		$this->load->view('admin/tree');
	}
	public function vectormap()
	{
		$this->load->view('admin/vector-map');
	}
	public function widgets()
	{
		$this->load->view('admin/widgets');
	}
}

