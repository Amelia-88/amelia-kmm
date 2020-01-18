<div class="page-title">
              <div class="title_left">
                <h3>Gallery</h3>
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
                    <h2>Table Gallery <small>Admin</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="datatable-fixed-header" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Gambar</th>     
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                  <?php
                  foreach($gambar as $row){
                  ?>
                  <tr>
                    <td><img src="<?php echo base_url('assets2/img/Gallery/'.$row['gambar']); ?>" width="100" height="100" /></td>
                    <td><a href="<?php echo base_url('cgallery/update_gambar/'.$row['id_gambar']); ?>" class="btn btn-info fa fa-edit"></a></td>
                  </tr>
                  
                  <?php } ?>
                     </tbody>
                    </table>
                  </div>
                </div>
              </div>