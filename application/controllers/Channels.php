<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Channels extends CI_Controller {

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
		$this->load->view('V_header');
		$this->load->view('V_detail');
		$this->load->view('V_footer');
	}
	public function detailtracking()
	{
		$this->load->view('V_header');
		$this->load->view('V_detail_tracking');
		$this->load->view('V_footer');
	}
	public function getData()
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://api.thingspeak.com/channels/844658/feeds.json?api_key=MP8CJ627LSUOL5TV&results=6",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_HTTPHEADER => array(
		    "cache-control: no-cache",
		    "entry_id: 15358",
		    "postman-token: 3487192e-ee69-ca20-c5d7-10922286cf2a"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		 	$data = var_dump(json_decode($response));
			echo $data;
		}
	}
}
