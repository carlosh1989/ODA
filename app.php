<?php            
class A
{
}

class_alias('A', 'B');

$object = new B;

$r = new ReflectionClass('B');
var_dump($r->getName());