<?php 
class Database
{
    public function __construct()
    {
        $this->connection = new PDO($dsn, $username, $password);
    }

    public function query($sql)
    {
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>