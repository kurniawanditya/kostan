<?php $this->load->view('header'); ?>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Kamar</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul  class="nav navbar-nav navbar-right">
                      <li>
                        <a href="#">
      								    <i class="ti-exit"></i>
      								        <p>Logout</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


    <div class="content">
      <div class="container-fluid">
          <div class="row">

            <div class="col-lg-12 col-md-12">
                <div class="card card-user">
                    <div class="nav-tool">
                        <a href="<?php echo base_url();?>Kamar/Tambahkamar"><button type="submit" class="btn btn-success btn-fill btn-wd">Tambah Kamar </button></a>
                    </div>
                </div>
            </div>


          </div>
      </div>
        <div class="container-fluid">
            <div class="row">
              <?php
                foreach ($kamar as $km) {?>
                <div class="col-lg-3 col-md-4">
                    <div class="card card-user">
                        <div class="image"
                            <?php if($km->status=='Tersedia'){
                              echo"style='background-color:#82CC00;'";
                            }
                            else{
                                echo"style='background-color:#D53F28;'";

                            }?>>
                        </div>
                        <div class="content">
                            <div class="author">
                               <?php if($km->status=='Tersedia'){ ?>
                                    <a href="<?php echo base_url();?>Kamar/tambahpenghuni/<?php echo"$km->id_kamar/$km->harga";?>"><img class="avatar border-white" src="<?php echo base_url(); ?>assets/img/9734832.jpg" alt="..."/></a>
                               <?php }
                                else { ?>
                                    <a href="<?php echo base_url();?>Kamar/detailkamar/<?php echo"$km->id_kamar";?>"><img class="avatar border-white" src="<?php echo base_url(); ?>assets/img/9734832.jpg" alt="..."/></a>                

                                <?php } ?>
                            
                                <h4 class="title"><?php echo $km->nama_kamar;?><br />
                                 <small><?php 
                                 $angka=$km->harga;
                                  $jadi = "Rp " . number_format($angka,2,',','.');

                                 echo $jadi; ?>/bulan</small>
                              </h4>
                            </div>
                        </div>
                        <hr>
                        <div class="text-center">
                            <div class="row">
                                <div class="col-md-12">
                                  <h5>
                                    <a href="Kamar/hapus_kamar/<?php echo $km->id_kamar;?>"><i class="ti-trash"></i></a>
                                      <a href="Kamar/edit_kamar/<?php echo $km->id_kamar;?>"><i class="ti-pencil"></i></a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<?php ;} ?>
            </div>
        </div>
    </div>
<?php $this->view('footer');?>
