<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Oath_login extends CI_Controller {
    public $user = "";
    public function __construct()
    {
        parent::__construct();
    // Load facebook library and pass associative array which contains appId and secret key
    $this->load->library('facebook', array('appId' => '1760947584183197', 'secret' => '814347d3998fc95c0c39af2a40438832'));

   // Get user's login information
    $this->user = $this->facebook->getUser();
    
    }
    public function index()
     {
        if ($this->user)
            {
             $data['user_profile'] = $this->facebook->api('/me/');

             // Get logout url of facebook
             $data['logout_url'] = $this->facebook->getLogoutUrl(array('next' => base_url() . 'index.php/Oath_login/logout'));

            // Send data to profile page
            $this->load->view('about_us', $data);
            }   else
                 {

                  // Store users facebook login url
                  $data['login_url'] = $this->facebook->getLoginUrl();
                  $this->load->view('login', $data);
                 } 
      }

     // Logout from facebook
    public function logout()
            {      
             session_destroy();               
             redirect(base_url());
            }
        
}
