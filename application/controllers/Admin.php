<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
		$this->load->view('admin/V_login');
		
	}

	public function dashboard()
	{

		$this->load->view('admin/V_header');
		$this->load->view('admin/V_channels');
		$this->load->view('admin/V_footer');

	}

	public function add_channels()
	{
		$this->load->view('admin/V_header');
		$this->load->view('admin/V_add_channels');
		$this->load->view('admin/V_footer');
	}
	public function detail()
	{
		$this->load->view('admin/V_header');
		$this->load->view('admin/V_detail');
		$this->load->view('admin/V_footer');
	}
	public function detailtracking()
	{
		$this->load->view('admin/V_header');
		$this->load->view('admin/V_detail_tracking');
		$this->load->view('admin/V_footer');
	}
}