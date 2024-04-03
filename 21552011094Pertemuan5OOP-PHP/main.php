<?php

require_once 'Book.php';
require_once 'Library.php';

$book1 = new Book("Hafalan Shalat Delisa", "Tere Liye", 2005);
$book2 = new FictionBook("Bumi", "Tere Liye", 2006, "Fiction");
$book3 = new Book("Bulan", "Tere Liye", 2020);
$book4 = new FictionBook("Negeri Para Bedebah", "Tere Liye", 2006, "Fiction");
$book5 = new FictionBook("Sang Pemimpi", "Tere Liye", 2018, "Fiction");
$book6 = new Book("Berpikir dan Berjiwa Besar", "Tere Liye", 2013);

Library::addBook($book1);
Library::addBook($book2);
Library::addBook($book3);
Library::addBook($book4);
Library::addBook($book5);
Library::addBook($book6);

while (true) {
    echo "\nSelamat datang di Perpustakaan!\n";
    echo "Silakan pilih fitur yang ingin Anda gunakan:\n";
    echo "1. Tampilkan Buku Tersedia\n";
    echo "2. Pinjam Buku\n";
    echo "3. Mengembalikan Buku\n";
    echo "4. Keluar\n";

    $choice = readline("Masukkan nomor fitur: ");

    switch ($choice) {
        case '1':
          Library::printAvailableBooks();
          break;
        case '2':
            $titleToBorrow = readline("Masukkan judul buku yang ingin dipinjam: ");
            Library::borrowBook($titleToBorrow);
            break;
        case '3':
            $titleToReturn = readline("Masukkan judul buku yang ingin dikembalikan: ");
            Library::returnBook($titleToReturn);
            break;
        case '4':
            echo "Terima kasih telah menggunakan layanan perpustakaan.\n";
            exit;
        default:
            echo "Pilihan tidak valid.\n";
            break;
    }
}

?>
