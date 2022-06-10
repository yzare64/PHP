<?php

interface  GatewayInterface
{
    public function setInfo(array $info);
    public  function pay();
}

class Zarinpal implements GatewayInterface
{
protected $info;
    public function setInfo(array $info)
    {
        $this->info=$info;
    }

    public function pay()
    {
        return $this->info;
    }
}

class Mellat implements GatewayInterface
{
protected  $info;
    public function setInfo(array $info)
    {
        $this->info=$info;
    }

    public function pay()
    {
        return $this->info;
    }
}

class Payment
{
    protected  $gateway;

    public function setGateway(GatewayInterface  $gateway)
    {
        $this->gateway=$gateway;
        
    }

    public  function  addInfo($info)
    {
    $this->gateway->setInfo($info);
    }

    public function pay()
    {
        return $this->gateway->pay();

    }



}

$payment=new Payment();
$payment->setGateway(new Zarinpal());
$payment->addInfo(['name'=>'yaser','price'=>10000]);
var_dump($payment->pay());