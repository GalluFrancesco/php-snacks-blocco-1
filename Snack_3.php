<?php
    $posts = [

        '10/01/2019' => ['Testo post 1','Testo post 2'],
        '10/02/2019' => ['Testo post 3'],
        '15/05/2019' => ['Testo post 4','Testo post 5','Testo post 6']
    ];

    foreach ($posts as $key => $value) {
        for ($i=0; $i < count($value); $i++) { 
            echo $key."<br>";
            echo $value[$i]."<br>";
        }
    }