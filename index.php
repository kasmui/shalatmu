<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1024">
    <link rel="shortcut icon" href="https://falakmu.id/kiblat/logo.png">
    <title>Jadwal Shalat</title>
    <script src="https://falakmu.id/PrayTimes.js"></script>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .jadwal-table {
            width: 700px;
            border-collapse: collapse;
            margin: 20px 0;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .jadwal-table th {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        .jadwal-table th {
            background-color: #f4f4f4;
            font-size: 40px;
        }
        
        .jadwal-table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
            color: blue;
            font-size: 40px;
        }        
        
        .center {
            text-align: center;
            margin: 20px 0;
        }
        .city-selector {
            padding: 8px;
            font-size: 16px;
        }
        h1 {
            font-size: 40px;
        }
    </style>
    <style>
        header {
            padding: 10px 20px;
            border-bottom: 1px solid #ddd;
        }
    
        #date {
            color: #000;
        }
    </style>
    <style>
        .center-table {
            display: flex;
            justify-content: center; /* Untuk memusatkan secara horizontal */
        }
    </style>    
</head>
<body>
    <div class="center">
        <header style="display: flex; justify-content: center; align-items: center;">
            <h1>Jadwal Shalat - </h1>
            <h1 id="date"></h1>
        </header>
        <form method="get" action="" id="cityForm">
            <label for="city" style="color: darkgreen;">Pilih Kota:</label>
            <select style="background-color: #e6ffe6;" name="city" id="city" class="city-selector" onchange="document.getElementById('cityForm').submit()">
                <option value="Kota Semarang" <?= isset($_GET['city']) && $_GET['city'] == 'Kota Semarang' ? 'selected' : '' ?>>Kota Semarang</option>
                <option value="Kabupaten Kendal" <?= isset($_GET['city']) && $_GET['city'] == 'Kabupaten Kendal' ? 'selected' : '' ?>>Kabupaten Kendal</option>
                <option value="Kota Magelang" <?= isset($_GET['city']) && $_GET['city'] == 'Kota Magelang' ? 'selected' : '' ?>>Kota Magelang</option>
                <option value="Kota Pekalongan" <?= isset($_GET['city']) && $_GET['city'] == 'Kota Pekalongan' ? 'selected' : '' ?>>Kota Pekalongan</option>
                <option value="Kota Salatiga" <?= isset($_GET['city']) && $_GET['city'] == 'Kota Salatiga' ? 'selected' : '' ?>>Kota Salatiga</option>
                <option value="Kota Surakarta (Solo)" <?= isset($_GET['city']) && $_GET['city'] == 'Kota Surakarta (Solo)' ? 'selected' : '' ?>>Kota Surakarta (Solo)</option>
                <option value="Kota Tegal" <?= isset($_GET['city']) && $_GET['city'] == 'Kota Tegal' ? 'selected' : '' ?>>Kota Tegal</option>
                <option value="Kabupaten Banjarnegara" <?= isset($_GET['city']) && $_GET['city'] == 'Kabupaten Banjarnegara' ? 'selected' : '' ?>>Kabupaten Banjarnegara</option>
                <option value="Kabupaten Banyumas" <?= isset($_GET['city']) && $_GET['city'] == 'Kabupaten Banyumas' ? 'selected' : '' ?>>Kabupaten Banyumas</option>
                <option value="Kabupaten Batang" <?= isset($_GET['city']) && $_GET['city'] == 'Kabupaten Batang' ? 'selected' : '' ?>>Kabupaten Batang</option>
                <option value="Kabupaten Blora" <?= isset($_GET['city']) && $_GET['city'] == 'Kabupaten Blora' ? 'selected' : '' ?>>Kabupaten Blora</option>
                <option value="Kabupaten Boyolali" <?= isset($_GET['city']) && $_GET['city'] == 'Kabupaten Boyolali' ? 'selected' : '' ?>>Kabupaten Boyolali</option>
                <option value="Kabupaten Brebes" <?= isset($_GET['city']) && $_GET['city'] == 'Kabupaten Brebes' ? 'selected' : '' ?>>Kabupaten Brebes</option>
                <option value="Kabupaten Cilacap" <?= isset($_GET['city']) && $_GET['city'] == 'Kabupaten Cilacap' ? 'selected' : '' ?>>Kabupaten Cilacap</option>
                <option value="Kabupaten Demak" <?= isset($_GET['city']) && $_GET['city'] == 'Kabupaten Demak' ? 'selected' : '' ?>>Kabupaten Demak</option>
                <option value="Kabupaten Grobogan" <?= isset($_GET['city']) && $_GET['city'] == 'Kabupaten Grobogan' ? 'selected' : '' ?>>Kabupaten Grobogan</option>
                <option value="Kabupaten Jepara" <?= isset($_GET['city']) && $_GET['city'] == 'Kabupaten Jepara' ? 'selected' : '' ?>>Kabupaten Jepara</option>
                <option value="Kabupaten Karanganyar" <?= isset($_GET['city']) && $_GET['city'] == 'Kabupaten Karanganyar' ? 'selected' : '' ?>>Kabupaten Karanganyar</option>
                <option value="Kabupaten Kebumen" <?= isset($_GET['city']) && $_GET['city'] == 'Kabupaten Kebumen' ? 'selected' : '' ?>>Kabupaten Kebumen</option>
                <option value="Kabupaten Klaten" <?= isset($_GET['city']) && $_GET['city'] == 'Kabupaten Klaten' ? 'selected' : '' ?>>Kabupaten Klaten</option>
                <option value="Kabupaten Kudus" <?= isset($_GET['city']) && $_GET['city'] == 'Kabupaten Kudus' ? 'selected' : '' ?>>Kabupaten Kudus</option>
                <option value="Kabupaten Magelang" <?= isset($_GET['city']) && $_GET['city'] == 'Kabupaten Magelang' ? 'selected' : '' ?>>Kabupaten Magelang</option>
                <option value="Kabupaten Pati" <?= isset($_GET['city']) && $_GET['city'] == 'Kabupaten Pati' ? 'selected' : '' ?>>Kabupaten Pati</option>
                <option value="Kabupaten Pekalongan" <?= isset($_GET['city']) && $_GET['city'] == 'Kabupaten Pekalongan' ? 'selected' : '' ?>>Kabupaten Pekalongan</option>
                <option value="Kabupaten Pemalang" <?= isset($_GET['city']) && $_GET['city'] == 'Kabupaten Pemalang' ? 'selected' : '' ?>>Kabupaten Pemalang</option>
                <option value="Kabupaten Purbalingga" <?= isset($_GET['city']) && $_GET['city'] == 'Kabupaten Purbalingga' ? 'selected' : '' ?>>Kabupaten Purbalingga</option>
                <option value="Kabupaten Purworejo" <?= isset($_GET['city']) && $_GET['city'] == 'Kabupaten Purworejo' ? 'selected' : '' ?>>Kabupaten Purworejo</option>
                <option value="Kabupaten Rembang" <?= isset($_GET['city']) && $_GET['city'] == 'Kabupaten Rembang' ? 'selected' : '' ?>>Kabupaten Rembang</option>
                <option value="Kabupaten Semarang" <?= isset($_GET['city']) && $_GET['city'] == 'Kabupaten Semarang' ? 'selected' : '' ?>>Kabupaten Semarang</option>
                <option value="Kabupaten Sragen" <?= isset($_GET['city']) && $_GET['city'] == 'Kabupaten Sragen' ? 'selected' : '' ?>>Kabupaten Sragen</option>
                <option value="Kabupaten Sukoharjo" <?= isset($_GET['city']) && $_GET['city'] == 'Kabupaten Sukoharjo' ? 'selected' : '' ?>>Kabupaten Sukoharjo</option>
                <option value="Kabupaten Tegal" <?= isset($_GET['city']) && $_GET['city'] == 'Kabupaten Tegal' ? 'selected' : '' ?>>Kabupaten Tegal</option>
                <option value="Kabupaten Temanggung" <?= isset($_GET['city']) && $_GET['city'] == 'Kabupaten Temanggung' ? 'selected' : '' ?>>Kabupaten Temanggung</option>
                <option value="Kabupaten Wonogiri" <?= isset($_GET['city']) && $_GET['city'] == 'Kabupaten Wonogiri' ? 'selected' : '' ?>>Kabupaten Wonogiri</option>
                <option value="Kabupaten Wonosobo" <?= isset($_GET['city']) && $_GET['city'] == 'Kabupaten Wonosobo' ? 'selected' : '' ?>>Kabupaten Wonosobo</option>
                <option value="Yogyakarta" <?= isset($_GET['city']) && $_GET['city'] == 'Yogyakarta' ? 'selected' : '' ?>>Yogyakarta</option>
                <option value="Serang" <?= isset($_GET['city']) && $_GET['city'] == 'Serang' ? 'selected' : '' ?>>Serang</option>
                <option value="Cirebon" <?= isset($_GET['city']) && $_GET['city'] == 'Cirebon' ? 'selected' : '' ?>>Cirebon</option>
                <option value="Indramayu" <?= isset($_GET['city']) && $_GET['city'] == 'Indramayu' ? 'selected' : '' ?>>Indramayu</option>
                <option value="Sukamandi" <?= isset($_GET['city']) && $_GET['city'] == 'Sukamandi' ? 'selected' : '' ?>>Sukamandi</option>
                <option value="Bogor" <?= isset($_GET['city']) && $_GET['city'] == 'Bogor' ? 'selected' : '' ?>>Bogor</option>
                <option value="Bandung" <?= isset($_GET['city']) && $_GET['city'] == 'Bandung' ? 'selected' : '' ?>>Bandung</option>
                <option value="Tangerang" <?= isset($_GET['city']) && $_GET['city'] == 'Tangerang' ? 'selected' : '' ?>>Tangerang</option>
                <option value="Jakarta" <?= isset($_GET['city']) && $_GET['city'] == 'Jakarta' ? 'selected' : '' ?>>Jakarta</option>
                <option value="Surabaya" <?= isset($_GET['city']) && $_GET['city'] == 'Surabaya' ? 'selected' : '' ?>>Surabaya</option>
                <option value="Medan" <?= isset($_GET['city']) && $_GET['city'] == 'Medan' ? 'selected' : '' ?>>Medan</option>
                <option value="Bandar Lampung" <?= isset($_GET['city']) && $_GET['city'] == 'Bandar Lampung' ? 'selected' : '' ?>>Bandar Lampung</option>
                <option value="Denpasar" <?= isset($_GET['city']) && $_GET['city'] == 'Denpasar' ? 'selected' : '' ?>>Denpasar</option>
                <option value="Makassar" <?= isset($_GET['city']) && $_GET['city'] == 'Makassar' ? 'selected' : '' ?>>Makassar</option>
                <option value="Jayapura" <?= isset($_GET['city']) && $_GET['city'] == 'Jayapura' ? 'selected' : '' ?>>Jayapura</option>
                <option value="Tokyo" <?= isset($_GET['city']) && $_GET['city'] == 'Tokyo' ? 'selected' : '' ?>>Tokyo</option>
                <option value="Seoul" <?= isset($_GET['city']) && $_GET['city'] == 'Seoul' ? 'selected' : '' ?>>Seoul</option>
                <option value="Singapore" <?= isset($_GET['city']) && $_GET['city'] == 'Singapore' ? 'selected' : '' ?>>Singapore</option>
                <option value="Bangkok" <?= isset($_GET['city']) && $_GET['city'] == 'Bangkok' ? 'selected' : '' ?>>Bangkok</option>
                <option value="Makkah" <?= isset($_GET['city']) && $_GET['city'] == 'Makkah' ? 'selected' : '' ?>>Makkah</option>
                <option value="Istanbul" <?= isset($_GET['city']) && $_GET['city'] == 'Istanbul' ? 'selected' : '' ?>>Istanbul</option>
                <option value="London" <?= isset($_GET['city']) && $_GET['city'] == 'London' ? 'selected' : '' ?>>London</option>
                <option value="New York" <?= isset($_GET['city']) && $_GET['city'] == 'New York' ? 'selected' : '' ?>>New York</option>
                <option value="Sydney" <?= isset($_GET['city']) && $_GET['city'] == 'Sydney' ? 'selected' : '' ?>>Sydney</option>
            </select>
        </form>
    </div>

    <?php
        // Daftar koordinat kota
        $coordinates = [
            "Kota Semarang" => [-6.966, 110.416, 4, 7],
            "Kabupaten Kendal" => [-6.898, 110.205, 3, 7],
            "Kota Magelang" => [-7.470, 110.217, 380, 7],
            "Kota Pekalongan" => [-6.888, 109.675, 2, 7],
            "Kota Salatiga" => [-7.330, 110.504, 590, 7],
            "Kota Surakarta (Solo)" => [-7.569, 110.828, 93, 7],
            "Kota Tegal" => [-6.869, 109.125, 3, 7],
            "Kabupaten Banjarnegara" => [-7.379, 109.697, 250, 7],
            "Kabupaten Banyumas" => [-7.516, 109.296, 131, 7],
            "Kabupaten Batang" => [-7.042, 109.908, 24, 7],
            "Kabupaten Blora" => [-7.026, 111.419, 70, 7],
            "Kabupaten Boyolali" => [-7.531, 110.597, 107, 7],
            "Kabupaten Brebes" => [-6.964, 108.902, 10, 7],
            "Kabupaten Cilacap" => [-7.631, 108.983, 6, 7],
            "Kabupaten Demak" => [-6.894, 110.661, 3, 7],
            "Kabupaten Grobogan" => [-7.111, 110.950, 29, 7],
            "Kabupaten Jepara" => [-6.580, 110.678, 4, 7],
            "Kabupaten Karanganyar" => [-7.620, 110.953, 142, 7],
            "Kabupaten Kebumen" => [-7.678, 109.655, 26, 7],
            "Kabupaten Klaten" => [-7.705, 110.606, 150, 7],
            "Kabupaten Kudus" => [-6.805, 110.841, 14, 7],
            "Kabupaten Magelang" => [-7.483, 110.217, 360, 7],
            "Kabupaten Pati" => [-6.741, 111.034, 15, 7],
            "Kabupaten Pekalongan" => [-7.000, 109.625, 10, 7],
            "Kabupaten Pemalang" => [-6.894, 109.378, 6, 7],
            "Kabupaten Purbalingga" => [-7.391, 109.363, 100, 7],
            "Kabupaten Purworejo" => [-7.696, 110.008, 16, 7],
            "Kabupaten Rembang" => [-6.708, 111.449, 8, 7],
            "Kabupaten Semarang" => [-7.225, 110.438, 318, 7],
            "Kabupaten Sragen" => [-7.430, 111.015, 87, 7],
            "Kabupaten Sukoharjo" => [-7.686, 110.829, 118, 7],
            "Kabupaten Tegal" => [-6.879, 109.125, 11, 7],
            "Kabupaten Temanggung" => [-7.308, 110.166, 560, 7],
            "Kabupaten Wonogiri" => [-7.883, 110.924, 148, 7],
            "Kabupaten Wonosobo" => [-7.362, 109.900, 775, 7],
            "Yogyakarta" => [-7.797, 110.371, 113, 7],
            "Serang" => [-6.1177, 106.1501, 1, 7],
            "Cirebon" => [-6.722, 108.556, 4, 7],
            "Indramayu" => [-6.335, 108.325, 1, 7],
            "Sukamandi" => [-6.578, 107.822, 46, 7],
            "Bogor" => [-6.595, 106.816, 243, 7],
            "Bandung" => [-6.917, 107.619, 768, 7],
            "Tangerang" => [-6.178, 106.629, 12, 7],
            "Jakarta" => [-6.2088, 106.8456, 0, 7],
            "Surabaya" => [-7.2575, 112.7521, 0, 7],
            "Medan" => [3.5952, 98.6722, 2, 7],
            "Bandar Lampung" => [-5.4486, 105.2682, 25, 7],
            "Denpasar" => [-8.65, 115.2167, 0, 8],
            "Makassar" => [-5.148, 119.433, 0, 8],
            "Jayapura" => [-2.5914, 140.6678, 0, 9],
            "Tokyo" => [35.6762, 139.6503, 0, 9],
            "Seoul" => [37.5665, 126.978, 0, 9],
            "Singapore" => [1.3521, 103.8198, 0, 8],
            "Bangkok" => [13.7568, 100.5019, 0, 7],
            "Makkah" => [21.4225, 39.8262, 0, 3],
            "Istanbul" => [41.0082, 28.9784, 0, 3],
            "London" => [51.5074, -0.1278, 0, 0],
            "New York" => [40.7128, -74.0060, 0, -4],
            "Sydney" => [-33.8651, 151.2093, 0, 10]
        ];


    // Tangkap kota dari parameter GET, default ke Semarang
    $selected_city = isset($_GET['city']) && array_key_exists($_GET['city'], $coordinates) ? $_GET['city'] : 'Semarang';

    // Ambil koordinat berdasarkan kota yang dipilih
    $latlon = $coordinates[$selected_city];
    ?>

    <div class="center">
        <h2>Wilayah - <?= htmlspecialchars($selected_city) ?></h2>
    </div>

    <script>
        // Ambil data waktu shalat
        var PT = new PrayTimes('MU'); 
        var date = new Date(); 
        var prayertimes = PT.getTimes(date, [<?= $latlon[0] ?>, <?= $latlon[1] ?>]);
        var list = ['Fajr', 'Dhuhr', 'Asr', 'Maghrib', 'Isha'];

        // Generate tabel waktu shalat
        var jadwalTable = `
            <div class="center-table">
                <table class="jadwal-table">
                    <thead>
                        <tr>
                            <th style="background-color: #ffccff;">Shalat</th>
                            <th style="background-color: #ffffb3;">Waktu (UTC+7)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="background-color: #ffe6ff;">Shubuh</td>
                            <td style="background-color: #ffffe6;">${prayertimes[list[0].toLowerCase()]}</td>
                        </tr>
                        <tr>
                            <td style="background-color: #ffe6ff;">Dhuhur</td>
                            <td style="background-color: #ffffe6;">${prayertimes[list[1].toLowerCase()]}</td>
                        </tr>
                        <tr>
                            <td style="background-color: #ffe6ff;">Ashar</td>
                            <td style="background-color: #ffffe6;">${prayertimes[list[2].toLowerCase()]}</td>
                        </tr>
                        <tr>
                            <td style="background-color: #ffe6ff;">Maghrib</td>
                            <td style="background-color: #ffffe6;">${prayertimes[list[3].toLowerCase()]}</td>
                        </tr>
                        <tr>
                            <td style="background-color: #ffe6ff;">Isya</td>
                            <td style="background-color: #ffffe6;">${prayertimes[list[4].toLowerCase()]}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div style="font-size: 15px; color: darkblue; text-align: center;">*) Sesuai keputusan MTT PP Muhammadiyah</div>
        `;

        // Tampilkan tabel
        document.write(jadwalTable);
    </script>
    <script>
        // Ambil elemen div dengan id 'date'
        const dateElement = document.getElementById('date');
    
        // Dapatkan tanggal saat ini
        const today = new Date();
        const options = { day: 'numeric', month: 'long', year: 'numeric' };
        
        // Format tanggal menjadi string
        const formattedDate = today.toLocaleDateString('id-ID', options);
    
        // Set teks pada elemen
        dateElement.textContent = formattedDate;
    </script>    
</body>
</html>
