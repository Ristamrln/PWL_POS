# Pertanyaan
## Rista Marlina Hutagaol
## 2341728002

# Penutup:  

1. Pada Praktikum 1 - Tahap 5, apakah fungsi dari APP_KEY pada file setting .env 
Laravel?  
```
Jawab: fungsi dari APP_KEY pada file pengaturan .env Laravel adalah untuk 
menyediakan kunci aplikasi yang digunakan untuk mengenkripsi data, seperti session dan 
cookies, serta untuk memastikan keamanan aplikasi dengan melakukan hashing pada data 
sensitif, seperti password. 
```
2. Pada Praktikum 1, bagaimana kita men-generate nilai untuk APP_KEY?  
```
Jawab: Dengan menjalankan perintah php artisan key:generate di terminal. Perintah ini 
akan secara otomatis menghasilkan kunci yang unik dan kemudian menyimpannya di 
dalam file .env 
```
3. Pada Praktikum 2.1 - Tahap 1, secara default Laravel memiliki berapa file migrasi? dan 
untuk apa saja file migrasi tersebut?  
```
Jawab: Secara default Laravel memiliki dua file migrasi yang disertakan 
create_users_table.php dan create_password_resets_table.php. File migrasi ini digunakan 
untuk membuat tabel pengguna dan tabel reset kata sandi. 
```
4. Secara default, file migrasi terdapat kode $table->timestamps();, apa tujuan/output dari 
fungsi tersebut?  
```
Jawab: Kode $table->timestamps() dalam file migrasi bertujuan untuk secara otomatis 
menambahkan dua kolom ke tabel, yaitu created_at dan updated_at, yang menyimpan 
tanggal dan waktu ketika sebuah baris ditambahkan atau diperbarui. 
```
5. Pada File Migrasi, terdapat fungsi $table->id(); Tipe data apa yang dihasilkan dari fungsi 
tersebut?  
```
Jawab: Fungsi $table->id() dalam file migrasi menghasilkan tipe data kolom yang 
disebut sebagai UNSIGNED BIGINT AUTO_INCREMENT PRIMARY KEY. Ini 
adalah tipe data yang digunakan untuk menyimpan ID unik untuk setiap baris dalam 
tabel. 
```
6. Apa bedanya hasil migrasi pada table m_level, antara menggunakan $table->id(); dengan 
menggunakan $table->id('level_id'); ?  
```
Jawab: Perbedaan antara menggunakan $table->id(); dan $table->id('level_id'); dalam 
hasil migrasi pada tabel m_level adalah bahwa dalam kasus pertama, Laravel secara 
otomatis menggunakan nama kolom default id, sementara dalam kasus kedua, Anda 
menyediakan nama kolom khusus level_id. 
```
7. Pada migration, Fungsi ->unique() digunakan untuk apa?  
```
Jawab: Fungsi ->unique() dalam migration digunakan untuk menetapkan kolom sebagai 
unik, artinya setiap nilai di kolom tersebut harus unik dalam tabel. 
```
8. Pada Praktikum 2.2 - Tahap 2, kenapa kolom level_id pada tabel m_user menggunakan 
$tabel- >unsignedBigInteger('level_id'), sedangkan kolom level_id pada tabel m_level 
menggunakan $tabel->id('level_id') ?  
```
Jawab: Kolom level_id pada tabel m_user menggunakan $table
>unsignedBigInteger('level_id') karena merujuk pada kunci asing di tabel m_level, 
sehingga perlu memiliki tipe data yang sama. Sedangkan kolom level_id pada tabel 
m_level menggunakan $table->id('level_id') karena menjadi kunci utama di tabel 
tersebut. 
```
9. Pada Praktikum 3 - Tahap 6, apa tujuan dari Class Hash? dan apa maksud dari kode 
program Hash::make('1234');?  
```
Jawab: Class Hash pada Laravel digunakan untuk menghasilkan dan memeriksa hash 
nilai. Kode program Hash::make('1234'); menghasilkan hash dari string '1234', yang 
sering digunakan dalam konteks mengenkripsi kata sandi pengguna sebelum disimpan ke 
dalam database.
``` 
10. Pada Praktikum 4 - Tahap 3/5/7, pada query builder terdapat tanda tanya (?), apa 
kegunaan dari tanda tanya (?) tersebut?  
```
Jawab: Tanda tanya (?) dalam query builder digunakan sebagai placeholder untuk 
parameter yang akan diikuti. Ini memungkinkan kita untuk menggunakan parameter yang 
aman dalam query, mencegah serangan SQL injection, dan memisahkan logika query dari 
data input pengguna. 
```
11. Pada Praktikum 6 - Tahap 3, apa tujuan penulisan kode protected $table = ‘m_user’; dan 
protected $primaryKey = ‘user_id’; ?  
```
Jawab: Penulisan kode protected $table = 'm_user'; digunakan untuk menentukan nama 
tabel yang terkait dengan model User, dan protected $primaryKey = 'user_id'; digunakan 
untuk menentukan nama kolom kunci utama di tabel. Ini membantu Laravel untuk 
memahami bagaimana model berinteraksi dengan tabel yang sesuai. 
```
12. Menurut kalian, lebih mudah menggunakan mana dalam melakukan operasi CRUD ke 
database (DB Façade / Query Builder / Eloquent ORM) ? jelaskan
```  
Jawab: Semuanya memiliki kelebihan dan kekurangan. Penggunaan operasi CRUD ke 
database tergantung pada kebutuhan proyek dan preferensi pengembang. DB Facade 
cocok untuk operasi sederhana dan cepat, Query Builder memberikan fleksibilitas lebih 
besar dalam menulis query, dan Eloquent ORM menyediakan cara yang lebih dekat 
dengan konsep pemrograman berorientasi objek, yang membuatnya lebih mudah 
dipahami dan dikelola dalam jangka panjang. Terlebih lagi, Eloquent ORM juga 
menyediakan fitur-fitur seperti relasi model yang kuat dan fitur-fitur bawaan Laravel 
lainnya yang dapat mempercepat pengembangan aplikasi.
```