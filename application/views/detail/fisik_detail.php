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
    <div x-data="{activeTab:'list'}" class="white-box mb-5">
        <div class="checkboxes-container overflow-x-auto mb-5">
            <table id="advance-datatable" class="w-full whitespace-nowrap">
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
                                <button class="btn-primary">Cover</button>
                            </td>
                            <td class="px-2 py-3 lg:py-5 w-24 text-center">
                                <button class="btn-primary">SPPJ</button>
                            </td>
                            <td class="px-2 py-3 lg:py-5 w-36 whitespace-nowrap text-center">
                                <button class="btn-primary">Surat Perjanjian</button>
                            </td>
                            <td class="px-2 py-3 lg:py-5 w-24 text-center">
                                <button class="btn-primary">SPMK</button>
                            </td>

                        </tr>
                    </template>
                </tbody>
            </table>
        </div>
    </div>

    <div x-data="{activeTab:'list'}" class="white-box">
        <div class="flex justify-between items-center bb-dashed-n30">
            <h4>File Manager</h4>
            <!-- <button class="btn-primary-outlined"><i class="las la-upload"></i> Upload</button> -->
        </div>

        <div class="flex justify-between flex-wrap gap-5 items-center bb-dashed-n30">
            <form
                class="max-w-[337px] rounded-full bg-neutral-20 dark:bg-neutral-903 border border-neutral-40 dark:border-neutral-500 p-1 flex">
                <input type="text" class="px-4 py-2 w-full bg-transparent" placeholder="Search..." />
                <button class="size-10 shrink-0 rounded-full bg-primary-300 text-neutral-0 f-center">
                    <i class="las la-search text-2xl"></i>
                </button>
            </form>
            <div class="flex items-center gap-4 flex-wrap">


                <div class="p-2 border border-neutral-30 dark:border-neutral-500 rounded-lg flex gap-2">
                    <button :class="activeTab == 'list' ? 'bg-primary-300/10 text-primary-300' : ''"
                        @click="activeTab = 'list'" class="size-9 flex items-center rounded-lg justify-center text-2xl">
                        <i class="las la-align-left"></i>
                    </button>
                </div>
            </div>
        </div>

        <div x-data="customizer">
            <div x-show="activeTab=='menu'" class="flex flex-col gap-4 xxl:gap-6">
                <div class="n20-box">
                    <div class="flex justify-between items-center bb-dashed-n30">
                        <div x-data="modal" class="flex items-center gap-4">
                            <h4>Files</h4>
                            <button @click="openModal"
                                class="size-7 rounded-full bg-primary-300 text-neutral-0 f-center"><i
                                    class="las la-plus text-lg"></i></button>
                            <template x-teleport="body">
                                <div class="fixed inset-0 z-[999] hidden overflow-y-auto bg-neutral-900/80 dark:bg-neutral-40/80 text-neutral-700 dark:text-neutral-20"
                                    :class="isOpen && '!block'">
                                    <div class="flex min-h-screen items-center justify-center px-4"
                                        @click.self="closeModal">
                                        <div x-show="isOpen" x-transition x-transition.duration.300
                                            class="panel my-8 w-full max-w-lg overflow-hidden rounded-lg border-0 bg-neutral-0 p-3 dark:bg-neutral-904 sm:p-4 md:p-6 lg:p-8">
                                            <div class="mb-4 flex items-center justify-between bb-dashed-n30">
                                                <h4>Upload Files</h4>
                                                <i class="las la-times cursor-pointer text-xl" @click="closeModal"></i>
                                            </div>
                                            <form action="#" class="single-file my-4 xl:my-6">
                                                <div
                                                    class="flex flex-col items-center text-center clickable-single cursor-pointer bg-neutral-20 border border-neutral-30 dark:border-neutral-500 dark:bg-neutral-903 rounded-xl p-6 lg:p-10">
                                                    <img src="./assets/images/single-file.png" class="mb-6" alt="" />
                                                    <h5 class="font-semibold mb-4">Drop or Select file</h5>
                                                    <p>Drop files here or click <span
                                                            class="text-primary-300">Browse</span>
                                                        through your machine</p>
                                                </div>
                                            </form>
                                            <div class="flex gap-4 xxl:gap-6">
                                                <button class="btn-primary w-full">Upload</button>
                                                <button class="btn-primary-outlined w-full">Create</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>
                        <a href="#" class="h6 flex items-center gap-3">View All <i
                                class="las la-arrow-right text-xl"></i></a>
                    </div>

                </div>
            </div>
            <div x-show="activeTab=='list'">
                <div x-data="{dense: false, items: [
                {
                  id:1,
                  title:'Docs',
                  type:'folder',
                  size:'2.24gb',
                  date:'17 Feb 2024',
                  time:'12:30 PM',
                  shared:['./assets/images/avatar/avatar-1.png','./assets/images/avatar/avatar-3.png','./assets/images/avatar/avatar-4.png'],
                  checked:false
                },
              ],     handleSelect(e){
          const {name,checked} = e.target
          if(name=='select-all'){
            this.items= this.items.map(file => ({...file,checked:checked}))
          }  
          this.isAllChecked()       
        },
        isAllChecked(){
          return this.items.every(item => item.checked==true)
        } } " class="overflow-x-auto">
                    <table class="w-full whitespace-nowrap">
                        <thead class="text-left">
                            <tr class="bg-neutral-20 dark:bg-neutral-903">

                                <th class="px-6 duration-300" :class="dense? 'py-2': 'py-3 lg:py-5'">Name</th>
                                <th class="px-6 duration-300" :class="dense? 'py-2': 'py-3 lg:py-5'">Size</th>
                                <th class="px-6 duration-300" :class="dense? 'py-2': 'py-3 lg:py-5'">Type</th>
                                <th class="px-6 duration-300" :class="dense? 'py-2': 'py-3 lg:py-5'">Modified</th>
                                <th class="px-6 duration-300" :class="dense? 'py-2': 'py-3 lg:py-5'">Shared</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <template x-for="file in items">
                                <tr class="border-b border-neutral-30 duration-300 hover:bg-neutral-20 dark:border-neutral-500 dark:hover:bg-neutral-903"
                                    :class="file.checked?'!bg-primary-300/10':'bg-neutral-0 dark:bg-neutral-904'">

                                    <td class="px-6" :class="dense? 'py-1.5': 'py-3'" @click="openCustomizer">
                                        <div class="flex items-center gap-3">
                                            <i x-show="file.type!='folder'" :class="file.icon" class="text-2xl"></i>
                                            <img x-show="file.type=='folder'" src="./assets/images/folder.png"
                                                width="24" height="24" alt="" />
                                            <p class="m-text font-medium" x-text="file.title"></p>
                                        </div>
                                    </td>
                                    <td class="px-6" :class="dense? 'py-1.5': 'py-3'">
                                        <span class="m-text" x-text="file.size"></span>
                                    </td>
                                    <td class="px-6" :class="dense? 'py-1.5': 'py-3'">
                                        <span class="m-text" x-text="file.type"></span>
                                    </td>
                                    <td class="px-6" :class="dense? 'py-1.5': 'py-3'">
                                        <div>
                                            <p class="m-text font-medium mb-1" x-text="file.date"></p>
                                            <span class="text-xs" x-text="file.time"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex items-center">
                                            <template x-for="img in file.shared">
                                                <img class="size-8 rounded-full border border-neutral-0 dark:border-neutral-500 -mr-3"
                                                    :src="img" alt="" />
                                            </template>
                                            <div x-show="file.shared.length>2"
                                                class="size-8 rounded-full border border-neutral-0 dark:border-neutral-500 -mr-3 bg-primary-300 font-semibold text-neutral-0 text-xs f-center">
                                                2+</div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex items-center gap-3">
                                            <button @click="fav = !fav" x-data="{fav:false}" class="text-xl">
                                                <i x-show="fav" class="las la-star text-warning-300"></i>
                                                <i x-show="!fav" class="lar la-star"></i>
                                            </button>
                                            <div x-data="dropdown" class="relative flex justify-center"
                                                @click.away="close()">
                                                <i class="las la-ellipsis-v cursor-pointer text-2xl"
                                                    @click="toggle()"></i>
                                                <ul class="horiz-option" :class="isOpen?'show':'hide'">
                                                    <li>
                                                        <span
                                                            class="flex items-center hover:text-primary-300 gap-2 cursor-pointer rounded px-3 py-1.5 text-sm leading-normal duration-300 hover:bg-primary-50">
                                                            <i class="las la-print text-xl"></i> Print </span>
                                                    </li>
                                                    <li>
                                                        <span
                                                            class="flex items-center hover:text-primary-300 gap-2 cursor-pointer rounded px-3 py-1.5 text-sm leading-normal duration-300 hover:bg-primary-50">
                                                            <i class="las la-share-alt-square text-xl"></i> Share
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span
                                                            class="flex items-center hover:text-primary-300 gap-2 cursor-pointer rounded px-3 py-1.5 text-sm leading-normal duration-300 hover:bg-primary-50">
                                                            <i class="las la-download text-xl"></i> Download </span>
                                                    </li>
                                                    <li>
                                                        <span
                                                            class="flex items-center hover:text-primary-300 gap-2 cursor-pointer rounded px-3 py-1.5 text-sm leading-normal duration-300 hover:bg-primary-50">
                                                            <i class="las la-trash text-xl"></i> Delete </span>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </td>
                                </tr>
                            </template>
                        </tbody>
                    </table>
                    <div
                        class="mt-6 flex items-center gap-5 justify-center flex-col md:flex-row md:justify-between whitespace-nowrap">
                        <label for="switch" class="switch flex">
                            <input x-model="dense" id="switch" type="checkbox" />
                            <span class="inner primary"></span>
                            Dense
                        </label>
                        <div class="flex flex-col sm:flex-row justify-center sm:justify-between gap-5">
                            <div class="flex items-center gap-4">
                                <p>Rows per page :</p>
                                <select name="rows" id="rows" class="bg-transparent dark:bg-neutral-904">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                            <div class="f-center gap-4">
                                <p>1-10 of 100</p>
                                <button><i class="las la-angle-left text-xl rtl:rotate-180"></i></button> <button><i
                                        class="las la-angle-right text-xl rtl:rotate-180"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>