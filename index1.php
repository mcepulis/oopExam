<?php

// include_once "Employee.php";
// include_once "Intern.php";
// include_once "Manager.php";

use Oopexam\module1\Employee;
use Oopexam\module1\Intern;
use Oopexam\module1\Manager;

require_once "vendor/autoload.php";

$Intern = new Intern("Marius", 600);
$Manager = new Manager("Darius", 4, 800);

echo $Intern . PHP_EOL;
echo $Manager . PHP_EOL;

echo $Intern->calculateSalary() . PHP_EOL;
echo $Manager->calculateSalary() . PHP_EOL;

echo Employee::getTypeDescription() . PHP_EOL;

$InternClone = new Intern("Marius_clone", 602);
echo $InternClone . PHP_EOL;
