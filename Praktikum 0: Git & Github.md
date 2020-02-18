# Persiapan Awal

## Tujuan Pembelajaran

Setelah praktikum ini dilakukan Anda diharapkan dapat:

* Mengingat dan mendemonstrasikan beberapa perintah `Git` yang penting untuk melakukan pekerjaan individu.
* Mempersiapkan `Git repository` lokal dan online pada `Github`.
* Menghubungkan `repository lokal` dan `online.`
* Menginstall Git Sesuai Sistem Operasi.

## Install Git dan Konfigurasi Awal

1. #### Cara Install Git di Linux

Instalasi Git pada Distro keluarga Debian dapat menggunakan perintah `apt`

```shellscript
sudo apt install git

atau

sudo apt-get install git

pada Fedora

yum install git
```
Setelah itu coba periksa versi yang terinstall dengan perintah:

`git version`

Pada laptop saya, versi yang terinstall adalah versi `2.24.1`

![git version](Snapshoot/git-version.png)

2. #### Cara Install Git di Windows

Instalasi Git di Windows memang tidak seperti di *Linux/Mac* yang ketik perintah langsung terinstal.

Kita harus men-download dulu, kemudian melakukan instalasi *next>next>finish.*

Tapi dalam instalasi tersebut, ada pilihan yang harus diperhatikan agar perintah *git dapat dikenali di CMD.*

* Download Git
  
Silahkan buka website resminya Git (git-scm.com). Kemudian unduh Git sesuai dengan arsitektur komputer kita. Kalau menggunakan 64bit, unduh yang 64bit. Begitu juga kalau menggunakan 32bit.

