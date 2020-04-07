<?php

class PrClass
{
    private function pri()
    {
        return "This is pirvate data";
    }

    protected function pro()
    {
        return $this->pri();
    }
}

class PbClass extends PrClass
{
    function getData()
    {
        return $this->pro();
    }
}

$pc = new PbClass();
echo $pc->getData();