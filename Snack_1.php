<?php
    $partite=[
        "partita_1"=>[
            "homeTeam" => "L.A Lakers",
            "ptHome"=>86,
            "awayTeam" => "Chicago Bulls",
            "ptAway"=>90,
        ],
        "partita_1"=>[
            "homeTeam" => "Oklahoma City Thunder",
            "ptHome"=>127,
            "awayTeam" => "New York Knicks",
            "ptAway"=>123,
        ],
        "partita_2"=>[
            "homeTeam" => "Detroit Pistons",
            "ptHome"=>94,
            "awayTeam" => "Washington Wizards",
            "ptAway"=>103,
        ],
        "partita_3"=>[
            "homeTeam" => "Sacramento Kings",
            "ptHome"=>85,
            "awayTeam" => "Brooklyn Nets",
            "ptAway"=>109,
        ],
        "partita_4"=>[
            "homeTeam" => "Golden State Warriors",
            "ptHome"=>104,
            "awayTeam" => "L.A. Clippers",
            "ptAway"=>119,
        ]
    ];

    for ($i=1; $i <=count($partite) ; $i++) { 
        echo "<div>".$partite["partita_$i"]["homeTeam"]
            ." - ".
             $partite["partita_$i"]["awayTeam"]
            ."  ||  ".
             $partite["partita_$i"]["ptHome"]
            ." - ".
            $partite["partita_$i"]["ptAway"]
            ."<div/>";
    }