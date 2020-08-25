<?php
include ("nav.php");
?>
<!DOCTYPE html>
<html>
<head>
<style>

  .login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 12px;
  box-sizing: border-box;
  font-size: 14px;
}
.form .btn {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 47%;
  border: 0;
  padding: 9px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
  text-align:center;
}
.form button:hover,.form button:active,.form .btn:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}

body {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}
</style>  
  
</head>
<body>
 
 <div class="login-page">
  <div class="form">
     <h3>الإعدادات</h3>
 
     <div id="message"></div>
 
    <form class="login-form" id="myForm" action="" method="POST">
      <input type="button" value="الحساب" name="user_name" id="user_name"/>
      <span id="uname"></span>
      <input type="button" value="طرق الدفع" name="user_email" id="user_email"/>
      <span id="uemail"></span>
      <input type="button" value="الفواتير" name="user_contact" id="user_contact"/>
      <span id="umobile"></span>
      
      
    </form>
  </div>
</div>
</body>
</html>