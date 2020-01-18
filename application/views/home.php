
<!--== 2. Header ==-->
    <section id="header-slider" class="owl-carousel">
        <div class="item">
            <div class="container">
                <div class="header-content">
                    <h1 class="header-title">MAKANAN</h1>
                    <p class="header-sub-title">create your own slogan</p>
                </div> <!-- /.header-content -->
            </div>
        </div>
       
        <div class="item">
            <div class="container">
                <div class="header-content text-right pull-right">
                    <h1 class="header-title">MINUMAN</h1>
                    <p class="header-sub-title">create your own slogan</p>
                </div> <!-- /.header-content -->
            </div>
        </div>
    </section>


<!--== 3. Home ==-->


<!--== 4. About us ==-->
    <section id="about" class="about">
        <div class="wrapper">
            <?php foreach ($about as $row) : ?>
            <div class="container-fluid">
                <div class="row dis-table">
                    <div class="hidden-xs col-sm-6 section-bg about-bg dis-table-cell" style="background:url('http://localhost/wedhusend/assets/images/about/About.png');
                            background-repeat: no-repeat;
                            background-size: 85%;
                            background-position-x: 15%;
                            background-position-y: 40%;">
                    </div>
                    
                        <div class="section-content">
                            <h2 class="section-content-title">About Us</h2>
                            <p class="section-content-para" style="text-align: justify;">
                                <?php echo $row->deskripsi;?>
                            </p>
                            
                            <p class="text-center to-animate"><a href="<?php echo base_url('home/about'); ?>" class="btn btn-danger btn-outline">READ MORE</a></p>
                        </div> <!-- /.section-content -->
                    </div>
                        <?php         
                            endforeach;?>
                </div> <!-- /.row -->
            </div> <!-- /.container-fluid -->
        </div> <!-- /.wrapper -->
    </section> <!-- /#about -->


    <!-- Review -->
    <section>
        <div class="container-fluid" style="background-color: #cccccc">
            <span class="col-md-12" style="text-align: center; margin-top: 50px;margin-bottom: 50px">
                <h2 class="section-content-title">Customers Say</h2>
            </span>

            <h3 class="col-md-12" style="text-align: center; margin-bottom: 50px">
                Review
            </h3>
        </div>

        <!-- - -->
        <div class="container-fluid" style="background-color: #cccccc; height: 250px">
                <div style="text-align: center; margin-bottom: 50px">
                    <div class="wrap-content-slide3 p-b-50 p-t-50">
                        <div class="container">
                            <?php foreach ($com as $row) : ?>
                            <div>
                                <p class="t-center txt12 size15 m-l-r-auto" style="margin-bottom: 3   0px">
                                    <?php echo '"' . $row->komentar . '"'; ?>
                                </p>

                                <div class="more-review txt4 t-center animated visible-false m-t-32" data-appear="fadeInUp" style="margin-bottom: 50px">
                                    by : <?php echo $row->nama;?>
                                </div>
                            </div>
                            <?php     
                                endforeach;?>
                        </div>
                    </div>
                </div>
        </div>

    </section>

    <!-- <section>
        <div class="container-fluid" style="background-color: #fff">
            <div style="text-align: center; margin-bottom: 50px">
                    <div class="wrap-content-slide3 p-b-50 p-t-50">
                        <div class="container">
                            
                        </div>
                    </div>
            </div>
        </div>
    </section> -->



<!--==  5. Articel, Menu fav, Ig  ==-->
