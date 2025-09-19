<?php 
    class Person {
        private string $name;

        public function __construct(string $name)
        {
            $this->name = $name;
        }
    }

    $bob = new Person('Bob');
    var_dump($bob->name); // Fatal error: Cannot access private property Person::$name
?>