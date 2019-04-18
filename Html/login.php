<?php
$usname="";
$pswd="";
$db = mysqli_connect('localhost','root','','sms');
if(isset($_POST['log'])){
    $usname = mysqli_real_escape_string($db,$_POST['usrname']);
    $pswd = mysqli_real_escape_string($db,$_POST['pawd']);
    $sql = "SELECT * FROM admin";
    $result=mysqli_query($db,$sql);
    if(mysqli_num_rows($result)>0){
      while($row=mysqli_fetch_assoc($result)){
            if($row['username']==$usname && $row['password']==$pswd){
                
                
                  header('Location:adhome.html');
            }
            else{
            
                header('Location:login.html');
                
      }
    }
}
}
?>