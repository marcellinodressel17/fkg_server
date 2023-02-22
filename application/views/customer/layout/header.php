<!DOCTYPE html
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/customer/style.css') ?>">
</head>

<body>

    <div class="sidebar">
        <div class="sidebar-brand">
            <div class="brand-flex">
                <img src="<?= base_url('assets/logo/icon.png') ?>" width="40px" alt="">

                <div class="brand-icons">
                    <span class="las la-bell"></span>
                    <span class="las la-user-circle"></span>
                </div>
            </div>
        </div>

        <div class="sidebar-main">
            <div class="sidebar-user">
                <img src="<?= base_url('assets/user/user.png'); ?>" alt="">
                <div>
                    <h3>Laurent Bagaskara</h3>
                    <span>bagaskara@gmail.com</span>
                </div>
            </div>

            <div class="sidebar-menu">
                <div class="menu-head">
                    <span>Dashboard</span>
                </div>
                <ul>
                    <li>
                        <a href="<?= base_url('customer/customer/') ?>">
                            <span class="las la-tasks"></span>
                            My List
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="las la-user-circle"></span>
                            My Profile
                        </a>
                    </li>
                </ul>

                <div class="menu-head">
                    <span>Application</span>
                </div>
                <ul>
                    <li>
                        <a href="">
                            <span class="las la-handshake"></span>
                            Agreement Letter
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="las la-file-invoice"></span>
                            Payment
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="las la-share-alt"></span>
                            Social Media
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="las la-envelope"></span>
                            Email
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="las la-address-card"></span>
                            About Eresta Developer
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>