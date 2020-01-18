<div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Edit Gallery</h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <?php require_once('tinymce.php') ?>
                    <?php echo validation_errors(); 
                    $atribut = array('class' => 'form-horizontal form-label-left',
                    'id' => 'demo-form2','data-parsley-validate');
                    echo form_open_multipart('cgallery/updateform',$atribut);
                    ?>
                    <?php
                    foreach($gallery as $row){
                      
                    ?>
                    <!-- <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"> -->
                        <input type="hidden" name="id" value="<?php echo $row->id ?>">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Judul Gambar<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <?php  $judul = array('name'=>'judul',
                          'id'=>'first-name',
                          'required'=>'required',
                          'value'=>$row->judul,
                          'class'=>'form-control col-md-7 col-xs-12'
                          );
                          echo form_input($judul);?>
                        </div>
                      </div>
                      <?php } ?>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <?php 
                    foreach($jenis as $data){
                     $option[$data->id_gallery]=$data->nama_jenis;
                                         
                    }
                      echo form_dropdown('id_gallery', $option,$row->id_gallery,array('class'=>'form-control col-md-7 col-xs-12'));
                    ?>
                    </div>
                    </div>
                    <?php
                    foreach($gallery as $row){
                    ?>
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
                          
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                      <?php } ?>
                    </form>
                  </div>
                </div>
              </div>
            </div>