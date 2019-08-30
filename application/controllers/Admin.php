<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	var $API = "";

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		 //$this->API="http://10.10.122.94:8181/Hirest/hirest-rest"; //local
		$this->API="https://api.thingspeak.com/"; //
		$this->load->library(array('session','form_validation',));
		$this->load->helper(array('url','form','security'));
		$this->load->model('M_user');
		$logged_in = $this->session->userdata('statses')=='admin';
		if(!$logged_in){
			redirect(base_url('administrator'));
		}
	}


	public function index()
	{

		redirect(base_url('admin/dashboard'));
		
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
		$data['channels'] = json_decode($this->curl->simple_get($this->API . 'channels/844658/feeds.json?api_key=MP8CJ627LSUOL5TV&results=6'));
		// print_r($data);
		$this->load->view('admin/V_header');
		$this->load->view('admin/V_detail',$data);
		$this->load->view('admin/V_footer');

	}
	public function detailtracking()
	{
		$data['channels'] = json_decode($this->curl->simple_get($this->API . 'channels/844658/feeds.json?api_key=MP8CJ627LSUOL5TV&results=6'));
		$this->load->view('admin/V_header');
		$this->load->view('admin/V_detail_tracking',$data);
		$this->load->view('admin/V_footer');
	}
	
}
