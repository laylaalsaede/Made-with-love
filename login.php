<?php session_start();
 // it will never let you open index(login) page if session is set
 
 
 $error = false;
 $errors = array();
$_SESSION['success'] = "";
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'learn system');



if (isset($_POST['user_id']) and isset($_POST['user_pass'])){
	
// Assigning POST values to variables.
$username = $_POST['user_id'];
$password = $_POST['user_pass'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `user` WHERE username='$username' and Password='$password'";
 
$result = mysqli_query($db, $query) or die(mysqli_error($db));
$count = mysqli_num_rows($result);

if ($count == 1){

//echo "Login Credentials verified";
echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";
    
 header("Location: homepage2.php");
}else{
    
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
//echo "Invalid Login Credentials";
}
}
?>    
    
   

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel=stylesheet type="text/css" href="staylLoginAndSignUp.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    
</head>
<body>
        <div id="loginbox" style="margin-top:40px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
      <?php if(isset($emailError) || isset($errMSG) || isset($passError)) { ?>
              <div role="alert" class="alert  alert-danger  text-center">
            <?php 
              if(isset($emailError)) { echo $emailError; }  
              if(isset($passError)) { echo $passError; }
              if(isset($errMSG)) { echo $errMSG; } 
            ?>
          </div>
      <?php } ?>
            
            
            <?php if(isset($success)){ ?>
             <div class="alert alert-success" role="alert">
            <?php
            if(isset($success)) { echo $success; }
             ?></div>
            <?php } ?>
            
            
            
            <div class="panel" >
                    <div class="panel-heading">
                        <div class="panel-title" align="center"> <font size="6">  تسجيل الدخول  </font></div>
                        
                    </div>     
                    <div style="padding-top:30px" class="panel-body" >
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="user_id" value="" placeholder="اسم المستخدم">                                        
                              </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="user_pass" placeholder="كلمة المرور">
                                    </div>
                                    
                                
                            <div class="input-group">
                <div class="checkbox">
                <label>
                  <input id="login-remember" type="checkbox" name="remember" value="1"> تذكرني
                </label>
                </div>
              </div>
                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->
                                    <div class="col-sm-12 controls " align="center">
                                      <button id="btn-login" class="btn btn-warning " type="submit" name="btn-login">تسجيل الدخول  </button>
                                     <div align="right">   اذا لم يكن لديك حساب قم بـ <a href="register.php">إنشاء حساب</a> </div>
              
                    
                                    </div>
                                </div>
                                
                            </form>     
                        </div>                     
                    </div>  
        </div>
       
    </div>
    
</body>
</html>