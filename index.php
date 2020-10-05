<?php

require_once "classes/Employee.php";
require_once "classes/Developer.php";


$employee1 = new Developer("Davide", "Francavilla", "IIOJ32", "Permanent", "2000€", "Back-end");

var_dump($employee1);
echo "Stipendio annuale: ".$employee1->annualSalary()."<br>";

echo $employee1->getName()."<br>";
echo $employee1->getLastName()."<br>";
echo $employee1->getCode()."<br>";
echo $employee1->getType()."<br>";
echo $employee1->getSalary()."<br>";
echo $employee1->getTeam()."<br><br>";

$employee1->setName("Mario");
$employee1->setLastName("Rossi");
$employee1->setCode("KKDL23");
$employee1->setType("Permanent");
$employee1->setSalary("2100€");
$employee1->setTeam("Front-end");

echo $employee1->getName()."<br>";
echo $employee1->getLastName()."<br>";
echo $employee1->getCode()."<br>";
echo $employee1->getType()."<br>";
echo $employee1->getSalary()."<br>";
echo $employee1->getTeam()."<br>";


