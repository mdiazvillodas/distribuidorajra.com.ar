<?php
class url{
	public $params = array();
	public $query = array();
	public $name = 'localhost';
	public $port = 80;
	public $method = 'GET';
	public $modulo = 'main';
	private $base = '';
	private $force = '';
	private $separator = '';

	function __construct($base = '/', $separator = '/',$force = '/') {
		$this->base = $base;
		$this->separator = $separator;
		$this->force = $force;

		$this->forceTrailing($force);
		$this->setParams();
		$this->setQuery();

		$this->name = $_SERVER['SERVER_NAME'];
		$this->port = $_SERVER['SERVER_PORT'];
		$this->method = $_SERVER['REQUEST_METHOD'];

	}

	private function setQuery(){
		if(strpos($_SERVER['QUERY_STRING'],'&')){
			$query = explode('&',$_SERVER['QUERY_STRING']);
			foreach($query as $q){
				$q = explode('=',$q);
				$k = $q[0];
				$v = $q[1];
				$this->query[$k] = $v;
			}
		}
	}

	private function setParams(){
		$uri = $_SERVER['REQUEST_URI'];
		$s = $this->separator;
		$f = $this->force;
		$p = array();

		$uri = str_replace($this->base,'', $uri);

		if(strpos($uri,$s) !== false){
	                $p = explode($s,$uri);
        	        array_shift($p);
		}
		
		if($s == $f){
			array_pop($p);
		}

		if(count($p) > 0){
			$this->modulo = $p[0];
			array_shift($p);
		}

		$i = 0;
		while($i < count($p)){
			$this->params[$p[$i]] = isset($p[$i + 1]) ? $p[$i + 1] : '';
			++$i;
			++$i;
		}
	}

	private function forceTrailing($needle){
		if(strrpos($_SERVER['REQUEST_URI'],$needle) != (strlen($_SERVER['REQUEST_URI']) - strlen($needle))){
			header('Location: '.$_SERVER['REQUEST_URI'].$needle);
		}
	}

	public function getModulo(){
		return $this->modulo;
	}

	public function getParams(){
		return $this->params;
	}

	public function getQuery(){
		return $this->query;
	}

	public function getParamValue($key){
		return $this->params[$key];
	}

	public function getQueryValue($key){
		return $this->query[$key];
	}	
}
?>
