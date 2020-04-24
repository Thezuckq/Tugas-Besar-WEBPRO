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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" type="text/css">
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
        background-color: #fcfcfc;
        }
      footer{
        position: relative;
        bottom: -100px;
        }
      p {
        font-size: 16px;
      }
      .margin {margin-bottom: 45px;}
      .bg-1 { 
        background-color: #fcfcfc; 
        color: black;
        }
      .bg-2 { 
        background-color: #64C7CC; 
        color: #ffffff;
        }
      .bg-3 { 
        background-color: #fcfcfc; 
        color: #555555;
        }
      .bg-4 { 
        background-color: #64C7CC; 
        color: #fcfcfc;
        }
      .container-fluid {
        padding-top: 70px;
        padding-bottom: 70px;
        }
      .navbar {
        background-color: white;
        padding-top: 15px;
        padding-bottom: 15px;
        border: 0;
        border-radius: 0;
        margin-bottom: 0;
        font-size: 12px;
        letter-spacing: 5px;
        }
      .navbar-nav  li a:hover {
        color: #64C7CC !important;
        }
       .list {
        display: -ms-flexbox;
        display: -webkit-box;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        position: relative;
        }

      .list--item {
        width: 25%;
        float: center;
        padding: 10px;
        margin: 10px;
        display: -ms-flexbox;
        display: -webkit-box;
        display: flex;
        }
      .list--item figure {
        background: #fff;
        box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);
        position: relative;
        border-radius: 8px;
        }
      .list--item img {
        display: block;
        width: 100%;
        border-radius: 8px;
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
        background: #f8f273;
        position: absolute;
        left: 0;
        }

      .img-ils{
        width: 317px;
        height: 300px;
        display: block;
        margin-right: 30px;
        margin-left: auto;
        margin-top: 20px;
        margin-bottom: 20px;
      }

      .container-head{
        padding-top: 10px;
        padding-bottom: 10px;
        padding-right: 20px;
        background-color: white;
        border-radius: 20px;
        vertical-align: middle;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .text-head{
        color:#64C7CC; 
        font-size: 75px;
        text-align: left;
        margin-bottom: 20px;
        font-weight: bold;
        margin-left: 30px;
      }
      #text-desc-1{
        font-weight: bold;
        font-size: 22px;
        text-align: left;
        margin-left: 30px;
      }
      #text-desc-2{
        font-size: 16px;
        text-align: left;
        margin-left: 30px;
      }
      #div-head{
        float: left;
      }
      .btn-head {
        background-color: #64C7CC; /* Green */
        border-radius: 8px;
        border: none;
        color: white;
        padding: 16px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        float: left;
        margin-left: 30px;
      }
      .page-section {
       padding: 100px 0;
      }
      .circle{
        color: #64C7CC;
      }
      #sec-3{
        margin-bottom: 60px;
      }
      .iconcolor{
        color: white;
      }

      .card-row{
        align-items: center;
        justify-content: center;
        display: -ms-flexbox;
        display: -webkit-box;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        position: relative;
      }

      .card {
      text-align: center;
      margin-left: 20px;
      margin-right: 20px;
      align-items: center;
      height: 500px;
      background-color: white;
      border-radius: 8px;
      padding: .5rem;
      -webkit-box-shadow: 0 2px 2px rgba(0, 0, 0, 0.15);
      box-shadow: 0 2px 2px rgba(0, 0, 0, 0.15);
      display: flex;
      color: #5d5e5e;

      }
      .card-content{
        margin: 20px;
        vertical-align: center;
      }
      .iconcolor-2{
        color: #64C7CC;
      }
      .btn-secon {
        background-color: #64C7CC; /* Green */
        border-radius: 8px;
        border: none;
        color: white;
        padding: 8px 16px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        float: center;
      }
      .table-con, table{
        color: black;
        font-size: 14px;
        border-collapse: collapse;
        border-radius: 8px;
        overflow: hidden;
        text-align: center;
        align-items: center;
        background-color: white;
      }

      thead{
        background-color: #64C7CC;
        color: white;
        border-radius: 8px;
        display: table-header-group;

      }
      .td{
        border: 2px solid red;
      }
      .table-flex{
        display: -ms-flexbox;
        display: -webkit-box;
        display: flex;
        flex-wrap: wrap;
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