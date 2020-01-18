<div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Edit Gambar Gallery</h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <?php require_once('tinymce.php') ?>
                    <?php echo validation_errors(); 
                    foreach($gambar as $row){
                    $atribut = array('class' => 'form-horizontal form-label-left',
                    'id' => 'demo-form2','data-parsley-validate');
                    echo form_open_multipart('cgallery/update_gambar/'.$row->id_gambar,$atribut);
                    ?>
                    <input type="hidden" name="id" value="<?php echo $row->id_gambar ?>">
                      <div class="form-group">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Upload File<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <?php
                          if($row->gambar==''){?>
                           <label>Belum Ada Gambar</label><br>
                          <?php }else{ ?>
                          <img src="<?php echo base_url('assets2/img/Gallery/'.$row->gambar)?>" width="150px"><br>
                          <?php }?>
                        Ubah Gambar<input type="file" id="gambar" name="gambar" class="form-control col-md-7 col-xs-12"> 
                          <!-- <input type="file" id="first-name" name="file_foto" required="required" class="form-control col-md-7 col-xs-12"> -->
                        </div>
                      </div>
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