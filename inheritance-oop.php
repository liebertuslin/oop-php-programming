<?php 

   class Vehicle {
      private $name;
      private $color;

      function __construct($name, $color) {
         $this->name = $name;
         $this->color = $color;
      }

      function greet() {
         return "Hello, i am a Vehicle ".$this->color." - ".$this->name;
      }
   }

   class Car extends Vehicle {
      
   }
   
   $car = new Car("Mobil A", "Hijau");
   echo $car->greet();

?>