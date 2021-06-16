<?php

require_once(__DIR__ . "/../product.php");

class smartphone extends Product {
    protected $model;
    protected $brand;

    protected $band;

    function __construct($name, $qty, $price, $model, $brand){
        parent::__construct($name, $qty, $price);

        $this->model = $model;
        $this->brand = $brand;

    }
}