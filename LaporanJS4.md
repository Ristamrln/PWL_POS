# Laporan Jobsheet 04 
## Rista Marlina Hutagaol
## 2341728002

```
1.	Buka file model dengan nama UserModel.php dan tambahkan $fillable seperti gambar di bawah ini 
```
<img src="Laporan JS 4/1.JPG"> 

```
2.	Buka file controller dengan nama UserController.php dan ubah script untuk menambahkan data baru seperti gambar di bawah ini 
```
<img src="Laporan JS 4/2.JPG"> 

```
3.	Simpan kode program Langkah 1 dan 2, dan jalankan perintah web server. Kemudian jalankan link localhostPWL_POS/public/user pada browser dan amati apa yang terjadi 
```
<img src="Laporan JS 4/3.JPG"> 
<img src="Laporan JS 4/4.JPG">

```
4.	Ubah file model UserModel.php seperti pada gambar di bawah ini pada bagian $fillable  
```
<img src="Laporan JS 4/5.JPG">

```
5.	Ubah kembali file controller UserController.php seperti pada gambar di bawah hanya bagian array pada $data 
```

```
6.	Simpan kode program Langkah 4 dan 5. Kemudian jalankan pada browser dan amati apa yang terjadi 
```
<img src="Laporan JS 4/6.JPG">

<P> Praktikum 2.1 – Retrieving Single Models </P>

```
1.	Buka file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini 
```
<img src="Laporan JS 4/7.JPG">

```
2.	Buka file view dengan nama user.blade.php dan ubah script seperti gambar di bawah ini 
```
<img src="Laporan JS 4/8.JPG">

```
3.	Simpan kode program Langkah 1 dan 2. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan 
```
<img src="Laporan JS 4/9.JPG">

```
Kode tersebut menampilkan informasi pengguna tunggal dari database. Melalui UserModel kode data pengguna dengan ID 1 lalu diteruskan ke variable data. HTML menampilkan kolom sesuai dengan atribut pengguna seperti ID, Username, Nama, ID Level Pengguna. 
4.	Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini 
```
<img src="Laporan JS 4/10.JPG">

```
5.	Simpan kode program Langkah 4. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan. 
Jawaban : Metode index() pada UserController mengambil pengguna dengan level_id 1 dari database menggunakan metode where()dan first() dari UserModel. Kemudian data pengguna dikirimkan ke tampilan user dengan menggunakan variable data. 

6.	Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini 
```
<img src="Laporan JS 4/11.JPG">

```
7.	Simpan kode program Langkah 6. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan 
```
<img src="Laporan JS 4/12.JPG">

```
8.	Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini 
```
<img src="Laporan JS 4/13.JPG">

```
9.	Simpan kode program Langkah 8. Kemudian pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan 
```
<img src="Laporan JS 4/14.JPG">
<p>Yang terjadi adalah kolom ID dan ID Level Pengguna kosong dikarenakan tidak ada ID yang terdeteksi. </p>

```
10.	Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini 
```
<img src="Laporan JS 4/15.JPG">

```
11.	Simpan kode program Langkah 10. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam 
```
<img src="Laporan JS 4/16.JPG">
<p>Terjadi NOT FOUND dikarenakan ID tidak terdeteksi. </p>
<p>Praktikum 2.2  – Not Found Exceptions</p>

```
1.	Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini 
```
<img src="Laporan JS 4/17.JPG">

```
2.	Simpan kode program Langkah 1. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan 
Jawaban : yang terjadi adalah kode error dan tidak tampil di browser. 
3.	Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini 
```
<img src="Laporan JS 4/18.JPG">

```
4.	Simpan kode program Langkah 3. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan 
```
<img src="Laporan JS 4/19.JPG">

<p>Praktikum 2.3 – Retreiving Aggregrates </p>

```
1.	Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini 
```
<img src="Laporan JS 4/20.JPG">

```
2.	Simpan kode program Langkah 1. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan 
```
<img src="Laporan JS 4/21.JPG">
<p>Hasil daria kode program diatas yaitu menampilkan level_id nya yaitu 2. </p>

```
3.	Buat agar jumlah script pada langkah 1 bisa tampil pada halaman browser, sebagai contoh bisa lihat gambar di bawah ini dan ubah script pada file view supaya bisa muncul datanya 
```
<img src="Laporan JS 4/22.JPG">
<p>Praktikum 2.4  – Retreiving or Creating Models 
</p>

```
1.	Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini 
```
<img src="Laporan JS 4/23.JPG">

```
2. Ubah kembali file view dengan nama user.blade.php dan ubah script seperti gambar di 
bawah ini
```
<img src="Laporan JS 4/24.JPG">

```
4. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini 
```
<img src="Laporan JS 4/25.JPG">

```
6. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar 
di bawah ini
```
<img src="Laporan JS 4/26.JPG">
 
 ```
8. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar 
di bawah ini
 ```
 <img src="Laporan JS 4/27.JPG">

 ```
 10. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar 
di bawah ini 
```
 <img src="Laporan JS 4/28.JPG">

<p> Praktikum 2.5 – Attribute Changes </p>

 ```
1. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar 
di bawah ini
```
 <img src="Laporan JS 4/29.JPG">

 ```
 3. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar 
di bawah ini 
```
<img src="Laporan JS 4/30.JPG">

<p> Praktikum 2.6 – Create, Read, Update, Delete (CRUD) </P>

```
1. Buka file view pada user.blade.php dan buat scritpnya menjadi seperti di bawah ini 
```
<img src="Laporan JS 4/31.JPG">

```
2. Buka file controller pada UserController.php dan buat scriptnya untuk read menjadi 
seperti di bawah ini 
```
<img src="Laporan JS 4/32.JPG">

```
4. Langkah berikutnya membuat create atau tambah data user dengan cara bikin file baru 
pada view dengan nama user_tambah.blade.php dan buat scriptnya menjadi seperti di 
bawah ini
```
<img src="Laporan JS 4/33.JPG">

```
5. Tambahkan script pada routes dengan nama file web.php. Tambahkan seperti gambar di 
bawah ini
```
<img src="Laporan JS 4/34.JPG">

```
6. Tambahkan script pada controller dengan nama file UserController.php. Tambahkan 
script dalam class dan buat method baru dengan nama tambah dan diletakan di bawah 
method index seperti gambar di bawah ini
```
<img src="Laporan JS 4/35.JPG">

```
8. Tambahkan script pada routes dengan nama file web.php. Tambahkan seperti gambar di 
bawah ini
```
<img src="Laporan JS 4/36.JPG">

```
9. Tambahkan script pada controller dengan nama file UserController.php. Tambahkan 
script dalam class dan buat method baru dengan nama tambah_simpan dan diletakan di 
bawah method tambah seperti gambar di bawah ini
```
<img src="Laporan JS 4/37.JPG">

```
11. Langkah berikutnya membuat update atau ubah data user dengan cara bikin file baru 
pada view dengan nama user_ubah.blade.php dan buat scriptnya menjadi seperti di 
bawah ini
```
<img src="Laporan JS 4/38.JPG">

```
12. Tambahkan script pada routes dengan nama file web.php. Tambahkan seperti gambar di 
```
<img src="Laporan JS 4/39.JPG">

```
2. Buka file controller pada UserController.php dan ubah method script menjadi seperti 
di bawah ini 
```
<img src="Laporan JS 4/40.JPG">
