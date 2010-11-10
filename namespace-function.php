<?php
namespace btvphp\stuff;
function sayHi()
{
    echo 'Hi';
}
echo \btvphp\stuff\sayHi(); // Hi
echo sayHi(); // Hi
