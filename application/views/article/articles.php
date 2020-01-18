<section style="margin-top: 20px; margin-bottom: 150px">
    <div id="w">
        <div class="pricing-filter">
            <div class="pricing-filter-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-header">
                                <h2 class="pricing-title" style="height: 130px; text-align: center; margin-top: 50px">Article</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<div class="container" style="margin-top: 50px">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                     <!-- style="height: 20em; overflow: hidden;"    -->
                        <div class="col-xs-6 col-md-6">
                            <div class="col-content bg">
                                <div class="row">
                                    <div class="col-md-12 col-md-offset-6">
                                        <img src="<?php echo base_url('admin/assets2/img/Artikle/').$detail->gambar;?>" class="img-responsive">
                                        <div style="height: auto; overflow: hidden;">
                                        <h3 class="col-md-12" style="margin-top : 15px;margin-bottom: 10px; text-align: center">
                                                <?php echo $detail->judul;?>
                                            </h3>
                                            <h4  style="margin-bottom: 10px; text-align: right;">
                                                <?php echo date('l, d F Y', strtotime($detail->tanggal));?>
                                            </h4>
                                                    <?php echo $detail->deskripsi;?>
                                                </div>
                                    </div>
                                </div>
                            </div>  
                        </div>  
                </div>
            </div>
        </div>
    </div>
</div>
</section>
