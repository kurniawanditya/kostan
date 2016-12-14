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
                    <a class="navbar-brand" href="#">Pengumuman</a>
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
                        <a href="<?php echo base_url();?>Pengumuman/tambahpengumuman"><button type="submit" class="btn btn-success btn-fill btn-wd">Tambah Pengumuman</button></a>
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
                                <h4 class="title">List Pengumuman</h4>
                                <p class="category"></p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                      <th>ID</th>
                                      <th>Isi Pengumuman</th>
                                      <th>Status</th>
                                      <th>Created </th>
                                      <th>Action </th>
                                    </thead>
                                    <tbody>
                                    <?php 
                                      if($pengumuman->num_rows()<=0){?>
                                        <tr>
                                          <td colspan="5" class="backtd"><center>Kosong</center></td>
                                        </tr>
                                      <?php }
                                    else{?>
                                    <?php foreach ($pengumuman->result() as $k): ?>
                                      <tr>
                                          <td><?php echo$k->id_pengumuman; ?></td>
                                          <td><?php echo$k->isi; ?></td>
                                          <td><?php echo$k->Status; ?></td>
                                          <td><?php echo$k->created_date; ?></td>
                                          <td> <a href="Pengumuman/hapus_pengumuman/<?php echo $k->id_pengumuman;?>"><i class="ti-trash"></i></a>
                                      <a href="Kamar/edit_kamar/<?php echo $k->id_pengumuman;?>"><i class="ti-pencil"></i></a></td>
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
