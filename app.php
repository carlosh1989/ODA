<?php
spl_autoload_register(function ($name) {
    var_dump($name);
});

class Foo extends ITest {
}

$cosa = new Cosa();
/*
string(5) "ITest"

Fatal error: Interface 'ITest' not found in ...
*/
?>