<?php
// ===============================================
// DOKUMENTASI WPU - PERTEMUAN 4: SINTAKS PHP
// URL: https://www.youtube.com/watch?v=XTrU0GzMfCk
// ===============================================

// Standar Output [00:10:00]
// Perintah untuk mencetak sesuatu ke layar/browser

echo "Halo Dunia";     // Paling sering dipakai. Mencetak string, variabel, dll.
print "Halo Dunia";    // Sama persis kayak echo [00:13:34]
print_r("Halo Dunia"); // Biasanya untuk debugging, mencetak isi array [00:10:29]
var_dump("Halo Dunia"); // Untuk debugging, memberi info tipe data & panjangnya [00:10:38]
// Keterangan: print_r dan var_dump akan jadi sahabat lu saat debugging.


// Penulisan Sintaks PHP [00:17:11]
// 1. PHP di dalam HTML (SANGAT DISARANKAN)
?>
<?php

// 2. HTML di dalam PHP (TIDAK DISARANKAN [00:20:26])
// echo "<h1>Selamat Datang, Aqiel</h1>";


// Variabel dan Tipe Data
// Variabel [00:21:05]
// Aturan:
// 1. Diawali dengan tanda $ [00:21:20]
// 2. Nama tidak boleh diawali angka, tapi boleh mengandung angka [00:22:37]
// 3. Tidak perlu deklarasi tipe data (kayak di C++)

$nama = "Aqiel"; // Tipe data otomatis jadi String
$umur = 20;     // Tipe data otomatis jadi Integer

// Interpolasi (Kutip Dua vs Kutip Satu) [00:23:19]
// Kutip dua ("...") BISA mengecek isi variabel
echo "Halo, nama saya $nama"; // Output: Halo, nama saya Aqiel

// Kutip satu ('...') TIDAK bisa mengecek isi variabel (dianggap string biasa)
echo 'Halo, nama saya $nama'; // Output: Halo, nama saya $nama


// Operator
// 1. Aritmatika [00:24:53]
// +, -, *, /, % (modulus / sisa bagi)
$x = 10;
$y = 20;
echo $x * $y; // Output: 200


// 2. Penggabung String / Concat [00:25:53]
// Menggunakan titik (.)
$nama_depan = "Aqiel";
$nama_belakang = "Maulidan";
echo $nama_depan . " " . $nama_belakang; // Output: Aqiel Maulidan


// 3. Assignment (Penugasan) [00:27:21]
// =, +=, -=, *=, /=, %=, .=
$x = 1;
$x += 5; // $x sekarang bernilai 6
echo $x;

$nama_lengkap = "Aqiel";
$nama_lengkap .= " ";      // Menggabungkan string
$nama_lengkap .= "Zuhdi";  // $nama_lengkap sekarang "Aqiel Zuhdi"
echo $nama_lengkap;


// 4. Perbandingan [00:29:39]
// <, >, <=, >=, ==, !=
// HANYA mengecek NILAI, tidak mengecek TIPE DATA
var_dump(1 == "1"); // Output: bool(true) [00:30:53]


// 5. Identitas [00:31:03]
// ===, !==
// Mengecek NILAI DAN TIPE DATA
var_dump(1 === "1"); // Output: bool(false) [00:31:31]


// 6. Logika [00:31:49]
// && (dan), || (atau), ! (tidak)
$x = 30;
// Cek: Apakah $x lebih kecil dari 20 DAN $x adalah bilangan genap?
var_dump($x < 20 && $x % 2 == 0); // Output: bool(false) (karena $x tidak < 20)

// Cek: Apakah $x lebih kecil dari 20 ATAU $x adalah bilangan genap?
var_dump($x < 20 || $x % 2 == 0); // Output: bool(true) (karena $x adalah genap)

?>
