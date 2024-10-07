<!doctype html>
<html dir="ltr" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/Softify/Softify/dist/asstes/images/favicon.ico"
    type="image/x-icon" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/Softify/Softify/dist/assets/css/tom-select.min.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet"
    href="<?php echo base_url(); ?>/assets/Softify/Softify/dist/assets/fonts/line-awesome/css/line-awesome.min.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/Softify/Softify/dist/assets/css/nice-select2.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/Softify/Softify/dist/assets/css/animate.min.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/Softify/Softify/dist/assets/css/swiper.min.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/Softify/Softify/dist/assets/css/snackbar.min.css" />
  <link rel="stylesheet"
    href="<?php echo base_url(); ?>/assets/Softify/Softify/dist/assets/css/simple-datatables.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />

  <style>
    .scale-fade-animation {
      animation: blink 2s ease-in-out infinite;
    }

    @keyframes blink {
      0% {
        opacity: 1;
      }

      50% {
        opacity: 0;
      }

      100% {
        opacity: 1;
      }
    }
  </style>

  <title>Home - DEKONTRAK</title>
  <script defer src="<?php echo base_url(); ?>/assets/Softify/Softify/dist/assets/js/app.js"></script>

  <link href="<?php echo base_url(); ?>/assets/Softify/Softify/dist/assets/css/style.css" rel="stylesheet">
</head>

