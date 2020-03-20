<?php 

class Pages extends Controller {

	public function __construct() {
    $this->userModel = $this->model('User');
		$this->commentModel = $this->model('Comment');	
	}
	

	public function index() {
		return $this->view('pages/index');
	}

	public function about() {
		return $this->view('pages/about');
	}


	public function  dashboard() {
		if(!isAdmin()) return redirect("pages/index");

		$users =$this->userModel->getAll();
		$comments =$this->commentModel->getAll();

		$data = [
				'users' => $users,
				'comments' => $comments
		];

		return $this->view('pages/dashboard', $data);
}

}