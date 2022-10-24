<?php
 $first_string = "apple";
 $second_string = "pen";
 $new_string = $first_string . $second_string;

 echo "<h2>noice</h2>";
 echo "<br>";
 echo "more noice";
 echo "<br>";
 echo "penpinapple" . $new_string;

 $print_result = true;

 function add_numbers($number_one, $number_two, $number_three = 0) {
     global $print_result;
     if ($print_result) {
         echo $number_one + $number_two + $number_three;
     }
     return $number_one + $number_two + $number_three;
 }
 

 //add_numbers(1, 2);
 //add_numbers(1, 2, 3,);

    //echo $_GET["dark_mode"];

   // echo $_GET["language"];

    //if ($_GET["drak_mode"] == 1) {
     //   echo "style>body { background-color: black; color; white; }</style>";
    //}
 ?>