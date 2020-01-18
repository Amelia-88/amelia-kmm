<div class="page-title">
              <div class="title_left">
                <h3>Article</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  
                </div>
              </div>
            </div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Table Article <small>Admin</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="datatable-fixed-header" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Judul</th>
                          <th>Penulis</th>
                          <th>Kategori</th>
                          <th>Deskripsi</th>
                          <th>Gambar</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                    <tbody>
                  <?php
                  foreach($artikle as $row){
                  ?>
                  <tr>
                    <td><?php echo $row->judul ?></td>
                    <td><?php echo $row->penulis ?></td>
                     <td><?php echo $row->nama_kategori ?></td>
                      
                      <td><?php echo $row->deskripsi ?></td>
                      <td><img src="<?php echo base_url('assets2/img/Artikle/'.$row->gambar); ?>" alt="<?php echo $row->nama_gambar; ?>" width="100" height="100" /></td>
                  
                    <td>
                      <div class="btn-group">
                      <a href="<?php echo base_url('cartikle/ubah/'.$row->id); ?>" class="btn btn-info fa fa-edit"></a>
                      <a href="<?php echo base_url('cartikle/delete/'.$row->id); ?>" class="btn btn-danger fa fa-trash"></a>
                     </div>
                    </td>
                  </tr>
                  <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>