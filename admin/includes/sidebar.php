<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background: #161616;">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <h1 class="text-center logo" style="color:#00AE52;font-weight: 700;font-size: 28px;line-height: 42px;">Stay<span class="sub-logo" style="color: #F4F4F4;">cation</span></h1>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="profil.php" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profil
              </p>
            </a>
          </li>
          <?php 
          if ($_SESSION['level']=="Superadmin"){?>
          <li class="nav-item has-treeview">
            <a href="wisata.php" class="nav-link">
              <i class="nav-icon fas fa-map"></i>
              <p>
                Wisata
              </p>
            </a>
          </li>
          <?php }?>
          <?php 
          if ($_SESSION['level']=="Superadmin"){?>
          <li class="nav-item has-treeview">
            <a href="cerita.php" class="nav-link">
              <i class="nav-icon fas fa-history"></i>
              <p>
                Cerita
              </p>
            </a>
          </li>
          <?php }?>
          <?php 
          if ($_SESSION['level']=="admin"){?>
          <li class="nav-item has-treeview">
            <a href="profilhotel.php" class="nav-link">
              <i class="nav-icon fas fa-user-tie"></i>
              <p>
                Profil Hotel
              </p>
            </a>
          </li>
          <?php }?>
          <?php 
          if ($_SESSION['level']=="Superadmin"){?>
          <li class="nav-item has-treeview">
            <a href="hotel.php" class="nav-link">
              <i class="nav-icon fas fa-building"></i>
              <p>
                Hotel
              </p>
            </a>
          </li>
          <?php }?>
          <?php 
          if ($_SESSION['level']=="admin"){?>
          <li class="nav-item">
            <a href="jeniskamar.php" class="nav-link">
              <i class="nav-icon fa fa-bed"></i>
              <p>
                Jenis Kamar
              </p>
            </a>
          </li>
          <?php }?>
          <?php 
          if ($_SESSION['level']=="admin"){?>
          <li class="nav-item">
            <a href="transaksi.php" class="nav-link">
              <i class="nav-icon fas fa-receipt"></i>
              <p>
                Transaksi
              </p>
            </a>
          </li>
          <?php }?>
          <?php 
          if ($_SESSION['level']=="Superadmin"){?>
          <li class="nav-item">
            <a href="pengaturanuser.php" class="nav-link">
              <i class="nav-icon fas fa-user-cog"></i>
              <p>
                Pengaturan User
              </p>
            </a>
          </li>
          <?php }?>
          <li class="nav-item">
            <a href="ubahpassword.php" class="nav-link">
              <i class="nav-icon fas fa-user-lock"></i>
              <p>
                Ubah Password
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="signout.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Sign Out
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>