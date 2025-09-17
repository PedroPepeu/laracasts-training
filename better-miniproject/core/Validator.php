<?php 
    namespace Core;

    class Validator
    {
        private Database $database;

        public array $errors = [];

        public function __construct(Database $database)
        {
            $this->database = $database;
        }

        public function validate($data)
        {
            $this->errors = [];

            $name = $data['name'] ?? ($data[0] ?? '');
            $password = $data['password'] ?? ($data[1] ?? '');
            $passwordConfirmation = $data['password_confirmation'] ?? ($data[2] ?? '');

            $this->validateName($name);
            $this->validatePassword($password);
            $this->validatePasswordConfirmation($password, $passwordConfirmation);
            return empty($this->errors);
        }

        private function validateName($name)
        {
            $trimmed = trim($name);
            if ($trimmed === '' || strlen($trimmed) < 3) {
                $this->errors['name'] = 'Name must be at least 3 characters';
                return false;
            }

            if (!empty($this->database->checkUserExists([$trimmed]))) {
                $this->errors['name'] = 'Name already exists';
                return false;
            }

            return true;
        }

        private function validatePassword($password)
        {
            if (strlen((string)$password) < 8) {
                $this->errors['password'] = 'Password must be at least 8 characters';
                return false;
            }
            return true;
        }

        private function validatePasswordConfirmation($password, $password_confirmation)
        {
            if ($password !== $password_confirmation) {
                $this->errors['password_confirmation'] = 'Passwords do not match';
                return false;
            }
            return true;
        }
    }
?>