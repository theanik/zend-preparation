<?php

class Student
{
    public $name;
    public $age;
    function __construct(string $name,int $age)
    {
        if(3 >= strlen($name)){
           throw new Exception("Name must be uper 3 char \n",101); 
        }
        if(4 > $age){
            throw new Exception("Invalid age \n",102);
        }elseif(25 < $age){
            throw new Exception("Invalid age \n",102-1);
        }
        $this->name = $name;
        $this->age = $age;
    }
}

try{
    $anik = new Student("ANIK",35);
    echo "It show if there are no exception \n";
}catch(Exception $e){
    
    echo $e->getMessage()." : ".$e->getCode();
}finally{
    echo "This block are always run \n";
}



echo "Code execution continue...... \n";
echo "Code execution continue...... \n";
echo "Code execution continue...... \n";
echo "Code execution continue...... \n";


function test(){
    try{
        // if here get a return statement this code will still executed the finally block
        throw new Exception("Hudaiii Exception \n");
    }catch(Exception $e){
        // if here get a return statement this code will still executed the finally block
        return 'Catch'; // this return value are not contain 
        echo $e->getMessage();
    }finally{
        // here only contain the finally block return value.
        return "finally!!";
    }
}

echo test();
