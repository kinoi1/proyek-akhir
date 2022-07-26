<?php
if ($role == "unit") {
  $jml = $this->db->query("SELECT * FROM tb_notifikasi where tujuan='$nama' AND status= 0")->num_rows();
}else {
  $jml = $this->db->query("SELECT * FROM tb_notifikasi where tujuan='$role' AND nama='$nama' AND status= 0")->num_rows();
}
  if($jml > 0){
    $beep = "beep";
  }else{
    $beep = '';
  }
if ($role == "unit") {
  $notif_unread = $this->db->query("SELECT * FROM tb_notifikasi where tujuan='$nama' AND status= 0 ORDER BY id DESC")->result();
  $notif_read = $this->db->query("SELECT * FROM tb_notifikasi where tujuan='$nama'AND status=1 ORDER BY id DESC")->result();

}else{
  $notif_unread = $this->db->query("SELECT * FROM tb_notifikasi where tujuan='$role' AND nama='$nama' AND status= 0 ORDER BY id DESC")->result();
  $notif_read = $this->db->query("SELECT * FROM tb_notifikasi where tujuan='$role'AND nama='$nama' AND status=1 ORDER BY id DESC")->result();

}
 ?>

<div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
            </div>
            </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg <?= ' '.$beep;?>" ><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifications
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <?php  foreach($notif_unread as $row){ ?>
              <a href="<?= base_url('notifikasi/notifikasi/notif/'.$row->id);?>" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="<?= base_url('assets/stisla-master/assets/img/avatar/avatar-1.png');?>" class="rounded-circle">
                    <div class="is-online"></div>
                  </div>
                <div class="dropdown-item-desc">
                  <b><?= $row->nama;?></b> <?= $row->message;?>
                  <!--<div class="time">12 Hours Ago</div>-->
                </div>
              </a>
              <?php }  ?>
              <?php  foreach($notif_read as $res){ ?>
              <a href="<?= base_url('notifikasi/notifikasi/notif/'.$res->id);?>" class="dropdown-item ">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="<?= base_url('assets/stisla-master/assets/img/avatar/avatar-1.png');?>" class="rounded-circle">
                    <div class="is-online"></div>
                  </div>
                <div class="dropdown-item-desc">
                  <b><?= $res->nama;?></b> <?= $res->message;?>
                  <!--<div class="time">12 Hours Ago</div>-->
                </div>
              </a>
              <?php }  ?>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown" ><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="<?= base_url('assets/stisla-master/assets/img/avatar/avatar-1.png')?>" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block"><?= $nama;?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="<?= base_url('Profile')?>" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="features-activities.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="<?= base_url('Login')?>" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>

          </li>

        </ul>

        <?php

          if(isset($sticky_bar) == FALSE){

          }else {
            echo $sticky_bar;
          }
        ?>
      </nav>
