<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Go-Sus</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.20/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.20/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <style>
  html,
  body {
    line-height: 1.8;
    color: #black;
    background-color: #F2F2F2;
  }
  footer{
    position: relative;
    bottom: -400px;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
    background-color: #f2f2f2; 
    color: black;
  }
  .bg-2 { 
    background-color: #31E5BB; 
    color: #ffffff;
  }
  .bg-3 { 
    background-color: #F2F2F2; 
    color: #555555;
  }
  .bg-4 { 
    background-color: #2f2f2f; 
    color: #fff;
  }
  .container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
  }
  .navbar {
    padding-top: 15px;
    padding-bottom: 15px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
    color: #1abc9c !important;
  }
   .list {
  display: -ms-flexbox;
  display: -webkit-box;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
}

.list--item {
  width: 25%;
  float: left;
  padding: 10px;
  display: -ms-flexbox;
  display: -webkit-box;
  display: flex;
}
.list--item figure {
  background: #fff;
  box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);
  position: relative;
}
.list--item img {
  display: block;
  width: 100%;
}
.list--item figcaption {
  padding: 6px 12px 12px;
  font-size: 12px;
  color: #444;
}
.list--item header, .list--item figcaption {
  padding-left: 25%;
}
.list--item header {
  margin-top: 12px;
}
.list--item h2 {
  font-size: 14px;
  padding: 0 0 0;
  margin: 0;
}
.i-am-centered { margin-left: 200px; max-width: 2000px;}

.floater {
  width: 20%;
  height: 50px;
  background: orange;
  position: absolute;
  left: 0;
}
    </style>
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <?php
        echo $headernya;
        ?>
    </nav>
    <div class="container-fluid bg-1 text-center">
        <?php
        echo $contentnya;
        ?>
    </div>
    <footer class="container-fluid bg-4 text-center">
    <p>Go-Sus 2020.</p> 
    </footer>
</body>

</html>