<?php

   // pembuatan class
   class Akademik {

      // pembuatan properti
      public $nama;
      public $npm;
      public $jurusan;

      // pembuatan function/method 
      function mahasiswa() {
         return "Nama ".$this->nama.", npm ".$this->npm.", jurusan ".$this->jurusan;
      }
   }

   // membuat objek baru menggunakan konsep oop
   $mahasiswas = new Akademik();
   $mahasiswas->nama = "Libertus";
   $mahasiswas->npm = "17412208";
   $mahasiswas->jurusan = "Sistem Informasi";

   echo $mahasiswas->mahasiswa();

?>