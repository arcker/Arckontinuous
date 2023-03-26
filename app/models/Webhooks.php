<?php
namespace models;

use Ubiquity\attributes\items\Id;
use Ubiquity\attributes\items\Column;
use Ubiquity\attributes\items\Validator;
use Ubiquity\attributes\items\Table;

#[Table(name: "webhooks")]
class Webhooks{
	
	#[Id()]
	#[Column(name: "id",dbType: "int")]
	#[Validator(type: "id",constraints: ["autoinc"=>true])]
	private $id;

	
	#[Column(name: "url",dbType: "varchar(256)")]
	#[Validator(type: "url",constraints: ["notNull"=>true])]
	#[Validator(type: "length",constraints: ["max"=>"256"])]
	private $url;

	
	#[Column(name: "name",dbType: "varchar(64)")]
	#[Validator(type: "length",constraints: ["max"=>"64","notNull"=>true])]
	private $name;


	public function getId(){
		return $this->id;
	}


	public function setId($id){
		$this->id=$id;
	}


	public function getUrl(){
		return $this->url;
	}


	public function setUrl($url){
		$this->url=$url;
	}


	public function getName(){
		return $this->name;
	}


	public function setName($name){
		$this->name=$name;
	}


	 public function __toString(){
		return ($this->name??'no value').'';
	}

}