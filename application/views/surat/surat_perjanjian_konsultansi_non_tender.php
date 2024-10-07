<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Perjanjian Non Tender - <?php echo $row2->paket_pekerjaan; ?></title>
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
                <td colspan="2"><img width=645 src="<?php echo base_url() ?>/assets/images/image003.gif"></td>
            </tr>
        </table>
        <!-- END: Kop Surat -->



        <!-- BEGIN: isi -->
        <table style="border: 1px solid black; border-collapse: collapse;">
            <tr style="border: 1px solid black; border-collapse: collapse;">
                <td rowspan="2"
                    style="border: 1px solid black; border-collapse: collapse;vertical-align: middle; padding-left:10px; font-size:10pt; font-weight:bold">
                    Surat Perintah Kerja<br>(SPK)</td>
                <td style="padding-left:10px; padding-top:5px">
                    <div style="font-size:10pt;font-weight:bold;">SATUAN KERJA</div>
                    <div>Dinas Pekerjaan Umum dan Penataan Ruang Kabupaten Berau</div><br>
                </td>
            </tr>
            <tr>
                <td style="padding-left:10px;padding-top:5px">
                    <div style="font-size:10pt;font-weight:bold;">NOMOR DAN TANGGAL SPK:</div>
                    <div>
                        <table>
                            <tr>
                                <td>Nomor</td>
                                <td>:</td>
                                <td><?php echo $row1->nomor_surat_perjanjian; ?></td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
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
                        </table>
                    </div>
                </td>
                <td></td>
            </tr>




            <tr style="border: 1px solid black; border-collapse: collapse;">
                <td
                    style="border: 1px solid black; border-collapse: collapse;vertical-align: middle; padding-left:10px; font-size:10pt; font-weight:bold">
                    NAMA PEJABAT PENANDATANGANAN KONTRAK</td>
                <td style="padding-left:10px;">
                    <table style="margin-top:5px">
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><?php echo $row2->nama_lengkap; ?></td>
                        </tr>
                        <tr>
                            <td>NIP</td>
                            <td>:</td>
                            <td><?= $row2->nip; ?></td>
                        </tr>

                        <tr>
                            <td>Jabatan</td>php
                            <td>:</td>
                            <td>Pejabat Pembuat Komitmen</td>
                        </tr>
                        <tr>
                            <td>Berkedudukan di</td>
                            <td>:</td>
                            <td>Dinas Pekerjaan Umum dan Penataan Ruang</td>
                        </tr>
                    </table>
                    <div style="padding-bottom: 5px;">
                        yang bertindak untuk dan atas nama*) Pemerintah Indonesia c.q. Pemerintah Kabupaten Berau c.q.
                        Satuan Kerja Dinas Pekerjaan Umum dan Penataan Ruang Kabupaten Berau berdasarkan Surat Keputusan
                        Pengguna Anggaran Dinas PUPR Kab. Berau Nomor: 600/806/DPUPR-KAB.UM/XI/2023 tanggal 07 November
                        2023, selanjutnya disebut “Pejabat Penandatangan Kontrak ”, dengan:
                    </div>
                </td>
            </tr>

            <tr style="border: 1px solid black; border-collapse: collapse;">
                <td
                    style="border: 1px solid black; border-collapse: collapse;vertical-align: middle; padding-left:10px; font-size:10pt; font-weight:bold">
                    NAMA PENYEDIA</td>
                <td style="padding-left:10px;">
                    <table style="margin-top:5px">
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><?php echo $row2->nama_penyedia ?></td>
                        </tr>
                        <tr>
                            <td>Jabatan</td>
                            <td>:</td>
                            <td><?php echo $row2->jabatan ?></td>
                        </tr>
                        <tr>
                            <td>Berkedudukan di</td>
                            <td>:</td>
                            <td><?php echo $row2->alamat; ?></td>
                        </tr>
                        <tr>
                            <td>Akta Notaris Nomor</td>
                            <td>:</td>
                            <td><?php echo $row2->no_akta ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal</td>
                            <td>:</td>
                            <td><?php echo $row2->tanggal_akta ?></td>
                        </tr>
                        <tr>
                            <td>Notaris</td>
                            <td>:</td>
                            <td><?php echo $row2->notaris ?></td>
                        </tr>
                    </table>
                    <div style="padding-bottom: 5px;">
                        yang bertindak untuk dan atas nama <?php echo $row2->nama_penyedia ?> selanjutnya disebut
                        “Penyedia”.
                    </div>
                </td>
            </tr>







            <tr style="border: 1px solid black; border-collapse: collapse;">
                <td
                    style="border: 1px solid black; border-collapse: collapse;vertical-align: middle; padding-left:10px; font-size:10pt; font-weight:bold">
                    WAKIL SAH PEJABAT PENANDATANGAN KONTRAK</td>
                <td style="padding-left:10px;">
                    <div style="padding-top:5px">
                        Wakil Sah Pejabat Penandatangan Kontrak <br><br>
                        Untuk Pejabat Penandatangan Kontrak
                    </div>
                    <table style="margin-top:2px">
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><?php echo $row2->nama_lengkap; ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Berdasarkan Surat Keputusan Pengguna Anggaran Dinas PUPR Kab. Berau Nomor
                                <?php echo $skppk->nomor_skppk ?>
                            </td>

                        </tr>
                    </table>

                </td>
            </tr>




            <tr style="border: 1px solid black; border-collapse: collapse;">
                <td rowspan="2"
                    style="border: 1px solid black; border-collapse: collapse;vertical-align: middle; padding-left:10px; font-size:10pt; font-weight:bold">
                    PAKET PENGADAAN:<br>
                    <?php echo $row2->paket_pekerjaan; ?></td>
                <td style="padding-left:10px; padding-top:5px">
                    <div style="font-size:10pt;font-weight:bold;">NOMOR DAN TANGGAL SURAT UNDANGAN PENGADAAN LANGSUNG:
                    </div>
                    <div>
                        <table style="margin-top:1px;margin-bottom:1px">
                            <tr>
                                <td>Nomor</td>
                                <td>:</td>
                                <td><?php echo $row1->no_supl ?></td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
                                <td>:</td>
                                <td><?php
                                $tanggal = $row1->tanggal_supl;
                                $bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                                $tanggal_format = date("d", strtotime($tanggal));
                                $bulan_index = date("n", strtotime($tanggal)) - 1;
                                $tahun = date("Y", strtotime($tanggal));
                                echo $tanggal_format . " " . $bulan[$bulan_index] . " " . $tahun;
                                ?></td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="padding-left:10px;padding-top:5px">
                    <div style="font-size:10pt;font-weight:bold;">NOMOR DAN TANGGAL BERITA ACARA HASIL PENGADAAN
                        LANGSUNG : </div>
                    <div>
                        <table style="margin-top:1px;margin-bottom:1px">
                            <tr>
                                <td>Nomor</td>
                                <td>:</td>
                                <td><?php echo $bast->nomor ?></td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
                                <td>:</td>
                                <td><?php
                                $tanggal = $bast->tanggal;
                                $bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                                $tanggal_format = date("d", strtotime($tanggal));
                                $bulan_index = date("n", strtotime($tanggal)) - 1;
                                $tahun = date("Y", strtotime($tanggal));
                                echo $tanggal_format . " " . $bulan[$bulan_index] . " " . $tahun;
                                ?></td>
                            </tr>
                        </table>
                    </div>
                </td>
                <td></td>
            </tr>




            <tr style="border: 1px solid black; border-collapse: collapse;">
                <td colspan="2" style="padding-left: 10px; padding-bottom:10px">
                    <span style="font-weight:bold">SUMBER DANA:</span><br> dibebankan atas DPA Dinas PUPR Kab. Berau
                    Tahun
                    Anggaran 2024 untuk mata anggaran kegiatan 5.2.04.01.01.0003
                </td>
            </tr>


            <tr style="border: 1px solid black; border-collapse: collapse;">
                <td colspan="2" style="padding-left: 10px; padding-bottom:10px">
                    <span style="font-weight:bold">HARGA KONTRAK:</span><br> Harga Kontrak termasuk Pajak Pertambahan
                    Nilai
                    (PPN) adalah sebesar <?php
                    $hasil_negoisasi = $row2->nilai_kontrak;
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
                </td>
            </tr>
        </table>
        <!-- END: isi -->

        <table style="border: 1px solid black; border-collapse: collapse;">
            <tr style="border: 1px solid black; border-collapse: collapse;">
                <td colspan="3" style="padding-left: 10px; padding-bottom:10px">
                    <span style="font-weight:bold">SISTEM PEMBAYARAN:</span><br> Pembayaran untuk kontrak ini dilakukan
                    ke
                    Bank <?php echo $row2->nama_bank ?> rekening nomor : <?php echo $row2->nomor_rekening ?> atas nama
                    Penyedia : <?php echo $row2->nama_penyedia ?>
                    Pembayaran prestasi pekerjaan dilakukan dengan cara : Sekaligus
                </td>
            </tr>
            <tr style="border: 1px solid black; border-collapse: collapse;">
                <td colspan="3" style="padding-left: 10px; padding-bottom:10px">
                    <span style="font-weight:bold">JENIS KONTRAK:</span><br> <?php echo $row1->jenis_kontrak; ?>
                </td>
            </tr>
            <tr style="border: 1px solid black; border-collapse: collapse;">
                <td colspan="3" style="padding-left: 10px; padding-bottom:10px">
                    <span style="font-weight:bold">MASA PELAKSANAAN PEKERJAAN:</span><br>
                    <?php echo $row2->masa_pelaksanaan; ?> (<?php echo terbilang($row2->masa_pelaksanaan) ?>) Hari
                    Kalender
                </td>
            </tr>















            <tr style="border: 1px solid black; border-collapse: collapse;">
                <td colspan="2"
                    style="padding-left: 10px; padding-bottom:10px;padding-top:5px;width:50%;text-align:center;">
                    <div>
                        Untuk dan atas nama Dinas Pekerjaan Umum dan Penataan Ruang
                    </div>
                    <div>
                        Pejabat Penandatanganan Kontrak
                    </div>
                    <div>
                        Pejabat Pembuat Komitment
                    </div><br><br><br>
                    <div>
                        <?php echo $row2->nama_lengkap ?>
                    </div>
                    <div>
                        NIP. <?php echo $row2->nip; ?>
                    </div>
                </td>
                <td style="border: 1px solid black; border-collapse: collapse;text-align:center;"><br><br>
                    <div>
                        Untuk dan atas nama Penyedia
                    </div>
                    <div>
                        <?php echo $row2->nama_penyedia ?>
                    </div><br><br><br>
                    <div style="margin-top:5px">
                        <?php echo $row2->nama_direktur; ?>
                    </div>
                    <div>
                        <?php echo $row2->jabatan; ?>
                    </div>
                </td>
            </tr>


        </table>
        <!-- END: isi 2 -->



    </div>
</body>

</html>