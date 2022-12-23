<?php 

   // kelas
   class Fruit {
      // encapsulation
      private $name;
      private $color;

      // method/function
      function introduce() {
         return $this->name . " - " . $this->color;
      }

      function set_name($name) {
         $this->name = $name;
      }

      function get_name() {
         return $this->name;
      }

      function set_color($color) {
         $this->color = $color;
      }

      function get_color() {
         return $this->color;
      }
   }

   // objek
   $apple = new Fruit();
   $apple->set_name("Apel");
   $apple->set_color("Merah");

   // cara assignment/print
   echo $apple->get_name();
   echo $apple->get_color();
?>