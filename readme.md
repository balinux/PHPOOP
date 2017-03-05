- untuk autoloading pertama buat dulu composer.json isi dengan tanda {}
- composer install
- edit composer dan isi sesuaikan dengan path file php anda
  {
    "autoload":{
      "psr-4":{
        "Acme\\":"src"
      }
    }
  }

-jalankan perintah composer dump-autoload
- catatan : usahakan nama class setiap file php harus sama agar tidak error saat menggunakan namespace
-selanjutnya penggunaan secara custom oleh si pengguna, thanks
