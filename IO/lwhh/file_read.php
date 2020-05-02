
<?php
// echo dirname(__FILE__);
// echo getcwd();
$data_file = dirname(__FILE__)."/data/data.txt";


if(file_exists($data_file)){
    // echo "File Exists";
    //create a file handeller
    $fh = fopen($data_file,'r'); // 'r' mean only read mood

    $getLine = fgets($fh); // fgets function read a file until it get a new line
    echo $getLine; // vehicle

    $getLine = fgets($fh);
    echo $getLine; // Truck

    $getLine = fgets($fh, 2); // fgets function read a file until 2nd parm index
    echo $getLine; // Truck


    fclose($fh); // close file

    echo "\n\n\n";

    $fh1 = fopen($data_file, 'r');

    $getData = fgets($fh1, 6);
    var_dump($getData);

    echo "\n\n\n";

    fclose($fh1);

    $fh = fopen($data_file, 'r');

    while($line = fgets($fh,4)){
        echo $line.'-';
    }

    fclose($fh);
    echo "\n\n\n";


    $fileHandeller = fopen($data_file, 'r');

    while ($line = fgets($fileHandeller)){
        echo $line;
    }
    echo "\n\n";
    // rewind($fileHandeller);
    fseek($fileHandeller, 8);
    while ($line = fgets($fileHandeller)){
        echo $line;
    }

    rewind($fileHandeller);
    fseek($fileHandeller, -1,SEEK_END);
    while ($line = fgets($fileHandeller)){
        echo $line;
    }



}else{
    echo "This File are not Exists";
}




if(is_readable($data_file)){

    /**
     * file(file name)
     * return array by new line
     */
    $data = file($data_file);

    print_r($data);

    /**
     * file_get_contentes(file name)
     * return data as text
     */

    $data = file_get_contents($data_file);

    var_dump($data);

}