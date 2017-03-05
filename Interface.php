 <?php
interface logger{
  public function run($user); //method di interface tidak perlu pendeklarasian body
}

  /**
   * class mengirim log berupa file
   */
  class logToFile implements logger
  {

    public function run($user)
    {
      var_dump("pengunjung  Website hari ini adalah: ".$user);
    }

    public function runing($user)
    {
          var_dump("pengunjung  Website hari ini adalah: ".$user);
    }  }

  /**
   * class mengirim log ke database
   */
  class logToDB implements logger
  {

    public function run($user)
    {
      var_dump("pengunjung Database hari ini adalah: ".$user);
    }
  }

/**
 * UserController untuk menampikan hasil eksekusi
 */
class UserController
{
protected $regisUser;
//
// function __construct(logToFile $logUser) //jika tidak menggunakan hanya bisa implemet satu class
// {
//     $this->regisUser=$logUser;
// }

function __construct(logger $logUser) //jika menggunakan interface cukup memanggil interface aja, selanjutnya bisa di rumah di objek class turunan
  {
      $this->regisUser=$logUser;
  }

  public function show()
  {
     $user= "rio";
     $this->regisUser->run($user);
    //  $this->regisUser->runing($user);
  }

}

$serverlogger = new UserController(new logToFile);//disini letak merubah mau menggunakan kelas manapun asalkan sudah terdaftar di interface
$serverlogger->show();


 ?>
