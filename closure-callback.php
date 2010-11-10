<?php
$values = array(3, 7, 2);
usort($values, function ($a, $b) {
    if ($a == $b) { return 0; }
    return ($a < $b) ? -1 : 1;
});
/*  [0] => 2
    [1] => 3
    [2] => 7 */
