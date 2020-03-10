<?php
class Categoria
{
	//
	private $id;
	private $nimetus;
	private $kirjeldus;
	
	//
	function __construct($id,$nimi,$tekst)
	{
		$this->id=$id;
		$this->nimetus=$nimi;
		$this->kirjeldus=$tekst;
	}
	//
	public function getID() {
		return $this->id;
	}
	
	public function getNimetus() {
		return $this->nimetus;
	}
	
	public function getKirjeldus() {
		return $this->kirjeldus;
	}
	
	public function displayID() {
		return $this->id;
	}
	
	public function displayNumetus() {
		return $this->nimetus;
	}
	
	public function displayKirjeldus() {
		return $this->kirjeldus;
	}
}