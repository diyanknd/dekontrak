<div
  :class="[$store.app.menu=='horizontal' ? 'max-w-[1704px] mx-auto xxl:px-0 xxl:pt-8':'',$store.app.stretch?'xxxl:max-w-[92%] mx-auto':'']"
  class="p-3 md:p-4 xxl:p-6 space-y-4 xxl:space-y-6" x-data="{  TotalInvoice: 'All' }">
  <!-- Breadcrumb -->
  <div class="white-box xxxl:p-6">
    <div class="n20-box xxxl:p-6 relative ltr:bg-right rtl:bg-left bg-no-repeat max-[650px]:!bg-none bg-contain"
      style="background-image: url(assets/images/breadcrumb-el-1.png)">
      <h2 class="mb-3 xxxl:mb-5">Dashboard</h2>
    </div>
  </div>

  <div class="white-box xxxl:p-6">
    <h4 class="mb-3 xxxl:mb-5">Tender <a href="">Lihat Semua</a></h4>
    <div x-data="{isOpen: false}">
      <div class="bg-neutral-40 p-2 rounded-xl font-bold mb-3" @click="isOpen = !isOpen">
        <div style="width: 100%; display: flex; justify-content: space-between;" class="pl-2 pr-2">
          <div style="margin: 0;">
            <i class="fa-solid fa-caret-up"></i> <span>Pekerjaan Konstruksi</span>
          </div>
          <div style="margin: 0; text-align: right;">
            <span><?php echo $pekerjaan_konstruksi_tender->num_rows(); ?></span>
          </div>
        </div>
      </div>
      <div x-show="isOpen">
        <table id="advance-datatable" class="w-full whitespace-nowrap">
          <thead class="text-left">
            <tr class="bg-neutral-0 dark:bg-neutral-904">

              <th class="px-2 py-3 lg:py-5">No.</th>
              <th class="px-2 py-3 lg:py-5 w-70 whitespace-nowrap">Paket Pekerjaan</th>
              <th class="px-2 py-3 lg:py-5">Pagu Anggaran</th>
              <th class="px-2 py-3 lg:py-5">Nilai Kontrak</th>
              <th class="px-2 py-3 lg:py-5">Status</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1;
            foreach ($pekerjaan_konstruksi_tender->result() as $row) { ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td class="w-70 p-2" style="white-space: normal;">
                  <?php echo $row->paket_pekerjaan; ?>
                  <?php echo $row->sppbj == 1 ? '<span class="inline-block rounded-md bg-primary-300 py-1 px-2 text-white">SPPBJ</span>' : ''; ?>
                  <?php echo $row->surat_perjanjian == 1 ? '<span class="inline-block rounded-md bg-primary-300 py-1 px-2 text-white">Surat Perjanjian</span>' : ''; ?>
                  <?php echo $row->spmk == 1 ? '<span class="inline-block rounded-md bg-primary-300 py-1 px-2 text-white">SPMK</span>' : ''; ?>
                </td>
                <td><?php echo number_format($row->nilai_pagu); ?></td>
                <td><?php echo number_format($row->nilai_kontrak); ?></td>
                <td>Status Kontrak</td>
              </tr>
              <?php $i++;
            } ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="bg-neutral-40 p-2 rounded-xl font-bold mb-3">
      <div style="width: 100%; display: flex; justify-content: space-between;" class="pl-2 pr-2">
        <div style="margin: 0;">
          <span>Konsultan Pengawasan</span>
        </div>
        <div style="margin: 0; text-align: right;">
          <span>10</span>
        </div>
      </div>
    </div>
    <div class="bg-neutral-40 p-2 rounded-xl font-bold">
      <div style="width: 100%; display: flex; justify-content: space-between;" class="pl-2 pr-2">
        <div style="margin: 0;">
          <span>Konsultan Perencanaan</span>
        </div>
        <div style="margin: 0; text-align: right;">
          <span>10</span>
        </div>
      </div>
    </div>
  </div>


  <div class=" white-box xxxl:p-6">
    <h4 class="mb-3 xxxl:mb-5">Non Tender <a href="">Lihat Semua</a></h4>
    <div class="bg-neutral-40 p-2 rounded-xl font-bold mb-3">
      <div style="width: 100%; display: flex; justify-content: space-between;" class="pl-2 pr-2">
        <div style="margin: 0;">
          <span>Pekerjaan Konstruksi</span>
        </div>
        <div style="margin: 0; text-align: right;">
          <span>10</span>
        </div>
      </div>
    </div>

    <div class="bg-neutral-40 p-2 rounded-xl font-bold mb-3">
      <div style="width: 100%; display: flex; justify-content: space-between;" class="pl-2 pr-2">
        <div style="margin: 0;">
          <span>Konsultan Pengawasan</span>
        </div>
        <div style="margin: 0; text-align: right;">
          <span>10</span>
        </div>
      </div>
    </div>
    <div class="bg-neutral-40 p-2 rounded-xl font-bold">
      <div style="width: 100%; display: flex; justify-content: space-between;" class="pl-2 pr-2">
        <div style="margin: 0;">
          <span>Konsultan Perencanaan</span>
        </div>
        <div style="margin: 0; text-align: right;">
          <span>10</span>
        </div>
      </div>
    </div>
  </div>
</div>

</div>