<?php
class Foo {
    public static function __callStatic($name, $args) {
        return $name . ' called statically';
    }
}
echo Foo::bar(); // bar called statically
