<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/

class ortsava extends CI_Controller {
	public function index()
	{
		$this->load->view('front/header');
		$this->load->view('index');
		$this->load->view('front/footer');
	}

}