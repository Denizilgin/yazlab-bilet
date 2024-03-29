<?php
$db = \Config\Database::connect(); // Veritabanı bağlantısını oluşturur
$query = $db->query('SELECT * FROM  otobusler');


if ($query) {
    $result = $query->getResult();

    if (!empty($result)) {
        // Sorgu başarılı bir şekilde yürütüldü ve sonuçlar alındı
        // İşlemlerinizi burada gerçekleştirin
        echo "";
    } else {
        // Sorgu başarılı bir şekilde yürütüldü, ancak sonuçlar boş
        echo "Sorgu başarılı bir şekilde yürütüldü, ancak sonuçlar boş.";
    }
} else {
    // Sorgu başarısız oldu
    echo "Sorgu başarısız oldu.";
}





$person_count = $_GET['person_count'];
$names = array();
$surnames = array();
$emails = array();
$dates = array();
$tcs = array();
$genders = array();
$tels = array();

$kalkis = $_GET['kalkis']; 
$varis = $_GET['varis']; 
$saat = $_GET['saat']; 
$pnr = $_GET['pnr']; 
$ucret = $_GET['ucret']; 


$selected_seats = $_GET['selected_seats'] ?? '';
$seferID = $_GET['SeferID'] ?? '';

$selected_seats_array = explode(',', $selected_seats);
    
// Her bir koltuk numarası için kayıt ekleme işlemi
foreach ($selected_seats_array as $koltukNumarasi) {
    $sql = "INSERT INTO koltuk_durumu (SeferID, KoltukNumarasi, DoluMu) VALUES ('$seferID', '$koltukNumarasi', TRUE)";
    if ($db->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Hata: " . $sql . "<br>" . $db->error;
    }
}

echo $kalkis;
echo $varis;
echo $saat;



// EKRANA YAZDIRMA
if (!empty($selected_seats)) {
    $seats = explode(',', $selected_seats);
    echo "<ul>";
    foreach ($seats as $seat) {
        echo " <li>Koltuk $seat</li>";
    }
    echo "</ul>";
} else {
    echo "<p>No seats selected</p>";
}

for($i = 0; $i < $person_count; $i++)
   {
    $name = $_GET['name'.$i]; 
    $names[] =  $name;
    $surname = $_GET['surname'.$i]; 
    $surnames[] =  $surname;
    $email =$_GET['email'.$i];
    $emails[] =  $email;
    $date =  $_GET['date'.$i];  
    $dates[] =  $date;
    $tc = $_GET['tc'.$i];
    $tcs[] =  $tc;
    $gender =  $_GET['gender'.$i];
    $genders[] =  $gender;
    $tel =  $_GET['tel'.$i];
    $tels[] =  $tel;
   }


for($i = 0; $i < $person_count; $i++)
{
    echo "Ad: $names[$i] <br>";
    echo "Soyad: $surnames[$i] <br>";
    echo "E-posta: $emails[$i] <br>";
    echo "Doğum Tarihi: $dates[$i] <br>";
    echo "TC Kimlik: $tcs[$i] <br>";
    echo "Cinsiyet: $genders[$i] <br>";
    echo "Telefon: $tels[$i] <br>";
    echo "<br>";


    $data = [
        'SeferID' => $seferID,
        'KullaniciEposta' => $emails[$i],
        'KullaniciAdi' => $names[$i],
        'KullaniciSoyadi' => $surnames[$i], // Burada kullanıcı soyadını eklemelisiniz
        'KalkisNoktasi' => $kalkis,
        'VarisNoktasi' => $varis,
        'KalkisSaati' => $saat,
        'KoltukNumarasi' => $selected_seats_array[$i], // Bu kısmın düzgün olduğundan emin olun
        'BiletFiyati' => $ucret,
        'SatinAlmaTarihiSaati' => date('Y-m-d H:i:s') // Satın alma tarihi ekleyin
    ];

    $query = $db->table('biletler')->insert($data);
 
}
echo "Toplam Ücret: $ucret <br>";
echo "PNR KODU: $pnr <br>";
$data = [
    'KalkisNoktasi' => '$names[$i]',
    'VarisNoktasi' => 'değer2'
];
$query = $db->table('otobusler')->insert($data);
// Aldığınız verileri ekrana yazdırma

?>