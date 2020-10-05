<?php


trait Contract {
    private $type;
    private $salary;

    public function __construct($_type, $_salary){
        $this->type = $_type;
        $this->salary = $_salary;
    }
}