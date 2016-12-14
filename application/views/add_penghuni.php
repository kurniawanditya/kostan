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
                    <a class="navbar-brand" href="#">Tambah Penghuni</a>
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
                    <div class="col-lg-8 col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Tambah Penghuni</h4>
                                <h4> Kamar No . 
                                <?php
                                  $data=$this->uri->segment(3);
                                  echo$data;?>
                                </h4>

                            </div>
                            <div class="content">
                                <form action="<?php echo base_url(). 'Kamar/'; ?>" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="hidden" name="nokamar" value="<?php echo$data; ?>">
                                                <label>Nama Penghuni</label>
                                                <input type="text" class="form-control border-input"  placeholder="Nama Penghuni" name="nama_penghuni">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Pembayaran</label>
                                                <input type="text" class="form-control border-input"  placeholder="Input Pembayaran" name="pembayaran">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Upload KTP</label>
                                            <input type="file" class="form-control border-input" name="ktp">
                                        </div>
                                        <div class="col-md-6">
                                            
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Submit</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
<?php $this->load->view('footer')?>
