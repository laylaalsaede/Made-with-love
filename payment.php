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


 <?php
      $conn = mysqli_connect('localhost', 'root', '', 'learn system');
$gtotal = 0;
  foreach($_SESSION["cart"] as $keys => $values)
  {

    $F_ID = $values["food_id"];
    $foodname = $values["food_name"];
    $quantity = $values["food_quantity"];
    $price =  $values["food_price"];
    $total = ($values["food_quantity"] * $values["food_price"]);
    $R_ID = $values["R_ID"];
    $username = $_SESSION["username"];
    $order_date = date('Y-m-d');
    
    $gtotal = $gtotal + $total;


     $query = "INSERT INTO ORDERS (F_ID, foodname, price,  quantity, order_date, username, R_ID) 
              VALUES ('" . $F_ID . "','" . $foodname . "','" . $price . "','" . $quantity . "','" . $order_date . "','" . $username . "','" . $R_ID . "')";
             

              $success = $conn->query($query);         

     
  }

        ?>
        <div class="container">
          <div class="jumbotron">
            <h3>اختر طريقة الدفع</h3>
          </div>
        </div>
        <br>
<h1 class="text-center"> SAR <?php echo "$gtotal" ?> الاجمالي</h1>
<h5 class="text-center">تشمل قيمة التوصيل</h5>
<br>
<h1 class="text-center">
  <a href="cart.php"><button class="btn btn-warning"><span class="glyphicon glyphicon-circle-arrow-left"></span>العودة للسلة</button></a>
  <a href="onlinepay.php"><button class="btn btn-success"><span class="glyphicon glyphicon-credit-card"></span>الدفع بالبطاقة</button></a>
  <a href="COD.php"><button class="btn btn-success"><span class="glyphicon glyphicon-"></span> الدفع عند الاستلام</button></a>
</h1>
        


<br><br><br><br><br><br>
        </body>
</html>