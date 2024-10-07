<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Perjanjian Non Tender - <?php echo $row2->paket_pekerjaan; ?>/title>
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
                    <div style="text-align:center;font-size:11pt;">SUB KEGIATAN PEMBANGUNAN JALAN</div>
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
                                <td>03/PPK-PJ9/TMBSN RT.01 KE RT.05/PJ2/VI/2024</td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
                                <td>:</td>
                                <td>19 Juni 2024</td>
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
                            <td>A. Awang Idris,SE</td>
                        </tr>
                        <tr>
                            <td>NIP</td>
                            <td>:</td>
                            <td>19790606 200012 1 005</td>
                        </tr>
                        <tr>
                            <td>Jabatan</td>
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
                            <td>Tamrin</td>
                        </tr>
                        <tr>
                            <td>Jabatan</td>
                            <td>:</td>
                            <td>Direktur</td>
                        </tr>
                        <tr>
                            <td>Berkedudukan di</td>
                            <td>:</td>
                            <td>Jl. Murjani II Gang Berkah, Kel. Karang Ambun</td>
                        </tr>
                        <tr>
                            <td>Akta Notaris Nomor</td>
                            <td>:</td>
                            <td>37</td>
                        </tr>
                        <tr>
                            <td>Tanggal</td>
                            <td>:</td>
                            <td>30 Januari 2020</td>
                        </tr>
                        <tr>
                            <td>Notaris</td>
                            <td>:</td>
                            <td>M. Fahmi Azis, S.H., M.Kn.</td>
                        </tr>
                    </table>
                    <div style="padding-bottom: 5px;">
                        yang bertindak untuk dan atas nama CV. Tandan Jaya selanjutnya disebut “Penyedia”.
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
                            <td>A Awang Idris,SE</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Berdasarkan Surat Keputusan Pengguna Anggaran Dinas PUPR Kab. Berau Nomor
                                600/806/DPUPR-KAB.UM/XI/2023 tanggal 07 November 2023</td>
                        </tr>
                    </table>

                </td>
            </tr>




            <tr style="border: 1px solid black; border-collapse: collapse;">
                <td rowspan="2"
                    style="border: 1px solid black; border-collapse: collapse;vertical-align: middle; padding-left:10px; font-size:10pt; font-weight:bold">
                    PAKET PENGADAAN:<br>
                    Pemangunan Jalan Tembusan dari RT.01 ke RT.05 Kampung Tusuk</td>
                <td style="padding-left:10px; padding-top:5px">
                    <div style="font-size:10pt;font-weight:bold;">NOMOR DAN TANGGAL SURAT UNDANGAN PENGADAAN LANGSUNG:
                    </div>
                    <div>
                        <table style="margin-top:1px;margin-bottom:1px">
                            <tr>
                                <td>Nomor</td>
                                <td>:</td>
                                <td>nomor_supl</td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
                                <td>:</td>
                                <td>tanggal_supl</td>
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
                                <td>nomor_bast</td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
                                <td>:</td>
                                <td>tanggal_bast</td>
                            </tr>
                        </table>
                    </div>
                </td>
                <td></td>
            </tr>




            <tr style="border: 1px solid black; border-collapse: collapse;">
                <td colspan="2" style="padding-left: 10px; padding-bottom:10px">
                    <span style="font-weight:bold">SUMBER DANA:</span> dibebankan atas DPA Dinas PUPR Kab. Berau Tahun
                    Anggaran 2024 untuk mata anggaran kegiatan 5.2.04.01.01.0003
                </td>
            </tr>


            <tr style="border: 1px solid black; border-collapse: collapse;">
                <td colspan="2" style="padding-left: 10px; padding-bottom:10px">
                    <div>
                        <span style="font-weight:bold; padding-bottom:10px">MASA PELAKSANAAN PEKERJAAN:</span> 60 (Enam
                        Puluh) hari kalender dihitung sejak Tanggal Mulai Kerja yang tercantum dalam SPMK sampai dengan
                        Tanggal Penyerahan Pertama Pekerjaan
                    </div><br>

                    <div>
                        <span style="font-weight:bold">MASA PEMELIHARAAN PEKERJAAN:</span> 180 (Seratus Delapan Puluh)
                        hari kalender dihitung sejak Tanggal Penyerahan Pertama Pekerjaan sampai dengan Tanggal
                        Penyerahan Akhir Pekerjaan
                    </div>
                </td>
            </tr>



            <tr style="border: 1px solid black; border-collapse: collapse;">
                <td colspan="2" style="padding-left: 10px; padding-bottom:10px">
                    <span style="font-weight:bold">Jenis Kontrak:</span> Harga Satuan
                </td>
            </tr>


            <tr style="border: 1px solid black; border-collapse: collapse;">
                <td colspan="2" style="padding-left: 10px; padding-bottom:10px">
                    <span style="font-weight:bold">DOKUMEN KONTRAK</span>

                    <div>
                        Dokumen-dokumen berikut merupakan satu kesatuan dan jika terjadi pertentangan antara ketentuan
                        dalam suatu dokumen dengan ketentuan dalam dokumen yang lain maka yang berlaku adalah ketentuan
                        dalam dokumen yang lebih tinggi berdasarkan urutan hierarki sebagai berikut:
                    </div>
                    <div>
                        <table style="margin-top:1px;padding-left:25px; margin-bottom:1px">
                            <tr>
                                <td>a.</td>
                                <td>adendum Surat Perintah Kerja/SPK (apabila ada);</td>
                            </tr>
                            <tr>
                                <td>b.</td>
                                <td>Surat Perintah Kerja;</td>
                            </tr>
                            <tr>
                                <td>c.</td>
                                <td>Daftar Kuantitas dan Harga hasil negosiasi dan koreksi aritmatik;</td>
                            </tr>
                            <tr>
                                <td>d.</td>
                                <td>Surat Penawaran;</td>
                            </tr>
                            <tr>
                                <td>e.</td>
                                <td>Syarat-Syarat Umum SPK;</td>
                            </tr>
                            <tr>
                                <td>f.</td>
                                <td>Spesifikasi Teknis;</td>
                            </tr>
                            <tr>
                                <td>g.</td>
                                <td>Gambar-Gambar; dan</td>
                            </tr>
                            <tr>
                                <td>h.</td>
                                <td>dokumen lainnya seperti: Surat Penunjukan Penyedia Barang/Jasa, Jadwal Pelaksanaan
                                    Pekerjaan, jaminan-jaminan, Berita Acara Rapat Persiapan Pelaksanaan Kontrak.</td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>




            <tr style="border: 1px solid black; border-collapse: collapse;">
                <td colspan="2" style="padding-left: 10px; padding-bottom:10px">
                    <span style="font-weight:bold">HARGA KONTRAK</span>
                    <div>
                        Harga Kontrak termasuk Pajak Pertambahan Nilai (PPN) adalah sebesar Rp 191.357.250,00 (Seratus
                        Sembilan Puluh Satu Juta Tiga Ratus Lima Puluh Tujuh Ribu Dua Ratus Lima Puluh Rupiah) yang
                        diperoleh berdasarkan total harga penawaran terkoreksi aritmatik sebagaimana tercantum dalam
                        Daftar Kuantitas dan Harga Penawaran.(Melalui koreksi aritmatik)
                    </div>
                </td>
            </tr>
        </table>
        <!-- END: isi -->


        <!-- BEGIN: isi 2 -->
        <table style="border: 1px solid black; border-collapse: collapse;">

            <tr style="border: 1px solid black; border-collapse: collapse;">
                <td colspan="2" style="padding-left: 10px; padding-top:5px; padding-bottom:10px">
                    <span style="font-weight:bold">LINGKUP PEKERJAAN</span>
                    <div>
                        Ruang lingkup pekerjaan terdiri dari :
                    </div>
                    <div>
                        Umum, Pekerjaan Tanah dan Geosintetik
                    </div>
                </td>
            </tr>



            <tr style="border: 1px solid black; border-collapse: collapse;">
                <td colspan="2" style="padding-left: 10px;padding-top:5px; padding-bottom:10px">
                    <span style="font-weight:bold">SISTEM PEMBAYARAN</span>
                    <div>
                        Pembayaran untuk kontrak ini dilakukan ke Bank BPD Kaltim Kaltara rekening nomor : 0061543767
                        atas nama Penyedia : CV. Tandan Jaya
                    </div>
                    <div>
                        Pembayaran prestasi pekerjaan dilakukan dengan cara : Sekaligus
                        Dokumen penunjang yang disyaratkan untuk mengajukan tagihan pembayaran prestasi pekerjaan:
                    </div>
                    <table style="margin-top:1px;margin-bottom:1px">
                        <tr>
                            <td>1.</td>
                            <td>Laporan Bulanan</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Dokumentasi</td>
                        </tr>
                    </table>
                </td>
            </tr>





            <tr style="border: 1px solid black; border-collapse: collapse;">
                <td colspan="2" style="padding-left: 10px; padding-bottom:10px;padding-top:5px">
                    <span style="font-weight:bold">BESARAN UANG MUKA</span>
                    <div>
                        Kontrak ini tidak diberikan uang muka
                    </div>
                </td>
            </tr>


            <tr style="border: 1px solid black; border-collapse: collapse;">
                <td colspan="2" style="padding-left: 10px; padding-bottom:10px;padding-top:5px">
                    <span style="font-weight:bold">FASILITAS</span>
                    <div>
                        Tidak Ada
                    </div>
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
                        A.Awang Idris,SE
                    </div>
                    <div>
                        NIP.123123123
                    </div>
                </td>
                <td style="border: 1px solid black; border-collapse: collapse;text-align:center;"><br><br>
                    <div>
                        Untuk dan atas nama Penyedia
                    </div>
                    <div>
                        CV. Tandan Jaya
                    </div><br><br><br>
                    <div style="margin-top:5px">
                        Tamrin
                    </div>
                    <div>
                        Direktur
                    </div>
                </td>
            </tr>


        </table>
        <!-- END: isi 2 -->



    </div>
</body>

</html>