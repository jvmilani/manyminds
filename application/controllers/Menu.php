<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {


	public function index() {
		$this->load->model('user_model');
		$this->load->model('product_model');
		$this->load->model('orders_model');

		$data['users'] 		= $this->user_model->index();
		$data['products'] 	= $this->product_model->index();
		$data['orders'] 	= $this->orders_model->index();
		
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('user', $data);
		// $this->load->view('orders', $data);
		// $this->load->view('products', $data);
	}
}
