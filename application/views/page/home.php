<!-- Home -->

<div
  :class="[$store.app.menu=='horizontal' ? 'max-w-[1704px] mx-auto xxl:px-0 xxl:pt-8':'',$store.app.stretch?'xxxl:max-w-[92%] mx-auto':'']"
  class="p-3 md:p-4 xxl:p-6 space-y-4 xxl:space-y-6" x-data="{  TotalInvoice: 'All' }">
  <!-- Breadcrumb -->
  <div class="white-box xxxl:p-6">
    <div class="n20-box xxxl:p-6 relative ltr:bg-right rtl:bg-left bg-no-repeat max-[650px]:!bg-none bg-contain"
      style="background-image: url(assets/images/breadcrumb-el-1.png)">
      <h2 class="mb-3 xxxl:mb-2">Dashboard</h2>
    </div>
  </div>

  <div class="white-box xxxl:p-6" x-data="{ isOpenAll: 'false'}">
    <h4 class="mb-3 xxxl:mb-5">Tender <span style="cursor:pointer" @click="isOpenAll = !isOpenAll"
        x-text="isOpenAll ? 'Lihat Semua' : 'Sembunyikan'"></span></h4>
    <div x-show="isOpenAll">
      <div x-data="{isOpen: false}">
        <div class="p-2 rounded-xl font-bold mb-3 "
          :class="isOpen ? 'transition duration-700 ease-in-out opacity-100 bg-warning-100' : 'transition duration-700 ease-in-out  bg-neutral-40'"
          @click="isOpen = !isOpen">
          <div style="width: 100%; display: flex; justify-content: space-between; cursor:pointer;" class="pl-2 pr-2">
            <div style="margin: 0;">
              <i class="fa-solid fa-caret-up"
                :class="{ 'rotate-0 duration-300': !isOpen, 'rotate-180 duration-300': isOpen }"></i> <span>Pekerjaan
                Konstruksi</span>
            </div>
            <div style="margin: 0; text-align: right;">
              <span><?php echo $pekerjaan_konstruksi_tender->num_rows(); ?></span>
            </div>
          </div>
        </div>
        <div x-show="isOpen" x-init="console.log('Table initialized!')" class="overflow-x-auto">
          <table id="advance-datatable-1" class="w-full whitespace-nowrap">
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
                    <?php echo $row->paket_pekerjaan; ?></br>
                    <?php echo $row->sppbj == 1 ? '<a href="#" class="inline-block rounded-md bg-primary-300 py-1 px-2 text-white" onclick="openWindow(\'' . (($row->nilai_pagu >= 200000000) ? site_url('surat/sppbj_tender/') . $row->id_paket : site_url('surat/sppbj_non_tender/') . $row->id_paket) . '\')">SPPBJ</a>' : ''; ?>
                    <?php echo $row->surat_perjanjian == 1 ? '<a href="#" class="inline-block rounded-md bg-primary-300 py-1 px-2 text-white" onclick="openWindow(\'' . (($row->nilai_pagu >= 200000000) ? site_url('surat/surat_perjanjian_tender/') . $row->id_paket : site_url('surat/surat_perjanjian_non_tender/') . $row->id_paket) . '\')">Surat Perjanjian</a>' : ''; ?>
                    <?php echo $row->spmk == 1 ? '<a href="#" class="inline-block rounded-md bg-primary-300 py-1 px-2 text-white" onclick="openWindow(\'' . (($row->nilai_pagu >= 200000000) ? site_url('surat/spmk_tender/') . $row->id_paket : site_url('surat/spmk_non_tender/') . $row->id_paket) . '\')">SPMK</a>' : ''; ?>
                  </td>
                  <td><?php echo number_format($row->nilai_pagu); ?></td>
                  <td><?php echo number_format($row->nilai_kontrak); ?></td>
                  <td>
                    <?php
                    if ($row->jenis_pengadaan == "Pekerjaan Konstruksi") {
                      echo ($row->nilai_pagu >= 200000000) ? "Tender" : "Non Tender";
                    } else {
                      echo ($row->nilai_pagu >= 100000000) ? "Tender" : "Non Tender";
                    }
                    ?>
                  </td>
                </tr>
                <?php $i++;
              } ?>
            </tbody>
          </table>
        </div>
      </div>

      <div x-data="{isOpen: false}">
        <div class="p-2 rounded-xl font-bold mb-3 "
          :class="isOpen ? 'transition duration-700 ease-in-out opacity-100 bg-warning-100' : 'transition duration-700 ease-in-out  bg-neutral-40'"
          @click="isOpen = !isOpen">
          <div style="width: 100%; display: flex; justify-content: space-between; cursor:pointer;" class="pl-2 pr-2">
            <div style="margin: 0;">
              <i class="fa-solid fa-caret-up"
                :class="{ 'rotate-0 duration-300': !isOpen, 'rotate-180 duration-300': isOpen }"></i> <span>Konsultasi
                Pengawasan</span>
            </div>
            <div style="margin: 0; text-align: right;">
              <span><?php echo $konsultan_pengawasan_tender->num_rows(); ?></span>
            </div>
          </div>
        </div>
        <div x-show="isOpen" x-init="console.log('Table initialized!')" class="overflow-x-auto">
          <table id="advance-datatable-2" class="w-full whitespace-nowrap">
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
              foreach ($konsultan_pengawasan_tender->result() as $row) { ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td class="w-70 p-2" style="white-space: normal;">
                    <?php echo $row->paket_pekerjaan; ?></br>
                    <?php echo $row->sppbj == 1 ? '<a href="#" class="inline-block rounded-md bg-primary-300 py-1 px-2 text-white" onclick="openWindow(\'' . (($row->nilai_pagu >= 200000000) ? site_url('surat/sppbj_tender/') . $row->id_paket : site_url('surat/sppbj_non_tender/') . $row->id_paket) . '\')">SPPBJ</a>' : ''; ?>
                    <?php echo $row->surat_perjanjian == 1 ? '<a href="#" class="inline-block rounded-md bg-primary-300 py-1 px-2 text-white" onclick="openWindow(\'' . (($row->nilai_pagu >= 200000000) ? site_url('surat/surat_perjanjian_tender/') . $row->id_paket : site_url('surat/surat_perjanjian_non_tender/') . $row->id_paket) . '\')">Surat Perjanjian</a>' : ''; ?>
                    <?php echo $row->spmk == 1 ? '<a href="#" class="inline-block rounded-md bg-primary-300 py-1 px-2 text-white" onclick="openWindow(\'' . (($row->nilai_pagu >= 200000000) ? site_url('surat/spmk_tender/') . $row->id_paket : site_url('surat/spmk_non_tender/') . $row->id_paket) . '\')">SPMK</a>' : ''; ?>
                  </td>
                  <td><?php echo number_format($row->nilai_pagu); ?></td>
                  <td><?php echo number_format($row->nilai_kontrak); ?></td>
                  <td>
                    <?php
                    if ($row->jenis_pengadaan == "Pekerjaan Konstruksi") {
                      echo ($row->nilai_pagu >= 200000000) ? "Tender" : "Non Tender";
                    } else {
                      echo ($row->nilai_pagu >= 100000000) ? "Tender" : "Non Tender";
                    }
                    ?>
                  </td>
                </tr>
                <?php $i++;
              } ?>
            </tbody>
          </table>
        </div>
      </div>


      <div x-data="{isOpen: false}">
        <div class="p-2 rounded-xl font-bold mb-3 "
          :class="isOpen ? 'transition duration-700 ease-in-out opacity-100 bg-warning-100' : 'transition duration-700 ease-in-out  bg-neutral-40'"
          @click="isOpen = !isOpen">
          <div style="width: 100%; display: flex; justify-content: space-between; cursor:pointer;" class="pl-2 pr-2">
            <div style="margin: 0;">
              <i class="fa-solid fa-caret-up"
                :class="{ 'rotate-0 duration-300': !isOpen, 'rotate-180 duration-300': isOpen }"></i> <span>Konsultasi
                Perencanaan</span>
            </div>
            <div style="margin: 0; text-align: right;">
              <span><?php echo $konsultan_perencanaan_tender->num_rows(); ?></span>
            </div>
          </div>
        </div>
        <div x-show="isOpen" x-init="console.log('Table initialized!')" class="overflow-x-auto">
          <table id="advance-datatable-3" class="w-full whitespace-nowrap">
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
              foreach ($konsultan_perencanaan_tender->result() as $row) { ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td class="w-70 p-2" style="white-space: normal;">
                    <?php echo $row->paket_pekerjaan; ?></br>
                    <?php echo $row->sppbj == 1 ? '<a href="#" class="inline-block rounded-md bg-primary-300 py-1 px-2 text-white" onclick="openWindow(\'' . (($row->nilai_pagu >= 200000000) ? site_url('surat/sppbj_tender/') . $row->id_paket : site_url('surat/sppbj_non_tender/') . $row->id_paket) . '\')">SPPBJ</a>' : ''; ?>
                    <?php echo $row->surat_perjanjian == 1 ? '<a href="#" class="inline-block rounded-md bg-primary-300 py-1 px-2 text-white" onclick="openWindow(\'' . (($row->nilai_pagu >= 200000000) ? site_url('surat/surat_perjanjian_tender/') . $row->id_paket : site_url('surat/surat_perjanjian_non_tender/') . $row->id_paket) . '\')">Surat Perjanjian</a>' : ''; ?>
                    <?php echo $row->spmk == 1 ? '<a href="#" class="inline-block rounded-md bg-primary-300 py-1 px-2 text-white" onclick="openWindow(\'' . (($row->nilai_pagu >= 200000000) ? site_url('surat/spmk_tender/') . $row->id_paket : site_url('surat/spmk_non_tender/') . $row->id_paket) . '\')">SPMK</a>' : ''; ?>
                  </td>
                  <td><?php echo number_format($row->nilai_pagu); ?></td>
                  <td><?php echo number_format($row->nilai_kontrak); ?></td>
                  <td>
                    <?php
                    if ($row->jenis_pengadaan == "Pekerjaan Konstruksi") {
                      echo ($row->nilai_pagu >= 200000000) ? "Tender" : "Non Tender";
                    } else {
                      echo ($row->nilai_pagu >= 100000000) ? "Tender" : "Non Tender";
                    }
                    ?>
                  </td>
                </tr>
                <?php $i++;
              } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div x-show="!isOpenAll">
      <table id="advance-datatable-all1" class="w-full whitespace-nowrap">
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
          foreach ($paket_pekerjaan_all_tender->result() as $row) { ?>
            <tr>
              <td><?php echo $i; ?></td>
              <td class="w-70 p-2" style="white-space: normal;">
                <?php echo $row->paket_pekerjaan; ?></br>
                <?php echo $row->sppbj == 1 ? '<a href="#" class="inline-block rounded-md bg-primary-300 py-1 px-2 text-white" onclick="openWindow(\'' . (($row->nilai_pagu >= 200000000) ? site_url('surat/sppbj_tender/') . $row->id_paket : site_url('surat/sppbj_non_tender/') . $row->id_paket) . '\')">SPPBJ</a>' : ''; ?>
                <?php echo $row->surat_perjanjian == 1 ? '<a href="#" class="inline-block rounded-md bg-primary-300 py-1 px-2 text-white" onclick="openWindow(\'' . (($row->nilai_pagu >= 200000000) ? site_url('surat/surat_perjanjian_tender/') . $row->id_paket : site_url('surat/surat_perjanjian_non_tender/') . $row->id_paket) . '\')">Surat Perjanjian</a>' : ''; ?>
                <?php echo $row->spmk == 1 ? '<a href="#" class="inline-block rounded-md bg-primary-300 py-1 px-2 text-white" onclick="openWindow(\'' . (($row->nilai_pagu >= 200000000) ? site_url('surat/spmk_tender/') . $row->id_paket : site_url('surat/spmk_non_tender/') . $row->id_paket) . '\')">SPMK</a>' : ''; ?>
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



  <div class="white-box xxxl:p-6" x-data="{ isOpenAll: 'false'}">
    <h4 class="mb-3 xxxl:mb-5">Non Tender <span style="cursor:pointer" @click="isOpenAll = !isOpenAll"
        x-text="isOpenAll ? 'Lihat Semua' : 'Sembunyikan'"></span></h4>
    <div x-show="isOpenAll">


      <div x-data="{isOpen: false}">
        <div class="p-2 rounded-xl font-bold mb-3 "
          :class="isOpen ? 'transition duration-700 ease-in-out opacity-100 bg-warning-100' : 'transition duration-700 ease-in-out  bg-neutral-40'"
          @click="isOpen = !isOpen">
          <div style="width: 100%; display: flex; justify-content: space-between; cursor:pointer;" class="pl-2 pr-2">
            <div style="margin: 0;">
              <i class="fa-solid fa-caret-up"
                :class="{ 'rotate-0 duration-300': !isOpen, 'rotate-180 duration-300': isOpen }"></i> <span>Pekerjaan
                Konstruksi</span>
            </div>
            <div style="margin: 0; text-align: right;">
              <span><?php echo $pekerjaan_konstruksi_nontender->num_rows(); ?></span>
            </div>
          </div>
        </div>
        <div x-show="isOpen" x-init="console.log('Table initialized!')" class="overflow-x-auto">
          <table id="advance-datatable-4" class="w-full whitespace-nowrap">
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
              foreach ($pekerjaan_konstruksi_nontender->result() as $row) { ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td class="w-70 p-2" style="white-space: normal;">
                    <?php echo $row->paket_pekerjaan; ?></br>
                    <?php echo $row->sppbj == 1 ? '<a href="#" class="inline-block rounded-md bg-primary-300 py-1 px-2 text-white" onclick="openWindow(\'' . (($row->nilai_pagu >= 200000000) ? site_url('surat/sppbj_tender/') . $row->id_paket : site_url('surat/sppbj_non_tender/') . $row->id_paket) . '\')">SPPBJ</a>' : ''; ?>
                    <?php echo $row->surat_perjanjian == 1 ? '<a href="#" class="inline-block rounded-md bg-primary-300 py-1 px-2 text-white" onclick="openWindow(\'' . (($row->nilai_pagu >= 200000000) ? site_url('surat/surat_perjanjian_tender/') . $row->id_paket : site_url('surat/surat_perjanjian_non_tender/') . $row->id_paket) . '\')">Surat Perjanjian</a>' : ''; ?>
                    <?php echo $row->spmk == 1 ? '<a href="#" class="inline-block rounded-md bg-primary-300 py-1 px-2 text-white" onclick="openWindow(\'' . (($row->nilai_pagu >= 200000000) ? site_url('surat/spmk_tender/') . $row->id_paket : site_url('surat/spmk_non_tender/') . $row->id_paket) . '\')">SPMK</a>' : ''; ?>
                  </td>
                  <td><?php echo number_format($row->nilai_pagu); ?></td>
                  <td><?php echo number_format($row->nilai_kontrak); ?></td>
                  <td>
                    <?php
                    if ($row->jenis_pengadaan == "Pekerjaan Konstruksi") {
                      echo ($row->nilai_pagu >= 200000000) ? "Tender" : "Non Tender";
                    } else {
                      echo ($row->nilai_pagu >= 100000000) ? "Tender" : "Non Tender";
                    }
                    ?>
                  </td>
                </tr>
                <?php $i++;
              } ?>
            </tbody>
          </table>
        </div>
      </div>

      <div x-data="{isOpen: false}">
        <div class="p-2 rounded-xl font-bold mb-3 "
          :class="isOpen ? 'transition duration-700 ease-in-out opacity-100 bg-warning-100' : 'transition duration-700 ease-in-out  bg-neutral-40'"
          @click="isOpen = !isOpen">
          <div style="width: 100%; display: flex; justify-content: space-between; cursor:pointer;" class="pl-2 pr-2">
            <div style="margin: 0;">
              <i class="fa-solid fa-caret-up"
                :class="{ 'rotate-0 duration-300': !isOpen, 'rotate-180 duration-300': isOpen }"></i> <span>Konsultasi
                Pengawasan</span>
            </div>
            <div style="margin: 0; text-align: right;">
              <span><?php echo $konsultan_pengawasan_nontender->num_rows(); ?></span>
            </div>
          </div>
        </div>
        <div x-show="isOpen" x-init="console.log('Table initialized!')" class="overflow-x-auto">
          <table id="advance-datatable-5" class="w-full whitespace-nowrap">
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
              foreach ($konsultan_pengawasan_nontender->result() as $row) { ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td class="w-70 p-2" style="white-space: normal;">
                    <?php echo $row->paket_pekerjaan; ?></br>
                    <?php echo $row->sppbj == 1 ? '<a href="#" class="inline-block rounded-md bg-primary-300 py-1 px-2 text-white" onclick="openWindow(\'' . (($row->nilai_pagu >= 200000000) ? site_url('surat/sppbj_tender/') . $row->id_paket : site_url('surat/sppbj_non_tender/') . $row->id_paket) . '\')">SPPBJ</a>' : ''; ?>
                    <?php echo $row->surat_perjanjian == 1 ? '<a href="#" class="inline-block rounded-md bg-primary-300 py-1 px-2 text-white" onclick="openWindow(\'' . (($row->nilai_pagu >= 200000000) ? site_url('surat/surat_perjanjian_tender/') . $row->id_paket : site_url('surat/surat_perjanjian_non_tender/') . $row->id_paket) . '\')">Surat Perjanjian</a>' : ''; ?>
                    <?php echo $row->spmk == 1 ? '<a href="#" class="inline-block rounded-md bg-primary-300 py-1 px-2 text-white" onclick="openWindow(\'' . (($row->nilai_pagu >= 200000000) ? site_url('surat/spmk_tender/') . $row->id_paket : site_url('surat/spmk_non_tender/') . $row->id_paket) . '\')">SPMK</a>' : ''; ?>
                  </td>
                  <td><?php echo number_format($row->nilai_pagu); ?></td>
                  <td><?php echo number_format($row->nilai_kontrak); ?></td>
                  <td>
                    <?php
                    if ($row->jenis_pengadaan == "Pekerjaan Konstruksi") {
                      echo ($row->nilai_pagu >= 200000000) ? "Tender" : "Non Tender";
                    } else {
                      echo ($row->nilai_pagu >= 100000000) ? "Tender" : "Non Tender";
                    }
                    ?>
                  </td>
                </tr>
                <?php $i++;
              } ?>
            </tbody>
          </table>
        </div>
      </div>


      <div x-data="{isOpen: false}">
        <div class="p-2 rounded-xl font-bold mb-3 "
          :class="isOpen ? 'transition duration-700 ease-in-out opacity-100 bg-warning-100' : 'transition duration-700 ease-in-out  bg-neutral-40'"
          @click="isOpen = !isOpen">
          <div style="width: 100%; display: flex; justify-content: space-between; cursor:pointer;" class="pl-2 pr-2">
            <div style="margin: 0;">
              <i class="fa-solid fa-caret-up"
                :class="{ 'rotate-0 duration-300': !isOpen, 'rotate-180 duration-300': isOpen }"></i> <span>Konsultasi
                Perencanaan</span>
            </div>
            <div style="margin: 0; text-align: right;">
              <span><?php echo $konsultan_perencanaan_nontender->num_rows(); ?></span>
            </div>
          </div>
        </div>
        <div x-show="isOpen" x-init="console.log('Table initialized!')" class="overflow-x-auto">
          <table id="advance-datatable-6" class="w-full whitespace-nowrap">
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
              foreach ($konsultan_perencanaan_nontender->result() as $row) { ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td class="w-70 p-2" style="white-space: normal;">
                    <?php echo $row->paket_pekerjaan; ?></br>
                    <?php echo $row->sppbj == 1 ? '<a href="#" class="inline-block rounded-md bg-primary-300 py-1 px-2 text-white" onclick="openWindow(\'' . (($row->nilai_pagu >= 200000000) ? site_url('surat/sppbj_tender/') . $row->id_paket : site_url('surat/sppbj_non_tender/') . $row->id_paket) . '\')">SPPBJ</a>' : ''; ?>
                    <?php echo $row->surat_perjanjian == 1 ? '<a href="#" class="inline-block rounded-md bg-primary-300 py-1 px-2 text-white" onclick="openWindow(\'' . (($row->nilai_pagu >= 200000000) ? site_url('surat/surat_perjanjian_tender/') . $row->id_paket : site_url('surat/surat_perjanjian_non_tender/') . $row->id_paket) . '\')">Surat Perjanjian</a>' : ''; ?>
                    <?php echo $row->spmk == 1 ? '<a href="#" class="inline-block rounded-md bg-primary-300 py-1 px-2 text-white" onclick="openWindow(\'' . (($row->nilai_pagu >= 200000000) ? site_url('surat/spmk_tender/') . $row->id_paket : site_url('surat/spmk_non_tender/') . $row->id_paket) . '\')">SPMK</a>' : ''; ?>
                  </td>
                  <td><?php echo number_format($row->nilai_pagu); ?></td>
                  <td><?php echo number_format($row->nilai_kontrak); ?></td>
                  <td><?php
                  if ($row->jenis_pengadaan == "Pekerjaan Konstruksi") {
                    echo ($row->nilai_pagu >= 200000000) ? "Tender" : "Non Tender";
                  } else {
                    echo ($row->nilai_pagu >= 100000000) ? "Tender" : "Non Tender";
                  }
                  ?>
                  </td>
                </tr>
                <?php $i++;
              } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div x-show="!isOpenAll">
      <table id="advance-datatable-all2" class="w-full whitespace-nowrap">
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
          foreach ($paket_pekerjaan_all_non_tender->result() as $row) { ?>
            <tr>
              <td><?php echo $i; ?></td>
              <td class="w-70 p-2" style="white-space: normal;">
                <?php echo $row->paket_pekerjaan; ?></br>
                <?php echo $row->sppbj == 1 ? '<a href="#" class="inline-block rounded-md bg-primary-300 py-1 px-2 text-white" onclick="openWindow(\'' . (($row->nilai_pagu >= 200000000) ? site_url('surat/sppbj_tender/') . $row->id_paket : site_url('surat/sppbj_non_tender/') . $row->id_paket) . '\')">SPPBJ</a>' : ''; ?>
                <?php echo $row->surat_perjanjian == 1 ? '<a href="#" class="inline-block rounded-md bg-primary-300 py-1 px-2 text-white" onclick="openWindow(\'' . (($row->nilai_pagu >= 200000000) ? site_url('surat/surat_perjanjian_tender/') . $row->id_paket : site_url('surat/surat_perjanjian_non_tender/') . $row->id_paket) . '\')">Surat Perjanjian</a>' : ''; ?>
                <?php echo $row->spmk == 1 ? '<a href="#" class="inline-block rounded-md bg-primary-300 py-1 px-2 text-white" onclick="openWindow(\'' . (($row->nilai_pagu >= 200000000) ? site_url('surat/spmk_tender/') . $row->id_paket : site_url('surat/spmk_non_tender/') . $row->id_paket) . '\')">SPMK</a>' : ''; ?>
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

</div>

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
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const dataTable = new simpleDatatables.DataTable('#advance-datatable-2', {
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

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const dataTable = new simpleDatatables.DataTable('#advance-datatable-3', {
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

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const dataTable = new simpleDatatables.DataTable('#advance-datatable-4', {
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

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const dataTable = new simpleDatatables.DataTable('#advance-datatable-5', {
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

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const dataTable = new simpleDatatables.DataTable('#advance-datatable-6', {
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

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const dataTable = new simpleDatatables.DataTable('#advance-datatable-all1', {
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

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const dataTable = new simpleDatatables.DataTable('#advance-datatable-all2', {
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