<?php
 session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cvf_timetable";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
    echo "Connection OK";
}
else{
    echo "Connectrion Failed".mysql_connect_error();
}




if(isset($_POST ['msubmit']))
{
  $dt=date('Y-m-d',strtotime($_POST ['date_']));
  $tm=$_POST['time_'];
  $sft=$_POST['timeshift'];
  $loc=$_POST['dutylocation'];
  $dty=$_POST['dutytype'];
  $cvp1=$_POST['cvf1'];
  $cvp2=$_POST['cvf2'];
  $cvp3=$_POST['cvf3'];
 
$query="INSERT INTO duty (date_,	time_,	timeshift,	dutylocation,	dutytype,	cvf1,	cvf2,	cvf3) VALUES('$dt', '$tm',  ' $sft', '$loc',' $dty', '$cvp1', '$cvp2',' $cvp3')";
$query_run=mysqli_query($conn,$query);
if($query_run)
$SESSION['status']="Data Successfully Inserted";
header("Location: index.php");
}  
else
{
    $SESSION['status']="Data Failed to Insert";
    header("Location: index.php");
}
?>

//FEMALE DUTY CONNECTION

<?php
 session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fcvf_timetable";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
    echo "Connection OK";
}
else{
    echo "Connectrion Failed".mysql_connect_error();
}




if(isset($_POST ['fsubmit']))
{
  $fdt=date('Y-m-d',strtotime($_POST ['date_d']));
  $ftm=$_POST['time_t'];
  $fsft=$_POST['ftimeshift'];
  $floc=$_POST['fdutylocation'];
  $fdty=$_POST['fdutytype'];
  $fcvp1=$_POST['fLCVP1'];
  $fcvp2=$_POST['fLCVP2'];
  $fcvp3=$_POST['fLCVP3'];
 
$query="INSERT INTO fduty (date_d,	time_t,	ftimeshift,	fdutylocation,	fdutytype,	fLCVP1,	fLCVP2,	fLCVP3) VALUES('$fdt', '$ftm',  ' $sfft', '$floc',' $fdty', '$fcvp1', '$fcvp2',' $fcvp3')";
$query_run=mysqli_query($conn,$query);
if($query_run)
$SESSION['status']="Data Successfully Inserted";
header("Location: index.php");
}  
else
{
    $SESSION['status']="Data Failed to Insert";
    header("Location: index.php");
}
?>