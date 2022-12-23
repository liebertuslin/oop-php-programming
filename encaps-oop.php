// belajar encapsulation oop - php 
<?php 
   class Fruit { 
      
      // membuat properti yang bersifat private
      private $nama;
      private $warna;

      // membuat function buah
      function buah() {
         return $this->nama." - ".$this->warna;
      }

      // membaut nilai inputan nama
      function set_nama($nama) {
         $this->nama = $nama;
      }

      // membuat penampung nilai keluaran nama
      function get_nama() {
         return $this->nama;
      }

      function set_warna($warna) {
         $this->warna = $warna;
      }

      function get_warna() {
         return $this->warna;
      }
   }

   // membuat objek baru menggunakan variabel yang baru
   $keluaranBuah = new Fruit();
   $keluaranBuah->set_nama("Manggis")." - ";
   $keluaranBuah->set_warna("Colkat Kehitaman");
   
   // how to print using encapsulation technique
   echo $keluaranBuah->get_nama();
   echo $keluaranBuah->get_warna();
   
?>