<?php
namespace btvphp\stuff {
    class Foo {}
}
namespace btvphp\misc {
    use btvphp\stuff as stuff;
    $a = new stuff\Foo();
}
