<?php
$clients = [
    [
        "name"=> "Vasja  ",
        "lastname"=> "Dolgov",
        "age"=> 19,
        "email"=> "vasja@mail.ru"
        ],
    ["name"=> "Kolja  ",
        "lastname"=> "Grisin",
        "age"=> 50,
        "email"=> "kolja@mail.ru"
        
    ],
    ["name"=> "Valja  ",
        "lastname"=> "Galkina",
        "age"=> 22,
        "email"=> "valja@mail.ru"
    ]
];
$emails = [];
foreach ($clients as $client) {
    $emails[]=$client['email'];
    
   }
   $names = [];
   foreach ($clients as $client) {
    $name[]=$client['name'];
   }
    $total = [];
   foreach ($clients as $client) {
    $total[]=$client['name'] . $client['lastname'];
   }
   echo '<pre>',
           var_dump($emails, $names, $total);
           echo '</pre>';
                 