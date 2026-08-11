<?php

header('Content-Type: application/json');

$section = isset($_GET['section']) ? $_GET['section'] : 'home';

// In a real app this data would come from a database (MySQLi / PDO query).
$data = [
    'home' => [
        'title' => 'Home',
        'body'  => "Welcome to my website. Click a menu link above to load that section's content with AJAX."
    ],
    'blog' => [
        ['title' => 'First Post',  'body' => 'This is my first blog post, loaded using jQuery AJAX and PHP.'],
        ['title' => 'Second Post', 'body' => 'Another post fetched from the server without reloading the page.']
    ],
    'products' => [
        ['name' => 'Product A', 'price' => '$10'],
        ['name' => 'Product B', 'price' => '$25'],
        ['name' => 'Product C', 'price' => '$40']
    ],
    'contact' => [
        'email' => 'contact@example.com',
        'phone' => '123-456-7890'
    ]
];

if (array_key_exists($section, $data)) {
    echo json_encode($data[$section]);
} else {
    http_response_code(404);
    echo json_encode(['error' => 'Section not found']);
}