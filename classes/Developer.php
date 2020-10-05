<?php

class Developer extends Employee {
    private $team;

    public function __construct($_name, $_lastName, $_code, $_type, $_salary, $_team){
        parent::__construct($_name, $_lastName, $_code, $_type, $_salary);
        $this->team = $_team;
    }

    //get 
    public function getTeam(){
        return $this->team;
    }

    //set
    public function setTeam($_team){
        $this->team = $_team;
    }
}