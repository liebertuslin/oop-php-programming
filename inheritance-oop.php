<?php 

   class Fruit {
      private $name;
      private $color;
      private $price;

      function __construct($name, $color, $price) {
         $this->name = $name;
         $this->color = $color;
         $this->price = $price;
      }

      function buah() {
         return $this->name." - ".$this->color." - ".$this->price;
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

      function set_price($price) {
         $this->price = $price;
      }

      function get_price() {
         return $this->price;
      }
   }

   $hasil = new Fruit("Mangga", "Hijau", "15000");

   echo $hasil->buah();
   

?>