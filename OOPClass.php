<?php

/**
 *
 */
class Task
{
  public $nama =  "rio";

  public $kerja = True;

  public function __construct($data)
  {
    var_dump($data);
  }
}

$task =  new Task("kantro");

var_dump($task->kerja);


?>
