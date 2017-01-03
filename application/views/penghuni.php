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
                    <a class="navbar-brand" href="#">Penghuni Kostan</a>
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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Daftar Penghuni Kostan</h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                      <th>Nomor</th>
                                      <th>Nama</th>
                                      <th>Lihat KTP</th>
                                      <th>Status</th>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($penghuni as $ph) {?>
                                        <tr>
                                          <td><?php echo $ph->id_penghuni;?></td>
                                          <td><?php echo $ph->nama_penghuni;?></td>
                                          <td><img style="max-width:50px;" src="<?php echo base_url(); ?>assets/ktp/<?php echo $ph->ktp;?>.jpg"></td>
                                          <td><?php echo $ph->status;?></td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php $this->view('footer');?>
