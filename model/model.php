<?php
class model
{
     protected $nama = ['Rizky Agung Prayogi', 'Fadel Ahmad', 'Lorenzo Laridho Sembiring', 'Haikal Hanis'];
     protected $nim = [1201200027, 1201200028, 1201200023, 1201200030];
     public function getNama()
     {
          return $this->nama;
     }

     public function getNim()
     {
          return $this->nim;
     }
     
     public function setNama(string $nama){
          $this->nama = $nama;
     }
     public function setNim(string $nim){
          $this->nim = $nim;
     }
}
