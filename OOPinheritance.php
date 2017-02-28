<?php

/**
 * abstract class
 */
abstract class maba
{
protected $nama;
  public function __construct($namamah = 'ari')
  {
    $this->nama = $namamah;
  }

  public function getNamaMaba()
  {
    return $this->nama;
  }

// method abstract tidak perlu pendeklarasian body method
  abstract protected function getNim();
}

/**
 * turunan maba
 */
class identitas extends maba
{
  protected $nim = 1104405053;
  public function getNim()
  {
    return $this->nim;
  }
}


/**
 * class Mahasiswa
 */
class Mahasiswa
{
protected $nama = 'ari';

  public function getNamaMahasiswa($nama_mahasiswa)
  {
    $this->nama = $nama_mahasiswa;

    return $this->nama;
  }
}


/**
 * class dosen pembimbing
 */
class DosenPembimbing extends Mahasiswa
{
  protected $namaDosenPembimbing;

  public function NamaDosennya($nama)
  {
      return $this->namaDosenPembimbing = $nama;
  }
}

/**
 * kelas mahasiswa
 */
class ruangKelas extends Mahasiswa
{
  protected $nama_kelas;
  public function getNamaMahasiswa($nama_kelas)
  {
    return $this->nama_kelas = $nama_kelas;

  }
}



// $en = new DosenPembimbing;
// $en->NamaDosennya("pak priono");
// var_dump($en);

// memanggi method sendri
echo (new DosenPembimbing)->NamaDosennya("pak priono/");
// memamnggil method parent di method turunan
echo (new DosenPembimbing)->getNamaMahasiswa("ari/");
// memanggil method ruang kelas sendiri
echo(new ruangKelas)->getNamaMahasiswa("DH101/");

// objek kelas abstract harus memanggil method abstract yang sudah tersedia di parenttnya
// kalau tidak maka error
// jika ingin menambahkan suatu method bebas maka hapuslah method abstract
echo (new identitas())->getNim();
 ?>
