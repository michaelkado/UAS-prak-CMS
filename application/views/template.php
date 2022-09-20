<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>KitaKemana</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content=""> 
<!-- bootstrap css -->
<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>aset/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<!-- style css -->
<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>aset/css/style.css">
<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>aset/css/style2.css">
<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>aset/css/style3.css">
<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>aset/css/table.css">
<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>aset/css/loginn.css">
<!-- Responsive-->
<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>aset/css/responsive.css">
<!-- fevicon -->
<link rel = "Icon" href = "<?php echo base_url('aset/images/fevicon.png'); ?>">
<!-- Scrollbar Custom CSS -->
<link rel = "stylesheet" href = "<?php echo base_url(); ?>aset/css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<link rel = "stylesheet" href ="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<link rel = "stylesheet" href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
<!-- owl stylesheets --> 
<link rel = "stylesheet" href = "<?php echo base_url(); ?>aset/css/owl.carousel.min.css">
<link rel = "stylesheet" href = "<?php echo base_url(); ?>aset/css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>
<body>
    <!--header section start -->
    <div id="index.html" class="header_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="logo"><img src="<?php echo base_url('aset/images/Kita Kemana (1).png'); ?>"></a></div>
                </div>
                <div class="col-sm-6 col-lg-9">
                    <div class="menu_text">
                        <ul>
                        <ul>
                            <li> <?php echo anchor ('home','Home');?></li>
                            <li> <?php echo anchor ('pemesanan','Pemesanan');?></li>
                            <li> <?php echo anchor ('informasi','Informasi');?></li>
                            <li> <?php echo anchor ('testimoni','Testimoni');?></li>
                            <li> <?php echo anchor ('armada','Armada');?></li>
                            <li> <?php echo anchor ('harga','Harga');?></li>
                            <li> <?php echo anchor ('contact','Contact us');?></li>
                            <li> <?php echo anchor ('admin','Sign in');?></li>
                            <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                             <?php echo anchor ('home','Home');?>
                             <?php echo anchor ('pemesanan','Pemesanan');?>
                             <?php echo anchor ('informasi','Informasi');?>
                             <?php echo anchor ('testimoni','Testimoni');?>
                             <?php echo anchor ('armada','Armada');?>
                             <?php echo anchor ('harga','Harga');?>
                             <?php echo anchor ('contact','Contact us');?>
                             <?php echo anchor ('admin','Sign in');?>
                </div>
                </div>
                <span  style="font-size:33px;cursor:pointer; color: #ffffff;" onclick="openNav()" class="toggle_menu"><img src="<?php echo base_url('aset/images/menu_icon.png');?>"></span>
                </div>  
                </li>
                        </ul>
                    </div>
            </div>
        </div>
    </div>
    <!-- header section end -->
<?php echo $konten;?>
  <!-- section footer start -->
    <div class="section_footer ">
      <div class="container"> 
          <div class="footer_section_2">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3">
                  <h2 class="account_text">Address</h2>
                  <p class="ipsum_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, </p>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                  <h2 class="account_text">Links</h2>
                  <div class="image-icon"><img src="<?php echo base_url();?>aset/images/bulit-icon.png"> <span class="fb_text"><a><?php echo anchor ('home','Home');?></span></a></div>
                <div class="image-icon"><img src="<?php echo base_url("aset/images/bulit-icon.png");?>">  
                  <span class="fb_text"><a><?php echo anchor ('pemesanan','Pemesanan');?></span></a></div>
                  <div class="image-icon"><img src="<?php echo base_url("aset/images/bulit-icon.png");?>">  
                  <span class="fb_text"><a><?php echo anchor ('informasi','Informasi');?></span></a></div>
                  <div class="image-icon"><img src="<?php echo base_url("aset/images/bulit-icon.png");?>"> <span class="fb_text"><a><?php echo anchor ('layanan','layanan');?></span></a></div>
                <div class="image-icon"><img src="<?php echo base_url("aset/images/bulit-icon.png");?>">  
                  <span class="fb_text"><a><?php echo anchor ('armada','Armada');?></span></a></div>
                  <div class="image-icon"><img src="<?php echo base_url("aset/images/bulit-icon.png");?>">
                  <span class="fb_text"><a><?php echo anchor ('harga','Harga');?></span></a></div> 
                  <div class="image-icon"><img src="<?php echo base_url("aset/images/bulit-icon.png");?>">
                  <span class="fb_text"><a><?php echo anchor ('Contact','Contact us');?></span></a></div>        
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                <h2 class="account_text">Follow Us</h2>
                <div class="image-icon"><img src="<?php echo base_url("aset/images/fb-icon.png");?>">
                <span class="fb_text"><a href="https://web.facebook.com/"target="_blank">Facebook</a></span></div>
                <div class="image-icon"><img src="<?php echo base_url("aset/images/twitter-icon.png");?>"><span class="fb_text"><a href="#">Twitter</a></span></div>
                <div class="image-icon"><img src="<?php echo base_url("aset/images/in-icon.png");?>"><span class="fb_text"><a href="#">Linkedin</a></span></div>
                <div class="image-icon"><img src="<?php echo base_url("aset/images/youtube-icon.png");?>"><span class="fb_text"><a href="#">Youtube</a></span></div>            
                <div class="image-icon"><img src="<?php echo base_url("aset/images/in-icon.png");?>"><span class="fb_text"><a href="#">Instagram</a></span></div>
                </div>
          </div>
          </div>
          </div>
      </div>
    </div>
  <!-- section footer end -->
  <!-- copyright section start -->
  <div class="copyright_section">
    <div class="container">
      <p class="copyright">2019 All Rights Reserved. <a href="https://html.design">Free html  Templates</a></p>
    </div>
  </div>

    <!-- Javascript files-->
    <script type="text/javascript" src="<?php echo base_url();?>aset/js/jquery.min.js" ></script>
    <script type="text/javascript" src="<?php echo base_url();?>aset/js/popper.min.js" ></script>
    <script type="text/javascript" src="<?php echo base_url();?>aset/js/bootstrap.bundle.min.js" ></script>
    <script type="text/javascript" src="<?php echo base_url();?>aset/js/jquery-3.0.0.min.js" ></script>
    <!-- sidebar -->
    <script type="text/javascript" src="<?php echo base_url();?>aset/js/plugin.js" ></script>
    <script type="text/javascript" src="<?php echo base_url();?>aset/js/jquery.mCustomScrollbar.concat.min.js" ></script>
    <!-- javascript -->
    <script type="text/javascript" src="<?php echo base_url();?>aset/js/owl.carousel.js" ></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
    $(document).ready(function(){
    $(".fancybox").fancybox({
    openEffect: "none",
    closeEffect: "none"
    });
       
    $(".zoom").hover(function(){
         
    $(this).addClass('transition');
    }, function(){
         
    $(this).removeClass('transition');
    });
    });
    </script> 
    <script>
    function openNav() {
    document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
   document.getElementById("myNav").style.width = "0%";
   }
</script>   
</body>
</html>