<?php
session_start();
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];


	$servername = "localhost";
    $db_username = "root";
    $db_password = "";
    //change DB name 
    $dbname = "blood_donation"; 
	
	
// Create connection
$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

	  
$sql="SELECT * from admin_info where admin_username='$username' and admin_password='$password'";
	 


// Execute the query
$result = $conn->query($sql);

// Check if a user with the given credentials exists
if ($result->num_rows == 1) {

    // User is authenticated, set session variable to indicate login
    $_SESSION["logged_in"] = true;
    $userInfo = $result->fetch_assoc();
    $_SESSION["username"]=$username;
    header("Location: dashboard.php");
    exit();
} else {
    // Invalid credentials, show an error message
    echo "Invalid username or password.";
}

// Close the database connection
$conn->close();
}
?>


<?php
    include 'conn.php';

  if(isset($_POST["login"])){

    $username=mysqli_real_escape_string($conn,$_POST["username"]);
    $password=mysqli_real_escape_string($conn,$_POST["password"]);

   

    $sql="SELECT * from admin_info where admin_username='$username' and admin_password='$password'";
    $result=mysqli_query($conn,$sql) or die("query failed.");

    if(mysqli_num_rows($result)>0)
    {
      while($row=mysqli_fetch_assoc($result)){
        session_start();
         $_SESSION['loggedin'] = true;
        $_SESSION["username"]=$username;
        
        header("Location: dashboard.php");
      }
    }
    else {
      echo '<div class="alert alert-danger" style="font-weight:bold"> Username and Password are not matched!</div>';
    }

  }
   ?>