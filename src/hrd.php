<?php

namespace Acme;

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
  public function add(Calon $namacalon)
  {
    $this->member[] =$namacalon;
  }

  public function members()
  {
    return $this->member;
  }
}


 ?>
