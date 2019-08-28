<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Channels extends CI_Controller {


	var $API = "";

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		 //$this->API="http://10.10.122.94:8181/Hirest/hirest-rest"; //local
		$this->API="https://api.thingspeak.com/"; //
		$this->load->library(array('session','form_validation',));
		$this->load->helper(array('url','form','security'));
		// $logged_in = $this->session->userdata('status')=='login' && ($this->session->userdata('profil')=='4');
		// if(!$logged_in){
		// 	redirect('Login');
		// }
	}

	public function index()
	{
		$this->load->view('V_header');
		$this->load->view('V_channels');
		$this->load->view('V_footer');
	}

	public function add_channels()
	{
		$this->load->view('V_header');
		$this->load->view('V_add_channels');
		$this->load->view('V_footer');
	}
	public function detail()
	{
		$data['channels'] = json_decode($this->curl->simple_get($this->API . 'channels/844658/feeds.json?api_key=MP8CJ627LSUOL5TV&results=6'));
		// print_r($data);
		$this->load->view('V_header');
		$this->load->view('V_detail',$data);
		$this->load->view('V_footer');

	}
	public function detailtracking()
	{
		$this->load->view('V_header');
		$this->load->view('V_detail_tracking');
		$this->load->view('V_footer');
	}
	// public function getData()
	// {
	// 	$curl = curl_init();

	// 	curl_setopt_array($curl, array(
	// 		CURLOPT_URL => "https://api.thingspeak.com/channels/844658/feeds.json?api_key=MP8CJ627LSUOL5TV&results=6",
	// 		CURLOPT_RETURNTRANSFER => true,
	// 		CURLOPT_ENCODING => "",
	// 		CURLOPT_MAXREDIRS => 10,
	// 		CURLOPT_TIMEOUT => 30,
	// 		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	// 		CURLOPT_CUSTOMREQUEST => "GET",
	// 		CURLOPT_HTTPHEADER => array(
	// 			"cache-control: no-cache",
	// 			"entry_id: 15358",
	// 			"postman-token: 3487192e-ee69-ca20-c5d7-10922286cf2a"
	// 		),
	// 	));

	// 	$response = curl_exec($curl);
	// 	$err = curl_error($curl);

	// 	curl_close($curl);

	// 	if ($err) {
	// 		echo "cURL Error #:" . $err;
	// 	} else {
	// 		$data = var_dump(json_decode($response));
	// 		echo $data;
	// 	}
	// }


}
