<ul class="nav">
    <li <?php if($u=='Home' or $u==''){echo "class='active'";} ?>>
        <a href="<?php echo base_url();?>Home">
            <i class="ti-panel"></i>
            <p>Dashboard</p>
        </a>
    </li>
    <li <?php if($u=='Kamar'){echo "class='active'";} ?>>
          <a href="<?php echo base_url();?>Kamar">
            <i class="ti-home"></i>
            <p>Kamar</p>
        </a>
    </li>
    <li <?php if($u=='Pemasukan'){echo "class='active'";} ?>>
        <a href="<?php echo base_url();?>Pemasukan">
            <i class="ti-wallet"></i>
            <p>Pemasukan</p>
        </a>
    </li>
    <li <?php if($u=='Keluhan'){echo "class='active'";} ?>>
      <a href="<?php echo base_url();?>Keluhan">
            <i class="ti-pulse"></i>
            <p>Keluhan</p>
        </a>
    </li>
    <li <?php if($u=='Pengumuman'){echo "class='active'";} ?>>
          <a href="<?php echo base_url();?>Pengumuman">
            <i class="ti-announcement"></i>
            <p>Pengumuman</p>
        </a>
    </li>
    <li <?php if($u=='User'){echo "class='active'";} ?>>
        <a href="user.html">
            <i class="ti-user"></i>
            <p>User Profile</p>
        </a>
    </li>
</ul>
