<?php
class Queue extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('queue_model');
	}

	public function index()
	{
		$data['queue'] = $this->queue_model->get_queue();
		$data['title'] = 'Queue archive';

		$this->load->view('templates/header', $data);
		$this->load->view('queue/index', $data);
		$this->load->view('templates/footer');
	}

	public function view($slug)
	{
		$data['queue'] = $this->queue_model->get_queue($slug);
	}


}
?>
