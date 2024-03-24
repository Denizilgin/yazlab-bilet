<?php
$db = \Config\Database::connect(); // Veritabanı bağlantısını oluşturur
$kalkis = $_GET['i'];
$varis = $_GET['j'];
$tarih = $_GET['date'];

$query = $db->query("SELECT KalkisNoktasi, VarisNoktasi, Tarih, KoltukSayisi, KalkisSaati, Plaka , SeferID FROM seferler WHERE KalkisNoktasi = '$kalkis' AND VarisNoktasi = '$varis' AND Tarih = '$tarih'");

if ($query->getResult()) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Seferler</title>
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }

            th, td {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #f2f2f2;
            }

            tr:hover {
                background-color: #ddd;
            }

            a {
                color: blue;
                text-decoration: underline;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>Kalkış Noktası</th>
                <th>Varış Noktası</th>
                <th>Tarih</th>
                <th>Koltuk Sayısı</th>
                <th>Kalkış Saati</th>
                <th>Plaka</th>
            </tr>
    <?php
    foreach ($query->getResult() as $row) {
        ?>
            <tr onclick="goToSeferDetay('<?php echo $row->KalkisNoktasi; ?>', '<?php echo $row->VarisNoktasi; ?>', '<?php echo $row->Tarih; ?>', '<?php echo $row->KoltukSayisi; ?>', '<?php echo $row->KalkisSaati; ?>', '<?php echo $row->Plaka; ?>', '<?php echo $row->SeferID; ?>')">
                <td><?php echo $row->KalkisNoktasi; ?></td>
                <td><?php echo $row->VarisNoktasi; ?></td>
                <td><?php echo $row->Tarih; ?></td>
                <td><?php echo $row->KoltukSayisi; ?></td>
                <td><?php echo $row->KalkisSaati; ?></td>
                <td><?php echo $row->Plaka; ?></td>                
            </tr>
        <?php
    }
    ?>
        </table>

        <script>
            function goToSeferDetay(kalkis, varis, tarih, koltukSayisi, kalkisSaati, plaka ,seferID) {
                window.location.href = 'seferdetay?i=' + encodeURIComponent(kalkis) + '&j=' + encodeURIComponent(varis) + '&date=' + encodeURIComponent(tarih) + '&koltuk_sayisi=' + encodeURIComponent(koltukSayisi) + '&kalkis_saati=' + encodeURIComponent(kalkisSaati) + '&plaka=' + encodeURIComponent(plaka) + '&seferID=' + encodeURIComponent(seferID);
            }
        </script>
    </body>
    </html>
  
    <?php
} else {
    echo "Veri bulunamadı.";
}
?>
