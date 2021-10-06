<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*     
 *     @author : Creativeitem
 *     30th July, 2014
 *     Creative Item
 *     www.creativeitem.com
 *     http://codecanyon.net/user/creativeitem
 */

class Redirect extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('crud_model');
        $this->load->model('email_model');
        $this->load->database();
        $this->load->library('session');
        /* cache control */
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 2010 05:00:00 GMT");
    }
    
    //Default function, redirects to logged in user area
    public function index()
    {
    	echo "Welcome!";
    }
    
    //Ajax login function 
    function do_login()
    {
        
        //Recieving post input of email, password from ajax request
    }
    
    
    
    function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('logout_notification', 'logged_out');
        redirect(site_url('login'), 'refresh');
    }
}
