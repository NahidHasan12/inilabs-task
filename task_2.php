<!DOCTYPE html>
<html>
<head>
	<title>Task-2 : Encapsulation</title>
</head>
<body>
<h3>Task-2:</h3>

<h4>Output:</h4>

<?php
	
 class Employee{
 	private $name;
 	private $salary;

 	public function __construct($name, $salary){
 		$this->name = $name;
 		$this->salary = $salary;
 	}

 	public function set_name($name){
 		$this->name = $name;
 	}

 	public function get_name(){
 		return $this->name;
 	}

 	public function set_salary($salary){
 		$this->salary = $salary;
 	}

 	public function get_salary(){
 		return $this->salary;
 	}
 }
 	 // Set employee name and salary
	 $employee_1 = new Employee("Nahid Hasan", 200);

	 // get employee name and salary
	 echo "Employee Name : ". $employee_1->get_name() . "<br>";
	 echo "Employee Salary : ". $employee_1->get_salary() . "<br>";

	 // Update employee salary
	 $employee_1->set_salary(250);
	 echo "Updated Employee Salary : $".$employee_1->get_salary() . "<br>";

?>



</body>
</html>