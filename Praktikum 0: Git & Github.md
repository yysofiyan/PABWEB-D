# Persiapan Awal

----

## Tujuan Pembelajaran

Setelah praktikum ini dilakukan Anda diharapkan dapat:

* Mengingat dan mendemonstrasikan beberapa perintah `Git` yang penting untuk melakukan pekerjaan individu.
* Mempersiapkan `Git repository` lokal dan online pada `Github`.
* Menghubungkan `repository lokal` dan `online.`

## Persiapan Awal

1. Mulailah dengan `command-prompt` atau `shell` favorit Anda. Jika menggunakan Windows, jalankan `Git Bash` atau cmd (hanya berlaku jika Anda telah menambahkan path Git yang dapat dieksekusi ke dalam PATH *environment Variable*). Jika menggunakan OS berbasis Unix (Linux atau Mac OS), dapat menggunakan shell yang disediakan di OS, misalkan `bash.`

> Meskipun dimungkinkan untuk menggunakan aplikasi berbasis GUI, misalkan built-in Git GUI, GitKraken, atau SourceTree, saya **sangat menyarankan untuk menggunakan perintah Git dari shell**. 

> **Shell** adalah lingkungan denominator umum terendah yang tersedia untuk Anda selama pengembangan Web, terutama ketika harus menerapkan aplikasi Web ke remote server. Akan berguna juga untuk mengetahui perintah-perintah shell atau Git, ketika kita tidak dapat memiliki lingkungan grafis. Plus, mengeksekusi perintah dengan mengetik jauh lebih cepat daripada point-and-click pada GUI.

2. Atur *path* pada terminal Anda saat ini ke *folder* tempat Anda akan menyimpan pekerjaan. Gunakan perintah `cd` untuk navigasi ke *folder* pilihan Anda.
3. Buat folder *baru* untuk menyimpan file baru yang terkait dengan praktikum pada dokumen ini. Coba berikan penamaan `git-exercise` pada *folder* Anda dan atur *path* pada *terminal* Anda saat ini ke folder yang baru saja dibuat.
4. Di dalam *folder* baru, ketikkan perintah ```git init``` untuk membuat `Git repository` kosong.
5. Kemudian coba ketikkan perintah `git status` untuk melihat status dari `Git repository (Git repo)` pada saat perintah dijalankan.

> Sampai pada tahap ini Anda sudah berhasil membuat `Git repository lokal pertama Anda`. Sebelum melanjutkan praktikum, ada beberapa konfigurasi yang perlu dilakukan pada `Git repo lokal Anda.`