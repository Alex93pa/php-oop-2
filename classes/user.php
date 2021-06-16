<?php

// class PrimeSubscription {

// }

class User {
    protected $name;
    protected $email;
    protected $primeSubscription;

    function __construct($name, $email){
        $this->name = $name;
        $this->email = $email;

    }

    public function setPrime($primeSubscription) {
        $this->primeSubscription = $primeSubscription;
    }
}

// $user = new User("", "");

// $user -> setPrime(new PrimeSubscription());