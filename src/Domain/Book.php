<?php

namespace Bookstore\Domain;

class Book {
	public $isbn;
	public $title;
	public $author;
	public $available;
	
	public function __construct(
		float $isbn,
		string $title,
		string $author,
		int $available = 0
		) {
		$this->isbn = $isbn;
		$this->title = $title;
		$this->author = $author;
		$this->available = $available;
	}

	public function getIsbn(): float{
		return $this->isbn;
	}
	public function getTitle(): string{
		return $this->title;
	}
	public function getAuthor(): string{
		return $this->author;
	}
	public function isAvailable(): bool{
		if($this->available < 1){
			return false;
		}else{
			return true;
		}
	}
	public function getPrintableTitle(): string{
		$result = '<i>' . $this->title . '</i> -' . $this->author ;
		if($this->available > 0){
			$result .= ' - Available';
		}
		else{
			$result .= ' - Not available';
		}
		return $result;
	}
	public function getCopy(): bool{
		if($this->available < 1){
			return false;
		} else{
			$this->available--;
			return true;
		}
	}
	public function addCopy(){
		$this->available++;
	}
}
