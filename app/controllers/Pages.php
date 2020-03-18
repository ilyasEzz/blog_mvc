<?php 

class Pages extends Controller {
	public function __construct() {
		 
	}

	public function index() {
		
		$data = [
			'title' => 'Welcome to the Home Page!',
		];

		$this->view('pages/index', $data);
	}

}