<?php
class MyCustomException extends Exception {}
class InvalidArgumentException1 extends Exception {}

function doStuff0() {
    try {
        throw new InvalidArgumentException1("You are doing it wrong!111111111111", 11211);
    } catch(Exception $e) {
        throw new MyCustomException("Something happened11111111111", 91111, $e);
    }
}

function doStuff() {
    try {
        doStuff0();
    } catch(Exception $e) {
        throw new MyCustomException("Something happened", 911, $e);
    }
}


try {
    doStuff();
} catch(Exception $e) {
    do {
        printf("%s (%d) [%s]\n",$e->getMessage(), $e->getCode(), get_class($e));
    } while($e = $e->getPrevious());
}


