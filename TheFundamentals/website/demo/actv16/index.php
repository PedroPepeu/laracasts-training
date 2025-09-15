<?php 
    $config = [
        'host' => 'localhost',
        'port' => 3306,
        'dbname' => 'myapp',
        'charset' => 'utf8mb4'
    ];

    $dsn = 'mysql:' . str_replace('&', ';', http_build_query($config));
    // mysql:host=localhost;port=3306;database=myapp;charset=utf8mb4

    // So, instead of hardcoding, use this to config the class
    $db = new Database($config); // And use the $dsn in the __constructor
    // public function __construct(array $config, $username = 'root', $password = '')


    $options = [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

    class Database
    {
        public function __construct(array $config, $username = 'root', $password = '')
        {
            $dsn = 'mysql:' . str_replace('&', ';', http_build_query($config));
            $this->connection = new PDO($dsn, $username, $password, $options);
        }

        public function query($sql)
        {
            $statement = $this->connection->prepare($sql);
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>