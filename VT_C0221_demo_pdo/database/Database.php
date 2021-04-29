<?php


class Database
{
    protected string $dsn;
    protected string $username;
    protected string $password;


    public function __construct()
    {
        $this->dsn = 'mysql:host=localhost;dbname=car_manager';
        $this->username = 'root';
        $this->password = '12345678';
    }

    function connect(): PDO
    {
        return new PDO($this->dsn, $this->username, $this->password);
    }
}