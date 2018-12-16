<div class="navbar-component">
  <!-- Class `area` is a container -->
  <div class="navbar area">
    <!-- Logo -->
    <a href="#" class="brand"><img src="<?php echo base_url('assets/images/logo.png'); ?>" style="width: 200px;"></a>
    <!-- List of links -->
    <nav role="navigation" id="navigation" class="list">
      <a href="#" class="item -link">Dashboard</a>
      <a href="<?php echo site_url('main/bang_tinggi'); ?>" class="item -link">Bangunan Tinggi</a>
      <a href="<?php echo site_url('main/input_rumah'); ?>" class="item -link">Rumah Tinggal</a>
      <li class="dropdown" style="list-style: none;margin-top: 3px;padding-left: 15px;padding-right: 15px;">
        <a id="drop1" href="#" class="dropdown-toggle" style="color: #555;font-size: 14px;" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
          Masukan Data
          <span class="caret"></span>
        </a>
        <ul class="dropdown-menu" role="menu" aria-labelledby="drop1" style="margin: 15% auto;">
          <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo site_url('main/input'); ?>">Bangunan Tinggi</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo site_url('main/input_rumah'); ?>">Rumah Tinggal</a></li>
        </ul>
      </li>
      <a href="<?php echo site_url('main/logout'); ?>" class="item -link">Logout</a>
      <!-- <span class="item"><i class="fa fa-search"></i></span> -->
    </nav>
    <!-- Button to toggle the display menu  -->
    <button data-collapse data-target="#navigation" id="nav" class="toggle">
      <!-- Hamburger icon -->
      <span class="icon"></span>
    </button>
  </div>
</div>