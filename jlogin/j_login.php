<?php
session_start();
if($_GET["logout"]!=""){
  unset($_SESSION["userName"]);
  header("location:index.php");
} 

if(isset($_POST["btnOK"])){
  if($_POST["txtUserName"]!=""){
    $_SESSION["userName"]=$_POST["txtUserName"];
    header("location:index.php");
  }else {
    $aler='<font color="red">請輸入帳號!!!</font>';
   }
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

<body>
  
<div id="home" data-role="page">
  <div data-role="header" data-position="fixed">
    <h3>會員登入</h3>
    <a href="index.php" data-icon="home" data-theme="">Home</a>

</div>
		<form method="post" action="login.php">
		
<div role="main" class="ui-content">
  <div class="ui-field-contain">
  <label for="gk-629wuwI" >帳號:</label>
  <input type="text" name="txtUserName" id="txtUserName" data-inline="true" placeholder="請輸入帳號">
</div>

<div class="ui-field-contain">
  <label for="gk-629tbLx">密碼:</label>
  <input type="text" name id="txtpassword" data-inline="true">
</div>

<button id="btnOK" name="btnOK" type="submit" data-theme="a" name="submit" value="submit-value" class="ui-btn-hidden"
aria-disabled="false" data-inline="true">登入</button>

<!--<div role="main" class="ui-content">-->
<!--  <imput name="btnOK" id="btnOK" type="submit" -->
<!--  class="ui-btn-icon-left ui-icon-check ui-btn-inline" data-inline="true" data-theme="a">登入-->
<!--  </input>-->
<!--</div>-->
</form>
 <input type="reset" value="重設" data-theme="a" data-inline="true"  >
<!--<div role="main" class="ui-content">-->
<!--  <imput type="submit" class="ui-btn-icon-left ui-icon-check ui-btn-inline" data-inline="true" >登入</input>-->
<!--</div>-->
  <!--   <div><a class="ui-btn">Button</a></div>-->
  <!--</div>-->
</div>

</body>
</html>
