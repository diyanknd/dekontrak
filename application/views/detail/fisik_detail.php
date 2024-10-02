<!-- Custom -->
<div x-data="{
    invoices: [
    { 
        id: <?php echo $kontrak->id; ?>, 
        nilai_kontrak: <?php echo $kontrak->nilai_kontrak; ?>, 
        tanggal_kontrak: '<?php echo $kontrak->tanggal_kontrak; ?>',

        nama_penyedia: '<?php echo $kontrak->nama_penyedia; ?>',
        paket_pekerjaan: '<?php echo $kontrak->paket_pekerjaan; ?>',
        nomor_kontrak: '<?php echo $kontrak->nomor_kontrak; ?>',
        status: '<?php
            if ($kontrak->jenis_pengadaan == "Pekerjaan Konstruksi") {
              echo ($kontrak->nilai_pagu >= 200000000) ? "Tender" : "Non_Tender";
            } else {
              echo ($kontrak->nilai_pagu >= 100000000) ? "Tender" : "Non_Tender";
            }
            ?>'
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
    <h4><?php echo $kontrak->jenis_pengadaan; ?><br><span x-text="invoices[0].status"></span></h4>
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
    <div x-data="{ showModal: false, sppbjData: {} }">
        <!-- Button logic -->
        <button 
            @click="showModal = true; fetchSppbjData()" 
            class="<?php echo $get_sppbj == 1 ? 'btn-primary' : 'btn-warning' ?>">
            SPPBJ
        </button>

     <!-- Modal -->
<template x-teleport="body">
    <div x-show="showModal" class="fixed inset-0 z-[999] hidden overflow-y-auto bg-[black]/60 dark:bg-neutral-40/80" 
        :class="showModal && '!block'">
        <div class="flex min-h-screen items-center justify-center px-4 text-neutral-700 dark:text-neutral-20"
            @click.self="showModal = false">
            <div x-show="showModal" x-transition x-transition.duration.300 
                class="panel my-8 w-full max-w-3xl overflow-hidden rounded-lg border-0 bg-neutral-0 p-3 dark:bg-neutral-904 sm:p-4 md:p-6 lg:p-8">
                
                <form method="POST" action="<?php echo site_url('create'); ?>">
                    <div class="mb-4 flex items-center justify-between bb-dashed-n30">
                        <h4>SPPBJ Form</h4>
                        <i class="las la-times cursor-pointer text-xl" @click="showModal = false"></i>
                    </div>

                    <!-- Form fields based on database -->
                    <div class="grid grid-cols-2 gap-4"> <!-- Using Grid for 2 columns layout -->

                        <!-- Column 1 -->
                            <input type="text" name="id_paket" value="<?php echo $id_paket; ?>" hidden>

                        <!-- Column 2 -->
                        <div class="mb-4">
                            <label for="nomor_sppbj" class="block text-sm font-medium text-gray-700">Nomor SPPBJ</label>
                            <input type="text" x-model="sppbjData.nomor_sppbj" name="nomor_sppbj" id="nomor_sppbj" 
                                class="w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4" required>
                        </div>

                        <!-- Column 1 -->
                        <div class="mb-4">
                            <label for="tanggal_sppbj" class="block text-sm font-medium text-gray-700">Tanggal SPPBJ</label>
                            <input type="date" x-model="sppbjData.tanggal_sppbj" name="tanggal_sppbj" id="tanggal_sppbj" 
                                class="w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4" required>
                        </div>

                        <!-- Column 2 -->
                        <div class="mb-4">
                            <label for="no_surat_penawaran" class="block text-sm font-medium text-gray-700">Nomor Surat Penawaran</label>
                            <input type="text" x-model="sppbjData.no_surat_penawaran" name="no_surat_penawaran" id="no_surat_penawaran" 
                                class="w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4" required>
                        </div>

                        <!-- Column 1 -->
                        <div class="mb-4">
                            <label for="tanggal_surat_penawaran" class="block text-sm font-medium text-gray-700">Tanggal Surat Penawaran</label>
                            <input type="date" x-model="sppbjData.tanggal_surat_penawaran" name="tanggal_surat_penawaran" id="tanggal_surat_penawaran" 
                                class="w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4" required>
                        </div>

                        <!-- Column 2 -->
                        <div class="mb-4">
                            <label for="hasil_negoisasi" class="block text-sm font-medium text-gray-700">Hasil Negoisasi</label>
                            <input type="text" x-model="sppbjData.hasil_negoisasi" name="hasil_negoisasi" id="hasil_negoisasi" 
                                class="w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4" required>
                        </div>

                        <!-- Column 1 -->
                        <div class="mb-4">
                            <label for="kode_paket" class="block text-sm font-medium text-gray-700">Kode Paket</label>
                            <input type="text" x-model="sppbjData.kode_paket" name="kode_paket" id="kode_paket" 
                                class="w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4" required>
                        </div>

                        <!-- Column 2 -->
                        <div class="mb-4">
                            <label for="tanggal_kode_paket" class="block text-sm font-medium text-gray-700">Tanggal Kode Paket</label>
                            <input type="date" x-model="sppbjData.tanggal_kode_paket" name="tanggal_kode_paket" id="tanggal_kode_paket" 
                                class="w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4" required>
                        </div>

                        <!-- Column 1 -->
                        <div class="mb-4">
                            <label for="tentang_kode_paket" class="block text-sm font-medium text-gray-700">Tentang Kode Paket</label>
                            <input type="text" x-model="sppbjData.tentang_kode_paket" name="tentang_kode_paket" id="tentang_kode_paket" 
                                class="w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4" required>
                        </div>

                    </div>

                    <!-- Submit Button -->
                    <div class="flex gap-4 lg:gap-6">
                        <button type="submit" class="btn-primary">Submit</button>
                        <button type="button" class="btn-primary-outlined" @click="showModal = false">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

    </div>
</td>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('modal', () => ({
            showModal: false,
            sppbjData: {},
            fetchSppbjData() {
                // Fetch SPPBJ data from server (AJAX or Fetch API)
                fetch('<?php echo site_url('create/get_sppbj_data'); ?>')
                    .then(response => response.json())
                    .then(data => {
                        // Populate sppbjData with the fetched data
                        this.sppbjData = data;
                    })
                    .catch(error => console.error('Error fetching SPPBJ data:', error));
            }
        }));
    });
