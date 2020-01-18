<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>WEDHUS MABUR</title>

  <!-- Favicons -->
  <link href="<?php echo base_url();?>assets/admin/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/admin/img/favicon.png" rel="icon">
  <link href="<?php echo base_url();?>assets/admin/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url();?>assets/admin/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="<?php echo base_url();?>assets/admin/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="<?php echo base_url();?>assets/admin/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/admin/css/style-responsive.css" rel="stylesheet">
  <script src="<?php echo base_url();?>assets/admin/lib/chart-master/Chart.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/lib/bootstrap-fileupload/bootstrap-fileupload.css" />
  <script src="<?php echo base_url(); ?>assets/admin/tinymce/js/tinymce/tinymce.dev.js"></script><!-- 
<script src="<?php echo base_url(); ?>assets/tinymce/js/tinymce/plugins/table/plugin.dev.js"></script>
<script src="<?php echo base_url(); ?>assets/tinymce/js/tinymce/plugins/paste/plugin.dev.js"></script>
<script src="<?php echo base_url(); ?>assets/tinymce/js/tinymce/plugins/spellchecker/plugin.dev.js"></script> -->
<script src="<?php echo base_url()?>assets/admin/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript"> 
tinymce.init({ selector:'textarea'});
</script>
</head>

<body>
  <section id="container">
    
    <!--header start-->
    <header class="header black-bg" style="background: black;">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="<?php echo base_url() ?>welcome" class="logo"><b>WEDHUS<span style="color: #ed3237;">MABUR</span></b></a>
      <!--logo endcolor: #ed3237;-->
      <div class="nav notify-row" id="top_menu">
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.html">Logout</a></li>
        </ul>
      </div>
    </header>
    <aside>
      <div id="sidebar" class="nav-collapse " style="background: #373435;">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="<?php echo base_url();?>assets/admin/img/ui-sam.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">Sam Soffes</h5>
          <li class="mt">
            <a href="<?php echo base_url() ?>welcome">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          
          
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-bitbucket"></i>
              <span>Table Menu</span>
              </a>
            <ul class="sub">
              <li><a href="<?php echo base_url() ?>cmenu/get_menu">Table Menu</a></li>
              <li><a href="<?php echo base_url() ?>cmenu/form_menu">Tambah Menu</a></li>
              <!--  -->
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-print"></i>
              <span>Table Article</span>
              </a>
            <ul class="sub">
              <li><a href="<?php echo base_url() ?>cartikle/get_artikle">Table Article</a></li>
              <li><a href="<?php echo base_url() ?>cartikle/form_artikle">Tambah Article</a></li>
              <!--  -->
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-picture-o"></i>
              <span>Table Gallery</span>
              </a>
            <ul class="sub">
              <li><a href="<?php echo base_url() ?>cgallery/get_gallery">Table Gallery</a></li>
              <li><a href="<?php echo base_url() ?>cgallery/form_gallery">Tambah Gallery</a></li>
              <!--  -->
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-phone"></i>
              <span>Table Contact</span>
              </a>
            <ul class="sub">
              <li><a href="">Table Contact</a></li>
              <li><a href="">Tambah Minuman</a></li>
              <!--  -->
            </ul>
          </li>
          <!-- <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Data Tables</span>
              </a>
            <ul class="sub">
              <li><a href="basic_table.html">Basic Table</a></li>
              <li><a href="responsive_table.html">Responsive Table</a></li>
              <li><a href="advanced_table.html">Advanced Table</a></li>
            </ul>
          </li> -->
          
          
          <li>
            <a href="google_maps.html">
              <i class="fa fa-map-marker"></i>
              <span>Google Maps </span>
              </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <?php echo $contents;?>
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
   
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="<?php echo base_url();?>assets/admin/lib/jquery/jquery.min.js"></script>

  <script src="<?php echo base_url();?>assets/admin/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="<?php echo base_url();?>assets/admin/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="<?php echo base_url();?>assets/admin/lib/jquery.scrollTo.min.js"></script>
  <script src="<?php echo base_url();?>assets/admin/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets/admin/lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="<?php echo base_url();?>assets/admin/lib/common-scripts.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/admin/lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/admin/lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="<?php echo base_url();?>assets/admin/lib/sparkline-chart.js"></script>
  <script src="<?php echo base_url();?>assets/admin/lib/zabuto_calendar.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/admin/lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
   <!-- DATA TABLE SCRIPTS -->
    <script src="<?php echo base_url();?>assets/admin/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>assets/admin/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
  <!-- <script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome to Dashio!',
        // (string | mandatory) the text inside the notification
        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
        // (string | optional) the image to display on the left
        image: '<?php echo base_url();?>assets/admin/img/ui-sam.jpg',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script> -->
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
</body>

</html>