<body x-cloak x-data="customizer" :class="$store.app.isDarkMode?'dark':''" class="bg-neutral-20 dark:bg-neutral-903">



  <!-- Customizer -->
  <div class="text-neutral-700 dark:text-neutral-10">
    <div
      class="fixed top-0 duration-300 ltr:right-0 ltr:left-auto rtl:left-0 rtl:right-auto bottom-0 w-[312px] overflow-y-auto custom-scrollbar h-screen p-6 xl:p-8 bg-neutral-0 dark:bg-neutral-904 z-[25] shadow-xl"
      x-cloak
      :class="customizerIsOpen?'translate-x-0 opacity-100 visible':'ltr:translate-x-full rtl:-translate-x-full opacity-0 invisible'">
      <div
        class="flex justify-between items-center pb-4 lg:pb-6 mb-4 lg:mb-6 border-b border-dashed border-neutral-40 dark:border-neutral-500">
        <h4 class="text-xl font-semibold">Settings</h4>
        <div class="flex gap-4 items-center shrink-0 text-xl">
          <button @click="$store.app.resetTheme()"><i class="las la-redo-alt"></i></button>
          <button class="hover:rotate-180 duration-300" @click="closeCustomizer"><i class="las la-times"></i></button>
        </div>
      </div>
      <!-- Color Mode -->
      <p class="md:text-lg font-medium mb-6">Mode</p>
      <div class="flex justify-between items-center gap-4 bb-dashed-n30">
        <button
          class="border grow p-6 rounded-lg border-primary-300 dark:border-neutral-500 bg-primary-50 text-primary-300 dark:text-neutral-10 dark:bg-neutral-903"
          @click="$store.app.toggleTheme('light')">
          <i class="las la-sun text-3xl"></i>
        </button>
        <button
          class="border grow p-6 rounded-lg dark:border-primary-300 bg-neutral-0 dark:text-primary-300 dark:bg-neutral-903"
          @click="$store.app.toggleTheme('dark')">
          <i class="las la-moon text-3xl"></i>
        </button>
      </div>

      <!-- direction -->
      <p class="md:text-lg font-medium mb-6">Direction</p>
      <div class="flex justify-between items-center gap-4 bb-dashed-n30">
        <button
          class="border dark:rtl:border-neutral-500 grow p-6 rounded-lg ltr:border-primary-300 ltr:bg-primary-50 ltr:text-primary-300 ltr:dark:text-primary-300 dark:text-neutral-10 dark:bg-neutral-903"
          @click="$store.app.toggleRTL('ltr')">
          <i class="las la-align-left text-3xl"></i>
        </button>
        <button
          class="border dark:ltr:border-neutral-500 grow p-6 rounded-lg rtl:border-primary-300 bg-neutral-0 rtl:bg-primary-50 rtl:text-primary-300 dark:bg-neutral-903"
          @click="$store.app.toggleRTL('rtl')">
          <i class="las la-align-right text-3xl"></i>
        </button>
      </div>

      <!-- Contrast -->
      <p class="md:text-lg font-medium mb-6">Contrast</p>
      <div class="flex justify-between items-center gap-4 bb-dashed-n30">
        <button class="border grow p-6 rounded-lg" @click="$store.app.toggleContrast('low')"
          :class="$store.app.contrast=='low'?'border-primary-300 bg-primary-50 text-primary-300':'border-neutral-30 dark:border-neutral-500'">
          <i class="las la-adjust text-3xl"></i>
        </button>
        <button class="border flex items-center h-[86px] justify-center grow p-6 rounded-lg"
          @click="$store.app.toggleContrast('high')"
          :class="$store.app.contrast=='high'?'border-primary-300 bg-primary-50 text-primary-300':'border-neutral-30 dark:border-neutral-500'">
          <img src="<?php echo base_url(); ?>/assets/Softify/Softify/dist/assets/images/contrast.png" width="24"
            class="dark:brightness-0 dark:invert" alt="" />
        </button>
      </div>

      <!-- Layout -->
      <p class="md:text-lg font-medium mb-6">Layout</p>
      <div class="grid grid-cols-2 items-center gap-4 bb-dashed-n30">
        <!-- Vertical -->
        <div class="col-span-1 border rounded-lg p-6 cursor-pointer" @click="$store.app.toggleMenu('vertical')"
          :class="$store.app.menu==='vertical'?'border-primary-300':'border-neutral-30 dark:border-neutral-500'">
          <div
            class="p-1 rounded-md border border-neutral-30 dark:border-neutral-500 flex divide-x divide-neutral-30 dark:divide-neutral-500 gap-1">
            <div class="flex flex-col gap-1">
              <div class="w-2 h-2 rounded-full" :class="$store.app.menu=='vertical'?'bg-primary-300':'bg-neutral-40'">
              </div>
              <div class="h-[3px] w-[22px] rounded"
                :class="$store.app.menu=='vertical'?'bg-primary-200':'bg-neutral-40'"></div>
              <div class="h-[3px] w-[12px] rounded"
                :class="$store.app.menu=='vertical'?'bg-primary-100':'bg-neutral-40'"></div>
            </div>
            <div class="rounded h-[47px] w-[26px]"
              :class="$store.app.menu=='vertical'?'bg-primary-100':'bg-neutral-40'"></div>
          </div>
        </div>

        <div class="col-span-1 border rounded-lg p-6 cursor-pointer" @click="$store.app.toggleMenu('horizontal')"
          :class="$store.app.menu==='horizontal'?'border-primary-300':'border-neutral-30 dark:border-neutral-500'">
          <div
            class="p-1 rounded-md border border-neutral-30 dark:border-neutral-500 flex flex-col divide-x divide-neutral-30 dark:divide-neutral-500 gap-1">
            <div class="flex items-center gap-1">
              <div class="w-2 h-2 rounded-full" :class="$store.app.menu=='horizontal'?'bg-primary-300':'bg-neutral-40'">
              </div>
              <div class="h-[4px] w-[14px] rounded"
                :class="$store.app.menu=='horizontal'?'bg-primary-200':'bg-neutral-40'"></div>
              <div class="h-[4px] w-[8px] rounded"
                :class="$store.app.menu=='horizontal'?'bg-primary-100':'bg-neutral-40'"></div>
            </div>
            <div class="rounded h-[34px] w-[46px]"
              :class="$store.app.menu=='horizontal'?'bg-primary-100':'bg-neutral-40'"></div>
          </div>
        </div>
        <div class="col-span-1 border rounded-lg p-6 cursor-pointer" @click="$store.app.toggleMenu('hovered')"
          :class="$store.app.menu==='hovered'?'border-primary-300':'border-neutral-30 dark:border-neutral-500'">
          <div
            class="p-1 rounded-md border border-neutral-30 dark:border-neutral-500 flex divide-x divide-neutral-30 dark:divide-neutral-500 gap-1">
            <div class="flex flex-col gap-1">
              <div class="w-2 h-2 rounded-full" :class="$store.app.menu=='hovered'?'bg-primary-300':'bg-neutral-40'">
              </div>
              <div class="h-[2px] w-[8px] rounded" :class="$store.app.menu=='hovered'?'bg-primary-200':'bg-neutral-40'">
              </div>
              <div class="h-[2px] w-[4px] rounded" :class="$store.app.menu=='hovered'?'bg-primary-100':'bg-neutral-40'">
              </div>
            </div>
            <div class="rounded h-[47px] w-[40px]" :class="$store.app.menu=='hovered'?'bg-primary-100':'bg-neutral-40'">
            </div>
          </div>
        </div>
      </div>

      <!-- strech -->
      <p class="md:text-lg font-medium mb-6">Stretch</p>
      <div class="bb-dashed-n30">
        <button class="border grow p-6 f-center rounded-lg border-neutral-30 dark:border-neutral-500 w-full"
          @click="$store.app.toggleStretch()">
          <span class="flex items-center gap-1 text-lg" x-show="$store.app.stretch">
            <i class="las la-angle-right"></i>
            <span class="w-8 bb-dashed-n30"></span>
            <i class="las la-angle-left"></i>
          </span>
          <span class="flex items-center gap-1 text-lg text-primary-300" x-show="!$store.app.stretch">
            <i class="las la-angle-left"></i>
            <span class="w-28 bb-dashed-n30 !border-primary-300"></span>
            <i class="las la-angle-right"></i>
          </span>
        </button>
      </div>

      <!-- Presets -->
      <p class="md:text-lg font-medium mb-6">Presets</p>
      <div class="grid grid-cols-3 gap-4 bb-dashed-n30">
        <div :class="{'border-primary-200 dark:border-primary-200':$store.app.currentColor=='44 123 229'}"
          @click="$store.app.changeColor('44 123 229')"
          class="col-span-1 cursor-pointer size-[72px] rounded-md border border-neutral-20 dark:border-neutral-500 f-center">
          <div :class="{'size-8':$store.app.currentColor=='44 123 229'}"
            class="size-5 duration-300 rounded-full bg-[#2C7BE5]"></div>
        </div>
        <div :class="{'border-primary-200 dark:border-primary-200':$store.app.currentColor=='142 51 255'}"
          @click="$store.app.changeColor('142 51 255')"
          class="col-span-1 cursor-pointer size-[72px] rounded-md border border-neutral-20 dark:border-neutral-500 f-center">
          <div :class="{'size-8':$store.app.currentColor=='142 51 255'}"
            class="size-5 duration-300 rounded-full bg-secondary-300"></div>
        </div>
        <div :class="{'border-primary-200 dark:border-primary-200':$store.app.currentColor=='0 184 217'}"
          @click="$store.app.changeColor('0 184 217')"
          class="col-span-1 cursor-pointer size-[72px] rounded-md border border-neutral-20 dark:border-neutral-500 f-center">
          <div :class="{'size-8':$store.app.currentColor=='0 184 217'}"
            class="size-5 duration-300 rounded-full bg-info-300"></div>
        </div>
        <div :class="{'border-primary-200 dark:border-primary-200':$store.app.currentColor=='34 197 94'}"
          @click="$store.app.changeColor('34 197 94')"
          class="col-span-1 cursor-pointer size-[72px] rounded-md border border-neutral-20 dark:border-neutral-500 f-center">
          <div :class="{'size-8':$store.app.currentColor=='34 197 94'}"
            class="size-5 duration-300 rounded-full bg-success-300"></div>
        </div>
        <div :class="{'border-primary-200 dark:border-primary-200':$store.app.currentColor=='189 123 0'}"
          @click="$store.app.changeColor('189 123 0')"
          class="col-span-1 cursor-pointer size-[72px] rounded-md border border-neutral-20 dark:border-neutral-500 f-center">
          <div :class="{'size-8':$store.app.currentColor=='189 123 0'}"
            class="size-5 duration-300 rounded-full bg-[#BD7B00]"></div>
        </div>
        <div :class="{'border-primary-200 dark:border-primary-200':$store.app.currentColor=='255 86 48'}"
          @click="$store.app.changeColor('255 86 48')"
          class="col-span-1 cursor-pointer size-[72px] rounded-md border border-neutral-20 dark:border-neutral-500 f-center">
          <div :class="{'size-8':$store.app.currentColor=='255 86 48'}"
            class="size-5 duration-300 rounded-full bg-error-300"></div>
        </div>
      </div>
    </div>

    <button @click="toggleCustomizer"
      class="fixed bottom-5 ltr:right-5 rtl:left-5 z-[24] bg-primary-300 rounded-xl flex px-4 py-2 items-center gap-2 justify-center text-neutral-0 shadow-xl">
      <i class="las la-cog animate-spin-slow"></i>
      <span class="text-sm"> Customize </span>
    </button>

    <div x-show="customizerIsOpen" @click="closeCustomizer"
      class="fixed z-[21] bg-neutral-900 bg-opacity-10 inset-0 duration-300"></div>
  </div>


  <!-- loader -->
  <!-- screen loader -->
  <div x-cloak class="screen_loader fixed inset-0 z-[60] grid place-content-center bg-neutral-400">
    <img src="<?php echo base_url(); ?>/assets/images/logo.png" alt="Loading" class="h-20 scale-fade-animation">
  </div>

  <!--<div x-cloak
    class="screen_loader animate__animated duration-700 fixed inset-0 z-[60] grid place-content-center bg-neutral-400">
    <svg viewBox="25 25 50 50">
      <circle r="20" cy="50" cx="50"></circle>
    </svg>
  </div>-->


  <!-- Navigation -->
  <section class="text-neutral-700 dark:text-neutral-20 bg-neutral-0 dark:bg-neutral-904">
    <!-- Topbar -->
    <nav
      :class="[$store.app.sidebar && $store.app.menu == 'vertical' ? 'w-full xl:ltr:ml-[280px] xl:w-[calc(100%-280px)] xl:rtl:mr-[280px]':'w-full', $store.app.sidebar && $store.app.menu == 'hovered' ? 'w-full xl:ltr:ml-[80px] xl:w-[calc(100%-80px)] xl:rtl:mr-[80px]':'w-full', $store.app.menu == 'horizontal' ? 'bg-neutral-20 dark:bg-neutral-903':'bg-neutral-0 dark:bg-neutral-904']"
      class="w-full fixed top-0 p-3 shadow-custom-4 duration-300 z-10">
      <div :class="$store.app.menu == 'horizontal' ? 'max-w-[1704px] w-full right-0 left-0 mx-auto' :''"
        class="flex justify-between items-center">
        <div class="flex gap-4 xxl:gap-6 items-center">
          <a x-show="$store.app.menu == 'horizontal'" href="index.html"
            class="text-primary-300 flex gap-3 items-center max-xl:!hidden">
            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_9642_133645)">
                <path
                  d="M20.5716 17.5166L19.674 13.4388L16.5908 16.2554L17.0598 16.403L12.2837 31.7543C1.43017 27.3907 0.00733577 12.5359 9.82304 6.173C15.4788 2.50631 22.7587 3.30374 27.5051 7.6686L28.5416 4.33954C22.7583 -0.132655 14.5448 -0.722943 8.07255 3.47288C-5.2819 12.1298 -1.23273 32.7566 14.4218 35.7129C15.4924 32.2695 18.1055 23.8728 20.1268 17.376L20.5716 17.5166Z"
                  fill="currentColor" />
                <path
                  d="M32.7199 8.96344L31.3295 13.4321C34.4068 21.9951 28.8794 31.3718 19.7571 32.6634L21.288 27.7448C22.6152 28.028 21.5668 27.805 25.4758 28.6385C28.4719 19.0106 30.6186 12.1073 33.164 3.92455L33.6012 4.06323L32.7035 -0.015625L29.6204 2.80102L30.0966 2.95233C28.4298 8.3099 28.3457 8.58051 23.2755 24.8794C21.9979 24.6065 23.0063 24.8217 19.0869 23.9857C15.7039 34.8601 16.9887 30.7289 15.3906 35.8672C30.3023 37.8435 40.5552 21.5237 32.7199 8.96344Z"
                  fill="currentColor" />
                <path
                  d="M22.5662 23.628L26.3888 11.3387L26.8504 11.4855L25.9527 7.40625L22.8696 10.2229L23.3215 10.3663L19.4062 22.9539L22.5662 23.628Z"
                  fill="currentColor" />
                <path
                  d="M14.2726 35.4612C7.21781 34.0536 1.98186 28.7935 0.584283 21.6896C-0.82592 14.5228 2.08941 7.61258 8.19247 3.65624C11.0227 1.82146 14.2985 0.851562 17.6648 0.851562C21.4899 0.851562 25.2559 2.11799 28.2888 4.42044L27.3993 7.27872C24.7149 4.92333 21.2754 3.62999 17.6751 3.62999C14.8432 3.62999 12.087 4.4458 9.70558 5.98993C5.02126 9.02622 2.54734 14.1682 3.08711 19.7451C3.6259 25.3135 7.03382 29.8789 12.2032 31.9569L12.4232 32.0451L17.3339 16.2607L17.0189 16.1613L19.5428 13.8558L20.2779 17.1948L19.9846 17.1019C19.9844 17.1016 14.9144 33.3963 14.2726 35.4612Z"
                  fill="currentColor" />
                <path
                  d="M19.6875 22.7955L23.596 10.2291L23.2978 10.1345L25.8219 7.82812L26.5572 11.1682L26.2469 11.0695L22.4185 23.3782L19.6875 22.7955Z"
                  fill="currentColor" />
                <path
                  d="M17.8402 35.81C17.1252 35.81 16.3969 35.7666 15.6719 35.6802L19.2314 24.2384L23.4197 25.1321L30.3649 2.80778L30.042 2.70465L32.5665 0.398438L33.3018 3.73835L33.0158 3.64752L25.3219 28.3813L21.134 27.4869L19.4414 32.9255L19.783 32.877C24.1618 32.2572 27.9844 29.7263 30.2713 25.9333C32.5598 22.1379 33.0264 17.5832 31.5547 13.425L32.7798 9.48927C35.9381 14.8622 36.016 21.2963 32.964 26.7963C29.8321 32.4404 24.1793 35.8101 17.8426 35.8101C17.8418 35.81 17.8411 35.81 17.8402 35.81Z"
                  fill="currentColor" />
                <path
                  d="M18.6684 21.3143C19.4295 18.8676 19.9803 17.0977 19.9803 17.0977L20.2736 17.1906L19.5384 13.8516L17.0145 16.1571L17.3295 16.2565L15.8203 21.1074C16.7669 21.2005 17.716 21.2691 18.6684 21.3143Z"
                  fill="currentColor" />
                <path
                  d="M3.01171 18.1501C3.0415 13.199 5.46923 8.73446 9.70261 5.98993C12.084 4.4458 14.8402 3.62999 17.6721 3.62999C21.2725 3.62999 24.712 4.92333 27.3963 7.27873L28.2858 4.42044C25.253 2.11799 21.4869 0.851562 17.6618 0.851562C14.2955 0.851562 11.0198 1.82135 8.1895 3.65624C3.42421 6.74548 0.602474 11.6351 0.265625 17.0418C1.17105 17.4347 2.08656 17.8047 3.01171 18.1501Z"
                  fill="currentColor" />
                <path
                  d="M20.125 21.3709C21.0928 21.3941 22.0634 21.3938 23.0366 21.3732L26.2413 11.0695L26.5516 11.1682L25.8163 7.82812L23.2922 10.1343L23.5903 10.2289L20.125 21.3709Z"
                  fill="currentColor" />
                <path
                  d="M31.5547 13.4279C32.3777 15.7536 32.5933 18.203 32.2243 20.5745C33.1934 20.413 34.1571 20.2237 35.113 20.001C35.4765 16.4044 34.6965 12.7529 32.7798 9.49219L31.5547 13.4279Z"
                  fill="currentColor" />
                <path
                  d="M24.6094 21.3211C25.5991 21.2808 26.5894 21.2223 27.5777 21.1413L33.0196 3.64752L33.3056 3.73835L32.5704 0.398438L30.0458 2.70465L30.3687 2.80778L24.6094 21.3211Z"
                  fill="currentColor" />
              </g>
              <defs>
                <clippath id="clip0_9642_133645">
                  <rect width="35.4462" height="36" fill="white" />
                </clippath>
              </defs>
            </svg>
            <span class="h4 shrink-0 max-[380px]:hidden"><span
                class="text-neutral-700 dark:text-neutral-0 h4">Softify</span></span>
          </a>

          <button :class="$store.app.menu=='horizontal'?'xl:hidden':''" @click="$store.app.toggleSidebar()"><i
              class="las la-bars text-2xl"></i></button>

          <div x-data="searchComponent" class="relative">
            <form @submit.prevent="searchPaketPekerjaan"
              class="max-w-[357px] rounded-lg border focus-within:border-primary-300 border-neutral-30 dark:border-neutral-500 p-1 flex items-center">
              <input type="text" x-model="query" @input="searchPaketPekerjaan"
                class="px-4 w-full bg-transparent text-sm focus:outline-none" placeholder="Search Paket Pekerjaan..." />
              <span class="size-8 shrink-0 rounded-full f-center">
                <i class="las la-search text-xl"></i>
              </span>
            </form>

            <!-- Dropdown for search results -->
            <div x-show="query.length > 0 && results.length > 0"
              class="absolute bg-white border mt-1 w-full max-h-60 overflow-y-auto z-50 rounded-md shadow-lg">
              <template x-for="(result, index) in results" :key="index">
                <div class="p-2 hover:bg-gray-200 cursor-pointer" @click="submitDetailFisik(result.id)">
                  <span x-text="result.paket_pekerjaan"></span>
                </div>
              </template>
            </div>

            <!-- Loading state -->
            <div x-show="isLoading" class="absolute inset-0 flex justify-center items-center bg-opacity-50 bg-white">
              <span>Loading...</span>
            </div>

            <!-- No results found -->
            <div x-show="query.length > 0 && results.length === 0 && !isLoading"
              class="absolute bg-white border mt-1 w-full p-2">
              <span>No results found</span>
            </div>

            <!-- Hidden Form for Submitting the Selected Paket ID -->
            <form id="detailFisikFormlol" action="<?php echo site_url('Page/detail_fisik'); ?>" method="POST">
              <input type="hidden" id="id_paketlol" name="id" value="">
            </form>
          </div>


          <!-- JavaScript Section -->
          <script>
            document.addEventListener('alpine:init', () => {
              Alpine.data('searchComponent', () => ({
                query: '',
                results: [],
                isLoading: false,
                selectedId: '', // Variable to store the selected result ID

                async searchPaketPekerjaan() {
                  this.isLoading = true;
                  try {
                    const response = await fetch('<?php echo site_url('Page/search_paket_pekerjaan'); ?>', {
                      method: 'POST',
                      headers: {
                        'Content-Type': 'application/json'
                      },
                      body: JSON.stringify({
                        query: this.query
                      })
                    });

                    if (!response.ok) {
                      throw new Error('Network response was not ok');
                    }

                    const data = await response.json();
                    console.log("Response Data: ", data);

                    if (Array.isArray(data) && data.length > 0) {
                      this.results = data; // Populate results with fetched data
                    } else {
                      console.error('Unexpected data format or empty results:', data);
                      this.results = [];
                    }
                  } catch (error) {
                    console.error('Error fetching data:', error);
                    this.results = [];
                  } finally {
                    this.isLoading = false;
                  }
                },

                submitDetailFisik(id) {
                  if (!id) {
                    console.error("ID Paket is empty!");
                    return; // Exit function if id is empty
                  }

                  console.log("Selected Paket ID: ", id); // Logging the selected paket ID

                  // Set the id_paket in the hidden form field
                  document.getElementById('id_paketlol').value = id;

                  // Submit the form
                  document.getElementById('detailFisikFormlol').submit();
                }
              }));
            });
          </script>













        </div>
        <div class="flex gap-3 xxl:gap-4 items-center">
          <!-- full screen toggle btn -->
          <button title="Toggle Fullscreen"
            :class="$store.app.menu=='horizontal'?'bg-neutral-0 dark:bg-neutral-903':'bg-neutral-20 dark:bg-neutral-903'"
            id="fullscreenButton"
            class="flex size-9 items-center justify-center rounded-full border border-neutral-30 text-xl dark:border-neutral-500">
            <i class="las la-expand text-xl full-screen-icon"></i>
          </button>
          <!-- Dark ligth switch -->
          <button title="Toggle Theme"
            :class="$store.app.menu=='horizontal'?'bg-neutral-0 dark:bg-neutral-903':'bg-neutral-20 dark:bg-neutral-903'"
            x-cloak x-show="$store.app.theme === 'light'" @click="$store.app.toggleTheme('dark')"
            class="flex size-9 items-center justify-center rounded-full border border-neutral-30 text-xl dark:border-neutral-500">
            <i class="las la-moon"></i>
          </button>
          <button title="Toggle Theme" x-cloak x-show="$store.app.theme === 'dark'"
            @click="$store.app.toggleTheme('light')"
            class="flex size-9 items-center justify-center rounded-full border border-neutral-30 bg-neutral-20 text-xl dark:border-neutral-500 dark:bg-neutral-700">
            <i class="las la-sun"></i>
          </button>


          <!-- Notification switch -->
          <div class="relative" x-data="{open:false}">
            <span class="size-4 text-xs absolute -top-1 -right-1 f-center text-neutral-0 bg-primary-300 rounded-full"> 2
            </span>
            <button title="Notifications" @click="open = !open"
              :class="$store.app.menu=='horizontal'?'bg-neutral-0 dark:bg-neutral-903':'bg-neutral-20 dark:bg-neutral-903'"
              class="flex size-9 items-center justify-center rounded-full border border-neutral-30 text-xl dark:border-neutral-500">
              <i class="las la-bell"></i>
            </button>
            <div @click.away="open = false" x-show="open"
              class="absolute top-full z-10 origin-[60%_0] rounded-md bg-neutral-0 shadow-[0px_6px_30px_0px_rgba(0,0,0,0.08)] duration-300 dark:bg-neutral-904 ltr:-right-[110px] sm:ltr:right-0 sm:ltr:origin-top-right rtl:-left-[120px] sm:rtl:left-0 sm:rtl:origin-top-left">
              <div class="flex items-center justify-between border-b p-3 dark:border-n500 lg:px-4">
                <h5 class="h5">Notifications</h5>
                <a href="#" class="text-xs text-primary-300"> View All </a>
              </div>
              <ul class="flex w-[300px] flex-col p-4">
                <div class="flex cursor-pointer gap-2 rounded-md p-2 duration-300 hover:bg-primary-300/10">
                  <img src="<?php echo base_url(); ?>/assets/Softify/Softify/dist/assets/images/users/user-s-3.png"
                    width="44" height="40" class="shrink-0 rounded-full" alt="img" />
                  <div class="text-sm">
                    <div class="flex gap-1">
                      <span class="font-medium">Otwell</span>
                      <span>Sent a message</span>
                    </div>
                    <span class="text-xs text-n100 dark:text-n50">1 hour ago</span>
                  </div>
                </div>
                <div class="flex cursor-pointer gap-2 rounded-md p-2 duration-300 hover:bg-primary-300/10">
                  <img src="<?php echo base_url(); ?>/assets/Softify/Softify/dist/assets/images/users/user-s-4.png"
                    width="44" height="40" class="shrink-0 rounded-full" alt="img" />
                  <div class="text-sm">
                    <div class="flex gap-1">
                      <span class="font-medium">David</span>
                      <span>Left a Comment</span>
                    </div>
                    <span class="text-xs text-n100 dark:text-n50">1 hour ago</span>
                  </div>
                </div>
                <div class="flex cursor-pointer gap-2 rounded-md p-2 duration-300 hover:bg-primary-300/10">
                  <img src="<?php echo base_url(); ?>/assets/Softify/Softify/dist/assets/images/users/user-s-2.png"
                    width="44" height="40" class="shrink-0 rounded-full" alt="img" />
                  <div class="text-sm">
                    <div class="flex gap-1">
                      <span class="font-medium">Benjamin</span>
                      <span>Sent a message</span>
                    </div>
                    <span class="text-xs text-n100 dark:text-n50">2 hour ago</span>
                  </div>
                </div>
                <div class="flex cursor-pointer gap-2 rounded-md p-2 duration-300 hover:bg-primary-300/10">
                  <img src="<?php echo base_url(); ?>/assets/Softify/Softify/dist/assets/images/users/user-s-1.png"
                    width="44" height="40" class="shrink-0 rounded-full" alt="img" />
                  <div class="text-sm">
                    <div class="flex gap-1">
                      <span class="font-medium">Samuel</span>
                      <span>Uploaded a file</span>
                    </div>
                    <span class="text-xs text-n100 dark:text-n50">Yesterday</span>
                  </div>
                </div>
                <div class="flex cursor-pointer gap-2 rounded-md p-2 duration-300 hover:bg-primary-300/10">
                  <img src="<?php echo base_url(); ?>/assets/Softify/Softify/dist/assets/images/users/user-s-2.png"
                    width="44" height="40" class="shrink-0 rounded-full" alt="img" />
                  <div class="text-sm">
                    <div class="flex gap-1">
                      <span class="font-medium">David</span>
                      <span>Left a Comment</span>
                    </div>
                    <span class="text-xs text-n100 dark:text-n50">Yesterday</span>
                  </div>
                </div>
              </ul>
            </div>
          </div>

          <!-- user profile -->
          <div x-data="dropdown" class="relative shrink-0">
            <div title="User Profile" @click="toggle" class="size-9 cursor-pointer">
              <img src="<?php echo base_url(); ?>/assets/Softify/Softify/dist/assets/images/users/user-s-4.png"
                class="rounded-full" alt="profile img" />
            </div>
            <div @click.away="close" x-show="isOpen"
              class="absolute top-full z-20 rounded-md bg-neutral-0 shadow-[0px_6px_30px_0px_rgba(0,0,0,0.08)] duration-300 dark:bg-neutral-904 ltr:right-0 ltr:origin-top-right rtl:left-0 rtl:origin-top-left">
              <div
                class="flex flex-col items-center border-b border-neutral-30 p-3 text-center dark:border-neutral-500 lg:p-4">
                <img src="<?php echo base_url(); ?>/assets/Softify/Softify/dist/assets/images/users/user-s-4.png"
                  width="60" height="60" class="rounded-full" alt="profile img" />
                <h6 class="h6 mt-2"><?php echo $this->session->userdata('nama_lengkap') ?></h6>
                <span class="text-sm">@<?php echo $this->session->userdata('username') ?></span>
              </div>
              <ul class="flex w-[250px] flex-col p-4">
                <li>
                  <a href="user-profile.html"
                    class="flex items-center gap-2 rounded-md px-2 py-1.5 duration-300 hover:bg-primary-300/10 hover:text-primary-300">
                    <span>
                      <i class="las la-user mt-0.5 text-xl"></i>
                    </span>
                    Profile
                  </a>
                </li>
                <li>
                  <a href="chat.html"
                    class="flex items-center gap-2 rounded-md px-2 py-1.5 duration-300 hover:bg-primary-300/10 hover:text-primary-300">
                    <span>
                      <i class="las la-envelope mt-0.5 text-xl"></i>
                    </span>
                    Messages
                  </a>
                </li>
                <li>
                  <a href="#"
                    class="flex items-center gap-2 rounded-md px-2 py-1.5 duration-300 hover:bg-primary-300/10 hover:text-primary-300">
                    <span>
                      <i class="las la-life-ring mt-0.5 text-xl"></i>
                    </span>
                    Help
                  </a>
                </li>
                <li>
                  <a href="user-account.html"
                    class="flex items-center gap-2 rounded-md px-2 py-1.5 duration-300 hover:bg-primary-300/10 hover:text-primary-300">
                    <span>
                      <i class="las la-cog mt-0.5 text-xl"></i>
                    </span>
                    Settings
                  </a>
                </li>
                <li>
                  <a href="<?php echo site_url('page/logout'); ?>"
                    class="flex items-center gap-2 rounded-md px-2 py-1.5 duration-300 hover:bg-primary-300/10 hover:text-primary-300">
                    <span>
                      <i class="las la-sign-out-alt mt-0.5 text-xl"></i>
                    </span>
                    Logout
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- Vertical Sidebar -->

    <aside
      :class="[$store.app.sidebar?'translate-x-0':'ltr:-translate-x-full rtl:translate-x-full', $store.app.menu == 'vertical'?'block':'hidden', $store.app.menu == 'horizontal'?'max-xl:block':'']"
      class="fixed top-0 z-[12] h-full w-[280px] bg-neutral-0 duration-300 dark:bg-neutral-904 ltr:left-0 rtl:right-0">
      <div class="px-3 xxl:px-4 pt-3 sm:pt-4">
        <a href="index.html" class="text-primary-300 flex gap-3 items-center bb-dashed-n30 xl:pb-3.5 !mb-0">
          <img src="<?php echo base_url(); ?>/assets/images/logo.png" class="w-10" alt="">
          <span class="h4 shrink-0 text-neutral-700 dark:text-neutral-0">DPUPR BERAU</span>
        </a>
      </div>
      <div x-data="{
  opened:null,   
  openMenu(name){
    this.opened==name ? this.opened = null : this.opened=name
  }, 
  setActiveMenu(){
    const submenus = document.querySelectorAll('.submenu-link-v')
    const sidebar= document.querySelector('.vertical-sidebar')
    submenus.forEach((submenu) => {
      const currentUrl = window.location.href
      const href = submenu.getAttribute('href')
      const cleanHref = href.replace(/^\.\.\//, '')

      const url = new URL(currentUrl);
      const filename = url.pathname.split('/').pop();

      if (filename==cleanHref) {
        submenu.classList.add('text-primary-300')
        const sidebarRect = sidebar.getBoundingClientRect()
        const elementRect = submenu.getBoundingClientRect()
        const offsetTop = elementRect.top - sidebarRect.top;

        // Calculate the scroll position to center the element within the sidebar
        const scrollPosition = offsetTop - (sidebarRect.height / 2) + (elementRect.height / 2);

        sidebar.scrollTo({
          top: scrollPosition*35/100,
          behavior: 'smooth'
        });
        const submenuName = submenu.parentElement.parentElement.getAttribute('data-submenu')
        this.opened = submenuName
      }
    })
  }
}" x-init="setActiveMenu"
        class="overflow-y-auto h-full px-3 xxl:px-4 pb-6 custom-scrollbar-hovered pt-4 vertical-sidebar">

        <p class="text-xs font-semibold mb-3">Dashboards</p>
        <ul class="flex flex-col gap-2 bb-dashed-n30 xl:mb-5 xl:pb-5 text-sm font-medium">
          <li>
            <a href="home" class="menu-link vertical-menu">
              <i class="las la-cube text-xl text-primary-300"></i>
              <span>Home</span>
            </a>
          </li>

          <li class="relative">
            <button :class="opened=='list' ? 'bg-primary-50 text-primary-300' : ''" @click="openMenu('list')"
              class="submenu-btn-v">
              <span class="flex items-center gap-2">
                <i class="las la-user-alt text-xl text-primary-300"></i>
                <span>E Kontrak</span>
              </span>
              <i :class="opened=='list' ? 'las la-minus rotate-180 text-primary-300' : 'las la-plus'"
                class="text-lg duration-300"></i>
            </button>
            <div x-show="opened=='list'" x-collapse>
              <ul class="submenu-v" data-submenu="list">
                <li>
                  <a href="list" class="dropdown-link submenu-link-v">List</a>
                </li>
                <li>
                  <a href="fisik" class="dropdown-link submenu-link-v">Fisik</a>
                </li>
                <li>
                  <a href="konsultan_pengawasan" class="dropdown-link submenu-link-v">Konsultan Pengawasan</a>
                </li>
                <li>
                  <a href="konsultan_perencanaan" class="dropdown-link submenu-link-v">Konsultan Perencanaan</a>
                </li>
              </ul>
            </div>
          </li>
          <!-- <li>
        <a href="nft.html" class="menu-link vertical-menu">
          <i class="las la-cube text-xl text-primary-300"></i>
          <span>NFT</span>
        </a>
      </li>
      <li>
        <a href="music.html" class="menu-link vertical-menu">
          <i class="las la-music text-xl text-primary-300"></i>
          <span>Music</span>
        </a>
      </li>
      <li>
        <a href="analytics.html" class="menu-link vertical-menu">
          <i class="las la-chart-bar text-xl text-primary-300"></i>
          <span>Analytics</span>
        </a>
      </li>
      <li>
        <a href="e-commerce.html" class="menu-link vertical-menu">
          <i class="las la-shopping-bag text-xl text-primary-300"></i>
          <span>E-commerce</span>
        </a>
      </li>
      <li>
        <a href="banking.html" class="menu-link vertical-menu">
          <i class="las la-piggy-bank text-xl text-primary-300"></i>
          <span>Finance</span>
        </a>
      </li>
      <li>
        <a href="app.html" class="menu-link vertical-menu">
          <i class="lab la-app-store text-xl text-primary-300"></i>
          <span>App</span>
        </a>
      </li>

      <li>
        <a href="booking.html" class="menu-link vertical-menu">
          <i class="las la-plane-departure text-xl text-primary-300"></i>
          <span>Booking</span>
        </a>
      </li>
      <li>
        <a href="file.html" class="menu-link vertical-menu">
          <i class="las la-file text-xl text-primary-300"></i>
          <span>File</span>
        </a>
      </li> -->
          <!-- </ul>
    <p class="text-xs font-semibold mb-3 mt-5">Operations</p>
    <ul class="flex flex-col gap-2 bb-dashed-n30 xl:mb-5 xl:pb-5 m-text font-medium"> -->

          <!--  <li class="relative">
        <button :class="opened=='store' ? 'bg-primary-50 text-primary-300' : ''" @click="openMenu('store')" class="submenu-btn-v">
          <span class="flex items-center gap-2">
            <i class="las la-store text-xl text-primary-300"></i>
            <span>Store</span>
          </span>
          <i :class="opened=='store' ? 'las la-minus rotate-180 text-primary-300' : 'las la-plus'" class="text-lg duration-300"></i>
        </button>
        <div x-show="opened=='store'" x-collapse>
          <ul class="submenu-v" data-submenu="store">
            <li>
              <a href="shop.html" class="dropdown-link submenu-link-v">Grid</a>
            </li>
            <li>
              <a href="product-list.html" class="dropdown-link submenu-link-v">List</a>
            </li>
            <li>
              <a href="product-details.html" class="dropdown-link submenu-link-v">Details</a>
            </li>
            <li>
              <a href="create-product.html" class="dropdown-link submenu-link-v">Create</a>
            </li>
            <li>
              <a href="edit-product.html" class="dropdown-link submenu-link-v">Edit</a>
            </li>
            <li>
              <a href="manage-review.html" class="dropdown-link submenu-link-v">Manage Review</a>
            </li>
            <li>
              <a href="referrals.html" class="dropdown-link submenu-link-v">Referrals</a>
            </li>
            <li>
              <a href="checkout.html" class="dropdown-link submenu-link-v">Checkout</a>
            </li>
            <li>
              <a href="checkout-success.html" class="dropdown-link submenu-link-v">Checkout Success</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="relative">
        <button :class="opened=='order' ? 'bg-primary-50 text-primary-300' : ''" @click="openMenu('order')" class="submenu-btn-v">
          <span class="flex items-center gap-2">
            <i class="las la-shopping-cart text-xl text-primary-300"></i>
            <span>Order</span>
          </span>
          <i :class="opened=='order' ? 'las la-minus rotate-180 text-primary-300' : 'las la-plus'" class="text-lg duration-300"></i>
        </button>
        <div x-show="opened=='order'" x-collapse>
          <ul class="submenu-v" data-submenu="order">
            <li>
              <a href="order-list.html" class="dropdown-link submenu-link-v">List</a>
            </li>
            <li>
              <a href="order-details.html" class="dropdown-link submenu-link-v">Details</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="relative">
        <button :class="opened=='invoice' ? 'bg-primary-50 text-primary-300' : ''" @click="openMenu('invoice')" class="submenu-btn-v">
          <span class="flex items-center gap-2">
            <i class="las la-file-invoice text-xl text-primary-300"></i>
            <span>Invoice</span>
          </span>
          <i :class="opened=='invoice' ? 'las la-minus rotate-180 text-primary-300' : 'las la-plus'" class="text-lg duration-300"></i>
        </button>
        <div x-show="opened=='invoice'" x-collapse>
          <ul class="submenu-v" data-submenu="invoice">
            <li>
              <a href="invoice-list.html" class="dropdown-link submenu-link-v">List</a>
            </li>
            <li>
              <a href="invoice-details.html" class="dropdown-link submenu-link-v">Details</a>
            </li>
            <li>
              <a href="create-invoice.html" class="dropdown-link submenu-link-v">Create</a>
            </li>
            <li>
              <a href="edit-invoice.html" class="dropdown-link submenu-link-v">Edit</a>
            </li>
          </ul>
        </div>
      </li>
      <li>
        <a href="file-manager.html" class="menu-link vertical-menu">
          <i class="las la-file text-xl text-primary-300"></i>
          <span>File Manager</span>
        </a>
      </li>
      <li>
        <a href="mail.html" class="menu-link vertical-menu">
          <i class="las la-envelope-open-text text-xl text-primary-300"></i>
          <span>Mail</span>
        </a>
      </li>
      <li>
        <a href="chat.html" class="menu-link vertical-menu">
          <i class="lab la-facebook-messenger text-xl text-primary-300"></i>
          <span>Chat</span>
        </a>
      </li>
      <li>
        <a href="calendar.html" class="menu-link vertical-menu">
          <i class="las la-calendar-alt text-xl text-primary-300"></i>
          <span>Calendar</span>
        </a>
      </li>
      <li>
        <a href="kanban.html" class="menu-link vertical-menu">
          <i class="las la-table text-xl text-primary-300"></i>
          <span>Kanban</span>
        </a>
      </li> -->
          <!--   </ul>
    <p class="text-xs font-semibold mb-3 mt-5">Pages</p>
    <ul class="flex flex-col gap-2 bb-dashed-n30 xl:mb-5 xl:pb-5 m-text font-medium"> -->
          <!-- <li class="relative">
        <button :class="opened=='blog' ? 'bg-primary-50 text-primary-300' : ''" @click="openMenu('blog')" class="submenu-btn-v">
          <span class="flex items-center gap-2">
            <i class="las la-newspaper text-xl text-primary-300"></i>
            <span>Blog</span>
          </span>
          <i :class="opened=='blog' ? 'las la-minus rotate-180 text-primary-300' : 'las la-plus'" class="text-lg duration-300"></i>
        </button>
        <div x-show="opened=='blog'" x-collapse>
          <ul class="submenu-v" data-submenu="blog">
            <li>
              <a href="blogs.html" class="dropdown-link submenu-link-v">Grid</a>
            </li>
            <li>
              <a href="blog-list.html" class="dropdown-link submenu-link-v">List</a>
            </li>
            <li>
              <a href="blog-details.html" class="dropdown-link submenu-link-v">Details</a>
            </li>
            <li>
              <a href="create-blog.html" class="dropdown-link submenu-link-v">Create</a>
            </li>
            <li>
              <a href="edit-blog.html" class="dropdown-link submenu-link-v">Edit</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="relative">
        <button :class="opened=='job' ? 'bg-primary-50 text-primary-300' : ''" @click="openMenu('job')" class="submenu-btn-v">
          <span class="flex items-center gap-2">
            <i class="las la-briefcase text-xl text-primary-300"></i>
            <span>Job</span>
          </span>
          <i :class="opened=='job' ? 'las la-minus rotate-180 text-primary-300' : 'las la-plus'" class="text-lg duration-300"></i>
        </button>
        <div x-show="opened=='job'" x-collapse>
          <ul class="submenu-v" data-submenu="job">
            <li>
              <a href="job-list.html" class="dropdown-link submenu-link-v">List</a>
            </li>
            <li>
              <a href="job-details.html" class="dropdown-link submenu-link-v">Details</a>
            </li>
            <li>
              <a href="create-job.html" class="dropdown-link submenu-link-v">Create</a>
            </li>
            <li>
              <a href="edit-job.html" class="dropdown-link submenu-link-v">Edit</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="relative">
        <button :class="opened=='tour' ? 'bg-primary-50 text-primary-300' : ''" @click="openMenu('tour')" class="submenu-btn-v">
          <span class="flex items-center gap-2">
            <i class="las la-map-marked-alt text-xl text-primary-300"></i>
            <span>Tour</span>
          </span>
          <i :class="opened=='tour' ? 'las la-minus rotate-180 text-primary-300' : 'las la-plus'" class="text-lg duration-300"></i>
        </button>
        <div x-show="opened=='tour'" x-collapse>
          <ul class="submenu-v" data-submenu="tour">
            <li>
              <a href="tour-list.html" class="dropdown-link submenu-link-v">List</a>
            </li>
            <li>
              <a href="tour-details.html" class="dropdown-link submenu-link-v">Details</a>
            </li>
            <li>
              <a href="create-tour.html" class="dropdown-link submenu-link-v">Create</a>
            </li>
            <li>
              <a href="edit-tour.html" class="dropdown-link submenu-link-v">Edit</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="relative">
        <button :class="opened=='pages' ? 'bg-primary-50 text-primary-300' : ''" @click="openMenu('pages')" class="submenu-btn-v">
          <span class="flex items-center gap-2">
            <i class="las la-book-open text-xl text-primary-300"></i>
            <span>Pages</span>
          </span>
          <i :class="opened=='pages' ? 'las la-minus rotate-180 text-primary-300' : 'las la-plus'" class="text-lg duration-300"></i>
        </button>
        <div x-show="opened=='pages'" x-collapse>
          <ul class="submenu-v" data-submenu="pages">
            <li>
              <a href="about-us.html" class="dropdown-link submenu-link-v">About Us</a>
            </li>
            <li>
              <a href="contact-us.html" class="dropdown-link submenu-link-v">Contact Us</a>
            </li>
            <li>
              <a href="faqs.html" class="dropdown-link submenu-link-v">FAQs</a>
            </li>
            <li>
              <a href="pricing-plan.html" class="dropdown-link submenu-link-v">Pricing Plan</a>
            </li>
            <li>
              <a href="payment.html" class="dropdown-link submenu-link-v">Payment</a>
            </li>
            <li>
              <a href="maintenance.html" class="dropdown-link submenu-link-v">Maintenance</a>
            </li>
            <li>
              <a href="coming-soon.html" class="dropdown-link submenu-link-v">Coming Soon</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="relative">
        <button :class="opened=='auth' ? 'bg-primary-50 text-primary-300' : ''" @click="openMenu('auth')" class="submenu-btn-v">
          <span class="flex items-center gap-2">
            <i class="las la-user-lock text-xl text-primary-300"></i>
            <span>Auth</span>
          </span>
          <i :class="opened=='auth' ? 'las la-minus rotate-180 text-primary-300' : 'las la-plus'" class="text-lg duration-300"></i>
        </button>
        <div x-show="opened=='auth'" x-collapse>
          <ul class="submenu-v" data-submenu="article">
            <li>
              <a href="login.html" class="dropdown-link submenu-link-v">Login One</a>
            </li>
            <li>
              <a href="login-modern.html" class="dropdown-link submenu-link-v">Login Two</a>
            </li>
            <li>
              <a href="sign-up.html" class="dropdown-link submenu-link-v">Signup One</a>
            </li>
            <li>
              <a href="sign-up-modern.html" class="dropdown-link submenu-link-v">Signup Two</a>
            </li>
            <li>
              <a href="forgot-password.html" class="dropdown-link submenu-link-v">Forgot Password One</a>
            </li>
            <li>
              <a href="forgot-password-modern.html" class="dropdown-link submenu-link-v">Forgot Password Two</a>
            </li>
            <li>
              <a href="verify-email.html" class="dropdown-link submenu-link-v">Verify Email</a>
            </li>
            <li>
              <a href="verify-email-modern.html" class="dropdown-link submenu-link-v">Verify Email Two</a>
            </li>
            <li>
              <a href="new-password.html" class="dropdown-link submenu-link-v">New Password One</a>
            </li>
            <li>
              <a href="new-password-modern.html" class="dropdown-link submenu-link-v">New Password Two</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="relative">
        <button :class="opened=='error' ? 'bg-primary-50 text-primary-300' : ''" @click="openMenu('error')" class="submenu-btn-v">
          <span class="flex items-center gap-2">
            <i class="las la-exclamation-circle text-xl text-primary-300"></i>
            <span>Errors</span>
          </span>
          <i :class="opened=='error' ? 'las la-minus rotate-180 text-primary-300' : 'las la-plus'" class="text-lg duration-300"></i>
        </button>
        <div x-show="opened=='error'" x-collapse>
          <ul class="submenu-v" data-submenu="error">
            <li>
              <a href="403.html" class="dropdown-link submenu-link-v">Error 403</a>
            </li>
            <li>
              <a href="404.html" class="dropdown-link submenu-link-v">Error 404</a>
            </li>
            <li>
              <a href="500.html" class="dropdown-link submenu-link-v">Error 500</a>
            </li>
          </ul>
        </div>
      </li> -->
          <!--  </ul>
    <p class="text-xs font-semibold mb-3 mt-5">Elements</p>
    <ul class="flex flex-col gap-2 bb-dashed-n30 xl:mb-5 xl:pb-5 m-text font-medium"> -->
          <!-- <li class="relative">
        <button :class="opened=='component' ? 'bg-primary-50 text-primary-300' : ''" @click="openMenu('component')" class="submenu-btn-v">
          <span class="flex items-center gap-2">
            <i class="las la-puzzle-piece text-xl text-primary-300"></i>
            <span>Components</span>
          </span>
          <i :class="opened=='component' ? 'las la-minus rotate-180 text-primary-300' : 'las la-plus'" class="text-lg duration-300"></i>
        </button>
        <div x-show="opened=='component'" x-collapse>
          <ul class="submenu-v" data-submenu="component">
            <li>
              <a href="alert.html" class="dropdown-link submenu-link-v">Alert</a>
            </li>
            <li>
              <a href="accordion.html" class="dropdown-link submenu-link-v">Accordion</a>
            </li>
            <li>
              <a href="avatar.html" class="dropdown-link submenu-link-v">Avatar</a>
            </li>
            <li>
              <a href="badge.html" class="dropdown-link submenu-link-v">Badge</a>
            </li>
            <li>
              <a href="breadcrumbs.html" class="dropdown-link submenu-link-v">Breadcrumbs</a>
            </li>
            <li>
              <a href="buttons.html" class="dropdown-link submenu-link-v">Buttons</a>
            </li>
            <li>
              <a href="chip.html" class="dropdown-link submenu-link-v">Chip</a>
            </li>
            <li>
              <a href="copy-to-clipboard.html" class="dropdown-link submenu-link-v">Copy to Clipboard</a>
            </li>
            <li>
              <a href="image.html" class="dropdown-link submenu-link-v">Image</a>
            </li>
            <li>
              <a href="label.html" class="dropdown-link submenu-link-v">Label</a>
            </li>
            <li>
              <a href="list.html" class="dropdown-link submenu-link-v">List</a>
            </li>
            <li>
              <a href="dialog.html" class="dropdown-link submenu-link-v">Modal</a>
            </li>
            <li>
              <a href="menu.html" class="dropdown-link submenu-link-v">Menu</a>
            </li>
            <li>
              <a href="mega-menu.html" class="dropdown-link submenu-link-v">Mega Menu</a>
            </li>
            <li>
              <a href="navigation-bar.html" class="dropdown-link submenu-link-v">Navigation Bar</a>
            </li>
            <li>
              <a href="organization-chart.html" class="dropdown-link submenu-link-v">Organization Chart</a>
            </li>
            <li>
              <a href="pagination.html" class="dropdown-link submenu-link-v">Pagination</a>
            </li>
            <li>
              <a href="popover.html" class="dropdown-link submenu-link-v">Popover</a>
            </li>
            <li>
              <a href="progress.html" class="dropdown-link submenu-link-v">Progress</a>
            </li>
            <li>
              <a href="rating.html" class="dropdown-link submenu-link-v">Rating</a>
            </li>
            <li>
              <a href="stepper.html" class="dropdown-link submenu-link-v">Stepper</a>
            </li>
            <li>
              <a href="tabs.html" class="dropdown-link submenu-link-v">Tabs</a>
            </li>
            <li>
              <a href="timeline.html" class="dropdown-link submenu-link-v">Timeline</a>
            </li>
            <li>
              <a href="transfer-list.html" class="dropdown-link submenu-link-v">Transfer List</a>
            </li>

            <li>
              <a href="scroll.html" class="dropdown-link submenu-link-v">Scroll</a>
            </li>
            <li>
              <a href="scroll-progress.html" class="dropdown-link submenu-link-v">Scroll Progress</a>
            </li>
            <li>
              <a href="text-max-line.html" class="dropdown-link submenu-link-v">Text max line</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="relative">
        <button :class="opened=='form' ? 'bg-primary-50 text-primary-300' : ''" @click="openMenu('form')" class="submenu-btn-v">
          <span class="flex items-center gap-2">
            <i class="lab la-wpforms text-xl text-primary-300"></i>
            <span>Forms</span>
          </span>
          <i :class="opened=='form' ? 'las la-minus rotate-180 text-primary-300' : 'las la-plus'" class="text-lg duration-300"></i>
        </button>
        <div x-show="opened=='form'" x-collapse>
          <ul class="submenu-v" data-submenu="form">
            <li>
              <a href="autocomplete.html" class="dropdown-link submenu-link-v">Autocomplete</a>
            </li>
            <li>
              <a href="checkbox.html" class="dropdown-link submenu-link-v">Checkbox</a>
            </li>
            <li>
              <a href="pickers.html" class="dropdown-link submenu-link-v">Pickers</a>
            </li>
            <li>
              <a href="radio-button.html" class="dropdown-link submenu-link-v">Radio Button</a>
            </li>
            <li>
              <a href="switch.html" class="dropdown-link submenu-link-v">Switch</a>
            </li>
            <li>
              <a href="input.html" class="dropdown-link submenu-link-v">Input</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="relative">
        <button :class="opened=='plugin' ? 'bg-primary-50 text-primary-300' : ''" @click="openMenu('plugin')" class="submenu-btn-v">
          <span class="flex items-center gap-2">
            <i class="las la-plug text-xl text-primary-300"></i>
            <span>Plugins</span>
          </span>
          <i :class="opened=='plugin' ? 'las la-minus rotate-180 text-primary-300' : 'las la-plus'" class="text-lg duration-300"></i>
        </button>
        <div x-show="opened=='plugin'" x-collapse>
          <ul class="submenu-v" data-submenu="plugin">
            <li>
              <a href="carousel.html" class="dropdown-link submenu-link-v">Carousel</a>
            </li>
            <li>
              <a href="editor.html" class="dropdown-link submenu-link-v">Editor</a>
            </li>
            <li>
              <a href="form-validation.html" class="dropdown-link submenu-link-v">Form Validation</a>
            </li>
            <li>
              <a href="lightbox.html" class="dropdown-link submenu-link-v">Lightbox</a>
            </li>
            <li>
              <a href="slider.html" class="dropdown-link submenu-link-v">Slider</a>
            </li>
            <li>
              <a href="tooltip.html" class="dropdown-link submenu-link-v">Tooltip</a>
            </li>
            <li>
              <a href="snackbar.html" class="dropdown-link submenu-link-v">Toast</a>
            </li>
            <li>
              <a href="upload.html" class="dropdown-link submenu-link-v">Upload</a>
            </li>

            <li>
              <a href="walktour.html" class="dropdown-link submenu-link-v">Walktour</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="relative">
        <button :class="opened=='table' ? 'bg-primary-50 text-primary-300' : ''" @click="openMenu('table')" class="submenu-btn-v">
          <span class="flex items-center gap-2">
            <i class="las la-table text-xl text-primary-300"></i>
            <span>Tables</span>
          </span>
          <i :class="opened=='table' ? 'las la-minus rotate-180 text-primary-300' : 'las la-plus'" class="text-lg duration-300"></i>
        </button>
        <div x-show="opened=='table'" x-collapse>
          <ul class="submenu-v" data-submenu="table">
            <li>
              <a href="table.html" class="dropdown-link submenu-link-v">Basic Table</a>
            </li>
            <li>
              <a href="data-grid.html" class="dropdown-link submenu-link-v">Data Table</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="relative">
        <button :class="opened=='others' ? 'bg-primary-50 text-primary-300' : ''" @click="openMenu('others')" class="submenu-btn-v">
          <span class="flex items-center gap-2">
            <i class="las la-shapes text-xl text-primary-300"></i>
            <span>Others</span>
          </span>
          <i :class="opened=='others' ? 'las la-minus rotate-180 text-primary-300' : 'las la-plus'" class="text-lg duration-300"></i>
        </button>
        <div x-show="opened=='others'" x-collapse>
          <ul class="submenu-v" data-submenu="others">
            <li>
              <a href="colors.html" class="dropdown-link submenu-link-v">Colors</a>
            </li>
            <li>
              <a href="typography.html" class="dropdown-link submenu-link-v">Typography</a>
            </li>
            <li>
              <a href="shadows.html" class="dropdown-link submenu-link-v">Shadows</a>
            </li>
            <li>
              <a href="grid.html" class="dropdown-link submenu-link-v">Grid</a>
            </li>
          </ul>
        </div>
      </li>
      <li>
        <a href="icons.html" class="menu-link vertical-menu">
          <i class="las la-icons text-xl text-primary-300"></i>
          <span>Icons</span>
        </a>
      </li>
      <li>
        <a href="chart.html" class="menu-link vertical-menu">
          <i class="las la-chart-pie text-xl text-primary-300"></i>
          <span>Charts</span>
        </a>
      </li>
      <li>
        <a href="map.html" class="menu-link vertical-menu">
          <i class="las la-map text-xl text-primary-300"></i>
          <span>Maps</span>
        </a>
      </li> -->
          <!-- </ul>
    <p class="text-xs font-semibold mb-3 mt-5">Role &amp; Permissions</p>
    <ul class="flex flex-col gap-2 bb-dashed-n30 xl:mb-5 xl:pb-5 m-text font-medium"> -->
          <!-- <li>
        <a href="roles.html" class="menu-link vertical-menu">
          <i class="las la-cog text-xl text-primary-300"></i>
          <span>Roles</span>
        </a>
      </li>
      <li>
        <a href="permissions.html" class="menu-link vertical-menu">
          <i class="las la-user-check text-xl text-primary-300"></i>
          <span>Permissions</span>
        </a>
      </li> -->
        </ul>
        <!-- <div x-data="{show:true}" class="py-5">
      <div x-show="show" class="px-3 py-8 rounded-lg bg-neutral-20 dark:bg-neutral-903 relative flex flex-col items-center text-center">
        <button @click="show=false" class="f-center absolute top-3 right-3">
          <i class="las la-times text-xl"></i>
        </button>
        <div class="w-max relative mb-4">
          <img src="<?php echo base_url(); ?>/assets/Softify/Softify/dist/assets/images/users/user-s-2.png" class="rounded-full" width="60" alt="" />
          <span class="s-text font-semibold inline-flex px-2 py-1 text-neutral-0 bg-primary-300 absolute rounded-lg rounded-bl-none -top-4 -right-8">Free</span>
        </div>
        <h5 class="mb-2">Marvin McKinney</h5>
        <p class="s-text mb-5 xxl:mb-8">Upgrade your plan to get access to unlimited reports</p>
        <button class="w-full btn-primary">Upgrade Pro</button>
      </div>
    </div> -->
      </div>
    </aside>

    <!-- Hovered -->
    <aside
      :class="[$store.app.sidebar?'translate-x-0':'ltr:-translate-x-full rtl:translate-x-full', $store.app.menu=='hovered'?'block':'hidden']"
      class="fixed top-0 z-[12] h-full xl:w-20 w-[280px] hover:w-[280px] bg-neutral-0 shadow-lg duration-300 dark:bg-neutral-904 hover ltr:left-0 rtl:right-0 group">
      <div class="px-3 xxl:px-4 pt-3 sm:pt-4">
        <a href="index.html"
          class="text-primary-300 flex xl:justify-center group-hover:justify-start xl:group-hover:gap-3 items-center bb-dashed-n30 !pb-3 !mb-0">
          <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_9642_133647)">
              <path
                d="M20.5716 17.5166L19.674 13.4388L16.5908 16.2554L17.0598 16.403L12.2837 31.7543C1.43017 27.3907 0.00733577 12.5359 9.82304 6.173C15.4788 2.50631 22.7587 3.30374 27.5051 7.6686L28.5416 4.33954C22.7583 -0.132655 14.5448 -0.722943 8.07255 3.47288C-5.2819 12.1298 -1.23273 32.7566 14.4218 35.7129C15.4924 32.2695 18.1055 23.8728 20.1268 17.376L20.5716 17.5166Z"
                fill="currentColor" />
              <path
                d="M32.7199 8.96344L31.3295 13.4321C34.4068 21.9951 28.8794 31.3718 19.7571 32.6634L21.288 27.7448C22.6152 28.028 21.5668 27.805 25.4758 28.6385C28.4719 19.0106 30.6186 12.1073 33.164 3.92455L33.6012 4.06323L32.7035 -0.015625L29.6204 2.80102L30.0966 2.95233C28.4298 8.3099 28.3457 8.58051 23.2755 24.8794C21.9979 24.6065 23.0063 24.8217 19.0869 23.9857C15.7039 34.8601 16.9887 30.7289 15.3906 35.8672C30.3023 37.8435 40.5552 21.5237 32.7199 8.96344Z"
                fill="currentColor" />
              <path
                d="M22.5662 23.628L26.3888 11.3387L26.8504 11.4855L25.9527 7.40625L22.8696 10.2229L23.3215 10.3663L19.4062 22.9539L22.5662 23.628Z"
                fill="currentColor" />
              <path
                d="M14.2726 35.4612C7.21781 34.0536 1.98186 28.7935 0.584283 21.6896C-0.82592 14.5228 2.08941 7.61258 8.19247 3.65624C11.0227 1.82146 14.2985 0.851562 17.6648 0.851562C21.4899 0.851562 25.2559 2.11799 28.2888 4.42044L27.3993 7.27872C24.7149 4.92333 21.2754 3.62999 17.6751 3.62999C14.8432 3.62999 12.087 4.4458 9.70558 5.98993C5.02126 9.02622 2.54734 14.1682 3.08711 19.7451C3.6259 25.3135 7.03382 29.8789 12.2032 31.9569L12.4232 32.0451L17.3339 16.2607L17.0189 16.1613L19.5428 13.8558L20.2779 17.1948L19.9846 17.1019C19.9844 17.1016 14.9144 33.3963 14.2726 35.4612Z"
                fill="currentColor" />
              <path
                d="M19.6875 22.7955L23.596 10.2291L23.2978 10.1345L25.8219 7.82812L26.5572 11.1682L26.2469 11.0695L22.4185 23.3782L19.6875 22.7955Z"
                fill="currentColor" />
              <path
                d="M17.8402 35.81C17.1252 35.81 16.3969 35.7666 15.6719 35.6802L19.2314 24.2384L23.4197 25.1321L30.3649 2.80778L30.042 2.70465L32.5665 0.398438L33.3018 3.73835L33.0158 3.64752L25.3219 28.3813L21.134 27.4869L19.4414 32.9255L19.783 32.877C24.1618 32.2572 27.9844 29.7263 30.2713 25.9333C32.5598 22.1379 33.0264 17.5832 31.5547 13.425L32.7798 9.48927C35.9381 14.8622 36.016 21.2963 32.964 26.7963C29.8321 32.4404 24.1793 35.8101 17.8426 35.8101C17.8418 35.81 17.8411 35.81 17.8402 35.81Z"
                fill="currentColor" />
              <path
                d="M18.6684 21.3143C19.4295 18.8676 19.9803 17.0977 19.9803 17.0977L20.2736 17.1906L19.5384 13.8516L17.0145 16.1571L17.3295 16.2565L15.8203 21.1074C16.7669 21.2005 17.716 21.2691 18.6684 21.3143Z"
                fill="currentColor" />
              <path
                d="M3.01171 18.1501C3.0415 13.199 5.46923 8.73446 9.70261 5.98993C12.084 4.4458 14.8402 3.62999 17.6721 3.62999C21.2725 3.62999 24.712 4.92333 27.3963 7.27873L28.2858 4.42044C25.253 2.11799 21.4869 0.851562 17.6618 0.851562C14.2955 0.851562 11.0198 1.82135 8.1895 3.65624C3.42421 6.74548 0.602474 11.6351 0.265625 17.0418C1.17105 17.4347 2.08656 17.8047 3.01171 18.1501Z"
                fill="currentColor" />
              <path
                d="M20.125 21.3709C21.0928 21.3941 22.0634 21.3938 23.0366 21.3732L26.2413 11.0695L26.5516 11.1682L25.8163 7.82812L23.2922 10.1343L23.5903 10.2289L20.125 21.3709Z"
                fill="currentColor" />
              <path
                d="M31.5547 13.4279C32.3777 15.7536 32.5933 18.203 32.2243 20.5745C33.1934 20.413 34.1571 20.2237 35.113 20.001C35.4765 16.4044 34.6965 12.7529 32.7798 9.49219L31.5547 13.4279Z"
                fill="currentColor" />
              <path
                d="M24.6094 21.3211C25.5991 21.2808 26.5894 21.2223 27.5777 21.1413L33.0196 3.64752L33.3056 3.73835L32.5704 0.398438L30.0458 2.70465L30.3687 2.80778L24.6094 21.3211Z"
                fill="currentColor" />
            </g>
            <defs>
              <clippath id="clip0_9642_133647">
                <rect width="35.4462" height="36" fill="white" />
              </clippath>
            </defs>
          </svg>
          <span class="h4 duration-300 shrink-0 max-[380px]:hidden xl:hidden group-hover:block"><span
              class="text-neutral-700 dark:text-neutral-0 h4">Softify</span></span>
        </a>
      </div>
      <div x-data="{opened:null,
