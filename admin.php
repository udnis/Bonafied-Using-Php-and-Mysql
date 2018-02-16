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
function decision(temp,tamp){
  window.location = "adminapprove.php?"+'temp='+temp+'&'+'tamp='+tamp;
}


</script>  


</head>
<title>request</title>
<body>

<p>
    <?php


$conn = mysqli_connect('localhost','root','','bonafied');
if (!$conn) {
    die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT name,regno,rollno,dept,status FROM project ";
$result = $conn->query($sql);


    // output data of each row
    while($row = $result->fetch_assoc()) {
    $name=$row["name"];
    $regno=$row["regno"];
    $rollno=$row["rollno"];
    $dept=$row["dept"];
    $status=$row["status"];
    if($status=='onprocess'){
?>
<table >
<tr>
<td><?php echo $name ?></td>
<td><?php echo $regno ?></td>
<td><?php echo $rollno ?></td>
<td><?php echo $dept ?></td>
<td><?php echo $status ?></td>
<td>
<form method="POST">
<select id="admin" value="">
                    <input type="button"  onclick="decision('null','<?php echo $regno; ?>')"> Null</input>
                    <input type="button"  onclick="decision('approve','<?php echo $regno; ?>')"> Approve</input>
                    <input type="button"  onclick="decision('decline','<?php echo $regno; ?>')"> Decline</input>
                    
                    
</select>
<input type="submit" name="submit" onclick="decision()"> 
</form>
</td>
</tr>
</table> 
 
<?php          
    }
    }


$conn->query($sql);
?>

</p>

</body>
</html>




