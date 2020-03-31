<?php

// dummy network commection

class LoadExecption extends Exception{}
class NetworkException extends Exception{} 
class DiskFullException extends Exception{} 

interface NetworkStorage
{
    function connect();
    function getName();
    function report($data);
    function successMsg();
}

class SuccessAlert{
    function successMsg(){
        return "Connect with ".$this->getName();
    }
}

class Mysql extends SuccessAlert implements NetworkStorage
{
    function connect()
    {
        throw new LoadExecption;
    }
    function getName()
    {
        return "Mysql";
    }
    function report($data){
        echo $data['error'];
    }
    
}

class Postgraysql extends SuccessAlert implements NetworkStorage
{
    function connect()
    {
        //throw new LoadExecption;
        return $this;
    }
    function getName()
    {
        return "Postgraysql";
    }
    function report($data){
        echo $data['error'];
    }
}

class Radis extends SuccessAlert implements NetworkStorage
{
    function connect()
    {
        throw new DiskFullException;
    }
    function getName()
    {
        return "Radis";
    }
    function report($data){
        // i can send a mail to data base adminstrator by get report
        echo $data['error'];
    }
}

class ConnnectionPool
{
    private $storage;
    private $connection;

    function __construct(){
        $this->storage = array();
        $this->connection = null;
    }

    function addServer($server)
    {
        array_push($this->storage,$server);
    }

    function getConnection()
    {
        foreach($this->storage as $storage){
            try{
                $this->connection = $storage->connect();
            }catch(LoadExecption $e){
                echo $storage->getName() ." have huge load \n";
                $storage->report(array("ip" => "123.456.788","error"=>"Load\n"));
            }catch(NetworkException $e){
                echo $storage->getName() ." network ip busy \n";
            }catch(DiskFullException $e){
                echo $storage->getName() ." have disk full \n";
            }

            if($this->connection) break;
        }

        if($this->connection) return $this->connection;
        return 0;
    }

}

$mysql = new Mysql;
$pg = new Postgraysql;
$radis = new Radis;

$cp = new ConnnectionPool;
$cp->addServer($mysql);
$cp->addServer($pg);
$cp->addServer($radis);

$connection = $cp->getConnection();
print_r($connection->successMsg());