<div class="header">

            <div class="header-left">
                <!-- <a href="<?php //echo base_url('home')?>" class="logo">
                    <img src="<?php //echo base_url() ?>res/assets/img/spin.jpg" alt="Logo">
                </a>
                <a href="<?php //echo base_url('home')?>" class="logo logo-small">
                    <img src="<?php //echo base_url() ?>res/assets/img/spin.jpg" alt="Logo" width="30" height="30">
                </a> -->
            </div>
            <div class="menu-toggle">
                <a href="javascript:void(0);" id="toggle_btn">
                    <i class="fas fa-bars"></i>
                </a>
            </div>

            <a class="mobile_btn" id="mobile_btn">
                <i class="fas fa-bars"></i>
            </a>

            <ul class="nav user-menu">

                <li class="nav-item zoom-screen me-2">
                    <a href="#" class="nav-link header-nav-list win-maximize">
                        <img src="<?php echo base_url() ?>res/assets/img/icons/header-icon-04.svg" alt="">
                    </a>
                </li>

                <li class="nav-item dropdown has-arrow new-user-menus">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <span class="user-img">
                            <img class="rounded-circle" src="<?php echo base_url() ?>res/assets/img/profiles/user.jpg" width="31"
                                alt="Soeng Souy">
                            <div class="user-text">
                                <h6><?php echo $this->session->userdata('user_aob')->name?></h6>
                                <p class="text-muted mb-0"><?php echo ucfirst($this->session->userdata('user_aob')->role);?></p>
                            </div>
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <img src="<?php echo base_url() ?>res/assets/img/profiles/user.jpg" alt="User Image"
                                    class="avatar-img rounded-circle">
                            </div>
                            <div class="user-text">
                                <h6><?php echo $this->session->userdata('user_aob')->name?></h6>
                                <!-- <p class="text-muted mb-0">Administrator</p> -->
                            </div>
                        </div>
                        <!-- <a class="dropdown-item" href="#">My Profile</a> -->
                        <a class="dropdown-item" href="<?php echo base_url('staff/updatePass')?>">Change Password</a>
                        <a class="dropdown-item" href="<?php echo base_url();?>auth/logout">Logout</a>
                    </div>
                </li>

            </ul>

        </div>