<?php

class Database
{
    public $connection;

    public function __construct()
    {
        // connect to MYSQL Database.
        $config = [
            'host' => 'localhost',
            'port' => '3306',
            'dbname' => 'myapp',
            'charset' => 'utf8mb4'
        ];

        $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";
        http_build_query($config, '', ';'); // example.com?foo=bar or example.com?host=localhost&port=3306&dbname=myapp
        $this->connection = new PDO($dsn, 'root', '', [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query)
    {
        $statement = $this->connection->prepare($query);
        $statement->execute();

        $posts = $statement->fetchAll(PDO::FETCH_ASSOC);

        // dd($posts);
        return $statement;
    }
}
