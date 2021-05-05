

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title> information </title>

<link href="../../../prescription/bootstrap.min.css" rel="stylesheet">

<link href="../../../prescription/flaticon.css" rel="stylesheet">

<script src="https://kit.fontawesome.com/5fe4a5af8f.js" crossorigin="anonymous"></script>

<link href="../../../prescription/style.css" rel="stylesheet">

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800,700,800italic,600,400italic,300italic,600italic,700italic,300|Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700|Raleway:400,100,100italic,200,300,200italic,300italic,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<style type="text/css">
            /*map*/
             .google_map > iframe{
                width:350px!important;
                height:350px!important;
            }
        </style>
</head>
<body>
<div id="PrintMe">
<div class="container">
<div class="row top-bar">
<div class="left-text pull-left">
<p><b>Date : 2020-06-25 08:30:35</p>
</div>
<div class="social-icons pull-right">
<ul>
<li><a href="" onclick="if (!window.__cfRLUnblockHandlers) return false; printContent('PrintMe')" title="Print" data-cf-modified-308bd2a6e6151cccf531d708-=""><i class="fa fa-print"></i></a></li>
</ul>
</div>
</div>
</div>
<div class="container header">
<div class="logo pull-left">
<a href="#">
<img src="https://newclinic365.bdtask.com/./assets/uploads/images/clinic1.png" class="img-responsive" alt="Awesome Image">
</a>
</div>
<div class="header-right-info pull-right clearfix">
<div class="single-header-info">
</div>
<div class="single-header-info">
<div class="icon-box">
<div class="inner-box">
<i class="fa fa-phone"></i>
</div>
</div>
<div class="content">
<h3>Call Now</h3>
<p><b>0123456789</b></p>
</div>
</div>
</div>
</div>
<section>
<div class="container">
<div class="row information">
<div class="sec-title colored text-center">
<h2>Patient Information</h2>
<span class="decor">
<span class="inner"></span>
</span>
</div>
<div class="col-sm-6">
<div class="information-details">
 <ul>
<li>Name :<span class="pull-right"><?php echo \Crypt::decryptString($appoint->patient)?></span></li>
<li>Appointment Id :<span class="pull-right">{{$appoint->appoint_id}}</span></li>
<li>Patient Id :<span class="pull-right">{{$appoint->patient_id}}</span></li>
<li>Date :<span class="pull-right"><?php echo \Crypt::decryptString($appoint->date)?></span></li>
<li>Doctor :<span class="pull-right"><?php echo \Crypt::decryptString($appoint->doctor)?></span></li>
<li>Department :<span class="pull-right"><?php echo \Crypt::decryptString($appoint->depart)?></span></li>
</ul>
</div>
</div>
<div class="col-sm-6">
<div class="google_map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.338167485426!2d90.36570495018637!3d23.77096939383232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0aee2dbc1e9%3A0xa7cf8e13f79ef43c!2sVictoria+Medical+Services+Limited!5e0!3m2!1sbn!2sbd!4v1494944238848" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> </div>
</div>
</div>
</div>
</section>
<div class="container">
<div class="row footer">
<p></p>
</div>
</div>
</div>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="308bd2a6e6151cccf531d708-text/javascript"></script>

<script src="https://newclinic365.bdtask.com/extra/prescription/js/bootstrap.min.js" type="308bd2a6e6151cccf531d708-text/javascript"></script>
<script type="308bd2a6e6151cccf531d708-text/javascript">
    
    //print a div
    function printContent(el){
        var restorepage  = $('body').html();
        var printcontent = $('#' + el).clone();
        $('body').empty().html(printcontent);
        window.print();
        $('body').html(restorepage);
        location.reload();
    }

</script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="308bd2a6e6151cccf531d708-|49" defer=""></script></body>
</html>