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

    <div class="checkboxes-container overflow-x-auto">
    <table id="advance-datatable" class="w-full table-auto">
        <thead class="text-center">
            <tr class="bg-neutral-0 dark:bg-neutral-904">
                <th class="px-5 py-3 lg:py-5" style="width: 50px;">No</th>
                <th class="px-2 py-3 lg:py-5 text-left w-48 whitespace-nowrap">Paket Pekerjaan</th>
                <th class="px-2 py-3 lg:py-5 w-36 whitespace-nowrap">Tanggal Kontrak</th>
                <th class="px-2 py-3 lg:py-5 w-36 whitespace-nowrap">Penyedia</th>
                <th class="px-2 py-3 lg:py-5 w-36 whitespace-nowrap">Harga Kontrak</th>
                <th class="px-2 py-3 lg:py-5 w-24 whitespace-nowrap">Cover</th>
                <th class="px-2 py-3 lg:py-5 w-24 whitespace-nowrap">SPPJ</th>
                <th class="px-2 py-3 lg:py-5 w-36 whitespace-nowrap">Surat Perjanjian</th>
                <th class="px-2 py-3 lg:py-5 w-24 whitespace-nowrap">SPMK</th>
                <th class="px-2 py-3 text-center lg:py-5 w-24">Action</th>
            </tr>
        </thead>
        <tbody>
            <template x-for="(invoice, index) in invoices" :key="invoice.id">
                <tr class="bg-white">
                    <td class="px-5 py-3 text-center" x-text="index + 1"></td>
                    <td class="px-2 py-3 w-48" style="white-space: normal; word-wrap: break-word;">
                        <div class="flex flex-col">
                            <p class="mb-1 font-extrabold" x-text="invoice.paket_pekerjaan"></p>
                            <span class="text-xs whitespace-nowrap" x-text="invoice.nomor_kontrak"></span>
                        </div>
                    </td>
                    <td class="px-2 py-3 w-36 text-center whitespace-nowrap" x-text="formatTanggalIndonesia(invoice.tanggal_kontrak)"></td>
                    <td class="px-2 py-3 w-36 text-center whitespace-nowrap" x-text="invoice.nama_penyedia"></td>
                    <td class="px-2 py-3 lg:py-5 w-36 whitespace-nowrap">
                        <span class="rounded-full border border-neutral-30 bg-primary-50 px-10 py-2 text-xs text-primary-300 dark:border-neutral-600 dark:bg-neutral-904 font-extrabold " x-text="formatIDR(invoice.nilai_kontrak)"></span>
                    </td>
                    <td class="px-2 py-3 lg:py-5 w-24">
                        <button class="btn-primary">Cover</button>
                    </td>
                    <td class="px-2 py-3 lg:py-5 w-24">
                        <button class="btn-primary">SPPJ</button>
                    </td>
                    <td class="px-2 py-3 lg:py-5 w-36 whitespace-nowrap">
                        <button class="btn-primary">Surat Perjanjian</button>
                    </td>
                    <td class="px-2 py-3 lg:py-5 w-24">
                        <button class="btn-primary">SPMK</button>
                    </td>
                    <td class="px-2 py-3 lg:py-5 w-24 flex justify-center">
                        <button><i class="las la-ellipsis-v text-xl"></i></button>
                    </td>
                </tr>
            </template>
        </tbody>
    </table>
</div>

</div>
