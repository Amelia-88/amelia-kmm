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
                          <th>Data</th>     
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                  <?php
                  foreach($gallery as $row){
                  ?>
                  <tr>
                    <td>Edit Form</td>
                    <td>
                      <div class="btn-group">
                      <a href="<?php echo base_url('cgallery/ubah_form/'.$row->id); ?>" class="btn btn-info fa fa-edit"></a>
                     </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Edit gambar</td>
                    <td>
                      <div class="btn-group">
                      <a href="<?php echo base_url('cgallery/ubah_gambar/'.$row->id); ?>" class="btn btn-info fa fa-edit"></a>
                     </div>
                    </td>
                  </tr>
                  <?php } ?>
                                    </tbody>
                    </table>
                  </div>
                </div>
              </div>