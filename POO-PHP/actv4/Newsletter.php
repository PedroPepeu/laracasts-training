<?php 
    class Newsletter {
        public function __construct(
            public NewsletterProvider $provider
        ) {}

        public function subscrive(
            User $user
        ): void {
            $this->provider->addToList('default', $user->email);
        }
    }
?>