<?php

class ConnectionException extends Exception{}
class NetworkException extends Exception{}

class MyServer
{
    private $connectionData = [];
    private $networkData = [];

    function __construct(array $connectionData, array $networkData){
        // check conection
        if($connectionData['host'] === ''){
            throw new ConnectionException("Invalid Host ",101);
        }
        if($connectionData['user'] === ''){
            throw new ConnectionException("Invalid User ",102);
        }
        if($connectionData['password'] === ''){
            throw new ConnectionException("Invalid password ",103);
        }

        //check network

        if($networkData['ip'] === ''){
            throw new NetworkException("Invalid User ",201);
        }
        if($networkData['port'] === ''){
            throw new NetworkException("Invalid password ",202);
        }

        $this->connectionData = $connectionData;
        $this->networkData = $networkData;

    }

    function getDetails()
    {
        var_dump($this->connectionData);
        var_dump($this->networkData);
    }

}

$connection_data = array(
    'host' => 'myhost',
    'user' => 'anik',
    'password' => ''
);

$network_data = array(
    'ip' => '07.09',
    'port' => '79'
);


try{
   
    $mys = new MyServer($connection_data,$network_data);
    
}catch(ConnectionException $e){
    echo $e->getMessage()." : ".$e->getCode() . PHP_EOL;
}catch(NetworkException $e){
    echo $e->getMessage()." : ".$e->getCode() . PHP_EOL;
}catch(Exception $e){
    echo $e->getMessage()." : ".$e->getCode() . PHP_EOL;
}finally{
    echo "Clerar cache";
}






