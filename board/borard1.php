<?php

function double($x, $y) {
  return 2 * $x + $y;
}

echo call_user_func('double', 3,4);