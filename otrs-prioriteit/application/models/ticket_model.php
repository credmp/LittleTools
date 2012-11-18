<?php
class ticket_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_ticket($queue = FALSE)
	{
		$original_reserved = $this->db->_reserved_identifiers;
		$this->db->select('ticket.id, ticket.tn, ticket.title, dynamic_field.label, dynamic_field_value.value_text');
		$this->db->from('ticket');
		$this->db->join('queue', 'queue.id = ticket.queue_id');
		$this->db->_reserved_identifiers[] =  1;
		$this->db->join('dynamic_field', 'dynamic_field.id=1');
		$this->db->join('dynamic_field_value', 'dynamic_field_value.field_id = dynamic_field.id and dynamic_field_value.object_id = ticket.id');
#		$this->db->where('queue.name', 'Raw'); #$this->db->escape($queue));
		# This should be parameterized
		$this->db->_reserved_identifiers = $original_reserved;

		if (!empty($queue))
		{
			$this->db->where('queue.name', $queue); #$this->db->escape($queue));
		#	$query = $this->db->get('queue');
		#	return $query->result_array();
		}

		$query = $this->db->get();
		return $query->result_array();
	}

	public function update_priority($id, $priority) {
		$sql = "update dynamic_field_value
		         inner join dynamic_field on dynamic_field_value.field_id = dynamic_field.id 
		                                 and dynamic_field.id=1
		           set dynamic_field_value.value_text=".$this->db->escape($priority)."
		         where dynamic_field_value.object_id=".$this->db->escape($id);
		if ($this->db->query($sql)) {
			return $priority;
		}

		return -1;
	}
}

?>
