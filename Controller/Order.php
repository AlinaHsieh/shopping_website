<?php include_once "DB.php";

class Order extends DB{
    function __construct()
    {
        parent::__construct('orders');
    }
    
    function back(){
        $view['rows'] = $this->all();
        $this->view("./view/back/order.php",$view);
    }
    
}