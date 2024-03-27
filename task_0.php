
<!DOCTYPE html>
<html>
<head>
	<title>Task-0 : Class Inheritance</title>
</head>
<body>
<h3>Task-0:</h3>
<h3>Algorithm</h3>
<p>
	step-1 : An empty stack must be taken to store the parentheses. <br>
	step-2 : Iterates over the string from the input and sends it inside the stack <br>
	step-3 : Then check if the stack is empty or if it matches the input string, if not then return false. <br>
	step-4 : If we've iterated through the entire string and the stack is empty, return true because the string is valid. <br>
	step-5 : Check the output.
</p>
<h4>Output:</h4>
<?php

	function inputData(string $data): bool {
		$stack = [];
		$mapping = [')' => '(', '}' => '{', ']' => '['];

		for($i = 0; $i < strlen($data); $i++){
			$bracketes = $data[$i];

			if(array_key_exists($bracketes, $mapping)){
				// closing bracket
				if (empty($stack) || array_pop($stack) != $mapping[$bracketes]) {
					return false;
				}
			}else{
				// opening bracket
				array_push($stack, $bracketes);
			}
		}

		//Check if there are any unclosed brackets left in the stack
		return empty($stack);
	}

	echo inputData("()[]{}") ? "True" : "False"; // Output True
	//echo inputData("([)]") ? "True" : "False";  // Output False

?>
</body>
</html>


