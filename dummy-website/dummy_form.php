<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Secure Web</title>
</head>
<body>
    <?php
        if(isset($_POST['sub'])) {
            $username = $_POST['input1'];
            $password = $_POST['input2'];

            // Correct user and password combinations

            $account_database = array(
                "admin" => "administrator",
                "snowden" => "password",
                "joe" => "america",
                "n00bslayer" => "awesome!",
                "abby" =>"123456",
                "obama" => "beatbox",
                "grandma" => "iloveyou",
                "user" => "hotdog123",
                "garcia" => "Arizona",
                "lagirl" => "hollywood",
                "albert" => "e=mc^2",
                "gregheffley" => "famous",
                "panda" => "China123",
                "romeo" => "Juliet",
                "juliet" => "Romeo1",
                "alexander" => "iamgreat",
                "it" => "YoullFLoat2",
                "wolf" => "Qwerty",
                "angelgabriel" => "messenger",
                "freddie" => "mamaqueen",
                "iamironman" => "NanoTech%ily3000",
                "peter_parker" => "gr8Powergr8Responsability",
                "mark" => "000000",
                "disney" => "Disneyworld",
                "peter_griffin" => "Peterisawesome",
                "drgeller" => "Wewereonabreak"
            );

            foreach ($account_database as $account_username =>
            $account_password) {
                if ($username == $account_username and $password ==
                $account_password ) {
                    echo "Welcome!";
                } else {
                    echo "Incorrect username and/or password";
                }
            }
        }
     ?>

     <form method="POST">
         Username: <input type="text" name="input1">
         Password: <input type="text" name="input2">
         <input type="submit" name="sub" value="Submit">
     </form>
</body>
</html>
