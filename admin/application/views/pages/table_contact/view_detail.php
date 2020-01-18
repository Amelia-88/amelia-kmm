
        <div class="row mt">
          <div class="col-lg-12">
            <div class="row content-panel">
              <div class="col-md-4 profile-text mt mb centered">
                <div class="right-divider hidden-sm hidden-xs">
                  <h4>1922</h4>
                  <h6>FOLLOWERS</h6>
                  <h4>290</h4>
                  <h6>FOLLOWING</h6>
                  <h4>$ 13,980</h4>
                  <h6>MONTHLY EARNINGS</h6>
                </div>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 profile-text">
                <h3><?php echo $judul ?></h3>
                <!-- <h6>Penulis</h6>
                <p><?php echo $penulis ?></p> -->
                <br>
                <p><a href="<?php echo base_url('cgallery/get_gallery'); ?>"><button class="btn btn-theme"><i class="fa fa-arrow-circle-left"></i> KEMBALI</button></a></p>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 centered">
                <div class="profile-pic">
                  <p><img src="<?php echo base_url('assets/admin/img/upload/'.$gambar); ?>" class="img-circle"></p>  
                </div>
              </div>
              <!-- /col-md-4 -->
            </div>
            <!-- /row -->
          </div>
          <!-- /col-lg-12 -->
          <div class="col-lg-12 mt">
            <div class="row content-panel">
              <div class="panel-heading">
                <ul class="nav nav-tabs nav-justified">
                  <li class="active">
                    <a data-toggle="tab" href="#overview">Overview</a>
                  </li>
                  <!-- <li>
                    <a data-toggle="tab" href="#contact" class="contact-map">Contact</a>
                  </li> -->
                  <li>
                    <a data-toggle="tab" href="#edit">Edit Profile</a>
                  </li>
                </ul>
              </div>
              <!-- /panel-heading -->
              <div class="panel-body">
                <div class="tab-content">
                  <div id="overview" class="tab-pane active">
                    <div class="row">
                      <!--  -->
                  <div class="col-md-6 detailed">
                        <h4>Deskripsi</h4>
                        <div class="row centered mt mb">
                          <div class="col-sm-4">
                           <p>
                            <h3><?php echo $deskripsi ?></h3>
                          </p>
                          </div>
                      <!-- /col-md-6 -->
                    </div>
                    <!-- /OVERVIEW -->
                  </div>
                </div>
              </div>
                  
                  <div id="edit" class="tab-pane">
                    <div class="row">
                      <div class="col-lg-8 col-lg-offset-2 detailed">
                        <h4 class="mb">Personal Information</h4>
                        <form role="form" class="form-horizontal">
                          <div class="form-group">
                            <label class="col-lg-2 control-label"> Avatar</label>
                            <div class="col-lg-6">
                              <input type="file" id="exampleInputFile" class="file-pos">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Company</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="c-name" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Lives In</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="lives-in" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Country</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="country" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Description</label>
                            <div class="col-lg-10">
                              <textarea rows="10" cols="30" class="form-control" id="" name=""></textarea>
                            </div>
                          </div>
                        </form>
                      </div>
                      <div class="col-lg-8 col-lg-offset-2 detailed mt">
                        <h4 class="mb">Contact Information</h4>
                        <form role="form" class="form-horizontal">
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Address 1</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="addr1" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Address 2</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="addr2" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Phone</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="phone" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Cell</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="cell" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="email" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Skype</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="skype" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button class="btn btn-theme" type="submit">Save</button>
                              <button class="btn btn-theme04" type="button">Cancel</button>
                            </div>
                          </div>
                        </form>
                      </div>
                      <!-- /col-lg-8 -->
                    </div>
                    <!-- /row -->
                  </div>
                  <!-- /tab-pane -->
                </div>
                <!-- /tab-content -->
              </div>
              <!-- /panel-body -->
            </div>
            <!-- /col-lg-12 -->
          </div>
          <!-- /row -->
        </div>
      