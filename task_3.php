<!DOCTYPE html>
<html>
<head>
	<title> Task-3 : Polymorphism</title>
</head>
<body>
<h3>Task-3:</h3>

<h4>Output:</h4>

<?php
	
	// Supper Class Animal
	class Animal{
		// Methood for making sound
		public function make_sound(){
			echo "some generic soound";
		}
	}	

	// Dog subClass of Animal
	class Dog extends Animal{
		// Override the make_sound method
		public function make_sound(){
			echo "Vow Vow...!!";
		}
	}

	//Cat subClass of Animal
	class Cat extends Animal{
		// Override the make_sound method
		public function make_sound(){
			echo "Meow Meow...!!";
		}
	}

	//Cow subClass of Animal
	class Cow extends Animal{
		// Override the make_sound method
		public function make_sound(){
			echo "Hamba Hamba...!!";
		}
	}

	// Function to make Animals sound
	function make_animal_sound(Animal $animal){
		$animal->make_sound();
	}

	// Create instance of animal
	$Dog = new Dog();
	$Cat = new Cat();
	$Cow = new Cow();

	// Animal Sound using polymorphism
	 echo "Dog : ";
	 make_animal_sound($Dog); // Output : Vow Vow...!!

	 echo "<br> <br> Cat : ";
	 make_animal_sound($Cat); // Output : Meow Meow...!!

	 echo "<br> <br> Cow : ";
	 make_animal_sound($Cow); // Output : Hamba Hamba...!!

?>



</body>
</html>