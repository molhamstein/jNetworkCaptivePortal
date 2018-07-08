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
<html lang="en">
<head>
    <title>Mikrotik Hotspot | Session Status</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
</head>
<body>
<div id="wrap">
    <div class="navbar navbar-inverse navbar-static-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><?php echo $identity; ?></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="http://104.217.253.15/login/login.php">Login</a></li>
                    <li class="active"><a href="http://104.217.253.15/login/status.php">Status</a></li>
                    <li><a href="http://104.217.253.15/login/logout.php?erase-cookie=true">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div id="bottom-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-2 mylogo">
                    <a href="http://agratitudesign.blogspot.com/" ref="index.html"><img src="img/agratitudesignlogo2.png" alt="logo"></a>
                </div> 
                <div class="col-xs-10 textlogo">
                    <h1>Agratitudesign Hotspot</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="col-md-6 col-sm-12">        
            <div class="row">
                <?php if($error) : ?>
                    <div class="alert alert-danger"><?php echo $error; ?></div>
                <?php endif; ?>
                <?php if($loginby == 'trial') : ?> 
                    <div class="alert alert-info">Welcome trial user!</div>
                <?php elseif($loginby != 'mac') : ?>    
                    <div class="alert alert-info">Welcome <?php echo $username; ?>!</div>
                <?php endif; ?>
            </div>        
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-body">

                        <table class="table table-striped">
                            <tbody>
                            <tr>
                                <td>IP address:</td>
                                <td><?php echo $ip; ?></td>
                            </tr>
                            <tr>
                                <td>bytes up/down</td>
                                <td><?php echo $bytesinnice; ?> / <?php echo $bytesoutnice; ?></td>
                            </tr>
                            <?php if($sessiontimeleft) : ?>
                            <tr>
                                <td>connected / left:</td>
                                <td><?php echo $uptime; ?> / <?php echo $sessiontimeleft; ?></td>
                            </tr>
                            <?php else: ?>
                            <tr>
                                <td>connected:</td>
                                <td><?php echo $uptime; ?></td>
                            </tr>
                            <?php endif; ?>
                            <?php if($refreshtimeout) : ?>
                            <tr>
                                <td>status refresh</td>
                                <td><?php echo $refreshtimeout; ?></td>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>    
        <div class="col-md-6 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-body">

                    <div class="card hovercard">
                        <div class="cardheader">
                        </div>
                        <div class="avatar">
                        <img alt="" src="img/agratitudesignlogo.png">
                        </div>
                        <div class="info">
                        <div class="title">
                        <a href="http://agratitudesign.blogspot.com/">Agratitudesign HighSpeed Hotspot</a>
                        </div>
                        <div class="desc">Website Hotspot Interface For Free</div>
                        <div class="desc">created by <a target="_blank" href="http://agratitudesign.blogspot.com/" title="Agratitudesign Hotspot Templates">agratitudesign.blogspot.com</a></div>
                        <div class="desc">supported by <a target="_blank" href="http://wiswaweb.com/" title="Agratitudesign Hotspot Templates">wiswaweb.com</a></div>
                        </div>
                        <div class="bottom">
                        <a class="btn btn-primary btn-twitter btn-sm" href="https://twitter.com/agratitudesign"><i class="fa fa-twitter"></i></a>
                        <a class="btn btn-danger btn-sm" rel="publisher" href="https://plus.google.com/+KetutAgusSuardika"><i class="fa fa-google-plus"></i></a>
                        <a class="btn btn-primary btn-sm" rel="publisher" href="https://www.facebook.com/pages/Agratitudesign/451131721572773"><i class="fa fa-facebook"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="footer">
    <div class="container">
        <p class="text-muted">Powered by <a href="http://agratitudesign.blogspot.com/">Agratitudesign</a></p>
    </div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
