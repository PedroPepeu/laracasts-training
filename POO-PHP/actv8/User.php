<?php 
    // Old way
    // class User
    // {
    //     public function __construct(
    //         private string $email,
    //     ) {}

    //     public function getEmail(): string
    //     {
    //         return $this->email;
    //     }

    //     public function setEmail(
    //         string $email
    //     ): void {
    //         if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //             throw new InvalidArgumentException('Email must be valid.');
    //         }

    //         $this->email = $email;
    //     }
    // }

    // New way
    class User
    {
        // {read visibility} {set visibility}(set) {propertyType} $variableName;
        private(set) string $email {
            get {
                return this->email;
            }

            set {
                $this->email = $value;
            }
        }

        public string $email2 {
            get 
            {
                return $this->email;
            }
            
            // even this can be reduced
            // set(string $value)
            // {
            //     if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            //         throw new InvalidArgumentException('Email must be valid.');
            //     }

            //     $this->email = $value;
            // }
            set 
            {
                if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                    throw new InvalidArgumentException('Email must be valid.');
                }

                $this->email = $value;
            }
        }
    }
?>