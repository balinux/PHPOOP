<?php

namespace Acme;
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

  public function hire(Calon $namacapeg)
  {
    $this->hrd->add($namacapeg);
  }

  public function getMembers()
  {
    return $this->hrd->members();
  }
}

 ?>
