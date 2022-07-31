<?php

require_once __DIR__.'/Person.php';

$person = new Person('Dimitar', '26');
echo "Person name is: " . $person->getName();
