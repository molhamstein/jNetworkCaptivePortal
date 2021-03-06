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
	<link rel="stylesheet" type="text/css" href="css/util.css?v=1.2">
	<link rel="stylesheet" type="text/css" href="css/main.css?v=1.2">
<!--===============================================================================================-->
</head>
<body>
<div class="container-loader hidden">
	<img src="images/Spinner.svg" alt="Kiwi standing on oval">
</div>
<div id="errorModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Error</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
	<div class="container-login100" style="background-image: url('images/bg-01.jpg');">

		<?php if($error) : ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>


		<?php if($trial == 'yes') : ?>
			<div class="alert alert-info">
				Free trial available, <a href="<?php echo $linkloginonly; ?>?dst=<?php echo $linkorigesc; ?>&amp;username=T-<?php echo $macesc; ?>">click here</a>.
			</div>
		<?php endif; ?>

		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form id="login100-form"  class="login100-form validate-form " action="<?php echo $linkloginonly; ?>" role="form" method="post">
				<span class="login100-form-title p-b-37">
					تسجيل الدخول
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate=" يرجى إدخال رقم الهاتف و التأكد من إدخال بشكل صحيح">
					<input class="input100 mobile" type="text" name="username"  placeholder="رقم الهاتف">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "يرجى إدخال كلمة السر">
					<input class="input100" type="password" name="password" placeholder="كلمة السر">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button  class="login100-form-btn">
						تسجيل الدخول
					</button>
				</div>
        <input type="hidden" name="dst" value="<?php echo $linkorig; ?>"/>
        <input type="hidden" name="popup" value="true"/>
				<div class="text-center p-t-20 p-b-20">
					<span class="txt1">
					  أو
					</span>
				</div>
				<div class="container-signup100-btn">
					<button  id="signup-form-btn" class="signup100-btn">
					 إنشاء حساب
					</button>
				</div>
				<div class="text-center p-t-20 p-b-20">
					<span class="txt1">
						<a id="forget100-form-show" href="#">نسيت كلمة المرور ؟</a>
					</span>
				</div>
				<div class="text-center p-t-5 p-b-5">
					<span class="txt1">
						<a id="verify100-form-show" href="#">التحقق من الحساب</a>
					</span>
				</div>
			</form>
			<form id="forget100-form"  class="forget100-form validate-form ">
				<div  class="login100-form-backArrow">
					<i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i>
				</div>
				<span  class="forget100-form-title p-b-37">
	أدخل رقم الهاتف الخاص بك و سيتم إرسال رسالة لاستعادة كلمة المرور
				</span>
				<div class="wrap-input100 validate-input m-b-20" data-validate=" يرجى إدخال رقم الهاتف و التأكد من إدخاله بشكل صحيح">
					<input class="input100" type="text" name="mobile" placeholder="رقم الهاتف">
					<span class="focus-input100"></span>
				</div>
				<div class="container-forget100-form-btn">
					<button id="forget100-form-btn" class="forget100-form-btn">
					إرسال الرمز
					</button>
				</div>
			</form>
			<form id="verify100-form"  class="verify100-form validate-form ">
				<div  class="login100-form-backArrow">
					<i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i>
				</div>
				<span  class="verify100-form-title p-b-37">
	يرجى إدخال الرمز و رقم الهاتف الخاص بحسابك
				</span>
				<div class="wrap-input100 validate-input m-b-20" data-validate=" يرجى إدخال رقم الهاتف و التأكد من إدخاله بشكل صحيح">
					<input class="input100" type="text" name="mobile" placeholder="رقم الهاتف">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input m-b-20" data-validate="يرجى إدخال الرمز الخاص بك">
					<input class="input100" type="text" name="code" placeholder="رمز التحقق">
					<span class="focus-input100"></span>
				</div>
				<div class="container-verify100-form-btn">
					<button id="verify100-form-btn" type="button" class="verify100-form-btn">
					أدخل الرمز
					</button>
				</div>
			</form>

      <form id="confirmreset100-form"  class="confirmreset100-form validate-form ">
        <div  class="login100-form-backArrow">
          <i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i>
        </div>
        <span  class="confirmreset100-form-title p-b-37">
          يرجى إدخال كلمة المرور الجديدة
        </span>
        <div class="wrap-input100 validate-input m-b-20" data-validate="يرجى إدخال رمز التحقق">
          <input class="input100" type="text" name="code" placeholder="رمز التحقق">
          <span class="focus-input100"></span>
        </div>
        <div class="wrap-input100 validate-input m-b-20" data-validate="يرجى إدخال كلمة المرور">
          <input class="input100" type="password" name="newPassword" placeholder="كلمة المرور الجديد">
          <span class="focus-input100"></span>
        </div>
        <div class="container-confirmreset100-form-btn">
          <button id="confirmreset100-form-btn" class="confirmreset100-form-btn">
          تعيين كلمة المرور
          </button>
        </div>
      </form>

			<form id="signup100-form" class="signup100-form validate-form ">
				<div  class="login100-form-backArrow">
					<i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i>
				</div>
				<span class="signup100-form-title p-b-37">
					حساب جديد
				</span>
				<div class="wrap-input100 validate-input m-b-20" data-validate="يرجى إدخال الاسم">
					<input class="input100" type="text" name="username" placeholder="الاسم">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input m-b-25" data-validate = "يرجى إدخال البريد الإلكتروني و التأكد من كتابته بشكل صحيح">
					<input class="input100" type="text" name="email" placeholder="البريد الإلكتروني">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input m-b-25" data-validate = "يرجى إدخال كلمة السر">
					<input class="input100" type="password" name="password" placeholder="كلمة السر">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input m-b-20" data-validate=" يرجى إدخال الرقم الهاتف و التأكد من إدخاله بشكل صحيح">
					<input class="input100" type="text" name="mobile" placeholder="رقم الموبايل">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input m-b-20" data-validate="يرجى إدخال تاريخ الميلاد">
					<input class="input100" type="text"  name="birthdate"  value="" placeholder="الميلاد">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input m-b-20" data-validate="يرجى اختيار الجنس">
			 <select class="form-control select-input100" name="gender" id="sel1" >
				     <option value="" disabled selected>الجنس</option>
				 <option >ذكر</option>
