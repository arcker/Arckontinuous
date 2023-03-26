<?php
namespace models;

use Ubiquity\attributes\items\Id;
use Ubiquity\attributes\items\Column;
use Ubiquity\attributes\items\Validator;
use Ubiquity\attributes\items\Table;

#[Table(name: "cluster")]
class Cluster{
	
	#[Id()]
	#[Column(name: "id",dbType: "int")]
	#[Validator(type: "id",constraints: ["autoinc"=>true])]
	private $id;

	
	#[Column(name: "name",dbType: "varchar(256)")]
	#[Validator(type: "length",constraints: ["max"=>"256","notNull"=>true])]
	private $name;

	
	#[Column(name: "description",dbType: "varchar(4096)")]
	#[Validator(type: "length",constraints: ["max"=>"4096","notNull"=>true])]
	private $description;

	
	#[Column(name: "hostname",dbType: "varchar(256)")]
	#[Validator(type: "length",constraints: ["max"=>"256","notNull"=>true])]
	private $hostname;


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


	public function getHostname(){
		return $this->hostname;
	}


	public function setHostname($hostname){
		$this->hostname=$hostname;
	}


	 public function __toString(){
		return ($this->hostname??'no value').'';
	}

}