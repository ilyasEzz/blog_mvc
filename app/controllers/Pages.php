<?php 

class Pages extends Controller {
	
	public function index() {
		return $this->view('pages/index');
	}

	public function about() {
		return $this->view('pages/about');
	}

}