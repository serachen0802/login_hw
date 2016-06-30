<?php
<<<<<<< HEAD
$userName="Guest";
  if(($_COOKIE["userName"]!="")){
   $userName=$_COOKIE["userName"];
 }

$log="登入";
  if($_COOKIE[userName]!=""){
    $log="登出";
        }
  ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Lab - index</title>
</head>
<body>

<table width="300" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#F2F2F2">
  <tr>
    <td align="center" bgcolor="#CCCCCC"><font color="#FFFFFF">會員系統 - 首頁</font></td>
  </tr>
  <tr>
   
    <td align="center" valign="baseline"><a href="login.php"><?php echo $log?></a> | <a href="secret.php">會員專用頁</a></td>
  </tr>
  <tr>
    <td align="center" bgcolor="#CCCCCC">Hello!<?php echo $userName?></td>
  </tr>
</table>


=======
session_start();
$user="guest";
$login="登入";
$con="login.php";

 if($_SESSION["userName"]!=""){
   $user=$_SESSION["userName"];
   $login="登出";
   $con="login.php?logout=1";
 }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>jQuery Lab - Controls</title>
<link rel="stylesheet" href="jquery.mobile-1.3.2/jquery.mobile-1.3.2.min.css" />
<script src="jquery-1.9.1.min.js"></script>
<script src="jquery.mobile-1.3.2/jquery.mobile-1.3.2.min.js"></script>

</head>
/*<style type="text/css">*/
/*    .blogbody{*/
/*        font-family:"Microsoft JhengHei";*/
/*    }*/
/*</style>*/

<body>
    
    <div id="home" data-role="page">
      <div data-role="header" data-position="fixed">
        <h3>首頁</h3>
        <!--<a href="#page1" data-icon="home" data-theme="">Home</a>-->
        
        </div>
        
    <h4  ><font >hello~<?php echo $user ?></font></h4>
    
    <!--<div role="main" class="ui-content">-->
    <!--    <imput type="submit" class="ui-btn-icon-left ui-icon-check ui-btn-inline" data-inline="true" data-theme="a"><a href="login.php">登入</a></input>-->
    <!--</div>-->
    <a href=<?php echo $con?> data-role="button" data-corners="true" data-shadow="true" data-iconshadow="true" data-inline="true" 
    data-wrapperels="span" data-theme="c" class="ui-btn ui-shadow ui-btn-corner-all ui-btn-up-c">
        <span class="ui-btn-inner ui-btn-corner-all">
            <span class="ui-btn-text"><?php echo $login?>
                </span>
                    </span>
                    </a>
                    
    <a href="member.php" data-role="button" data-corners="true" data-shadow="true" data-iconshadow="true" data-inline="true" 
    data-wrapperels="span" data-theme="c" class="ui-btn ui-shadow ui-btn-corner-all ui-btn-up-c">
        <span class="ui-btn-inner ui-btn-corner-all">
            <span class="ui-btn-text"><font><font>會員專用頁</font></font>
                </span>
                    </span>
                    </a>
        
        </div>
    
>>>>>>> dd4cc5bd9bbb53aea439c9db5eda8046007a7fbd
</body>
</html>