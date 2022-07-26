 <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
                        <?php
            if($role == "bagkeuangan"){ ?>
              <li class="active"><a class="nav-link" href="<?= base_url('Pengajuan/bagKeuangan/');?>"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
              <li class="active"><a class="nav-link" href="<?= base_url('Pengajuan/bagKeuangan/listkegiatan');?>"><i class="fas fa-user"></i> <span>Daftar Pengajuan</span></a></li>
              <li class="active"><a class="nav-link" href="<?= base_url('Pengajuan/bagKeuangan/DaftarSBM');?>"><i class="fas fa-user"></i> <span>Kelola SBM</span></a></li>
              <li class="active"><a class="nav-link" href="<?= base_url('Pengajuan/bagKeuangan/listkegiatan');?>"><i class="fas fa-user"></i> <span>tes</span></a></li>
            <?php }else { ?>
                            <li class="active"><a class="nav-link" href="<?= base_url('Approval/Approval/');?>"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
              <li class="active"><a class="nav-link" href="<?= base_url('Approval/Approval/daftarapprove');?>"><i class="fas fa-user"></i> <span>Daftar Approval</span></a></li>
              <li class="active"><a class="nav-link" href="<?= base_url('Pengajuan/pengajuan/listkegiatan');?>"><i class="fas fa-user"></i> <span>Daftar Disposisi</span></a></li>


          <?php  } ?>
          </ul>

            
        </aside>
      </div>
      <div class="main-content">
