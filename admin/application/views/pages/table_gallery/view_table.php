<div class="page-title">
              <div class="title_left">
                <h3>gallery</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                </div>
              </div>
            </div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Table gallery <small>Admin</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="datatable-fixed-header" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Judul</th>     
                          <th>Deskripsi</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                  <?php
                  foreach($gallery as $row){
                  ?>
                  <tr>
                    <td><?php echo $row->judul ?></td>
                      <td><?php echo $row->deskripsi ?></td>
                  
                    <td>
                      <div class="btn-group">
                      <a href="<?php echo base_url('cgallery/ubah/'.$row->id); ?>" class="btn btn-info fa fa-edit"></a>
                      <a href="<?php echo base_url('cgallery/delete/'.$row->id); ?>" class="btn btn-danger fa fa-trash"></a>
                     </div>
                    </td>
                  </tr>
                  <?php } ?>
                                    </tbody>
                    </table>
                  </div>
                </div>
              </div>