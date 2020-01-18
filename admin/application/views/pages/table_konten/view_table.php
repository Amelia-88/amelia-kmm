<div class="page-title">
              <div class="title_left">
                <h3>Konten</h3>
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
                    <h2>Table Konten <small>Admin</small></h2>
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
                          <th>Nama Konten</th>     
                          <th>Deskripsi</th>
                          <th>Gambar</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                  <?php
                  foreach($konten as $row){
                  ?>
                  <tr>
                    <td><?php echo $row->nama_konten ?></td>
                      <td><?php echo $row->deskripsi ?></td>
                      <td><img src="<?php echo base_url('assets2/img/Konten/'.$row->gambar); ?>" alt="<?php echo $row->nama_gambar; ?>" width="100" height="100" /></td>
                  
                    <td>
                      <div class="btn-group">
                      <a href="<?php echo base_url('ckonten/ubah/'.$row->id); ?>" class="btn btn-info fa fa-edit"></a>
                      <a href="<?php echo base_url('ckonten/delete/'.$row->id); ?>" class="btn btn-danger fa fa-trash"></a>
                     </div>
                    </td>
                  </tr>
                  <?php } ?>
                                    </tbody>
                    </table>
                  </div>
                </div>
              </div>