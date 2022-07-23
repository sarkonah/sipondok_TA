<!DOCTYPE html>
<html>

<head>
    <title>Rapor Nilai Santri</title>
    <style>
    table {
        width: 100%;
        border-collapse: collapse;
        font-family: 'Times New Roman', Times, serif;
    }

    table,
    th,
    td {
        font-size: 12px;
        text-align: left;
        padding-left: 5px;
        border: 1px solid black;
    }

    h4 {
        text-align: center;
    }
    </style>
</head>

<body>
    <h4>Rapor Nilai Santri</h4>
    <p>Nama Santri : <?= $rapor->nama_santri; ?></p>
    <p>Nis Santri : <?= $rapor->nis; ?></p>
    <p>Kelas :
        <?= $kelas ?></p>
    <!-- <?php if ($kelas->id_kelas == "1") { ?>
    <p>Kelas : Pegon Bacaan</p>
    <?php } else if ($kelas->id_kelas == "2") { ?>
    <p>Kelas : Lambatan</p>
    <?php } else if ($kelas->id_kelas == "3") { ?> -->
    <!-- <?php } ?> -->
    <table>
        <tr>
            <th>No</th>
            <th>Mata Pelajaran </th>
            <th>KKM</th>
            <th>Nilai</th>

        </tr>
        <?php $no = 1;
        foreach ($mapel as $mp) : ?>
        <tr>
            <td><?= $no++; ?> </td>
            <td><?= $mp['nama_mapel']; ?></td>
            <td><?= $mp['nilai_ratarata']; ?></td>
            <td><?= $mp['nilai']; ?></td>
        </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="3">Total Nilai</td>
            <td><?= $sum->nilai ?></td>
        </tr>
        <tr>
            <td colspan="3">Nilai Rata-Rata</td>
            <td><?= round($avg->nilai, 1) ?></td>
        </tr>
    </table>
</body>

</html>