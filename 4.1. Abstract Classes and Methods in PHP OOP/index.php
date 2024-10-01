<?php
    abstract class technoloagyVillage{
        public function __construct($name)
        {
            $this->tutorial = $name;
        }
        abstract public function message();
        
    }
    class phptutor extends technoloagyVillage{
        public function message()
        {
            return "Thanks for watching my".$this->tutorial."video";
        }
    }
    $php = new phptutor('PHP');
    echo $php->message();

    $OOP = new phptutor('oop');
    $OOP->message();
?>
