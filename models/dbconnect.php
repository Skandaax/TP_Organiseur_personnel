<?php

//---------------------------------------DBconnect-----------------------------------
abstract class DbConnect implements crud {

    protected $pdo;
    protected $id;

    function __construct($id = null) {
        $this->pdo = new pdo(DATABASE, LOGIN, PASSWORD);
        $this->id = $id;
    }

    function getID(): ?int {
       return $this->id->$id;
    }

    abstract function insert();
    abstract function update();
    abstract function delete();
    abstract function selectAll();
    abstract function select();


}
