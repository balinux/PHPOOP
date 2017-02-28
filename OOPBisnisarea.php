<?php

/**
 * class calon
 */
class Calonpegawai
{
protected $calon;
  function __construct($namacalon)
  {
    return $this->calon = $namacalon;
  }
}


/**
 * Nama bisnis
 */
class Bisnis
{
  protected $hrd;
  public function __construct(HRD $hrd)
  {
    $this->hrd = $hrd;
  }

  public function hire(Calonpegawai $namacapeg)
  {
    $this->hrd->add($namacapeg);
  }

  public function getMembers()
  {
    return $this->hrd->members();
  }
}

/**
 * HRD
 */
class HRD
{
  protected $member = [];

  public function __construct($member = [])
  {
    $this->member = $member;
  }
  public function add(Calonpegawai $namacalon)
  {
    $this->member[] =$namacalon;
  }

  public function members()
  {
    return $this->member;
  }
}


$orangbaru = new Calonpegawai("rio");
$hrd = new HRD([$orangbaru]);
$sasakdev = new Bisnis($hrd);
$sasakdev->hire(new Calonpegawai('sofwati'));
var_dump($sasakdev->getMembers());
//
// STEP
// - pembuatan objek calon pegawai
// - pemanggilan objek HRD
//   -untuk penampung nama calon dengan array
// - pemanggilan objek Bisnis
//   - pemanggilan class HRD dan di tampung dalam variabel
//   - baru di tambah ke dalam method add
//   - tampilkan di add

 ?>
