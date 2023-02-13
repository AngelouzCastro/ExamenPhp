<?php
include('../Modelo/conexion.php');
/*
plantilla de un usuario
*/
class usuario {
    private $id;
    private $first_name;
    private $last_name;
    private $adress;

    function __construct() {
        $this->id = 0;
        $this->first_name = '';
        $this->last_name = '';
        $this->adress = '';
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setFirst_name($first_name) {
        $this->first_name = $first_name;
    }

    public function setLast_name($last_name) {
        $this->last_name = $last_name;
    }

    public function setAdress($adress) {
        $this->adress = $adress;
    }

    public function getId() {
        $this->id;
    }

    public function getFirst_name() {
        return $this->first_name;
    }

    public function getLast_name() {
        return $this->last_name;
    }

    public function getAdress() {
        return $this->adress;
    }

}
?>