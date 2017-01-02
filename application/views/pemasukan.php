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
                    <a class="navbar-brand" href="#">Pemasukan</a>
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
                        <a href="<?php echo base_url();?>pemasukan/tambahpemasukan"><button type="submit" class="btn btn-success btn-fill btn-wd">Tambah pemasukan</button></a>
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
                                <h4 class="title">List pemasukan</h4>
                                <p class="category"></p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                      <th>ID</th>
                                      <th>Nomor Kamar</th>
                                      <th>Nama Penghuni</th>
                                      <th>Tagihan </th>
                                      <th>Dibayar </th>
                                      <th>Kurang</th>
                                      <th>Tanggal Tagihan </th>
                                      <th>Status </th>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($pemasukan as $k): ?>
                                      <tr>
                                          <td><?php echo$k['id_tagihan'];?></td>
                                          <td><?php echo$k['nama_kamar'];?></td>
                                          <td><?php echo$k['nama_penghuni'];?></td>
                                          <td><?php echo$k['tagihan'];?></td>
                                          <td><?php echo$k['dibayar'];?></td>
                                          <td><?php echo$k['kurang'];?></td>
                                          <td><?php echo$k['tgl_tagihan'];?></td>
                                          <td><?php echo$k['status'];?></td>
                                        </tr>
                                       
                                    <?php endforeach ?>
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
