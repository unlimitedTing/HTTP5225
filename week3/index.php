<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>week3</title>
</head>
<body>
    <?php 
        function checkMagicNumber($number){
            if($number %(3*5)==0){
                echo "FizzBuzz";
            }
            elseif($number%3==0){
                echo "Fizz";
            }
            elseif($number%5==0){
                echo "Buzz";
            } 
            else{
                echo $number;
            }
        }

        checkMagicNumber(rand(1,50));
    ?>
</body>
</html>