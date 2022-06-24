<?php

class Dbh
{
    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "zuriphp";

    protected function connect()
    {
        $this->connection = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);

        if (is_null($this->connection->connect_error)) {
            return $this->connection;
        } else {
            echo "Connection failed -> " . $this->connection->connect_error;
        }
    }
}