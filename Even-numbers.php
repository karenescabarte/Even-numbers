<?php 
    echo "<h1>Even numbers</h1>";
    echo "<p>Create a program that prints all the even numbers from 1 to 1000. Use the standard for loop for this exercise and don't create any arrays.</p>";

    for($num = 0; $num <=1000 ; $num++){
        if($num %2 == 0){
            echo $num . " ";
        }
    }
?>