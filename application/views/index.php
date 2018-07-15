<!DOCTYPE html>
<!-- 
  Theme Name: Frame
  Theme URL: https://probootstrap.com/frame-free-onepage-html5-template-using-bootstrap
  Author: ProBootstrap.com
  Author URL: https://probootstrap.com
  License: Released for free under the Creative Commons Attribution 3.0 license (probootstrap.com/license)
-->
<script src="<?php echo base_url('assets/js_3/fusioncharts.js'); ?>"></script>
		<script>
			FusionCharts.ready(
				function(){
					var type = window.document.getElementById('type');
					var chart = new FusionCharts(
						{
							"type":"pie3D",
							"renderAt":"chartContainer",
                            "align":"center",
							"width":"450",
							"height":"450",
							"dataFormat":"jsonurl",
							"dataSource":"<?php echo site_url('Disa_kerja/json');?>"
						}
					);
					chart.render();
					type.onchange = function(){
						var chart = new FusionCharts(
						{
							"type":"pie3D",
							"renderAt":"chartContainer",
                            "align":"center",
							"width":"450",
							"height":"450",
							"dataFormat":"jsonurl",
							"dataSource":"<?php echo site_url('Disa_kerja/json');?>"
						}
						);
						chart.render();
					}
					});
		</script>
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
            <li><a href="#pelayanan" data-nav-section="pelayanan">Kemudahan</a></li>
            <li><a href="#statistik" data-nav-section="statistik">Statistik</a></li>
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
        </div>
      </div>
    </section>

    <section  id="pelayanan" class="probootstrap-section" data-section="pelayanan">
      <div class="container">
        <div class="row text-center mb100">
          <div class="col-md-8 col-md-offset-2 probootstrap-section-heading">
            <h2 class="mb30 text-black probootstrap-heading">Kemudahan</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="probootstrap-service-item probootstrap-animate" data-animate-effect="fadeIn">
              <h2>Mudah Digunakan</h2>
              <p align="justify">Laman ini digunakan untuk mempermudah para disabilitas untuk mencari pekerjaannya. Dengan laman ini, para disabilitas cukup dengan mengakses laman ini dan mulai melakukan pencarian kerja sesuai dengan kriteria yang ada.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="probootstrap-service-item probootstrap-animate" data-animate-effect="fadeIn">
              <h2>Mudah diakses</h2>
              <p align="justify">Laman ini dapat diakses oleh semua orang dan dimanapun tanpa memandang tempat kecuali koneksi internet. Asalkan koneksi internet stabil, dan juga pengguna dapat menggunakannya, laman situs ini semakin mudah untuk diakses.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="probootstrap-service-item probootstrap-animate" data-animate-effect="fadeIn">
              <h2>Banyak Koneksi</h2>
              <p align="justify">Dengan bergabungnya para disabilitas disini, disabilitas tidak harus bingung ataupun kesulitan dalam mencari kerja. Laman ini memiliki banyak koneksi dengan beragam macam pekerjaan yang bisa dipilih oleh para disabilitas.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="statistik" class="probootstrap-section probootstrap-bg-light" data-section="statistik">
      <div class="container">
        <div class="row text-center mb100">
          <div class="col-md-8 col-md-offset-2 probootstrap-section-heading">
            <h2 class="mb30 text-black probootstrap-heading">Statistik</h2>
            <p>Dijelaskan data statistik secara kesuluruhan semua data pengguna yang telah bergabung dan tingkat kelolosannya.</p>
          </div>
        </div>
        <!-- END row -->
        
        <div class="row mb100">
          <!-- <div class="col-md-8 col-md-pull-2"> -->
          <div class="col-md-8 col-md-push-5 probootstrap-animate">
            <p><div align="center" id="chartContainer" class="img-responsive probootstrap-shadow"></div></p>
          </div>
          <!-- <div class="col-md-4 col-md-pull-1"> -->
          <div class="col-md-4 col-md-pull-8 probootstrap-section-heading">
            <h3 class="text-primary probootstrap-heading-2">Keberhasilan</h3>
            <p><p>Tingkat keberhasilan semua pengguna yang telah bergbung bersama DisaKerja. Ada beberapa yang telah diterima, dan ada beberapa yang masuk tahap wawancara.</p></p>
            <ul class="probootstrap-list">
              <li class="probootstrap-check">Wawancara : Tahapan masih wawancara. Pengguna masih harus wawancara dahulu.</li>
              <li class="probootstrap-check">Pending : Selesai wawancara. Pengguna setelah wawancara dan menunggu hasilnya.</li>
              <li class="probootstrap-check">Berhasil</li>
            </ul>
          </div>
        </div>

        <!-- END row -->
		
		<div class="row mb100">
          <!-- <div class="col-md-8 col-md-pull-2"> -->
		  <div class="col-md-8 col-md-offset-2 probootstrap-section-heading">
            <h2 class="mb30 text-black probootstrap-heading"><a href="<?php echo site_url('disa_kerja/nampil_excel');?>">Melihat data dalam bentuk Excel</a></h2>
          </div>
          </div>
          <!-- <div class="col-md-4 col-md-pull-1"> -->
        </div>
      </div>
    </section>
    <!-- END section -->

     <section class="probootstrap-section" data-section="reviews">
      <div class="container">
        <div class="row text-center mb100">
          <div class="col-md-8 col-md-offset-2 probootstrap-section-heading">
            <h2 class="mb30 text-black probootstrap-heading">Lowongan Pekerjaan</h2>
            <p>Menjelaskan semua data tentang lowongan pekerjaan yang berada di seluruh Indonesia untuk para Disabilitas di Indonesia.</p>
          </div>
        </div>
        <!-- END row -->
        <div class="row">
		 <?php 
			foreach($lowongan->result() as $l){
		 ?>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="probootstrap-testimonial">
              <p><img src="<?php echo $l->foto;?>" class="img-responsive img-circle probootstrap-author-photo" alt="Free Template by ProBootstrap.com">
			  <?php echo $l->perusahaan;?></p>
			  <p class="mb10 probootstrap-rate">
			  <?php for($i=0; $i<$l->bintang;$i++){?>
                <i class="icon-star"></i>
			  <?php } ?>	
              </p>
              <blockquote>
                <p><?php echo $l->definisi;?></p>
              </blockquote>
			  <p class="mb0">Lowongan &mdash; <?php echo $l->lowongan;?></p>
			  <p class="mb0">Penerimaan &mdash; <?php echo $l->penerimaan;?></p>
              <p class="mb0">Kontak &mdash; <?php echo $l->kontak; ?></p>
			  <form action="<?php echo site_url('Disa_kerja/transaksi_masuk');?>" method="post">
				<input type="hidden" name="id" value="<?php echo $l->idlo;?>"></input>
				<input type="hidden" name="penerimaan" value="<?php echo $l->penerimaan;?>"></input>
				<input type="hidden" name="email" value="<?php echo $this->session->userdata('email');?>"></input>
				<?php if($this->session->userdata('status') == 'login'){?><p class="mbo" style=align: center;><input type="submit" name="daftar" value="Daftar"></input></p>
				<?php } ?>
			  </form>
			  </div>
          </div>
			<?php }?>
        </div>
      </div>
    </section>

    <?php if($this->session->userdata("status") != 'login'){ ?>

    <section class="probootstrap-section probootstrap-bg-light" id="login_regis">
      <div class="container">
         <div class="row text-center mb100">
          <div class="col-md-8 col-md-offset-2 probootstrap-section-heading">
            <h2 class="mb30 text-black probootstrap-heading">Daftar Sekarang</h2>
            <p align="justify">Untuk bisa mengakses lebih lanjut tentang laman ini, pengguna bisa daftar dan masuk ke dalam situs ini. Banyak fitur yang bisa diakses setelah masuk ataupn login pada laman ini. Jika belum punya akun, daftar daftar dengan klik bergabung sekarang. Atau jika sudah punya akun, bisa melakukan login. </p>
            <p align="center" class="probootstrap-animate"><a href="#registrasi" class="btn btn-primary col-md-12 btn btn-default smoothscroll">Bergabung Sekarang</a></p>
            <p>&nbsp</p>
            <p align="center" class="probootstrap-animate"><a href="#login" class="btn btn-primary col-md-12 btn btn-default smoothscroll">Masuk</a></p></div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section id="registrasi" class="probootstrap-section">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <h2 class="probootstrap-heading">Registrasi</h2>
            <p class="probootstrap-sub-heading" align="center">Dengan meng-inputkan semua data diri anda, anda dapat mendaftarkan diri sebagai member di laman ini.</p>
              <form action="<?php echo site_url('Disa_kerja/tambah_data');?>" method="post">
              <?php if($this->session->flashdata('message')) {?>
              <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times</button>
                <?php echo $this->session->set_flashdata('message');?>
                </div>
                <?php } ?>
                <table class="col-md-12" >
                  <tr>
                    <td>Nama</td>
                    <td><input style="border-radius: 15; color: #000000; background-color: #aee0ee; border-color: #aee0ee;" class="col-md-8" type="text" name="nama" placeholder="Masukkan Nama" required></td>
                  </tr>

                  <tr>
                    <td>Alamat</td>
                    <td><input style="border-radius: 15; color: #000000; background-color: #aee0ee; border-color: #aee0ee;" class="col-md-8" type="text" name="alamat" placeholder="Masukkan Alamat" required></td>
                  </tr>

                  <tr>
                  <div class="container">
                      <td>Password</td>
                      <td><input style="border-radius: 15; color: #000000; background-color: #aee0ee; border-color: #aee0ee;" class="col-md-8" type="password" name="password" placeholder="password" id="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required></td>
                      <div id="message">
                        <h3>Password haruslah mengikuti aturan</h3>
                        <p id="letter" class="invalid"> Harus ada huruf non-kapital</p>
                        <p id="capital" class="invalid"> Harus ada satu huruf kapital</p>
                        <p id="number" class="invalid"> Harus terdapat satu nomor</p>
                        <p id="length" class="invalid"> Minimum harus 8 karakter</p>
                      </div>
                    </div>
                  </tr>

                  <tr>
                    <td>Konfirmasi Password</td>
                    <td><input style="border-radius: 15; color: #000000; background-color: #aee0ee; border-color: #aee0ee;" class="col-md-8" type="password" name="re_password" placeholder="re-password" required></td>
                  </tr>

                  <tr>
                    <td>Email</td>
                    <td><input style="border-radius: 15; color: #000000; background-color: #aee0ee; border-color: #aee0ee;" class="col-md-8" type="text" name="email" placeholder="Email" required></td>
                  </tr>

                  <tr>
                    <td>No Hp</td>
                    <td><input style="border-radius: 15; color: #000000; background-color: #aee0ee; border-color: #aee0ee;" class="col-md-8" type="text" name="no" placeholder="Nomor Hp" required></td>
                  </tr>

                  <tr>
                    <td></td>
                    <td><input style="border-radius: 15; color: #fff; background-color: #007bff; border-color: #007bff;" class="col-md-8 btn btn-primary" type="submit" value="Registrasi"></td>
                  </tr>
                </table>
              </form>
          </div>
        </div>
      </div>
    </section>

    <section class="probootstrap-section" id="login">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <h2 class="probootstrap-heading">Masuk - Login</h2>
            <p class="probootstrap-sub-heading">Jika sudah memiliki akun, diharapkan masuk dengan email dan juga password untuk bisa masuk ke fitur selanjutnya.</p>
            <form action="<?php echo site_url('Disa_kerja/cek_login'); ?>"  method="post">
              <table class="col-md-12">
                <tr>
                  <td>Email</td>
                  <td><input type="text" style="border-radius: 15; color: #fff; background-color: #aee0ee; border-color: #aee0ee;" class="col-md-8" type="text" name="email" placeholder="Masukkan Email" required></td>
                </tr>

                <tr>
                  <td>Password</td>
                  <td><input type="password" style="border-radius: 15; color: #fff; background-color: #aee0ee; border-color: #aee0ee;" class="col-md-8" type="password" name="password" placeholder="Masukkan Kata Sandi" required></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input style="border-radius: 10; color: #fff; background-color: #007bff; border-color: #007bff;" class="col-md-8 btn btn-primary" type="submit" value="Masuk"></td>
                  </tr>
              </table>
            </form>
          </div>
        </div>
      </div>
    </section>
    <?php } ?>

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
              <h2 class="text-black mt0">Kirim saran? Klik aja</h2>
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

