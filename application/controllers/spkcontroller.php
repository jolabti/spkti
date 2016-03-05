<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Spkcontroller extends CI_Controller {
	public function index()
	{
		$this->load->view('home');
	}

	public function kriteria()
	{
		$this->load->view('criteria');
	}

	public function hasil()
	{

		$this->load->view('hasil');
	}

	public function uploadview()
	{

		$this->load->view('upload');
	}

}


?>
