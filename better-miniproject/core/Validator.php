<?php 
    namespace Core;

    class Validator
    {
        public function validate($data)
        {
            $this->errors = [];
            $this->validateName($data['name']);
            $this->validatePassword($data['password']);
            $this->validatePasswordConfirmation($data['password_confirmation']);
            return empty($this->errors);
        }

        private function validateName($name)
        {
            if (checkUserExists([$name])) {
                $this->errors['name'] = 'Name already exists';
            }
            return filter_var($name, FILTER_VALIDATE_NAME);
        }

        private function validatePassword($password)
        {
            return strlen($password) >= 8;
        }

        private function validatePasswordConfirmation($password_confirmation)
        {
            if ($password !== $password_confirmation) {
                $this->errors['password'] = 'Passwords do not match';
            }
        }
    }
?>