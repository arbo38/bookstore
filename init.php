<?php

use Bookstore\Domain\Person;
use Bookstore\Domain\Customer;
use Bookstore\Domain\Customer\Basic;
use Bookstore\Domain\Customer\Premium;
use Bookstore\Domain\Book;

function autoloader($classname) {
	$lastSlash = strpos($classname, '\\') + 1;
	$classname = substr($classname, $lastSlash);
	$directory = str_replace('\\', '/', $classname);
	$filename = __DIR__ . '/src/' . $directory . '.php';
	require_once($filename);
}

spl_autoload_register('autoloader');

function checkIfValid(Customer $customer, array $books):bool{
	return $customer->getAmoutToBorrow() >= count($books);
}

$book1 = new Book(9785267006323, "1984", "George Orwell",  12);
$book2 = new Book(9780061120084, "To Kill a Mockingbird", "Harper Lee", 2);

$person1 = new Person("Antony", "BEAU");

$basic1 = new Basic(null, 'James', 'Bond', 'james@bond.com');
var_dump($basic1);

$premium1 = new Premium(null, 'Francis', 'Cabrel', 'francis_cabrel@gmail.com');
var_dump($premium1);


if(checkIfValid($premium1, [$book1, "lolz", "bar", "echo", "mirage", "trotinette"])){
	echo "Valid";
}else{
	echo"Not valid";
}

if(checkIfValid($basic1, [$book1, "lolz", "bar", "echo", "mirage", "trotinette"])){
	echo "Valid";
}else{
	echo"Not valid";
}




