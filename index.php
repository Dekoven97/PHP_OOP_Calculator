<?php

declare(strict_types=1);
include('includes/class-autoload.inc.php');




?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>





<!-- Image and text -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand " href="#">
  <!--  <img src="#" width="30" height="30" class="d-inline-block align-top" alt="">-->
 Dekoven
  </a>
</nav>







<div class="container   ">

<div class="display-5 mb-5">Calculatrice</div>



<form action="includes/calc.inc.php" method="post">

<input type="number"  class="form-control mb-2"   name="num1" id="">

<select name="oper"  class="form-select mb-2" id="">
<option value="add">Addition</option>
<option value="sub">Soustraction</option>
<option value="mul">Multiplication</option>
<option value="div">Division</option>
</select>

<input type="number"  class="form-control mb-2"   name="num2" id="">

<button type="submit" class="btn btn-primary submit">Calculer</button>





</form>



</div>






</body>
</html>