openMenu(name){
  this.opened==name ? this.opened = null : this.opened=name
},
setActiveMenu(){
  const submenus = document.querySelectorAll('.submenu-link-h')
  submenus.forEach((submenu) => {
    const currentUrl = window.location.href
    const href = submenu.getAttribute('href')
    const cleanHref = href.replace(/^\.\.\//, '')

    const url = new URL(currentUrl);
    const filename = url.pathname.split('/').pop();

    if (filename==cleanHref) {
      submenu.classList.add('text-primary-300')
      const submenuName = submenu.parentElement.parentElement.getAttribute('data-submenu')
      this.opened = submenuName                
    }

  })
}}" x-init="setActiveMenu"
        class="overflow-y-auto h-full px-2.5 pt-3 sm:pt-4 lg:pt-6 xl:pt-0 group-hover:xl:pt-6 group-hover:xxl:pt-8 pb-24 custom-scrollbar-hovered">

        <p class="text-xs font-semibold mb-3 xl:hidden group-hover:block">Dashboards</p>
        <ul class="flex flex-col gap-2 bb-dashed-n30 xl:mb-5 xl:pb-5 m-text font-medium xl:pt-5 group-hover:pt-0">
          <li class="flex xl:justify-center group-hover:justify-start w-full">
            <a href="<?php echo site_url('page/Home'); ?>" class="hovered-menu menu-link">
              <i class="las la-cube text-xl text-primary-300"></i>
              <span class="xl:hidden group-hover:block">Home</span>
            </a>
          </li>

          <li class="relative xl:flex xl:justify-center group-hover:block group-hover:justify-start">
            <button :class="opened=='list' ? 'bg-primary-50 text-primary-300' : ''" @click="openMenu('list')"
              class="submenu-btn-h">
              <span class="flex items-center gap-2">
                <i class="las la-user-alt text-xl text-primary-300"></i>
                <span class="xl:hidden group-hover:block">E Kontrak</span>
              </span>
              <i :class="opened=='list' ? 'las la-minus rotate-180 text-primary-300' : 'las la-plus'"
                class="text-xl duration-300 xl:hidden group-hover:block"></i>
            </button>
            <div x-show="opened=='list'" x-collapse>
              <ul
                class="mt-3 ltr:ml-6 rtl:mr-6 flex-col ltr:border-l rtl:border-r xl:hidden group-hover:flex border-primary-300"
                data-submenu="list">
                <li>
                  <a href="list" class="dropdown-link submenu-link-h">List</a>
                </li>
                <li>
                  <a href="fisik" class="dropdown-link submenu-link-h">Fisik</a>
                </li>
                <li>
                  <a href="konsultan_pengawasan" class="dropdown-link submenu-link-h">Konsultan Pengawasan</a>
                </li>
                <li>
                  <a href="konsultan_perencanaan" class="dropdown-link submenu-link-h">Konsultan Pengawasan</a>
                </li>
              </ul>
            </div>
          </li>
          <!--  <li class="flex xl:justify-center group-hover:justify-start w-full">
    <a href="nft.html" class="hovered-menu menu-link">
      <i class="las la-cube text-xl text-primary-300"></i>
      <span class="xl:hidden group-hover:block">NFT</span>
    </a>
  </li>
  <li class="flex xl:justify-center group-hover:justify-start w-full">
    <a href="music.html" class="hovered-menu menu-link">
      <i class="las la-music text-xl text-primary-300"></i>
      <span class="xl:hidden group-hover:block">Music</span>
    </a>
  </li>
  <li class="flex xl:justify-center group-hover:justify-start w-full">
    <a href="analytics.html" class="hovered-menu menu-link">
      <i class="las la-chart-bar text-xl text-primary-300"></i>
      <span class="xl:hidden group-hover:block">Analytics</span>
    </a>
  </li>
  <li class="flex xl:justify-center group-hover:justify-start w-full">
    <a href="e-commerce.html" class="hovered-menu menu-link">
      <i class="las la-shopping-bag text-xl text-primary-300"></i>
      <span class="xl:hidden group-hover:block">E-commerce</span>
    </a>
  </li>
  <li class="flex xl:justify-center group-hover:justify-start w-full">
    <a href="banking.html" class="hovered-menu menu-link">
      <i class="las la-piggy-bank text-xl text-primary-300"></i>
      <span class="xl:hidden group-hover:block">Finance</span>
    </a>
  </li>
  <li class="flex xl:justify-center group-hover:justify-start w-full">
    <a href="app.html" class="hovered-menu menu-link">
      <i class="lab la-app-store text-xl text-primary-300"></i>
      <span class="xl:hidden group-hover:block">App</span>
    </a>
  </li>

  <li class="flex xl:justify-center group-hover:justify-start w-full">
    <a href="booking.html" class="hovered-menu menu-link">
      <i class="las la-plane-departure text-xl text-primary-300"></i>
      <span class="xl:hidden group-hover:block">Booking</span>
    </a>
  </li>
  <li class="flex xl:justify-center group-hover:justify-start w-full">
    <a href="file.html" class="hovered-menu menu-link">
      <i class="las la-file text-xl text-primary-300"></i>
      <span class="xl:hidden group-hover:block">File</span>
    </a>
  </li> -->
        </ul>
        <!-- <p class="text-xs font-semibold mb-3 xl:hidden group-hover:block mt-5">Operations</p>
