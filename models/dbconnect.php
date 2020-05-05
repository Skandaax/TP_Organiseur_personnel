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
}
