<?php

require_once "traits/Contract.php";

class Employee {
    private $name;
    private $lastName;
    private $code;
    use Contract;

    public function __construct($_name, $_lastName, $_code, $_type, $_salary){
        if (empty($_name) || !is_string($_name)){
            die("Nome non valido");
        }
        $this->name = $_name;
        if (empty($_lastName) || !is_string($_lastName)){
            die("Cognome non valido");
        }
        $this->lastName = $_lastName;
        if (strlen($_code) != 6){
            die("Codice non valido");
        }
        $this->code = $_code;
        $this->type = $_type;
        $this->salary = $_salary;

    }

    public function annualSalary(){
        return intval($this->salary)*12;
    }

    //get 
    public function getName(){
        return $this->name;
    }
    public function getLastName(){
        return $this->lastName;
    }
    public function getCode(){
        return $this->code;
    }
    public function getType(){
        return $this->type;
    }
    public function getSalary(){
        return $this->salary;
    }
    //set

    public function setName($_name){
        $this->name = $_name;
    }
    public function setLastName($_lastName){
        $this->lastName = $_lastName;
    }
    public function setCode($_code){
        $this->code = $_code;
    }
    public function setType($_type){
        $this->type = $_type;
    }
    public function setSalary($_salary){
        $this->salary = $_salary;
    }
}