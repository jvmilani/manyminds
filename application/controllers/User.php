<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function store() {
		$ip = !empty($_SERVER['HTTP_CLIENT_IP']) ? $_SERVER['HTTP_CLIENT_IP'] : (!empty($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR']);

		$_POST['lastip'] = $ip;
		$this->load->model('user_model');
		$this->user_model->store($_POST);
		redirect(base_url());

	}

	public function edit($id) {
		$this->load->model('user_model');
		$data['user'] = $this->user_model->show($id);
        $data['link'] = 'signup_user';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('pages/signup_user', $data);
	}

	public function update($id)
	{
		$this->load->model('user_model');
		$this->user_model->update($id, $_POST);
		redirect('/');
	}

	public function delete($id)
	{
		$this->load->model('user_model');
		$this->user_model->destroy($id);
		redirect('/');	
	}
}
