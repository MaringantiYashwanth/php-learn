<?php
require "functions.php";
require 'Database.php';
// require 'router.php';

$db = new Database();

$posts = $db->query("SELECT * FROM posts");
$db->query($posts);
$db($post[0]['title']);
foreach ($post as $posts) {
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
