<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Perjanjian - <?php echo $row2->paket_pekerjaan; ?></title>
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
                    <div style="text-align:center;font-size:11pt;">SUB KEGIATAN <?php echo $row2->sub_kegiatan; ?></div>
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
                <td style="font-weight:bold;font-size:14pt">SURAT PERJANJIAN</td>
            </tr>
            <tr style="text-align:center">
                <td>Kontrak <?php echo $row1->jenis_kontrak; ?></td>
            </tr>
        </table>
        <!-- END: Heading -->


        <!-- BEGIN: Heading 1 -->
        <table>
            <tr style="text-align:center;font-weight:bold">
                <td>Paket Pekerjaan Konstruksi</td>
            </tr>
            <tr style="text-align:center">
                <td><?php echo $row2->paket_pekerjaan; ?></td>
            </tr>
            <tr style="text-align:center">
                <td>Nomor : <?php echo $row1->nomor_surat_perjanjian; ?></td>
            </tr>
        </table>
        <!-- END: Heading 1 -->


        <!-- BEGIN: Isi 1 -->
        <table>
            <td style="text-align:justify">
                SURAT PERJANJIAN ini berikut semua lampirannya adalah Kontrak Kerja Konstruksi
                <?php echo $row1->jenis_kontrak; ?>, yang selanjutnya disebut “Kontrak” dibuat dan ditandatangani di
                Tanjung Redeb pada hari Rabu
                tanggal <?php echo convertDateToWords($row1->tanggal_surat_perjanjian); ?>
                <?php
                function convertDateToWords($tanggal_kontrak)
                {
                    // Array of days and months in words (Bahasa Indonesia)
                    $days = ["Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas", "Dua Belas", "Tiga Belas", "Empat Belas", "Lima Belas", "Enam Belas", "Tujuh Belas", "Delapan Belas", "Sembilan Belas", "Dua Puluh", "Dua Puluh Satu", "Dua Puluh Dua", "Dua Puluh Tiga", "Dua Puluh Empat", "Dua Puluh Lima", "Dua Puluh Enam", "Dua Puluh Tujuh", "Dua Puluh Delapan", "Dua Puluh Sembilan", "Tiga Puluh", "Tiga Puluh Satu"];
                    $months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

                    // Extract day, month, and year from the date
                    $date_parts = explode('-', $tanggal_kontrak);
                    $day = intval($date_parts[2]); // Day
                    $month = intval($date_parts[1]); // Month
                    $year = intval($date_parts[0]); // Year
                
                    // Convert year to words (for example: 2024 -> Dua Ribu Dua Puluh Empat)
                    $year_in_words = convertYearToWords($year);

                    // Construct the final string
                    return $days[$day - 1] . " bulan " . $months[$month - 1] . " tahun " . $year_in_words;
                }

                // Helper function to convert year into words
                function convertYearToWords($year)
                {
                    $year_map = [
                        1000 => "Seribu",
                        2000 => "Dua Ribu",
                        2020 => "Dua Puluh",
                        2021 => "Dua Puluh Satu",
                        2022 => "Dua Puluh Dua",
                        2023 => "Dua Puluh Tiga",
                        2024 => "Dua Puluh Empat",
                        2025 => "Dua Puluh Lima"
                    ];

                    $year_string = "Dua Ribu";
                    if ($year >= 2020) {
                        $year_string .= " " . $year_map[$year];
                    }

                    return $year_string;

                }

                ?>
                , berdasarkan Berita Acara Hasil Pemilihan Nomor :
                <?php echo $row1->nomor_bahp; ?> Tanggal
                <?php
                $tanggal_bahp = $row1->tanggal_bahp;
                $tanggal_indonesia = date('d F Y', strtotime($tanggal_bahp));

                ?>

                <?php
                $tanggal_bahp = $row1->tanggal_bahp;
                $bulan = array(
                    'January' => 'Januari',
                    'February' => 'Februari',
                    'March' => 'Maret',
                    'April' => 'April',
                    'May' => 'Mei',
                    'June' => 'Juni',
                    'July' => 'Juli',
                    'August' => 'Agustus',
                    'September' => 'September',
                    'October' => 'Oktober',
                    'November' => 'November',
                    'December' => 'Desember'
                );

                $tanggal_indonesia = date('d', strtotime($tanggal_bahp)) . ' ' . $bulan[date('F', strtotime($tanggal_bahp))] . ' ' . date('Y', strtotime($tanggal_bahp));
                echo $tanggal_indonesia;
                ?>

                , Surat Penunjukan Penyedia Barang/Jasa (SPPBJ)
                Nomor: <?php echo $row1->nomor_sppbj; ?> tanggal
                <?php
                $tanggal_sppbj = $row1->tanggal_sppbj;
                $tanggal_indonesia = date('d F Y', strtotime($tanggal_sppbj));

                ?>

                <?php
                $tanggal_sppbj = $row1->tanggal_sppbj;
                $bulan = array(
                    'January' => 'Januari',
                    'February' => 'Februari',
                    'March' => 'Maret',
                    'April' => 'April',
                    'May' => 'Mei',
                    'June' => 'Juni',
                    'July' => 'Juli',
                    'August' => 'Agustus',
                    'September' => 'September',
                    'October' => 'Oktober',
                    'November' => 'November',
                    'December' => 'Desember'
                );

                $tanggal_indonesia = date('d', strtotime($tanggal_sppbj)) . ' ' . $bulan[date('F', strtotime($tanggal_bahp))] . ' ' . date('Y', strtotime($tanggal_bahp));
                echo $tanggal_indonesia;
                ?>

                , antara:
            </td>
        </table>
        <!-- END: Isi 1 -->


        <!-- BEGIN: Data PPK -->
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?php echo $row2->nama_lengkap; ?></td>
            </tr>
            <tr>
                <td>NIP</td>
                <td>:</td>
                <td><?php echo $row2->nip; ?></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td>Pejabat Pembuat Komitment</td>
            </tr>
            <tr>
                <td style="width:20%">Berkedudukan di</td>
                <td>:</td>
                <td>alamat
                </td>
            </tr>
        </table>
        <!-- END: Data PPK -->



        <!-- BEGIN: Isi 2 -->
        <table>
            <td style="text-align:justify">
                yang bertindak untuk dan atas nama Pemerintah Kabupaten Berau cq. Dinas Pekerjaan Umum dan Penataan
                Ruang Kabupaten Berau berdasarkan Surat Keputusan Pengguna Anggaran Dinas Pekerjaan Umum dan Penataan
                Ruang Kabupaten Berau Nomor : <?php echo $row1->no_skpd; ?> Tanggal
                <?php
                $tanggal_skpd = $row1->tanggal_skpd;
                $tanggal_indonesia = date('d F Y', strtotime($tanggal_skpd));

                ?>
                <?php
                $tanggal_skpd = $row1->tanggal_skpd;
                $bulan = array(
                    'January' => 'Januari',
                    'February' => 'Februari',
                    'March' => 'Maret',
                    'April' => 'April',
                    'May' => 'Mei',
                    'June' => 'Juni',
                    'July' => 'Juli',
                    'August' => 'Agustus',
                    'September' => 'September',
                    'October' => 'Oktober',
                    'November' => 'November',
                    'December' => 'Desember'
                );

                $tanggal_indonesia = date('d', strtotime($tanggal_skpd)) . ' ' . $bulan[date('F', strtotime($tanggal_bahp))] . ' ' . date('Y', strtotime($tanggal_bahp));
                echo $tanggal_indonesia;
                ?>


                selanjutnya disebut
                “Pejabat Penandatangan Kontrak”, dengan:
            </td>
        </table>
        <!-- END: Isi 2 -->


        <!-- BEGIN: Data Penyedia -->
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?php echo $row2->nama_penyedia; ?></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td><?php echo 'jabatan_penyedia[buat]'; ?></td>
            </tr>
            <tr>
                <td style="width:20%">Berkedudukan di</td>
                <td>:</td>
                <td><?php echo $row2->alamat; ?>
                </td>
            </tr>
            <tr>
                <td>Akta Notaris Nomor</td>
                <td>:</td>
                <td>buat akta notaris</td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>:</td>
                <td>??</td>
            </tr>
            <tr>
                <td>Notaris</td>
                <td>:</td>
                <td>buat Nama Notaris</td>
            </tr>
        </table>
        <!-- END: Data Penyedia -->



        <!-- BEGIN: Isi 3 -->
        <table>
            <td style="text-align:justify">
                yang bertindak untuk dan atas nama <?php echo $row2->nama_penyedia; ?> selanjutnya disebut “Penyedia”.
            </td>
        </table>
        <!-- END: Isi 3 -->


        <!-- BEGIN: Isi 4 -->
        <table>
            <tr>
                <td style="text-align:justify" colspan="2">
                    Dan dengan memperhatikan:
                </td>
            </tr>

            <tr>
                <td>1.</td>
                <td>Undang-Undang Nomor 2 Tahun 2017 tentang Jasa Konstruksi yang selanjutnya dirubah dengan
                    Undang-UndangNomor 11 Tahun 2020 tentang Cipta Kerja;</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Kitab Undang-Undang Hukum Perdata (Buku III tentang Perikatan);</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Peraturan Pemerintah Nomor 22 Tahun 2020 tentang Peraturan Pelaksanaan Undang-Undang Nomor 2 tahun
                    2017 tentang Jasa Konstruksi sebagaimana telah diubah dengan Peraturan Pemerintah Nomor 14 Tahun
                    2021 tentang Perubahan Peraturan Pemerintah Nomor 22 Tahun 2020 tentang Peraturan Pelaksanaan
                    Undang-Undang Nomor 2 tahun 2017 tentang Jasa Konstruksi;</td>
            </tr>
            <tr>
                <td>4.</td>
                <td>Peraturan Presiden Nomor 16 Tahun 2018 tentang Pengadaan Barang/Jasa Pemerintah sebagaimana telah
                    diubah dengan Peraturan Presiden Nomor 12 Tahun 2021 tentang Perubahan Peraturan Presiden Nomor 16
                    Tahun 2018 tentang Pengadaan Barang/Jasa Pemerintah;</td>
            </tr>
            <tr>
                <td>5.</td>
                <td>Peraturan LKPP Nomor 12 Tahun 2021 Tentang Pedoman Pelaksanaan Pengadaan Barang/Jasa Pemerintah
                    Melalui Penyedia.</td>
            </tr>
        </table>
        <!-- END: Isi 4 -->


        <!-- BEGIN: Isi 5 -->
        <table>
            <td style="text-align:justify;text-align:center;font-weight:bold;">
                PARA PIHAK MENERANGKAN TERLEBIH DAHULU BAHWA:
            </td>
        </table>
        <!-- END: Isi 5 -->



        <!-- BEGIN: Isi 6 -->
        <table>
            <tr>
                <td>(a)</td>
                <td colspan="2">Telah dilakukan proses pemilihan Penyedia yang telah sesuai dengan Dokumen pemilihan;
                </td>
            </tr>
            <tr>
                <td>(b)</td>
                <td colspan="2">Pejabat Penandatangan Kontrak telah menunjuk Penyedia menjadi pihak dalam Kontrak ini
                    melalui Surat Penunjukan Penyediaan Barang/Jasa (SPPBJ) untuk melaksanakan Pekerjaan Konstruksi
                    Lanjutan Pembangunan Jalan Merdeka sebagaimana diterangkan dalam dokumen Kontrak ini selanjutnya
                    disebut “Pekerjaan Konstruksi”;</td>
            </tr>
            <tr>
                <td>(c)</td>
                <td colspan="2">Penyedia telah menyatakan kepada Pejabat Penandatangan Kontrak, memiliki keahlian
                    profesional, tenaga kerja konstruksi, dan sumber daya teknis, serta telah menyetujui untuk
                    melaksanakan Pekerjaan Konstruksi sesuai dengan persyaratan dan ketentuan dalam Kontrak ini;</td>
            </tr>
            <tr>
                <td>(d)</td>
                <td colspan="2">Pejabat Penandatangan Kontrak dan Penyedia menyatakan memiliki kewenangan untuk
                    menandatangani Kontrak ini, dan mengikat pihak yang diwakili;</td>
            </tr>
            <tr>
                <td>(e)</td>
                <td colspan="2">Pejabat Penandatangan Kontrak dan Penyedia mengakui dan menyatakan bahwa sehubungan
                    dengan penandatanganan Kontrak ini masing-masing pihak:</td>
            </tr>
            <tr>
                <td></td>
                <td>1)</td>
                <td>Telah dan senantiasa diberikan kesempatan untuk didampingi oleh advokat;</td>
            </tr>
            <tr>
                <td></td>
                <td>2)</td>
                <td>Menandatangani Kontrak ini setelah meneliti secara patut;</td>
            </tr>
            <tr>
                <td></td>
                <td>3)</td>
                <td>Telah membaca dan memahami secara penuh ketentuan Kontrak ini;</td>
            </tr>
            <tr>
                <td></td>
                <td>4)</td>
                <td>Telah mendapatkan kesempatan yang memadai untuk memeriksa dan mengkonfirmasikan semua ketentuan
                    dalam Kontrak ini beserta semua fakta dan kondisi yang terkait.</td>
            </tr>
        </table>
        <!-- END: Isi 6 -->



        <!-- BEGIN: Isi 7 -->
        <table>
            <td style="text-align:justify;">
                Maka oleh karena itu, Pejabat Penandatangan Kontrak dan Penyedia dengan ini bersepakat dan menyetujui
                untuk membuat perjanjian pelaksanaan paket Pekerjaan Konstruksi Lanjutan Pembangunan Jalan Merdeka
                dengan syarat dan ketentuan sebagai berikut:
            </td>
        </table>
        <!-- END: Isi 7 -->



        <!-- BEGIN: Isi 8 -->
        <table style="text-align:center;">
            <tr>
                <td>
                    Pasal 1
                </td>
            </tr>
            <tr>
                <td>
                    ISTILAH DAN UNGKAPAN
                </td>
            </tr>
        </table>
        <!-- END: Isi 8 -->


        <!-- BEGIN: Isi 9 -->
        <table>
            <td style="text-align:justify;">
                Peristilahan dan ungkapan dalam Surat Perjanjian ini memiliki arti dan makna yang sama seperti yang
                tercantum dalam lampiran Surat Perjanjian ini.
            </td>
        </table>
        <!-- END: Isi 9-->




        <!-- BEGIN: Isi 10 -->
        <table style="text-align:center;">
            <tr>
                <td>
                    Pasal 2
                </td>
            </tr>
            <tr>
                <td>
                    RUANG LINGKUP PEKERJAAN UTAMA
                </td>
            </tr>
        </table>
        <!-- END: Isi 10 -->




        <!-- BEGIN: Isi 11 -->
        <table>
            <tr>
                <td colspan="2">
                    Ruang lingkup utama pekerjaan terdiri dari:
                </td>
            </tr>
            <tr>
                <td>1.</td>
                <td>Umum</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Drainase</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Pekerjaan Tanah dan Geosintetik</td>
            </tr>
            <tr>
                <td>4.</td>
                <td>Pekerasan Berbutir</td>
            </tr>
            <tr>
                <td>5.</td>
                <td>Pekerasan Aspal</td>
            </tr>
        </table>
        <!-- END: Isi 11-->



        <!-- BEGIN: Isi 12 -->
        <table style="text-align:center;">
            <tr>
                <td>
                    Pasal 3
                </td>
            </tr>
            <tr>
                <td>
                    HARGA KONTRAK, SUMBER PEMBIAYAAN DAN PEMBAYARAN
                </td>
            </tr>
        </table>
        <!-- END: Isi 12 -->




        <!-- BEGIN: Isi 13 -->
        <table style="text-align:justify">
            <tr>
                <td>(1)</td>
                <td>Harga Kontrak termasuk Pajak Pertambahan Nilai (PPN) yang diperoleh berdasarkan total harga
                    penawaran terkoreksi sebagaimana tercantum dalam Daftar Kuantitas/Keluaran dan Harga adalah sebesar
                    Rp. 10.000.000.000,00 (Sepuluh Milyar Rupiah) dengan kode akun kegiatan Sub Kegiatan
                    1.03.10.2.01.0032 Pembangunan Jalan.</td>
            </tr>
            <tr>
                <td>(2)</td>
                <td>Kontrak ini dibiayai dari APBD Kabupaten;</td>
            </tr>
            <tr>
                <td>(3)</td>
                <td>Pembayaran untuk kontrak ini dilakukan ke Bank (nama Bank) rekening nomor : (no. Rekening penyedia)
                    atas nama Penyedia : (nama CV/PT perusahaan);</td>
            </tr>
        </table>
        <!-- END: Isi 13 -->






        <!-- BEGIN: Isi 14 -->
        <table style="text-align:center;">
            <tr>
                <td>
                    Pasal 4
                </td>
            </tr>
            <tr>
                <td>
                    DOKUMEN KONTRAK
                </td>
            </tr>
        </table>
        <!-- END: Isi 14 -->



        <!-- BEGIN: Isi 15 -->
        <table style="text-align:justify">
            <tr>
                <td>(1)</td>
                <td colspan="2">Kelengkapan dokumen-dokumen berikut merupakan satu kesatuan dan bagian yang tidak
                    terpisahkan dari Kontrak ini terdiri dari adendum Surat Perjanjian (apabila ada), Surat Perjanjian,
                    Surat Penawaran, Daftar Kuantitas/Keluaran dan Harga, Syarat-Syarat Umum Kontrak, Syarat-Syarat
                    Khusus Kontrak beserta lampirannya berupa lampiran A (daftar harga satuan timpang,
                    subpenyedia,personel manajerial, dan peralatan utama), lampiran B (Rencana Keselamatan Konstruksi),
                    spesifikasi teknis, gambar-gambar, dan dokumen lainnya seperti: Surat Penunjukan Penyedia
                    Barang/Jasa, Jadwal Pelaksanaan Pekerjaan, jaminan-jaminan, Berita Acara Rapat Persiapan
                    Penandatanganan Kontrak, Berita Acara Rapat Persiapan Pelaksanaan Kontrak.</td>
            </tr>
            <tr>
                <td>(2)</td>
                <td colspan="2">Jika terjadi pertentangan antara ketentuan dalam suatu dokumen dengan ketentuan dalam
                    dokumen yang lain maka yang berlaku adalah ketentuan dalam dokumen yang lebih tinggi berdasarkan
                    urutan hierarki sebagai berikut:</td>
            </tr>
            <tr>
                <td></td>
                <td>a.</td>
                <td>Adendum Kontrak (apabila ada);</td>
            </tr>
            <tr>
                <td></td>
                <td>b.</td>
                <td>Surat Perjanjian;</td>
            </tr>
            <tr>
                <td></td>
                <td>c.</td>
                <td>Surat Penawaran;</td>
            </tr>
            <tr>
                <td></td>
                <td>d.</td>
                <td>Syarat-Syarat Khusus Kontrak;</td>
            </tr>
            <tr>
                <td></td>
                <td>e.</td>
                <td>Syarat-Syarat Umum Kontrak;</td>
            </tr>
            <tr>
                <td></td>
                <td>f.</td>
                <td>Spesifikasi Teknis dan Gambar;</td>
            </tr>
            <tr>
                <td></td>
                <td>g.</td>
                <td>Daftar Kuantitas/Keluaran dan Harga (Daftar Kuantitas/Keluaran dan Harga hasil negosiasi apabila ada
                    negosiasi);</td>
            </tr>
            <tr>
                <td></td>
                <td>h.</td>
                <td>Daftar Kuantitas/Keluaran dan Harga (Daftar Kuantitas/Keluaran dan Harga hasil Terkoreksi apabila
                    ada koreksi aritmatik);</td>
            </tr>
        </table>
        <!-- END: Isi 15 -->





        <!-- BEGIN: Isi 16 -->
        <table style="text-align:center;">
            <tr>
                <td>
                    Pasal 5
                </td>
            </tr>
            <tr>
                <td>
                    MASA KONTRAK
                </td>
            </tr>
        </table>
        <!-- END: Isi 16 -->





        <!-- BEGIN: Isi 17 -->
        <table style="text-align:justify">
            <tr>
                <td>(1)</td>
                <td>Masa Kontrak adalah jangka waktu berlakunya Kontrak ini terhitung sejak tanggal penandatanganan
                    Kontrak sampai dengan Tanggal Penyerahan Akhir Pekerjaan;</td>
            </tr>
            <tr>
                <td>(2)</td>
                <td>Masa Pelaksanaan ditentukan dalam Syarat-Syarat Khusus Kontrak, dihitung sejak Tanggal Mulai Kerja
                    yang tercantum dalam SPMK sampai dengan Tanggal Penyerahan Pertama Pekerjaan selama 150 (Seratus
                    Lima Puluh) hari kalender;</td>
            </tr>
            <tr>
                <td>(3)</td>
                <td>Masa Pemeliharaan ditentukan dalam Syarat-Syarat Khusus Kontrak dihitung sejak Tanggal Penyerahan
                    Pertama Pekerjaan sampai dengan Tanggal Penyerahan Akhir Pekerjaan selama 180 (Seratus Delapan
                    Puluh) hari kalender.</td>
            </tr>
            <tr>
                <td colspan="2">Dengan demikian, Pejabat Penandatangan Kontrak dan Penyedia telah bersepakat untuk
                    menandatangani Kontrak ini pada tanggal tersebut di atas dan melaksanakan Kontrak sesuai dengan
                    ketentuan peraturan perundang-undangan di Republik Indonesia dan dibuat dalam 2 (dua) rangkap,
                    masing-masing dibubuhi dengan meterai, mempunyai kekuatan hukum yang sama dan mengikat bagi para
                    pihak, rangkap yang lain dapat diperbanyak sesuai kebutuhan tanpa dibubuhi meterai.</td>
            </tr>
        </table>
        <!-- END: Isi 17 -->




        <!-- BEGIN: TTD -->
        <table style="text-align:center">
            <tr>
                <td style="width:50%">
                    <div>
                        Untuk dan atas nama Penyedia
                    </div>
                    <div>
                        CV.XXXXXXXXXXXXXXxx
                    </div>
                </td>
                <td>
                    <div>
                        Untuk dan atas nama
                    </div>
                    <div>
                        Pejabat Penandatangan Kontrak
                    </div>
                    <div>
                        Pejabat Pembuat Komitment
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
                <td><br></td>
                <td></td>
            </tr>
            <tr>
                <td>
                    <div>
                        XXXXXXXXXXX,ST
                    </div>
                    <div>
                        Direktur
                    </div>
                </td>
                <td>
                    <div>
                        Bambang,ST
                    </div>
                    <div>
                        NIP.XXXXXXXXXXXX
                    </div>
                </td>
            </tr>
        </table>
        <!-- END: TTD -->






    </div>
</body>

</html>