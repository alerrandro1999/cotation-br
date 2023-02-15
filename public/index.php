<?php

require __DIR__ . '/../bootstrap/bootstrap.php';

foreach ($api::ToArray() as $value) {
    foreach ($value as $value) {
        $ob = (object)$value;
        echo $ob->stock;
    }
}
