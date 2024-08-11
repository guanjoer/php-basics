<?php
class Hello {
	public $name = "Richard";

	function say_hello() {
		return $this->name."님 안녕하세요.";
	}
}

$message = new Hello();
echo $message->say_hello();

echo "<br>";

echo var_dump($message);


?>