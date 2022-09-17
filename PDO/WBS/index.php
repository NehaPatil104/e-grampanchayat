<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../../custom-css/register.css">

<title>Water Billing System</title>
</head>

<body style="background-color: #E7F8F4; font-family: sans-serif;">
 <div class="form text-center effect">
  <br>
  <h2 class="my-3" style="color: #49C9AF;">Water Billing</h2>
  <form method="post" action="process.php">

      <label>User Name:</label>
      <p><input type="text" name="username" /></p>
      <label>Password:</label>
      <p><input type="password" name="password" /></p>
      
      <p><input type="submit" value="Login"  name="ok"/></p>
      <p><a href="../dashbpard.php">Back to Home</a></p>

  <br />
  </form>
  <?php if(isset($_GET['err'])){
  	echo "<script>alert('Invalid Username or Password')</script>";
  	} ?>
</div>


</body>
</html>