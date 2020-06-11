<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading"></div>
                    <div class="sidebar">
                        <!-- Sidebar user (optional) -->
                        <div class="user-panel mt-3 pb-3 mb-3 d-flex">

                            <div class="info">
                                <li class="na navbar-nav navbar-right ml-3 mb-5">
                                    <div>Halo <?php echo $this->session->userdata('username') ?></div>
                                </li>
                                <a class="nav-link" href="<?php echo base_url('admin/dashboard_admin'); ?>">
                                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                    Dashboard
                                </a>

                                <div class="sb-sidenav-menu-heading"></div>
                                <a class="nav-link" href="<?php echo base_url('admin/data_barang'); ?>">
                                    <div class="sb-nav-link-icon">
                                        <i class="fas fa-fw fa-database"></i></div>Data Barang
                                </a>

                                <a class="nav-link" href="<?php echo base_url('admin/invoice'); ?>">
                                    <div class="sb-nav-link-icon">
                                        <i class="fas fa-fw fa-file-invoice"></i></div>Invoices
                                </a>
                                <a class="nav-link" href="<?php echo base_url('admin/login'); ?>">
                                    <div class="sb-nav-link-icon">
                                    </div>
                                </a>

                            </div>
                        </div>
                        <div class="sb-sidenav-footer">
                            <div class="small">Logged in as:</div>
                            Admin
                        </div>
        </nav>
    </div>