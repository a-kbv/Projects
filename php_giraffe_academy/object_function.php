<?php
class Student{
    var $name;
    var $major;
    var $gpa;

    function __construct($name, $major, $gpa){
        $this->name = $name;
        $this->major = $major;
        $this->gpa = $gpa;

    }
    function has_honors(){
        if ($this->gpa >=3.5){
            return "$this->name has Honors";
        }
        return "$this->name doesn't have Honors";
    }

}
$stud1 = new Student("Jim", "Business", 2.8);
$stud2 = new Student("Pam", "Art", 3.6);
echo $stud1->has_honors() ."<br>";
echo $stud2->has_honors() ."<br>";


?>