<?php
$name="";
$id="";
$password="";
$department;
$sex;

$db = mysqli_connect('localhost','root','','sms');
if(isset($_POST['add'])){
    
  $name = mysqli_real_escape_string($db,$_POST['stdname']);
  $id = mysqli_real_escape_string($db,$_POST['sid']);
  $password = mysqli_real_escape_string($db,$_POST['pswd']);
  $department = mysqli_real_escape_string($db,$_POST['dep']);
  $sex = mysqli_real_escape_string($db,$_POST['gender']);
  $sq="SELECT FROM students (name,sid, password,section, gender) WHERE sid=$id";
  $select = mysqli_query($db, $sq);
$row = mysqli_fetch_assoc($select);
 if($row > 0)
   {
    echo"student already exists";
   }
   else{

   
  $sql="INSERT INTO student(name,sid,password,section,gender) VALUES('$name','$id','$password','$department','$sex')";
  if(mysqli_query($db,$sql)){
    echo '<script language="javascript">';
    echo 'alert("Successfully added"); location.href="add.html"';
    echo '</script>';
     

  }
  else{
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
  }
}
 mysqli_close($db);
}
?>