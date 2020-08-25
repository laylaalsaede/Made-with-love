<?php
include ("nav.php");?>
<?php
if(!isset($_SESSION['username'])){
header("location: login.php"); 
}

?>


<html>

  <head>
    <title> قائمة الطلبات </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <link rel=stylesheet type="text/css" href="stayl.css">

  <body>

  
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>






        <div class="container">
          <div class="jumbotron">
            <h1 class="text-center" style="color: green;"> تم تقديم الطلب بنجاح</h1>
          </div>
        </div>
        <br>

<h2 class="text-center"> شكرا على طلبك, يتم الان تجهيز الطلب</h2>

<?php 
  $num1 = rand(100000,999999); 
  $num2 = rand(100000,999999); 
  $num3 = rand(100000,999999);
  $number = $num1.$num2.$num3;
?>

<h3 class="text-center"> <strong>رقم الطلب</strong> <span style="color: blue;"><?php echo "$number"; ?></span> </h3>

        </body>

</html>