<ul class="flex flex-col gap-2 bb-dashed-n30 xl:mb-5 xl:pb-5 m-text font-medium">
-->
        <!-- <li class="relative xl:flex xl:justify-center group-hover:block group-hover:justify-start">
    <button :class="opened=='store' ? 'bg-primary-50 text-primary-300' : ''" @click="openMenu('store')" class="submenu-btn-h">
      <span class="flex items-center gap-2">
        <i class="las la-shopping-basket text-xl text-primary-300"></i>
        <span class="xl:hidden group-hover:block">Store</span>
      </span>
      <i :class="opened=='store' ? 'las la-minus rotate-180 text-primary-300' : 'las la-plus'" class="text-xl duration-300 xl:hidden group-hover:block"></i>
    </button>
    <div x-show="opened=='store'" x-collapse>
      <ul class="mt-3 ltr:ml-6 rtl:mr-6 flex-col ltr:border-l rtl:border-r xl:hidden group-hover:flex border-primary-300" data-submenu="store">
        <li>
          <a href="shop.html" class="dropdown-link submenu-link-h">List</a>
        </li>
        <li>
          <a href="product-list.html" class="dropdown-link submenu-link-h">List</a>
        </li>
        <li>
          <a href="product-details.html" class="dropdown-link submenu-link-h">Details</a>
        </li>
        <li>
          <a href="create-product.html" class="dropdown-link submenu-link-h">Create</a>
        </li>
        <li>
          <a href="edit-product.html" class="dropdown-link submenu-link-h">Edit</a>
        </li>
        <li>
          <a href="manage-review.html" class="dropdown-link submenu-link-h">Manage Review</a>
        </li>
        <li>
          <a href="referrals.html" class="dropdown-link submenu-link-h">Referrals</a>
        </li>
      </ul>
    </div>
  </li>
  <li class="relative xl:flex xl:justify-center group-hover:block group-hover:justify-start">
    <button :class="opened=='order' ? 'bg-primary-50 text-primary-300' : ''" @click="openMenu('order')" class="submenu-btn-h">
      <span class="flex items-center gap-2">
        <i class="las la-shopping-cart text-xl text-primary-300"></i>
        <span class="xl:hidden group-hover:block">Order</span>
      </span>
      <i :class="opened=='order' ? 'las la-minus rotate-180 text-primary-300' : 'las la-plus'" class="text-xl duration-300 xl:hidden group-hover:block"></i>
    </button>
    <div x-show="opened=='order'" x-collapse>
      <ul class="mt-3 ltr:ml-6 rtl:mr-6 flex-col ltr:border-l rtl:border-r xl:hidden group-hover:flex border-primary-300" data-submenu="order">
        <li>
          <a href="order-list.html" class="dropdown-link submenu-link-h">List</a>
        </li>
        <li>
          <a href="order-details.html" class="dropdown-link submenu-link-h">Details</a>
        </li>
      </ul>
    </div>
  </li>
  <li class="relative xl:flex xl:justify-center group-hover:block group-hover:justify-start">
    <button :class="opened=='invoice' ? 'bg-primary-50 text-primary-300' : ''" @click="openMenu('invoice')" class="submenu-btn-h">
      <span class="flex items-center gap-2">
        <i class="las la-file-invoice text-xl text-primary-300"></i>
        <span class="xl:hidden group-hover:block">Invoice</span>
      </span>
      <i :class="opened=='invoice' ? 'las la-minus rotate-180 text-primary-300' : 'las la-plus'" class="text-xl duration-300 xl:hidden group-hover:block"></i>
    </button>
    <div x-show="opened=='invoice'" x-collapse>
      <ul class="mt-3 ltr:ml-6 rtl:mr-6 flex-col ltr:border-l rtl:border-r xl:hidden group-hover:flex border-primary-300" data-submenu="invoice">
        <li>
          <a href="invoice-list.html" class="dropdown-link submenu-link-h">List</a>
        </li>
        <li>
          <a href="invoice-details.html" class="dropdown-link submenu-link-h">Details</a>
        </li>
        <li>
          <a href="create-invoice.html" class="dropdown-link submenu-link-h">Create</a>
        </li>
        <li>
          <a href="edit-invoice.html" class="dropdown-link submenu-link-h">Edit</a>
        </li>
      </ul>
    </div>
  </li>
  <li>
    <a href="file-manager.html" class="hovered-menu menu-link">
      <i class="las la-file text-xl text-primary-300"></i>
      <span class="xl:hidden group-hover:block">File Manager</span>
    </a>
  </li>
  <li>
    <a href="mail.html" class="hovered-menu menu-link">
      <i class="las la-envelope-open-text text-xl text-primary-300"></i>
      <span class="xl:hidden group-hover:block">Mail</span>
    </a>
  </li>
  <li>
    <a href="chat.html" class="hovered-menu menu-link">
      <i class="lab la-facebook-messenger text-xl text-primary-300"></i>
      <span class="xl:hidden group-hover:block">Chat</span>
    </a>
  </li>
  <li>
    <a href="calendar.html" class="hovered-menu menu-link">
      <i class="las la-calendar-alt text-xl text-primary-300"></i>
      <span class="xl:hidden group-hover:block">Calendar</span>
    </a>
  </li>
  <li>
    <a href="kanban.html" class="hovered-menu menu-link">
      <i class="las la-table text-xl text-primary-300"></i>
      <span class="xl:hidden group-hover:block">Kanban</span>
    </a>
  </li> -->
        <!-- </ul>

