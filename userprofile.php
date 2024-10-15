<?php
  include 'conn.php';
   session_start();
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    ?>


<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- Profile -->
  <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'>
  <link href='https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css' rel='stylesheet'>
  <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<style>
    ::-webkit-scrollbar {
                                  width: 8px;
                                }
                                /* Track */
                                ::-webkit-scrollbar-track {
                                  background: #f1f1f1; 
                                }
                                 
                                /* Handle */
                                ::-webkit-scrollbar-thumb {
                                  background: #888; 
                                }
                                
                                /* Handle on hover */
                                ::-webkit-scrollbar-thumb:hover {
                                  background: #555; 
                                } body {
                                    background-color: #f9f9fa
                                }

                                .padding {
                                    padding: 3rem !important
                                }

                                .user-card-full {
                                    overflow: hidden;
                                }

                                .card {
                                    border-radius: 5px;
                                    -webkit-box-shadow: 0 1px 20px 0 rgba(69,90,100,0.08);
                                    box-shadow: 0 1px 20px 0 rgba(69,90,100,0.08);
                                    border: none;
                                    margin-bottom: 30px;
                                }

                                .m-r-0 {
                                    margin-right: 0px;
                                }

                                .m-l-0 {
                                    margin-left: 0px;
                                }

                                .user-card-full .user-profile {
                                    border-radius: 5px 0 0 5px;
                                }

                                .bg-c-lite-green {
                                        background: -webkit-gradient(linear, left top, right top, from(#f29263), to(#ee5a6f));
                                    background: linear-gradient(to right, #ee5a6f, #f29263);
                                }

                                .user-profile {
                                    padding: 20px 0;
                                }

                                .card-block {
                                    padding: 1.25rem;
                                }

                                .m-b-25 {
                                    margin-bottom: 25px;
                                }

                                .img-radius {
                                    border-radius: 5px;
                                }


                                
                                h6 {
                                    font-size: 14px;
                                }

                                .card .card-block p {
                                    line-height: 25px;
                                }

                                @media only screen and (min-width: 1400px){
                                p {
                                    font-size: 14px;
                                }
                                }

                                .card-block {
                                    padding: 1.25rem;
                                }

                                .b-b-default {
                                    border-bottom: 1px solid #e0e0e0;
                                }

                                .m-b-20 {
                                    margin-bottom: 20px;
                                }

                                .p-b-5 {
                                    padding-bottom: 5px !important;
                                }

                                .card .card-block p {
                                    line-height: 25px;
                                }

                                .m-b-10 {
                                    margin-bottom: 10px;
                                }

                                .text-muted {
                                    color: #919aa3 !important;
                                }

                                .b-b-default {
                                    border-bottom: 1px solid #e0e0e0;
                                }

                                .f-w-600 {
                                    font-weight: 600;
                                }

                                .m-b-20 {
                                    margin-bottom: 20px;
                                }

                                .m-t-40 {
                                    margin-top: 20px;
                                }

                                .p-b-5 {
                                    padding-bottom: 5px !important;
                                }

                                .m-b-10 {
                                    margin-bottom: 10px;
                                }

                                .m-t-40 {
                                    margin-top: 20px;
                                }

                                .user-card-full .social-link li {
                                    display: inline-block;
                                }

                                .user-card-full .social-link li a {
                                    font-size: 20px;
                                    margin: 0 10px 0 0;
                                    -webkit-transition: all 0.3s ease-in-out;
                                    transition: all 0.3s ease-in-out;
                                }


</style>

<style>

    #sidebar{position:relative;margin-top:-20px}
    #content{position:relative;margin-left:210px}
    @media screen and (max-width: 600px) {
    #content {
        position:relative;margin-left:auto;margin-right:auto;
    }
    }


    .block-anchor {
                color:red;

                cursor: pointer;
            }
</style>
</head>

<body style="color:black;" className='snippet-body'>
<div id="header">
<?php include 'head.php';?>
</div>


<?php 
$user_name = $_SESSION["username"];

$sql="SELECT * from user_info where donor_username='$user_name'";
$result=mysqli_query($conn,$sql) or die("query failed.");

if(mysqli_num_rows($result)>0)
{
  while($row=mysqli_fetch_assoc($result)){
   
     $_SESSION['loggedin'] = true;
    $name = $row['donor_username'];
    $email = $row['email'];
    $password = $row['donor_password'];
    $phone = $row['phone_number'];
    $userid = $row['user_id'];
    $blood_group = $row['blood_group'];
   
  }
}

?>

</div>
<div id="content">

<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
<div class="col-xl-6 col-md-12">
                                                <div class="card user-card-full">
                                                    <div class="row m-l-0 m-r-0">
                                                        <div class="col-sm-4 bg-c-lite-green user-profile">
                                                            <div class="card-block text-center text-white">
                                                                <div class="m-b-25">
                                                                    <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image">
                                                                </div>
                                                                <h6 class="f-w-600"><?php echo $name; ?></h6>
                                                                <p>Donor</p>
                                                             
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="card-block">
                                                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">UserName</p>
                                                                        <h6 class="text-muted f-w-400"><?php echo $email; ?></h6>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Password</p>
                                                                        <h6 class="text-muted f-w-400"><?php echo $password; ?></h6>
                                                                    </div>
                                                                </div>
                                                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Projects</h6>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Blood Group</p>
                                                                        <h6 class="text-muted f-w-400"><?php echo $blood_group; ?></h6>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Phone Number</p>
                                                                        <h6 class="text-muted f-w-400"><?php echo $phone; ?></h6>
                                                                    </div>
                                                                </div>
                                                                <ul class="social-link list-unstyled m-t-40 m-b-10">
                                                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             </div>
                                                </div>
                                            </div>
                                <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript'>#</script>
                                <script type='text/javascript'>var myLink = document.querySelector('a[href="#"]');
                                myLink.addEventListener('click', function(e) {
                                  e.preventDefault();
                                });</script>
</div>

    
 <?php }
  ?>

</body>
</html>
