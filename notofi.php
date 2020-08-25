<!DOCTYPE html>
<html lang="en">
<head  >
 <meta charset="UTF-8">
<title> Home page </title>

         <meta http-equiv="Content-Type" content="text/html" />
       
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
         <link rel=stylesheet type="text/css" href="staylhome2.css">

</head>

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
  background: #f19292;
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
.containr .btn {

  background-color: goldenrod;
  color: black;
  font-size: 16px;
  padding: 8px 10px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}

.containr .btn:hover {
  background-color: white;
}
</style>

<style>
.btn-group button {



  background-color: white; 
 
  color: black; 
  font-size: 20px;
  padding: 6px 24px;
  border: none;  
  cursor: pointer; 
   border-radius: 5px;
 
}

.btn-group button:not(:last-child) {
  border-bottom: none; /* Prevent double borders */
}

/* Add a background color on hover */
.btn-group button:hover {
  background-color: #d4d7dd;
}
</style>
<style>
 .btno {
 
  background-color: white;
  color: black;
  font-size: 16px;
  padding: 8px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}

 .btno:hover {
  background-color:  #d4d7dd;
}
       nav {
        font-family: myFirstFont;
 background-color: #e3b04b;
        
}
</style>



<body>
<?php 
    
    if(isset($_POST["login"])) {
    header("Location: login.php");}
  ?>  
 <div class="bgimage">

<div class="minu">
    <nav class="navbar navbar-expand-sm  navbar-dark justify-content-center">
 <div class="Leftminu">
 
 <center>     <h3> <a href=""> <button class="btno"> <b>  إضافة متجر </b>  </button></a><font size="4">   هل ترغب في الانضمام الينا ؟ </font> </h3>  </center>

  </div>       

    </nav>
    
    
    
    <div class="login-page">
        <div class="form">
<form class="login-form" id="myForm" action="" method="POST">
      <br> <br>
    
    
    
    
    <input type="submit" value="قم بتسجيل الدخول" name="login"/> </form>
    
    
    
    
  <br>

</div>
</div>
    <br> <br><br> 
               <?php
include ("endpage.php") ;

?> 
</body>
</html>