<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verifikasi extends CI_Controller {
	function __construct(){
			parent::__construct();

			$this->load->view('master/v_menu');
		}

	 function index(){
		$this->load->view('v_periksa');
		$this->load->view('master/v_footer');
	}
}
