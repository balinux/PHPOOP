<?php

require 'vendor/autoload.php';
use Acme\calon;
use Acme\bisnis;
use Acme\hrd;

// require 'src/calon.php';
// require 'src/bisnis.php';
// require 'src/hrd.php';

$orangbaru = new Calon("rio");
$hrd = new HRD([$orangbaru]);
$sasakdev = new Bisnis($hrd);
$sasakdev->hire(new Calon('sofwati'));
var_dump($sasakdev->getMembers());

 ?>
