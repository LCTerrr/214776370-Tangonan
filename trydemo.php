<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    #1
    $i = 1;
    while ($i < 11) {
        echo "$i ";
        $i++;
    }
    #2
    $i = 0;
    while ($i < 20 ) {
        $i+=2;
        echo "<br>$i";
    }
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <title>Password Validator</title>
        </head>
    </html>
    <body>
        <h2>Acitivity2</h2>
        <form method="post" action=" ">
            <label>Please enter the password:</label>
            <input type="password" name = "password">
            <input type = "submit" value="Submit">
        </form>
    </body>

    <?php
    $correct_password = "password123";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $input_password = $_POST['password'];
        if($input_password === $correct_password){
            echo "Access Granted. <br>";
        }else{
            echo "Incorrect password.";
        }
    }
    ?>

    <?php
    #4
    $number = 7;
    echo "<br>Multiplication Table of $number:\n";
    for ($i = 1; $i <= 10; $i++) {
        $result = $number * $i;
        echo "<br> $number x $i = $result";
        echo "<br>";
    }

    #5
    echo "Numbers from 1 to 10 (skipping 5 and stopping at 8):\n";
    for ($i = 1; $i <= 10; $i++) {
        if($i == 5) {
            continue;
        }
        if($i == 8) {
            break;
        }
        echo "<br>$i";
    }

    #6
    $favoriteMovies = [
        "1. Unhappy for You ",
        "2. The Shawshark Redemption ",
        "3. Interstellar ",
        "4. The Dark Knight ",
        "5. Pulp Fiction "
    ];

    echo "<br>My Favorite Movies:\n";
    foreach ($favoriteMovies as $movie) {
        echo "<br>$movie";
    }

    #7
    echo "<br>Student Info";
    $studentInfo = [
        "Name" => "Lester Tangonan",
        "Age" => "22",
        "Grade" => "A",
        "City" => "Baguio"
    ];
    foreach ($studentInfo as $key => $value) {
        echo "<br>$key: $value\n";
    }
    ?>
</body>
</html>