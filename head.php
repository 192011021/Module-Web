<html>

<head>


<style>

.header {
  overflow:hidden;
  background-color: #4B0082;
  top: 0;
  width:100%;
  padding: 10px 5px;
  color:#FF0404  ;
}

/* Style the header links */
.header a {
  float: left;
  color: white;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
  font-weight:bold;
}

/* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
.header a.logo {
  font-size: 25px;
  font-weight: bold;
  color:#FF0404  ;
  padding: 0;
}

/* Change the background color on mouse-over */
.header a:hover {
  background-color: transparent;
}




/* Float the link section to the right */
.header-right {
  float: right;
}

/* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}
/* Style the active/current link*/
a.act{
background: linear-gradient(to right, #fd746c 0%, #ff9068 100%);
color: white;
border-radius:30px;
}
a.logo2{
  background-color: #333;
}
</style>
</head>

<body>
  <div class="header">
    <a href="home.php" class="logo"><img src="image/logo.png" alt="logo" height="55" /> Blood Bank & Donation </a>
    <div class="header-right">
    <a href="home.php" >Home</a>
    <a href="about_us.php"  >About Us</a>
 
      <a href="donate_blood.php" >Become A Donor</a>
      <a href="need_blood.php">Need Blood</a>
      <a href="contact_us.php" >Contact Us</a>
      <a href="userprofile.php" >Profile</a>
          <a href="index.php" >Logout</a>
    </div>

  </div>

</body>
</html>
