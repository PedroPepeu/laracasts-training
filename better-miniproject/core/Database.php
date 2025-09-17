<?php 
    namespace Core;

    use PDO;
    class Database
    {
        private PDO $connection;
        
        public function __construct(array $config, $username = 'testuser', $password = '')
        {
            $options = [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ];

            $dsn = 'pgsql:' . str_replace('&', ';', http_build_query($config));
            $this->connection = new PDO($dsn, $username, $password, $options);
        }

        public function query($query, $bindings = [])
        {
            $stmt = $this->connection->prepare($query);
            $stmt->execute($bindings);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function checkAccountExists($bindings = [])
        {
            $query = "SELECT * FROM users WHERE LOWER(name) = LOWER(?) AND password = ?";
            $stmt = $this->connection->prepare($query);
            $stmt->execute($bindings);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function checkUserExists($bindings = [])
        {
            $query = "SELECT * FROM users WHERE LOWER(name) = LOWER(?)";
            $stmt = $this->connection->prepare($query);
            $stmt->execute($bindings);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getUserId($bindings = [])
        {
            $query = "SELECT id FROM users WHERE LOWER(name) = LOWER(?) AND password = ?";
            $stmt = $this->connection->prepare($query);
            $stmt->execute($bindings);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row ? $row['id'] : null;
        }

        public function getUserName($bindings = [])
        {
            $query = "SELECT name FROM users WHERE id = ?";
            $stmt = $this->connection->prepare($query);
            $stmt->execute($bindings);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row ? $row['name'] : null;
        }

        public function createUser($bindings = [])
        {
            $query = "INSERT INTO users (name, password) VALUES (?, ?)";
            $stmt = $this->connection->prepare($query);
            $stmt->execute($bindings);
        }

        public function createNote($bindings = [])
        {
            $query = "INSERT INTO notepads (notepad_owner, text) VALUES (?, ?)";
            $stmt = $this->connection->prepare($query);
            $stmt->execute($bindings);
        }
    }
?>