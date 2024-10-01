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
    public function info(){
        return "Name".$this->name."Age : ".$this->age."Mobile : ".$this->mobile;
    }

 
}
class inharit extends Man{
    public function message(){
        return "Thanks you vai";
    }
}

$myself = new inharit('Ibrahim', 23);
echo "<br>";
echo $myself->message();
echo $myself->funMobile(89);
echo "<br>";

echo $myself->info();

?>
