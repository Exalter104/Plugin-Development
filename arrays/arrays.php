<?php
//Array: a variable which can hold ore than one value at a single time.
//declaring an array
$exalter_team_array = array("Ikram Khan", "Saqib", "Sughra", "Hesham", "Sheraz", "Mueen", "Bilal", "Alyan", "Sarran", "Saim", "Fawad");
// echo "$exalter_team_array[0]";

// array_push($exalter_team_array, "Wasif");
// array_shift($exalter_team_array);
// array_pop($exalter_team_array,);
// Replace value at index 2
$exalter_team_array = array_replace($exalter_team_array, [2 => "Ayesha"]);

// Print updated array
foreach ($exalter_team_array as $team) {
    echo "$team <br>";
}
