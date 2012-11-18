<?php
class Ticket extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ticket_model');
	}

	public function index()
	{
		$data['tickets'] = $this->ticket_model->get_ticket();
		$data['title'] = 'Ticket list';

		$this->load->view('templates/header', $data);
		$this->load->view('ticket/index', $data);
		$this->load->view('templates/footer');
	}

	public function view($queue)
	{
		$data['tickets'] = $this->ticket_model->get_ticket($queue);
		$data['title'] = 'Ticket list for Queue ' . $queue;

		$this->load->view('templates/header', $data);
		$this->load->view('ticket/index', $data);
		$this->load->view('templates/footer');
	}


	public function update_priority() {
		$id = $this->input->post('id');
		$priority = $this->input->post('prioriteit');

		# only to be used from jeditable in jquery
		echo $this->ticket_model->update_priority($id, $priority);
	}

}
?>
