<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problem 2</title>
</head>
<body>
    

    <!-- php -->
    <?php

        function evaluate($name,$attendance,$hygiene,$rating)
        {
            if(($attendance < 80 and $hygiene < 50) or ($hygiene < 50 and $rating < 2))
            {
                echo "$name, You are fired from the Rojan Kirana Passal!";
            }else{
                echo "Not fired for now.";
            }

            echo "<br>";
        }

        evaluate('Kusal Karki',20,70,3);
        evaluate('Bj',60,20,3);
    ?>
</body>
</html>