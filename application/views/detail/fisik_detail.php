<!-- Custom -->
<div class="white-box">
    <!--<div class="flex justify-between max-sm:flex-col gap-4 items-center bb-dashed-n30">
            
            <h4><?php echo $kontrak->jenis_pengadaan; ?><br>
                <span>
                <?php
                if ($kontrak->jenis_pengadaan == "Pekerjaan Konstruksi") {
                    echo ($kontrak->nilai_pagu >= 200000000) ? "Tender" : "Non Tender";
                } else {
                    echo ($kontrak->nilai_pagu >= 100000000) ? "Tender" : "Non Tender";
                }
                ?>
                </span>
            </h4>
            <div class="flex items-center flex-wrap gap-3 sm:gap-4 xxl:gap-6">
              <select name="sort" class="nc-select n20">
                <option value="completed">Completed</option>
                <option value="pending">Pending</option>
                <option value="cancelled">Cancelled</option>
              </select>
              <button class="btn-primary-outlined xl:py-2"><i class="las la-pen text-xl"></i> Edit</button>
              <button class="btn-primary-soft xl:py-2 text-primary-300"><i class="las la-print text-xl"></i> Print</button>
            </div>
            
          </div>-->
    <div class="grid grid-cols-12 gap-4 xxl:gap-6">
        <div class="col-span-12 lg:col-span-7 xxl:col-span-8 flex flex-col gap-4 xxl:gap-6">
            <div class="n20-box">
                <div class="flex justify-between items-center bb-dashed-n40">
                    <h5><?php echo $kontrak->jenis_pengadaan; ?><br>
                        <span>
                            <?php
                            if ($kontrak->jenis_pengadaan == "Pekerjaan Konstruksi") {
                                echo ($kontrak->nilai_pagu >= 200000000) ? "Tender" : "Non Tender";
                            } else {
                                echo ($kontrak->nilai_pagu >= 100000000) ? "Tender" : "Non Tender";
                            }
                            ?>
                        </span>
                    </h5>
                </div>
                <div class="flex justify-between flex-wrap gap-4 items-start">
                    <div class="flex items-center gap-5">
                        <img src="<?php echo base_url(); ?>assets/images/logo.png" width="60" class="rounded"
                            alt="product image" />
                        <div>
                            <h4 class="m-text mb-1 font-medium"><?php echo $kontrak->paket_pekerjaan; ?></h4>
                            <span class="text-xs"><?php echo $kontrak->nomor_kontrak; ?></span> <br>
                            <span class="text-xs"><?php echo $kontrak->nama_penyedia; ?></span> <br><br>
                            <h4 class="m-text mb-1 font-medium">Nilai Kontrak</h4>
                            <span class="text-xs extrabold">Rp.
                                <?php echo number_format($kontrak->nilai_kontrak); ?></span>
                        </div>
                    </div>
                </div>
                <div class="px-2 py-3 flex justify-center">
                    <div class="w-full">
                        <table class="w-full whitespace-nowrap mb-10">
                            <tr x-data="{
                            isOpen: false,
                            jumlahRangkap: '',
                            openModals() {
                                this.isOpen = true;
                            },
                            closeModal() {
                                this.isOpen = false;
                            }
                        }">
                                <td class="py-2 m-text text-left" style="width:5px; ">
                                    <a @click="openModals">
                                        <i class="px-3 las la-file text-xl text-primary-300"></i>
                                    </a>
                                </td>

                                <td class="py-2 m-text text-left">
                                    <button @click="openModals"> Cover </button>
                                </td>

                                <!-- Modal Structure -->
                                <template x-teleport="body">
                                    <div class="fixed inset-0 z-[999] bg-[black]/60 dark:bg-neutral-40/80"
                                        x-show="isOpen" x-transition>
                                        <div class="flex min-h-screen items-center justify-center px-4 text-neutral-700 dark:text-neutral-20"
                                            @click.self="closeModal">
                                            <div x-show="isOpen" x-transition x-transition.duration.300
                                                class="panel my-8 w-full max-w-3xl overflow-hidden rounded-lg border-0 bg-neutral-0 p-3 dark:bg-neutral-904 sm:p-4 md:p-6 lg:p-8">

                                                <form method="POST"
                                                    action="<?php echo ($nilai_pagu->nilai_pagu >= 200000000) ? site_url('surat/kop_surat_tender') : site_url('surat/kop_surat_non_tender'); ?>"
                                                    target="_blank">
                                                    <div class="mb-4 flex items-center justify-between bb-dashed-n30">
                                                        <h4>Masukkan Jumlah Rangkap</h4>
                                                        <i class="las la-times cursor-pointer text-xl"
                                                            @click="closeModal"></i>
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="jumlahRangkap"
                                                            class="block text-sm font-medium text-gray-700">Jumlah
                                                            Rangkap</label>
                                                        <input type="number" x-model="jumlahRangkap"
                                                            name="jumlah_rangkap" id="jumlahRangkap"
                                                            class="my-5 w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4 dark:border-neutral-500 dark:bg-neutral-903"
                                                            placeholder="Jumlah Rangkap..." required />
                                                    </div>
                                                    <div class="flex gap-4 lg:gap-6">
                                                        <button type="submit" class="btn-primary">Submit</button>
                                                        <button type="button" class="btn-primary-outlined"
                                                            @click="closeModal">Cancel</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </template>

                                <td class="py-2 text-right">
                                    <label
                                        style="position: relative;display: inline-block;width: 20px;height: 20px;cursor: not-allowed;">
                                        <input type="checkbox" checked disabled
                                            style="width: 20px;height: 20px;cursor: not-allowed;appearance: none;background-color: #007bff;border: 2px solid #007bff;border-radius: 3px;position: relative;">
                                        <span
                                            style="position: absolute;top: 1px;left: 4px;font-size: 16px;color: white;pointer-events: none;">✔</span>
                                    </label>
                                </td>
                            </tr>
                            <tr x-data="{ showModal: false, 
                                        sppbjData: 
                                        {
                                            nomor_sppbj:'<?php echo isset($get_data_sppbj->nomor_sppbj) ? $get_data_sppbj->nomor_sppbj : ''; ?>',
                                            no_surat_penawaran:'<?php echo isset($get_data_sppbj->no_surat_penawaran) ? $get_data_sppbj->no_surat_penawaran : ''; ?>',
                                            tanggal_surat_penawaran:'<?php echo isset($get_data_sppbj->tanggal_surat_penawaran) ? $get_data_sppbj->tanggal_surat_penawaran : ''; ?>',
                                            tanggal_sppbj:'<?php echo isset($get_data_sppbj->tanggal_sppbj) ? $get_data_sppbj->tanggal_sppbj : ''; ?>',
                                            hasil_negoisasi:'<?php echo isset($get_data_sppbj->hasil_negoisasi) ? $get_data_sppbj->hasil_negoisasi : ''; ?>',
                                            lima_persen:'<?php echo isset($get_data_sppbj->lima_persen) ? $get_data_sppbj->lima_persen : ''; ?>',
                                            kode_paket:'<?php echo isset($get_data_sppbj->kode_paket) ? $get_data_sppbj->kode_paket : ''; ?>',
                                            tentang_kode_paket:'<?php echo isset($get_data_sppbj->tentang_kode_paket) ? $get_data_sppbj->tentang_kode_paket : ''; ?>',
                                            tanggal_kode_paket:'<?php echo isset($get_data_sppbj->tanggal_kode_paket) ? $get_data_sppbj->tanggal_kode_paket : ''; ?>',
                                        }                                     
                                    }">

                                <td class="py-2 m-text text-left" style="width:5px; ">
                                    <?php if ($get_sppbj == 1): ?>
                                        <a href="#" onclick="openWindow('<?php
                                        if ($kontrak->jenis_pengadaan == 'Konstruksi') {
                                            echo ($kontrak->nilai_pagu >= 200000000)
                                                ? site_url('surat/sppbj_tender/') . $kontrak->id_paket
                                                : site_url('surat/sppbj_non_tender/') . $kontrak->id_paket;
                                        } else {
                                            echo ($kontrak->nilai_pagu >= 200000000)
                                                ? site_url('surat/sppbj_konsultansi_tender/') . $kontrak->id_paket
                                                : site_url('surat/sppbj_konsultansi_non_tender/') . $kontrak->id_paket;
                                        }
                                        ?>')">



                                            <div class="group relative">
                                                <i class="px-3 las la-file text-xl text-primary-300"></i>
                                                <div
                                                    class="shadow-custom-1 invisible absolute left-20  top-full z-10 w-[314px] origin-top -translate-x-1/2 scale-0 rounded-lg bg-neutral-0 p-4 opacity-0 duration-300 group-hover:visible group-hover:scale-100 group-hover:opacity-100 dark:bg-neutral-904 md:p-6">
                                                    <p class="l-text mb-4">Lihat SPPBJ</p>
                                                    <p class="s-text">Surat SPPBJ</p>
                                                </div>
                                            </div>
                                        </a>
                                    <?php else: ?>
                                        <div class="group relative">
                                            <i class="px-3 las la-file text-xl default-soft disabled"></i>
                                            <div
                                                class="shadow-custom-1 invisible absolute left-20  top-full z-10 w-[314px] origin-top -translate-x-1/2 scale-0 rounded-lg bg-neutral-0 p-4 opacity-0 duration-300 group-hover:visible group-hover:scale-100 group-hover:opacity-100 dark:bg-neutral-904 md:p-6">
                                                <p class="l-text mb-4">Lihat SPPBJ</p>
                                                <p class="s-text">Surat SPPBJ Belum ada</p>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </td>
                                <td class="py-2 m-text text-left">
                                    <div class="group relative">
                                        <button @click="showModal = true; fetchSppbjData()">
                                            SPPBJ

                                        </button>
                                        <div
                                            class="shadow-custom-1 invisible absolute left-20  top-full z-10 w-[314px] origin-top -translate-x-1/2 scale-0 rounded-lg bg-neutral-0 p-4 opacity-0 duration-300 group-hover:visible group-hover:scale-100 group-hover:opacity-100 dark:bg-neutral-904 md:p-6">
                                            <p class="l-text mb-4">SPPBJ</p>
                                            <p class="s-text">Form pembuatan surat SPPBJ</p>
                                        </div>
                                    </div>




                                    <!-- Modal -->
                                    <template x-teleport="body">
                                        <div x-show="showModal"
                                            class="fixed inset-0 z-[999] hidden overflow-y-auto bg-[black]/60 dark:bg-neutral-40/80"
                                            :class="showModal && '!block'" x-data="">
                                            <div class="flex min-h-screen items-center justify-center px-4 text-neutral-700 dark:text-neutral-20"
                                                @click.self="showModal = false">
                                                <div x-show="showModal" x-transition x-transition.duration.300
                                                    class="panel my-8 w-full max-w-3xl overflow-hidden rounded-lg border-0 bg-neutral-0 p-3 dark:bg-neutral-904 sm:p-4 md:p-6 lg:p-8">

                                                    <form method="POST" action="<?php echo site_url('create'); ?>">
                                                        <div
                                                            class="mb-4 flex items-center justify-between bb-dashed-n30">
                                                            <h4>SPPBJ Form</h4>
                                                            <i class="las la-times cursor-pointer text-xl"
                                                                @click="showModal = false"></i>
                                                        </div>

                                                        <!-- Form fields based on database -->
                                                        <div class="grid grid-cols-2 gap-4">
                                                            <!-- Using Grid for 2 columns layout -->

                                                            <!-- Column 1 -->
                                                            <input type="text" name="id_paket"
                                                                value="<?php echo $id_paket; ?>" hidden>

                                                            <!-- Column 2 -->
                                                            <div class="mb-4">
                                                                <label for="nomor_sppbj"
                                                                    class="block text-sm font-medium text-gray-700">Nomor
                                                                    SPPBJ</label>
                                                                <input type="text" x-model="sppbjData.nomor_sppbj"
                                                                    name="nomor_sppbj" id="nomor_sppbj"
                                                                    class="w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4"
                                                                    required>
                                                            </div>

                                                            <!-- Column 1 -->
                                                            <div class="mb-4">
                                                                <label for="tanggal_sppbj"
                                                                    class="block text-sm font-medium text-gray-700">Tanggal
                                                                    SPPBJ</label>
                                                                <input type="date" x-model="sppbjData.tanggal_sppbj"
                                                                    name="tanggal_sppbj" id="tanggal_sppbj"
                                                                    class="w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4"
                                                                    required>
                                                            </div>

                                                            <!-- Column 2 -->
                                                            <div class="mb-4">
                                                                <label for="no_surat_penawaran"
                                                                    class="block text-sm font-medium text-gray-700">Nomor
                                                                    Surat Penawaran</label>
                                                                <input type="text"
                                                                    x-model="sppbjData.no_surat_penawaran"
                                                                    name="no_surat_penawaran" id="no_surat_penawaran"
                                                                    class="w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4"
                                                                    required>
                                                            </div>

                                                            <!-- Column 1 -->
                                                            <div class="mb-4">
                                                                <label for="tanggal_surat_penawaran"
                                                                    class="block text-sm font-medium text-gray-700">Tanggal
                                                                    Surat Penawaran</label>
                                                                <input type="date"
                                                                    x-model="sppbjData.tanggal_surat_penawaran"
                                                                    name="tanggal_surat_penawaran"
                                                                    id="tanggal_surat_penawaran"
                                                                    class="w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4"
                                                                    required>
                                                            </div>

                                                            <!-- Column 2 -->
                                                            <div class="mb-4">
                                                                <label for="hasil_negoisasi"
                                                                    class="block text-sm font-medium text-gray-700">Hasil
                                                                    Negoisasi</label>
                                                                <input type="text" x-model="sppbjData.hasil_negoisasi"
                                                                    name="hasil_negoisasi" id="hasil_negoisasi"
                                                                    class="w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4"
                                                                    required>
                                                            </div>

                                                            <div class="mb-4">
                                                                <label for="lima_persen"
                                                                    class="block text-sm font-medium text-gray-700">Nilai
                                                                    Jaminan 5%</label>
                                                                <input type="text" x-model="sppbjData.lima_persen"
                                                                    name="lima_persen" id="lima_persen"
                                                                    class="w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4"
                                                                    required>
                                                            </div>

                                                            <!-- Column 1 -->
                                                            <div class="mb-4">
                                                                <label for="kode_paket"
                                                                    class="block text-sm font-medium text-gray-700">Kode
                                                                    Paket</label>
                                                                <input type="text" x-model="sppbjData.kode_paket"
                                                                    name="kode_paket" id="kode_paket"
                                                                    class="w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4"
                                                                    required>
                                                            </div>

                                                            <!-- Column 2 -->
                                                            <div class="mb-4">
                                                                <label for="tanggal_kode_paket"
                                                                    class="block text-sm font-medium text-gray-700">Tanggal
                                                                    Kode Paket</label>
                                                                <input type="date"
                                                                    x-model="sppbjData.tanggal_kode_paket"
                                                                    name="tanggal_kode_paket" id="tanggal_kode_paket"
                                                                    class="w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4"
                                                                    required>
                                                            </div>

                                                            <!-- Column 1 -->
                                                            <div class="mb-4">
                                                                <label for="tentang_kode_paket"
                                                                    class="block text-sm font-medium text-gray-700">Tentang
                                                                    Kode Paket</label>
                                                                <input type="text"
                                                                    x-model="sppbjData.tentang_kode_paket"
                                                                    name="tentang_kode_paket" id="tentang_kode_paket"
                                                                    class="w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4"
                                                                    required>
                                                            </div>

                                                        </div>

                                                        <!-- Submit Button -->
                                                        <div class="flex gap-4 lg:gap-12 justify-center">
                                                            <button type="submit" class="btn-primary">Submit</button>
                                                            <?php if ($get_sppbj != 0) { ?>
                                                                <button type="button" class="btn-primary-outlined"
                                                                    @click="window.open(`<?php echo ($nilai_pagu->nilai_pagu >= 200000000) ? site_url('surat/sppbj_tender/') . $id_paket : site_url('surat/sppbj_non_tender/') . $id_paket; ?>`, '_blank')">
                                                                    <i class="las la-print mr-2"></i> Print
                                                                </button>
                                                            <?php } ?>
                                                            <button type="button" class="btn-primary-outlined"
                                                                @click="showModal = false">Cancel</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </template>
                                </td>


                                <td class="py-2 text-right">
                                    <?php if ($get_sppbj == 1) { ?>
                                        <label
                                            style="position: relative;display: inline-block;width: 20px;height: 20px;cursor: not-allowed;">
                                            <input type="checkbox" checked disabled
                                                style="width: 20px;height: 20px;cursor: not-allowed;appearance: none;background-color: #007bff;border: 2px solid #007bff;border-radius: 3px;position: relative;">
                                            <span
                                                style="position: absolute;top: 1px;left: 4px;font-size: 16px;color: white;pointer-events: none;">✔</span>
                                        </label>
                                    <?php } else { ?>
                                        <input type="checkbox" disabled style="width: 20px; height: 20px;">
                                    <?php } ?>
                                </td>

                            </tr>
                            <tr x-data="{ showModal: false, suratperjanjianData: {
                                        id_paket: '<?php echo isset($get_data_surat_perjanjian->id_paket) ? $get_data_surat_perjanjian->id_paket : ''; ?>',
                                        jenis_kontrak: '<?php echo isset($get_data_surat_perjanjian->jenis_kontrak) ? $get_data_surat_perjanjian->jenis_kontrak : ''; ?>',
                                        nomor_surat_perjanjian: '<?php echo isset($get_data_surat_perjanjian->nomor_surat_perjanjian) ? $get_data_surat_perjanjian->nomor_surat_perjanjian : ''; ?>',
                                        tanggal_surat_perjanjian: '<?php echo isset($get_data_surat_perjanjian->tanggal_surat_perjanjian) ? $get_data_surat_perjanjian->tanggal_surat_perjanjian : ''; ?>',
                                        nomor_bahp: '<?php echo isset($get_data_surat_perjanjian->nomor_bahp) ? $get_data_surat_perjanjian->nomor_bahp : ''; ?>',
                                        tanggal_bahp: '<?php echo isset($get_data_surat_perjanjian->tanggal_bahp) ? $get_data_surat_perjanjian->tanggal_bahp : ''; ?>',
                                        no_skpd: '<?php echo isset($get_data_surat_perjanjian->no_skpd) ? $get_data_surat_perjanjian->no_skpd : ''; ?>',
                                        tanggal_skpd: '<?php echo isset($get_data_surat_perjanjian->tanggal_skpd) ? $get_data_surat_perjanjian->tanggal_skpd : ''; ?>',
                                        ruang_lingkup: '<?php echo isset($get_data_surat_perjanjian->ruang_lingkup) ? $get_data_surat_perjanjian->ruang_lingkup : ''; ?>',
                                        harga_penawaran: '<?php echo isset($get_data_surat_perjanjian->harga_penawaran) ? $get_data_surat_perjanjian->harga_penawaran : ''; ?>',
                                        no_supl: '<?php echo isset($get_data_surat_perjanjian->no_supl) ? $get_data_surat_perjanjian->no_supl : ''; ?>',
                                        tanggal_supl: '<?php echo isset($get_data_surat_perjanjian->tanggal_supl) ? $get_data_surat_perjanjian->tanggal_supl : ''; ?>',
                                        dokumen_penunjang: '<?php echo isset($get_data_surat_perjanjian->dokumen_penunjang) ? $get_data_surat_perjanjian->dokumen_penunjang : ''; ?>',
                                        uang_muka: '<?php echo isset($get_data_surat_perjanjian->uang_muka) ? $get_data_surat_perjanjian->uang_muka : ''; ?>'

                                } }">
                                <td class="py-2 m-text text-left" style="width:5px; ">
                                    <?php if ($get_surat_perjanjian == 1): ?>
                                        <a href="#" onclick="openWindow('<?php
                                        if ($kontrak->jenis_pengadaan == 'Konstruksi') {
                                            echo ($kontrak->nilai_pagu >= 200000000)
                                                ? site_url('surat/surat_perjanjian_tender/') . $kontrak->id_paket
                                                : site_url('surat/surat_perjanjian_non_tender/') . $kontrak->id_paket;
                                        } else {
                                            echo ($kontrak->nilai_pagu >= 200000000)
                                                ? site_url('surat/surat_perjanjian_konsultansi_tender/') . $kontrak->id_paket
                                                : site_url('surat/surat_perjanjian_konsultansi_non_tender/') . $kontrak->id_paket;
                                        }
                                        ?>')">
                                            <div class="group relative">
                                                <i class="px-3 las la-file text-xl text-primary-300"></i>
                                                <div
                                                    class="shadow-custom-1 invisible absolute left-20  top-full z-10 w-[314px] origin-top -translate-x-1/2 scale-0 rounded-lg bg-neutral-0 p-4 opacity-0 duration-300 group-hover:visible group-hover:scale-100 group-hover:opacity-100 dark:bg-neutral-904 md:p-6">
                                                    <p class="l-text mb-4">Lihat Surat Perjanjian</p>
                                                    <p class="s-text">Surat Perjanjian</p>
                                                </div>
                                            </div>
                                        </a>

                                    <?php else: ?>

                                        <div class="group relative">
                                            <i class="px-3 las la-file text-xl default-soft disabled"></i>
                                            <div
                                                class="shadow-custom-1 invisible absolute left-20  top-full z-10 w-[314px] origin-top -translate-x-1/2 scale-0 rounded-lg bg-neutral-0 p-4 opacity-0 duration-300 group-hover:visible group-hover:scale-100 group-hover:opacity-100 dark:bg-neutral-904 md:p-6">
                                                <p class="l-text mb-4">Lihat Perjanjian</p>
                                                <p class="s-text">Surat Perjanjian Belum dibuat</p>
                                            </div>
                                        </div>

                                    <?php endif; ?>
                                </td>
                                <td class="py-2 m-text text-left">
                                    <div class="group relative">
                                        <button @click="showModal = true; fetchsuratperjanjianData()">
                                            Surat Perjanjian
                                        </button>
                                        <div
                                            class="shadow-custom-1 invisible absolute left-20  top-full z-10 w-[314px] origin-top -translate-x-1/2 scale-0 rounded-lg bg-neutral-0 p-4 opacity-0 duration-300 group-hover:visible group-hover:scale-100 group-hover:opacity-100 dark:bg-neutral-904 md:p-6">
                                            <p class="l-text mb-4">Surat Perjanjian</p>
                                            <p class="s-text">Form Pembuatan Surat Surat Perjanjian</p>
                                        </div>
                                    </div>
                                    <!-- Modal -->
                                    <template x-teleport="body">
                                        <div x-show="showModal"
                                            class="fixed inset-0 z-[999] hidden overflow-y-auto bg-[black]/60 dark:bg-neutral-40/80"
                                            :class="showModal && '!block'">
                                            <div class="flex min-h-screen items-center justify-center px-4 text-neutral-700 dark:text-neutral-20"
                                                @click.self="showModal = false">
                                                <div x-show="showModal" x-transition x-transition.duration.300
                                                    class="panel my-8 w-full max-w-3xl overflow-hidden rounded-lg border-0 bg-neutral-0 p-3 dark:bg-neutral-904 sm:p-4 md:p-6 lg:p-8">

                                                    <form method="POST"
                                                        action="<?php echo site_url('create/surat_perjanjian'); ?>">
                                                        <div
                                                            class="mb-4 flex items-center justify-between bb-dashed-n30">
                                                            <h4>Surat Perjanjian Form</h4>
                                                            <i class="las la-times cursor-pointer text-xl"
                                                                @click="showModal = false"></i>
                                                        </div>

                                                        <!-- Form fields based on database -->
                                                        <div class="grid grid-cols-2 gap-4">
                                                            <!-- Using Grid for 2 columns layout -->

                                                            <!-- Column 1 -->
                                                            <input type="text" name="id_paket"
                                                                value="<?php echo $id_paket; ?>" hidden>


                                                            <!-- Column 2 -->
                                                            <div class="mb-4">
                                                                <label for="jenis_kontrak"
                                                                    class="block text-sm font-medium text-gray-700">Jenis_kontrak</label>
                                                                <input type="text"
                                                                    x-model="suratperjanjianData.jenis_kontrak"
                                                                    name="jenis_kontrak" id="jenis_kontrak"
                                                                    class="w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4"
                                                                    required>
                                                            </div>

                                                            <!-- Column 2 -->
                                                            <div class="mb-4">
                                                                <label for="nomor_suratperjanjian"
                                                                    class="block text-sm font-medium text-gray-700">Nomor
                                                                    Surat Perjanjian</label>
                                                                <input type="text"
                                                                    x-model="suratperjanjianData.nomor_surat_perjanjian"
                                                                    name="nomor_suratperjanjian"
                                                                    id="nomor_suratperjanjian"
                                                                    class="w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4"
                                                                    required>
                                                            </div>

                                                            <!-- Column 1 -->
                                                            <div class="mb-4">
                                                                <label for="tanggal_suratperjanjian"
                                                                    class="block text-sm font-medium text-gray-700">Tanggal
                                                                    Surat Perjanjian</label>
                                                                <input type="date"
                                                                    x-model="suratperjanjianData.tanggal_surat_perjanjian"
                                                                    name="tanggal_suratperjanjian"
                                                                    id="tanggal_suratperjanjian"
                                                                    class="w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4"
                                                                    required>
                                                            </div>

                                                            <!-- Column 2 -->
                                                            <div class="mb-4">
                                                                <label for="no_bahp"
                                                                    class="block text-sm font-medium text-gray-700">Nomor
                                                                    Berita Acara Hasil Pemilihan</label>
                                                                <input type="text"
                                                                    x-model="suratperjanjianData.nomor_bahp"
                                                                    name="no_bahp" id="no_bahp"
                                                                    class="w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4"
                                                                    required>
                                                            </div>

                                                            <!-- Column 1 -->
                                                            <div class="mb-4">
                                                                <label for="tanggal_bahp"
                                                                    class="block text-sm font-medium text-gray-700">Tanggal
                                                                    Berita Acara Hasil Pemilihan</label>
                                                                <input type="date"
                                                                    x-model="suratperjanjianData.tanggal_bahp"
                                                                    name="tanggal_bahp" id="tanggal_bahp"
                                                                    class="w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4"
                                                                    required>
                                                            </div>

                                                            <!-- Column 2 -->
                                                            <div class="mb-4">
                                                                <label for="no_skpd"
                                                                    class="block text-sm font-medium text-gray-700">Nomor
                                                                    Surat Keputusan</label>
                                                                <input type="text" x-model="suratperjanjianData.no_skpd"
                                                                    name="no_skpd" id="no_skpd"
                                                                    class="w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4"
                                                                    required>
                                                            </div>

                                                            <!-- Column 1 -->
                                                            <div class="mb-4">
                                                                <label for="tanggal_skpd"
                                                                    class="block text-sm font-medium text-gray-700">Tanggal
                                                                    Surat Keputusan</label>
                                                                <input type="date"
                                                                    x-model="suratperjanjianData.tanggal_skpd"
                                                                    name="tanggal_skpd" id="tanggal_skpd"
                                                                    class="w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4"
                                                                    required>
                                                            </div>

                                                            <!-- Column 2 -->
                                                            <div class="mb-4">
                                                                <label for="ruang_lingkup"
                                                                    class="block text-sm font-medium text-gray-700">Ruang
                                                                    Lingkup</label>
                                                                <!-- Hidden input to hold selected ruang_lingkup values -->
                                                                <input type="hidden" name="ruang_lingkup"
                                                                    id="ruang_lingkup"
                                                                    x-model="suratperjanjianData.ruang_lingkup">

                                                                <div x-data="{
                                                                        selectOpen: false,
                                                                        selectedItems: [],
                                                                        searchText: '',
                                                                        optionList: [
                                                                            { title: 'Umum' },
                                                                            { title: 'Drainase' },
                                                                            { title: 'Pekerjaan Tanah dan Geosintetik' },
                                                                            { title: 'Pekerjaan Preventif' },
                                                                            { title: 'Pekerasan Berbutir dan Perkerasan Beton Semen' },
                                                                            { title: 'Pekerjaan Aspal' },
                                                                            { title: 'Struktur' },
                                                                            { title: 'Rehabilitasi Jembatan' },
                                                                            { title: 'Pekerjaan Harian dan Pekerjaan Lain-lain' },
                                                                            { title: 'Pekerjaan Pemeliharaan Kinerja' },
                                                                        ],
                                                                        filteredOptions() {
                                                                            if (this.searchText.trim() === '') {
                                                                                return this.optionList;
                                                                            } else {
                                                                                return this.optionList.filter(option => option.title.toLowerCase().includes(this.searchText.trim().toLowerCase()));
                                                                            }
                                                                        },
                                                                        toggleItem(item) {
                                                                            const index = this.selectedItems.findIndex(selectedItem => selectedItem.title === item.title);
                                                                            if (index === -1) {
                                                                                // If item not already selected, add it to selectedItems array
                                                                                this.selectedItems.push(item);
                                                                            } else {
                                                                                // If item already selected, remove it from selectedItems array
                                                                                this.selectedItems.splice(index, 1);
                                                                            }
                                                                            // Update the x-model with the comma-separated selected items
                                                                            this.suratperjanjianData.ruang_lingkup = this.selectedItems.map(i => i.title).join(', ');
                                                                        },
                                                                        isSelected(item) {
                                                                            return this.selectedItems.findIndex(selectedItem => selectedItem.title == item.title) !== -1;
                                                                        },
                                                                        toggleCheckbox(item) {
                                                                            this.toggleItem(item); // Call the toggle function
                                                                        },
                                                                        init() {
                                                                            // Initialize selectedItems if x-model already has some values (for example, during edit form)
                                                                            if (this.suratperjanjianData.ruang_lingkup) {
                                                                                const initialSelected = this.suratperjanjianData.ruang_lingkup.split(', ');
                                                                                this.selectedItems = this.optionList.filter(option => initialSelected.includes(option.title));
                                                                            }
                                                                        }
                                                                    }" class="relative mt-4" x-init="init">
                                                                    <button type="button"
                                                                        @click="selectOpen = !selectOpen"
                                                                        class="py-2 lg:py-2.5 px-3 sm:px-4 lg:pr-10 rounded-xl w-full border bg-neutral-0 dark:bg-neutral-904 border-neutral-40 dark:border-neutral-500 relative flex gap-1 flex-wrap">
                                                                        <div x-show="selectedItems.length"
                                                                            class="flex gap-2 flex-wrap">
                                                                            <template x-for="item in selectedItems">
                                                                                <div
                                                                                    class="px-1.5 py-0.5 rounded-full bg-neutral-20 dark:bg-neutral-904 flex items-center gap-2 border border-neutral-40 dark:border-neutral-600 text-neutral-700 dark:text-neutral-40">
                                                                                    <span x-text="item.title"
                                                                                        class="text-xs"></span>
                                                                                    <i @click.stop="toggleItem(item)"
                                                                                        class="las la-times text-xs rounded-full size-4 bg-neutral-70 text-neutral-10"></i>
                                                                                </div>
                                                                            </template>
                                                                        </div>
                                                                        <input type="text" placeholder="Select Items"
                                                                            class="w-full bg-transparent capitalize text-sm"
                                                                            readonly />
                                                                        <span
                                                                            class="absolute inset-y-0 ltr:right-0 rtl:left-0 flex items-center ltr:pr-3 ltr:md:pr-4 ltr:xl:pr-6 rtl:pl-3 rtl:md:pl-4 rtl:xl:pl-6 pointer-events-none">
                                                                            <i class="las la-angle-down"></i>
                                                                        </span>
                                                                    </button>

                                                                    <ul x-show="selectOpen"
                                                                        @click.away="selectOpen = false"
                                                                        class="py-1 rounded-xl bg-neutral-0 dark:bg-neutral-904 absolute top-full left-0 right-0 w-full shadow-xl z-[3] max-h-[250px] overflow-y-auto">
                                                                        <template x-for="option in filteredOptions()"
                                                                            :key="option.title">
                                                                            <li :class="{ 'bg-primary-300 text-neutral-0': isSelected(option) }"
                                                                                class="py-2 ltr:pl-6 rtl:pr-6 hover:bg-primary-300 text-sm hover:text-neutral-0 duration-300 cursor-pointer capitalize">
                                                                                <label
                                                                                    class="flex items-center gap-2 cursor-pointer"
                                                                                    :for="option.title">
                                                                                    <input :id="option.title"
                                                                                        type="checkbox"
                                                                                        @click="toggleCheckbox(option)"
                                                                                        :checked="isSelected(option)"
                                                                                        class="scale-125 accent-secondary-200" />
                                                                                    <span x-text="option.title"></span>
                                                                                </label>
                                                                            </li>
                                                                        </template>
                                                                    </ul>
                                                                </div>
                                                            </div>


                                                            <!-- Column 2 -->
                                                            <div class="mb-4">
                                                                <label for="harga_penawaran"
                                                                    class="block text-sm font-medium text-gray-700">Harga
                                                                    Penawaran</label>
                                                                <input type="text"
                                                                    x-model="suratperjanjianData.harga_penawaran"
                                                                    name="harga_penawaran" id="harga_penawaran"
                                                                    class="w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4"
                                                                    required>
                                                            </div>

                                                            <!-- Column 2 -->
                                                            <div class="mb-4">
                                                                <label for="no_supl"
                                                                    class="block text-sm font-medium text-gray-700">Nomor
                                                                    Berita Acara</label>
                                                                <input type="text" x-model="suratperjanjianData.no_supl"
                                                                    name="no_supl" id="no_supl"
                                                                    class="w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4"
                                                                    required>
                                                            </div>

                                                            <!-- Column 1 -->
                                                            <div class="mb-4">
                                                                <label for="tanggal_supl"
                                                                    class="block text-sm font-medium text-gray-700">Tanggal
                                                                    Surat Penawaran</label>
                                                                <input type="date"
                                                                    x-model="suratperjanjianData.tanggal_supl"
                                                                    name="tanggal_supl" id="tanggal_supl"
                                                                    class="w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4"
                                                                    required>
                                                            </div>

                                                            <!-- Column 2 -->
                                                            <div class="mb-4">
                                                                <label for="dokumen_penunjang"
                                                                    class="block text-sm font-medium text-gray-700">Dokumen
                                                                    Penunjang</label>
                                                                <input type="text"
                                                                    x-model="suratperjanjianData.dokumen_penunjang"
                                                                    name="dokumen_penunjang" id="dokumen_penunjang"
                                                                    class="w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4"
                                                                    required>
                                                            </div>

                                                            <!-- Column 2 -->
                                                            <div class="mb-4">
                                                                <label for="uang_muka"
                                                                    class="block text-sm font-medium text-gray-700">Uang
                                                                    Muka</label>
                                                                <input type="text"
                                                                    x-model="suratperjanjianData.uang_muka"
                                                                    name="uang_muka" id="uang_muka"
                                                                    class="w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4"
                                                                    required>
                                                            </div>

                                                        </div>

                                                        <!-- Submit Button -->
                                                        <div class="flex gap-4 lg:gap-6">
                                                            <button type="submit" class="btn-primary">Submit</button>
                                                            <?php if ($get_surat_perjanjian != 0) { ?>
                                                                <button type="button" class="btn-primary-outlined"
                                                                    @click="window.open(`<?php echo ($nilai_pagu->nilai_pagu >= 200000000) ? site_url('surat/surat_perjanjian_tender/') . $id_paket : site_url('surat/surat_perjanjian_non_tender/') . $id_paket; ?>`, '_blank')">
                                                                    <i class="las la-print mr-2"></i> Print
                                                                </button>
                                                            <?php } ?>
                                                            <button type="button" class="btn-primary-outlined"
                                                                @click="showModal = false">Cancel</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </template>
                                </td>
                                <td class="py-2 text-right">
                                    <?php if ($get_sppbj == 1) { ?>
                                        <label
                                            style="position: relative;display: inline-block;width: 20px;height: 20px;cursor: not-allowed;">
                                            <input type="checkbox" checked disabled
                                                style="width: 20px;height: 20px;cursor: not-allowed;appearance: none;background-color: #007bff;border: 2px solid #007bff;border-radius: 3px;position: relative;">
                                            <span
                                                style="position: absolute;top: 1px;left: 4px;font-size: 16px;color: white;pointer-events: none;">✔</span>
                                        </label>
                                    <?php } else { ?>
                                        <input type="checkbox" disabled style="width: 20px; height: 20px;">
                                    <?php } ?>
                                </td>
                            </tr>
                            <tr x-data="{ showModal: false, spmkData: {
                                        id_paket: '<?php echo isset($get_data_spmk->id_paket) ? $get_data_spmk->id_paket : ''; ?>',
                                        nomor_spmk: '<?php echo isset($get_data_spmk->nomor_spmk) ? $get_data_spmk->nomor_spmk : ''; ?>',
                                        tanggal_spmk: '<?php echo isset($get_data_spmk->tanggal_spmk) ? $get_data_spmk->tanggal_spmk : ''; ?>'

                                } }">
                                <td class="py-2 m-text text-left" style="width:5px; ">
                                    <?php if ($get_spmk == 1): ?>
                                        <a href="#" onclick="openWindow('<?php
                                        if ($kontrak->jenis_pengadaan == 'Konstruksi') {
                                            echo ($kontrak->nilai_pagu >= 200000000)
                                                ? site_url('surat/spmk_tender/') . $kontrak->id_paket
                                                : site_url('surat/spmk_non_tender/') . $kontrak->id_paket;
                                        } else {
                                            echo ($kontrak->nilai_pagu >= 200000000)
                                                ? site_url('surat/spmk_konsultansi_tender/') . $kontrak->id_paket
                                                : site_url('surat/spmk_konsultansi_non_tender/') . $kontrak->id_paket;
                                        }
                                        ?>')">

                                            <div class="group relative">
                                                <i class="px-3 las la-file text-xl text-primary-300"></i>
                                                <div
                                                    class="shadow-custom-1 invisible absolute left-20  top-full z-10 w-[314px] origin-top -translate-x-1/2 scale-0 rounded-lg bg-neutral-0 p-4 opacity-0 duration-300 group-hover:visible group-hover:scale-100 group-hover:opacity-100 dark:bg-neutral-904 md:p-6">
                                                    <p class="l-text mb-4">Lihat Surat SPMK</p>
                                                    <p class="s-text">Surat SPMK</p>
                                                </div>
                                            </div>
                                        </a>

                                    <?php else: ?>

                                        <div class="group relative">
                                            <i class="px-3 las la-file text-xl default-soft disabled"></i>
                                            <div
                                                class="shadow-custom-1 invisible absolute left-20  top-full z-10 w-[314px] origin-top -translate-x-1/2 scale-0 rounded-lg bg-neutral-0 p-4 opacity-0 duration-300 group-hover:visible group-hover:scale-100 group-hover:opacity-100 dark:bg-neutral-904 md:p-6">
                                                <p class="l-text mb-4">Lihat Surat SPMK</p>
                                                <p class="s-text">Surat SPMK</p>
                                            </div>
                                        </div>

                                    <?php endif; ?>
                                </td>
                                <td class="py-2 m-text text-left">
                                    <div class="group relative">
                                        <button @click="showModal = true; spmkData()">
                                            SPMK
                                        </button>
                                        <div
                                            class="shadow-custom-1 invisible absolute left-20  top-full z-10 w-[314px] origin-top -translate-x-1/2 scale-0 rounded-lg bg-neutral-0 p-4 opacity-0 duration-300 group-hover:visible group-hover:scale-100 group-hover:opacity-100 dark:bg-neutral-904 md:p-6">
                                            <p class="l-text mb-4">SPMK</p>
                                            <p class="s-text">Form Pembuatan Surat SPMK</p>
                                        </div>
                                    </div>
                                    <!-- Modal -->
                                    <template x-teleport="body">
                                        <div x-show="showModal"
                                            class="fixed inset-0 z-[999] hidden overflow-y-auto bg-[black]/60 dark:bg-neutral-40/80"
                                            :class="showModal && '!block'">
                                            <div class="flex min-h-screen items-center justify-center px-4 text-neutral-700 dark:text-neutral-20"
                                                @click.self="showModal = false">
                                                <div x-show="showModal" x-transition x-transition.duration.300
                                                    class="panel my-8 w-full max-w-3xl overflow-hidden rounded-lg border-0 bg-neutral-0 p-3 dark:bg-neutral-904 sm:p-4 md:p-6 lg:p-8">

                                                    <form method="POST" action="<?php echo site_url('create/spmk'); ?>">
                                                        <div
                                                            class="mb-4 flex items-center justify-between bb-dashed-n30">
                                                            <h4>Surat Printah Mulai Kerja Form</h4>
                                                            <i class="las la-times cursor-pointer text-xl"
                                                                @click="showModal = false"></i>
                                                        </div>

                                                        <!-- Form fields based on database -->
                                                        <div class="grid grid-cols-2 gap-4">
                                                            <!-- Using Grid for 2 columns layout -->

                                                            <!-- Column 1 -->
                                                            <input type="text" name="id_paket"
                                                                value="<?php echo $id_paket; ?>" hidden>


                                                            <!-- Column 2 -->
                                                            <div class="mb-4">
                                                                <label for="nomor_spmk"
                                                                    class="block text-sm font-medium text-gray-700">Nomor
                                                                    Surat Printah Mulai Kerja</label>
                                                                <input type="text" x-model="spmkData.nomor_spmk"
                                                                    name="nomor_spmk" id="nomor_spmk"
                                                                    class="w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4"
                                                                    required>
                                                            </div>

                                                            <!-- Column 1 -->
                                                            <div class="mb-4">
                                                                <label for="tanggal_spmk"
                                                                    class="block text-sm font-medium text-gray-700">Tanggal
                                                                    Surat Perjanjian</label>
                                                                <input type="date" x-model="spmkData.tanggal_spmk"
                                                                    name="tanggal_spmk" id="tanggal_spmk"
                                                                    class="w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4"
                                                                    required>
                                                            </div>

                                                            <!-- Submit Button -->
                                                            <div class="flex gap-4 lg:gap-6">
                                                                <button type="submit"
                                                                    class="btn-primary">Submit</button>
                                                                <?php if ($get_spmk != 0) { ?>
                                                                    <button type="button" class="btn-primary-outlined"
                                                                        @click="window.open(`<?php echo ($nilai_pagu->nilai_pagu >= 200000000) ? site_url('surat/spmk_tender/') . $id_paket : site_url('surat/spmk_non_tender/') . $id_paket; ?>`, '_blank')">
                                                                        <i class="las la-print mr-2"></i> Print
                                                                    </button>
                                                                <?php } ?>
                                                                <button type="button" class="btn-primary-outlined"
                                                                    @click="showModal = false">Cancel</button>
                                                            </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </template>
                                </td>
                                <td class="py-2 text-right">
                                    <?php if ($get_sppbj == 1) { ?>
                                        <label
                                            style="position: relative;display: inline-block;width: 20px;height: 20px;cursor: not-allowed;">
                                            <input type="checkbox" checked disabled
                                                style="width: 20px;height: 20px;cursor: not-allowed;appearance: none;background-color: #007bff;border: 2px solid #007bff;border-radius: 3px;position: relative;">
                                            <span
                                                style="position: absolute;top: 1px;left: 4px;font-size: 16px;color: white;pointer-events: none;">✔</span>
                                        </label>
                                    <?php } else { ?>
                                        <input type="checkbox" disabled style="width: 20px; height: 20px;">
                                    <?php } ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="n20-box">
                <h5 class="bb-dashed-n40">History</h5>
                <div class="flex justify-between gap-4 items-start flex-wrap">
                    <div class="max-w-[500px] w-full">
                        <div class="flex flex-col gap-14">
                            <div class="f-center gap-3">
                                <div class="w-[48%] text-end">
                                    <p class="m-text mb-1 font-medium">Kop Surat</p>
                                    <p class="text-xs">
                                    </p>
                                </div>
                                <div
                                    class="relative flex size-9 items-center justify-center rounded-full bg-neutral-100 text-neutral-0 <?php echo $get_sppbj != 0 ? 'after:absolute after:left-1/2 after:top-[110%] after:h-14 after:w-px after:-translate-x-1/2 after:bg-neutral-100' : ''; ?>">
                                    <i class="las la-file text-xl"></i>
                                </div>
                                <div class="w-[48%] self-start">
                                    <p></p>
                                </div>
                            </div>
                            <?php if ($get_sppbj != 0) { ?>
                                <div class="f-center gap-3">
                                    <div class="w-[48%] self-start text-end">
                                        <p><?php echo $get_data_sppbj->created_at; ?></p>
                                    </div>
                                    <div
                                        class="relative flex size-9 items-center justify-center rounded-full bg-primary-300 text-neutral-0 <?php echo $get_surat_perjanjian != 0 ? 'after:absolute after:left-1/2 after:top-[110%] after:h-14 after:w-px after:-translate-x-1/2 after:bg-primary-300' : ''; ?>">
                                        <i class="las la-file text-xl"></i>
                                    </div>
                                    <div class="w-[48%] text-start">
                                        <p class="m-text mb-1 font-medium">SPPBJ</p>
                                        <p class="text-xs">SPPBJ - <?php echo $get_data_sppbj->nomor_sppbj; ?></p>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php if ($get_surat_perjanjian != 0) { ?>
                                <div class="f-center gap-3">
                                    <div class="w-[48%] text-end">
                                        <p class="m-text mb-1 font-medium">Surat Perjanjian</p>
                                        <p class="text-xs">Surat Perjanjian -
                                            <?php echo $get_data_surat_perjanjian->nomor_surat_perjanjian; ?>
                                        </p>
                                    </div>
                                    <div
                                        class="relative flex size-9 items-center justify-center rounded-full bg-secondary-300 text-neutral-0 <?php echo $get_spmk != 0 ? 'after:absolute after:left-1/2 after:top-[110%] after:h-14 after:w-px after:-translate-x-1/2 after:bg-secondary-300' : ''; ?>">
                                        <i class="las la-file text-xl"></i>
                                    </div>
                                    <div class="w-[48%] self-start">
                                        <p><?php echo $get_data_surat_perjanjian->created_at; ?></p>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php if ($get_spmk != 0) { ?>
                                <div class="f-center gap-3">
                                    <div class="w-[48%] self-start text-end">
                                        <p><?php echo $get_data_spmk->created_at; ?></p>
                                    </div>
                                    <div
                                        class="relative flex size-9 items-center justify-center rounded-full bg-info-300 text-neutral-0">
                                        <i class="las la-file text-xl"></i>
                                    </div>
                                    <div class="w-[48%] text-start">
                                        <p class="m-text mb-1 font-medium">SPMK</p>
                                        <p class="text-xs">SPMK - <?php echo $get_data_spmk->nomor_spmk; ?></p>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-span-12 lg:col-span-5 xxl:col-span-4 flex flex-col gap-4 xxl:gap-6">
            <div class="n20-box">
                <div class="flex justify-between items-center bb-dashed-n40">
                    <h5>Pejabat Penandatangan Kontrak</h5>

                </div>
                <div class="flex gap-3 md:gap-4 xxl:gap-6 items-start">
                    <img src="https://jantan.beraudpupr.com/assets/foto_profil/<?php echo $kontrak->pas_photo; ?>"
                        class="rounded-full size-10 md:size-14" alt="" />
                    <div>
                        <table class="w-full whitespace-nowrap">
                            <tr>
                                <td class="w-1/2 px-2 py-3 m-text">Nama</td>
                                <td class="w-1/2 py-3 l-text">: <?php echo $kontrak->nama_lengkap; ?></td>
                            </tr>
                            <tr>
                                <td class="w-1/2 px-2 py-3 m-text">NIP</td>
                                <td class="w-1/2 py-3 m-text">: <?php echo $kontrak->nip; ?></td>
                            </tr>
                            <tr>
                                <td class="w-1/2 px-2 py-3 m-text">SKPPK</td>
                                <td class="w-1/2 py-3 m-text">: <?php echo $skppk->nomor_skppk; ?> </td>
                            </tr>
                            <tr>
                                <td class="w-1/2 px-2 py-3 m-text">Tanggal</td>
                                <td class="w-1/2 py-3 m-text">: <?php echo $skppk->tanggal_skppk; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="n20-box">
                <div class="flex justify-between items-center bb-dashed-n40">
                    <h5>SK PPK</h5>
                </div>
                <div class="flex justify-between items-center">
                    <div class="flex grow gap-4 xxl:gap-6">
                        <span
                            class="size-14 shrink-0 flex justify-center items-center rounded-lg border bg-warning-300/10 border-warning-300 text-warning-300"
                            onclick="printFile('<?php echo $skppk->doc_skppk; ?>')">
                            <i class="las la-file-pdf text-warning-300 text-3xl"></i>
                        </span>
                        <div class="flex items-center"><?php echo $skppk->tentang_skppk ?></p>
                        </div>
                    </div>
                    <div x-data="dropdown" class="relative flex justify-center" @click.away="close()">
                        <i class="las la-ellipsis-v cursor-pointer text-2xl" @click="toggle()"></i>
                        <ul class="horiz-option" :class="isOpen ? 'show' : 'hide'">
                            <li>
                                <span
                                    class="flex items-center hover:text-primary-300 gap-2 cursor-pointer rounded px-3 py-1.5 text-sm leading-normal duration-300 hover:bg-primary-50"
                                    onclick="printFile('<?php echo $skppk->doc_skppk; ?>')">
                                    <i class="las la-print text-xl"></i> Print
                                </span>
                            </li>
                            <li>
                                <span
                                    class="flex items-center hover:text-primary-300 gap-2 cursor-pointer rounded px-3 py-1.5 text-sm leading-normal duration-300 hover:bg-primary-50"
                                    onclick="shareFile('<?php echo $skppk->doc_skppk; ?>')">
                                    <i class="las la-share-alt-square text-xl"></i> Share
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="n20-box">
                <h4 class="bb-dashed-n30">Foto Dokumentasi</h4>

                <?php if ($dokumentasi->num_rows() > 0) { ?>
                    <div class="grid grid-cols-12 gap-3 lg:gap-5 gallery">
                        <?php foreach ($dokumentasi->result() as $row) {
                            $uploaded_files = json_decode($row->upload_file, true); // Decode JSON into an array
                            if (is_array($uploaded_files)) {
                                foreach ($uploaded_files as $file) { // Loop through each file
                                    ?>
                                    <div class="col-span-12 sm:col-span-6 md:col-span-4 xxl:col-span-3">
                                        <a data-fslightbox
                                            href="https://jantan.beraudpupr.com/assets/foto_dokumentasi/<?php echo $file; ?>"
                                            data-thumb="https://jantan.beraudpupr.com/assets/foto_dokumentasi/<?php echo $file; ?>"
                                            class="block">
                                            <img src="https://jantan.beraudpupr.com/assets/foto_dokumentasi/<?php echo $file; ?>"
                                                class="rounded-xl w-full h-auto object-cover" alt="Dokumentasi" />
                                        </a>
                                    </div>
                                    <?php
                                } // End of file loop
                            } else { // If it's not an array, handle single file
                                ?>
                                <div class="col-span-12 sm:col-span-6 md:col-span-4 xxl:col-span-3">
                                    <a data-fslightbox
                                        href="https://jantan.beraudpupr.com/assets/foto_dokumentasi/<?php echo $row->upload_file; ?>"
                                        data-thumb="https://jantan.beraudpupr.com/assets/foto_dokumentasi/<?php echo $row->upload_file; ?>"
                                        class="block">
                                        <img src="https://jantan.beraudpupr.com/assets/foto_dokumentasi/<?php echo $row->upload_file; ?>"
                                            class="rounded-xl w-full h-auto object-cover" alt="Dokumentasi" />
                                    </a>
                                </div>
                                <?php
                            } // End of single file condition
                        } // End of dokumentasi loop 
                        ?>
                    </div> <!-- End of gallery grid -->

                <?php } else { // No documents found ?>

                    <div class="flex flex-col gap-4 xxl:gap-8">
                        <div class="flex grow gap-4 xxl:gap-6">
                            <span
                                class="size-14 shrink-0 flex justify-center bg-error-300/10 items-center rounded-lg border border-error-300 text-error-300">
                                <i class="las la-image text-3xl"></i>
                            </span>
                            <div>
                                <p class="xl-text font-large mb-2">Tidak Ada Dokumentasi</p>
                                <p class="l-text">0 File</p>
                            </div>
                        </div>
                    </div>

                <?php } ?>
            </div>



            <div class="n20-box">
                <h4 class="bb-dashed-n30">Dokumen</h4>

                <?php if ($dokumen->num_rows() > 0) { ?>
                    <div x-ref="fileOverview"></div>
                    <div class="flex flex-col gap-4 xxl:gap-8">
                        <?php foreach ($dokumen->result() as $row) {
                            // Array of file categories from each document type
                            $file_sources = [
                                'kontrak Konstruksi' => $row->kontrak_konstruksi ?? '',
                                'kontrak Konsultan' => $row->kontrak_konsultan ?? '',
                                'jaminan Pelaksanaan' => $row->jaminan_pelaksanaan ?? '',
                                'addendum' => $row->addendum ?? '',
                                'bast' => $row->bast ?? '',
                                'jaminan' => $row->jaminan ?? '',
                                'fho' => $row->fho ?? '',
                                'mc' => $row->mc ?? ''
                            ];

                            // Iterate through each document category
                            foreach ($file_sources as $category => $files_json) {
                                $uploaded_files = json_decode($files_json, true); // Try to decode JSON into an array
                    
                                if (is_array($uploaded_files) && count($uploaded_files) > 0) {
                                    // Multiple files (JSON array case)
                                    foreach ($uploaded_files as $file) {
                                        // Extract the file extension to determine the type of icon
                                        $extension = pathinfo($file, PATHINFO_EXTENSION);
                                        $icon_class = '';
                                        switch ($extension) {
                                            case 'pdf':
                                                $icon_class = 'la-file-pdf text-warning-300';
                                                $span_class = 'bg-warning-300/10 border-warning-300 text-warning-300';
                                                break;
                                            case 'jpg':
                                            case 'jpeg':
                                            case 'png':
                                            case 'gif':
                                                $icon_class = 'la-file-image text-primary-300';
                                                $span_class = 'bg-primary-300/10 border-primary-300 text-primary-300';
                                                break;
                                            case 'mp4':
                                            case 'mkv':
                                            case 'avi':
                                                $icon_class = 'la-file-video text-secondary-300';
                                                $span_class = 'bg-secondary-300/10 border-secondary-300 text-secondary-300';
                                                break;
                                            default:
                                                $icon_class = 'la-file-alt text-error-300';
                                                $span_class = 'bg-error-300/10 border-error-300 text-error-300';
                                                break;
                                        }

                                        // Get the file size
                                        $file_path = FCPATH . 'https://jantan.beraudpupr.com/assets/upload_dokumen/' . $file;
                                        $file_size = file_exists($file_path) ? filesize($file_path) : 0;
                                        $file_size_gb = number_format($file_size / (1024 * 1024), 2) . ' MB';
                                        ?>

                                        <div class="flex justify-between items-center">
                                            <div class="flex grow gap-4 xxl:gap-6">
                                                <span
                                                    class="size-14 shrink-0 flex justify-center items-center rounded-lg border <?php echo $span_class; ?>"
                                                    onclick="printFile('<?php echo addslashes($files_json); ?>')">
                                                    <i class="las <?php echo $icon_class; ?> text-3xl"></i>
                                                </span>
                                                <div class="flex items-center">
                                                    <p class="l-text font-medium mb-2"><?php echo ucfirst($category); ?> Document</p>
                                                </div>
                                            </div>
                                            <div x-data="dropdown" class="relative flex justify-center" @click.away="close()">
                                                <i class="las la-ellipsis-v cursor-pointer text-2xl" @click="toggle()"></i>
                                                <ul class="horiz-option" :class="isOpen ? 'show' : 'hide'">
                                                    <li>
                                                        <span
                                                            class="flex items-center hover:text-primary-300 gap-2 cursor-pointer rounded px-3 py-1.5 text-sm leading-normal duration-300 hover:bg-primary-50"
                                                            onclick="printFile('<?php echo addslashes($files_json); ?>')">
                                                            <i class="las la-print text-xl"></i> Print
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span
                                                            class="flex items-center hover:text-primary-300 gap-2 cursor-pointer rounded px-3 py-1.5 text-sm leading-normal duration-300 hover:bg-primary-50"
                                                            onclick="shareFile('<?php echo addslashes($files_json); ?>')">
                                                            <i class="las la-share-alt-square text-xl"></i> Share
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <?php
                                    }
                                } elseif (!empty($files_json)) {
                                    // Single file (Non-JSON string case)
                                    $extension = pathinfo($files_json, PATHINFO_EXTENSION);
                                    $icon_class = '';
                                    switch ($extension) {
                                        case 'pdf':
                                            $icon_class = 'la-file-pdf text-warning-300';
                                            $span_class = 'bg-warning-300/10 border-warning-300 text-warning-300';
                                            break;
                                        case 'jpg':
                                        case 'jpeg':
                                        case 'png':
                                        case 'gif':
                                            $icon_class = 'la-file-image text-primary-300';
                                            $span_class = 'bg-primary-300/10 border-primary-300 text-primary-300';
                                            break;
                                        case 'mp4':
                                        case 'mkv':
                                        case 'avi':
                                            $icon_class = 'la-file-video text-secondary-300';
                                            $span_class = 'bg-secondary-300/10 border-secondary-300 text-secondary-300';
                                            break;
                                        default:
                                            $icon_class = 'la-file-alt text-error-300';
                                            $span_class = 'bg-error-300/10 border-error-300 text-error-300';
                                            break;
                                    }

                                    // Get the file size for a single file
                                    $file_path = FCPATH . 'https://jantan.beraudpupr.com/assets/upload_dokumen/' . $files_json;
                                    $file_size = file_exists($file_path) ? filesize($file_path) : 0;
                                    $file_size_gb = number_format($file_size / (1024 * 1024), 2) . ' MB';
                                    $site_dokumen = 'https://jantan.beraudpupr.com/assets/upload_dokumen/';
                                    ?>

                                    <div class="flex justify-between items-center">
                                        <div class="flex grow gap-4 xxl:gap-6">
                                            <span
                                                class="size-14 shrink-0 flex justify-center items-center rounded-lg border <?php echo $span_class; ?>"
                                                onclick="printFile('<?php echo addslashes($files_json); ?>')">
                                                <i class="las <?php echo $icon_class; ?> text-3xl"></i>
                                            </span>
                                            <div class="flex items-center">
                                                <p class="l-text font-medium mb-2"><?php echo ucfirst($category); ?> Document</p>
                                            </div>
                                        </div>
                                        <div x-data="dropdown" class="relative flex justify-center" @click.away="close()">
                                            <i class="las la-ellipsis-v cursor-pointer text-2xl" @click="toggle()"></i>
                                            <ul class="horiz-option" :class="isOpen ? 'show' : 'hide'">
                                                <li>
                                                    <span
                                                        class="flex items-center hover:text-primary-300 gap-2 cursor-pointer rounded px-3 py-1.5 text-sm leading-normal duration-300 hover:bg-primary-50"
                                                        onclick="printFile('<?php echo addslashes($files_json); ?>')">
                                                        <i class="las la-print text-xl"></i> Print
                                                    </span>
                                                </li>
                                                <li>
                                                    <span
                                                        class="flex items-center hover:text-primary-300 gap-2 cursor-pointer rounded px-3 py-1.5 text-sm leading-normal duration-300 hover:bg-primary-50"
                                                        onclick="shareFile('<?php echo addslashes($files_json); ?>')">
                                                        <i class="las la-share-alt-square text-xl"></i> Share
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <?php
                                } else {
                                    // No documents available for this category
                                    ?>

                                    <div class="flex justify-between items-center">
                                        <div class="flex grow gap-4 xxl:gap-6">
                                            <span
                                                class="size-14 shrink-0 flex justify-center bg-error-300/10 items-center rounded-lg border border-error-300 text-error-300">
                                                <i class="las la-exclamation-circle text-error-300 text-3xl"></i>
                                            </span>
                                            <div>
                                                <p class="l-text font-medium mb-2"><?php echo ucfirst($category); ?> Document</p>
                                                <p class="s-text">No files available for <?php echo ucfirst($category); ?>.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                }
                            }
                        } ?>
                    </div>
                <?php } else { ?>
                    <div class="flex justify-center">
                        <p class="xl-text">No Documents Available</p>
                    </div>
                <?php } ?>
            </div>




        </div>
    </div>
</div>


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

<script src="https://cdn.jsdelivr.net/npm/tom-select@2.0.0/dist/js/tom-select.min.js"></script>
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
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const dataTable = new simpleDatatables.DataTable('#advance-datatable', {
            // Konfigurasi tabel
            columns: [
                { select: 0, type: 'string' }, // Paket Pekerjaan (string)
                { select: 1, type: 'date' },   // Tanggal Kontrak (date)
                { select: 2, type: 'string' }, // Penyedia (string)
                { select: 3, type: 'num' },    // Harga Kontrak (number)
                { select: 4, type: 'html' },   // Cover (HTML content)
                { select: 5, type: 'html' },   // SPPJ (HTML content)
                { select: 6, type: 'html' },   // Surat Perjanjian (HTML content)
                { select: 7, type: 'html' }    // SPMK (HTML content)
            ],
            // Konfigurasi lainnya
            perPage: 10,
            perPageSelect: [10, 20, 50, 100],
            labels: {
                placeholder: 'Cari...',
                noRows: 'Tidak ada data',
                info: 'Menampilkan {start} - {end} dari {rows} baris'
            },
        });
    });
</script>

<?php
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

<script>
    function openWindow(url) {
        window.open(url, '_blank', 'innerWidth=900,innerHeight=842,toolbar=no,location=no,menubar=no,scrollbars=yes,resizable=yes');
    }
    document.addEventListener('DOMContentLoaded', function () {
        const dataTable = new simpleDatatables.DataTable('#advance-datatable-1', {
            // Konfigurasi tabel
            columns: [
                { select: 0, type: 'num' },
                { select: 1, type: 'html' },
                { select: 2, type: 'num' },
                { select: 3, type: 'num' },
                { select: 4, type: 'string' },
            ],
            // Konfigurasi lainnya
            perPage: 10,
            perPageSelect: [10, 20, 50, 100],
            labels: {
                placeholder: 'Cari...',
                noRows: 'Tidak ada data',
                info: 'Menampilkan {start} - {end} dari {rows} baris'
            },
        });

    });
</script>
<script src="https://cdn.jsdelivr.net/npm/fslightbox/index.js"></script>
<script>
    // Reinitialize fslightbox when new content is loaded dynamically
    document.addEventListener('DOMContentLoaded', function () {
        refreshFsLightbox(); // This will refresh the gallery to ensure it picks up the images
    });
</script>

<script>
    function printFile(fileUrl) {
        if (fileUrl) {
            const newWindow = window.open(`https://jantan.beraudpupr.com/assets/upload_dokumen/${fileUrl}`, '_blank', 'innerWidth=900,innerHeight=842,toolbar=no,location=no,menubar=no,scrollbars=yes,resizable=yes');
            newWindow.print();
        } else {
            alert("File URL is missing.");
        }
    }

    function shareFile(fileUrl) {
        if (fileUrl) {
            if (navigator.share) {
                navigator.share({
                    title: 'Document',
                    text: 'Check out this document',
                    url: `https://jantan.beraudpupr.com/assets/upload_dokumen/${fileUrl}`
                }).then(() => {
                    console.log('Sharing successful');
                }).catch((error) => {
                    console.error('Error sharing:', error);
                });
            } else {
                alert("Sharing not supported in this browser.");
            }
        } else {
            alert("File URL is missing.");
        }
    }

    function downloadFile(fileUrl) {
        if (fileUrl) {
            console.log("Downloading file from: ", fileUrl);  // Log the file URL to ensure it's correct
            const link = document.createElement('a');
            link.href = `https://jantan.beraudpupr.com/assets/upload_dokumen/${fileUrl}`;
            link.setAttribute('download', fileUrl);  // The default filename for the download
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        } else {
            alert("File URL is missing.");
        }
    }

</script>