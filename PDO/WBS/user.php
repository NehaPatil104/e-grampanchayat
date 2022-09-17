<?php session_start();
if(!isset($_SESSION['id'])){
	echo '<script>windows: location="index.php"</script>';
	
	}
?>
<?php
$session=$_SESSION['id'];
include 'db.php';
$result = mysqli_query($conn,"SELECT * FROM user where id= '$session'");
while($row = mysqli_fetch_array($result))
  {
  $sessionname=$row['name'];

  }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&display=swap" rel="stylesheet">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<!-- Google font -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
	jQuery(document).ready(function($) {
	  $('a[rel*=facebox]').facebox({
		loadingImage : 'src/loading.gif',
		closeImage   : 'src/closelabel.png'
	  })
	})
  </script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
#header ul li{
	list-style:none;
	float:left; margin-top:30px; margin-left:10px;}
#header { width:650px; height:100px;}

</style>
<title>user</title>
</head>

<body>
<div class="container-fluid">
<div>
<ul class="nav">
<li class="nav-item"><a class="nav-link" href="billing.php">Home</a></li>
<li class="nav-item"><a class="nav-link" href="bill.php">Billing</a></li>
<li class="nav-item"><a class="nav-link" href="user.php">Users</a></li>

<li class="nav-item"><a class="nav-link" href="logout.php">logout</a></li>


</ul>
</div>

<div class="container">
  <h1 class="text-center text-primary">Users</h1>
  <p><a rel="facebox" href="adduser.php" class="btn btn-primary">Add</a></p>
<?php
include 'db.php';

$result = mysqli_query($conn,"SELECT * FROM user");

echo "<table class='table table-striped'>
<tr>
<th>Id</th>
<th>Username</th>
<th>Password</th>
<th>Name</th>
<th>Action</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['username'] . "</td>";
  echo "<td>" . $row['password'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
 echo "<td><a rel='facebox' href='edituser.php?id=".$row['id']."'>Edit </a>| ";
 echo "<a rel='facebox' href='deluser.php?id=".$row['id']."'>Del</td>";
  echo "</tr>";
  }
echo "</table>";

?>

<p>&nbsp;</p>

</div>
</div>
</body>
</html> <script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "delete.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
 