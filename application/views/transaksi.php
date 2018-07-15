<!DOCTYPE html>
<!-- 
  Theme Name: Frame
  Theme URL: https://probootstrap.com/frame-free-onepage-html5-template-using-bootstrap
  Author: ProBootstrap.com
  Author URL: https://probootstrap.com
  License: Released for free under the Creative Commons Attribution 3.0 license (probootstrap.com/license)
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Disa Kerja - Beranda</title>
    <meta name="description" content="Free Bootstrap Theme by ProBootstrap.com">
    <meta name="keywords" content="Free website templates, Free bootstrap themes, Free template, Free bootstrap, Free website template">
    
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles-merged.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/icomoon/style.css');?>">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default probootstrap-navbar">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html" title="ProBootstrap:Frame">DisaKerja</a>
        </div>

        <div id="navbar-collapse" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#beranda" data-nav-section="home">Beranda</a></li>
            <li><a href="#pelayanan" data-nav-section="pelayanan">Pelayanan</a></li>
            <li><a href="#data" data-nav-section="pricing">Statistik</a></li>
            <li><a href="#" data-nav-section="reviews">Lowongan</a></li>
              <?php if($this->session->userdata("status") == 'login'){ ?>
            <li><a href="<?php echo site_url('disa_kerja/profil');?>">Profil</a></li>
            <li><a href="<?php echo site_url('disa_kerja/logout');?>">Logout</a></li>
              <?php }?>
          </ul>
        </div>
      </div>
    </nav>
    
    <section id="beranda" class="probootstrap-hero prohttp://localhost/probootstrap/frame/#featuresbootstrap-slant" style="background-image: url('assets/img/image_1.jpg');" data-section="home" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row intro-text">
          <div class="col-md-8 col-md-offset-2 text-center">
            <h1 class="probootstrap-heading probootstrap-animate">DisaKerja - Merupakan Laman Situs yang dimanfaatkan untuk para Disabilitas Mencari Kerja</h1>
              <?php if($this->session->userdata('status') != 'login'){ ?>
              <div class="probootstrap-subheading center">
              <p class="probootstrap-animate"><a href="#login_regis" target="_blank" role="button" class="btn btn-default smoothscroll">Masuk</a><a href="#login_regis" class="btn btn-default smoothscroll" role="button">Registrasi</a></p>
            </div>
              <?php } ?>
          </div>
        </div>r
      </div>
    </section>
	
    <section id="registrasi" class="probootstrap-section probootstrap-cta">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <h2 class="probootstrap-heading">Pendaftaran</h2>
            <p class="probootstrap-sub-heading" align="center">Dengan meng-inputkan semua data diri anda, anda dapat mendaftarkan pekerjaan.</p>
              <form action="<?php echo site_url('Disa_kerja/transaksi_masuk');?>" method="post">
                <table class="col-md-12" >
				<?php 
					foreach($data->result() as $l):
				?>
				  <input type="hidden" name="id"></input>
                  <tr>
                    <td>Nama Perusahaan</td>
                    <td><input style="border-radius: 10; color: #fff; background-color: #007bff; border-color: #007bff;" class="col-md-8" type="text" name="nama" value="<?php echo $l->perusahaan;?>">
					</td>
                  </tr>

                  <tr>
                    <td>Lowongan</td>
                    <td><input style="border-radius: 10; color: #fff; background-color: #007bff; border-color: #007bff;" class="col-md-8" type="text" name="lowongan" value="<?php echo $l->lowongan;?>"
					></td>
                  </tr>

                  <tr>
                    <td>Email</td>
                    <td><input style="border-radius: 10; color: #fff; background-color: #007bff; border-color: #007bff;" class="col-md-8" type="text" name="email" value="<?php echo $this->session->userdata('email');?>"></td>
                  </tr>

                  <tr>
                    <td></td>
                    <td><input style="border-radius: 10; color: #fff; background-color: #007bff; border-color: #007bff;" class="col-md-8 btn btn-primary" type="submit" value="Registrasi"></td>
                  </tr>
                </table>
              </form>
					<?php endforeach;?>
          </div>
        </div>
      </div>
    </section>

    <!-- <section class"probootstrap-section probootstrap-cta">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <h2 class="probootstrap-heading">Join With Over 100K Members</h2>
            <p class="probootstrap-sub-heading">But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>

          </div>
        </div>
      </div>
    </section> -->
    <!-- END section -->
    <section class="probootstrap-section probootstrap-bg-light" data-section="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <form action="" class="probootstrap-form">
              <h2 class="text-black mt0">Get In Touch</h2>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Your Phone">
              </div>
              <div class="form-group">
                <textarea class="form-control"cols="30" rows="10" placeholder="Write a Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Sebd Message">
              </div>
            </form>
          </div>
          <div class="col-md-3 col-md-push-1">
            <ul class="probootstrap-contact-details">
              <li>
                <span class="text-uppercase">Email</span>
                disakerja@gmail.com
              </li>
              <li>
                <span class="text-uppercase">Phone</span>
                +62 896-7003-3905
              </li>
              <li>
                <span class="text-uppercase">Fax</span>
                +62 896-7003-3905
              </li  >
              <li>
                <span class="text-uppercase">Address</span>
                Jl Kumbang No. 2 <br>
                Bogor  <br>
                Jawa Barat, Program Diploma IPB
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    

    <footer class="probootstrap-footer">
      <div class="container text-center">
        <div class="row">
          <div class="col-md-12">
            <p class="probootstrap-social"><a href="#"><i class="icon-twitter"></i></a> <a href="#"><i class="icon-facebook2"></i></a> <a href="#"><i class="icon-instagram2"></i></a><a href="#"><i class="icon-linkedin"></i></a></p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            &copy; 2017 <a href="#">dotwiki</a>. All Rights Reserved. <br> Designed &amp; Developed by <a href="#">maljung production</a> <br> Demo Images by <a href="https://unsplash.com">Unsplash</a>
          </div>
        </div>
      </div>
    </footer>

    

    <script src="<?php echo base_url('assets/js/scripts.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/custom.js')?>"></script>

    <!-- Google Map -->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script> -->

  </body>
</html>