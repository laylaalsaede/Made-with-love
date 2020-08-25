<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$phone    = "";
$password_1="";
$errors = array(); 
 $error = false;
$_SESSION['success'] = "";

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'learn system');

// REGISTER USER
if (isset($_POST['btn-login'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $password_1 = mysqli_real_escape_string($db, $_POST['pass']);
  $password_2 = mysqli_real_escape_string($db, $_POST['confirm_pass']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
     if(empty($username)){
     array_push($errors, "Please enter ");
       $error = true;
          $userError = " ادخل اسم المستخدم ";}
    
    
      if(empty($email)){
     array_push($errors, "Please enter ");
        $error = true;
          $emailemptyError= " ادخل البريد الالكتروني ";}
    
    
      if(empty($phone)){
           array_push($errors, "Please enter ");
           $error = true;
          $phoneError = " ادخل رقم الجوال ";
    }
     
    
    if(empty($password_1)){
     array_push($errors, "Please enter password");
    $error = true;
    $passError = " ادخل كلمة المرور";
  }
    
     if(empty($password_2)){
          array_push($errors,"Please enter confirm password.");
          $error = true;
         
    $confirm_password_err = " قم بتأكيد كلمة المرور";
         
  } else{
        $password_2 = trim($password_2);
        if(empty($passError) && ($password_1 != $password_2)){
             array_push($errors, "The two passwords do not match");
             $error = true;
            $confirm_password_err = " كلمة المرور غير متطابقة.";
     
            
        }
    }   
      
    
    
    
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user WHERE username='$username' OR email='$email' LIMIT 10";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
         array_push($errors, "Username already exists");
          $error = true;
      $usernameError = "اسم المستخدم مستخدم بالفعل. جرب اسم مستخدم آخر";
        
    }

    if ($user['email'] === $email) {
        array_push($errors, "email already exists");
           $error = true;
      $emailExistError = "هذا الايميل مسجل بالموقع";
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    
  	$query = "INSERT INTO user (username, email, phone, password) 
  			  VALUES('$username', '$email','$phone', '$password_1')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
      header("Location: homepage2.php");
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel=stylesheet type="text/css" href="staylLoginAndSignUp.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    
    <style>
        
    

</style>
</head>
<body>
        <div id="loginbox" style="margin-top:40px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

       <?php if($error) { ?>
              <div role="alert" class="alert  alert-danger  text-center">
            <?php 
              if(isset($emailError)) { echo $emailError; }  
              if(isset($passError)) { echo $passError; }
              if(isset($errMSG)) { echo $errMSG; } 
              if(isset($usernameError)) { echo $usernameError; } 
              if(isset($confirm_password_err)) { echo $confirm_password_err; } 
              if(isset($emailExistError)) { echo $emailExistError; } 
             if(isset($emailemptyError)) { echo $emailemptyError; } 
             if(isset($userError)) { echo $userError; } 
             if(isset($phoneError)) { echo $phoneError; }
             
            ?>
          </div>
      <?php } ?>
            
            <div class="panel"  >
                    <div class="panel-heading">
                        <div align="center"> <font size="6">  انشاء حساب جديد  </font> </div>
                        
                    </div>     
                    <div style="padding-top:30px" class="panel-body" >
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="signupform" class="form-horizontal" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                                    
                                <div style="margin-bottom: 25px" class="input-group" >
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="اسم المستخدم">                                        
                              </div >
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="email" value="" placeholder="الايميل">                                        
                              </div>
                            
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                        <input id="phone_num" type="text" class="form-control" name="phone" value="" placeholder="الجوال">                                        
                              </div>
                                
                                
                            <div style="margin-bottom: 25px" class="input-group" >
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="pass" placeholder="كلمة المرور">
                                    </div>
                                    
              <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="confirm-password" type="password" class="form-control" name="confirm_pass" placeholder="تأكيد كلمة المرور">
                                    </div>
                                
                           
                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->
                                    <div class="col-sm-12 controls " align="center">
                                      <button id="btn-signup" class="btn btn-warning " type="submit" name="btn-login" >إرسال </button>
                                        <br/>
                                      
              
                    
                                    </div >
                                 <div align="right">   هل لديك حساب بالفعل؟ <a href="login.php">تسجيل الدخول</a></div>  
                                </div>
                                
                            </form>     
                        </div>                     
                    </div>  
        </div>
       
    </div>
    
</body>
</html>