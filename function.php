<?php

# function familyName($fname, $year) {
#   echo ucwords("$fname bagaskara. Born in $year"). PHP_EOL;
# }
# 
# familyName("\tindra", "1976");
# familyName("\tprima", "1980");
# familyName("\tavi", "2008");
# familyName("\trovi", "2010");
# familyName("\tcyra", "2020");


# function addNumbers(int $a, int $b) {
#   return $a + $b;
# }
# echo addNumbers(5, "5 days"); 
# // since strict is NOT enabled "5 days" is changed to int(5), and it will return 10


# function adding_values(&$value) {
#   $value += 5;
# }
# 
# $num = 2;
# adding_values($num);
# echo $num. PHP_EOL;
# 
# function add ($x, $y = 1) { // $y is optional and defaults to 1
#     $result = $x + $y;
#     return $result;
# }
# echo add(4). PHP_EOL; // => 5
# echo add(4, 2). PHP_EOL; // => 6  // this will be change the $y varitable from the default is 1 to 2  // so which was before is 4 + 1 to 4 + 2 

$inc = function ($x) {
    return $x + 1;
};

echo $inc(2); // => 3

# function foo ($x, $y, $z) {
#     echo "$x - $y - $z";
# }
# 
# // Functions can return functions
# function bar ($x, $y) {
#     // Use 'use' to bring in outside variables
#     return function ($z) use ($x, $y) {
#         foo($x, $y, $z);
#     };
# }
# 
# $bar = bar('A', 'B');
# $bar('C'); // Prints "A - B - C"



?>
