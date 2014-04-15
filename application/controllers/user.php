<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
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

	public function signup_page(){
		$this->load->view('signup');
	}
	public function signup_action()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$name = $this->input->post('name');
		$email = $this->input->post('email');

		$this->load->model('user_model');
		$query = $this->user_model->insert_entry($username,  $password, $name, $email);
		if($query){
			redirect('/home/', 'refresh');
		}
		
	}

	public function signin(){
		//TODO: SIGN in
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$this->load->model('user_model');
		$query = $this->user_model->check_entry($username, $password);
		if($query){
			foreach ($query->result() as $row)
			{
				$username = $row->username;
				$name = $row->name;
				$email = $row->email;
			}
			$userdata = array(
				'username' => $username,
				'name' => $name,
				'email' => $email,
				'user_session' => $name
				);
			//or you can do it like this:
			//$this->session->set_userdata('some_name', 'some_value');
			//in usual PHP you can do it like: $_SESSION['some_name'] = $some_value

			$this->session->set_userdata($userdata);

		}else{
			redirect('/home/?login=failed', 'refresh');
		}

		redirect('/home/', 'refresh');
	}

	public function signout(){
		// in usual PHP you use session_destro() function
		$this->session->sess_destroy();
		redirect('/home/', 'refresh');
	}



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */