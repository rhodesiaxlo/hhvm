<?php
/* Prototype  : mixed current(&array $array_arg)
 * Description: Return the element currently pointed to by the internal array pointer
 * Source code: ext/standard/array.c
 * Alias to functions: pos
 */

/*
 * Test how current() behaves with muti-dimensional and recursive arrays
 */

echo "*** Testing current() : usage variations ***\n";

echo "\n-- Two Dimensional Array --\n";
$multi_array = array ('zero', array (1, 2, 3), 'two');
echo "Initial Position: ";
var_dump(current(&$multi_array));

echo "Next Position:    ";
next(&$multi_array);
var_dump(current(&$multi_array));

echo "End Position:     ";
end(&$multi_array);
var_dump(current(&$multi_array));

echo "\n-- Access an Array Within an Array --\n";
//accessing an array within an array
echo "Initial Position: ";
var_dump(current(&$multi_array[1]));

echo "===DONE===\n";
