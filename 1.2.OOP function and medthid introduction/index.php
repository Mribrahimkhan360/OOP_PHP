<?php
class lastName{
	public $name;
	public $age;
	public $address;

	function info($fname,$age,$address)
	{
		$this->name = $fname;
		$this->age = $age;
		$this->address = $address;
		return "Name :".$this->name."<br> Age :".$this->age."<br> Address :".$this->address;
	}
}
//$ibrahim = new main();
$l = new lastName();

echo $l->info('Khan','24','Dhanmondi'); // Output the value