</script>


        <!-- Button logic -->
                        <td class="px-2 py-3 lg:py-5 w-36 whitespace-nowrap text-center">
                        <div x-data="{ showModal: false, suratperjanjianData: {} }">    
                            <button  @click="showModal = true; fetchsuratperjanjianData()"
                            class="<?php echo $get_surat_perjanjian == 1 ? 'btn-primary' : 'btn-warning' ?>">
                            Surat Perjanjian</button>
                        

                             <!-- Modal -->
                        <template x-teleport="body">
                            <div x-show="showModal" class="fixed inset-0 z-[999] hidden overflow-y-auto bg-[black]/60 dark:bg-neutral-40/80" 
                                :class="showModal && '!block'">
                                <div class="flex min-h-screen items-center justify-center px-4 text-neutral-700 dark:text-neutral-20"
                                    @click.self="showModal = false">
                                    <div x-show="showModal" x-transition x-transition.duration.300 
                                        class="panel my-8 w-full max-w-3xl overflow-hidden rounded-lg border-0 bg-neutral-0 p-3 dark:bg-neutral-904 sm:p-4 md:p-6 lg:p-8">
                                        
                                        <form method="POST" action="<?php echo site_url('create'); ?>">
                                            <div class="mb-4 flex items-center justify-between bb-dashed-n30">
                                                <h4>Surat Perjanjian Form</h4>
                                                <i class="las la-times cursor-pointer text-xl" @click="showModal = false"></i>
                                            </div>

                                            <!-- Form fields based on database -->
                                            <div class="grid grid-cols-2 gap-4"> <!-- Using Grid for 2 columns layout -->

                                                <!-- Column 1 -->
                                                    <input type="text" name="id_paket" value="<?php echo $id_paket; ?>" hidden>

                                                    
                                                <!-- Column 2 -->
                                                <div class="mb-4">
                                                    <label for="jenis_kontrak" class="block text-sm font-medium text-gray-700">Jenis_kontrak</label>
                                                    <input type="text" x-model="suratperjanjianData.jenis_kontrak" name="jenis_kontrak" id="jenis_kontrak" 
                                                        class="w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4" required>
                                                </div>

                                                <!-- Column 2 -->
                                                <div class="mb-4">
                                                    <label for="nomor_suratperjanjian" class="block text-sm font-medium text-gray-700">Nomor Surat Perjanjian</label>
                                                    <input type="text" x-model="suratperjanjianData.nomor_suratperjanjian" name="nomor_suratperjanjian" id="nomor_suratperjanjian" 
                                                        class="w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4" required>
                                                </div>

                                                <!-- Column 1 -->
                                                <div class="mb-4">
                                                    <label for="tanggal_suratperjanjian" class="block text-sm font-medium text-gray-700">Tanggal Surat Perjanjian</label>
                                                    <input type="date" x-model="suratperjanjianData.tanggal_suratperjanjian" name="tanggal_suratperjanjian" id="tanggal_suratperjanjian" 
                                                        class="w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4" required>
                                                </div>

                                                <!-- Column 2 -->
                                                <div class="mb-4">
                                                    <label for="no_bahp" class="block text-sm font-medium text-gray-700">Nomor Berita Acara Hasil Pemilihan</label>
                                                    <input type="text" x-model="suratperjanjianData.no_bahp" name="no_bahp" id="no_bahp" 
                                                        class="w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4" required>
                                                </div>

                                                <!-- Column 1 -->
                                                <div class="mb-4">
                                                    <label for="tanggal_bahp" class="block text-sm font-medium text-gray-700">Tanggal Berita Acara Hasil Pemilihan</label>
                                                    <input type="date" x-model="suratperjanjianData.tanggal_bahp" name="tanggal_bahp" id="tanggal_bahp" 
                                                        class="w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4" required>
                                                </div>

                                                  <!-- Column 2 -->
                                                  <div class="mb-4">
                                                    <label for="no_skpd" class="block text-sm font-medium text-gray-700">Nomor Surat Keputusan</label>
                                                    <input type="text" x-model="suratperjanjianData.no_skpd" name="no_skpd" id="no_skpd" 
                                                        class="w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4" required>
                                                </div>

                                                <!-- Column 1 -->
                                                <div class="mb-4">
                                                    <label for="tanggal_skpd" class="block text-sm font-medium text-gray-700">Tanggal Surat Keputusan</label>
                                                    <input type="date" x-model="suratperjanjianData.tanggal_skpd" name="tanggal_skpd" id="tanggal_skpd" 
                                                        class="w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4" required>
                                                </div>

                                                <!-- Column 2 -->
                                                <div class="mb-4">
                                                    <label for="ruang_lingkup" class="block text-sm font-medium text-gray-700">Ruang Lingkup</label>
                                                    <input type="text" x-model="suratperjanjianData.ruang_lingkup" name="ruang_lingkup" id="ruang_lingkup" 
                                                        class="w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4" required>
                                                </div>

                                                <!-- Column 2 -->
                                                <div class="mb-4">
                                                    <label for="harga_penawaran" class="block text-sm font-medium text-gray-700">Harga Penawaran</label>
                                                    <input type="text" x-model="suratperjanjianData.harga_penawaran" name="harga_penawaran" id="harga_penawaran" 
                                                        class="w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4" required>
                                                </div>

                                                <!-- Column 2 -->
                                                <div class="mb-4">
                                                    <label for="no_supl" class="block text-sm font-medium text-gray-700">Nomor Berita Acara</label>
                                                    <input type="text" x-model="suratperjanjianData.no_supl" name="no_supl" id="no_supl" 
                                                        class="w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4" required>
                                                </div>

                                                <!-- Column 1 -->
                                                <div class="mb-4">
                                                    <label for="tanggal_supl" class="block text-sm font-medium text-gray-700">Tanggal Surat Penawaran</label>
                                                    <input type="date" x-model="suratperjanjianData.tanggal_supl" name="tanggal_supl" id="tanggal_supl" 
                                                        class="w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4" required>
                                                </div>

                                                <!-- Column 2 -->
                                                <div class="mb-4">
                                                    <label for="dokumen_penunjang" class="block text-sm font-medium text-gray-700">Dokumen Penunjang</label>
                                                    <input type="text" x-model="suratperjanjianData.dokumen_penunjang" name="dokumen_penunjang" id="dokumen_penunjang" 
                                                        class="w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4" required>
                                                </div>

                                                <!-- Column 2 -->
                                                <div class="mb-4">
                                                    <label for="uang_muka" class="block text-sm font-medium text-gray-700">Uang Muka</label>
                                                    <input type="text" x-model="suratperjanjianData.uang_muka" name="uang_muka" id="uang_muka" 
                                                        class="w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4" required>
                                                </div>

                                            </div>

                                            <!-- Submit Button -->
                                            <div class="flex gap-4 lg:gap-6">
                                                <button type="submit" class="btn-primary">Submit</button>
                                                <button type="button" class="btn-primary-outlined" @click="showModal = false">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </template>
                          </div>
                        </td>
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('modal', () => ({
            showModal: false,
            suratperjanjianData: {},
            fetchsuratperjanjianData() {
                // Fetch suratperjanjian data from server (AJAX or Fetch API)
                fetch('<?php echo site_url('create/get_surat_perjanjian_data'); ?>')
                    .then(response => response.json())
                    .then(data => {
                        // Populate suratperjanjianData with the fetched data
                        this.suratperjanjianData = data;
                    })
                    .catch(error => console.error('Error fetching Surat Perjanjian data:', error));
            }
        }));
    });
