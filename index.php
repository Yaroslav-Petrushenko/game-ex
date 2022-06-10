<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Гра екстрасенс</title>
</head>
<body>
    <h1>Спробуй свої сили</h1>
    <form method="POST" action="index.php">
    <input type="hidden" name="numberGame" value="0">
    <input type='hidden' name='numChoose' value="<?php echo($numChoose); ?>">    
        <?php
            if (isset($_POST['newGame'])) { //start new game
                header("refresh: 0;");   
            }

            if (isset($_POST['password'])) { //random
                $password = $_POST['password'];
            } else {
                $password = rand(1, 10);
            }

            if ($_POST){
                if(isset($_POST['go'])) {
                    
                    $choose = $_POST['choose'];
                    if ($password > $choose){
                        echo "Number is big.";
                    }   
                    if ($password < $choose){
                        echo "Number is small.";
                    } 
                    if ($password == $choose){
                        echo ("<p>You are win number is $password</p>");
                        } else {
                            echo ("<p>try again</p>");
                        }
                        //echo ("<p>$password</p>");
                         
                } 
            }     
            
            
                    echo ("Choose your number!");
                    echo("<p>");
                        echo ("<select name = 'choose'>");
                            for ($i = 1; $i <= 10; $i++){
                                echo ("<option value='".$i."'>".$i."</option>");
                            }
                        echo ("<select>");
                    echo("</p>");
                                
                ?>       
         
        <input type='hidden' name='password' value="<?php echo($password); ?>">
        <input type="submit" name="go" value="go" />
        <p><button class="button" type="submit" name="newGame">Start new game</button></p>

    </form>    

</body>
</html>