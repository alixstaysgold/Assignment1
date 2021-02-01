<?php
$firstname = $_GET['first'];
$lastname = $_GET['last'];
$age = $_GET['age'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

    <header><?php echo "The date is " . date("m-d-Y"); ?></header>
<body>
    <h2><?php if (!empty($firstname) && !empty($lastname))
    {
        echo "Hello! My name is " . htmlspecialchars($firstname) . " " . htmlspecialchars($lastname) . ".";}
        
        else {
            echo "Missing firstname or lastname parameters";
        }?></h2>

        <h3><?php if (!empty($age) && $age >= 18) {
             echo "I am " . htmlspecialchars($age) . " " . "years old and I am old enough to vote in the United States." . "<br>" .
             "That means I am at least " . htmlspecialchars($age)*365 . " " . "days old.";}

             else if( filter_var($age, FILTER_VALIDATE_INT) === false ){
                echo "Please enter a numeric age.";
            }

            else if (!empty($age<18) && $age <18){
                echo "I am " . htmlspecialchars($age) . " " . "years old and I am not old enough to vote in the United States" . "<br>" .
                "That means I am at least " . htmlspecialchars((int)$age)*365 . " " . "days old.";
            }
        ?></h3>
        
</body>
</html>