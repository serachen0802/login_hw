<?php
session_start();

if(!isset($_SESSION["userName"])){
  $_SESSION["lastpage"]="member.php";
  echo 'test';
  header("location:j_login.php");
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
    <a href="j_index.php" data-icon="home" data-theme="">Home</a>
    </div>
    <div align='center'><font color='red'>親愛的會員您好 歡迎來到會員專用頁!</font></div>
    
    
</div>
</body>
</html>