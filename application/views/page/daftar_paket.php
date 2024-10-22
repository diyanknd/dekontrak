<div :class="[$store.app.menu=='horizontal' ? 'max-w-[1704px] mx-auto xxl:px-0 xxl:pt-8':'',$store.app.stretch?'xxxl:max-w-[92%] mx-auto':'']"
    class="p-3 md:p-4 xxl:p-6 space-y-4 xxl:space-y-6" x-data="{  TotalInvoice: 'All' }">
    <!-- Breadcrumb -->
    <div class="white-box xxxl:p-6">
        <div class="n20-box xxxl:p-6 relative ltr:bg-right rtl:bg-left bg-no-repeat max-[650px]:!bg-none bg-contain"
            style="background-image: url(<?php echo base_url(); ?>/assets/softify/softify/dist/assets/images/breadcrumb-el-1.png)">
            <h2 class="mb-3 xxxl:mb-5">Daftar Paket</h2>
            <ul class="flex flex-wrap gap-2 items-center">
                <li>
                    <a class="flex items-center gap-2" href="<?php echo site_url('Page/home'); ?>"> <i
                            class="las text-lg xl:text-xl xxl:text-2xl la-home shrink-0"></i> <span>Home</span></a>
                </li>
                <li class="text-sm text-neutral-100">•</li>

                <li>
                    <a class="flex items-center gap-2 text-primary-300" href="#"> <i
                            class="las text-lg xl:text-xl xxl:text-2xl la-layer-group shrink-0"></i> <span>Daftar
                            Paket</span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="white-box xxxl:p-6" x-data="{
                            isOpen: false,
                           
                            openModals() {
                                this.isOpen = true;
                            },
                            closeModal() {
                                this.isOpen = false;
                            }
                        }">
        <!-- <button class="btn-primary-soft" @click="openModals">Buat Kontrak<i class="fa-solid fa-plus"></i> </button> -->

        <template x-teleport="body">
            <div class=" fixed inset-0 z-[999] bg-[black]/60 dark:bg-neutral-40/80" x-show="isOpen" x-transition>
                <div class="flex min-h-screen items-center justify-center px-4 text-neutral-700 dark:text-neutral-20"
                    @click.self="closeModal">
                    <div x-show="isOpen" x-transition x-transition.duration.300
                        class="p-4 panel my-8 w-full max-w-3xl overflow-hidden rounded-lg border-0 bg-neutral-0 p-3 dark:bg-neutral-904 sm:p-4 md:p-6 lg:p-8">


                        <div class=" flex items-center justify-between bb-dashed-n30">
                            <h4>Buat Kontrak Paket</h4>
                            <i class="las la-times cursor-pointer text-xl" @click="closeModal"></i>
                        </div>
                        <label for="jumlahRangkap" class="block text-sm font-medium text-gray-700">Paket
                            Pekerjaan</label>
                        <select x-model="jumlahRangkap" name="jumlah_rangkap" id="jumlahRangkap"
                            class="my-2 w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20  dark:border-neutral-500 dark:bg-neutral-903"
                            required>
                            <!-- tambahkan option di sini -->
                            <option value="">Pilih Paket Pekerjaan</option>
                            <?php foreach ($kontrak->result() as $row) { ?>
                                <option value="<?= $row->id ?>"><?= $row->paket_pekerjaan ?></option>
                            <?php } ?>
                        </select>

                        <!-- tambahkan script Tom Select -->
                        <script>
                            new TomSelect('#jumlahRangkap', {
                                // konfigurasi Tom Select
                            });



                        </script>
                        </select>
                        <div class="grid grid-cols-12 gap-5">

                            <div class="col-span-6">
                                <div class="mb-2">
                                    <label for="jumlahRangkap" class="block text-sm font-medium text-gray-700">Nomor
                                        Kontrak</label>
                                    <input type="number" x-model="jumlahRangkap" name="jumlah_rangkap"
                                        id="jumlahRangkap"
                                        class="my-2 w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4 dark:border-neutral-500 dark:bg-neutral-903"
                                        placeholder="..." required />
                                </div>

                                <div class="mb-2">
                                    <label for="jumlahRangkap" class="block text-sm font-medium text-gray-700">Tanggal
                                        Kontrak</label>
                                    <input type="date" x-model="jumlahRangkap" name="jumlah_rangkap" id="datepicker"
                                        class="my-2 w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4 dark:border-neutral-500 dark:bg-neutral-903"
                                        placeholder="Tanggal..." required />
                                </div>
                                <div class="mb-2">
                                    <label for="jumlahRangkap" class="block text-sm font-medium text-gray-700">Tanggal
                                        Mulai</label>
                                    <input type="date" x-model="jumlahRangkap" name="jumlah_rangkap" id="datepicker"
                                        class="my-2 w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4 dark:border-neutral-500 dark:bg-neutral-903"
                                        placeholder="Tanggal..." required />
                                </div>
                                <div class="mb-2">
                                    <label for="jumlahRangkap" class="block text-sm font-medium text-gray-700">Tanggal
                                        Tanggal Selesai</label>
                                    <input type="date" x-model="jumlahRangkap" name="jumlah_rangkap" id="datepicker"
                                        class="my-2 w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4 dark:border-neutral-500 dark:bg-neutral-903"
                                        placeholder="Tanggal..." required />
                                </div>
                            </div>
                            <div class="col-span-6">
                                <div class="mb-2">
                                    <label for="jumlahRangkap" class="block text-sm font-medium text-gray-700">Nilai
                                        Kontrak</label>
                                    <div
                                        class="relative flex items-center gap-4 rounded-xl border border-neutral-30 my-2 px-4 py-1.5 dark:border-neutral-500">
                                        Rp.
                                        <input type="text" placeholder="" class="w-full bg-transparent px-4 py-2.5">
                                    </div>
                                </div>

                                <div class="mb-2">
                                    <label for="jumlahRangkap" class="block text-sm font-medium text-gray-700">Pagu
                                        Anggaran</label>
                                    <div
                                        class="relative flex items-center gap-4 rounded-xl border border-neutral-30 my-2 px-4 py-1.5 dark:border-neutral-500">
                                        Rp.
                                        <input type="text" placeholder="" class="w-full bg-transparent px-4 py-2.5">
                                    </div>
                                </div>

                                <div class="mb-2">
                                    <label for="jumlahRangkap" class="block text-sm font-medium text-gray-700">Sumber
                                        Dana</label>
                                    <input type="number" x-model="jumlahRangkap" name="jumlah_rangkap"
                                        id="jumlahRangkap"
                                        class="my-2 w-full rounded-xl border focus:border-primary-300 border-neutral-30 bg-neutral-20 px-4 py-2.5 lg:px-6 lg:py-4 dark:border-neutral-500 dark:bg-neutral-903"
                                        placeholder="..." required />
                                </div>
                            </div>
                        </div>





                        <div class="flex gap-4 lg:gap-6">
                            <button type="submit" class="btn-primary">Submit</button>
                            <button type="button" class="btn-primary-outlined" @click="closeModal">Cancel</button>
                        </div>

                    </div>
                </div>
            </div>
        </template>

        <div x-init="console.log('Table initialized!')" class="overflow-x-auto mt-4">
            <table id="basic-table" class="w-full whitespace-nowrap">
                <thead>
                    <tr>
                        <th class="text-left">No</th>
                        <th>Paket Pekerjaan</th>
                        <th>Nilai Kontrak</th>
                        <th>Nilai Pagu Anggaran</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    foreach ($kontrak->result() as $row) { ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td onclick="submitDetailFisik(<?= $row->id ?>)" class="cursor-pointer">
                                <?= $row->paket_pekerjaan ?>
                            </td>
                            <td><?= number_format($row->nilai_kontrak) ?></td>
                            <td><?= number_format($row->nilai_pagu) ?></td>
                            <td><?php
                            if (!$row->id_surat_perjanjian) {
                                echo "Belum Berkontrak";
                            } else {
                                echo "Berkontrak";
                            }
                            ?></td>
                        </tr>
                        <?php $i++;
                    } ?>
                </tbody>
            </table>

        </div>
        <script>

        </script>
    </div>

</div>

<script>
    // Fungsi untuk mengirim detail fisik
    function submitDetailFisik(id) {
        if (!id) {
            console.error("ID Paket is empty!");
            return; // Keluar dari fungsi jika id kosong
        }

        console.log("Selected Paket ID: ", id); // Logging the selected paket ID

        // Set id_paket di input form yang tersembunyi
        document.getElementById('id_paketlol').value = id;

        // Kirimkan form
        document.getElementById('detailFisikFormlol').submit();
    }

    $(document).ready(function () {
        // Anda bisa menambahkan inisialisasi jQuery di sini jika diperlukan
    });
</script>