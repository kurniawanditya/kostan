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
                    <a class="navbar-brand" href="#">Keluhan</a>
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
                        <a href="<?php echo base_url();?>keluhan/tambahkeluhan"><button type="submit" class="btn btn-success btn-fill btn-wd">Tambah keluhan</button></a>
                    </div>
                </div>
            </div>


          </div>
      </div>
        <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">List keluhan</h4>
                                <p class="category"></p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                      <th>ID</th>
                                      <th>Isi keluhan</th>
                                      <th>Tanggapan</th>
                                      <th>Status </th>
                                      <th>Tanggal Keluhan </th>
                                      <th>Penghuni</th>
                                    </thead>
                                    <tbody>
                                    <?php 
                                      if($keluhan->num_rows()<=0){?>
                                        <tr>
                                          <td colspan="6" class="backtd"><center>Kosong</center></td>
                                        </tr>
                                      <?php }
                                    else{?>
                                    <?php foreach ($keluhan->result() as $k): ?>
                                      <tr>
                                          <td><?php echo$k->id_keluhan; ?></td>
                                          <td><?php echo$k->isi_keluhan; ?></td>
                                          <td><?php echo$k->tanggapan; ?></td>
                                          <td><?php echo$k->status; ?></td>
                                          <td><?php echo $time=str_replace('/','-',$k->create_at); ?></td>
                                          <td><?php echo$k->id_penghuni; ?></td>
                                      </tr>
                                       
                                    <?php endforeach ?>
                                    <?php }?>
                                        </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php $this->view('footer');?>
