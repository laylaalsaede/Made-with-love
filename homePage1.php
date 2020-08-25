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



<body   >

 <div class="bgimage">

<div class="minu">
    <nav class="navbar navbar-expand-sm  navbar-dark justify-content-center">
 <div class="Leftminu">
 
 <center>     <h3> <a href=""> <button class="btno"> <b>  إضافة متجر </b>  </button></a><font size="4">   هل ترغب في الانضمام الينا ؟ </font> </h3>  </center>

  </div>       

    </nav>

      

<div class="containr">
  <div class="btn-group">
 <p > <h3> <a href="login.php"> <button><b style="color:black">تسجيل الدخول</b></button></a></h3>
 
</div>
  


<br><br><br><br>
<center> <font size="5"><h1 style="color:white"> made with love </h1></font>  </center>
<center> <font size="5"><h1 style="color:white"> المنصة الإكترونية للأسر المنتجة</h1> </font> </center>
<center> <font size="6"> <p style="color:white"> طلبك يوصل لين بيتك </p> </font> </center>
<br>
<center> <a href="notofi.php"> <button class="btn"> <b> اطلب الان </b>  </button></a> </center>
 

</div>
<br> <br><br><br><br><br><br>
           <?php
include ("endpage.php") ;

?> 

</div>
</div>
</body>
</html>