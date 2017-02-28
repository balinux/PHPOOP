<?php

/**
 * membuat class mahasiswa
 */
class mahasiswa
{
  public $nama;

  public $umur;

  function __construct($nama)
  {
    $this->nama= $nama;
  }

  public function getAge()
  {
     return $this->umur;
  }

  public function setAge($umurari)
  {
    if ($umurari < 18) {
      throw new Exception("Umur pak ari masih kurang", 1);
    }

    $this->umur = $umurari;
  }
}

$mahasiswa_baru = new mahasiswa("ari nur saputro");
$mahasiswa_baru->setAge(30);
var_dump($mahasiswa_baru);
 ?>
