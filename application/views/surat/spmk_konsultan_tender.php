<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPPBJ Konstruksi Tender <?php echo $row2->paket_pekerjaan; ?></title>
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




        <!-- BEGIN: Heading -->
        <table>
            <tr style="text-align:center">
                <td style="font-weight:bold;font-size:14pt">SURAT PERINTAH MULAI KERJA (SPMK)</td>
            </tr>
            <tr style="text-align:center">
                <td>Nomor: <?php echo $row1->nomor_spmk; ?></td>
            </tr>
        </table>
        <!-- END: Heading -->


        <!-- BEGIN: Heading 1 -->
        <table style="margin-bottom:1px">
            <tr style="text-align:center;">
                <td>Pekerjaan</td>
            </tr>
            <tr style="text-align:center">
                <td><?php echo $row2->paket_pekerjaan; ?></td>
            </tr>
        </table>
        <!-- END: Heading 1 -->



        <!-- BEGIN: Data PPK -->
        <table style="margin-top:1px">
            <tr>
                <td colspan="3">Yang bertanda tangan dibawah ini:</td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?php echo $row2->nama_lengkap; ?></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td>Pejabat Pembuat Komitment</td>
            </tr>
            <tr>
                <td style="width:20%">Alamat</td>
                <td>:</td>
                <td>Dinas Pekerjaan Umum dan Penataan Ruang Kabupaten Berau
                    Jl. Jend. Gatot Subroto No. 123 Tanjung Redeb
                </td>
            </tr>
            <tr>
                <td colspan="3">Selanjutnya disebut sebagai <span style="font-weight:bold">Pejabat Penandatangan
                        Kontrak;</span></td>
            </tr>
        </table>
        <!-- END: Data PPK -->



        <!-- BEGIN: Isi 2 -->
        <table>
            <td style="text-align:justify">
                Berdasarkan Surat Perjanjian (Kontrak) Nomor : <?php echo $row2->nomor_kontrak; ?> tanggal
                <?php echo formatTanggalIndonesia($row2->tanggal_kontrak); ?>, bersama ini memerintahkan:
            </td>
        </table>
        <!-- END: Isi 2 -->


        <!-- BEGIN: Data Penyedia -->
        <table>
            <tr>
                <td style="width:35%">Nama</td>
                <td>:</td>
                <td><?php echo $row2->nama_penyedia; ?></td>
            </tr>
            <tr>
                <td style="width:20%">Alamat</td>
                <td>:</td>
                <td><?php echo $row2->alamat; ?>
                </td>
            </tr>
            <tr>
                <td>Yang dalam hal ini diwakili oleh</td>
                <td>:</td>
                <td><?php echo $row2->nama_direktur; ?> (Direktur)</td>
            </tr>
            <tr>
                <td colspan="3">Selanjutnya disebut sebagai <span style="font-weight:bold;">Penyedia Jasa
                        Konsultansi;</span></td>

            </tr>
        </table>
        <!-- END: Data Penyedia -->



        <!-- BEGIN: Isi 3 -->
        <table style="text-align:justify;margin-bottom:1px">
            <tr>
                <td style="text-align:justify" colspan="4">
                    Untuk segera memulai pelaksanaan pekerjaan dengan memperhatikan ketentuan-ketentuan sebagai berikut
                    :
                </td>
            </tr>

            <tr>
                <td style="width:4%; vertical-align: top;">1.</td>
                <td style="width:30%; vertical-align: top;">Macam Pekerjaan</td>
                <td style="width:2%; vertical-align: top;">:</td>
                <td style="vertical-align: top;"><?php echo $row2->paket_pekerjaan; ?></td>
            </tr>
            <tr>
                <td style="width:4%; vertical-align: top;">2.</td>
                <td style="width:30%; vertical-align: top;">Tanggal Mulai Kerja</td>
                <td style="width:2%; vertical-align: top;">:</td>
                <td style="vertical-align: top;"><?php echo formatTanggalIndonesia($row2->tanggal_mulai); ?></td>
            </tr>
            <tr>
                <td style="width:4%; vertical-align: top;">3.</td>
                <td style="width:30%; vertical-align: top;">Syarat-syarat Pekerjaan</td>
                <td style="width:2%; vertical-align: top;">:</td>
                <td style="vertical-align: top;">Sesuai dengan persyaratan dan ketentuan Kontrak;</td>
            </tr>
            <tr>
                <td style="width:4%; vertical-align: top;">4.</td>
                <td style="width:30%; vertical-align: top;">Waktu Penyelesaian</td>
                <td style="width:2%; vertical-align: top;">:</td>
                <td style="vertical-align: top;">
                    Selama <?php echo $row2->masa_pelaksanaan; ?> (<?php echo terbilang($row2->masa_pelaksanaan); ?>)
                    hari kalender dan pekerjaan harus sudah selesai pada tanggal
                    <strong><?php echo formatTanggalIndonesia($row2->tanggal_selesai); ?>;</strong>
                </td>
            </tr>
            <tr>
                <td style="width:4%; vertical-align: top;">5.</td>
                <td style="width:30%; vertical-align: top;">Hasil Pekerjaan</td>
                <td style="width:2%; vertical-align: top;">:</td>
                <td style="vertical-align: top;">
                    <?php echo $row2->paket_pekerjaan; ?>
                </td>
            </tr>
            <tr>
                <td style="width:4%; vertical-align: top;">6.</td>
                <td style="width:30%; vertical-align: top;">Sanksi</td>
                <td style="width:2%; vertical-align: top;">:</td>
                <td style="vertical-align: top;">
                    Terhadap keterlambatan penyerahan hasil kerja dan laporan akhir, Kontrak Pengadaan Jasa Konsultansi
                    dan pembayaran kepada penyedia dapat dihentikan sesuai dengan ketentuan dalam Syarat-Syarat Umum
                    Kontrak.
                </td>
            </tr>
        </table>
        <!-- END: Isi 3 -->


        <!-- BEGIN: Tanggal -->
        <table style="margin-bottom:1px;margin-top:1px;">
            <td style="text-align:right">Tanjung Redeb, <?php echo formatTanggalIndonesia($row1->tanggal_spmk); ?></td>
        </table>
        <!-- END: Tanggal -->

        <!-- BEGIN: TTD -->
        <table style="text-align:center; margin-top:1px; margin-bottom:1px">
            <tr>
                <td style="width:50%">
                    <div>
                        Untuk dan atas nama
                    </div>
                    <div>
                        Dinas PUPR Kabupaten Berau
                    </div>
                    <div>
                        Pejabat Penandatangan Kontrak
                    </div>
                    <div>
                        Pejabat Pembuat Komitmen
                    </div>
                </td>
                <td>
                    <div>
                        <br>
                    </div>
                    <div>
                        Menerima dan Menyetujui
                    </div>
                    <div>
                        Untuk dan atas nama Penyedia
                    </div>
                    <div>
                        <?php echo $row2->nama_penyedia; ?>
                    </div>
                </td>
            </tr>
            <tr>
                <td><br></td>
                <td></td>
            </tr>
            <tr>
                <td><br></td>
                <td></td>
            </tr>

            <tr>
                <td>
                    <div>
                        <?php echo $row2->nama_lengkap; ?>
                    </div>
                    <div>
                        NIP.<?php echo $row2->nip; ?>
                    </div>
                </td>
                <td>
                    <div>
                        <?php echo $row2->nama_direktur; ?>
                    </div>
                    <div>
                        <?php echo $row2->jabatan; ?>
                    </div>
                </td>

            </tr>
        </table>
        <!-- END: TTD -->











    </div>
    <?php
    // Fungsi terbilang untuk mengubah angka menjadi teks
    function terbilang($angka)
    {
        $bilangan = ["", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas"];

        if ($angka < 12) {
            return $bilangan[$angka];
        } else if ($angka < 20) {
            return terbilang($angka - 10) . " Belas";
        } else if ($angka < 100) {
            return terbilang(floor($angka / 10)) . " Puluh " . terbilang($angka % 10);
        } else if ($angka < 200) {
            return "Seratus " . terbilang($angka - 100);
        } else if ($angka < 1000) {
            return terbilang(floor($angka / 100)) . " Ratus " . terbilang($angka % 100);
        } else if ($angka < 2000) {
            return "Seribu " . terbilang($angka - 1000);
        } else if ($angka < 1000000) {
            return terbilang(floor($angka / 1000)) . " Ribu " . terbilang($angka % 1000);
        } else if ($angka < 1000000000) {
            return terbilang(floor($angka / 1000000)) . " Juta " . terbilang($angka % 1000000);
        } else if ($angka < 1000000000000) {
            return terbilang(floor($angka / 1000000000)) . " Miliar " . terbilang($angka % 1000000000);
        } else if ($angka < 1000000000000000) {
            return terbilang(floor($angka / 1000000000000)) . " Triliun " . terbilang($angka % 1000000000000);
        } else {
            return "Angka terlalu besar";
        }
    }

    // Fungsi untuk memformat tanggal menjadi format Indonesia
    function formatTanggalIndonesia($tanggal)
    {
        $bulan = [
            1 => "Januari",
            2 => "Februari",
            3 => "Maret",
            4 => "April",
            5 => "Mei",
            6 => "Juni",
            7 => "Juli",
            8 => "Agustus",
            9 => "September",
            10 => "Oktober",
            11 => "November",
            12 => "Desember"
        ];

        $pecahkan = explode('-', $tanggal); // Format: yyyy-mm-dd
    
        return $pecahkan[2] . ' ' . $bulan[(int) $pecahkan[1]] . ' ' . $pecahkan[0];
    }
    ?>

</body>

</html>