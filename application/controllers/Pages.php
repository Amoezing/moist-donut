<?php
class Pages extends CI_Controller {

        public function view($page = 'home')
        {
            if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
        //$dsn = 'dbdriver://username:password@hostname/database';
        $this->load->database('');
        
        }
        
        public function ajaxTest(){
                $data=$this->db->query('SELECT * FROM TAX')->result();
                $data2=json_encode($data);
                echo $data2;
        }

}