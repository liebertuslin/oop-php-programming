<?php 

   // kelas
   class Fruit {
      // properti
      public $name;
      public $color;

      // method/function
      function introduce() {
         return $this->name . " - " . $this->color;
      }
   }
   // objek
   $apple = new Fruit();
   $apple->name = "Apel";
   $apple->color = "Merah";

   echo $apple->introduce();
?>

<?php
   class handPhone {
      // membuat properti
      public $nama;
      public $merk;

      // membuat method/function
      function smartPhone() {
         return $this->nama . " - " . $this->merk;
      }

   }
   
   // membuat objek
   $hp = new handPhone();
   $hp->nama = "Vivo Y12i";
   $hp->merk = "Vivo";
   
   echo $hp->smartPhone();
   
?>