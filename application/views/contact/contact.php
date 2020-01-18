
<!--== 6. Contact ==-->

<section style="margin-top: 20px; margin-bottom: 0px">
    <div id="w">
        <div class="pricing-filter">
            <div class="pricing-filter-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-header">
                                <h2 class="pricing-title" style="height: 130px; text-align: center; margin-top: 50px">Contact</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<section class="contact-form">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <div class="row">
                	<h2 style="margin-bottom: 50px; margin-top: 30px; text-align: center"> Contact Detail </h2>


    <div class="container">
    <div class="row">
        <?php foreach ($cont as $row) : ?>
        <div class="col-md-10 col-md-offset-0">
            <div class="row">
                <div class="col-xs-6 col-md-4" style="margin-top: 30px">
                    <div class="col-content bg">
                        <div class="row">
                            <div class="col-md-6">  
                            <img src="<?php echo base_url("assets/images/contact/phones.png") ?>"class="img-responsive">
                                <h4 style="margin-top: 20px; text-align: center">PHONES</h4>
                                <p style="margin-top: 10px;text-align: center"><?php echo $row->kontak;?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-6 col-md-4" style="margin-top: 30px">
                    <div class="col-content bg">
                        <div class="row">
                            <div class="col-md-6">  
                            <img src="<?php echo base_url("assets/images/contact/hours.png") ?>"class="img-responsive"> 
                                <h4 style="margin-top: 20px; text-align: center">HOURS</h4>
                                <p style="margin-top: 10px;text-align: center"><?php echo $row->jambuka;?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-6 col-md-4" style="margin-top: 30px">
                    <div class="col-content bg">
                        <div class="row">
                            <div class="col-md-6">  
                            <img src="<?php echo base_url("assets/images/contact/address.png") ?>" class="img-responsive">
                                <h4 style="margin-top: 20px; text-align: center">ADDRESS</h4>
                                <p style="margin-top: 10px;text-align: center"><?php echo $row->alamat;?></p>
                            </div>
                        </div>
                    </div>
                </div>              
            </div>
            <?php                   
                endforeach;?>
        </div>
    </div>
</div>


        <form class="contact-form" method="post" action="<?php echo base_url('home/input/') ?>" style="margin-top: 50px">
                <h2 style="margin-bottom: 50px; text-align:center"> Comment </h2>
                    
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label>Nama :</label>
                                <input  name="name" type="text" class="form-control" id="name" required="required" placeholder="Nama ">
                        </div>
                        <div class="form-group">
                            <label>Email : </label>
                            <input name="email" type="email" class="form-control" id="email" required="required" placeholder="  Email">
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <label>Comment : </label>
                        <textarea name="message" type="text" class="form-control" id="message" rows="7" required="required" placeholder="  Comment"></textarea>
                    </div>

                    <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                        <div class="text-center">
                            <button type="submit" id="submit" name="submit" class="btn btn-send">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</section>