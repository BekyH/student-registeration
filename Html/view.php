<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>This is School management system</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/main.css" />
    <link rel="stylesheet" type="text/css" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="../node_modules/bootstrap-social/bootstrap-social.css">
</head>
<body>
    <nav class="navbar navbar-dark navbar-expand-sm fixed-top bg-primary">
<div class="container">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item"><a class="nav-link" href="adhome.html">Home</a></li>
      <li class="nav-item"><a class="nav-link" href="add.html">Add</a></li>
      <li class="nav-item"><a class="nav-link active" href="#">View</a></li>
      <li class="nav-item"><a class="nav-link" href="login.html">Log out</a></li>
    </ul>
    
</div>
    </nav>
    <header class="jumbotron">
        <div class="container">
            <p> Welcome to School management System</p>
        </div>
    </header>
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Id</td>
                    <td>Section</td>
                    <td>Gender</td>
</tr>
</thead>
<tbody>
    <tr>

        <?php
         $db = mysqli_connect('localhost','root','','sms');
         $sql = "SELECT name,sid,section,gender FROM student";
         $result=mysqli_query($db,$sql);
         if(mysqli_num_rows($result)>0){
        
         
         while($row=mysqli_fetch_assoc($result)){
         
           echo"<td>".$row['name']."</td>";
           echo"<td>".$row['sid']."</td>";
           echo"<td>".$row['section']."</td>";
           echo"<td>".$row['gender']."</td>";
                echo"</tr>";
        }
    }
    mysqli_close($db);   
        ?>
        </tbody>
        </table>
</div>
        
    <footer class="footer">
            <div class = "container">
                    <div class="row">
                       
                                <div col-7 col-sm-5>
                                    <h5>Our Address</h5>
                                    <address>
                                      6 kilo st.Gorge square
                                      <i class="fa fa-phone fa-lg"></i> Tel.: +251925310203<br>
                                      
                                      <i class="fa fa-envelope fa-lg"></i> Email: <a href="bereketheramo25@gmail.com">bereketheramo25@gmail.com</a>
                                   </address>
                                </div>
                                <div class="col-12 col-sm-4 text-center align-self-center">
                                <div class="text-center">
                                        <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i class="fa fa-google-plus fa-lg"></i></a>
                                        <a class="btn btn-social-icon btn-facebook"  href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook fa-lg"></i></a>
                                        <a class="btn btn-social-icon btn-linkedin"  href="http://www.linkedin.com/in/"><i class="fa fa-linkedin fa-lg"></i></a>
                                        <a class="btn btn-social-icon btn-twitter"  href="http://twitter.com/"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a class="btn btn-social-icon btn-youtube"  href="http://youtube.com/"><i class="fa fa-youtube fa-lg"></i></a>
                                        <a class="btn btn-social-icon"  href="mailto:"><i class="fa fa-envelope-o fa-lg"></i></a>
                                        </div>
                                        </div>
                                        </div>
                                <div class="row justify-content-center">
                                <div class="col-auto">
                                    <p>&copy; Copyright 2019 Online School managment System</p>
                                    </div>
                                    </div>
                               </div>
    </footer>
</body>
</html>