<p class="text-xs font-semibold mb-3 xl:hidden group-hover:block mt-5">Pages</p>
<ul class="flex flex-col gap-2 bb-dashed-n30 xl:mb-5 xl:pb-5 m-text font-medium"> -->
        <!-- <li class="relative xl:flex xl:justify-center group-hover:block group-hover:justify-start">
    <button :class="opened=='blog' ? 'bg-primary-50 text-primary-300' : ''" @click="openMenu('blog')" class="submenu-btn-h">
      <span class="flex items-center gap-2">
        <i class="las la-newspaper text-xl text-primary-300"></i>
        <span class="xl:hidden group-hover:block">Blog</span>
      </span>
      <i :class="opened=='blog' ? 'las la-minus rotate-180 text-primary-300' : 'las la-plus'" class="text-xl duration-300 xl:hidden group-hover:block"></i>
    </button>
    <div x-show="opened=='blog'" x-collapse>
      <ul class="mt-3 ltr:ml-6 rtl:mr-6 flex-col ltr:border-l rtl:border-r xl:hidden group-hover:flex border-primary-300" data-submenu="blog">
        <li>
          <a href="blog-list.html" class="dropdown-link submenu-link-h">List</a>
        </li>
        <li>
          <a href="blog-details.html" class="dropdown-link submenu-link-h">Details</a>
        </li>
        <li>
          <a href="create-blog.html" class="dropdown-link submenu-link-h">Create</a>
        </li>
        <li>
          <a href="edit-blog.html" class="dropdown-link submenu-link-h">Edit</a>
        </li>
      </ul>
    </div>
  </li>
  <li class="relative xl:flex xl:justify-center group-hover:block group-hover:justify-start">
    <button :class="opened=='job' ? 'bg-primary-50 text-primary-300' : ''" @click="openMenu('job')" class="submenu-btn-h">
      <span class="flex items-center gap-2">
        <i class="las la-briefcase text-xl text-primary-300"></i>
        <span class="xl:hidden group-hover:block">Job</span>
      </span>
      <i :class="opened=='job' ? 'las la-minus rotate-180 text-primary-300' : 'las la-plus'" class="text-xl duration-300 xl:hidden group-hover:block"></i>
    </button>
    <div x-show="opened=='job'" x-collapse>
      <ul class="mt-3 ltr:ml-6 rtl:mr-6 flex-col ltr:border-l rtl:border-r xl:hidden group-hover:flex border-primary-300" data-submenu="job">
        <li>
          <a href="job-list.html" class="dropdown-link submenu-link-h">List</a>
        </li>
        <li>
          <a href="job-details.html" class="dropdown-link submenu-link-h">Details</a>
        </li>
        <li>
          <a href="create-job.html" class="dropdown-link submenu-link-h">Create</a>
        </li>
        <li>
          <a href="edit-job.html" class="dropdown-link submenu-link-h">Edit</a>
        </li>
      </ul>
    </div>
  </li>
  <li class="relative xl:flex xl:justify-center group-hover:block group-hover:justify-start">
    <button :class="opened=='tour' ? 'bg-primary-50 text-primary-300' : ''" @click="openMenu('tour')" class="submenu-btn-h">
      <span class="flex items-center gap-2">
        <i class="las la-map-marked-alt text-xl text-primary-300"></i>
        <span class="xl:hidden group-hover:block">Tour</span>
      </span>
      <i :class="opened=='tour' ? 'las la-minus rotate-180 text-primary-300' : 'las la-plus'" class="text-xl duration-300 xl:hidden group-hover:block"></i>
    </button>
    <div x-show="opened=='tour'" x-collapse>
      <ul class="mt-3 ltr:ml-6 rtl:mr-6 flex-col ltr:border-l rtl:border-r xl:hidden group-hover:flex border-primary-300" data-submenu="tour">
        <li>
          <a href="tour-list.html" class="dropdown-link submenu-link-h">List</a>
        </li>
        <li>
          <a href="tour-details.html" class="dropdown-link submenu-link-h">Details</a>
        </li>
        <li>
          <a href="create-tour.html" class="dropdown-link submenu-link-h">Create</a>
        </li>
        <li>
          <a href="edit-tour.html" class="dropdown-link submenu-link-h">Edit</a>
        </li>
      </ul>
    </div>
  </li>
  <li class="relative xl:flex xl:justify-center group-hover:block group-hover:justify-start">
    <button :class="opened=='pages' ? 'bg-primary-50 text-primary-300' : ''" @click="openMenu('pages')" class="submenu-btn-h">
      <span class="flex items-center gap-2">
        <i class="las la-book-open text-xl text-primary-300"></i>
        <span class="xl:hidden group-hover:block">Pages</span>
      </span>
      <i :class="opened=='pages' ? 'las la-minus rotate-180 text-primary-300' : 'las la-plus'" class="text-xl duration-300 xl:hidden group-hover:block"></i>
    </button>
    <div x-show="opened=='pages'" x-collapse>
      <ul class="mt-3 ltr:ml-6 rtl:mr-6 flex-col ltr:border-l rtl:border-r xl:hidden group-hover:flex border-primary-300" data-submenu="pages">
        <li>
          <a href="about-us.html" class="dropdown-link submenu-link-h">About Us</a>
        </li>
        <li>
          <a href="contact-us.html" class="dropdown-link submenu-link-h">Contact Us</a>
        </li>
        <li>
          <a href="faqs.html" class="dropdown-link submenu-link-h">FAQs</a>
        </li>
        <li>
          <a href="pricing-plan.html" class="dropdown-link submenu-link-h">Pricing Plan</a>
        </li>
        <li>
          <a href="payment.html" class="dropdown-link submenu-link-h">Payment</a>
        </li>
        <li>
          <a href="maintenance.html" class="dropdown-link submenu-link-h">Maintenance</a>
        </li>
        <li>
          <a href="coming-soon.html" class="dropdown-link submenu-link-h">Coming Soon</a>
        </li>
      </ul>
    </div>
  </li>
  <li class="relative xl:flex xl:justify-center group-hover:block group-hover:justify-start">
    <button :class="opened=='auth' ? 'bg-primary-50 text-primary-300' : ''" @click="openMenu('auth')" class="submenu-btn-h">
      <span class="flex items-center gap-2">
        <i class="las la-user-lock text-xl text-primary-300"></i>
        <span class="xl:hidden group-hover:block">Auth</span>
      </span>
      <i :class="opened=='auth' ? 'las la-minus rotate-180 text-primary-300' : 'las la-plus'" class="text-xl duration-300 xl:hidden group-hover:block"></i>
    </button>
    <div x-show="opened=='auth'" x-collapse>
      <ul class="mt-3 ltr:ml-6 rtl:mr-6 flex-col ltr:border-l rtl:border-r xl:hidden group-hover:flex border-primary-300" data-submenu="auth">
        <li>
          <a href="login.html" class="dropdown-link submenu-link-h">Login One</a>
        </li>
        <li>
          <a href="login-modern.html" class="dropdown-link submenu-link-h">Login Two</a>
        </li>
        <li>
          <a href="sign-up.html" class="dropdown-link submenu-link-h">Signup One</a>
        </li>
        <li>
          <a href="sign-up-modern.html" class="dropdown-link submenu-link-h">Signup Two</a>
        </li>
        <li>
          <a href="forgot-password.html" class="dropdown-link submenu-link-h">Forgot Password One</a>
        </li>
        <li>
          <a href="forgot-password-modern.html" class="dropdown-link submenu-link-h">Forgot Password Two</a>
        </li>
        <li>
          <a href="verify-email.html" class="dropdown-link submenu-link-h">Verify Email</a>
        </li>
        <li>
          <a href="verify-email-modern.html" class="dropdown-link submenu-link-h">Verify Email Two</a>
        </li>
        <li>
          <a href="new-password.html" class="dropdown-link submenu-link-h">New Password One</a>
        </li>
        <li>
          <a href="new-password-modern.html" class="dropdown-link submenu-link-h">New Password Two</a>
        </li>
      </ul>
    </div>
  </li>
  <li class="relative xl:flex xl:justify-center group-hover:block group-hover:justify-start">
    <button :class="opened=='error' ? 'bg-primary-50 text-primary-300' : ''" @click="openMenu('error')" class="submenu-btn-h">
      <span class="flex items-center gap-2">
        <i class="las la-info-circle text-xl text-primary-300"></i>
        <span class="xl:hidden group-hover:block">Errors</span>
      </span>
      <i :class="opened=='error' ? 'las la-minus rotate-180 text-primary-300' : 'las la-plus'" class="text-xl duration-300 xl:hidden group-hover:block"></i>
    </button>
    <div x-show="opened=='error'" x-collapse>
      <ul class="mt-3 ltr:ml-6 rtl:mr-6 flex-col ltr:border-l rtl:border-r xl:hidden group-hover:flex border-primary-300" data-submenu="error">
        <li>
          <a href="403.html" class="dropdown-link submenu-link-h">Error 403</a>
        </li>
        <li>
          <a href="404.html" class="dropdown-link submenu-link-h">Error 404</a>
        </li>
        <li>
          <a href="500.html" class="dropdown-link submenu-link-h">Error 500</a>
        </li>
      </ul>
    </div>
  </li>
  <li>
    <a href="kanban.html" class="hovered-menu menu-link">
      <i class="las la-table text-xl text-primary-300"></i>
      <span class="xl:hidden group-hover:block">Kanban</span>
    </a>
  </li> -->
        <!-- </ul>
