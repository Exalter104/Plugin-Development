<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>

<body>
    <form method="post">
        <h4>Associative Array to Find Job Title</h4>
        <label>Enter a Exalter</label><br>
        <input type="text" name="roles" required>
        <input type="submit" value="Submit">


    </form>
</body>

</html>
<?php



//Associative Array : a array which having a key-value pair

$exalters = array("Ikram" => "CEO", "Saqib" => "Acting CTO", "Sheraz" => "Adminstrative", "Sughra" => "Project Manager", "Sarran" => "AI Team Lead", "Mueen" => "Mobile Team", "Bilal" => "Design Team Lead",);

$jobTitle = $exalters[$_POST["roles"]];
echo "Your job title is  : {$jobTitle}";





?>