<script type="text/javascript">
  var myInput = document.getElementById("psw");
  var letter = document.getElementById("letter");
  var capital = document.getElementById("capital");
  var number = document.getElementById("number");
  var length = document.getElementById("length");

  myInput.onfocus = function(){
    document.getElementById("message").style.display = "block";
  }

  myInput.onblur = function(){
    document.getElementById("message").style.display = "none";
  }

  myInput.onkeyup = function(){
    var lowerCaseLetters = /[a-z]/g;
    if(myInput.value.match(lowerCaseLetters)){
      letter.classList.remove("invalid");
      letter.classList.add("valid");
    }else{
      letter.classList.remove("valid");
      letter.classList.add("invalid");
    }

    var upperCaseLetters = /[A-Z]/g;
    if(myInput.value.match(upperCaseLetters)){
      capital.classList.remove("invalid");
      capital.classList.add("valid");
    }else{
      capital.classList.remove("valid");
      capital.classList.add("invalid");
    }

    var numbers = /[0-9]/g;
    if(myInput.value.match(numbers)){
      number.classList.remove("invalid");
      number.classList.add("valid");
    }else{
      number.classList.remove("valid");
      number.classList.add("invalid");
    }

    if(myInput.value.length >= 8){
      length.classList.remove("invalid");
      length.classList.add("valid");
    }else{
      length.classList.remove("valid");
      length.classList.add("invalid");
    }
  }
</script>
</html>