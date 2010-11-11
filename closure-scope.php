<?php
$sayWhat = 'Hi';
$sayHi = function ($toWhom) use ($sayWhat) {
    return $sayWhat . ', ' . $toWhom;
};
echo $sayHi('Bradley'); // Hi, Bradley
