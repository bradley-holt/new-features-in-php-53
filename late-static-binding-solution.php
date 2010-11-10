<?php
class Foo {
    protected static function speak() {
        return 'Hi';
    }
    public static function sayHi() {
        return static::speak();
    }
}

class Bar extends Foo {
    protected static function speak() {
        return 'Hello';
    }
}

echo Bar::sayHi(); // Hello
