<?php
    	// call the function
         function sayHello() {
            echo "Hello<br />";
         }
         
         $function_holder = "sayHello";
         $function_holder();
         
         // functions with parameters
         function addFunction($num1, $num2) {
            $sum = $num1 + $num2;
            echo "Sum of the two numbers is : $sum";
         }
         
         addFunction(10, 20);
      ?>