<div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Gallery</h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <?php require_once('tinymce.php') ?>
                    <?php echo validation_errors(); 
                    $atribut = array('class' => 'form-horizontal form-label-left',
                    'id' => 'demo-form2','data-parsley-validate');
                    echo form_open_multipart('cgallery/form_gallery',$atribut);
                    ?>
                    <!-- <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"> -->

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Judul Gambar<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="first-name" name="judul" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <select name="id_gallery" class="form-control">
                      <option value="" disabled diselected>-- Pilih Jenis --</option>
                        <?php                                
                          foreach ($jenis as $row) {  
                            echo "<option value='".$row->id_gallery."'>".$row->nama_jenis."</option>";
                              }
                             echo"</select>"
                         ?>
                    </div>
                    </div>
                   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Upload File<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="file" id="first-name" name="gambar[]" required="required" class="form-control col-md-7 col-xs-12" multiple="multiple">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Deskripsi Gambar</label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea name="deskripsi" id="deskripsi" cols="45" rows="5"></textarea>
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

                    </form>
                  </div>
                </div>
              </div>
            </div>