<h4 style="color:#F00;">Note: Bill Amount = Total Consumption * Price/Cu.m</h4>
<?php
include 'db.php';
$id =$_REQUEST['id'];
$result = mysqli_query($conn,"SELECT * FROM bill where owners_id='$id'");

echo "<table class='table table-striped'>
<tr>
<th>Id</th>
<th>Previous Reading</th>
<th>Present Reading</th>
<th>Consuption</th>
<th>Price</th>
<th>Date</th>
<th>Bill Amount</th>
<th>Action</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
	  $prev=$row['prev'];
	  $pres=$row['pres'];
	  $price=$row['price'];
	  $totalcons=$pres - $prev;
	  $bill=$totalcons * $price;
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $prev . "</td>";
  echo "<td>" . $pres . "</td>";
  echo "<td>". $totalcons."</td>";
  echo "<td>" . $price . "</td>";
  echo "<td>" . $row['date'] . "</td>";
  echo "<td>" . $bill . "</td>";
 echo "<td><a rel='facebox' href='viewpayment.php?id=".$row['id']."'>View </a>| ";
 echo "<a rel='facebox' href='delbill.php?id=".$row['id']."'>Del</td>";
  echo "</tr>";
  }
echo "</table>";

?>

