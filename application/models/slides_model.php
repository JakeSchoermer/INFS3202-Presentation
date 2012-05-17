<?php

class Slides_model extends CI_Model {


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

		function get_entries() {
			$query = $this->db->query('SELECT * FROM slides ORDER BY slide_number;');
			return $query->result_array();
		}
    


}

?>