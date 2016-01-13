<?php
$helloMessage = "Hello world!";
var_dump($helloMessage);

var_dump(1.0 + 1, true, null);

$arr = [1, '2', true, [
	'test', false
]];
var_dump($arr);

$obj = new StdClass();
$obj->firstname = 'Vasya';
$obj->lastname = 'Pupkin';

$obj2 = new StdClass();
$obj2->firstname = 'Vasya';
$obj2->lastname = 'Pupkin';
var_dump($obj, $obj2);

$fp = fopen('/etc/passwd', 'r');
var_dump($fp);

# php -S localhost:8080 -t /home/

$a = 0;

var_dump((bool) $a);