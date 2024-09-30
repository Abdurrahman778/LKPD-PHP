<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Kompensasi</title>
</head>
<body>
    <h1>kompensasi jam kerja</h1>

    <form method="post">
        <label for="dari">Dari Jam *AM:</label>
        <input type="time" id="dari" name="dari" required>

        <label for="sampai">Sampai Jam *PM:</label>
        <input type="time" id="sampai" name="sampai" required>

        <button type="submit">Hitung</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['dari']) && isset($_POST['sampai'])) {
        function menghitungKompensasi($jam) {
            $kompensasiSatuJam = 50000;
            $kompensasiJam = 25000;

            if ($jam > 1) {
                $totalKompensasi = $kompensasiSatuJam + ($jam - 1) * $kompensasiJam;
            } else {
                $totalKompensasi = $kompensasiSatuJam;
            }

            return $totalKompensasi;
        }
        $dari = $_POST['dari'];
        $sampai = $_POST['sampai'];
        $total = strtotime($sampai) - strtotime($dari);
        $jam = floor($total / 3600);
        $waktuLembur = $jam - 8; 
        $kompensasi = menghitungKompensasi($waktuLembur);
        
        echo "<p>Total Jam Kerja: $waktuLembur jam</p>";
        echo "Kompensasi: Rp." . number_format($kompensasi,0,',','.');
    }
    ?>
</body>
</html>
