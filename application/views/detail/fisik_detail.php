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
                            <div x-data="modal">
                                <!-- Button to toggle dropdown -->
                                <button class="btn-primary" @click="openModal">
                                    Cover
                                </button>

                                <!-- Modal Structure -->
                                <template x-teleport="body">
                                    <div class="fixed inset-0 z-[999] hidden overflow-y-auto bg-[black]/60 dark:bg-neutral-40/80" :class="isOpen && '!block'">
                                        <div class="flex min-h-screen items-center justify-center px-4 text-neutral-700 dark:text-neutral-20" @click.self="closeModal">
                                            <div x-show="isOpen" x-transition x-transition.duration.300 class="panel my-8 w-full max-w-3xl overflow-hidden rounded-lg border-0 bg-neutral-0 p-3 dark:bg-neutral-904 sm:p-4 md:p-6 lg:p-8">
                                                <form method="POST" action="<?php echo ($nilai_pagu->nilai_pagu >= 200000000) ? site_url('surat/kop_surat_tender') : site_url('surat/kop_surat_non_tender'); ?>" target="_blank">
                                                    <div class="mb-4 flex items-center justify-between bb-dashed-n30">
                                                        <h4>Masukkan Jumlah Rangkap</h4>
                                                        <i class="las la-times cursor-pointer text-xl" @click="closeModal"></i>
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="jumlahRangkap" class="block text-sm font-medium text-gray-700">Jumlah Rangkap</label>
                                                        <input type="number" x-model="jumlahRangkap" name="jumlah_rangkap" id="jumlahRangkap" class="my-5 w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4 dark:border-neutral-500 dark:bg-neutral-903" placeholder="Jumlah Rangkap..." required />
                                                    </div>
                                                    <div class="flex gap-4 lg:gap-6">
                                                        <button type="submit" class="btn-primary">Submit</button>
                                                        <button type="button" class="btn-primary-outlined" @click="closeModal">Cancel</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </template>
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



<!-- Alpine.js Data and Methods -->
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('modal', () => ({
            isOpen: false,
            jumlahRangkap: '',
            urlToOpen: '',

            openModal() {
                // Assign URL dynamically based on nilai_pagu
                this.urlToOpen = '<?php echo ($nilai_pagu->nilai_pagu >= 200000000) ? site_url('surat/kop_surat_tender') : site_url('surat/kop_surat_non_tender'); ?>';
                this.isOpen = true;
            },
            closeModal() {
                this.isOpen = false;
            }
        }));
    });
</script>