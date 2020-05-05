<?php
//---------------------------------------Interface Crud------------------------------------
interface Crud {

    abstract function insert();
    abstract function update();
    abstract function delete();
    abstract function selectAll();
    abstract function select();
    
}