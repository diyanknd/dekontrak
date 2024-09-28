<!doctype html>
<html dir="ltr" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/Softify/Softify/dist/asstes/images/favicon.ico"
    type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet"
    href="<?php echo base_url(); ?>/assets/Softify/Softify/dist/assets/fonts/line-awesome/css/line-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/Softify/Softify/dist/assets/css/animate.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/Softify/Softify/dist/assets/css/tom-select.min.css" />
    <title>Dekontrak - DPUPR BERAU</title>
    <script defer src="<?php echo base_url(); ?>/assets/Softify/Softify/dist/assets/js/app.js"></script>
    <link href="<?php echo base_url(); ?>/assets/Softify/Softify/dist/assets/css/style.css" rel="stylesheet">
</head>

<body x-cloak x-data="customizer" :class="$store.app.isDarkMode?'dark':''">
    <!-- loader -->
    <!-- screen loader -->
    <div x-cloak
    class="screen_loader animate__animated duration-700 fixed inset-0 z-[60] grid place-content-center bg-neutral-400">
    <svg viewBox="25 25 50 50">
        <circle r="20" cy="50" cx="50"></circle>
    </svg>
</div>


<!-- Main Content -->
<main class="relative min-h-screen overflow-x-hidden f-center bg-neutral-0 dark:bg-neutral-904">
    <div class="absolute inset-0 overflow-hidden">
        <div
        class="absolute -top-8 -left-8 lg:-top-32 lg:-left-40 size-40 lg:size-[340px] rounded-full bg-secondary-300 opacity-[0.2] blur-[100px]">
    </div>
    <div
    class="absolute -top-8 -right-8 lg:-top-32 lg:-right-40 size-40 lg:size-[340px] rounded-full bg-error-300 opacity-[0.2] blur-[100px]">
</div>
<div
class="absolute -right-8 -bottom-8 lg:-right-40 lg:-bottom-28 size-40 lg:size-[340px] rounded-full bg-info-300 opacity-[0.15] blur-[100px]">
</div>
<div
class="absolute -left-8 -bottom-8 lg:-left-40 lg:-bottom-28 size-40 lg:size-[340px] rounded-full bg-warning-300 opacity-[0.15] blur-[100px]">
</div>
</div>

<div class="container overflow-y-auto">
    <div
    class="grid grid-cols-12 gap-4 xxl:gap-6 items-center relative z-[4] text-neutral-700 dark:text-neutral-20 py-12">
    <div class="col-span-12 lg:col-span-6 xxl:col-span-5">
        <h3 class="mb-4 xl:mb-6">Welcome Back!</h3>
        <p class="mb-7 xl:mb-10">Sign in to your account and join us</p>
        <?php echo form_open_multipart('auth'); ?>
        <div class="form-input mb-4 xl:mb-6">
            <input type="text" id="email"  name="username" placeholder="Enter Email" required />
            <label for="email">Username</label>
        </div>
        <div x-data="{showPass: false}" class="form-input rounded-3xl mb-5">
            <input :type="showPass?'text':'password'" name="password" id="pass2" 
            placeholder="Textfield" />
            <label for="pass2">Password</label>
            <span @click="showPass = !showPass"
            class="absolute ltr:right-5 rtl:left-5 top-1/2 flex size-8 -translate-y-1/2 cursor-pointer items-center justify-center rounded-full duration-300 hover:bg-neutral-40 dark:hover:bg-neutral-700">
            <i x-show="showPass" class="las la-eye text-xl"></i>
            <i x-show="!showPass" class="las la-eye-slash text-xl"></i>
        </span>
    </div>
    <div x-data="{singleOne:''}" class="n20 rounded-3xl mb-5">
              <select x-model="singleOne" id="tom-single-one" data-placeholder="Select item">
               <?php 
            $currentYear = date('Y');
            for ($i = $currentYear + 5; $i >= $currentYear - 5; $i--) {
                $selected = ($i == $currentYear) ? 'selected' : '';
                echo "<option value='$i' $selected>$i</option>";
            }
        ?>
              </select>
            </div>

<button class="btn-primary w-full mb-5">Login</button>

<!-- BEGIN: alert -->

<?php if ($this->session->flashdata('success')): ?>
<div id="success-alert" class="py-3 px-4 md:px-6 lg:px-8 rounded-xl bg-info-300/10 flex justify-between items-center">
  <div class="flex gap-5 items-center">
    <i class="las la-info-circle text-3xl text-info-300"></i>
    <span class="l-text font-medium text-info-300">
      <?= $this->session->flashdata('success'); ?>
    </span>
  </div>
  <span class="cursor-pointer size-9 rounded-full hover:bg-info-300/30 duration-300 f-center" onclick="dismissAlert('success-alert')">
    <i class="las la-times text-2xl text-info-300"></i>
  </span>
</div>
<?php endif; ?>

<?php if ($this->session->flashdata('error')): ?>
<div id="error-alert" class="py-3 px-4 md:px-6 lg:px-8 rounded-xl bg-red-300/10 flex justify-between items-center">
  <div class="flex gap-5 items-center">
    <i class="las la-exclamation-circle text-3xl text-red-300"></i>
    <span class="l-text font-medium text-red-300">
      <?= $this->session->flashdata('error'); ?>
    </span>
  </div>
  <span class="cursor-pointer size-9 rounded-full hover:bg-red-300/30 duration-300 f-center" onclick="dismissAlert('error-alert')">
    <i class="las la-times text-2xl text-red-300"></i>
  </span>
</div>
<?php endif; ?>

<!-- END: alert -->

<script>
  function dismissAlert(alertId) {
    document.getElementById(alertId).style.display = 'none';
  }
</script>



<?php echo form_close(); ?>
</div>
<div class="col-span-12 lg:col-span-6 xxl:col-start-7 flex justify-center">
    <div
    class="size-72 sm:size-[450px] xxl:size-[636px] rounded-full bg-neutral-30 dark:bg-neutral-700 f-center">
    <img src="<?php echo base_url(); ?>/assets/Softify/Softify/dist/assets/images/login-1.png" alt="" />
</div>
</div>
</div>
</div>
</main>

<script src="<?php echo base_url(); ?>/assets/Softify/Softify/dist/assets/js/libs/alpine.collapse.js"></script>
<script src="<?php echo base_url(); ?>/assets/Softify/Softify/dist/assets/js/libs/alpine.persist.js"></script>
<script defer src="<?php echo base_url(); ?>/assets/Softify/Softify/dist/assets/js/libs/alpine.min.js"></script>

<script src="<?php echo base_url(); ?>/assets/Softify/Softify/dist/assets/js/libs/tom-select.js"></script>
</body>

</html>