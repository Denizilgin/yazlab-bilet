<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilet Detayı</title>
</head>
<body>
    <h1>Bilet Detayı</h1>
    <p><strong>PNR Kodu:</strong> <?= $bilet['PNRKodu'] ?></p>
    <p><strong>Ad:</strong> <?= $bilet['KullaniciAdi'] ?></p>
    <p><strong>Soyad:</strong> <?= $bilet['KullaniciSoyadi'] ?></p>
    <p><strong>Kalkış Noktası:</strong> <?= $bilet['KalkisNoktasi'] ?></p>
    <p><strong>Varış Noktası:</strong> <?= $bilet['VarisNoktasi'] ?></p>
    <p><strong>Kalkış Saati:</strong> <?= $bilet['KalkisSaati'] ?></p>
    <p><strong>Koltuk Numarası:</strong> <?= $bilet['KoltukNumarasi'] ?></p>
    <p><strong>Satin Alma Tarihi:</strong> <?= $bilet['SatinAlmaTarihiSaati'] ?></p>
    <p><strong>Bilet Fiyatı:</strong> <?= $bilet['BiletFiyati'] ?></p>

</body>
</html>
