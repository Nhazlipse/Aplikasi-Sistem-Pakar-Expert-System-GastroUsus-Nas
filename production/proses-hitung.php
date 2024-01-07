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

                //Hitung persentase untuk infeksi Keracunan Staphylococcus Aureus
				$gejalaKlinis[0] = ($gejala[0] + $gejala[1] + $gejala[3] + $gejala[4]) / $gejalaKlinisMaks[0];
				$gejalaKlinis[1] = ($gejala[3] + $gejala[4] + $gejala[5]) / $gejalaKlinisMaks[1];
				$gejalaKlinis[2] = ($gejala[3] + $gejala[6]) / $gejalaKlinisMaks[2];
				$gejalaKlinis[3] = ($gejala[3] + $gejala[7] + $gejala[8]) / $gejalaKlinisMaks[3];
				$gejalaKlinis[9] = ($gejala[13] + $gejala[14]) / $gejalaKlinisMaks[9];
                // Mulai Menghitung persentase
				$infeksi[0] = ($gejalaKlinis[0] + $gejalaKlinis[1] + $gejalaKlinis[2] + $gejalaKlinis[3] + $gejalaKlinis[9]) / $infeksiMaks[0] * 100;

                //Hitung persentase untuk infeksi Keracunan Jamur
				$gejalaKlinis[0] = ($gejala[0] + $gejala[1] + $gejala[3] + $gejala[4]) / $gejalaKlinisMaks[0];
				$gejalaKlinis[1] = ($gejala[3] + $gejala[4] + $gejala[5]) / $gejalaKlinisMaks[1];
				$gejalaKlinis[2] = ($gejala[3] + $gejala[6]) / $gejalaKlinisMaks[2];
				$gejalaKlinis[4] = ($gejala[7] + $gejala[9]) / $gejalaKlinisMaks[4];
				$gejalaKlinis[10] = ($gejala[13] + $gejala[15]) / $gejalaKlinisMaks[10];
                // Mulai Menghitung Persentase
				$infeksi[1] = ($gejalaKlinis[0] + $gejalaKlinis[1] + $gejalaKlinis[2] + $gejalaKlinis[4] + $gejalaKlinis[10]) / $infeksiMaks[1] * 100;

                //Hitung persentase untuk infeksi Keracunan Salmonellae
				$gejalaKlinis[0] = ($gejala[0] + $gejala[1] + $gejala[3] + $gejala[4]) / $gejalaKlinisMaks[0];
				$gejalaKlinis[1] = ($gejala[3] + $gejala[4] + $gejala[5]) / $gejalaKlinisMaks[1];
				$gejalaKlinis[2] = ($gejala[3] + $gejala[6]) / $gejalaKlinisMaks[2];
				$gejalaKlinis[5] = ($gejala[3] + $gejala[4] + $gejala[8] + $gejala[10]) / $gejalaKlinisMaks[5];
				$gejalaKlinis[6] = ($gejala[3] + $gejala[7] + $gejala[10] + $gejala[11]) / $gejalaKlinisMaks[6];
				$gejalaKlinis[9] = ($gejala[13] + $gejala[14]) / $gejalaKlinisMaks[9];
                // Mulai Menghitung persentase
				$infeksi[2] = ($gejalaKlinis[0] + $gejalaKlinis[1] + $gejalaKlinis[2] + $gejalaKlinis[5] + $gejalaKlinis[6] + $gejalaKlinis[9]) / $infeksiMaks[2] * 100;

                //Hitung persentase untuk infeksi Keracunan Clostridium Botulinum
				$gejalaKlinis[1] = ($gejala[3] + $gejala[4] + $gejala[5]) / $gejalaKlinisMaks[1];
				$gejalaKlinis[7] = ($gejala[3] + $gejala[12]) / $gejalaKlinisMaks[7];
				$gejalaKlinis[11] = ($gejala[13] + $gejala[16]) / $gejalaKlinisMaks[11];
                // Mulai Menghitung persentase
				$infeksi[3] = ($gejalaKlinis[1] + $gejalaKlinis[7] + $gejalaKlinis[11]) / $infeksiMaks[3] * 100;

                //Hitung persentase untuk infeksi Keracunan Campylobacher
				$gejalaKlinis[8] = ($gejala[0] + $gejala[1] + $gejala[2] + $gejala[3] + $gejala[4]) / $gejalaKlinisMaks[8];
				$gejalaKlinis[2] = ($gejala[3] + $gejala[6]) / $gejalaKlinisMaks[2];
				$gejalaKlinis[5] = ($gejala[3] + $gejala[4] + $gejala[8] + $gejala[10]) / $gejalaKlinisMaks[5];
				$gejalaKlinis[12] = ($gejala[17] + $gejala[18]) / $gejalaKlinisMaks[12];
                // Mulai Menghitung persentase
				$infeksi[4] = ($gejalaKlinis[8] + $gejalaKlinis[2] + $gejalaKlinis[5] + $gejalaKlinis[12]) / $infeksiMaks[4] * 100;

         // Output the patient's name
    echo "<div><strong>Nama Pasien:</strong> $nama_pasien</div>";

    // Output the results
    echo "<div><strong>Hasil Analisis:</strong><br>";
    
    $maxPercentage = 0;
    $detectedDiseases = array();

    for ($i = 0; $i <= 4; $i++) {
        $currentPercentage = round($infeksi[$i], 2);
        echo "<div>$infeksiString[$i]: $currentPercentage %</div>";

        if ($currentPercentage >= $threshold && $currentPercentage > $maxPercentage) {
            // Tampilkan Prioritas penyakit yang memiliki persentase tertinggi
            $maxPercentage = $currentPercentage;
            $detectedDiseases = array($infeksiString[$i]);
        } elseif ($currentPercentage == $maxPercentage && $currentPercentage >= $threshold) {
            // Tambahkan penyakit lain dengan persentase yang sama (jika ada)
            $detectedDiseases[] = $infeksiString[$i];
        }
    }
    echo "</div>";

    // Output the diagnosis
    echo "<div><strong>Diagnosis:</strong><br>";
    if (!empty($detectedDiseases)) {
        echo "<div style='color: red;'>" . implode(", ", $detectedDiseases) . "</div>";
    } else {
        echo "<div>Tidak ada Infeksi yang terlalu parah.</div>";
    }
    echo "</div>";
}}
?>