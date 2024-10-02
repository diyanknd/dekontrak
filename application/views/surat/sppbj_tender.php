<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPPBJ Konstruksi Tender - <?php echo $row2->paket_pekerjaan; ?></title>
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
    <div class="container" style="padding-top: 25px;">
        <!-- BEGIN: Kop Surat -->

        <table border=0 cellspacing=0 cellpadding=0 style='border-collapse:collapse'>
            <tr style=''>
                <td width=91 valign=top style='width:68.4pt;padding:0cm 5.4pt 0cm 5.4pt;'>
                    <span style='position:absolute;z-index:251660288;
          margin-left:8px;margin-top:3px;width:81px;height:96px'><img width=81 height=96
                            src="<?php echo base_url() ?>/assets/images/logo.png"></span>
                </td>
                <td>
                    <div style="text-align:center;font-size:14pt;font-weight: bold;">PEMERINTAH KABUPATEN BERAU</div>
                    <div style="text-align:center;font-size:12pt;font-weight: bold;">DINAS PEKERJAAN UMUM DAN PENATAAN
                        RUANG</div>
                    <div style="text-align:center;font-size:11pt;">SUB KEGIATAN
                        <?php echo strtoupper($row2->sub_kegiatan); ?>
                    </div>
                    <div style="text-align:center;font-size:11pt;">TAHUN ANGGARAN 2024</div>
                    <div style="text-align:center;font-size:10pt;">Jl. Jend. Gatot Subroto No.123 Telp. 0554 – 21065
                        Tanjung Redeb</div>
                    <div style="text-align:center;font-size:11pt;">Berau – Kalimantan Timur</div>
                </td>
            </tr>
            <tr>
                <td colspan="2"><img width=654 src="<?php echo base_url() ?>/assets/images/image003.gif"></td>
            </tr>
        </table>
        <!-- END: Kop Surat -->




        <!-- BEGIN: Tanggal -->
        <table>
            <td style="text-align:right">Tanjung Redeb, <?php
            $tanggal = $row1->tanggal_sppbj;
            $bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
            $tanggal_format = date("d", strtotime($tanggal));
            $bulan_index = date("n", strtotime($tanggal)) - 1;
            $tahun = date("Y", strtotime($tanggal));
            echo $tanggal_format . " " . $bulan[$bulan_index] . " " . $tahun;
            ?></td>
        </table>
        <!-- END: Tanggal -->

        <!-- BEGIN: Nomor & Lampiran -->
        <table>
            <tr>
                <td style="width:10%">Nomor</td>
                <td style="width:1%">:</td>
                <td style="width: auto;"><?php echo $row1->nomor_sppbj; ?></td>
            </tr>
            <tr>
                <td style="width:10%">Lampiran</td>
                <td style="width:1%">:</td>
                <td style="width: auto;">-</td>
            </tr>
        </table>
        <!-- END: Nomor & Lampiran -->


        <!-- BEGIN: Kepada Yth -->
        <table>
            <tr>
                <td>Kepada Yth,</td>
            </tr>
            <tr>
                <td><?php echo $row2->nama_penyedia; ?></td>
            </tr>
            <tr>
                <td>di</td>
            </tr>
            <tr>
                <td><?php echo $row2->alamat; ?></td>
            </tr>
        </table>
        <!-- END: Kepada Yth -->


        <!-- BEGIN: Perihal -->
        <table>
            <td style="width:10%">Perihal</td>
            <td>:</td>
            <td>Penunjukan Penyedia Untuk Pelaksanaan Pekerjaan <?php echo $row2->paket_pekerjaan; ?></td>
        </table>
        <!-- END: Perihal -->


        <!-- BEGIN: isi -->
        <table style="margin-bottom: 0px">
            <td>
                <div class="justify">
                    Dengan ini kami beritahukan bahwa penawaran Saudara berdasarkan Surat Penawaran Nomor:
                    <?php echo $row1->no_surat_penawaran; ?> tanggal <?php
                        $tanggal = $row1->tanggal_surat_penawaran;
                        $bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                        $tanggal_format = date("d", strtotime($tanggal));
                        $bulan_index = date("n", strtotime($tanggal)) - 1;
                        $tahun = date("Y", strtotime($tanggal));
                        echo $tanggal_format . " " . $bulan[$bulan_index] . " " . $tahun;
                        ?> perihal Penawaran Pekerjaan <?php echo $row2->paket_pekerjaan; ?> dengan nilai hasil
                    negosiasi harga sebesar <?php
                    $hasil_negoisasi = $row1->hasil_negoisasi;
                    $hasil_format = number_format($hasil_negoisasi, 2, ',', '.');
                    $hasil_terbilang = terbilang($hasil_negoisasi);
                    echo "Rp. " . $hasil_format . " (" . $hasil_terbilang . " Rupiah )";
                    ?>

                    <?php
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
                    kami nyatakan diterima/disetujui.
                </div><br>
                <div class="justify">
                    Sebagai tindak lanjut dari Surat Penunjukan Penyedia Barang/Jasa (SPPBJ) ini Saudara diharuskan
                    untuk menyerahkan Jaminan Pelaksanaan sebesar 5% dari nilai kontrak <?php

                    $nilai_5_persen = $row1->lima_persen;
                    $nilai_format = number_format($nilai_5_persen, 2, ',', '.');
                    $nilai_terbilang = terbilang($nilai_5_persen);
                    echo "Rp. " . $nilai_format . " (" . $nilai_terbilang . " Rupiah )";
                    ?> dengan masa berlaku selama <?php
                     $masa_pelaksanaan = $row2->masa_pelaksanaan;
                     $masa_terbilang = terbilang($masa_pelaksanaan);
                     echo $masa_pelaksanaan . " (" . $masa_terbilang . ")";
                     ?> hari kalender dan menandatangani Surat Perjanjian
                    paling lambat 14 (Empat Belas) hari kerja setelah diterbitkannya SPPBJ.
                </div><br>
                <div class="justify">
                    Kegagalan Saudara untuk menerima penunjukan ini yang disusun berdasarkan evaluasi terhadap penawaran
                    Saudara, akan dikenakan sanksi sesuai ketentuan dalam Peraturan Perundangan tentang Pengadaan
                    Barang/ Jasa Pemerintah beserta Petunjuk Teknisnya.
                </div>
            </td>
        </table>
        <!-- END: isi -->



        <!-- BEGIN: TTD -->
        <div class="col-container">
            <!-- Left column content -->
            <div class="col">

            </div>

            <!-- Right column content -->
            <div class="col">
                <table>
                    <tr>
                        <td style="text-align:center">Dinas Pekerjaan Umum dan Penataan Ruang Kabupaten Berau</td>
                    </tr>
                    <tr>
                        <td style="text-align:center">Pejabat Penandatangan Kontrak</td>
                    </tr>
                    <tr>
                        <td style="text-align:center">Pejabat Pembuat Komitmen</td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td style="text-align:center"><?php echo $row2->nama_lengkap; ?></td>
                    </tr>
                    <tr>
                        <td style="text-align:center">NIP. <?php echo $row2->nip; ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- END: TTD -->


        <!-- BEGIN:Tembusan -->
        <table style="margin-top:0px">
            <tr>
                <td colspan="2">Tembusan disampaikan Kepada Yth :</td>
            </tr>
            <tr>
                <td style="width:1%">1.</td>
                <td>Kepala Inspektorat Wilayah Kabupaten Berau di – Tanjung Redeb</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Pengguna Anggaran Dinas PUPR Kabupaten Berau di – Tanjung Redeb</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Kuasa Pengguna Anggaran Bidang Pembangunan Jalan dan Jembatan DPUPR Kabupaten Berau di – Tanjung
                    Redeb</td>
            </tr>
        </table>
        <!-- END:Tembusan -->
    </div>
</body>

</html>