<p class="text-xs font-semibold mb-3 xl:hidden group-hover:block mt-5">Elements</p>
<ul class="flex flex-col gap-2 bb-dashed-n30 xl:mb-5 xl:pb-5 m-text font-medium"> -->
        <!-- <li class="relative xl:flex xl:justify-center group-hover:block group-hover:justify-start">
    <button :class="opened=='component' ? 'bg-primary-50 text-primary-300' : ''" @click="openMenu('component')" class="submenu-btn-h">
      <span class="flex items-center gap-2">
        <i class="las la-puzzle-piece text-xl text-primary-300"></i>
        <span class="xl:hidden group-hover:block">Components</span>
      </span>
      <i :class="opened=='component' ? 'las la-minus rotate-180 text-primary-300' : 'las la-plus'" class="text-xl duration-300 xl:hidden group-hover:block"></i>
    </button>
    <div x-show="opened=='component'" x-collapse>
      <ul class="mt-3 ltr:ml-6 rtl:mr-6 flex-col ltr:border-l rtl:border-r xl:hidden group-hover:flex border-primary-300" data-submenu="component">
        <li>
          <a href="alert.html" class="dropdown-link submenu-link-h">Alert</a>
        </li>
        <li>
          <a href="accordion.html" class="dropdown-link submenu-link-h">Accordion</a>
        </li>
        <li>
          <a href="avatar.html" class="dropdown-link submenu-link-h">Avatar</a>
        </li>
        <li>
          <a href="badge.html" class="dropdown-link submenu-link-h">Badge</a>
        </li>
        <li>
          <a href="breadcrumbs.html" class="dropdown-link submenu-link-h">Breadcrumbs</a>
        </li>
        <li>
          <a href="buttons.html" class="dropdown-link submenu-link-h">Buttons</a>
        </li>
        <li>
          <a href="chip.html" class="dropdown-link submenu-link-h">Chip</a>
        </li>
        <li>
          <a href="dialog.html" class="dropdown-link submenu-link-h">Modal</a>
        </li>
        <li>
          <a href="list.html" class="dropdown-link submenu-link-h">List</a>
        </li>
        <li>
          <a href="menu.html" class="dropdown-link submenu-link-h">Menu</a>
        </li>
        <li>
          <a href="mega-menu.html" class="dropdown-link submenu-link-h">Mega Menu</a>
        </li>
        <li>
          <a href="pagination.html" class="dropdown-link submenu-link-h">Pagination</a>
        </li>
        <li>
          <a href="popover.html" class="dropdown-link submenu-link-h">Popover</a>
        </li>
        <li>
          <a href="progress.html" class="dropdown-link submenu-link-h">Progress</a>
        </li>
        <li>
          <a href="rating.html" class="dropdown-link submenu-link-h">Rating</a>
        </li>
        <li>
          <a href="stepper.html" class="dropdown-link submenu-link-h">Stepper</a>
        </li>
        <li>
          <a href="tabs.html" class="dropdown-link submenu-link-h">Tabs</a>
        </li>
        <li>
          <a href="timeline.html" class="dropdown-link submenu-link-h">Timeline</a>
        </li>
        <li>
          <a href="transfer-list.html" class="dropdown-link submenu-link-h">Transfer List</a>
        </li>
        <li>
          <a href="copy-to-clipboard.html" class="dropdown-link submenu-link-h">Copy to Clipboard</a>
        </li>
        <li>
          <a href="image.html" class="dropdown-link submenu-link-h">Image</a>
        </li>
        <li>
          <a href="label.html" class="dropdown-link submenu-link-h">Label</a>
        </li>
        <li>
          <a href="scroll.html" class="dropdown-link submenu-link-h">Scroll</a>
        </li>
        <li>
          <a href="scroll-progress.html" class="dropdown-link submenu-link-h">Scroll Progress</a>
        </li>
        <li>
          <a href="text-max-line.html" class="dropdown-link submenu-link-h">Text max line</a>
        </li>
        <li>
          <a href="navigation-bar.html" class="dropdown-link submenu-link-h">Navigation Bar</a>
        </li>
        <li>
          <a href="organization-chart.html" class="dropdown-link submenu-link-h">Organization Chart</a>
        </li>
      </ul>
    </div>
  </li>
  <li class="relative xl:flex xl:justify-center group-hover:block group-hover:justify-start">
    <button :class="opened=='form' ? 'bg-primary-50 text-primary-300' : ''" @click="openMenu('form')" class="submenu-btn-h">
      <span class="flex items-center gap-2">
        <i class="lab la-wpforms text-xl text-primary-300"></i>
        <span class="xl:hidden group-hover:block">Form</span>
      </span>
      <i :class="opened=='form' ? 'las la-minus rotate-180 text-primary-300' : 'las la-plus'" class="text-xl duration-300 xl:hidden group-hover:block"></i>
    </button>
    <div x-show="opened=='form'" x-collapse>
      <ul class="mt-3 ltr:ml-6 rtl:mr-6 flex-col ltr:border-l rtl:border-r xl:hidden group-hover:flex border-primary-300" data-submenu="form">
        <li>
          <a href="input.html" class="dropdown-link submenu-link-h">Input</a>
        </li>
        <li>
          <a href="autocomplete.html" class="dropdown-link submenu-link-h">Autocomplete</a>
        </li>
        <li>
          <a href="checkbox.html" class="dropdown-link submenu-link-h">Checkbox</a>
        </li>
        <li>
          <a href="pickers.html" class="dropdown-link submenu-link-h">Pickers</a>
        </li>
        <li>
          <a href="radio-button.html" class="dropdown-link submenu-link-h">Radio Button</a>
        </li>
        <li>
          <a href="switch.html" class="dropdown-link submenu-link-h">Switch</a>
        </li>
      </ul>
    </div>
  </li>
  <li class="relative xl:flex xl:justify-center group-hover:block group-hover:justify-start">
    <button :class="opened=='plugin' ? 'bg-primary-50 text-primary-300' : ''" @click="openMenu('plugin')" class="submenu-btn-h">
      <span class="flex items-center gap-2">
        <i class="las la-plug text-xl text-primary-300"></i>
        <span class="xl:hidden group-hover:block">Plugins</span>
      </span>
      <i :class="opened=='plugin' ? 'las la-minus rotate-180 text-primary-300' : 'las la-plus'" class="text-xl duration-300 xl:hidden group-hover:block"></i>
    </button>
    <div x-show="opened=='plugin'" x-collapse>
      <ul class="mt-3 ltr:ml-6 rtl:mr-6 flex-col ltr:border-l rtl:border-r xl:hidden group-hover:flex border-primary-300" data-submenu="plugin">
        <li>
          <a href="slider.html" class="dropdown-link submenu-link-h">Slider</a>
        </li>
        <li>
          <a href="tooltip.html" class="dropdown-link submenu-link-h">Tooltip</a>
        </li>
        <li>
          <a href="editor.html" class="dropdown-link submenu-link-h">Editor</a>
        </li>
        <li>
          <a href="upload.html" class="dropdown-link submenu-link-h">Upload</a>
        </li>
        <li>
          <a href="carousel.html" class="dropdown-link submenu-link-h">Carousel</a>
        </li>
        <li>
          <a href="form-validation.html" class="dropdown-link submenu-link-h">Form Validation</a>
        </li>
        <li>
          <a href="lightbox.html" class="dropdown-link submenu-link-h">Lightbox</a>
        </li>
        <li>
          <a href="snackbar.html" class="dropdown-link submenu-link-h">Toast</a>
        </li>
        <li>
          <a href="walktour.html" class="dropdown-link submenu-link-h">Walktour</a>
        </li>
      </ul>
    </div>
  </li>
  <li class="relative xl:flex xl:justify-center group-hover:block group-hover:justify-start">
    <button :class="opened=='table' ? 'bg-primary-50 text-primary-300' : ''" @click="openMenu('table')" class="submenu-btn-h">
      <span class="flex items-center gap-2">
        <i class="las la-table text-xl text-primary-300"></i>
        <span class="xl:hidden group-hover:block">Table</span>
      </span>
      <i :class="opened=='table' ? 'las la-minus rotate-180 text-primary-300' : 'las la-plus'" class="text-xl duration-300 xl:hidden group-hover:block"></i>
    </button>
    <div x-show="opened=='table'" x-collapse>
      <ul class="mt-3 ltr:ml-6 rtl:mr-6 flex-col ltr:border-l rtl:border-r xl:hidden group-hover:flex border-primary-300" data-submenu="table">
        <li>
          <a href="table.html" class="dropdown-link submenu-link-h">Basic Table</a>
        </li>
        <li>
          <a href="data-grid.html" class="dropdown-link submenu-link-h">Data Table</a>
        </li>
      </ul>
    </div>
  </li>
  <li class="relative xl:flex xl:justify-center group-hover:block group-hover:justify-start">
    <button :class="opened=='others' ? 'bg-primary-50 text-primary-300' : ''" @click="openMenu('others')" class="submenu-btn-h">
      <span class="flex items-center gap-2">
        <i class="las la-shapes text-xl text-primary-300"></i>
        <span class="xl:hidden group-hover:block">Others</span>
      </span>
      <i :class="opened=='others' ? 'las la-minus rotate-180 text-primary-300' : 'las la-plus'" class="text-xl duration-300 xl:hidden group-hover:block"></i>
    </button>
    <div x-show="opened=='others'" x-collapse>
      <ul class="mt-3 ltr:ml-6 rtl:mr-6 flex-col ltr:border-l rtl:border-r xl:hidden group-hover:flex border-primary-300" data-submenu="others">
        <li>
          <a href="colors.html" class="dropdown-link submenu-link-h">Colors</a>
        </li>
        <li>
          <a href="typography.html" class="dropdown-link submenu-link-h">Typography</a>
        </li>
        <li>
          <a href="shadows.html" class="dropdown-link submenu-link-h">Shadows</a>
        </li>
        <li>
          <a href="grid.html" class="dropdown-link submenu-link-h">Grid</a>
        </li>
      </ul>
    </div>
  </li>
  <li>
    <a href="icons.html" class="hovered-menu menu-link">
      <i class="las la-icons text-xl text-primary-300"></i>
      <span class="xl:hidden group-hover:block">Icons</span>
    </a>
  </li>
  <li>
    <a href="chart.html" class="hovered-menu menu-link">
      <i class="las la-chart-pie text-xl text-primary-300"></i>
      <span class="xl:hidden group-hover:block">Chart</span>
    </a>
  </li>
  <li>
    <a href="map.html" class="hovered-menu menu-link">
      <i class="las la-map text-xl text-primary-300"></i>
      <span class="xl:hidden group-hover:block">Maps</span>
    </a>
  </li> -->
        <!-- </ul> -->
        <!-- <p class="text-xs font-semibold mb-3 xl:hidden group-hover:block mt-5">Role &amp; Permissions</p>