![#1](https://phoenixnap.com/kb/wp-content/uploads/2019/12/download-git-for-windows.png)

* Klik dua kali file installer untuk penginstal.
  
![#2](https://phoenixnap.com/kb/wp-content/uploads/2019/12/location-git-windows-download.png)

* Izinkan aplikasi untuk melakukan perubahan pada perangkat Anda dengan mengklik `Yes` pada dialog Kontrol Akun Pengguna yang terbuka.

![#3](https://phoenixnap.com/kb/wp-content/uploads/2019/12/start-git-installation-process-windows.png)

* Tinjau Lisensi Publik Umum GNU, dan ketika Anda siap untuk menginstal, klik Berikutnya .

![#4](https://phoenixnap.com/kb/wp-content/uploads/2019/12/read-and-accept-git-license-agreement.png)

*  Installer akan meminta Anda untuk memilih lokasi pemasangan. Biarkan **default**, kecuali Anda punya alasan untuk mengubahnya, dan klik **Next**.

![#5](https://phoenixnap.com/kb/wp-content/uploads/2019/12/select-git-installation-location.png)

*  Layar pemilihan komponen akan muncul. Biarkan **default** kecuali Anda memiliki kebutuhan khusus untuk mengubahnya dan klik **Next**.

![#6](https://phoenixnap.com/kb/wp-content/uploads/2019/12/git-installation-component-selection-screen.png)

* Installer akan menawarkan untuk membuat folder menu. Cukup klik **Next**.

![#7](https://phoenixnap.com/kb/wp-content/uploads/2019/12/select-git-start-folder-shortcuts.png)

* **Pilih editor teks** yang ingin Anda gunakan dengan **Git**. Gunakan menu drop-down untuk memilih Notepad ++ (Saya sarankan pakai editor text [`VISUAL STUDIO CODE`](https://code.visualstudio.com)) dan klik **Next** .

* Langkah instalasi ini memungkinkan Anda untuk mengubah **PATH environment**. **PATH** adalah kumpulan direktori default yang disertakan saat Anda menjalankan perintah dari baris perintah. **Biarkan ini pada pilihan tengah (disarankan)** dan klik **Next**.

![#8](https://phoenixnap.com/kb/wp-content/uploads/2019/12/adjust-git-path-enviorment.png)

* *Server Certificates, Line Endings and Terminal Emulators* Opsi selanjutnya terkait dengan sertifikat server. Sebagian besar pengguna harus menggunakan default. Jika Anda bekerja di lingkungan **Active Directory**, Anda mungkin perlu beralih ke sertifikat Windows Store. **Klik Next**.

![#9](https://phoenixnap.com/kb/wp-content/uploads/2019/12/use-openssl-library-server-verification-git-windows.png)

* Pilihan berikutnya mengubah akhir baris. Dianjurkan agar Anda memilih pilihan **default.** Ini terkait dengan cara data diformat dan mengubah opsi ini dapat menyebabkan masalah. **Klik Next**.

![#10](https://phoenixnap.com/kb/wp-content/uploads/2019/12/configure-line-ending-conversions-git-on-windows.png)

* **Pilih terminal Emulator** yang ingin Anda gunakan. Direkomendasikan **MinTTY default**, untuk fitur-fiturnya. **Klik Next**.

![#11](https://phoenixnap.com/kb/wp-content/uploads/2019/12/configure-terminal-emulator-git-bash.png)

* **Opsi Kustomisasi Tambahan** Opsi default direkomendasikan, namun langkah ini memungkinkan Anda untuk memutuskan opsi tambahan mana yang ingin Anda aktifkan. Jika Anda menggunakan `symbolic links`, yang seperti pintasan untuk baris perintah, centang kotak. **Klik Next**.

![#12](https://phoenixnap.com/kb/wp-content/uploads/2019/12/configure-extra-options-git-install-windows.png)

* Bergantung pada versi Git yang Anda pasang, mungkin menawarkan untuk menginstal fitur eksperimental. Opsi untuk memasukkan opsi interaktif ditawarkan. Kecuali jika Anda ingin berexperimental, untuk opsi ini biarkan tidak dicentang dan **klik Instal** .

![#13](https://phoenixnap.com/kb/wp-content/uploads/2019/12/configure-experimental-options-git-windows-installation.png)

* *Complete Git Installation Process*: Setelah instalasi selesai, centang kotak untuk melihat **Release Notes atau Launch Git Bash**, lalu klik Finish .

![#14](https://phoenixnap.com/kb/wp-content/uploads/2019/12/complete-git-install-windows.png)

* How to Launch Git in Windows

```text
Git memiliki dua mode penggunaan - bash scripting shell (or command line) and a graphical user interface (GUI).
```

* Launch Git Bash Shell
  
Untuk launch `Git Bash,` buka menu `Start Windows` , ketik `git bash` dan tekan Enter (atau klik ikon aplikasi).

![#15](https://phoenixnap.com/kb/wp-content/uploads/2019/12/start-git-bash-windows.png)

* Launch Git GUI

Untuk launch `Git GUI`, buka menu Start Windows , ketik `git gui` dan tekan Enter (atau klik ikon aplikasi).

![#16](https://phoenixnap.com/kb/wp-content/uploads/2019/12/start-gui-git-windows.png)

----

 ## Connecting to a Remote Repository

----

* Mulailah dengan `Terminal/command-prompt` atau `shell` favorit Anda. Jika menggunakan Windows, jalankan `Git Bash` atau `cmd` (hanya berlaku jika Anda telah menambahkan path Git yang dapat dieksekusi ke dalam PATH *environment Variable*). 
  
* Jika menggunakan OS berbasis Unix (Linux atau Mac OS), dapat menggunakan `shell` yang disediakan di OS, misalkan bash, [zsh](https://ohmyz.sh)

```diff
- NOTE 👁‍🗨
```

###### Meskipun dimungkinkan untuk menggunakan aplikasi berbasis GUI, misalkan built-in Git GUI, GitKraken, VsCode,SourceTree atau aplikasi lainya, saya sangat menyarankan untuk menggunakan perintah `Git dari shell`.

###### Shell adalah lingkungan denominator umum terendah yang tersedia untuk Anda selama pengembangan Web, terutama ketika harus menerapkan aplikasi Web ke remote server. Akan berguna juga untuk mengetahui perintah-perintah shell atau Git, ketika kita tidak dapat memiliki lingkungan grafis. Plus, mengeksekusi perintah dengan mengetik jauh lebih cepat daripada point-and-click pada GUI.

untuk mengetahui apakah git sudah benar ter-install atau tidak, bisa melakukan pengecekan melalui `terminal/cmd` dengan mengetikan kata `git`. Jika hasil keluaran seperti pada Gambar berikut, maka instalasi berhasil.

![cek-git](Snapshoot/Screen&#32;Shot&#32;2020-02-18&#32;at&#32;6.27.16&#32;PM.png)

Ada beberapa konfigurasi awal yang harus dupersiapakan sebelum mulai menggunakan Git, seperti `nama dan email`. Silahkan lakukan konfigurasi dengan perintah berikut ini.

```diff
- git config --global user.name "yysofiyan"
- git config --global user.email yanyan@stmik-sumedang.ac.id
```

Kemudian periksa konfigurasinya dengan perintah:







Dalam penggunaan Git ada dua cara, pertama dengan menggunakan` Terminal/Command Prompt` dan kedua menggunakan `Git Desktop`. Pada praktikum ini, setiap contoh penggunaan git dengan menggunakan `Terminal/Command Prompt`.

- [x] Working Locally

Sebelum mulai menggunakan `Git`, ada beberapa perintah dasar yang harus diketahui seperti di bawah ini:

- [x] `Git init`: Untuk membuat repository pada folder lokal
- [x] `Git status`: Untuk mengetahui status dari repository Lokal, apakah ada file yang ditambahkan/dihilangkan dan dimodifikasi.
- [x] `Git diff`: untuk mengetahui list code yang dilakukan perubahan.
- [x] `Git add`: untuk menambahkan file ke repository local
- [x] `Git commit`: untuk menyimpan perubahan yang dilakukan
- [x] `Git push`: untuk mengirimkan perubahan dari repository local setelah melakukan commit ke remote repository
- [x] `Git branch`: untuk melihat seluruh branch yang ada pada repository
- [x] `Git checkout`: untuk menukar branch yang aktif dengan branch yang lainnya
- [x] `Git merge`: untuk menggabungkan branch yang aktif dengan branch yang dipilih. 
- [x] `Git clone`: untuk membuat Salinan repository

* Langkah selanjutnya, buat sebuah folder `repository project`. Pada contoh ini, saya menggunakan nama folder `“coba”`seperti pada gambar di bawah ini.



















> Sampai pada tahap ini Anda sudah berhasil membuat `Git repository lokal pertama Anda`. Sebelum melanjutkan praktikum, ada beberapa konfigurasi yang perlu dilakukan pada `Git repo lokal Anda.`

> Anda memerlukan nama pengguna dan kata sandi GitHub untuk langkah selanjutnya.
> silahkan register [github.com](github.com)

1. Atur *username* dan *email* yang akan terhubung dengan pekerjaan Anda pada *Git repository*.

```markdown
 git config user.name "<NAME>" 
 git config user.email "<EMAIL>"
 ```
 **Contoh:**
 
 ```markdown
git config user.name "Nama_Anda"
git config user.email "A3.xxxx@mhs.stmik-sumedang.ac.id"
```
7. Jika koneksi Anda melalui *proxy*, misalkan Anda menggunakan PC pada Lab STMIK SUMEDANG Anda harus mengatur HTTP *proxy* pada konfigurasi Git:



