<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PNR Kodu Sorgula</title>
</head>
<body>
    <h1>PNR Kodu Sorgula</h1>
    <form action="<?= 'bilet/sorgula' ?>" method="GET">
        <input type="text" name="pnr_kodu" placeholder="PNR Kodu">
        <button type="submit">Sorgula</button>
    </form>
</body>
</html>
