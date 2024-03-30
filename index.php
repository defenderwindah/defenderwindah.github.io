<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Portofolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
    <style type="text/css">
    	.navbar{
          width: 100%;

    	}

    	.jumbotron {
    		background: url("https://wallpapercave.com/wp/wp11742574.jpg");
    		height: 490px;
             background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
    	}

    	.images img{
    		width: 200px;
    		border-radius: 100px;
    		margin-top: 40px;
    	}

    	h3{
    		margin-top: 20px;
    		font-size: 20px;
    		color: white;
    		font-weight: bold;
    	}

    	p{
    		text-align: center;
    		font-size: 18px;
    		margin-top: 10px;
    		font-weight: bold;
    		padding: 10px;
    	}


      img{
       	width: 40px;
       	border-radius: 100px;
       	margin-top: 20px;
       	padding: 0px 3px 0px 3px;
       }

       .button-link a{
       	text-decoration: none;
       	border: 1px solid;
       	margin: 15px;
       	padding: 10px;
       	background: blue;
       	color: white;
       	border-color: blue;
        text-transform: uppercase;
        border-radius: 100px;
       }

       .kontak{
          background: black;
          height: 200px;
       }

       .text-kontak  span{
       	padding-left: 20px;
       	color: white;
       	font-weight: bold;
       	padding: 10px;
       	margin: 4px;
       }
    </style>
  <body>
    <!-- Navbar-->
    <div class="navbar">
    	<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Defender Windah</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    </div>
    <!-- Joomtron -->
    <div class="jumbotron text-center mt-5">
    	<div class="images">
    		<img src="https://imagedelivery.net/9sCnq8t6WEGNay0RAQNdvQ/clc19l0j4016np6wdlrwbeyxh_3/public">
    	</div>
    	<div class="text">
    		<h3>Pentesting | Web Developer</h3>
    	</div>
    	<div class="link-media">
    		<a href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMlk9Rv37Kvr4ySwW75yUtdidPVjJTpfdARg&usqp=CAU"></a>
    		<a href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTmO5wMDIR7EXVB9jbRhQA1wie3AlefV-0N6w&usqp=CAU"></a>
    		<a href=""><img src="https://play-lh.googleusercontent.com/bYtqbOcTYOlgc6gqZ2rwb8lptHuwlNE75zYJu6Bn076-hTmvd96HH-6v7S0YUAAJXoJN"></a>
    	</div>
    	<br>
    	<br>
    	  	<div class="button-link">
    		<a href="">Message</a>
    		<a href="">Contact</a>
    	</div>
    </div>

    <!--About -->
    <div class="about">
    	<h1 style="text-align: center;margin-top: 20px;">About</h1>
    	<div class="paragraf">
    		<p>Hallo Perkenalkan Saya Defender Windah, <br>Saya Seorang Bug Hunter Dan Pengiat Di CyberSecurity. <br>Hoby Saya Mencari Program Bug hunting dan <br>Saya Juga Pengiat Dengan Programmer. </p>
    	</div>
    </div>
     <br>
     <br>
     <br>
        <section id="achievement">
        <div class="container">
            <div class="row text-center mt-4">
                <div class="col">
                    <h2 class="fw-bold">Sertifikat Bug Hunter</h2>
                </div>
            </div>
            <div class="row justify-content-center ms-auto mt-4">
                <div class="card col-md-4" style="width: 18rem;">
                    <img src="https://j.top4top.io/p_3010uw0rl0.jpg" width="400" class="card-img-top" style="border-radius: 0;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Sertifikat Strada</h5>
                        <p class="card-text">Bug bounty Dari strada.ac.id Atas Jasa Saya Menemukan Celah Di Sistem Web Strada.</p>
                        <a href="" class="btn btn-primary mt-4">Read More</a>
                    </div>
                </div>
                <div class="card col-md-4 ms-3" style="width: 18rem;">
                    <img src="https://d.top4top.io/p_3010hz19w0.jpg" class="card-img-top" style="border-radius: 0;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Sertifikat Webmaker</h5>
                        <p class="card-text">Sertifikat apresiasi dari Pembuatan Jasa Website(Webmaker) Atas Saya Menemukan Celah Di Sistem Webnya</p>
                        <a href="" class="btn btn-primary">Read More</a>
                    </div>
                </div>
                <div class="card col-md-4 ms-3" style="width: 18rem;">
                    <img src="https://h.top4top.io/p_3010gfmaq0.jpg" class="card-img-top mt-3" style="border-radius: 0;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Sertifikat Stain Kepri</h5>
                        <p class="card-text">Sertifikat apresiasi Dari Kampus Stain Kepri Atas Saya Menemukan Celah Bug DI Sistem Webnya</p>
                        <a href="" class="btn btn-primary mt-2">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
              <div class="row justify-content-center ms-auto mt-4">
                <div class="card col-md-4" style="width: 18rem;">
                    <img src="https://g.top4top.io/p_3010nnedb0.jpg" width="400" class="card-img-top" style="border-radius: 0;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Sertifikat Stie Pasundan</h5>
                        <p class="card-text">Sertifikat apresiasi Dari Stie Pasundan Atas Saya Menemukan Celah Bug DI Sistem Webnya</p>
                        <a href="" class="btn btn-primary mt-4">Read More</a>
                    </div>
                </div>
                <div class="card col-md-4 ms-3" style="width: 18rem;">
                    <img src="https://c.top4top.io/p_3010bll0z0.jpg" class="card-img-top" style="border-radius: 0;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Sertifikat PT Djingga Media</h5>
                        <p class="card-text">Sertifikat apresiasi Dari PT Djingga Media Karena Saya Berhasil Menemukan Celah Bug Di Sistem Webnya</p>
                        <a href="" class="btn btn-primary">Read More</a>
                    </div>
                </div>
                <div class="card col-md-4 ms-3" style="width: 18rem;">
                    <img src="https://a.top4top.io/p_3010xjhmc0.jpg" class="card-img-top mt-3" style="border-radius: 0;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Sertifikat Man2Magetan</h5>
                        <p class="card-text">Sertifikat apresiasi dari Man2magetan atas saya menemukan bug di web ppdb dan Saya Memperbaiki Celah Bug Tersebut.</p>
                        <a href="" class="btn btn-primary mt-2">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
                     <div class="row justify-content-center ms-auto mt-4">
                <div class="card col-md-4" style="width: 18rem;">
                    <img src="https://e.top4top.io/p_3010x34m80.jpg" width="400" class="card-img-top" style="border-radius: 0;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Sertifikat Iainkudus</h5>
                        <p class="card-text">Sertifikat Aspresiasi Atas Saya Menemukan Celah Di Sistem Web nya</p>
                        <a href="" class="btn btn-primary mt-4">Read More</a>
                    </div>
                </div>
                <div class="card col-md-4 ms-3" style="width: 18rem;">
                    <img src="https://k.top4top.io/p_30102wjru0.jpg" class="card-img-top" style="border-radius: 0;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Sertifikat AKADEMIPRESTASI</h5>
                        <p class="card-text">Sertifikat apresiasi PT AKADEMIPRESTASI Atas Saya Menemukan Celah Bug Di Webnya<</p>
                        <a href="" class="btn btn-primary">Read More</a>
                    </div>
                </div>
                <div class="card col-md-4 ms-3" style="width: 18rem;">
                    <img src="https://f.top4top.io/p_3010i0y2g1.jpg" class="card-img-top mt-3" style="border-radius: 0;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Sertifikat UNPKEDIRI</h5>
                        <p class="card-text">Sertifikat apresiasi Dari Universitas Nusantara PGRI Kediri Atas Saya Menemukan Celah Bug Di Sistem Webnya</p>
                        <a href="" class="btn btn-primary mt-2">Read More</a>
                    </div>
                </div>

                    <div class="card col-md-4 ms-3" style="width: 18rem;">
                    <img src="https://b.top4top.io/p_3010gpdts0.jpg" class="card-img-top mt-3" style="border-radius: 0;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Sertifikat Univ Paramadina</h5>
                        <p class="card-text">Sertifikat apresiasi Dari Universitas Paramadina Atas Saya Menemukan Celah Bug Di WebNya</p>
                        <a href="" class="btn btn-primary mt-2">Read More</a>
                    </div>
                </div>
                     <div class="card col-md-4 ms-3" style="width: 18rem;">
                    <img src="https://c.top4top.io/p_3010mtasu0.jpg" class="card-img-top mt-3" style="border-radius: 0;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Sertifikat Univ Paramadina</h5>
                        <p class="card-text">Sertifikat apresiasi Dari Universitas Paramadina Atas Saya Menemukan Celah Bug Di WebNya</p>
                        <a href="" class="btn btn-primary mt-2">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <!-- Hubungi Sy -->
        <div class="hubungi-h1">
        	<h1 style="text-align: center;margin-top: 30px; ">Hubungi Kami</h1>
        </div>
        <br>
         <div class="kontak">
         	<div class="text-kontak">
         		<span>Was:    082394773867</span>
         		<br>
         		<span>Email:  defnd@gmail.com</span>
         		<br>
         		<span>Alamat: Sulawesi</span>
         	</div>
         	<div class="footer">
         		<footer style="margin-top: 50px; color: white;
         		text-align: center; font-size: 19px;">
         			@CopyRight By Defender Windah
         		</footer>
         	</div>
         </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>