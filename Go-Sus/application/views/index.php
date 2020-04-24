
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Carlota</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.20/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.20/js/jquery.dataTables.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet " href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic ">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <style>
        html,
        body {
            padding-top: 30px;
            background-color: white;
            height: 100%;
            margin: 0;
        }
        
        footer {
            background-color: #555;
            color: white;
            position: relative;
            bottom: -300px;
            padding: 15px;
        }
        .aboutus-section {
    padding: 40px 0;
}
.aboutus-title {
    font-size: 30px;
    letter-spacing: 0;
    line-height: 32px;
    margin: 0 0 39px;
    padding: 0 0 11px;
    position: relative;
    text-transform: uppercase;
    color: #000;
}
.aboutus-title::after {
    background: #fdb801 none repeat scroll 0 0;
    bottom: 0;
    content: "";
    height: 2px;
    left: 0;
    position: absolute;
    width: 54px;
}
.aboutus-text {
    color: #606060;
    font-size: 13px;
    line-height: 22px;
    margin: 0 0 35px;
}

a:hover, a:active {
    color: #ffb901;
    text-decoration: none;
    outline: 0;
}
.aboutus-more {
    border: 1px solid #fdb801;
    border-radius: 25px;
    color: #fdb801;
    display: inline-block;
    font-size: 14px;
    font-weight: 700;
    letter-spacing: 0;
    padding: 7px 20px;
    text-transform: uppercase;
}
.feature .feature-box .iconset {
    background: #fff none repeat scroll 0 0;
    float: left;
    position: relative;
    width: 18%;
}
.feature .feature-box .iconset::after {
    background: #fdb801 none repeat scroll 0 0;
    content: "";
    height: 150%;
    left: 43%;
    position: absolute;
    top: 100%;
    width: 1px;
}

.feature .feature-box .feature-content h4 {
    color: #0f0f0f;
    font-size: 18px;
    letter-spacing: 0;
    line-height: 22px;
    margin: 0 0 5px;
}


.feature .feature-box .feature-content {
    float: left;
    padding-left: 28px;
    width: 78%;
}
.feature .feature-box .feature-content h4 {
    color: #0f0f0f;
    font-size: 18px;
    letter-spacing: 0;
    line-height: 22px;
    margin: 0 0 5px;
}
.feature .feature-box .feature-content p {
    color: #606060;
    font-size: 13px;
    line-height: 22px;
}
.icon {
    color : #f4b841;
    padding:0px;
    font-size:40px;
    border: 1px solid #fdb801;
    border-radius: 100px;
    color: #fdb801;
    font-size: 28px;
    height: 70px;
    line-height: 70px;
    text-align: center;
    width: 70px;
}
}

        @media (max-width: 768px) {
            .index-content .col-lg-4 {
                margin-top: 20px;
            }
        }
        
        .carousel-inner img {
            width: 100%;
            min-height: 200px;
        }
        
        @media (max-width: 600px) {
            .carousel-caption {
                display: none;
            }
        }
        
        .row.content {
            height: 1500px
        }
        
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {
                height: auto;
            }
        }
    </style>
</head>

<body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><b>Carlota</b></a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li><a href="http://localhost/Carlota/home/loginindex">Home</a></li>
            <li><a href="http://localhost/Carlota/home/loginindex">Ask The Doctor</a></li>
            <li><a href="http://localhost/Carlota/home/loginindex">Contact Us</a></li>
            <li><a href="http://localhost/Carlota/home/loginindex">About Us</a></li>
                
        </ul>
        <ul class="nav navbar-nav navbar-right">
             <li><a href="http://localhost/Carlota/home/loginindex">Login</a></li>
        </ul>
    </div>
</div>    </nav>
    <div class="container">

         <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>

        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="http://localhost/Carlota/assets/img/doctor.jpg" alt="Image">
                <div class="carousel-caption">
                    <h3>Carlota</h3>
                    <p>Love you.</p>
                </div>
            </div>

            <div class="item">
                <img src="http://localhost/Carlota/assets/img/doctor.png" alt="Image">
                <div class="carousel-caption">
                    <h3>Carlota</h3>
                    <p>Love you.</p>
                </div>
            </div>
        </div>

        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>   
    <br>

    </div>
    <div class="container">
     <div class="col-sm-9">
      <h4><small>RECENT POSTS</small></h4>
      <hr>
      <h2>HIV dan Virus Corona: Hal Apa Saja yang Harus Diperhatikan</h2>
      <h5><span class="glyphicon glyphicon-time"></span> Post by Dr. Helmi R , Apr 19, 2020.</h5>
      <h5><span class="label label-danger">Covid 19</span> <span class="label label-primary">Info</span></h5><br>
      <p>Meningkatnya kasus COVID-19 di seluruh dunia menyebabkan kekhawatiran yang luar biasa bagi penduduk dunia. Apalagi virus corona ini dikatakan lebih berbahaya jika diidap oleh mereka yang mempunyai penyakit bawaan seperti jantung, paru, diabetes, dan mereka yang memiliki kekebalan imun yang lemah. 
      Salah satu kekhawatiran tersebut akan dirasakan mereka yang merupakan pengidap HIV. Melansir Centers for Disease Control and Prevention (CDC), hingga kini belum ada bukti ilmiah yang menetapkan mereka yang hidup dengan HIV memiliki risiko tinggi terhadap COVID-19. Oleh karena itu, ada beberapa hal yang mesti diperhatikan para pengidap HIV yang memiliki sistem imun lemah selama pandemi ini berlangsung. </p>
      <br><br>
      
      <h4><small>RECENT POSTS</small></h4>
      <hr>
      <h2>Ini Yang Mungkin Terjadi Jika Physical Distancing Diakhiri Terlalu Cepat</h2>
      <h5><span class="glyphicon glyphicon-time"></span> Post by Dr. Helmi R , Apr 19, 2020.</h5>
      <h5><span class="label label-success">Kesehatan</span></h5><br>
      <p>Sudah hampir satu pekan, Wuhan sebagai kota virus corona SARS-CoV-2, penyebab penyakit COVID-19 bermula telah mengakhiri kebijakan lockdown.  Pemerintah setempat telah memaksa warga untuk tidak keluar atau masuk selama 14 minggu. Kebijakan ini diambil karena kasus aktif di Tiongkok kini hanya berjumlah 1.100 kasus saja. Selain itu sudah ada 77.800 orang yang sudah sembuh dari kondisi ini. Selain itu, Italia juga sejak Selasa (14/4) telah melonggarkan kebijakan lockdown. Berbeda dengan apa yang dilakukan di Wuhan, pelonggaran kebijakan ini dimaksudkan untuk memperbaiki ekonomi yang mulai merosot. Namun, beberapa pemilik toko dan pekerja setempat khawatir tindakan ini terlalu cepat untuk dilakukan. Sehingga mereka berpikir bahwa gelombang kedua bisa saja datang lagi.</p>
      <hr>

  </div>
</div>


       </div>

    <footer class="container-fluid text-center">
        <p>Copyright Carlota 2020.</p>
    </footer>
</body>
</html>