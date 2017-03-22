<?php

namespace Bookstore\Domain;

class Person {
	protected $firstname;
	protected $surname;
	// Constructor
	public function __construct(
		string $firstname,
		string $surname
		){
		$this->firstname = $firstname;
		$this->surname = $surname;
	}
	// Public Methods
	public function getFirstname():string {
		return $this->firstname;
	}
	public function getSurname():string {
		return $this->surname;
	}
}