<div
  :class="[$store.app.menu=='horizontal' ? 'max-w-[1704px] mx-auto xxl:px-0 xxl:pt-8':'',$store.app.stretch?'xxxl:max-w-[92%] mx-auto':'']"
  class="p-3 md:p-4 xxl:p-6 space-y-4 xxl:space-y-6" x-data="{  TotalInvoice: 'All' }">
  <!-- Breadcrumb -->
  <div class="white-box xxxl:p-6">
    <div class="n20-box xxxl:p-6 relative ltr:bg-right rtl:bg-left bg-no-repeat max-[650px]:!bg-none bg-contain"
      style="background-image: url(assets/images/breadcrumb-el-1.png)">
      <h2 class="mb-3 xxxl:mb-5">Kontrak List</h2>
      <ul class="flex flex-wrap gap-2 items-center">
        <li>
          <a class="flex items-center gap-2" href="<?php echo site_url('Page/home'); ?>"> <i
              class="las text-lg xl:text-xl xxl:text-2xl la-home shrink-0"></i> <span>Home</span></a>
        </li>
        <li class="text-sm text-neutral-100">•</li>

        <li>
          <a class="flex items-center gap-2 text-primary-300" href="#"> <i
              class="las text-lg xl:text-xl xxl:text-2xl la-layer-group shrink-0"></i> <span>List</span></a>
        </li>
      </ul>
    </div>
  </div>



  <!-- Invoice List -->

  <div class="grid grid-cols-12 gap-4 xxl:gap-6">

    <div class="col-span-12 grid grid-cols-12 4xl:grid-cols-10 gap-4 xxl:gap-6"
      x-data="{jenis_nilai : 'pagu', activeTab:'pagu'}">

      <div class="col-span-12 sm:col-span-6 lg:col-span-4 xxxl:col-span-3 4xl:col-span-2">
        <div class="white-box xl:p-6">
          <p class="m-text font-medium bb-dashed-n30">Toogle</p>
          <div class="flex justify-between items-center">
            <div class="grow">
              <div class="bb-dashed-n30">
                <div
                  class="col-span-12 flex max-w-max flex-wrap gap-4 rounded-xl md:rounded-[40px] border border-neutral-30 p-3 dark:border-neutral-500">


                  <button
                    @click="jenis_nilai ='pagu', activeTab='pagu',TotalInvoice='pagu',totalpagu='<?php echo $nilai_pagu ?>'"
                    :class="activeTab=='pagu' ?'bg-primary-300 text-neutral-0': 'bg-neutral-20 dark:bg-neutral-903'"
                    class="rounded-full capitalize px-4 py-2 text-sm font-semibold lg:px-6 lg:py-2.5">Nilai
                    Pagu</button>

                  <button @click="jenis_nilai ='kontrak',activeTab='kontrak',TotalInvoice='kontrak'"
                    :class="activeTab=='kontrak' ?'bg-primary-300 text-neutral-0': 'bg-neutral-20 dark:bg-neutral-903'"
                    class="rounded-full capitalize px-4 py-2 text-sm font-semibold lg:px-6 lg:py-2.5">Nilai
                    Kontrak</button>
                </div>
              </div>
            </div>
            <div x-ref="progressPrimary"></div>
          </div>
        </div>
      </div>

      <div class="col-span-12 sm:col-span-6 lg:col-span-4 xxxl:col-span-3 4xl:col-span-2">
        <div class="white-box xl:p-6">
          <p class="m-text font-medium bb-dashed-n30">Total</p>
          <div class="flex justify-between items-center">
            <div class="grow">
              <h4 class="mb-4"
                x-text="activeTab=='pagu' ? '<?php echo number_format($nilai_pagu) ?>' : '<?php echo number_format($nilai_kontrak) ?>'">
              </h4>
              <p class="m-text"
                x-text="activeTab=='pagu' ? '<?php echo $get_pagu_count . " Paket" ?>' : '<?php echo $get_nilai_kontrak_count . " Paket" ?>'">
              </p>
            </div>
            <div x-ref="progressPrimary"></div>
          </div>
        </div>
      </div>
      <div class="col-span-12 sm:col-span-6 lg:col-span-4 xxxl:col-span-3 4xl:col-span-2">
        <div class="white-box xl:p-6">
          <p class="m-text font-medium bb-dashed-n30">Fisik</p>
          <div class="flex justify-between items-center">
            <div class="grow">
              <h4 class="mb-4"
                x-text="activeTab=='pagu' ? '<?php echo number_format($get_pagu_fisik) ?>' : '<?php echo number_format($get_kontrak_fisik) ?>'">
              </h4>
              <p class="m-text"
                x-text="activeTab=='pagu' ? '<?php echo $get_pagu_fisik_count . " Paket" ?>' : '<?php echo $get_pagu_fisik_count . " Paket" ?>'">
              </p>
            </div>
            <div x-ref="progressSecondary"></div>
          </div>
        </div>
      </div>
      <div class="col-span-12 sm:col-span-6 lg:col-span-4 xxxl:col-span-3 4xl:col-span-2">
        <div class="white-box xl:p-6">
          <p class="m-text font-medium bb-dashed-n30">Konsultan Pengawasan</p>
          <div class="flex justify-between items-center">
            <div class="grow">
              <h4 class="mb-4"
                x-text="activeTab=='pagu' ? '<?php echo number_format($get_pagu_konsultan_pengawasan) ?>' : '<?php echo number_format($get_kontrak_konsultan_pengawasan) ?>'">
              </h4>
              <p class="m-text"
                x-text="activeTab=='pagu' ? '<?php echo $get_pagu_konsultan_pengawasan_count . " Paket" ?>' : '<?php echo $get_pagu_konsultan_pengawasan_count . " Paket" ?>'">
              </p>
            </div>
            <div x-ref="progressWarning"></div>
          </div>
        </div>
      </div>
      <div class="col-span-12 sm:col-span-6 lg:col-span-4 xxxl:col-span-3 4xl:col-span-2">
        <div class="white-box xl:p-6">
          <p class="m-text font-medium bb-dashed-n30">Konsultan Perencanaan</p>
          <div class="flex justify-between items-center">
            <div class="grow">
              <h4 class="mb-4"
                x-text="activeTab=='pagu' ? '<?php echo number_format($get_pagu_konsultan_perencanaan) ?>' : '<?php echo number_format($get_kontrak_konsultan_perencanaan) ?>'">
              </h4>
              <p class="m-text"
                x-text="activeTab=='pagu' ? '<?php echo $get_pagu_konsultan_perencanaan_count . " Paket" ?>' : '<?php echo $get_pagu_konsultan_perencanaan_count . " Paket" ?>'">
              </p>
            </div>
            <div x-ref="progressError"></div>
          </div>
        </div>
      </div>

    </div>



    <div class="col-span-12">
      <div x-data="{
    activeTab: 'all',
    searchQuery: '', // Holds the search query
    filteredInvoices: [],
    invoices: [
    <?php $i = 1;
    $total = $kontrak->num_rows();
    foreach ($kontrak->result() as $row) { ?>
      {
        no: <?php echo $i; ?>,
        nomor_kontrak: '<?php echo $row->nomor_kontrak; ?>',
        checked: false,
        paket_pekerjaan: '<?php echo $row->paket_pekerjaan; ?>',
        pagu_anggaran: '<?php echo number_format($row->nilai_pagu); ?>',
        nilai_kontrak: '<?php echo number_format($row->nilai_kontrak); ?>',
        kecamatan: '<?php echo "Kec." . $row->kecamatan; ?>',
        status: '<?php
        if ($row->jenis_pengadaan == "Pekerjaan Konstruksi") {
          echo ($row->nilai_pagu >= 200000000) ? "tender" : "non_tender";
        } else {
          echo ($row->nilai_pagu >= 100000000) ? "tender" : "non_tender";
        }
        ?>'
    }
    <?php if ($i < $total) {
      echo ',';
    } ?>
    <?php $i++;
    } ?>
    ],
    currentPage: 1,
    pageSize: 10, // Default rows per page
    showDetails: false, // Control for showing/hiding details (if necessary)
    
    // Get paginated invoices
    paginatedInvoices() {
      let start = (this.currentPage - 1) * this.pageSize;
      let end = start + this.pageSize;
      return this.filteredInvoices.slice(start, end);
    },

    // Calculate total pages
    totalPages() {
      return Math.ceil(this.filteredInvoices.length / this.pageSize);
    },

    // Change the page number
    changePage(page) {
      if (page >= 1 && page <= this.totalPages()) {
        this.currentPage = page;
      }
    },

    // Update page size
    updatePageSize(event) {
      this.pageSize = parseInt(event.target.value);
      this.currentPage = 1; // Reset to page 1 when changing page size
    },

    // Filter invoices by status (tender, non_tender)
    filterInvoiceByStatus(status) {
      this.activeTab = status;
      if (status === 'all') {
        this.filteredInvoices = this.invoices;
      } else {
        this.filteredInvoices = this.invoices.filter(invoice => invoice.status.toLowerCase() === status.toLowerCase());
      }
      this.currentPage = 1; // Reset to page 1 when filter is applied
    },

    // Search invoices by paket pekerjaan or nomor kontrak
    searchInvoices() {
      this.filteredInvoices = this.invoices.filter(invoice => {
        return invoice.paket_pekerjaan.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
        invoice.nomor_kontrak.toLowerCase().includes(this.searchQuery.toLowerCase());
      });
      this.currentPage = 1; // Reset to page 1 after search
    },

    // Clear filters and reset search
    clearFilter() {
      this.activeTab = 'all';
      this.filteredInvoices = this.invoices;
      this.searchQuery = ''; // Clear search query
      this.currentPage = 1; // Reset to page 1
    },

    // Calculate the total pagu anggaran
    totalPaguAnggaran() {
      return this.filteredInvoices.reduce((total, invoice) => {
        return total + parseFloat(invoice.pagu_anggaran.replace(/[^0-9.-]+/g, ''));
      }, 0).toLocaleString('en-US', { style: 'currency', currency: 'IDR' });
    },

    // Calculate the total nilai kontrak
    totalNilaiKontrak() {
      return this.filteredInvoices.reduce((total, invoice) => {
        return total + parseFloat(invoice.nilai_kontrak.replace(/[^0-9.-]+/g, ''));
      }, 0).toLocaleString('en-US', { style: 'currency', currency: 'IDR' });
    },

    // Initialize filteredInvoices to all invoices when page loads
    init() {
      this.filteredInvoices = this.invoices;
    }
  }" x-init="filteredInvoices=invoices" class="white-box">
        <div class="flex justify-between items-center bb-dashed-n30">
          <h4>Kontrak List</h4>
          <div class="flex flex-wrap items-center gap-4">
            <div class="flex items-center gap-3">
              <span>Sort By : </span>
              <select name="sort" class="nc-select n20">
                <option value="all">All</option>
                <option value="new">New</option>
                <option value="old">Old</option>
              </select>
            </div>
          </div>
        </div>

        <!-- Tabs -->
        <div class="bb-dashed-n30">
          <div
            class="col-span-12 flex max-w-max flex-wrap gap-4 rounded-xl md:rounded-[40px] border border-neutral-30 p-3 dark:border-neutral-500">
            <button @click="TotalInvoice ='All',activeTab='all', filterInvoiceByStatus('all')"
              :class="activeTab=='all' ?'bg-primary-300 text-neutral-0': 'bg-neutral-20 dark:bg-neutral-903'"
              class="rounded-full capitalize px-4 py-2 text-sm font-semibold lg:px-6 lg:py-2.5">all</button>

            <button @click="TotalInvoice ='tender', activeTab='tender', filterInvoiceByStatus('tender')"
              :class="activeTab=='tender' ?'bg-primary-300 text-neutral-0': 'bg-neutral-20 dark:bg-neutral-903'"
              class="rounded-full capitalize px-4 py-2 text-sm font-semibold lg:px-6 lg:py-2.5">Tender</button>

            <button @click="TotalInvoice ='non_tender',activeTab='non_tender', filterInvoiceByStatus('non_tender')"
              :class="activeTab=='non_tender' ?'bg-primary-300 text-neutral-0': 'bg-neutral-20 dark:bg-neutral-903'"
              class="rounded-full capitalize px-4 py-2 text-sm font-semibold lg:px-6 lg:py-2.5">Non Tender</button>
          </div>
        </div>

        <!-- filter -->
        <div class="flex justify-between max-lg:flex-wrap items-center gap-4 xxl:gap-6 mb-6">
          <div class="flex gap-4 xxl:gap-6 items-center grow">
            <!-- Search Input with Alpine.js Search Functionality -->
            <div
              class="flex grow items-center rounded-full border border-neutral-30 dark:border-neutral-500 w-full py-2 px-5">
              <input type="text" placeholder="Search" class="w-full bg-transparent" x-model="searchQuery"
                @input="searchInvoices()" />
              <i class="las la-search text-lg"></i>
            </div>

            <!-- Dropdown for Additional Actions -->
            <button>
              <div x-data="dropdown" class="relative flex justify-center" @click.away="close()">
                <i class="las la-ellipsis-v cursor-pointer text-2xl" @click="toggle()"></i>
                <ul class="horiz-option" :class="isOpen ? 'show' : 'hide'">
                  <li>
                    <span
                      class="flex items-center hover:text-primary-300 gap-2 cursor-pointer rounded px-3 py-1.5 text-sm leading-normal duration-300 hover:bg-primary-50">
                      <i class="las la-print text-xl"></i> Print
                    </span>
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
                      <i class="las la-download text-xl"></i> Download
                    </span>
                  </li>
                  <li>
                    <span
                      class="flex items-center hover:text-primary-300 gap-2 cursor-pointer rounded px-3 py-1.5 text-sm leading-normal duration-300 hover:bg-primary-50">
                      <i class="las la-trash text-xl"></i> Delete
                    </span>
                  </li>
                </ul>
              </div>
            </button>
          </div>
        </div>


        <!-- Search bar -->



        <!-- search results -->
        <div x-show="activeTab != 'all' || searchQuery.length > 0"
          class="flex flex-wrap justify-between items-center gap-3 mb-4 xl:mb-6">
          <p><span x-text="filteredInvoices.length"></span> results found</p>
          <div class="flex items-center gap-4">
            <span>Status: </span>
            <div class="chip soft-default">
              <span class="icon">
                <i class="las la-layer-group"></i>
              </span>
              <span x-text="activeTab"></span>
              <span class="icon cursor-pointer" @click="clearFilter()">
                <i class="las la-times"></i>
              </span>
            </div>
            <button class="flex items-center gap-2 text-error-300 font-semibold text-sm" @click="clearFilter()">
              <i class="las la-trash text-base"></i>
              Clear
            </button>
          </div>
        </div>



        <!-- product list -->
        <div x-data="{dense: false, row6:false}" class="checkboxes-container overflow-x-auto">
          <table class="w-full whitespace-nowrap">
            <thead class="text-left">
              <tr class="bg-neutral-20 dark:bg-neutral-903">
                <th class="px-6 duration-300" :class="dense? 'py-2': 'py-5'">No.</th>
                <th class="px-6 duration-300" :class="dense? 'py-2': 'py-5'">Paket Pekerjaan</th>
                <th class="px-6 duration-300" :class="dense? 'py-2': 'py-5'">Pagu Anggaran</th>
                <th class="px-6 duration-300" :class="dense? 'py-2': 'py-5'">Nilai Kontrak</th>
                <th class="px-6 duration-300" :class="dense? 'py-2': 'py-5'">Kecamatan</th>
                <th class="px-6 duration-300" :class="dense? 'py-2': 'py-5'">Status Kontrak</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <template x-for="invoice in paginatedInvoices()" :key="invoice.no">
                <tr
                  class="border-b border-neutral-30 duration-300 hover:bg-neutral-20 dark:border-neutral-500 dark:hover:bg-neutral-903"
                  :class="invoice.checked?'!bg-primary-300/10':'bg-neutral-0 dark:bg-neutral-904'">
                  <td class="px-6" :class="dense? 'py-2': 'py-2 lg:py-3'">
                    <a href="invoice-details.html" class="flex">
                      <div>
                        <p class="m-text mb-1 font-medium" x-text="invoice.no"></p>
                      </div>
                    </a>
                  </td>
                  <td class="px-6 w-30" :class="dense? 'py-2': 'py-2 lg:py-3'"
                    style="white-space: normal; word-wrap: break-word;">
                    <div>
                      <p class="m-text font-medium mb-1" x-text="invoice.paket_pekerjaan"></p>
                      <span class="text-xs" x-text="invoice.nomor_kontrak"></span>
                    </div>
                  </td>
                  <td class="px-6" :class="dense? 'py-2': 'py-2 lg:py-3'">
                    <div>
                      <p class="m-text font-medium mb-1" x-text="invoice.pagu_anggaran"></p>
                    </div>
                  </td>
                  <td class="px-6" :class="dense? 'py-2': 'py-2 lg:py-3'">
                    <p class="m-text font-medium mb-1" x-text="invoice.nilai_kontrak"></p>
                  </td>
                  <td class="px-6" :class="dense? 'py-2': 'py-2 lg:py-3'">
                    <span class="m-text font-medium mb-1" x-text="invoice.kecamatan"></span>
                  </td>
                  <td class="px-6" :class="dense? 'py-2': 'py-2 lg:py-3'">
                    <span x-show="invoice.status=='tender'"
                      class="py-2 px-5 rounded-3xl text-xs text-success-300 bg-success-300/10 border border-neutral-30 dark:border-neutral-500">Tender</span>
                    <span x-show="invoice.status=='non_tender'"
                      class="py-2 px-5 rounded-3xl text-xs text-error-300 bg-error-300/10 border border-neutral-30 dark:border-neutral-500">Non
                      Tender</span>
                  </td>
                  <td>
                    <div x-data="dropdown" class="relative flex justify-center" @click.away="close()">
                      <i class="las la-ellipsis-v cursor-pointer text-2xl" @click="toggle()"></i>
                      <ul class="horiz-option" :class="isOpen?'show':'hide'">
                        <li>
                          <a href="invoice-details.html"
                            class="flex items-center hover:text-primary-300 gap-2 cursor-pointer rounded px-3 py-1.5 text-sm leading-normal duration-300 hover:bg-primary-50">
                            <i class="las la-eye text-xl"></i> View
                          </a>
                        </li>
                        <li>
                          <span
                            class="flex items-center hover:text-primary-300 gap-2 cursor-pointer rounded px-3 py-1.5 text-sm leading-normal duration-300 hover:bg-primary-50">
                            <i class="las la-trash text-xl"></i> Delete
                          </span>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
              </template>
            </tbody>

            <tfoot class="bg-neutral-20 dark:bg-neutral-903">
              <tr>
                <th class="px-6 py-3">Total:</th>
                <th class="px-6 py-3" x-text="filteredInvoices.length + ' Paket Pekerjaan'"></th>
                <th class="px-6 py-3" x-text="totalPaguAnggaran()"></th>
                <th class="px-6 py-3" x-text="totalNilaiKontrak()"></th>
                <th></th>
                <th></th>
                <th></th>
              </tr>
            </tfoot>
          </table>

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
                <select x-on:change="updatePageSize" name="rows" id="rows" class="bg-transparent dark:bg-neutral-904">
                  <option value="10">10</option>
                  <option value="25">25</option>
                  <option value="50">50</option>
                  <option value="100">100</option>
                </select>
              </div>
              <div class="f-center gap-4">
                <p
                  x-text="`${(currentPage - 1) * pageSize + 1}-${Math.min(currentPage * pageSize, filteredInvoices.length)} of ${filteredInvoices.length}`">
                </p>
                <button @click="changePage(currentPage - 1)" :disabled="currentPage === 1">
                  <i class="las la-angle-left text-xl rtl:rotate-180"></i>
                </button>
                <button @click="changePage(currentPage + 1)" :disabled="currentPage === totalPages()">
                  <i class="las la-angle-right text-xl rtl:rotate-180"></i>
                </button>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>