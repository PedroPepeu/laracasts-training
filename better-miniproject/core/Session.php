<?php 
    namespace Core;

    class Session
    {
        public function __construct($session_name)
        {
            if (session_status() === PHP_SESSION_NONE) {
                if (session_name() !== $session_name) {
                    session_name($session_name);
                }
                session_start();
            }
            if (session_status() === PHP_SESSION_ACTIVE && !headers_sent()) {
                session_regenerate_id(true);
            }
        }
        
        public function set($key, $value)
        {
            $_SESSION[$key] = $value;
        }
        
        public function get($key, $default = null)
        {
            return array_key_exists($key, $_SESSION) ? $_SESSION[$key] : $default;
        }

        public function delete($key)
        {
            unset($_SESSION[$key]);
        }

        public function destroy()
        {
            session_destroy();
        }

        public function flash($key, $message)
        {
            $_SESSION['flash'][$key] = $message;
        }

        public function getFlash($key, $default = null)
        {
            return isset($_SESSION['flash']) && array_key_exists($key, $_SESSION['flash']) ? $_SESSION['flash'][$key] : $default;
        }

        public function hasFlash($key)
        {
            return isset($_SESSION['flash'][$key]);
        }
        
        public function deleteFlash($key)
        {
            unset($_SESSION['flash'][$key]);
        }

        public function destroyFlash()
        {
            unset($_SESSION['flash']);
        }
    }
?>