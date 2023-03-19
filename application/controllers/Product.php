<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function store() {
		$ip = !empty($_SERVER['HTTP_CLIENT_IP']) ? $_SERVER['HTTP_CLIENT_IP'] : (!empty($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR']);

		$_POST['lastip'] = $ip;
		$this->load->model('product_model');
		$this->product_model->store($_POST);
		redirect(base_url());

	}

	public function edit($id) {
		$this->load->model('product_model');
		$data['product'] = $this->product_model->show($id);
        $data['link'] = 'signup_product';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('pages/signup_product', $data);
	}

	public function update($id)
	{
		$this->load->model('product_model');
		$this->product_model->update($id, $_POST);
		redirect('/product');
	}

	public function delete($id)
	{
		$this->load->model('product_model');
		$this->product_model->destroy($id);
		redirect('/product');	
	}
}
