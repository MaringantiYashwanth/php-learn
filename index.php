<?php
require "functions.php";
//require 'router.php';

// connect to our MYSQL database.
$dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;password=admin;charset=utf8mb4";
$pdo = new PDO($dsn);

$statement = $pdo->prepare("SELECT * FROM posts");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);
// dd($posts);
foreach ($posts as $post) {
    echo "<li>" . $post["title"] . "</li>";
}

class Person
{

    public $name;

    public $age;

    public function breathe()
    {
        echo $this->name . " is breathing!";
    }
}

$person = new Person();
$person->name = "Yashwanth Maringanti";
$person->age = 25;
dd($person->name);
dd($person->age);
dd($person->breathe());
