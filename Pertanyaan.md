## Jawablah pertanyaan berikut sesuai pemahaman materi di atas 
1. Pada Praktikum 1 - Tahap 5, apakah fungsi dari APP_KEY pada file setting .env Laravel? 
~~~
sebagai kunci enkripsi aplikasi. Ini digunakan oleh Laravel untuk mengenkripsi dan mendekripsi data sensitif seperti sesi pengguna dan kata sandi 

2. Pada Praktikum 1, bagaimana kita men-generate nilai untuk APP_KEY? 
3. Pada Praktikum 2.1 - Tahap 1, secara default Laravel memiliki berapa file migrasi? 
dan untuk apa saja file migrasi tersebut? 
4. Secara default, file migrasi terdapat kode $table->timestamps();, apa tujuan/output 
dari fungsi tersebut? 
5. Pada File Migrasi, terdapat fungsi $table->id(); Tipe data apa yang dihasilkan dari 
fungsi tersebut? 
6. Apa bedanya hasil migrasi pada table m_level, antara menggunakan $table->id(); 
dengan menggunakan $table->id('level_id'); ? 
7. Pada migration, Fungsi ->unique() digunakan untuk apa? 
8. Pada Praktikum 2.2 - Tahap 2, kenapa kolom level_id pada tabel m_user 
menggunakan $tabel->unsignedBigInteger('level_id'), sedangkan kolom level_id 
pada tabel m_level menggunakan $tabel->id('level_id') ? 
9. Pada Praktikum 3 - Tahap 6, apa tujuan dari Class Hash? dan apa maksud dari kode 
program Hash::make('1234');? 
10. Pada Praktikum 4 - Tahap 3/5/7, pada query builder terdapat tanda tanya (?), apa 
kegunaan dari tanda tanya (?) tersebut? 
11. Pada Praktikum 6 - Tahap 3, apa tujuan penulisan kode protected $table = 
‘m_user’; dan protected $primaryKey = ‘user_id’; ?  
12. Menurut kalian, lebih mudah menggunakan mana dalam melakukan operasi CRUD ke 
database (DB Façade / Query Builder / Eloquent ORM) ? jelaskan