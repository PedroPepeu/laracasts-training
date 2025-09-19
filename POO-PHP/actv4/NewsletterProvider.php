<?php 
    interface NewsletterProvider
    {
        public function addToList(
            string $listName,
            string $email
        ): void;
    }
?>