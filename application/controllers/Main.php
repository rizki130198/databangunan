<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function input()
	{
		$this->load->view('include/head');
		$this->load->view('admin/input');
		$this->load->view('include/foot');
	}
}
