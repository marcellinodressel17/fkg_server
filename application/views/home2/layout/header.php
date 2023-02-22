<!DOCTYPE html>

  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url('assets/logo/icon.png') ?>" type="image/x-icon">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!-- swiper css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/home/swiper-bundle.min.css'); ?>">
    
    <!-- css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/home/styles.css'); ?>">

    <title><?= $title; ?></title>
  </head>
  <body>
    <header class="header" id="header">
      <nav class="nav container">
        <a href="<?= base_url('/'); ?>" class="nav__logo">
          <img src="<?= base_url('assets/logo/eresta_dev.png'); ?>" width="100" height="100">
        </a>

      <div class="nav__menu">
        <ul class="nav__list">
          <li class="nav__item">
            <a href="#home" class="nav__link active-link">
              <i class='bx bxs-home'></i>
              <span>Home</span>
            </a>
          </li>

          <li class="nav__item">
            <a href="#popular" class="nav__link">
              <i class='bx bx-building-house'></i>
              <span>Portofolio</span>
            </a>
          </li>

          <li class="nav__item">
            <a href="#value" class="nav__link">
              <i class='bx bx-award'></i>
              <span>Value</span>
            </a>
          </li>

          <li class="nav__item">
            <a href="#contact" class="nav__link">
              <i class='bx bx-phone'></i>
              <span>Contact</span>
            </a>
          </li>
        </ul>
      </div>

      <!-- theme change button -->
      <i class='bx bx-moon change-theme' id="theme-button"></i>

      <a href="https://wa.me/62895337261274" class="button nav__button">
        Chat Me
      </a>

  </nav>
</header>