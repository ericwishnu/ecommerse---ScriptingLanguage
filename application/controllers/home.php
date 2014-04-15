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

		$this->load->model('product_model');
		$products = $this->product_model->show_entry(10);//return 10 products


		//
		$data['products']=$products;
		$this->load->view('products',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */