	
<!--==  Articel ==-->

<section style="margin-top: 20px; margin-bottom: 120px">
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

        	<menu class="col-md-12" style="margin-top: 30px; padding-left: 27em; margin-bottom: 30px">
                <ul class="nav navbar-nav">
                    <li style="padding-right: 5em"><a href="<?php echo base_url('#'); ?>">RECIPE</a></li>
                    <li style="padding-right: 5em"><a href="<?php echo base_url('#'); ?>">EVENT</a></li>
                    <li style="padding-right: 5em"><a href="<?php echo base_url('#'); ?>">FOOD</a></li>
                    <li style="padding-right: 5em"><a href="<?php echo base_url('#'); ?>">DRINK</a></li>
                </ul>
            </menu>


    <div class="container" style="margin-top: 50px">
        <div class="row">
            <div class="col-md-12">
            	<div class="row">
	                <?php foreach ($art as $row) : ?>
                     <!-- style="height: 20em; overflow: hidden;"	 -->
                        <div class="col-xs-6 col-md-6">
                            <div class="col-content bg">
                                <div class="row">
                                    <div class="col-md-12" style="height: 52em;">
    			                	    <img src="<?php echo base_url('admin/assets2/img/Artikle/').$row->gambar;?>" class="img-responsive">
        			                	<div style="height: 20em; overflow: hidden;">
        			                		<h3 class="col-md-12" style="margin-top : 15px;margin-bottom: 10px; text-align: center">
                                                <?php echo $row->judul;?>
                                            </h3>
                                            <h4 class="col-md-12" style="margin-bottom: 10px; text-align: justify;">
                                                <?php echo date('l, d F Y', strtotime($row->tanggal));?>
                                            </h4>
                                            <p class="section-content-para" style="text-align: justify;">
                                                    <?php echo $row->deskripsi;?>...
                                            </p>
                                    	</div>
                                		<p class="to-animate"><a href="<?php echo base_url('home/detail_article/' . $row->id); ?>" class="btn btn-danger btn-sm" role="button" style="margin-bottom: 20px">READ MORE</a></p>
                                    </div>
                                </div>
                            </div>  
                        </div>
                        <?php   
                            endforeach;?>		
            	</div>
        	</div>
        </div>
    </div>
                <div class="row">
        <div class="col">
            <!--Tampilkan pagination-->
            <?php echo $pagination; ?>
        </div>
    </div>
</section>