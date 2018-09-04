<?php
class Demo_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        public function get_data($slug = FALSE)
{
        if ($slug === FALSE)
        {
                $query = $this->db->get('demo');
                return $query->result_array();
        }

        $query = $this->db->get_where('demo', array('slug' => $slug));
        return $query->row_array();
}
}