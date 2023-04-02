<?php
namespace models;

use Ubiquity\attributes\items\Id;
use Ubiquity\attributes\items\Column;
use Ubiquity\attributes\items\Validator;
use Ubiquity\attributes\items\Table;

#[Table(name: "gitsource")]
class Gitsource{
	
	#[Id()]
	#[Column(name: "id",dbType: "int(11)")]
	#[Validator(type: "id",constraints: ["autoinc"=>true])]
	private $id;

	
	#[Column(name: "Name",dbType: "varchar(64)")]
	#[Validator(type: "length",constraints: ["max"=>"64","notNull"=>true])]
	private $Name;

	
	#[Column(name: "Url",dbType: "varchar(256)")]
	#[Validator(type: "length",constraints: ["max"=>"256","notNull"=>true])]
	private $Url;

	
	#[Column(name: "Type",dbType: "varchar(10)")]
	#[Validator(type: "length",constraints: ["max"=>"10","notNull"=>true])]
	private $Type;


	public function getId(){
		return $this->id;
	}


	public function setId($id){
		$this->id=$id;
	}


	public function getName(){
		return $this->Name;
	}


	public function setName($Name){
		$this->Name=$Name;
	}


	public function getUrl(){
		return $this->Url;
	}


	public function setUrl($Url){
		$this->Url=$Url;
	}


	public function getType(){
		return $this->Type;
	}


	public function setType($Type){
		$this->Type=$Type;
	}


	 public function __toString(){
		return ($this->Type??'no value').'';
	}


}