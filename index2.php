<?php

class PersonNew {
var $name;
var $lastName;

function __construct($name, $lastName) {
$this->name = $name;
$this->lastName = $lastName;
}
function sayHello(){
echo' Привет ';
echo' My name is '.$this->name;
echo' How are doing?? ';
echo' Bye';
}

function sayBye(){

echo' Bye';
}
}

$misha = new PersonNew('Misha', 'Petrov');
$misha->sayHello();

$peter = new PersonNew('Peter', 'Petrov');
$peter->sayHello();

$olga = new PersonNew('Olga', 'Novikova');
$olga->sayHello();
$olga->sayBye();

$misha = new PersonNew('Misha', 'Petrov');
$misha->sayHello();




