<?php
// $name = 'Laracasts';
// $cost = 15;
$heading = "Home";

// echo (int) 12.5 . '<br>';
// echo (int) 12.1 . '<br>';
// echo (int) 12.9 . '<br>';
// echo (int)-12.9 . '<br>';

// $message = 'Hi';
// $num = (int) $message;
// echo $num; // 0
// echo "<pre>";
// var_dump($_SERVER);
// echo "</pre>";
// // dd($_SERVER);
// // dd($heading);
// // echo $_SERVER['REQUEST_URI']
// $business = [
//     'name' => 'laracasts',
//     'cost' => 15,
//     'category' => [
//         "Testing, PHP",
//         "Javascript"
//     ]
// ];

// // require "functions.php";

// /*
//  * foreach ($business['category'] as $category) {
//  * echo $category . ', ';
//  * }
//  */
// function register($user)
// {
//     // Create the user record in the db.
//     // Log them in.
//     // Send them welcome email.
//     // Redirect to their new dashboard.
// }

// $business['name']; // laracasts;

// if ($business['cost'] > 99) {
//     echo "Not interested.";
// }
// $books = [
//     [
//         'name' => 'Do Androids Dream of Electric Sheep',
//         'author' => 'Philip K. Dick',
//         'releaseYear' => 1968,
//         'purchaseUrl' => 'http://example.com'
//     ],
//     [
//         'name' => 'Project Hail Mary',
//         'author' => 'Andy Weir',
//         'releaseYear' => 2021,
//         'purchaseUrl' => 'http://example.com'
//     ],
//     [
//         'name' => 'The Martian',
//         'author' => 'Andy Weir',
//         'releaseYear' => 2011,
//         'purchaseUrl' => 'http://example.com'
//     ]
// ];
// function dd($value) {
//     echo "<pre>";
//     var_dump($value);
//     echo "</pre>";

//     die();
// }
// echo $_SERVER['REQUEST_URI'];
// dd($heading);
// dd($_SERVER); // dump and die
// $filteredBooks = array_filter($books, function ($book) {
//     return $book['author'] == 'Andy Weir';
// });
// if you have your file in index.php file then you can ommit the questiongreaterthan symbol in php
// at the bottom

require "views/index.view.php";