<ul class="flex flex-col gap-2 bb-dashed-n30 xl:mb-5 xl:pb-5 m-text font-medium">
  <li>
    <a href="roles.html" class="hovered-menu menu-link">
      <i class="las la-cog text-xl text-primary-300"></i>
      <span class="xl:hidden group-hover:block">Roles</span>
    </a>
  </li>
  <li>
    <a href="permissions.html" class="hovered-menu menu-link">
      <i class="las la-user-check text-xl text-primary-300"></i>
      <span class="xl:hidden group-hover:block">Permissions</span>
    </a>
  </li>
</ul> -->
      </div>
    </aside>

    <!-- Horizontal sidebar -->
    <nav :class="$store.app.menu=='horizontal'?'hidden xl:block':'hidden'"
      class="fixed z-[9] px-4 top-0 left-0 right-0 w-full mx-auto bg-neutral-0 dark:bg-neutral-904 mt-[60px] md:mt-[66px]">
      <div class="max-w-[1704px] mx-auto">
        <ul class="flex gap-5 items-center">
          <li class="relative group">
            <button class="inline-flex py-3 text-sm font-medium items-center gap-2">Dashboards <i
                class="las la-plus group-hover:hidden text-lg"></i><i
                class="las la-minus hidden text-lg group-hover:inline-block"></i></button>
            <ul class="submenu-horiz">
              <li><a href="index.html" class="link-horiz menu-link-horiz">Home</a></li><!-- 
            <li><a href="nft.html" class="link-horiz menu-link-horiz">NFT</a></li>
            <li><a href="music.html" class="link-horiz menu-link-horiz">Music</a></li>
            <li><a href="app.html" class="link-horiz menu-link-horiz">App</a></li>
            <li><a href="e-commerce.html" class="link-horiz menu-link-horiz">E-commerce</a></li>
            <li><a href="analytics.html" class="link-horiz menu-link-horiz">Analytics</a></li>
            <li><a href="banking.html" class="link-horiz menu-link-horiz">Banking</a></li>
            <li><a href="booking.html" class="link-horiz menu-link-horiz">Booking</a></li>
            <li><a href="file.html" class="link-horiz menu-link-horiz">File</a></li> -->
            </ul>
          </li>
          <li class="relative group">
            <button class="inline-flex py-3 text-sm font-medium items-center gap-2">Ekontrak <i
                class="las la-plus group-hover:hidden text-lg"></i><i
                class="las la-minus hidden text-lg group-hover:inline-block"></i></button>
            <ul class="submenu-horiz">
              <li><a href="user-profile.html" class="link-horiz menu-link-horiz">List</a></li>
              <li><a href="user-cards.html" class="link-horiz menu-link-horiz">Fisik</a></li>
              <li><a href="user-list.html" class="link-horiz menu-link-horiz">Konsultan Pengawasan</a></li>
              <li><a href="create-user.html" class="link-horiz menu-link-horiz">Konsultan Perencanaan</a></li>
              <!-- <li><a href="edit-user.html" class="link-horiz menu-link-horiz">Edit</a></li>
            <li><a href="user-account.html" class="link-horiz menu-link-horiz">Account</a></li> -->
            </ul>
          </li>
          <!-- <li class="relative group">
          <button class="inline-flex py-3 text-sm font-medium items-center gap-2">Product <i class="las la-plus group-hover:hidden text-lg"></i><i class="las la-minus hidden text-lg group-hover:inline-block"></i></button>
          <ul class="submenu-horiz">
            <li><a href="product-list.html" class="link-horiz menu-link-horiz">List</a></li>
            <li><a href="product-details.html" class="link-horiz menu-link-horiz">Details</a></li>
            <li><a href="create-product.html" class="link-horiz menu-link-horiz">Create</a></li>
            <li><a href="edit-product.html" class="link-horiz menu-link-horiz">Edit</a></li>
            <li><a href="manage-review.html" class="link-horiz menu-link-horiz">Manage Review</a></li>
            <li><a href="referrals.html" class="link-horiz menu-link-horiz">Referrals</a></li>
          </ul>
        </li>
        <li class="relative group">
          <button class="inline-flex py-3 text-sm font-medium items-center gap-2">Order <i class="las la-plus group-hover:hidden text-lg"></i><i class="las la-minus hidden text-lg group-hover:inline-block"></i></button>
          <ul class="submenu-horiz">
            <li><a href="order-list.html" class="link-horiz menu-link-horiz">List</a></li>
            <li><a href="order-details.html" class="link-horiz menu-link-horiz">Details</a></li>
          </ul>
        </li>
        <li class="relative group">
          <button class="inline-flex py-3 text-sm font-medium items-center gap-2">Invoice <i class="las la-plus group-hover:hidden text-lg"></i><i class="las la-minus hidden text-lg group-hover:inline-block"></i></button>
          <ul class="submenu-horiz">
            <li><a href="invoice-list.html" class="link-horiz menu-link-horiz">List</a></li>
            <li><a href="invoice-details.html" class="link-horiz menu-link-horiz">Details</a></li>
            <li><a href="create-invoice.html" class="link-horiz menu-link-horiz">Create</a></li>
            <li><a href="edit-invoice.html" class="link-horiz menu-link-horiz">Edit</a></li>
          </ul>
        </li>
        <li class="relative group">
          <button class="inline-flex py-3 text-sm font-medium items-center gap-2">Blog <i class="las la-plus group-hover:hidden text-lg"></i><i class="las la-minus hidden text-lg group-hover:inline-block"></i></button>
          <ul class="submenu-horiz">
            <li><a href="blog-list.html" class="link-horiz menu-link-horiz">List</a></li>
            <li><a href="blog-details.html" class="link-horiz menu-link-horiz">Details</a></li>
            <li><a href="create-blog.html" class="link-horiz menu-link-horiz">Create</a></li>
            <li><a href="edit-blog.html" class="link-horiz menu-link-horiz">Edit</a></li>
          </ul>
        </li>
        <li class="relative group">
          <button class="inline-flex py-3 text-sm font-medium items-center gap-2">Job <i class="las la-plus group-hover:hidden text-lg"></i><i class="las la-minus hidden text-lg group-hover:inline-block"></i></button>
          <ul class="submenu-horiz">
            <li><a href="job-list.html" class="link-horiz menu-link-horiz">List</a></li>
            <li><a href="job-details.html" class="link-horiz menu-link-horiz">Details</a></li>
            <li><a href="create-job.html" class="link-horiz menu-link-horiz">Create</a></li>
            <li><a href="edit-job.html" class="link-horiz menu-link-horiz">Edit</a></li>
          </ul>
        </li>
        <li class="relative group">
          <button class="inline-flex py-3 text-sm font-medium items-center gap-2">Tour <i class="las la-plus group-hover:hidden text-lg"></i><i class="las la-minus hidden text-lg group-hover:inline-block"></i></button>
          <ul class="submenu-horiz">
            <li><a href="tour-list.html" class="link-horiz menu-link-horiz">List</a></li>
            <li><a href="tour-details.html" class="link-horiz menu-link-horiz">Details</a></li>
            <li><a href="create-tour.html" class="link-horiz menu-link-horiz">Create</a></li>
            <li><a href="edit-tour.html" class="link-horiz menu-link-horiz">Edit</a></li>
          </ul>
        </li>
        <li class="relative group">
          <button class="inline-flex py-3 text-sm font-medium items-center gap-2">Others <i class="las la-plus group-hover:hidden text-lg"></i><i class="las la-minus hidden text-lg group-hover:inline-block"></i></button>
          <ul class="submenu-horiz">
            <li><a href="file-manager.html" class="link-horiz menu-link-horiz">File Manager</a></li>
            <li><a href="mail.html" class="link-horiz menu-link-horiz">Mail</a></li>
            <li><a href="chat.html" class="link-horiz menu-link-horiz">Chat</a></li>
            <li><a href="calendar.html" class="link-horiz menu-link-horiz">Calendar</a></li>
            <li><a href="kanban.html" class="link-horiz menu-link-horiz">Kanban</a></li>
            <li><a href="roles.html" class="link-horiz menu-link-horiz">Roles</a></li>
            <li><a href="permissions.html" class="link-horiz menu-link-horiz">Permissions</a></li>
          </ul>
        </li>
        <li class="relative group">
          <button class="inline-flex py-3 text-sm font-medium items-center gap-2">Pages <i class="las la-plus group-hover:hidden text-lg"></i><i class="las la-minus hidden text-lg group-hover:inline-block"></i></button>
          <ul class="submenu-horiz">
            <li><a href="about-us.html" class="link-horiz menu-link-horiz">About Us</a></li>
            <li><a href="contact-us.html" class="link-horiz menu-link-horiz">Contact Us</a></li>
            <li><a href="faqs.html" class="link-horiz menu-link-horiz">FAQs</a></li>
            <li><a href="pricing-plan.html" class="link-horiz menu-link-horiz">Pricing Plan</a></li>
            <li><a href="payment.html" class="link-horiz menu-link-horiz">Payment</a></li>
            <li><a href="maintenance.html" class="link-horiz menu-link-horiz">Maintenance</a></li>
            <li><a href="coming-soon.html" class="link-horiz menu-link-horiz">Coming Soon</a></li>
          </ul>
        </li>
        <li class="relative group">
          <button class="inline-flex py-3 text-sm font-medium items-center gap-2">Components <i class="las la-plus group-hover:hidden text-lg"></i><i class="las la-minus hidden text-lg group-hover:inline-block"></i></button>
          <ul class="submenu-horiz">
            <li>
              <a href="alert.html" class="link-horiz menu-link-horiz">Alert</a>
            </li>
            <li>
              <a href="accordion.html" class="link-horiz menu-link-horiz">Accordion</a>
            </li>
            <li>
              <a href="avatar.html" class="link-horiz menu-link-horiz">Avatar</a>
            </li>
            <li>
              <a href="badge.html" class="link-horiz menu-link-horiz">Badge</a>
            </li>
            <li>
              <a href="breadcrumbs.html" class="link-horiz menu-link-horiz">Breadcrumbs</a>
            </li>
            <li>
              <a href="buttons.html" class="link-horiz menu-link-horiz">Buttons</a>
            </li>
            <li>
              <a href="chip.html" class="link-horiz menu-link-horiz">Chip</a>
            </li>
            <li>
              <a href="dialog.html" class="link-horiz menu-link-horiz">Modal</a>
            </li>
            <li>
              <a href="list.html" class="link-horiz menu-link-horiz">List</a>
            </li>
            <li>
              <a href="menu.html" class="link-horiz menu-link-horiz">Menu</a>
            </li>
            <li>
              <a href="mega-menu.html" class="link-horiz menu-link-horiz">Mega Menu</a>
            </li>
            <li>
              <a href="pagination.html" class="link-horiz menu-link-horiz">Pagination</a>
            </li>
            <li>
              <a href="popover.html" class="link-horiz menu-link-horiz">Popover</a>
            </li>
            <li>
              <a href="progress.html" class="link-horiz menu-link-horiz">Progress</a>
            </li>
            <li>
              <a href="rating.html" class="link-horiz menu-link-horiz">Rating</a>
            </li>
            <li>
              <a href="stepper.html" class="link-horiz menu-link-horiz">Stepper</a>
            </li>
            <li>
              <a href="tabs.html" class="link-horiz menu-link-horiz">Tabs</a>
            </li>
            <li>
              <a href="timeline.html" class="link-horiz menu-link-horiz">Timeline</a>
            </li>
            <li>
              <a href="transfer-list.html" class="link-horiz menu-link-horiz">Transfer List</a>
            </li>
            <li>
              <a href="copy-to-clipboard.html" class="link-horiz menu-link-horiz">Copy to Clipboard</a>
            </li>
            <li>
              <a href="image.html" class="link-horiz menu-link-horiz">Image</a>
            </li>
            <li>
              <a href="label.html" class="link-horiz menu-link-horiz">Label</a>
            </li>
            <li>
              <a href="scroll.html" class="link-horiz menu-link-horiz">Scroll</a>
            </li>
            <li>
              <a href="scroll-progress.html" class="link-horiz menu-link-horiz">Scroll Progress</a>
            </li>
            <li>
              <a href="text-max-line.html" class="link-horiz menu-link-horiz">Text max line</a>
            </li>
            <li>
              <a href="navigation-bar.html" class="link-horiz menu-link-horiz">Navigation Bar</a>
            </li>
            <li>
              <a href="organization-chart.html" class="link-horiz menu-link-horiz">Organization Chart</a>
            </li>
            <li>
              <a href="input.html" class="link-horiz menu-link-horiz">Input</a>
            </li>
            <li>
              <a href="autocomplete.html" class="link-horiz menu-link-horiz">Autocomplete</a>
            </li>
            <li>
              <a href="checkbox.html" class="link-horiz menu-link-horiz">Checkbox</a>
            </li>
            <li>
              <a href="pickers.html" class="link-horiz menu-link-horiz">Pickers</a>
            </li>
            <li>
              <a href="radio-button.html" class="link-horiz menu-link-horiz">Radio Button</a>
            </li>
            <li>
              <a href="switch.html" class="link-horiz menu-link-horiz">Switch</a>
            </li>
            <li>
              <a href="slider.html" class="link-horiz menu-link-horiz">Slider</a>
            </li>
            <li>
              <a href="tooltip.html" class="link-horiz menu-link-horiz">Tooltip</a>
            </li>
            <li>
              <a href="editor.html" class="link-horiz menu-link-horiz">Editor</a>
            </li>
            <li>
              <a href="upload.html" class="link-horiz menu-link-horiz">Upload</a>
            </li>
            <li>
              <a href="carousel.html" class="link-horiz menu-link-horiz">Carousel</a>
            </li>
            <li>
              <a href="form-validation.html" class="link-horiz menu-link-horiz">Form Validation</a>
            </li>
            <li>
              <a href="lightbox.html" class="link-horiz menu-link-horiz">Lightbox</a>
            </li>
            <li>
              <a href="snackbar.html" class="link-horiz menu-link-horiz">Toast</a>
            </li>
            <li>
              <a href="walktour.html" class="link-horiz menu-link-horiz">Walktour</a>
            </li>
            <li>
              <a href="table.html" class="link-horiz menu-link-horiz">Basic Table</a>
            </li>
            <li>
              <a href="data-grid.html" class="link-horiz menu-link-horiz">Data Grid</a>
            </li>
            <li>
              <a href="colors.html" class="link-horiz menu-link-horiz">Colors</a>
            </li>
            <li>
              <a href="typography.html" class="link-horiz menu-link-horiz">Typography</a>
            </li>
            <li>
              <a href="shadows.html" class="link-horiz menu-link-horiz">Shadows</a>
            </li>
            <li>
              <a href="grid.html" class="link-horiz menu-link-horiz">Grid</a>
            </li>
            <li>
              <a href="chart.html" class="link-horiz menu-link-horiz">Charts</a>
            </li>
            <li>
              <a href="map.html" class="link-horiz menu-link-horiz">Maps</a>
            </li>
          </ul>
        </li> -->
        </ul>
      </div>
    </nav>

    <!-- Sidebar Overlay -->
    <div @click="$store.app.sidebar=false" :class="$store.app.sidebar?'block':'hidden'"
      class="fixed inset-0 z-[11] bg-neutral-900/80 xl:hidden"></div>
  </section>

  <!-- BEGIN: Toast -->
  <?php
  // Check if 'alert' flashdata exists
  if ($this->session->flashdata('alert')) {
    $alertType = $this->session->flashdata('alert'); // Could be 'success', 'error', etc.
    $alertMessage = $this->session->flashdata($alertType); // The message to display
  
    // Display SweetAlert based on alert type
    echo "<script type='text/javascript'>
    document.addEventListener('DOMContentLoaded', function() {
      const toast = window.Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        padding: '10px 20px'
        });

        toast.fire({
          icon: '" . $alertType . "', // 'success', 'error', 'warning', etc.
          title: '" . $alertMessage . "'
          });
          });
          </script>";
  }
  ?>
  <!-- END: Toast -->
  <!-- Main Content -->
  <main
    :class="[$store.app.sidebar && $store.app.menu=='vertical'?'w-full xl:ltr:ml-[280px] xl:rtl:mr-[280px] xl:w-[calc(100%-280px)]':'w-full',$store.app.sidebar && $store.app.menu=='hovered'?'w-full xl:ltr:ml-[80px] xl:w-[calc(100%-80px)] xl:rtl:mr-[80px]':'w-full', $store.app.menu == 'horizontal' && 'xl:!pt-[118px]', $store.app.contrast=='high'?'bg-neutral-0 dark:bg-neutral-904':'bg-neutral-20 dark:bg-neutral-903']"
    class="w-full text-neutral-700 min-h-screen dark:text-neutral-20 pt-[60px] md:pt-[66px] duration-300">


    <?php echo $contents; ?>

  </main>

  <!-- Footer -->
  <footer
    :class="[$store.app.sidebar && $store.app.menu=='vertical'?'w-full xl:ltr:ml-[280px] xl:rtl:mr-[280px] xl:w-[calc(100%-280px)]':'w-full',$store.app.sidebar && $store.app.menu=='hovered'?'w-full xl:ltr:ml-[80px] xl:w-[calc(100%-80px)] xl:rtl:mr-[80px]':'w-full']"
    class="footer bg-neutral-0 dark:bg-neutral-904 text-neutral-700 dark:text-neutral-20">
    <div :class="$store.app.menu=='horizontal' ? 'max-w-[1704px] mx-auto':''"
      class="flex flex-col items-center justify-center gap-3 px-4 py-5 lg:flex-row lg:justify-between xxl:px-8 xxl:py-6">
      <p class="text-sm max-md:w-full max-md:text-center">
        Copyright @ <span id="current-year"></span>
        <a class="text-primary-300 font-medium" href="#"> PJ2 DPUPR BERAU - 2024 </a>
        . All Rights Reserved
      </p>


    </div>
  </footer>


  <!-- js libraries and custom scripts -->
  <script src="<?php echo base_url(); ?>/assets/Softify/Softify/dist/assets/js/libs/tom-select.js"></script>
  <script src="<?php echo base_url(); ?>/assets/Softify/Softify/dist/assets/js/libs/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/Softify/Softify/dist/assets/js/libs/alpine.collapse.js"></script>
  <script src="<?php echo base_url(); ?>/assets/Softify/Softify/dist/assets/js/libs/alpine.persist.js"></script>
  <script defer src="<?php echo base_url(); ?>/assets/Softify/Softify/dist/assets/js/libs/alpine.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/Softify/Softify/dist/assets/js/libs/nice-select2.js"></script>
  <script src="<?php echo base_url(); ?>/assets/Softify/Softify/dist/assets/js/libs/apexcharts.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/Softify/Softify/dist/assets/js/charts.js"></script>
  <script src="<?php echo base_url(); ?>/assets/Softify/Softify/dist/assets/js/libs/snackbar.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/Softify/Softify/dist/assets/js/libs/sweetalert.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/Softify/Softify/dist/assets/js/libs/simple-datatable.js"></script>



  <script>
    document.addEventListener('alpine:init', () => {
      Alpine.data('chart', () => ({
        balanceStats: null,
        expenseCategories: null,
        init() {
          isDark = this.$store.app.theme === 'dark' ? true : false
          isRtl = this.$store.app.dir === 'rtl' ? true : false

          setTimeout(() => {
            this.balanceStats = new ApexCharts(this.$refs.balanceStats, this.balanceStatsOptions)
            this.balanceStats.render()

            this.expenseCategories = new ApexCharts(this.$refs.expenseCategories, this.expenseCategoriesOptions)
            this.expenseCategories.render()
          }, 300)

          this.$watch('$store.app.theme', () => {
            this.refreshOptions()
          })

          this.$watch('$store.app.rtlClass', () => {
            this.refreshOptions()
          })
        },

        refreshOptions() {
          isDark = this.$store.app.theme === 'dark' ? true : false
          isRtl = this.$store.app.dir === 'rtl' ? true : false
          this.balanceStats.updateOptions(this.balanceStatsOptions)
          this.expenseCategories.updateOptions(this.expenseCategoriesOptions)
        },

        get balanceStatsOptions() {
          return {
            chart: {
              height: 370,
              type: 'area',
              toolbar: {
                show: false
              },
              animations: {
                enabled: true,
                easing: 'easeinout',
                speed: 800
              }
            },
            series: [
              {
                name: 'This Years',
                data: [0, 100, 30, 165, 85, 205, 105, 245, 75, 225, 150, 230]
              },
              {
                name: 'Last Years',
                data: [0, 60, 24, 88, 50, 112, 57, 130, 36, 108, 70, 120]
              }
            ],
            dataLabels: {
              enabled: false
            },
            stroke: {
              curve: 'smooth',
              lineCap: 'round',
              width: 2,
              dashArray: [5, 0],
              colors: ['#FFC861', '#2C7BE5']
            },
            xaxis: {
              categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
              axisBorder: {
                show: false
              }
            },
            yaxis: {
              min: 0,
              max: 300,
              tickAmount: 5,
              labels: {
                formatter: function (v) {
                  return v + ''
                }
              }
            },
            legend: {
              show: true,
              offsetY: 10,
              markers: {
                width: 6,
                height: 6
              }
            },
            colors: ['#FFC861', '#2C7BE5'],
            fill: {
              type: 'gradient',
              colors: ['rgba(255, 200, 97, 0.31)', 'rgba(32, 183, 87, 0.31)'],
              gradient: {
                shadeIntensity: 1,
                opacityFrom: 0.9,
                opacityTo: 0.3,
                stops: [0, 100]
              }
            },
            responsive: [
              {
                breakpoint: 570,
                options: {
                  chart: {
                    height: 250
                  }
                }
              },
              {
                breakpoint: 400,
                options: {
                  chart: {
                    height: 200
                  }
                }
              }
            ]
          }
        },
        get expenseCategoriesOptions() {
          return {
            series: [14, 23, 21, 17, 15, 10, 12, 17, 21],
            chart: {
              height: 350,
              type: 'polarArea'
            },
            colors: ['#2C7BE5', '#8E33FF', '#FFAB00', '#FF5630', '#5157D7', '#22C55E', '#C520FF', '#F043C0', '#00B8D9'],
            labels: ['Category 01', 'Category 02', 'Category 03', 'Category 04', 'Category 05', 'Category 06', 'Category 07', 'Category 08', 'Category 09'],
            stroke: {
              width: 2
            },
            fill: {
              opacity: 1
            },
            responsive: [
              {
                breakpoint: 1820,
                options: {
                  chart: {
                    height: 450
                  }
                }
              },
              {
                breakpoint: 1200,
                options: {
                  chart: {
                    height: 500
                  }
                }
              }
            ],
            dataLabels: {
              enabled: true,
              style: {
                fontSize: '12px'
              },
              textAnchor: 'end',
              background: {
                enabled: false
              }
            },
            yaxis: {
              labels: {
                formatter: function (val) {
                  return val + '%'
                }
              }
            },
            plotOptions: {
              polarArea: {
                rings: {
                  strokeWidth: 1
                },
                spokes: {
                  strokeWidth: 1
                }
              }
            },
            legend: {
              offsetX: isRtl ? -50 : 50,
              offsetY: window.innerWidth > 767 ? 6 : window.innerWidth > 1500 ? 14 : 0,
              itemMargin: {
                vertical: window.innerWidth > 767 ? 2 : window.innerWidth > 1500 ? 4 : 0
              },
              horizontalAlign: 'center',
              position: window.innerWidth > 1500 ? 'right' : 'bottom',
              markers: {
                offsetX: isRtl ? 6 : -6,
                width: 8,
                height: 8
              }
            }
          }
        }
      }))
    })
  </script>
</body>

</html>