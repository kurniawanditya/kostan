<?php $this->view('header');?>
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
        </div>
    </nav>


    <div class="content">
      <div class="container-fluid">
          <div class="row">

            <div class="col-lg-12 col-md-12">
                <div class="card card-user">
                    <div class="nav-tool">
                        <a href="<?php echo base_url();?>Kamar/Tambahkamar"><button type="submit" class="btn btn-success btn-fill btn-wd">Tambah Kamar</button></a>
                    </div>
                </div>
            </div>


          </div>
      </div>
        <div class="container-fluid">
            <div class="row">
              <?php for($a=1;$a<=10;$a++){?>
                <div class="col-lg-3 col-md-4">
                    <div class="card card-user">
                        <div class="image" style="background-color:#D53F28;">
                        </div>
                        <div class="content">
                            <div class="author">
                              <img class="avatar border-white" src="<?php echo base_url(); ?>assets/img/faces/face-2.jpg" alt="..."/>
                              <h4 class="title">No Kamar : <?php echo $a;?><br />
                                 <a href="#"><small></small></a>
                              </h4>
                            </div>
                            <p class="description text-center">

                            </p>
                        </div>
                        <hr>
                        <div class="text-center">
                            <div class="row">
                                <div class="col-md-3 col-md-offset-1">
                                    <h5>12<br /><small>Files</small></h5>
                                </div>
                                <div class="col-md-4">
                                    <h5>2GB<br /><small>Used</small></h5>
                                </div>
                                <div class="col-md-3">
                                    <h5>24,6$<br /><small>Spent</small></h5>
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
