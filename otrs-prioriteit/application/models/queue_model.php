<?php
class queue_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_queue($name = FALSE)
	{
		if ($name === FALSE)
		{
			$query = $this->db->get('queue');
			return $query->result_array();
		}

		$query = $this->db->get_where('queueu', array('name' => $slug));
		return $query->row_array();
	}
}

?>
