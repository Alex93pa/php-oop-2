<?php 

class Cart {
    protected $user;
    // public $product;
    // public $payment;

    function __construct($user){
        $this->user = $user;
        // $this->$product = $product;
        // $this->$payment = $payment;

    }

    public function addProduct($product){
        $this->product[] = $product;
    }
}