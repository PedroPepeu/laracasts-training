<?php 
    interface Storage 
    {
        public function put(string $path, string $contents): void;
    }
?>