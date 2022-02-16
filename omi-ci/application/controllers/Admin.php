<?php

class Admin extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->database();
		$this->load->model("Admin_mod");
	}

	public function dashboard()
	{
		$this->load->view('dashboard');
	}

	public function setup()
	{
		$this->load->view("feesetup");
	}

	public function feeinc()
	{
		$n=$this->input->post("pickup_point");
		$f=$this->input->post("busfee");

		$w=array('pickup_point'=>$n, 'busfee'=>$f);
		$this->Admin_mod->fee_ins($w);

		redirect(base_url().'feesetup');
	}
}
?>