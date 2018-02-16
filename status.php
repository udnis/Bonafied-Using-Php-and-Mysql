<!DOCTYPE html>
<html>
<head>

<style>
sindu{
	color: blue;
}
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<!doctype html>
<html>
<head>
<script>

function searchs(){
	var searchval=document.getElementById('search').value;
window.location = "status.php?"+'searchval='+searchval;
}

</script>  


</head>
<title>request</title>
<body>
<h1> Search here:Enter your register number </h1>
<input type="text" id="search" value="" >
<button onclick="searchs()">click me</button>

<p>
<?php


$conn = mysqli_connect('localhost','root','','bonafied');
if (!$conn) {
    die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT name,regno,rollno,dept,status FROM project";
$result = $conn->query($sql);


    // output data of each row
    while($row = $result->fetch_assoc()) {
    $name=$row["name"];
    $regno=$row["regno"];
    $rollno=$row["rollno"];
    $dept=$row["dept"];
    $status=$row["status"];
if(isset($_GET['searchval'])){
$searchval=$_GET['searchval'];
if($regno==$searchval){

?>
<table >
<tr>
<td><?php echo $name ?></td>
<td><?php echo $regno ?></td>
<td><?php echo $rollno ?></td>
<td><?php echo $dept ?></td>
<td><?php echo $status ?></td>

</tr>
</table> 
 
<?php          
    }
   }
  }


$conn->query($sql);
$conn->close();

?>

</p>

</body>
</html>




