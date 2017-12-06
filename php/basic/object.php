<!DOCTYPE html>
<html>
<body>
<?php
class Car
{
  var $color;
  function Car($color="green") {
    $this->color = $color;
  }
  function what_color() {
    return $this->color;
  }
}
$car =new Car();
echo $car.what_color;
?>


</body>
</html>