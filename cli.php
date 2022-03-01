<?php

require_once __DIR__ . './vendor/autoload.php';

use APP\Entity\EntityFactory;

$entityFactory = new EntityFactory();

echo $entityFactory->create($arg[1]);