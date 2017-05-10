<?php

function puzzle($number){

    switch($number){
        case 0:
            //Creating the pyramid/puzzle numbers
            //Bottom row
            for($i = 1; $i < 5; $i++){
                ${"ran" . $i} = rand(10,20);
            }

            //2nd row from below
            $num21 = $ran1 + $ran2;
            $num22 = $ran2 + $ran3;
            $num23 = $ran3 + $ran4;

            //3th row from below
            $num31 = $num21 + $num22;
            $num32 = $num22 + $num23;

            //Top row
            $num41 = $num31 + $num32;
        break;
        case 1:
            for($i = 1; $i < 5; $i++){
                ${"ran" . $i} = rand(10,80);
            }

            $num21 = $ran1 + $ran2;
            $num22 = $ran2 + $ran3;
            $num23 = $ran3 + $ran4;

            $num31 = $num21 + $num22;
            $num32 = $num22 + $num23;

            $num41 = $num31 + $num32;
        break;
        case 2:
            for($i = 1; $i < 5; $i++){
                ${"ran" . $i} = rand(10,30);
            }

            $num21 = $ran1 - $ran2;
            $num22 = $ran2 - $ran3;
            $num23 = $ran3 - $ran4;

            $num31 = $num21 - $num22;
            $num32 = $num22 - $num23;

            $num41 = $num31 - $num32;
        break;
        case 3:
            for($i = 1; $i < 5; $i++){
                ${"ran" . $i} = rand(2,4);
            }

            $num21 = $ran1 * $ran2;
            $num22 = $ran2 * $ran3;
            $num23 = $ran3 * $ran4;

            $num31 = $num21 * $num22;
            $num32 = $num22 * $num23;

            $num41 = $num31 * $num32;
        break;
    }

    showCode();
    include("snippets/pyramid.html");

}