<option >أنثى</option>
 </select>
				</div>
				<div class="wrap-input100 validate-input m-b-20"  data-validate="يرجى اختيار مهنة من القائمة">
       <select class="form-control select-input100" name="profession" id="sel2">
				  <option value="" disabled selected>المهنة</option>
	 <option>الإداره و خدمات الدعم الاداري</option>
	 <option>النقل و الحدمات اللوجستيه</option>
	 <option>الخدمات الاجتماعيه</option>
	 <option>الإعلام و الإعلان</option>
	 <option>المبيعات و التسويق</option>
	 <option>الصناعه و التصنيع</option>
	 <option>الخدمات الطبية و العلوم</option>
	 <option>الطاقة و النفط و الغاز</option>
	 <option>الفنادق و المطاعم</option>
	 <option>التشييد و العقارات</option>
	 <option>البنوك و الصرفة</option>
	 <option>التكنولوجيا و الاتصالات</option>
	 <option>المحاسبة</option>
	 <option>التعليم</option>
	 <option>الفنون و التصميم</option>
	 <option>الحدمات القانونية</option>
	 <option>المهن اليدويه و الحرفية</option>

 </select>
				</div>
        <input name="realm" value="reg" type="hidden" >
				<div class="container-signup100-btn p-b-20">
					<button id="signup100-btn"  class="signup100-btn">
					 إنشاء حساب
					</button>
				</div>
			</form>


		</div>
	</div>



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
	<script src="js/main.js?v=1.2"></script>

	<?php if($chapid) : ?>
	<script type="text/javascript" src="js/md5.js"></script>
	<script type="text/javascript">
	<!--
		function doLogin() {
		<?php if(strlen($chapid) < 1) echo "return true;\n"; ?>
		document.sendin.username.value = document.login.username.value;
		document.sendin.password.value = hexMD5('<?php echo $chapid; ?>' + document.login.password.value + '<?php echo $chapchallenge; ?>');
		document.sendin.submit();
		return false;
		}
	//-->
	</script>
	<?php endif; ?>

	<script type="text/javascript">
	document.login.username.focus();
	</script>


</body>
</html>
