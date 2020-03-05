<?php

/**
 *  -- String literal
 * single quote
 * double quote
 * heredoc
 * nowdoc
 */

$name = "Anik";

echo 'my name is $name \n'.PHP_EOL;
echo "my name is $name\n";

//heredoc

$heredoc = <<<MARKER
Hi

I AM
$name \n

MARKER;

echo $heredoc;

$nowdoc = <<<'M'
HI
I
$name \n
M;

echo $nowdoc.PHP_EOL;

$count = 2;

$food = "CheesBurger";

echo "Here are $count $count == 1 ? $food : {$food}s"; // not as like my exception!!
echo "\n";
echo "{ $food }";

$catfood = new stdClass();
$catfood->name = "Cheeseburgers";
$cat = new stdClass();
$cat->canhaz = [$catfood];
// echo "$cat->canhaz[0]->name"; // array to string conversion
echo "{$cat->canhaz[0]->name}"; // Cheeseburgers