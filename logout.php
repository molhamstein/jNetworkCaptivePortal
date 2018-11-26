<?php
    $mac=$_POST['mac'];
    $ip=$_POST['ip'];
    $username=$_POST['username'];
    $linklogin=$_POST['link-login'];
    $linkorig=$_POST['link-orig'];
    $error=$_POST['error'];
    $trial=$_POST['trial'];
    $loginby=$_POST['login-by'];
    $chapid=$_POST['chap-id'];
    $chapchallenge=$_POST['chap-challenge'];
    $linkloginonly=$_POST['link-login-only'];
    $linkorigesc=$_POST['link-orig-esc'];
    $macesc=$_POST['mac-esc'];
    $identity=$_POST['identity'];
    $bytesinnice=$_POST['bytes-in-nice'];
    $bytesoutnice=$_POST['bytes-out-nice'];
    $sessiontimeleft=$_POST['session-time-left'];
    $uptime=$_POST['uptime'];
    $refreshtimeout=$_POST['refresh-timeout'];
    $linkstatus=$_POST['link-status'];
?>



<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
	<title>Login V9</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css?v=1.4">
	<link rel="stylesheet" type="text/css" href="css/main4.css?v=1.4">
<!--===============================================================================================-->
</head>
<body>

<div class="container-alogin" style="background-image: url('images/bg-01.jpg');">
  <div class="col-md-6 col-sm-12" >
    <div class="card">
    <img class="card-img-top" src="http://via.placeholder.com/550x150" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">  تم تسجيل الخروج بنجاح</h5>

    </div>
    <ul class="list-group list-group-flush">
      <table class="table">
    <tbody>
      <tr>
        <td>اسم المستخدم</td>
        <td><?php echo $username; ?> </td>
      </tr>
        <tr>
            <td>عنوان ip</td>
            <td><?php echo $ip; ?></td>
        </tr>
        <tr>
            <td>عنوان MAC</td>
            <td><?php echo $mac; ?></td>
        </tr>
        <tr>
            <td>مدة الجلسة</td>
            <td><?php echo $uptime; ?></td>
        </tr>
        <?php if($sessiontimeleft) : ?>
            <tr>
                <td>المدة المتبقية</td>
                <td><?php echo $sessiontimeleft; ?></td>
            </tr>
        <?php endif; ?>
        <tr>
            <td>bytes up/down:</td>
            <td><?php echo $bytesinnice; ?> / <?php echo $bytesoutnice; ?></td>
        </tr>
    </tbody>
  </table>
    </ul>
    <div class="card-body text-center">
      <a href="#" class="card-link col-md-3"><i class="fa fa-facebook fa-2x"></i></a>
      <a href="#" class="card-link col-md-3"><i class="fa fa-twitter fa-2x"></i></a>
      <a href="#" class="card-link col-md-3"><i class="fa fa-instagram fa-2x"></i></a>
    </div>
  </div>
  </div>



</div>
    <footer class="footer-alogin p-t-20">
     <div class="container text-left">
       <span class="text-muted">enjoy your free WIFI</span>
     </div>
   </footer>

	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main4.js"></script>

</body>
</html>
