<?php
class model
{
     protected $nama = ['Rizky Agung Prayogi', 'Fadel Ahmad', 'Lorenzo Laridho Sembiring', 'Haikal Hanis'];
     protected $nim = [1201200027, 1201200028, 1201200023, 1201202029];
     public function getNama(int $i)
     {
          return $this->nama[$i];
     }

     public function getNim(int $j)
     {
          return $this->nim[$j];
     }

     public function setNama(string $nama)
     {
          $this->nama = $nama;
     }
     public function setNim(string $nim)
     {
          $this->nim = $nim;
     }
}
