<?php

class Pages extends CI_Controller {

    public function view( $page = 'user') {
        if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
            show_404();
        }

        if (str_contains($page, 'signup')) {
            $pageForModel = str_ireplace('signup_', '', $page);
        } else {
            $pageForModel = $page;
        }

        $this->load->model($pageForModel . '_model');
        $model_format = $pageForModel . '_model';
        $data[$page] = $this->$model_format->index();
        $data['link'] = 'signup_' . $pageForModel;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('pages/' . $page, $data);
    }

}
