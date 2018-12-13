<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function login()
	{
		$this->load->view('include/head');
		$this->load->view('bebas/login');
		$this->load->view('include/foot');
	}
	public function proses_log()
	{
		try {		
			$this->M_front->proses_log();
		} catch (Exception $e) {
			throw new Exception("Error Processing Request", 1);
		}
	}
	public function error404()
	{
		$this->load->view('include/head');
		$this->load->view('404');
		$this->load->view('include/foot');
	}
}
