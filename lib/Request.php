<?php

/**
* Classe que auxilia 
*/

class Request {

	public function data() {
		$retorno['post'] = $this->post();
		$retorno['get'] = $this->get();

		return $retorno;
	}

	static function post() {
		$retorno=array();
		foreach($_POST as $key=>$value){
			$retorno[$key]=  addslashes($value);
		}
		return $retorno;
	}

	public function get() {
		$retorno['parametros']=array();
		foreach($_GET as $value){
			$retorno['parametros'][]=addslashes($value);
		}
		return $retorno;
	}

}