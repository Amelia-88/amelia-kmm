
<!--==  Menu  ==-->

<section style="margin-top: 20px; margin-bottom: 70px">
    <div id="w">
        <div class="pricing-filter">
            <div class="pricing-filter-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-header">
                                <h2 class="pricing-title" style="height: 130px; text-align: center; margin-top: 50px">Menu</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <menu class="col-md-12" style="margin-top: 40px; padding-left: 28em">
                <ul class="nav navbar-nav">
                    <li style="padding-right: 5em"><a href="<?php echo base_url('home/menuall'); ?>">ALL</a></li>
                    <li style="padding-right: 5em"><a href="<?php echo base_url('home/menu/3'); ?>">PAKET</a></li>
                    <li style="padding-right: 5em"><a href="<?php echo base_url('home/menu/1'); ?>">MAKANAN</a></li>
                    <li style="padding-right: 5em"><a href="<?php echo base_url('home/menu/2'); ?>">DRINK</a></li>
                </ul>
            </menu>
    </div>

                
        <div class="container">
            <div class="row">
                <?php foreach ($data as $row) : ?>
                    <div class="col-md-3 col-sm-6" style="margin-top: 70px">
                        <div class="service_item">
                            <img width="140px; height=140px" src="<?php echo base_url("assets/images/menu/").$row->file_foto;?>">
                            <div class="caption" style="margin-top: 10px">
                                <h3><?php echo $row->nama_menu;?></h3>
                                    <p>
                                        <?php echo $row->deskripsi;?>
                                    </p>
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3" style="margin-top: 30px">
                                        <h4><?php echo 'Rp '.number_format($row->harga);?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <?php
                             endforeach;?>
                </div>
            </div>
        </section>


