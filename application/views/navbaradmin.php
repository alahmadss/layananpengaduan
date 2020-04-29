<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></a>
                <div class="top-left-part">
                    <a class="logo" href="index.html">
                        <b>
                            <img src="<?php echo base_url('assets/plugins/images/pixeladmin-logo.png')?>" alt="home" />
                        </b>
                        <span class="hidden-xs">
                            <img src="<?php echo base_url('assets/plugins/images/pengaduan5.png')?>" alt="home" />
                            
                        </span>
                    </a>
                </div>
                <ul class="nav navbar-top-links navbar-left m-l-20 hidden-xs">
                    <li>
                        <form role="search" class="app-search hidden-xs">
                            <input type="text" placeholder="Cari..." class="form-control"> <a href=""><i class="fa fa-search"></i></a>
                        </form>
                    </li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="profile-pic" href="#"> <b class="hidden-xs">
                            <?php echo $this->session->userdata('ses_username') ?></b> </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li style="padding: 10px 0 0;">
                        <a href="<?php echo base_url('admin')?>" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i><span class="hide-menu">Beranda</span></a>
                    </li>
                    <li>
                        <a href="" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i><span class="hide-menu">Tabel</span>&nbsp;<span class="fa fa-angle-down fa-fw"></span></a>
                        <ul class="nav child_menu">
                            <li>
                                <a href="<?php echo base_url('admin/listlapor')?>" class="waves-effect"><i class="fa fa-plus-square fa-fw" aria-hidden="true"></i><span class="hide-menu">Tabel Daftar Pengaduan </span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">Form</span>&nbsp;<span class="fa fa-angle-down fa-fw"></span></a>
                        <ul class="nav child_menu">
                            <li>
                                <a href="<?php echo base_url('admin/inputlapor')?>" class="waves-effect"><i class="fa fa-plus-square fa-fw" aria-hidden="true"></i><span class="hide-menu">Form Pengaduan </span></a>
                            </li>
                        </ul>
                    </li>
                    <li style="padding: 10px 0 0;">
                        <a href="<?php echo base_url('admin/user')?>" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">User List</span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('login/logout')?>" onclick="alert('Anda berhasil logout');" class="waves-effect"><i class="fa fa-external-link fa-fw" aria-hidden="true"></i><span class="hide-menu">Logout</span></a>
                    </li>
                    <!-- <li>
                        <a href="map-google.html" class="waves-effect"><i class="fa fa-globe fa-fw" aria-hidden="true"></i><span class="hide-menu">Google Map</span></a>
                    </li>
                    <li>
                        <a href="blank.html" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i><span class="hide-menu">Blank Page</span></a>
                    </li>
                    <li>
                        <a href="404.html" class="waves-effect"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i><span class="hide-menu">Error 404</span></a>
                    </li> -->
                </ul>
            </div>
        </div>