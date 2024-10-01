<!-- Custom -->
<div x-data="{
    invoices: [
    { 
        id: <?php echo $kontrak->id; ?>, 
        nilai_kontrak: <?php echo $kontrak->nilai_kontrak; ?>, 
        tanggal_kontrak: '<?php echo $kontrak->tanggal_kontrak; ?>',

        nama_penyedia: '<?php echo $kontrak->nama_penyedia; ?>',
        paket_pekerjaan: '<?php echo $kontrak->paket_pekerjaan; ?>',
        nomor_kontrak: '<?php echo $kontrak->nomor_kontrak; ?>'

    }
    ],

    // Fungsi untuk memformat IDR
    formatIDR(value) {
        return new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR'
        }).format(value);
    },

    // Fungsi untuk memformat tanggal
    formatTanggalIndonesia(dateString) {
        const date = new Date(dateString);
        return date.toLocaleDateString('id-ID', {
            day: '2-digit',
            month: 'long',
            year: 'numeric'
        });
    }
}" class="n20-box">

<div class="bb-dashed-n40 flex justify-between items-center">
    <h4><?php echo $kontrak->jenis_pengadaan; ?></h4>
    <!-- Opsi export (komentar jika tidak digunakan) -->
</div>
<div x-data="{activeTab:'list'}" class="white-box mb-10">
    <div class="checkboxes-container overflow-x-auto mb-5">
        <table id="advance-datatable" class="w-full whitespace-nowrap mb-10">
            <thead class="text-center">
                <tr class="bg-neutral-20 dark:bg-neutral-903">
                    <th class="px-2 py-3 lg:py-5 text-left w-48 whitespace-nowrap text-center">Paket Pekerjaan</th>
                    <th class="px-2 py-3 lg:py-5 w-36 whitespace-nowrap text-center">Tanggal Kontrak</th>
                    <th class="px-2 py-3 lg:py-5 w-36 whitespace-nowrap text-center">Penyedia</th>
                    <th class="px-2 py-3 lg:py-5 w-36 whitespace-nowrap text-center">Harga Kontrak</th>
                    <th class="px-2 py-3 lg:py-5 w-24 whitespace-nowrap text-center">Cover</th>
                    <th class="px-2 py-3 lg:py-5 w-24 whitespace-nowrap text-center">SPPJ</th>
                    <th class="px-2 py-3 lg:py-5 w-36 whitespace-nowrap text-center">Surat Perjanjian</th>
                    <th class="px-2 py-3 lg:py-5 w-24 whitespace-nowrap text-center">SPMK</th>
                </tr>
            </thead>
            <tbody>
                <template x-for="(invoice, index) in invoices" :key="invoice.id">
                    <tr class="bg-white">
                        <td class="px-2 py-3 w-48" style="white-space: normal; word-wrap: break-word;">
                            <div class="flex flex-col">
                                <p class="mb-1 font-extrabold" x-text="invoice.paket_pekerjaan"></p>
                                <span class="text-xs whitespace-nowrap" x-text="invoice.nomor_kontrak"></span>
                            </div>
                        </td>
                        <td class="px-2 py-3 w-36 text-center whitespace-nowrap"
                        x-text="formatTanggalIndonesia(invoice.tanggal_kontrak)"></td>
                        <td class="px-2 py-3 w-36 text-center whitespace-nowrap" x-text="invoice.nama_penyedia">
                        </td>
                        <td class="px-2 py-3 lg:py-5 w-36 whitespace-nowrap">
                            <span x-text="formatIDR(invoice.nilai_kontrak)"></span>
                        </td>
                        <td class="px-2 py-3 lg:py-5 w-24 text-center">
                            <div x-data="{ open: false }" class="relative">
                                <!-- Button to toggle dropdown -->
                                <button @click="open = !open" class="btn-primary">
                                    Cover
                                </button>

                                <!-- Dropdown menu -->
                                <div x-show="open" @click.away="open = false" class="absolute bg-white border mt-2 rounded shadow-md w-28">
                                    <ul>
                                        <li>
                                            <?php 
    // Get the actual nilai_pagu from the controller result
    $nilai_pagu_value = $nilai_pagu->nilai_pagu; 
    // Determine the correct URL based on the value
    $url = ($nilai_pagu_value >= 200000000) ? site_url('surat/kop_surat_tender') : site_url('surat/kop_surat_non_tender'); 
?>
<button @click="window.open('<?php echo $url; ?>', '_blank')" 
        class="flex items-center px-4 py-2 text-sm text-black hover:bg-gray-200 w-full text-left">
    <i class="las la-print mr-2"></i> Print
</button>


                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                        <td class="px-2 py-3 lg:py-5 w-24 text-center">
                            <button class="<?php echo $get_sppbj == 1 ? 'btn-primary' : 'btn-warning' ?>">SPPBJ</button>
                        </td>
                        <td class="px-2 py-3 lg:py-5 w-36 whitespace-nowrap text-center">
                            <button class="<?php echo $get_surat_perjanjian == 1 ? 'btn-primary' : 'btn-warning' ?>">Surat Perjanjian</button>
                        </td>
                        <td class="px-2 py-3 lg:py-5 w-24 text-center">
                            <button class="<?php echo $get_spmk == 1 ? 'btn-primary' : 'btn-warning' ?>">SPMK</button>
                        </td>

                    </tr>
                </template>
            </tbody>
        </table>
    </div>
</div>

</div>