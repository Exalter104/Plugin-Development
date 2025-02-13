<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php With HTML</title>
</head>
<body>
    <?php
  $name = "Muhammad Sheraz";
  $age = 27;
  $cGpa = 2.61;
  $role = "Adminstrator";
  $fvrtFood = "kabab";
  $colors = "blue";

  
  ?>
    <button style="color: <?php echo $colors; ?>"><?php echo "my name is $name" ?></button>
    <button style="color: <?php echo $colors; ?>"><?php echo "and my age is $age" ?></button><br><br>
    <button style="color: <?php echo $colors; ?>"><?php echo "my cgpa is $cGpa" ?></button>
    <button style="color: <?php echo $colors; ?>"><?php echo "my Exarth role is $role" ?></button><br><br>
    <button style="color: <?php echo $colors; ?>"><?php echo "my faverit color is $colors" ?></button><br><br>
    <button style="color: <?php echo $colors; ?>">Please manage your administration</button>

</body>
</html>