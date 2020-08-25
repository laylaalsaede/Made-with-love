<?php
  
// Starting the session, to use and 
// store data in session variable 
session_start(); 
   
// If the session variable is empty, this  
// means the user is yet to login 
// User will be sent to 'login.php' page 
// to allow the user to login 
if (!isset($_SESSION['username'])) { 
    $_SESSION['msg'] = "You have to log in first"; 
    header('location: login.php'); 
} 
   
// Logout button will destroy the session, and 
// will unset the session variables 
// User will be headed to 'login.php' 
// after loggin out 
if (isset($_GET['logout'])) { 
    session_destroy(); 
    unset($_SESSION['username']); 
    header("location: login.php"); 
} 
?> 

<!DOCTYPE html>
<html lang="en">
<head  >
 <meta charset="UTF-8">
<title> Home page </title>

         <meta http-equiv="Content-Type" content="text/html" />
       
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
         <link rel=stylesheet type="text/css" href="stayl.css">

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



<body>

    
    
    
 <nav class="navbar navbar-expand-sm  navbar-dark justify-content-end">
  
  <!-- Links -->
  <ul class="navbar-nav mr-auto ">
       <li class="nav-item ">
        <h5><a class="nav-link text-light" href="homePage1.php">تسجيل الخروج &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></h5>
    </li></ul>
      
       <ul class="navbar-nav ml-auto ">
          <li class="nav-item">
               <h5><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>  السلة  (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
                   ?>)  &nbsp;&nbsp;</a></h5></li>
    <li class="nav-item">
        <h5><a class="nav-link text-light" href="foodlist.php">الطلبات &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></h5>
    </li>
    <li class="nav-item">
       <h5> <a class="nav-link text-light" href="SaveFile.php">اسئلة وأجوبة &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></h5>
    </li>
       <li class="nav-item">
        <h5><a class="nav-link text-light" href="Settings.php">الاعدادات &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></h5>
    </li>
        <li class="nav-item"> 
        <h5><a class="nav-link text-light" href="homepage2.php">    
            <?php if (isset($_SESSION['success'])) : ?> 
            <div class="error success" > 
                <h6> 
                    <?php
                        
                        unset($_SESSION['success']); ?> 
                </h6> 
            </div> 
        <?php endif ?> 
   
        <!-- information of the user logged in -->
        <!-- welcome message for the logged in user -->
        <?php  if (isset($_SESSION['username'])) : ?> 
           
               
                <strong> 
                    <?php echo $_SESSION['username'].' '. 'مرحبــا ' ; ?> 
                </strong> 
            
        <?php endif ?> 
    </a></h5>
    </li>
  </ul>
</nav>