<?php

class Database
{
    private PDO $connection;

    public function __construct(array $config, $username = 'testuser', $password = '')
    {
        $options = [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];
        
        $dsn = 'pgsql:' . str_replace('&', ';', http_build_query($config));
        $this->connection = new PDO($dsn, $username, $password, $options);
    }

    public function query($sql, $bindings = [])
    {
        $stmt = $this->connection->prepare($sql);
        $stmt->execute($bindings);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUserId($bindings = [])
    {
        $query = "SELECT id FROM users WHERE name = ? AND password = ?";
        $results = $this->query($query, $bindings);
        return $results[0]['id'];
    }
}

?>