</script>
                        <td class="px-2 py-3 lg:py-5 w-24 text-center">
                          <div x-data="{ showModal: false, spmkData: {} }">    
                            <button @click="showModal = true; spmkData()" 
                            class="<?php echo $get_spmk == 1 ? 'btn-primary' : 'btn-warning' ?>">
                            SPMK</button>
                        
                                <!-- Modal -->
                            <template x-teleport="body">
                                <div x-show="showModal" class="fixed inset-0 z-[999] hidden overflow-y-auto bg-[black]/60 dark:bg-neutral-40/80" 
                                    :class="showModal && '!block'">
                                    <div class="flex min-h-screen items-center justify-center px-4 text-neutral-700 dark:text-neutral-20"
                                        @click.self="showModal = false">
                                        <div x-show="showModal" x-transition x-transition.duration.300 
                                            class="panel my-8 w-full max-w-3xl overflow-hidden rounded-lg border-0 bg-neutral-0 p-3 dark:bg-neutral-904 sm:p-4 md:p-6 lg:p-8">
                                            
                                            <form method="POST" action="<?php echo site_url('create'); ?>">
                                                <div class="mb-4 flex items-center justify-between bb-dashed-n30">
                                                    <h4>Surat Printah Mulai Kerja Form</h4>
                                                    <i class="las la-times cursor-pointer text-xl" @click="showModal = false"></i>
                                                </div>

                                                <!-- Form fields based on database -->
                                                <div class="grid grid-cols-2 gap-4"> <!-- Using Grid for 2 columns layout -->

                                                    <!-- Column 1 -->
                                                        <input type="text" name="id_paket" value="<?php echo $id_paket; ?>" hidden>

                                                      
                                                    <!-- Column 2 -->
                                                    <div class="mb-4">
                                                        <label for="nomor_spmk" class="block text-sm font-medium text-gray-700">Nomor Surat Printah Mulai Kerja</label>
                                                        <input type="text" x-model="spmkData.nomor_spmk" name="nomor_spmk" id="nomor_spmk" 
                                                            class="w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4" required>
                                                    </div>

                                                    <!-- Column 1 -->
                                                    <div class="mb-4">
                                                        <label for="tanggal_spmk" class="block text-sm font-medium text-gray-700">Tanggal Surat Perjanjian</label>
                                                        <input type="date" x-model="spmkData.tanggal_spmk" name="tanggal_spmk" id="tanggal_spmk" 
                                                            class="w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4" required>
                                                    </div>

                                                <!-- Submit Button -->
                                                <div class="flex gap-4 lg:gap-6">
                                                    <button type="submit" class="btn-primary">Submit</button>
                                                    <button type="button" class="btn-primary-outlined" @click="showModal = false">Cancel</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </template>
                          </div>
                        </td>

                        <script>
                          document.addEventListener('alpine:init', () => {
                              Alpine.data('modal', () => ({
                                  showModal: false,
                                  spmkData: {},
                                  fetchspmkData() {
                                      // Fetch spmk data from server (AJAX or Fetch API)
                                      fetch('<?php echo site_url('create/get_spmk_data'); ?>')
                                          .then(response => response.json())
                                          .then(data => {
                                              // Populate spmkData with the fetched data
                                              this.spmkData = data;
                                          })
                                          .catch(error => console.error('Error fetching Surat Printah Mulai Kerja data:', error));
                                  }
                              }));
                          });
                      </script>
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