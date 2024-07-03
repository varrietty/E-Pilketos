<?php
$gkc = $this->db->get('kelas')->result();
?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url('assets/template/backend/') ?>dist/img/avatar5.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $this->session->userdata('userName') ?></p>
                <?php echo $this->session->userdata('identity'); ?></a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Menu</li>
            <li>
                <a href="<?php echo base_url('admin') ?>">
                    <i class="fa fa-home"></i> <span>Dashboard</span>
                </a>
            </li>
            <!-- ./Dashboard -->
            <li>
                <a href="<?php echo base_url('admin/kelas') ?>">
                    <i class="fa fa-list"></i> <span>Kelas</span>
                </a>
            </li>
            <!-- ./Kelas -->
            <li>
                <a href="<?php echo base_url('admin/pemilih') ?>">
                    <i class="fa fa-users"></i> <span>Data Pemilih</span>
                </a>
            </li>
            <!-- ./Data Pemilih -->
            <li>
                <a href="<?php echo base_url('admin/kandidat') ?>">
                    <i class="fa fa-user"></i> <span>Kandidat</span>
                </a>
            </li>
            <!-- ./Laporan -->
            <li class="treeview">
                <a href="#">
                    <i class="ion ion-pie-graph"></i>
                    <span>Realtime Count</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="<?php echo base_url('admin/perolehan') ?>">
                            <i class="ion ion-pie-graph"></i> <span>Hasil Perolehan</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="<?php echo base_url('admin/settings') ?>">
                    <i class="fa fa-wrench"></i> <span>Settings</span>
                </a>
            </li>
            <!-- ./Settings -->
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>