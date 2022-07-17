<html>

<head>
    <title>Hello World</title>
</head>
<body>
Hello, World!

<?php

    // $myvar = "This is my variable";
    // $number = 5;
    // $number2 = 3;
    // $sum = $number + $number2;
    // $sum = $myvar + $number2; // DOESN't WORK! NOT CONCATENATION!
    $name = "William";

    // echo "Hello World!";
    // echo $myvar;
    // echo $sum;
    echo "Hello, " . $name;

    //! LOGICAL OPERATORS
    // $x and $y
    // $x or $y
    // $x == $y
    // $x !== $y


    //! Conditionals
    $loggedIn = true;
    
    if ($loggedIn == true){
        echo "You are logged in";
    }
    else{
        echo "Please log in!";
    }

?>
</body>
</html>