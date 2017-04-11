<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()   {
        parent::__construct();
    
  }
  /*
   *---------------------------------------------------------------
   *Default Controller is set to load with codeigniter
   *---------------------------------------------------------------
   */
    public function index($data = null)   {
        $data['title']= "Home";
        $data['page']= "home";
        $this->load->view('templates/index', $data);
        
    }
    

}