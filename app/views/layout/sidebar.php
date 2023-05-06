<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main Menu</span>
                </li>
                <li class="submenu active">
                    <a href="#"><i class="feather-grid"></i> <span> Dashboard</span> <span
                        class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="<?php echo base_url('home')?>" class="active">Admin Dashboard</a></li>

                                </ul>
                            </li>
                                <li class="submenu">
                                    <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Draws</span> <span
                                        class="menu-arrow"></span></a>
                                        <ul>
                                            <li><a href="<?php echo base_url('draw/addDraw')?>">Create Draw</a></li>
                                            <li><a href="<?php echo base_url('draw/index')?>">Draws List</a></li>
                                            <li><a href="<?php echo base_url('draw/allDrawWinners')?>">Draw Winners</a></li>
                                        </ul>
                                </li>              
                            <li class="submenu" hidden>
                                <a href="#"><i class="fas fa-graduation-cap"></i> <span> QR Code Generator</span> <span
                                    class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="<?php echo base_url('QrcodeGenerator/qrcode')?>">QR Codes</a></li>
                                        <?php //}?>
                                    </ul>
                                </li>
                            
                                <li class="submenu">
                                    <a href="#"><i class="fas fa-users"></i> <span> Users </span> <span
                                            class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="<?php echo base_url('staff/index')?>">Users</a></li>
                                        <li hidden><a href="<?php echo base_url('staff/drawUsers')?>">Draw Users</a></li>
                                        <li hidden><a href="<?php echo base_url('management/roles')?>">Roles</a></li>
                                    </ul>
                                </li> 
                                    <li class="submenu">
                                        <a href="#"><i data-feather="bar-chart-2"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
                                        <ul>
                                            <li><a href="<?php echo base_url('draw/drawSpins')?>">Draw Results</a></li>
                                            <!-- <li><a href="<?php //echo base_url('reports/usersReport')?>">Users Report</a></li> -->
                                        </ul>
                                    </li>                       
                                    </ul>
                                </div>
                            </div>
                        </div>