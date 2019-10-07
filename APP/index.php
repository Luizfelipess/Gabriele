<?php

require_once "vendor/autoload.php";

    $p = new Person("Gabriele" , "23" , "F");
    $b = new Book("Donnie Dark" , "Richard Kelly" , "300" , "33");

    $b->details();
    $p->readerDetails();


?>