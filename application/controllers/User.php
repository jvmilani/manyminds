<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


	public function store()
	{
		$this->load->model('user_model');
		$data['user'] = $this->user_model->store('user_model');

		$this->load->view('user', $data);
	}
}
