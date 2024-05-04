<?php
// $name = 'Laracasts';
// $cost = 15;
$heading = "Home";

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

// $filteredBooks = array_filter($books, function ($book) {
//     return $book['author'] == 'Andy Weir';
// });
// if you have your file in index.php file then you can ommit the questiongreaterthan symbol in php
// at the bottom

require "views/index.view.php";
    