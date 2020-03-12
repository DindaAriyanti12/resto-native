<?php

class database{
	private $db = [
		'host' => 'localhost',
		'username' => 'root',
		'password' => '',
		'database' => 'resto_dinda'
	];

	public function data(){
		return $this->db;
	}
}