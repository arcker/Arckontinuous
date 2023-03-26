<?php
namespace models;

use Ubiquity\attributes\items\Id;
use Ubiquity\attributes\items\Column;
use Ubiquity\attributes\items\Validator;
use Ubiquity\attributes\items\Table;

#[Table(name: "applications")]
class Applications{
	
	#[Id()]
	#[Column(name: "id",dbType: "int")]
	#[Validator(type: "id",constraints: ["autoinc"=>true])]
	private $id;

	
	#[Column(name: "name",dbType: "varchar(64)")]
	#[Validator(type: "length",constraints: ["max"=>"64","notNull"=>true])]
	private $name;

	
	#[Column(name: "description",dbType: "varchar(4096)")]
	#[Validator(type: "length",constraints: ["max"=>"4096","notNull"=>true])]
	private $description;


	public function getId(){
		return $this->id;
	}


	public function setId($id){
		$this->id=$id;
	}


	public function getName(){
		return $this->name;
	}


	public function setName($name){
		$this->name=$name;
	}


	public function getDescription(){
		return $this->description;
	}


	public function setDescription($description){
		$this->description=$description;
	}


	 public function __toString(){
		return ($this->description??'no value').'';
	}

}