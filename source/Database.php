<?php
class Database
{
    public function __construct(
        private $serverName,
        private $database,
        private $username,
        private $password
    ) {
    }

    public function connect()
    {
        try {
            $conn = new PDO("pgsql:host=$this->serverName;port=5432;dbname=$this->database", $this->username, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}