<?php

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=Laporan.xls");

header("Pragma: no-cache");

header("Expires: 0");
// include "template/conn.php";
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
        <td>Bulan : <?= $bln . ' ' . date("Y"); ?></td>

        <!--td colspan="4" style="text-align: left;"> </td-->
    </tr>
    <tr>
        <td>
            Keterangan :
            <b style="color: blue;">WFO</b>,
            <b style="color: green;">WFH</b>,
            <b style="color: mediumvioletred;">Izin</b>,
            <b style="color: red;">Sakit</b>,
            <b style="color: orange;">Cuti</b>
        </td>
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
                if($i % 2 == 0){
                    echo  "<th colspan='4' style='background-color: lightyellow;'>" . $date . "</th>";
                }else{
                    echo  "<th colspan='4'>" . $date . "</th>";
                }
            }
            ?>
        </tr>
        <tr>
            <?php
            for ($i = 0; $i <= $max_date; $i++) {
                $date = mktime(0, 0, 0, $tgl, 1 + $i, date("Y"));
                $date = date("d", $date);
                if($i % 2 == 0){
                    echo  "<th style='background-color: lightyellow;'>Masuk</th><th style='background-color: lightyellow;'>Istirahat</th><th style='background-color: lightyellow;'>Selesai Istirahat</th><th style='background-color: lightyellow;'>Pulang</th>";
                }else{
                    echo  "<th>Masuk</th><th>Istirahat</th><th>Selesai Istirahat</th><th>Pulang</th>";
                }
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
                    $query = "SELECT a.nama, b.* FROM user_ho a, absensi_ho b WHERE a.id_user = b.id_user AND a.nama = '" . $absen->nama . "' AND b.date_absen LIKE '%-" . $date . "'";
                    $query = $this->db->query($query)->row();
                    if ($query !== null) {
                        $jam_masuk = date_create($query->in_time);
                        $jam_masuk = date_format($jam_masuk, "H:i:s");
                        $jam_istirahat = date_create($query->rest_time);
                        $jam_istirahat = date_format($jam_istirahat, "H:i:s");
                        $jam_sel_istirahat = date_create($query->done_rest_time);
                        $jam_sel_istirahat = date_format($jam_sel_istirahat, "H:i:s");
                        $jam_sel_istirahat = date_create($query->done_rest_time);
                        $jam_sel_istirahat = date_format($jam_sel_istirahat, "H:i:s");
                        $jam_pulang = date_create($query->gohome_time);
                        $jam_pulang = date_format($jam_pulang, "H:i:s");
                        if ($jam_masuk === '00:00:00') $jam_masuk = '';
                        if ($jam_istirahat === '00:00:00') $jam_istirahat = '';
                        if ($jam_sel_istirahat === '00:00:00') $jam_sel_istirahat = '';
                        if ($jam_pulang === '00:00:00') $jam_pulang = '';
                    }
                ?>
                    <?php if ($i % 2 == 0) { ?>
                        <td style="text-align: center; background-color:lightyellow;">
                        <?php } else { ?>
                        <td style="text-align: center;">
                        <?php } ?>
                        <?php
                        if ($query !== null) {
                            if ($query->ket !== null && $query->ket == 'WFH') {
                                if ($query->in_ket !== null) {
                                    switch ($query->in_ket) {
                                        case 'hadir':
                                            echo "<b style='color: green;'>" . $query->in_ket . "<br>" . $jam_masuk . "</b>";
                                            break;
                                        case 'sakit':
                                            echo "<b style='color: red;'>" . $query->in_ket . "<br>" . $jam_masuk . "</b>";
                                            break;
                                        case 'izin':
                                            echo "<b style='color: mediumvioletred;'>" . $query->in_ket . "<br>" . $jam_masuk . "</b>";
                                            break;
                                        case 'cuti':
                                            echo "<b style='color: orange;'>" . $query->in_ket . "<br>" . $jam_masuk . "</b>";
                                            break;
                                        default:
                                            echo "<b style='color: green;'>-</b>";
                                            break;
                                    }
                                }
                            } else if ($query->ket !== null && $query->ket == 'WFO') {
                                if ($query->in_ket !== null) {
                                    switch ($query->in_ket) {
                                        case 'hadir':
                                            echo "<b style='color: blue;'>" . $query->in_ket . "<br>" . $jam_masuk . "</b>";
                                            break;
                                        default:
                                            echo "<b style='color: blue;'>-</b>";
                                            break;
                                    }
                                }
                            } else {
                                echo '-';
                            }
                        }
                        ?>
                        </td>
                        <?php if ($i % 2 == 0) { ?>
                            <td style="text-align: center; background-color:lightyellow;">
                            <?php } else { ?>
                            <td style="text-align: center;">
                            <?php } ?>
                            <?php
                            if ($query !== null) {
                                if ($query->ket !== null && $query->ket == 'WFH') {
                                    if ($query->rest_ket !== null) {
                                        switch ($query->rest_ket) {
                                            case 'hadir':
                                                echo "<b style='color: green;'>" . $query->rest_ket . "<br>" . $jam_istirahat . "</b>";
                                                break;
                                            case 'sakit':
                                                echo "<b style='color: red;'>" . $query->rest_ket . "<br>" . $jam_istirahat . "</b>";
                                                break;
                                            case 'izin':
                                                echo "<b style='color: mediumvioletred;'>" . $query->rest_ket . "<br>" . $jam_istirahat . "</b>";
                                                break;
                                            case 'cuti':
                                                echo "<b style='color: orange;'>" . $query->rest_ket . "<br>" . $jam_istirahat . "</b>";
                                                break;
                                            default:
                                                echo "<b style='color: green;'>-</b>";
                                                break;
                                        }
                                    }
                                } else if ($query->ket !== null && $query->ket == 'WFO') {
                                    if ($query->rest_ket !== null) {
                                        switch ($query->rest_ket) {
                                            case 'hadir':
                                                echo "<b style='color: blue;'>" . $query->rest_ket . "<br>" . $jam_istirahat . "</b>";
                                                break;
                                            default:
                                                echo "<b style='color: blue;'>-</b>";
                                                break;
                                        }
                                    }
                                } else {
                                    echo '-';
                                }
                            }
                            ?>
                            </td>
                            <?php if ($i % 2 == 0) { ?>
                                <td style="text-align: center; background-color:lightyellow;">
                                <?php } else { ?>
                                <td style="text-align: center;">
                                <?php } ?>
                                <?php
                                if ($query !== null) {
                                    if ($query->ket !== null && $query->ket == 'WFH') {
                                        if ($query->done_rest_ket !== null) {
                                            switch ($query->done_rest_ket) {
                                                case 'hadir':
                                                    echo "<b style='color: green;'>" . $query->done_rest_ket . "<br>" . $jam_sel_istirahat . "</b>";
                                                    break;
                                                case 'sakit':
                                                    echo "<b style='color: red;'>" . $query->done_rest_ket . "<br>" . $jam_sel_istirahat . "</b>";
                                                    break;
                                                case 'izin':
                                                    echo "<b style='color: mediumvioletred;'>" . $query->done_rest_ket . "<br>" . $jam_sel_istirahat . "</b>";
                                                    break;
                                                case 'cuti':
                                                    echo "<b style='color: orange;'>" . $query->done_rest_ket . "<br>" . $jam_sel_istirahat . "</b>";
                                                    break;
                                                default:
                                                    echo "<b style='color: green;'>-</b>";
                                                    break;
                                            }
                                        }
                                    } else if ($query->ket !== null && $query->ket == 'WFO') {
                                        if ($query->done_rest_ket !== null) {
                                            switch ($query->done_rest_ket) {
                                                case 'hadir':
                                                    echo "<b style='color: blue;'>" . $query->done_rest_ket . "<br>" . $jam_sel_istirahat . "</b>";
                                                    break;
                                                default:
                                                    echo "<b style='color: blue;'>-</b>";
                                                    break;
                                            }
                                        }
                                    } else {
                                        echo '-';
                                    }
                                }
                                ?>
                                </td>
                                <?php if ($i % 2 == 0) { ?>
                                    <td style="text-align: center; background-color:lightyellow;">
                                    <?php } else { ?>
                                    <td style="text-align: center;">
                                    <?php } ?>
                                    <?php
                                    if ($query !== null) {
                                        if ($query->ket !== null && $query->ket == 'WFH') {
                                            if ($query->gohome_ket !== null) {
                                                switch ($query->gohome_ket) {
                                                    case 'pulang':
                                                        echo "<b style='color: green;'>" . $query->gohome_ket . "<br>" . $jam_pulang . "</b>";
                                                        break;
                                                    case 'sakit':
                                                        echo "<b style='color: red;'>" . $query->gohome_ket . "<br>" . $jam_pulang . "</b>";
                                                        break;
                                                    case 'izin':
                                                        echo "<b style='color: mediumvioletred;'>" . $query->gohome_ket . "<br>" . $jam_pulang . "</b>";
                                                        break;
                                                    case 'cuti':
                                                        echo "<b style='color: orange;'>" . $query->gohome_ket . "<br>" . $jam_pulang . "</b>";
                                                        break;
                                                    default:
                                                        echo "<b style='color: green;'>-</b>";
                                                        break;
                                                }
                                            }
                                        } else if ($query->ket !== null && $query->ket == 'WFO') {
                                            if ($query->gohome_ket !== null) {
                                                switch ($query->gohome_ket) {
                                                    case 'pulang':
                                                        echo "<b style='color: blue;'>" . $query->gohome_ket . "<br>" . $jam_pulang . "</b>";
                                                        break;
                                                    default:
                                                        echo "<b style='color: blue;'>-</b>";
                                                        break;
                                                }
                                            }
                                        } else {
                                            echo '-';
                                        }
                                    }
                                    ?>
                                    </td>
                                <?php
                            }
                                ?>

            </tr>
        <?php
        }
        ?>
    </tbody>
</table>