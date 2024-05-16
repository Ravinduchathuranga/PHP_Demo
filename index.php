<?php

class student
{
    public $name;   //inside class, outside class, subclass
    protected $age; //inside class and subclass
    private $roll;  //inside class

    public function __construct($name, $age, $roll)
    {
        $this->name = $name;
        $this->age = $age;
        $this->roll = $roll;
    }

    public function show()
    {
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
        echo "Roll: " . $this->roll . "<br>";
    }
}

$student1 = new student("John", 20, 101);
$student1->show();

?>