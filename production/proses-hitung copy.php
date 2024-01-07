<?php
if (isset($_POST['submit']) && isset($_POST['gejala']) && isset($_POST['threshold'])) {
    // Capture the patient's name
    $nama_pasien = $_POST['nama_pasien'];
    $gejalaChecked = $_POST['gejala'];
    $threshold = $_POST['threshold'];

    if ($gejalaChecked == null) {
        echo('Kosong');
    } else {
        foreach ($gejalaChecked as $value) {
            $gejala[$value] = 1;
        }

        // Hitung
        $gejalaKlinis[0] = ($gejala[0] + $gejala[1] + $gejala[3] + $gejala[4]) / $gejalaKlinisMaks[0];
        $gejalaKlinis[1] = ($gejala[3] + $gejala[4] + $gejala[5]) / $gejalaKlinisMaks[1];
        $gejalaKlinis[2] = ($gejala[3] + $gejala[6]) / $gejalaKlinisMaks[2];
        $gejalaKlinis[3] = ($gejala[3] + $gejala[7] + $gejala[8]) / $gejalaKlinisMaks[3];
        $gejalaKlinis[9] = ($gejala[13] + $gejala[14]) / $gejalaKlinisMaks[9];
        $infeksi[0] = ($gejalaKlinis[0] + $gejalaKlinis[1] + $gejalaKlinis[2] + $gejalaKlinis[3] + $gejalaKlinis[9]);

        $gejalaKlinis[0] = ($gejala[0] + $gejala[1] + $gejala[3] + $gejala[4]) / $gejalaKlinisMaks[0];
        $gejalaKlinis[1] = ($gejala[3] + $gejala[4] + $gejala[5]) / $gejalaKlinisMaks[1];
        $gejalaKlinis[2] = ($gejala[3] + $gejala[6]) / $gejalaKlinisMaks[2];
        $gejalaKlinis[4] = ($gejala[7] + $gejala[9]) / $gejalaKlinisMaks[4];
        $gejalaKlinis[10] = ($gejala[13] + $gejala[15]) / $gejalaKlinisMaks[10];
        $infeksi[1] = ($gejalaKlinis[0] + $gejalaKlinis[1] + $gejalaKlinis[2] + $gejalaKlinis[4] + $gejalaKlinis[10]);

        $gejalaKlinis[0] = ($gejala[0] + $gejala[1] + $gejala[3] + $gejala[4]) / $gejalaKlinisMaks[0];
        $gejalaKlinis[1] = ($gejala[3] + $gejala[4] + $gejala[5]) / $gejalaKlinisMaks[1];
        $gejalaKlinis[2] = ($gejala[3] + $gejala[6]) / $gejalaKlinisMaks[2];
        $gejalaKlinis[5] = ($gejala[3] + $gejala[4] + $gejala[8] + $gejala[10]) / $gejalaKlinisMaks[5];
        $gejalaKlinis[6] = ($gejala[3] + $gejala[7] + $gejala[10] + $gejala[11]) / $gejalaKlinisMaks[6];
        $gejalaKlinis[9] = ($gejala[13] + $gejala[14]) / $gejalaKlinisMaks[9];
        $infeksi[2] = ($gejalaKlinis[0] + $gejalaKlinis[1] + $gejalaKlinis[2] + $gejalaKlinis[5] + $gejalaKlinis[6] + $gejalaKlinis[9]);

        $gejalaKlinis[1] = ($gejala[3] + $gejala[4] + $gejala[5]) / $gejalaKlinisMaks[1];
        $gejalaKlinis[7] = ($gejala[3] + $gejala[12]) / $gejalaKlinisMaks[7];
        $gejalaKlinis[11] = ($gejala[13] + $gejala[16]) / $gejalaKlinisMaks[11];
        $infeksi[3] = ($gejalaKlinis[1] + $gejalaKlinis[7] + $gejalaKlinis[11]);

        $gejalaKlinis[8] = ($gejala[0] + $gejala[1] + $gejala[2] + $gejala[3] + $gejala[4]) / $gejalaKlinisMaks[8];
        $gejalaKlinis[2] = ($gejala[3] + $gejala[6]) / $gejalaKlinisMaks[2];
        $gejalaKlinis[5] = ($gejala[3] + $gejala[4] + $gejala[8] + $gejala[10]) / $gejalaKlinisMaks[5];
        $gejalaKlinis[12] = ($gejala[17] + $gejala[18]) / $gejalaKlinisMaks[12];
        $infeksi[4] = ($gejalaKlinis[8] + $gejalaKlinis[2] + $gejalaKlinis[5] + $gejalaKlinis[12]);

        // Normalize percentages
        $totalPercentage = array_sum($infeksi);
        if ($totalPercentage > 0) {
            $infeksi = array_map(function ($percentage) use ($totalPercentage) {
                return ($percentage / $totalPercentage) * 100;
            }, $infeksi);
        }

        // Output the patient's name
        echo "<div><strong>Nama Pasien:</strong> $nama_pasien</div>";

        // Output the results
        echo "<div><strong>Hasil Analisis:</strong><br>";
        for ($i = 0; $i <= 4; $i++) {
            echo "<div>$infeksiString[$i]: " . round($infeksi[$i], 2) . " %</div>";
        }
        echo "</div>";

        // Output the diagnosis
        echo "<div><strong>Diagnosis:</strong><br>";
        $maxPercentageIndex = array_keys($infeksi, max($infeksi))[0];
        echo "<div style='color: red;'>$infeksiString[$maxPercentageIndex]</div>";
        echo "</div>";
    }
}
?>