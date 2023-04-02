<?php
namespace models;

use Ubiquity\attributes\items\Id;
use Ubiquity\attributes\items\Column;
use Ubiquity\attributes\items\Validator;
use Ubiquity\attributes\items\Table;

#[Table(name: "kubeconfig")]
class Kubeconfig{
	
	#[Id()]
	#[Column(name: "id",dbType: "int")]
	#[Validator(type: "id",constraints: ["autoinc"=>true])]
	private $id;

	
	#[Column(name: "name",dbType: "varchar(64)")]
	#[Validator(type: "length",constraints: ["max"=>"64","notNull"=>true])]
	private $name;

	
	#[Column(name: "UserClientCertificate",dbType: "varchar(8092)")]
	#[Validator(type: "length",constraints: ["max"=>"8092","notNull"=>true])]
	private $UserClientCertificate;

	
	#[Column(name: "UserClientKey",dbType: "varchar(8092)")]
	#[Validator(type: "length",constraints: ["max"=>"8092","notNull"=>true])]
	private $UserClientKey;


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


	public function getUserClientCertificate(){
		return $this->UserClientCertificate;
	}


	public function setUserClientCertificate($UserClientCertificate){
		$this->UserClientCertificate=$UserClientCertificate;
	}

	
	public function getUserClientKey(){
		return $this->UserClientKey;
	}


	public function setUserClientKey($UserClientKey){
		$this->UserClientKey=$UserClientKey;
	}


	 public function __toString(){
		return ($this->UserClientKey??'no value').'';
	}

}