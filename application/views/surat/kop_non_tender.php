<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPPBJ Konstruksi Tender di Atas 200 Juta</title>
    <style>
        @font-face {
            font-family: 'Bookman Old Style';
            src: local('Bookman Old Style'), local('Bookman');
        }

        body {
            font-family: 'Bookman Old Style', serif;
            margin: 0;
            padding: 0;
            font-size: 10pt;
        }

        @media print {
            @page {
                size: A4;
                margin: 15mm;
            }

            body {
                margin: 0;
                padding: 0;
            }
        }

        .container {
            width: 100%;
            max-width: 210mm;
            /* A4 width */
            margin: 0 auto;
            padding: 20mm;
            box-sizing: border-box;
        }

        .col-container {
            display: flex;
            justify-content: space-between;
            column-gap: 20px;
            /* Gap between the two columns */
        }

        .col {
            flex: 1;
            /* Each column takes equal space */
            box-sizing: border-box;
        }

        .letter-body {
            margin-top: 20px;
            line-height: 1.5;
        }

        .signature {
            margin-top: 40px;
            text-align: left;
        }

        .footer {
            margin-top: 40px;
        }

        table {
            width: 100%;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        td {
            padding: 0;
            /* Remove padding from table cells */
            margin: 0;
            /* Remove margin from table cells */
            line-height: 1.2;
            /* Adjust line height for tighter text */
            vertical-align: top;
        }

        .justify {
            text-align: justify;
            line-height: 1.6;
        }
    </style>
</head>

<body>
    <?php for ($i = 1; $i <= $jumlah_rangkap; $i++) { ?>
        <div class="container"
            style="padding-top: 10px;padding-left: 25px;padding-right: 25px;padding-bottom: 25px; border: 4px solid black; border-collapse: collapse;">
            <!-- BEGIN: Kop Surat -->

            <table border=0 cellspacing=0 cellpadding=0 style='border-collapse:collapse'>
                <tr style=''>
                    <td width=91 valign=top style='width:68.4pt;padding:0cm 5.4pt 0cm 5.4pt;'>
                        <span style='position:absolute;z-index:251660288;
              margin-left:8px;margin-top:3px;width:81px;height:96px'><img width=81 height=96
                                src="<?php echo base_url() ?>/assets/images/logo.png"></span>
                    </td>
                    <td>
                        <div style="text-align:center;font-size:16pt;font-weight: bold;">PEMERINTAH KABUPATEN BERAU</div>
                        <div style="text-align:center;font-size:14pt;font-weight: bold;">DINAS PEKERJAAN UMUM DAN PENATAAN
                            RUANG</div>
                        <div style="text-align:center;font-size:10pt;">Jl. Jend. Gatot Subroto No.123 Telp. 0554 – 21065
                            Tanjung Redeb</div>
                        <div style="text-align:center;font-size:14pt;font-weight:bold">Kalimantan Timur</div>
                        <br>
                    </td>
                </tr>

            </table>
            <!-- END: Kop Surat -->
            <hr style="border: 0; border-top: 2px solid black; margin: 1px 0;">
            <hr style="border: 0; border-top: 2px solid black; margin: 1px 0;">




            <!-- BEGIN: Heading -->
            <table>
                <tr style="text-align:center">
                    <td style="font-weight:bold;font-size:16pt">
                        <div>
                            SURAT PERINTAH KERJA
                        </div>
                        <div>
                            (SPK)
                        </div>
                    </td>
                </tr>
            </table>
            <!-- END: Heading -->

            <!-- BEGIN: Heading -->
            <table>
                <tr style="text-align:center">
                    <td style="font-weight:bold;font-size:14pt">
                        <div>
                            SUB KEGIATAN
                        </div>
                        <div>
                            PEMBANGUNAN JALAN
                        </div>
                    </td>
                </tr>
            </table>
            <!-- END: Heading -->


            <!-- BEGIN: Heading -->
            <table>
                <tr style="text-align:center">
                    <td style="font-weight:bold;font-size:14pt">
                        <div>
                            PEKERJAAN
                        </div>
                        <div>
                            <?= $row2->paket_pekerjaan ?>
                        </div>
                    </td>
                </tr>
            </table>
            <!-- END: Heading -->



            <!-- BEGIN: Heading -->
            <table>
                <tr style="text-align:center">
                    <td style="font-weight:bold;font-size:14pt">
                        <div>
                            LOKASI
                        </div>
                        <div>
                            KECAMATAN <?= strtoupper($row2->kecamatan) ?>
                        </div>
                    </td>
                </tr>
            </table>
            <!-- END: Heading -->

            <table>
                <tr>
                    <td>NOMOR</td>
                    <td>:</td>
                    <td><?= $row1->nomor_surat_perjanjian ?></td>
                </tr>
                <tr>
                    <td>TANGGAL</td>
                    <td>:</td>
                    <td><?php
                    $tanggal = $row1->tanggal_surat_perjanjian;
                    $bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                    $tanggal_format = date("d", strtotime($tanggal));
                    $bulan_index = date("n", strtotime($tanggal)) - 1;
                    $tahun = date("Y", strtotime($tanggal));
                    echo $tanggal_format . " " . $bulan[$bulan_index] . " " . $tahun;
                    ?></td>
                </tr>
                <tr>
                    <td colspan="3"><br></td>
                </tr>
                <tr>
                    <td>PROGRAM</td>
                    <td>:</td>
                    <td><?= $row2->program ?></td>
                </tr>
                <tr>
                    <td>KEGIATAN</td>
                    <td>:</td>
                    <td><?= $row2->kegiatan ?></td>
                </tr>
                <tr>
                    <td>SUB KEGIATAN</td>
                    <td>:</td>
                    <td><?= $row2->sub_kegiatan ?></td>
                </tr>
                <tr>
                    <td>PEKERJAAN</td>
                    <td>:</td>
                    <td><?= $row2->paket_pekerjaan ?></td>
                </tr>
                <tr>
                    <td>TANGGAL DPA</td>
                    <td>:</td>
                    <td><?php
                    $tanggal = $cover->tanggal_dpa;
                    $bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                    $tanggal_format = date("d", strtotime($tanggal));
                    $bulan_index = date("n", strtotime($tanggal)) - 1;
                    $tahun = date("Y", strtotime($tanggal));
                    echo $tanggal_format . " " . $bulan[$bulan_index] . " " . $tahun;
                    ?></td>
                </tr>
                <tr>
                    <td colspan="3"><br></td>
                </tr>
                <tr>
                    <td>NILAI KONTRAK</td>
                    <td>:</td>
                    <td><?= $row1->nilai_kontrak ?></td>
                </tr>
                <tr>
                    <td>TANGGAL MULAI</td>
                    <td>:</td>
                    <td><?php
                    $tanggal = $row1->tanggal_mulai;
                    $bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                    $tanggal_format = date("d", strtotime($tanggal));
                    $bulan_index = date("n", strtotime($tanggal)) - 1;
                    $tahun = date("Y", strtotime($tanggal));
                    echo $tanggal_format . " " . $bulan[$bulan_index] . " " . $tahun;
                    ?></td>
                </tr>
                <tr>
                    <td>TANGGAL SELESAI</td>
                    <td>:</td>
                    <td><?php
                    $tanggal = $row1->tanggal_selesai;
                    $bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                    $tanggal_format = date("d", strtotime($tanggal));
                    $bulan_index = date("n", strtotime($tanggal)) - 1;
                    $tahun = date("Y", strtotime($tanggal));
                    echo $tanggal_format . " " . $bulan[$bulan_index] . " " . $tahun;
                    ?></td>
                </tr>
                <tr>
                    <td>MASA PELAKSANAAN</td>
                    <td>:</td>
                    <td><?= hitungHari($row1->tanggal_mulai, $row1->tanggal_selesai); ?></td>
                </tr>
                <tr>
                    <td>SUMBER DANA</td>
                    <td>:</td>
                    <td><?= $row2->sumber_dana ?></td>
                </tr>
                <tr>
                    <td>TAHUN ANGGARAN</td>
                    <td>:</td>
                    <td><?= $this->tahun ?></td>
                </tr>
            </table>
            <br>
            <br>
            <hr style="border: 0; border-top: 2px solid black; margin: 1px 0;">
            <hr style="border: 0; border-top: 2px solid black; margin: 1px 0;">


            <table Style="text-align:center;border: 1px solid black; border-collapse: collapse;">
                <tr style="border: 1px solid black; border-collapse: collapse;">
                    <td rowspan="2" style="border: 1px solid black; border-collapse: collapse;">
                        <div style="font-weight:bold;font-size:12pt">
                            PENYEDIA JASA:
                        </div>
                        <div style="font-weight:bold;font-size:16pt">
                            <?= $penyedia_jasa->nama_penyedia ?>
                        </div>
                        <div>
                            Alamat: <?= $penyedia_jasa->alamat ?>
                        </div>
                    </td>
                    <td>
                        <div style="font-weight:bold;font-size:11pt">
                            BUKU
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="font-weight:bold;font-size:22pt">
                            <?php echo $i; ?>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    <?php } ?>
</body>
<?php
function hitungHari($tanggal_mulai, $tanggal_selesai)
{
    // Mengubah string tanggal menjadi objek DateTime
    $startDate = new DateTime($tanggal_mulai);
    $endDate = new DateTime($tanggal_selesai);

    // Menghitung selisih hari
    $interval = $startDate->diff($endDate);
    $jumlah_hari = $interval->days; // Mengambil jumlah hari

    // Mengubah angka ke dalam format teks (terbilang)
    $terbilang = terbilang($jumlah_hari);

    // Mengembalikan hasil dalam format angka dan teks
    return $jumlah_hari . " (" . ucfirst($terbilang) . ")";
}

// Fungsi terbilang untuk mengubah angka menjadi teks (seperti sebelumnya)
function terbilang($nilai)
{
    $nilai = abs($nilai);
    $huruf = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
    $temp = "";
    if ($nilai < 12) {
        $temp = " " . $huruf[$nilai];
    } elseif ($nilai < 20) {
        $temp = terbilang($nilai - 10) . " Belas";
    } elseif ($nilai < 100) {
        $temp = terbilang($nilai / 10) . " Puluh" . terbilang($nilai % 10);
    } elseif ($nilai < 200) {
        $temp = " Seratus" . terbilang($nilai - 100);
    } elseif ($nilai < 1000) {
        $temp = terbilang($nilai / 100) . " Ratus" . terbilang($nilai % 100);
    } elseif ($nilai < 2000) {
        $temp = " Seribu" . terbilang($nilai - 1000);
    } elseif ($nilai < 1000000) {
        $temp = terbilang($nilai / 1000) . " Ribu" . terbilang($nilai % 1000);
    } elseif ($nilai < 2000000) {
        $temp = " Sejuta" . terbilang($nilai - 1000000);
    } elseif ($nilai < 1000000000) {
        $temp = terbilang($nilai / 1000000) . " Juta" . terbilang($nilai % 1000000);
    } elseif ($nilai < 2000000000) {
        $temp = " SeMilyar" . terbilang($nilai - 1000000000);
    } else {
        $temp = terbilang($nilai / 1000000000) . " Milyar" . terbilang($nilai % 1000000000);
    }
    return $temp;
}
?>

</html>