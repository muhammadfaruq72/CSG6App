
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>  History </title>

<link href="../../../prescription/bootstrap.min.css" rel="stylesheet">

<link href="../../../prescription/flaticon.css" rel="stylesheet">

<link href="../../../prescription/font-awesome.min.css" rel="stylesheet">

<link href="../../../assets/public_css/style2.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/5fe4a5af8f.js" crossorigin="anonymous"></script>
<script type="dca1d1a57b6c6f13351cf2c6-text/javascript">
            function printContent(el){
                var restorepage = document.body.innerHTML;
                var printcontent = document.getElementById(el).innerHTML;
                document.body.innerHTML = printcontent;
                window.print();
                document.body.innerHTML = restorepage;
            }
        </script>
<script async src='/cdn-cgi/bm/cv/669835187/api.js'></script></head>
<body>
<div class="container">
<div class="row top1-bar">
<div class="social-icons pull-right">
<ul>
<li><a href="" onclick="if (!window.__cfRLUnblockHandlers) return false; printContent('div1')" title="Print" data-cf-modified-dca1d1a57b6c6f13351cf2c6-=""><i class="fa fa-print"></i></a></li>
</ul>
</div>
</div>
</div>
<div id="div1">
<div class="container">
<div class="row top-bar" style="border-bottom: 7px double #EAEAEA;">
<div class="left-text pull-left">
<p style="color:#fff;"><b> History</b> </p>
</div>
</div>
</div>
<div class="container header" style="padding: 30px 20px;">
<div class="logo pull-left">
<address style="border:1px solid #ddd; width:184px; paddign:2px">
<img width="180" src="../../../image/Patient/{{$appoint->image}}">
</address>
</div>
<div class="header-right-info pull-left clearfix">
<div class="single-header-info">
<h4>
<strong>Patient Name : </strong><?php echo \Crypt::decryptString($appoint->title)?></p>
<p><strong>Patient Id : </strong>{{$appoint->patient_id}}</p>
<p><strong>Phone Number : </strong><?php echo \Crypt::decryptString($appoint->phone)?></p>
<p><strong>Blood Group : </strong><?php echo \Crypt::decryptString($appoint->blood)?></p>
<p><strong>Birth date : </strong>
    <?php echo \Crypt::decryptString($appoint->birth)?>,
</p>
</h4>
</div>
</div>
</div>
<section>
<div class="container">
<div class="row details-content">
<div class="col-sm-12">
<div class="table-responsive marg">
<table class="table table-bordered table-hover">
<thead>
<tr>
<th>Appointment Id</th>
<th>Doctor Name</th>
<th>Department</th>
<th>Date</th>
</tr>
</thead>
<tbody>
<div class="alert alert-danger alert-dismissable ">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
<strong>You have no prescription history!</strong>
</div>
</tbody>
<tfoot>
 <tr>
<td colspan="5" class="text-center">Data retrieved from infoplease and worldometers</a>.</td>
</tr>
</tfoot>
</table>
</div>
</div>
</div>
</div>
</section>
<div class="container">
<div class="row footer" style="border-top: 7px double #EAEAEA;">
<p></p>
</div>
</div>
</div>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="dca1d1a57b6c6f13351cf2c6-|49" defer=""></script><script type="text/javascript">(function(){window['__CF$cv$params']={r:'614f14c5c934c34f',m:'6b4937d1918ed56f55bcd645ca30571c8185f755-1611211618-1800-Abi7E4AYmwdwnQtIwEXdemOmjPhhuRUj6HPwgfDAfDKyarYrvA0qWKLcyiX685nqxHN4RnndZvw0YtG1A/fOoYdpXue3Xgf4h3mBSdAoCiz2Fu9FlOopM3alGZUy3ovyqu3mg0JMeJNeTa4LB072wFfjnG0FaHmoGrSwRbfC7J5b',s:[0x9a308fe84d,0x28b16a4258],}})();</script><script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"version":"2021.1.1","si":10,"rayId":"614f14c5c934c34f"}'></script>
</body>
</html>