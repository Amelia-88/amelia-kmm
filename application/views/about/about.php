
<!--== 1. About us ==-->
    <section style="margin-top: 20px; margin-bottom: 70px">
        <div id="w">
            <div class="pricing-filter">
                <div class="pricing-filter-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-header">
                                    <h2 class="pricing-title" style="height: 130px; text-align: center; margin-top: 50px">About</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


    <div class="wrapper">
        <div class="container-fluid">
            <?php foreach ($about as $row) : ?>
            <div class="row dis-table">
                <div class="hidden-xs col-sm-6 section-bg about-bg dis-table-cell" style="background:url('http://localhost/wedhusend/assets/images/about/About.png');
                    background-repeat: no-repeat;
                    background-size: 85%;
                    background-position-x: 15%;
                    background-position-y: 40%;">
                            
                </div>
            
            <div class="col-xs-12 col-sm-6 dis-table-cell">
                <div class="section-content" >
                    <h2 class="section-content-title">About Us</h2>
                        <p class="section-content-para" style="text-align: justify;">
                            <?php echo $row->deskripsi;?>
                        </p>
                            <?php
                                endforeach;?>
                </div> <!-- /.section-content -->
            </div>
        </div> <!-- /.row -->
    </div> <!-- /.container-fluid -->
</div> <!-- /.wrapper -->
</section> <!-- /#about -->