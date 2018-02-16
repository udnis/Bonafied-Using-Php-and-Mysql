
<?php
$temp= $_GET['temp'];	
$tamp= $_GET['tamp'];
$conn = mysqli_connect('localhost','root','','bonafied');
if (!$conn) {
    die('Could not connect: ' . mysqli_error($con));
}

$sql="update project set status='$temp' where regno=$tamp ";
$conn->query($sql);
?>
