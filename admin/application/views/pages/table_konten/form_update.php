<div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Edit Gallery</h2>
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
                    <br />
                    <?php require_once('tinymce.php') ?>
                    <?php echo validation_errors(); 
                    $atribut = array('class' => 'form-horizontal form-label-left',
                    'id' => 'demo-form2','data-parsley-validate');
                    echo form_open_multipart('ckonten/update',$atribut);
                    ?>
                    <?php
                    foreach($konten as $row){
                    ?>
                    <!-- <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"> -->
                        <input type="hidden" name="id" value="<?php echo $row->id ?>">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Konten<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <?php  $nama_konten = array('name'=>'nama_konten',
                          'id'=>'first-name',
                          'required'=>'required',
                          'value'=>$row->nama_konten,
                          'class'=>'form-control col-md-7 col-xs-12'
                          );
                          echo form_input($nama_konten);?>
                        </div>
                      </div>
                      
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Gambar<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <?php  $nama_gambar = array('name'=>'nama_gambar',
                          'id'=>'first-name',
                          'required'=>'required',
                          'value'=>$row->nama_gambar,
                          'class'=>'form-control col-md-7 col-xs-12'
                          );
                          echo form_input($nama_gambar);?>
                        </div>
                      </div>
                   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Upload File<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <?php
                          if($row->gambar==''){?>
                           <label>Belum Ada Gambar</label><br>
                          <?php }else{ ?>
                          <img src="<?php echo base_url('assets2/img/'.$row->gambar)?>" width="150px"><br>
                          <?php }?>
                        Ubah Gambar<input type="file" id="gambar" name="gambar" class="form-control col-md-7 col-xs-12">
                          <!-- <input type="file" id="first-name" name="file_foto" required="required" class="form-control col-md-7 col-xs-12"> -->
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Deskripsi Menu</label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                            <?php  $deskripsi = array('name'=>'deskripsi',
                            'id'=>'deskripsi',
                            'value'=>$row->deskripsi,
                            'class'=>'form-control'
                            );
                            echo form_textarea($deskripsi);?>
                          </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
                         <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                      <?php } ?>
                    </form>
                  </div>
                </div>
              </div>
            </div>