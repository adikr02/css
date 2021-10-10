<!DOCTYPE html>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

</body>

</html>
<?php
$course1 = ["BCA" => [
    "Arav" => [
        "Math" => 60,
        "English" => 80,
        "Computer" => 90
    ],
    "Sonty" => [
        "Math" => 60,
        "English" => 80,
        "Computer" => 84
    ]
]];
$course2 = ["BBA" => [
    "Sonu" => [
        "Accounts" => 35,
        "Eco" => 50,
        "BST" => 30
    ],
    "Monu" => [
        "Accounts" => 20,
        "Eco" => 40,
        "BST" => 50
    ]
]];
$course3 = ["HM" => [
    "Adi" => [
        "FMB" => 35,
        "Reception" => 50,
        "Room Service" => 30
    ],
    "Ayush" => [
        "FMB" => 35,
        "Reception" => 50,
        "Room Service" => 30
    ]
]];
$course4 = ["MCA" => [
    "Deepak" => [
        "Advance Java" => 60,
        "Data Science" => 78,
        "Computer Graphics" => 30
    ],
    "Sanjeet" => [
        "Advance Java" => 60,
        "Data Science" => 78,
        "Computer Graphics" => 30
    ]
]];
$course5 = ["MBA" => [
    "Sourav" => [
        "Economics" => 45,
        "Computer" => 50,
        "E-Commerce" => 30
    ],
    "Karan" => [
        "Economics" => 70,
        "Computer" => 80,
        "E-Commerce" => 90
    ]

]];

echo "Hotel Management => Adi "."<br>";
echo "Subject => FMB => ".$course3["HM"]["Adi"]["FMB"]."<br>";
echo $course3["HM"]["Adi"]["Reception"]."<br>";

?>