<div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Article</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <?php require_once('tinymce.php') ?>
                    <?php echo validation_errors(); 
                    $atribut = array('class' => 'form-horizontal form-label-left',
                    'id' => 'demo-form2','data-parsley-validate');
                    echo form_open_multipart('cartikle/form_artikle',$atribut);
                    ?>
                    <!-- <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"> -->

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Judul Article<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="first-name" name="judul" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Penulis<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="last-name" name="penulis" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <select name="id_kategori" class="form-control">
                      <option value="" disabled diselected>-- Pilih Jenis --</option>
                        <?php                                
                          foreach ($kategori as $row) {  
                            echo "<option value='".$row->id_kategori."'>".$row->nama_kategori."</option>";
                              }
                             echo"</select>"
                         ?>
                    </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Gambar<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="textarea" id="first-name" name="nama_gambar" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Upload Gambar<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="file" id="first-name" name="gambar" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Isi Article</label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea name="deskripsi" id="deskripsi" cols="45" rows="5"></textarea>
                          </div>
                      </div>
                      <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Status</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                 <?php
              $option=array(
                     '0'=>"Status",
                     'publish'=>'Publish',
                     'draft' => 'Masuk Ke Draft'          
                   );
              echo form_dropdown('status',$option,'0',array('class'=>'form-control col-md-7 col-xs-12'));
              ?>
              </div>
               </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>