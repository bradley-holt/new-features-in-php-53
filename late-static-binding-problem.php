<?php
class Foo {
    protected static function speak() {
        return 'Hi';
    }
    public static function sayHi() {
        return self::speak();
    }
}

class Bar extends Foo {
    protected static function speak() {
        return 'Hello';
    }
}

echo Bar::sayHi();
