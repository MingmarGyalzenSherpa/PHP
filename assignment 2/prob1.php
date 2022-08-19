<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problem 1</title>
</head>
<body>
    

    <!-- php here -->
    <?php

        function evaluate($name, $attendance,$hygiene,$rating){

            if($attendance<80 or $hygiene < 50 or $rating < 2){
                echo "$name, You are fired from the Rojan Kirana Passal!";
            }else{ 
                echo "Not Fired for now";
            }

            echo "<br>";
        }
        evaluate('Kusal Karki',20,70,3);
    ?>

</body>
</html>