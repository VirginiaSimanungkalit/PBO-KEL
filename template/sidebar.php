

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=  $main_url ?>dashboard.php" class="brand-link">
      <img src="<?=  $main_url ?>asset/image" alt=" Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">POSAPP</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= 'aby sanara' ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="<?=  $main_url ?>dashboard.php" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt text-sm"></i>
                
                <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-folder text-sm"></i>
                    <p>
                        Master
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon text-sm"></i>
                            <p>Supplier</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon text-sm"></i>
                            <p>Customer</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= $main_url ?>barang" class="nav-link <?= menuBarang() ?>">
                            <i class="far fa-circle nav-icon text-sm"></i>
                            <p>Barang</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-header">Transaksi</li>
            <li class="nav-item">
                <a href="<?= $main_url ?>pembelian" class="nav-link">
                    <i class="nav-icon fas fa-shopping-cart text-sm"></i>
                    <p>Pembelian</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= $main_url ?>penjualan" class="nav-link">
                    <i class="nav-icon fas fa-file-invoice text-sm"></i>
                    <p>Penjualan</p>
                </a>
            </li>
            <li class="nav-header">Report</li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-chart-pie text-sm"></i>
                    <p>Laporan Pembelian</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-chart-line text-sm"></i>
                    <p>Laporan Penjualan</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-warehouse text-sm"></i>
                    <p>Laporan Stok</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-cog text-sm"></i>
                    <p>
                        Pengaturan
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?= $main_url ?>user/data-user.php" class="nav-link">
                            <i class="far fa-circle nav-icon text-sm"></i>
                            <p>user</p>
                        </a>
                    </li>
                </ul>
            </li>
            
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>