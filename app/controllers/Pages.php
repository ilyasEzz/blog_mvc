<?php 

class Pages extends Controller {
	public function __construct() {
		 
	}

	public function index() {
		$data = [
			'title' => 'Blog MVC',
			'description' => 'A minimalistic blog built on top of NoikiS MVC in PHP.'
		];

		$this->view('pages/index', $data);
	}

	public function about() {
		$this->view('pages/about');
	}

}