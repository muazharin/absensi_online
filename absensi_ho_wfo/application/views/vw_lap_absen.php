<?php

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=Laporan.xls");

header("Pragma: no-cache");

header("Expires: 0");
include "template/conn.php";
// $this->load->database();
switch ($tgl) {
    case '01':
        $bln = "Januari";
        $max_date = 30;
        break;
    case '03':
        $bln = "Maret";
        $max_date = 30;
        break;
    case '04':
        $bln = "April";
        $max_date = 29;
        break;
    case '05':
        $bln = "Mei";
        $max_date = 30;
        break;
    case '06':
        $bln = "Juni";
        $max_date = 29;
        break;
    case '07':
        $bln = "Juli";
        $max_date = 30;
        break;
    case '08':
        $bln = "Agustus";
        $max_date = 30;
        break;
    case '09':
        $bln = "September";
        $max_date = 29;
        break;
    case '10':
        $bln = "Oktober";
        $max_date = 30;
        break;
    case '11':
        $bln = "November";
        $max_date = 29;
        break;
    case '12':
        $bln = "Desember";
        $max_date = 30;
        break;
    case '02':
        $bln = "Februari";
        if (date('Y') % 4 == '0') $max_date = 28;
        else $max_date = 27;
        break;
    default:
        $max_date = 29;
        break;
}

?>
<table border="1">
    <tr>
        <td>Bulan : <?= $bln.' '.date("Y"); ?></td>
        <!--td colspan="4" style="text-align: left;"> </td-->
    </tr>
	<tr>
		<td></td>
	</tr>
</table>
<table border="1" width="100%">
    <thead>
        <tr>
            <th rowspan="2">Nama</th>
            <?php

            for ($i = 0; $i <= $max_date; $i++) {
                $date = mktime(0, 0, 0, $tgl, 1 + $i, date("Y"));
                $date = date("d", $date);
                echo  "<th colspan='2'>" . $date . "</th>";
            }
            ?>
        </tr>
        <tr>
            <?php
            for ($i = 0; $i <= $max_date; $i++) {
                $date = mktime(0, 0, 0, $tgl, 1 + $i, date("Y"));
                $date = date("d", $date);
                echo  "<th>Masuk</th><th>Pulang</th>";
            }
            ?>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($data_absen as $absen) {
        ?>
            <tr>
                <td><?= $absen->nama; ?></td>
                <?php

                for ($i = 0; $i <= $max_date; $i++) {
                    $date = mktime(0, 0, 0, $tgl, 1 + $i, date("Y"));
                    $date = date("m-d", $date);
                    $query = "SELECT a.nama, b.* FROM user_ho a, absensi_ho b WHERE a.id_user = b.id_user AND nama = '" . $absen->nama . "' AND b.date_absen LIKE '%-" . $date . "'";
                    // $query = $this->db->query($query)->row();
                    $query = mysqli_query($con, $query);
                    $query = mysqli_fetch_array($query, MYSQLI_ASSOC);
                    $jam_masuk = date_create($query['in_time']);
                    $jam_masuk = date_format($jam_masuk, "H:i:s");

                    $jam_pulang = date_create($query['gohome_time']);
                    $jam_pulang = date_format($jam_pulang, "H:i:s");
                    if ($jam_masuk === '00:00:00') $jam_masuk = '';
                    if ($jam_pulang === '00:00:00') $jam_pulang = '';
                ?>
                    <td><?php if ($query['in_ket'] !== null) echo $query['in_ket'] . "<br>" . $jam_masuk;
                        else echo ''; ?></td>
                    <td><?php if ($query['gohome_ket'] !== null) echo $query['gohome_ket'] . "<br>" . $jam_pulang;
                        else echo ''; ?></td>
                <?php
                }
                ?>

            </tr>
        <?php
        }
        ?>
    </tbody>
</table>