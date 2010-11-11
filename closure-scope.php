<?php
$sayWhat = 'Hi';
$say = function ($toWhom) use ($sayWhat) {
    return $sayWhat . ', ' . $toWhom;
};
echo $say('Bradley'); // Hi, Bradley
