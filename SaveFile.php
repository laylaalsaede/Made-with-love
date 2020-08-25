<?php
include ("nav.php");?>
<!DOCTYPE HTML>
<html>
<body >
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
    textarea {
        align-content:center}

</style>

<?php

if(isset($_POST['send']))

{

	$f=$_POST['file'];

	$ext=$_POST['ext'];

	$data=$_POST['data'];

	$file=$f.$ext;

	if(file_exists($file))

	{

	echo "<font color='red'>file already exists</font>";

	}

	else

	{

	$fo = fopen($file,"w");

	fwrite($fo,$data);

	$successa="تم ارسال الاستفسار";

	}

}

?>
    

<div class="login-page">
        <div class="form">
<form class="login-form" id="myForm" action="" method="POST">
       <?php if(isset($successa)){ ?>
    
             <div class="alert alert-success" role="alert">
            <?php
            if(isset($successa)) { echo $successa; }
             ?></div>
            <?php } ?>
         <h5><a class="nav-link text-dark" href="#">    
            <?php if (isset($_SESSION['success'])) : ?> 
            <div class="error success" > 
                <h6> 
                    <?php
                        
                        unset($_SESSION['success']); ?> 
                </h6> 
            </div> 
        <?php endif ?> 
        <!-- welcome message for the logged in user -->
        <?php  if (isset($_SESSION['username'])) : ?> 
    
                <strong> 
                    <?php echo $_SESSION['username'].' :'. 'اسم المستخدم' ; ?> 
                </strong> 
            
        <?php endif ?> 
    </a></h5>
    <p>عنوان الاستفسار</p>
<input type="text" name="file"/>
    
   <select name="ext">
	<option value="">   </option>
	<option>.txt</option>
	<option>.docs</option>
	<option>.pdf</option>
</select>  اختر امتداد الملف<br/>
    
    <br/>
<p>ادخل استفسارك هنا</p>
<textarea rows="10" cols="30" name="data">

      <?php echo @$contents ; ?>

       </textarea><br/>

<input type="submit" value="ارسل السؤال" name="send"/>

  
            
            
</form>
</body>
</html>