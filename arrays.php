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
            echo $people[2]; // Get Catherine

            //! LOOP: Output each name
            foreach($people as $person){
                echo $person . ' ';
            }

        ?>

    </body>
</html>