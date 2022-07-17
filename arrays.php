<html>
    <head>
        <title>Hello World</title>
    </head>
    <body>
        
        <?php

            // $person1 = "Alice";
            // $person2 = "Bob";

            $people = array("Alice", "Bob", "Catherine");

            // print_r($people); // To Print Array
            // echo $people[2]; // Get Catherine

            $numbers = array(5, 3, 7);
            $sum = 0;

            //! LOOP: Output each name
            // foreach($people as $person){
            //     echo $person . ' ';
            // }

            foreach($numbers as $number){
                $sum = $sum + $number;
            }

            echo $sum;
        ?>

    </body>
</html>