// belajar encapsulation oop - php 
<?php 
   class Fruit { 
      private $nama;
      private $warna;
      private $harga;

      // membuat properti __construct
      function __construct($nama, $warna, $harga) {
         $this->nama = $nama;
         $this->warna = $warna;
         $this->harga = $harga;
      }

      // membuat function buah
      function buah() {
         return $this->nama." - ".$this->warna." - ".$this->harga;
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
   $hasilBuah = new Fruit("Apel", "Coklat Kehitaman", "5000");
   
   // how to print using encapsulation technique
   echo $hasilBuah->buah();
   
?>