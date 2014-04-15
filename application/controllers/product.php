<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
	{
        // Call the Model constructor
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
	}
	public function index()
	{
		$this->load->view('home');

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */