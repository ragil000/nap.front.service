<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url('admin_template')?>/assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="<?=base_url('admin_template')?>/assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>
            Notification App
        </title>
        <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
        <!-- CSS Files -->
        <link href="<?=base_url('admin_template')?>/assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />

        <?php if(!empty($css_plugins)) $this->load->view($css_plugins); ?>
        
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="<?=base_url('admin_template')?>/assets/demo/demo.css" rel="stylesheet" />
        <!-- custom css -->
        <link href="<?=base_url('admin_template')?>/assets/css/custom.css" rel="stylesheet" />
    </head>

    <body class="">
        <?php
            $checkRole = [
                'user' => 'style="display: none;"',
                'superAdmin' => ''
            ];
        ?>
        <div class="wrapper">
            <div class="sidebar" data-color="azure" data-background-color="white">
                <div class="logo">
                    <a href="<?=$this->session->userdata('penyihir')['role'] == 'user' ? base_url('/') : base_url('admin/')?>" class="simple-text logo-normal">
                        Notification App
                    </a>
                </div>
                <div class="sidebar-wrapper">
                    <ul class="nav">
                        <li class="nav-item active  " id="menu-dashboard" <?=$checkRole[$this->session->userdata('penyihir')['role']]?>>
                            <a class="nav-link" href="<?=base_url('admin/')?>">
                                <i class="material-icons">dashboard</i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item " id="menu-member" <?=$checkRole[$this->session->userdata('penyihir')['role']]?>>
                            <a class="nav-link" href="<?=base_url('admin/member')?>">
                                <i class="material-icons">person</i>
                                <p>Member</p>
                            </a>
                        </li>
                        <li class="nav-item " id="menu-task">
                            <a class="nav-link" href="<?=$this->session->userdata('penyihir')['role'] == 'user' ? base_url('/#login-card') : base_url('admin/schedule')?>">
                                <i class="material-icons">content_paste</i>
                                <p>Tugas</p>
                            </a>
                        </li>
                        <li class="nav-item active-pro " id="menu-setting">
                            <a class="nav-link" href="<?=$this->session->userdata('penyihir')['role'] == 'user' ? base_url('/logout') : base_url('admin/logout')?>">
                                <i class="material-icons">logout</i>
                                <p>Keluar</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="main-panel">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                    <div class="container-fluid">
                        <div class="navbar-wrapper">
                            <a class="navbar-brand" href="javascript:;"><?=!empty($title) ? $title : ''?></a>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="navbar-toggler-icon icon-bar"></span>
                            <span class="navbar-toggler-icon icon-bar"></span>
                            <span class="navbar-toggler-icon icon-bar"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end">
                            <!-- <form class="navbar-form">
                                <div class="input-group no-border">
                                    <input type="text" value="" class="form-control" placeholder="Search...">
                                    <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                        <i class="material-icons">search</i>
                                        <div class="ripple-container"></div>
                                    </button>
                                </div>
                            </form> -->
                            <ul class="navbar-nav">
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="javascript:;">
                                        <i class="material-icons">dashboard</i>
                                        <p class="d-lg-none d-md-block">
                                            Stats
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">notifications</i>
                                        <span class="notification">5</span>
                                        <p class="d-lg-none d-md-block">
                                            Some Actions
                                        </p>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="#">Mike John responded to your email</a>
                                        <a class="dropdown-item" href="#">You have 5 new tasks</a>
                                        <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                                        <a class="dropdown-item" href="#">Another Notification</a>
                                        <a class="dropdown-item" href="#">Another One</a>
                                    </div>
                                </li> -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">person</i>
                                        <p class="d-lg-none d-md-block">
                                            <?=$this->session->userdata('penyihir')['email']?>
                                        </p>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                        <a class="dropdown-item" href="#">Pengaturan</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="<?=base_url('admin/logout')?>">Keluar</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->
                <div class="content">
                    <div class="container-fluid">