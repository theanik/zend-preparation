<?php 


class Test {
    protected $items = array();

    public function __construct()
    {
        $this->items[] = array($this, 'callBackOne');
        $this->items[] = array($this, 'callBackTwo');
    }

    public function callBackOne()
    {
        echo __METHOD__ . ' has been called as a callback.';
    }

    public function callBackTwo()
    {
        echo __METHOD__ . ' has been called as a callback.';
    }   

    public function getItems()
    {
        return $this->items;
    }
}

$o = new Test();
$itemLists = $o->getItems();


print_r($itemLists[0]());
print_r($itemLists[1]());