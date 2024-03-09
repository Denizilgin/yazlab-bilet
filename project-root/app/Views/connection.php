<?php
$servername = "localhost"; // MySQL sunucu adı
$username = "root"; // MySQL kullanıcı adı
$password = "yl,85!NN!67"; // MySQL şifre
$dbname = "biletsitesi"; // Kullanılacak veritabanı adı

// MySQL bağlantısı oluşturma
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol etme
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}
echo "Bağlantı başarılı";
?>