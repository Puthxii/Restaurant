<?php 

    $id = $_GET['id'];
    $timeval;

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Xin lin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome & Pixeden Icon Stroke icon font-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/pe-icon-7-stroke.css">
    <!-- Google fonts - Roboto Condensed & Roboto-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700|Roboto:300,400">
    <!-- lightbox-->
    <link rel="stylesheet" href="css/lightbox.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="x.png">
    <link href="css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body class="home">
    <!-- navbar-->
    <header class="header">
      <div role="navigation" class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header"><a href="index.php" class="navbar-brand">Xin lin.</a>
            <div class="navbar-buttons">
              <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle navbar-btn">Menu<i class="fa fa-align-justify"></i></button>
            </div>
          </div>
          <div id="navigation" class="collapse navbar-collapse navbar-right">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.php">Home</a></li>
              <!-- <li><a href="text.html">Text page</a></li>
              <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Dropdown item 1</a></li>
                  <li><a href="#">Dropdown item 2</a></li>
                  <li><a href="#">Dropdown item 3</a></li>
                  <li><a href="#">Dropdown item 4</a></li>
                </ul>
              </li>
              <li><a href="contact.html">Contact</a></li> -->
            </ul><a href="#" data-toggle="modal" data-target="#login-modal" class="btn navbar-btn btn-white pull-left"><i class="fa fa-sign-in"></i>Log OUT</a>
          </div>
        </div>
      </div>
    </header>
    <!-- *** LOGIN MODAL ***_________________________________________________________
    -->
    <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close">×</button>
            <h4 id="Login" class="modal-title">Customer login</h4>
          </div>
          <div class="modal-body">
            <form action="customer-orders.html" method="post">
              <div class="form-group">
                <input id="email_modal" type="text" placeholder="email" class="form-control">
              </div>
              <div class="form-group">
                <input id="password_modal" type="password" placeholder="password" class="form-control">
              </div>
              <p class="text-center">
                <button type="button" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
              </p>
            </form>
            <p class="text-center text-muted">Not registered yet?</p>
            <p class="text-center text-muted"><a href="#"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
          </div>
        </div>
      </div>
    </div>
    <!-- *** LOGIN MODAL END ***-->
    <div id="carousel-home" data-ride="carousel" class="carousel slide carousel-fullscreen carousel-fade">
    
      <div role="listbox" class="carousel-inner">
        <div style="background-image: url('img/bgtable.jpg');" class="item active">
          <div class="overlay"></div>
          <div class="carousel-caption">
            <h1 class="super-heading"></h1>
            <p class="super-paragraph">“Tell me what you eat, I’ll tell you who you are.” – Anthelme Brillat-Savarin</a>.</p>
          </div>
        </div>       
      </div>
    </div>
  
    
    <input type="hidden" name="id" id="id" value="<?=$id?>">


    <section class="section--padding-bottom-small">
      <div class="container">
        <input size="16" type="text" value="" id="datetopick" readonly class="form_datetime">
        <button type="button" id="picktime" class="btn btn-ghost">Time</button>
        <div class="row" id="rest"></div>
      </div> 
    </section>

    <footer class="footer">
      <div class="footer__copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <p>&copy;2017 Your name goes here</p>
            </div>
            <div class="col-md-6">
              <p class="credit">Template by <a href="https://bootstrapious.com/free-templates" class="external">Bootstrapious templates</a></p>
              <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Javascript files-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"> </script>
    <script src="js/lightbox.min.js"></script>
    <script src="js/front.js"></script><!-- substitute:livereload -->
    <script src="js/bootstrap-datetimepicker.min.js?t=20130302"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
   



    $(document).ready(function () {
      
      $(".form_datetime").datetimepicker({format: 'yyyy-mm-dd hh:ii'});
      // $("#rest").hide();

      $( "#picktime" ).click(function() {
        $timeval = $( "#datetopick" ).val()
        // alert($timeval);
        gettable(); 
            
      });
      function gettable(data){
        $.get("http://localhost/Restaurant/getTable", data,
        function (data, textStatus, jqXHR) {
          // $("#rest").show();
          // console.log(data);
          renderTable(data); 
          reserv();
        });
      }
   
      function renderTable(data){
        var rest = $("#rest");
        $timeval = $( "#datetopick" ).val()
        // alert($timeval);
        rest.empty();
        $.each(data, function (index, value) { 
          rest.append('<div class="col-sm-3">'
            +'<div class="post" id="pointer-'+value.id+'">'
              +'<div class="image"> <a href="booking.php?restId=<?=$id?>&tableId='+value.id+'"><img src="img/'+value.picture+'" alt="" class="img-responsive"></a></div>'
              +'<h3><a href="booking.php?restId=<?=$id?>&tableId='+value.id+'">'+value.number+'</a></h3>'
              +'<p class="post__intro" ><a href="booking.php?restId=<?=$id?>&tableId='+value.id+'">'+value.type+'</a></p>'
              +'<p class="read-more"><a href="booking.php?restId=<?=$id?>&tableId='+value.id+'&timeval='+$timeval+'" class="btn btn-ghost">Choose</a></p>'
            +'</div>'
          +'</div>')
        });
      }

       function reserv(){
        $.post("http://localhost/Restaurant/getReser", {
          "restId": <?=$id ?>, "timeval" : $timeval, 
          "cusId":localStorage.getItem('customerId')
        },function (data, textStatus, jqXHR) {
              // alert($timeval);
              console.log(data);
              $.each(data, function (i, v) { 

                //  $("#pointer-"+v.tableId).css("pointer-events", "none");
                //  $("#pointer-"+v.tableId).css("filter", "grayscale(100%)");
              });
          }
        );
      }

      

    });
  
  
  </script>
  </body>
</html>