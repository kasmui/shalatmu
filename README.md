# Jadwal Shalat Berbasis JavaScript dengan Penyesuaian Muhammadiyah

Proyek ini menyediakan halaman web untuk menampilkan jadwal shalat berdasarkan lokasi yang dipilih pengguna. Waktu shubuh telah disesuaikan dengan standar **Majelis Tarjih dan Tajdid (MTT) PP Muhammadiyah** dan menggunakan library **PrayTimes.js**. Proyek ini berguna untuk menampilkan waktu shalat yang akurat di berbagai lokasi.

## Fitur Utama

1. **Pilih Lokasi Kota:**
   - Pengguna dapat memilih lokasi dari dropdown daftar kota di Indonesia dan beberapa kota internasional.
   - Lokasi secara otomatis mengubah jadwal shalat sesuai dengan koordinat geografis kota yang dipilih.

2. **Jadwal Shalat Otomatis:**
   - Waktu shalat dihitung menggunakan algoritma dari **PrayTimes.js**.
   - Metode yang digunakan adalah `Muhammadiyah (MU)` dengan penyesuaian untuk waktu shubuh.
   - Kode: _var PT = new PrayTimes('MU');_

3. **Tampilan Dinamis:**
   - Tabel waktu shalat dibuat secara dinamis menggunakan JavaScript.
   - Tanggal terkini secara otomatis ditampilkan di header.

4. **Desain Responsif dan Sederhana:**
   - Tata letak minimalis dan user-friendly.
   - Warna tabel mempermudah pembacaan.

---

## Cara Kerja

1. **Penentuan Lokasi:**
   - Data koordinat lokasi didefinisikan dalam array PHP `$coordinates`.
   - Saat pengguna memilih kota, koordinat diambil berdasarkan pilihan tersebut.

2. **Penghitungan Jadwal Shalat:**
   - Library **PrayTimes.js** digunakan untuk menghitung waktu shalat berdasarkan metode MTT Muhammadiyah.
   - Fungsi `getTimes(date, [latitude, longitude])` menghasilkan waktu shalat dalam format 24 jam.

3. **Rendering Jadwal:**
   - Tabel waktu shalat dibuat menggunakan JavaScript.
   - Data waktu shalat dimasukkan ke dalam tabel secara otomatis berdasarkan lokasi dan tanggal saat ini.

---

## Teknologi yang Digunakan

1. **HTML5:**
   - Struktur halaman dan elemen dropdown lokasi.

2. **CSS3:**
   - Styling tabel, header, dan dropdown untuk tampilan yang menarik dan konsisten.

3. **JavaScript:**
   - Menghitung waktu shalat menggunakan **PrayTimes.js**.
   - Menampilkan jadwal shalat dan tanggal terkini secara dinamis.

4. **PHP:**
   - Mengolah data lokasi dan koordinat untuk dikirim ke JavaScript.

---

## Cara Menggunakan

1. **Persyaratan:**
   - Server lokal dengan dukungan PHP.
   - File `PrayTimes.js` (dapat diunduh dari [PrayTimes](http://praytimes.org/wiki/Code)).

2. **Langkah-langkah:**
   - Unduh semua file proyek dan tempatkan di server lokal.
   - Buka file utama `index.html` di browser.
   - Pilih kota pada dropdown untuk menampilkan jadwal shalat.

---

## Struktur File

- **index.html**: Halaman utama aplikasi.
- **PrayTimes.js**: Library untuk menghitung waktu shalat.

---

## Catatan Penting

- **Standar Waktu Shubuh:** Penyesuaian waktu shubuh mengikuti keputusan **Majelis Tarjih Muhammadiyah**, berbeda dengan standar default pada PrayTimes.js.
- **Akurasi Lokasi:** Pastikan koordinat kota telah dimasukkan dengan benar.

---
**Cara Menggunakan**
1) Akses Langsung Melalui Browser
2) Anda juga dapat mengakses jadwal shalat secara online melalui browser dengan menambahkan parameter kota pada URL. Gunakan format berikut:

**FORMAT:**
_**/?city=Kota+Semarang**_.
**Contoh:** Jika Anda ingin melihat jadwal shalat untuk Kota Semarang, cukup akses: **http://localhost/?city=Kota+Semarang**
**Link riil:** https://lppapwajateng.org/shalatmu/?city=Kota+Semarang

---
Gambar: https://github.com/kasmui/shalatmu/blob/main/shalatmu.PNG
---
Proyek ini memberikan solusi sederhana namun efektif untuk kebutuhan jadwal shalat yang dapat disesuaikan dengan lokasi pengguna. Jika Anda memiliki saran atau ingin berkontribusi, silakan kirimkan pull request.
