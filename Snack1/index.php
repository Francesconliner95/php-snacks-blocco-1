<?php

$metches = [
    [
        'data' => '15/05/20',
        'team_1' => [
            'name' => 'Lakers',
            'points' => '60',
            'home_team' => true,
        ],
        'team_2' => [
            'name' => 'Toronto Raptors',
            'points' => '55',
            'home_team' => false,
        ],
    ],
    [
        'data' => '16/05/20',
        'team_1' => [
            'name' => 'Golden State Warriors',
            'points' => '70',
            'home_team' => true,
        ],
        'team_2' => [
            'name' => 'Boston Celtics',
            'points' => '45',
            'home_team' => false,
        ],
    ],
    [
        'data' => '17/05/20',
        'team_1' => [
            'name' => 'Warriors',
            'points' => '74',
            'home_team' => true,
        ],
        'team_2' => [
            'name' => 'NYC',
            'points' => '52',
            'home_team' => false,
        ],
    ],
    [
        'data' => '18/05/20',
        'team_1' => [
            'name' => 'Tiger',
            'points' => '24',
            'home_team' => true,
        ],
        'team_2' => [
            'name' => 'Slayer',
            'points' => '47',
            'home_team' => false,
        ],
    ],

];
// var_dump($metches);
//localhost:8888/boolean/snaks/Snack1

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <title></title>
    </head>
    <body>
        <div class="container">
            <section>

            <h2>Matches List</h2>
                <ol>

                    <?php

                    for ($i=0; $i <count($metches); $i++) {
                        echo "<li>"

                                .$metches[$i]['data']." "

                                ."<span>"

                                    .$metches[$i]['team_1']['name']
                                    ." - "
                                    .$metches[$i]['team_2']['name']

                                    ." | "

                                    .$metches[$i]['team_1']['points']
                                    ." - "
                                    .$metches[$i]['team_2']['points']

                                ."</span>

                            </li>";
                    }
                    ?>

                </ol>
            </section>
        </div>
    </body>
</html>
