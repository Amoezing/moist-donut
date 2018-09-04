<?php
class demo extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('Demo_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['demo'] = $this->Demo_model->get_data();
        }

        public function view($slug = NULL)
        {
                $data['data_item'] = $this->Demo_model->get_data($slug);
        }
}