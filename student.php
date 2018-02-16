
<?php
$name=$_GET['name'];
$regno=$_GET['regno'];
$rono=$_GET['rono'];
$dob=$_GET['dob'];
$dept=$_GET['dept'];
$bona=$_GET['bona'];
$other=$_GET['other'];
$feere=$_GET['feere'];
$status='onprocess';


$conn = mysqli_connect('localhost','root','','bonafied');
if (!$conn) {
    die('Could not connect: ' . mysqli_error($con));
}

if($bona=="other")
  $bona=$other;
$sql="INSERT INTO project (name,regno,rollno,dob,dept,bonafied,feereceipt,status) VALUES ('$name','$regno','$rono','$dob','$dept','$bona','$feere','$status')";
$conn->query($sql);
?>
