<?php 

    $restId = $_GET['restId'];
    $tableId = $_GET['tableId'];
    $timeval = $_GET['timeval'];
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
  <body>
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
              <li class="active"><a href="index.html">Home</a></li>
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
            </ul><a href="#" data-toggle="modal" data-target="#login-modal" class="btn navbar-btn btn-ghost pull-left"><i class="fa fa-sign-in"></i>Log OUT</a>
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
    <!-- <section class="background-gray-lightest">
      <div class="container">
        <div class="breadcrumbs">
          <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li>Contact</li>
          </ul>
        </div>
        <h1>Contact</h1>
        <p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.  </p>
      </div>
    </section> -->
    <section class="background-gray-lightest">  
      <div id="contact" class="container">
        <!-- <div class="row">
          <div class="col-md-4">
            <div class="box-simple">
              <div class="icon"><i class="pe-7s-map-2"></i></div>
              <div class="content">
                <h4>Address</h4>
                <p>13/25 New Avenue<br>New Heaven, 45Y 73J<br>England, <strong>Great Britain</strong></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box-simple">
              <div class="icon"><i class="pe-7s-phone"></i></div>
              <div class="content">
                <h4>Call center</h4>
                <p class="text-muted">This number is toll free if calling from Great Britain otherwise we advise you to use the electronic form of communication.</p>
                <p><strong>+33 555 444 333</strong></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box-simple">
              <div class="icon"><i class="pe-7s-mail-open"></i></div>
              <div class="content">
                <h4>Electronic support</h4>
                <p class="text-muted">Please feel free to write an email to us or to use our electronic ticketing system.</p>
                <ul>
                  <li><strong><a href="mailto:">info@fakeemail.com</a></strong></li>
                  <li><strong><a href="#">
                        Ticketio
                         - our ticketing support platform</a></strong></li>
                </ul>
              </div>
            </div>
          </div>
        </div> -->
        <div class="row">
        <div class="col-lg-2"></div>
          <div class="col-lg-8">
            <div class="box-simple">
              <div class="icon"><i class="pe-7s-check"></i></div>
              <div class="content">
                <h4>Confirm Booking</h4>
                <!-- <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.</p> -->
                <form id="form">
                  <input type="hidden" name="restId" id="restId" value="<?=$restId?>">
                  <input type="hidden" name="tableId" id="tableId" value="<?=$tableId?>">
                  <input type="hidden" name="timeval" id="timeval" value="<?=$timeval?>">
                  <input type="hidden" name="cusId" id="cusId">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="brand" >Restaurant : Xin lin</label>
                        <!-- <input id="firstname" type="text" class="form-control"> -->
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="restName" >Branch :  <span id="restName"></span> </label>
                        <!-- <input id="lastname" type="text" class="form-control"> -->
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="tableName">Table :  <span id="tableName"></span> </label>
                        <!-- <input id="email" type="text" class="form-control"> -->
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="timeval">Date check : <?php echo $timeval; ?></span> </label>
                        <!-- <input id="subject" type="text" class="form-control"> -->
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="date">Date booking : <?php echo date("yy-m-d h:i")?></label>
                        <!-- <input id="subject" type="text" class="form-control"> -->
                      </div>
                    </div>
                    <!-- <div class="col-sm-4">
                      <div class="form-group">
                        <input name="date" type="date" id="date" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-6">
                    </div> -->
                    <!-- <div class="col-sm-12">
                      <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" class="form-control"></textarea>
                      </div>
                    </div> -->
                    <div class="col-sm-12">
                      <button type="submit" class="btn btn-primary" id="btn_insert" ><i class="fa fa-check-circle-o"></i>Submit</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-2"></div>
      </div>
    </section>
    <section class="background-gray-lightest"></section>
    <!-- <div id="map"></div> -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
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
        var cusId = localStorage.getItem('customerId'); 

        $.post("http://localhost/Restaurant/getNameNumberById", {
          restId : $( "#restId" ).val(), 
          tableId : $( "#tableId" ).val()
        },function (data, textStatus, jqXHR) { 
            // console.log(data);
            $("#restName").html(data.rest.name);
            $("#tableName").html(data.table.number+" ("+data.table.type+")");
        });
        // $timeval = '<?=$timeval?>'
        // alert($timeval);
        $("#cusId").val(cusId);

        $("#form").submit(function(e){
          e.preventDefault();
          $.post("http://localhost/Restaurant/insert",
          { restId : $( "#restId" ).val(), 
            tableId : $( "#tableId" ).val(), 
            cusId : $( "#cusId" ).val(),
            timeval : $( "#timeval" ).val(),
            date : $( "#date" ).val(), 
          }, 
          function(data, status){
              alert("Data: " + data + "\nStatus: " + status);
              window.location = 'index.php';          
          });
      });

    });

    </script>
  </body>
</html>