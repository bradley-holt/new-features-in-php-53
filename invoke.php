<?php
class Foo {
    public function __invoke($x) {
        return $x + $x;
    }
}
$foo = new Foo();
echo $foo(2); // 4
