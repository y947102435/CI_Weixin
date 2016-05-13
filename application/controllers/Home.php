<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->model('publish_model','publish');
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->helper('time');
		$data['publish'] = $this->publish->get_lists();
		var_dump($data);die;
		$data['str'] = $this->load->view('position/position_item',$data,true);
		$this->load->view('header');
		$this->load->view('home',$data);
	}
}
