<?php

$t = new \stdClass();
$t->a = 7;
$u = $t;
$u = unserialize(serialize($t));
$u->a = 2;
