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
                    <div class="col-lg-5">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Detail Kamar</h4>
                            </div>
                            <div class="content">
                                <ul class="list-unstyled team-members">
                                    <li>
                                    <?php foreach ($dp as $key) {?>

                                    
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Nama
                                                <br />
                                                <span class="text-muted"><?php echo $key['nama_penghuni']; ?></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Tanggal Tagihan
                                                <br />
                                                <span class="text-muted"><?php echo date('d M Y'); ?></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Status
                                                <br />
                                                <span class="text-muted">Dibayar</span>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php $this->view('footer');?>
