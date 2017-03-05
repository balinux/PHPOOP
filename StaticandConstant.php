<?php

/**
 * math dengan func_get_args
 */
class Math
{

  function add($sum)
  {
    return array_sum(func_get_args()); //menggunakan array_sum untuk menjumlahkan array, func_get_args untuk mengambil parameter
  }
}

/**
 * mat dengan ...$num
 */
class Math2
{

// protected $string;
  function add(...$var)
  {
    return array_sum($var);
  }
}

/**
 * math with static
 * alasan menggunakan static adalah agar clas bisa di panggil ke manapun
 * bisa jga digunakan unuk penggunaan class secara bersama
 */
class MathStatic
{

  public static function add(...$a)
  {
    return array_sum($a);
  }
}

/**
 * mahasiswa with stataic
 */
class Mahasiswa
{
  public static $umur = 1;

  public function tggllahr()
  {
    static::$umur += 1; //pemanggilan variabel static harus dengan keyword static dan variabel tetap menggunakan tanda dollar
  }
}




// $math = new math;
// var_dump($math->add(1,2,3))

// $math = new Math2;
// var_dump($math->add(1,2,3));

// echo MathStatic::add(1,2,3);
// var_dump(MathStatic::add(1,2,3));
// var_dump($math);

$ari = new mahasiswa;
$ari->tggllahr();
var_dump(Mahasiswa::$umur); //pemanggilan variabel ataupun method jangan lupa memanggil class terlebih dahulu
 ?>
