## Laravel VueJS (Dimas)

lakukan clone dari repo

    git clone 

kemudian masuk ke dalam folder laravelvuejs

    $cd laravelvuejs
    $composer install
    $npm install

##
**BAGUSNYA FILE SAMPLE JANGAN DIHAPUS DIJADIKAN SEBAGAI CONTOH SAJA**
setelah selesai,  sebelum menjalankan laravel vue js nya, pastika terlebih dahulu file migration dari **2024_07_16_142841_sample.php** yang terletak di **app/database/migrations/**, silahkan mengubah kata-kata samples dengan nama **table** yang diinginkan dan juga nama **field dan typedatanya** jangan dihapus untuk bagian **$table->id(); dan $table->timestamps();**

setelah selesai kemudian jalankan perintah migrasi berikut

    php artisan migrate

selanjutnya cocokkan **nama table** dari file migrations tadi dengan file yang ada di model dan controller yaitu 

**Samples.php** menjadi **NamaTableBaru.php**
**SampleController.php** menjadi **NamaTableBaruController.php**

Begitu juga di **resources/js/Pages** disitu ada satu folder sebagai contoh yaitu **Samples** yang isinya ada **Index, Create, Update, dan Delete**.

perhatikan juga pada route yang terletak pada **routes/web.php**  silahkan gunakan contoh dari cara penggunaaan samples yang ada di group **middleware('auth')** dengan prefix **admin**, jadi semua link ata hrefnya menggunakan **admin/**.

**BAGUSNYA FILE SAMPLE JANGAN DIHAPUS DIJADIKAN SEBAGAI CONTOH SAJA SILAHKAN MEMBUAT FILE BARU ATAU FOLDER BARU SESUAI DENGAN PENAMAAN TUGAS**
##
kemudian buka 2 tab terminal dan jalankan di tab pertama

    $npm run dev 

dan 

    $php artisan serve 

pada tab kedua

