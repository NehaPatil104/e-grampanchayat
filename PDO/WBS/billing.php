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

<?php
if (isset($_POST['add']))
	{	   
	include 'db.php';
			 		$id=$_POST['id'] ;
					$lname= $_POST['lname'] ;					
					$fname=$_POST['fname'] ;
					$mi=$_POST['mi'] ;
					$address=$_POST['address'] ;
					$contact=$_POST['contact'] ;
					
		 mysqli_query($conn,"INSERT INTO  owners (id,lname,fname,mi,address,contact) 
		 VALUES ('$id','$lname','$fname','$mi','$address','$contact')"); 
				
				echo '<script>alert("success")</script>';
				
				
	        }
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&display=swap" rel="stylesheet">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<!-- Google font -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
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
<title>Billing System</title>
<style type="text/css">

</style>
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

<h1 class="text-center text-primary">Water Billing</h1>
<div id="form" class="container" style="width:50%;">

  <h4 align="center">Add Client</h4>
  <form method="post">
<table width="332" border="0" class="table table-striped">
    
  <p width="99"><input type="hidden"  name="id" value="0" /></p>
  <tr>
    <td>Last Name:</td>
    <td width="223"><input type="text" name="lname" /></td>
  </tr>
  <tr>
    <td>First Name:</td>
    <td><input type="text" name="fname" /></td>
  </tr>
  <tr>
    <td>MI:</td>
    <td><input type="text" name="mi" /></td>
  </tr>
  <tr>
    <td>Address:</td>
    <td><input type="text" name="address" /></td>
  
  </tr>
  <tr>
    <td>Contact #:</td>
    <td><input type="text" name="contact" /></td>
  
  </tr>
   <tr>
    
    <td><input type="submit" class="btn btn-primary" name="add" value="ADD" /></td>
  <td><input type="reset" class="btn btn-danger" value="CANCEL" /></td>
  </tr>
 
</table>
</form>
</div>

<div class="container" style="width:70%;">
<h4 align="center">View</h4>
<?php
include 'db.php';
$result = mysqli_query($conn,"SELECT * FROM owners");

echo "<table class='table table-striped'>
<tr>
<th>Id</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Mi</th>
<th>Address</th>
<th>Contact</th>
<th>Action</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['fname'] . "</td>";
  echo "<td>" . $row['lname'] . "</td>";
  echo "<td>" . $row['mi'] . "</td>";
  echo "<td>" . $row['address'] . "</td>";
  echo "<td>" . $row['contact'] . "</td>";
 echo "<td><a rel='facebox' class='btn btn-info' href='edit.php?id=".$row['id']."'>Edit </a> ";
 echo "<a rel='facebox' class='btn btn-danger' href='del.php?id=".$row['id']."'>Del</td>";
  echo "</tr>";
  }
echo "</table>";

?>





</div>


</div>


</body>
</html>
 <script src="js/jquery.js"></script>
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
 