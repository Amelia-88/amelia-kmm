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
                    echo form_open_multipart('ccontact/update',$atribut);
                    ?>
                    <?php
                    foreach($contact as $row){
                    ?>
                    <!-- <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"> -->
                        <input type="hidden" name="id" value="<?php echo $row->id ?>">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kontak<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <?php  $kontak = array('name'=>'kontak',
                          'id'=>'first-name',
                          'required'=>'required',
                          'value'=>$row->kontak,
                          'class'=>'form-control col-md-7 col-xs-12'
                          );
                          echo form_input($kontak);?>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jam Buka</label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                            <?php  $jambuka = array('name'=>'jambuka',
                            'id'=>'jambuka',
                            'value'=>$row->jambuka,
                            'class'=>'form-control'
                            );
                            echo form_input($jambuka);?>
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Alamat</label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                            <?php  $alamat = array('name'=>'alamat',
                            'id'=>'jambuka',
                            'value'=>$row->alamat,
                            'class'=>'form-control'
                            );
                            echo form_input($alamat);?>
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