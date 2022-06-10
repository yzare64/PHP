<?php

interface Request
{
    public  function  execute();
}


class  ARequest implements Request
{

    public function execute()
    {

        echo 'A class';

    }
}

class BRequest implements  Request
{

    public function execute()
    {
        echo  'B class';
    }
}

class  NullRequest implements Request
{

    public function execute()
    {
        echo  'null request';
    }
}


class Client
{
    public function getRequest($command)
    {

        if($command=='A')
            return new ARequest();

        if($command=='B')
            return  new BRequest();

        return  new NullRequest();


    }
}

$client= new Client();
$request= $client->getRequest('C');
$request->execute();


