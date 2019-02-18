<?php

$items = [
    [
        "name"=> "Vasja ",
        "lastname"=> "Dolgov",
        "age"=> 19,
        "email"=> "vasja@mail.ru"
        ],
    [
        "name"=> "Kolja ",
        "lastname"=> "Grisin",
        "age"=> 50,
        "email"=> "kolja@mail.ru"
        
    ],
    ["name"=> "Valja ",
        "lastname"=> "Galkina",
        "age"=> 22,
        "email"=> "valja@mail.ru"
    ]
];
function map($items,$func) {
    $result = [];
    foreach ($items as $item) {
        $results[]= $func($item);
       
    } 
    return $results;
    
}
$emails = map($items, function ($client) {
    return $client['email'];
});
$names = map($items, function ($client) {
    return $client['name'];
});
$total = map($items, function ($client) {
    return $client['name'] . $client['lastname'];
});

echo '<pre>';
var_dump($emails, $names, $total);
echo '<pre>';