<?php
/*
 * App Route Class
 * Create URL & loads controller 
 * URL FORMAT - /controller/method/params
 */
	
class Route {
	protected const PATH = '../app/controllers';
	protected $currentController = 'Pages';
	protected $currentMethod = 'index';
	protected $params = [];
		 
	public function __construct(){
		// get Controller
		$url = $this->getUrl();
		$controller = self::PATH .'/'. ucwords($url[0]) . '.php';

		if(file_exists($controller)){
			$this->currentController =  ucwords($url[0]);
			unset($url[0]);
		}
		// Require the Controller and Instantiate it
		require_once self::PATH .'/'. $this->currentController . '.php'; 

		$this->currentController = new $this->currentController ;

		// get Method
		if(isset($url[1])) {
			if(method_exists($this->currentController, $url[1])) {
				$this->currentMethod = $url[1];
			}
			unset($url[1]);
		}

		// get params
		$this->params = $url ? array_values($url) : [];
		call_user_func_array([$this->currentController, $this->currentMethod], $this->params);

	}	

	/* Returns:
	 * [
	 *  ['Controller'],
	 *  ['method'],
	 *  [...params]
	 * ]
	 */
	public function getUrl(){
		if(isset($_GET['url'])) {
			$url = rtrim($_GET['url'], '/');
			$url = filter_var($url, FILTER_SANITIZE_URL);				
			$url = explode('/', $url);
			return $url;
		}
	}

}