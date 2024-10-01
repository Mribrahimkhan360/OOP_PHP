<?php

class Man {
    public $name;
    public $age;
    public $mobile;

    public function funMobile($mobile){
        $this->mobile = $mobile;
    }

    public function __construct($fname, $age) {
        $this->name = $fname; 
        $this->age = $age;
    }
    protected function info(){
        return "Name".$this->name."Age : ".$this->age."Mobile : ".$this->mobile;
    }

 
}
class inharit extends Man{
    public $address;
    public function __construct($fname,$age,$address){
        $this->address = $address;
        $this->name = $fname; 
        $this->age = $age;
    }
    public function message(){
        return $this->name.' '.$this->age.''.$this->address;
    }
}

$myself = new inharit('Ibrahim', '23','Khan');
echo "<br>";
echo $myself->message();
echo $myself->funMobile(89);
echo "<br>";

//echo $myself->info();

?>
