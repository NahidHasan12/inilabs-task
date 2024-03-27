<!DOCTYPE html>
<html>
<head>
	<title>Task-1 : Interface Implementation</title>
</head>
<body>
<h3>Task-1:</h3>

<h4>Output:</h4>

<?php
	
	// Circle Class
	class circle{

		private $radius;

		public function __construct($radius){
			$this->radius = $radius;
		}

		public function get_radius(){
			return $this->radius;
		}

		public function calculate_area(){
			return pi() * $this->radius * $this->radius;
		}
	}

	// Rectangle Class
	class rectangle{

		private $length;
		private $width;

		public function __construct($length, $width){
			$this->length = $length;
			$this->width = $width;
		}

		public function get_length(){
			return $this->length;
		}

		public function get_width(){
			return $this->width;
		}

		public function calculate_area(){
			return $this->length * $this->width;
		}

	}

	$circle = new circle(5);
	echo "Circle Area : " . $circle->calculate_area() . "<br>"; 

	$rectangle = new rectangle(4,6);
	echo "Rectangle Area : " . $rectangle->calculate_area();


?>
</body>
</html>