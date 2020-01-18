<div class="page-title">
              <div class="title_left">
                <h3>Menu</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Table Menu <small>Admin</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="datatable-fixed-header" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Nama Menu</th>
                          <th>Harga</th>
                          <th>Jenis Menu</th>
                          <th>Foto</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                                        <?php
                  foreach($menu as $row){
                  ?>
                  <tr>
                    <td><?php echo $row->nama_menu ?></td>
                      <td><?php echo $row->harga ?></td>
                      <td><?php echo $row->nama_jenis ?></td>
                      <td><img src="<?php echo base_url('assets2/img/Menu/'.$row->file_foto); ?>" alt="<?php echo $row->nama_file; ?>" width="100" height="100" /></td>
                  
                    <td>
                      <div class="btn-group">
                      <a href="<?php echo base_url('cmenu/ubah/'.$row->id_menu); ?>" class="btn btn-info fa fa-edit"></a>
                      <a href="<?php echo base_url('cmenu/delete/'.$row->id_menu); ?>" class="btn btn-danger fa fa-trash"></a>
                     </div>
                    </td>
                  </tr>
                  <?php } ?>
                                    </tbody>
                    </table>
                  </div>
                </div>
              </div>