<div class="page-title">
              <div class="title_left">
                <h3>Menu</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
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
                          <th>Nama</th>
                          <th>Email</th>
                          <th>Komentar</th>
                        </tr>
                      </thead>
                      <tbody>
                  <?php
                  foreach($coment as $row){
                  ?>
                  <tr>
                    <td><?php echo $row->nama ?></td>
                      <td><?php echo $row->email ?></td>
                      <td><?php echo $row->komentar ?></td>
                    
                  </tr>
                  <?php } ?>
                                    </tbody>
                    </table>
                  </div>
                </div>
              </div>