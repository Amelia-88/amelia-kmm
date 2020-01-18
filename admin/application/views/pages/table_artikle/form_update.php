<div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Edit Article</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <?php require_once('tinymce.php') ?>
                    <?php echo validation_errors(); 
                    $atribut = array('class' => 'form-horizontal form-label-left',
                    'id' => 'demo-form2','data-parsley-validate');
                    echo form_open_multipart('cartikle/update',$atribut);
                    ?>
                    <?php
                    foreach($artikle as $row){
                    ?>
                    <!-- <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"> -->
                        <input type="hidden" name="id" value="<?php echo $row->id ?>">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Judul Artikle<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <?php  $judul = array('name'=>'judul',
                          'id'=>'first-name',
                          'required'=>'required',
                          'value'=>$row->judul,
                          'class'=>'form-control col-md-7 col-xs-12'
                          );
                          echo form_input($judul);?>
                          <!-- <input type="text" id="first-name" name="nama_menu" required="required" class="form-control col-md-7 col-xs-12"> -->
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Penulis<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <?php  $penulis = array('name'=>'penulis',
                          'id'=>'first-name',
                          'required'=>'required',
                          'value'=>$row->penulis,
                          'class'=>'form-control col-md-7 col-xs-12'
                          );
                          echo form_input($penulis); 

                          }
                          ?>
                          <!-- <input type="text" id="last-name" name="harga" required="required" class="form-control col-md-7 col-xs-12"> -->
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <?php 
                    foreach($kategori as $data){
                     $option[$data->id_kategori]=$data->nama_kategori;
                                         
                    }
                      echo form_dropdown('id_kategori', $option,$row->id_kategori,array('class'=>'form-control col-md-7 col-xs-12'));
                    ?>
                    </div>
                    </div>
               <?php
                    foreach($artikle as $row){
                    ?>
               <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Status</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                 <?php
              $option=array(
                     '0'=>"Status",
                     'publish'=>'Publish',
                     'draft' => 'Masuk Ke Draft'          
                   );
              echo form_dropdown('status',$option,$row->status,array('class'=>'form-control col-md-7 col-xs-12'));
              ?>
              </div>
               </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama File<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <?php  $nama_gambar = array('name'=>'nama_gambar',
                          'id'=>'first-name',
                          'required'=>'required',
                          'value'=>$row->nama_gambar,
                          'class'=>'form-control col-md-7 col-xs-12'
                          );
                          echo form_input($nama_gambar);?>
                          <!-- <input type="textarea" id="first-name" name="nama_file" required="required" class="form-control col-md-7 col-xs-12"> -->
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
                          <img src="<?php echo base_url('assets2/img/Artikle/'.$row->gambar)?>" width="150px"><br>
                          <?php }?>
                        Ubah Gambar<input type="file" id="gambar" name="gambar" class="form-control col-md-7 col-xs-12"> 
                          <!-- <input type="file" id="first-name" name="file_foto" required="required" class="form-control col-md-7 col-xs-12"> -->
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Deskripsi Article</label>
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