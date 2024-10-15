<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .navbar {
    background-color: #4B0082  ;
    padding: 10px 10px;
    color:#FF0404;
    border-radius: 0 !important;
  }
  .navbar a {
    float: left;
    color: white;
    text-align: center;
    padding: 0;
    text-decoration: none;
    font-size: 18px;
    line-height: 25px;
  }
  
  .navbar-brand {
    font-size: 25px;
    font-weight: bold;
    padding: 0;

  }
  .navbar-brand img{
    display: inline-block !important;

  }
  .navbar a {
    float: none;
    display: block;
    text-align: left;
  }
  .navbar-right {
    float: none;
  }
   #qq:hover{
    background-color:transparent ;
    border-radius: 5px;
  }
.nav .open>a:hover{
  background-color:transparent !important;
}
.nav>li>a:focus, .nav>li>a:hover{
  background-color:transparent !important;
}

  </style>
</head>
<body>

<nav class="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" id="qq" href="dashboard.php" style="color:#F51A14;"><img src="../image/logo.png" alt="logo" height="55" /> Blood Bank & Donation Admin Panel</a>
    </div>
    <ul class="nav navbar-nav navbar-right">

      <li class="dropdown"><a class="dropdown-toggle" id="qw" data-toggle="dropdown" href="#" style="font-weight:bold;color:white "> <span class="glyphicon glyphicon-user"></span>&nbsp&nbsp
        <?php
        include 'conn.php';
        $username=$_SESSION['username'];
        $sql="select * from admin_info where admin_username='$username'";
        $result=mysqli_query($conn,$sql) or die("query failed.");
        $row=mysqli_fetch_assoc($result);
        echo "Hello ";
       ?><span class="caret"></span></a>
        <ul class="dropdown-menu" style="background-color:#D6EAF8;">
        <li><a href="profile.php" style="color:#DC7633  ">Profile </a></li>

          <li><a href="change_password.php" style="color:#DC7633  ">Change Password </a></li>
          <li><a href="../index.php" style="color:#D35400 ;">Logout</a></li>
        </ul>
    </li>
    </ul>

  </div>

</nav>
</body></html>
