PHP- the destructor function -  
The destructor function is uses in PHP OOPS concept.
1. A destructor is called when the object is destructed or the script is stopped or exited.
2. If you create a __destruct() function, PHP will automatically call this function at the end of the script.
Notice that the destruct function starts with two underscores (__)!

The example below has a __construct() function that is automatically called when you create an object from a class, and a __destruct() function that is automatically called at the end of the script:
Example - 
<!DOCTYPE html>
<html>
<body>
<?php
class Fruit {
  public $name;
  public $color;
  function __construct($name) {
    $this->name = $name; 
  }
  function __destruct() {
    echo "The fruit is {$this->name}."; 
  }
}
$apple = new Fruit("Apple");
?>
 </body>
</html>
 
Or another example - 
<!DOCTYPE html>
<html>
<body>
<?php
class Fruit {
  var $name;   //properties
  var $color;
  function __construct($name, $color) {  // Methods
    $this->name = $name;
    $this->color = $color; 
  }
  function __destruct() {
    echo "The fruit is {$this->name} and the color is {$this->color}."; 
  }
}
$apple = new Fruit("Apple", "red");
?>
 </body>
</html>
