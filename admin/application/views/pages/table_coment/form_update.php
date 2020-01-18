<div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Edit Menu</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <?php require_once('tinymce.php') ?>
                    <?php echo validation_errors(); 
                    $atribut = array('class' => 'form-horizontal form-label-left',
                    'id' => 'demo-form2','data-parsley-validate');
                    echo form_open_multipart('cmenu/update',$atribut);
                    ?>
                    <?php
                    foreach($menu as $row){
                    ?>
                    <!-- <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"> -->
                        <input type="hidden" name="id_menu" value="<?php echo $row->id_menu ?>">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Menu<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <?php  $nama_menu = array('name'=>'nama_menu',
                          'id'=>'first-name',
                          'required'=>'required',
                          'value'=>$row->nama_menu,
                          'class'=>'form-control col-md-7 col-xs-12'
                          );
                          echo form_input($nama_menu);?>
                          <!-- <input type="text" id="first-name" name="nama_menu" required="required" class="form-control col-md-7 col-xs-12"> -->
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Harga(Dalam Rupiah) <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <?php  $harga = array('name'=>'harga',
                          'id'=>'first-name',
                          'required'=>'required',
                          'value'=>$row->harga,
                          'class'=>'form-control col-md-7 col-xs-12'
                          );
                          echo form_input($harga);?>
                          <!-- <input type="text" id="last-name" name="harga" required="required" class="form-control col-md-7 col-xs-12"> -->
                        <?php } ?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <select name="id_jenis" class="form-control">
                      <option value="" disabled diselected>-- Pilih Jenis --</option>
                        <?php                                
                          foreach ($jenis as $row) {  
                            echo "<option value='".$row->id_jenis."'>".$row->nama_jenis."</option>";
                              }
                             echo"</select>"
                         ?>
                    </div>
                    </div>
                    <?php
                    foreach($menu as $row){
                    ?>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama File<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <?php  $nama_file = array('name'=>'nama_file',
                          'id'=>'first-name',
                          'required'=>'required',
                          'value'=>$row->nama_file,
                          'class'=>'form-control col-md-7 col-xs-12'
                          );
                          echo form_input($nama_file);?>
                          <!-- <input type="textarea" id="first-name" name="nama_file" required="required" class="form-control col-md-7 col-xs-12"> -->
                        </div>
                      </div>
                   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Upload File<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <?php
                          if($row->file_foto==''){?>
                           <label>Belum Ada Gambar</label><br>
                          <?php }else{ ?>
                          <img src="<?php echo base_url('assets2/img/'.$row->file_foto)?>" width="50px"><br>
                          <?php }?>
                        Ubah Gambar<input type="file" id="file_foto" name="file_foto" class="form-control col-md-7 col-xs-12"> 
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
                            <!-- <textarea name="deskripsi" id="deskripsi" cols="45" rows="5"></textarea> -->
                          </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                      <?php } ?>
                    </form>
                  </div>
                </div>
              </div>
            </div>