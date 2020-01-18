            <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Dashboard</h3>
              </div>

              
                  <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Pesan <small>HAII</small></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content bs-example-popovers">
                  <?php if($status > 0) { ?>
                  <div class="alert alert-danger alert-dismissible fade in" role="alert"> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>Hai Admin!</strong> Anda Memiliki <?php echo $status ?> <strong>Pesanan</strong> yang belum diverifikasi.
                    
                  </div>
                  <?php } ?>
                  <?php if($status_art > 0) { ?>
                  <div class="alert alert-danger alert-dismissible fade in" role="alert"> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>Hai Admin!</strong> Anda Memiliki <?php echo $status_art ?> <strong>Artikle</strong>  yang belum diverifikasi.
                    
                  </div>
                  <?php } ?>
                  <?php if($status_art == 0 && $status == 0) { ?>
                  <div class="alert alert-info alert-dismissible fade in" role="alert"> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>Hai Admin!</strong> Anda Tidak ada peringatan.
                    
                  </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Overview</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-caret-square-o-right"></i></div>
                  <div class="count"><?php echo $total_menu ?></div>
                  <h3>Jumlah Menu</h3>
                  <p></p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-comments-o"></i></div>
                  <div class="count"><?php echo $total_artikle ?></div>
                  <h3>Jumlah Artikle</h3>
                  <p></p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-sort-amount-desc"></i></div>
                  <div class="count"><?php echo $total_gallery ?></div>
                  <h3>Jumlah Gallery</h3>
                  <p></p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-check-square-o"></i></div>
                  <div class="count">179</div>
                  <h3>Jumlah Promo</h3>
                  <p></p>
                </div>
              </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Menu Terbaru</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <?php foreach($images as $image) : ?>
                      <div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="<?php echo base_url('assets2/img/Menu/'.$image->file_foto); ?>" alt="image" />
                            <div class="mask">
                              <p>Your Text</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p><?php echo $image->deskripsi; ?></p>
                          </div>
                        </div>
                      </div>
                      <?php endforeach; ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Artikle</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">Judul Artikle </th>
                            <th class="column-title">Penulis</th>
                            <th class="column-title">Kategori </th>
                            <th class="column-title no-link last"><span class="nobr">Status </th>
                          </tr>
                        </thead>

                        <tbody>
                          <?php foreach($artikle as $row) : ?>
                          <tr class="even pointer">
                            <td class=" "><?php echo $row->judul ?></td>
                            <td class=" "><?php echo $row->penulis ?></td>
                            <td class=" "><?php echo $row->nama_kategori ?></td>
                            <td class=" "><span class="label label-warning"><?php echo $row->status ?></span></td>
                            </td>
                          </tr>
                          </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    <script src="<?php echo base_url();?>assets2/vendors/sweetalert2/sweetalert2.all.min.js"></script>
    <script>
  Swal.fire(
  'HALOOO!',
  'Selamat Datang!',
  'success'
)
      </script>