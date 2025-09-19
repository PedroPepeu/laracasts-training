<?php 
    class Vehicle 
    {
        public function accelerate(): void
        {
            echo "accelerating";
        }
    }

    class Cart extends Vehicle
    {
        /*
        * @override accelerate method from Vehicle class
        */
        public function accelerate(): void
        {
            echo "rolling";
        }
    }


    $cart = new Cart();
    $cart->accelerate();
?>