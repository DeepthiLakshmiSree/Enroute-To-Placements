<?php 
include 'config.php';
session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: Companies.php");
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: Companies.php");
    } else {
        echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enroute to placements</title>
    <link rel="icon" type="image/png" href="image/logo1.png" style="height: 200px">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" type="text/css" href="css/stylenew.css">


</head>
<body>
   <header class="header">
    <img src="image/logo1.png" class="logo-img" />
    <h1 class="title"><i class="logo">Enroute to placements</i></h1>
     <br>
    <nav class="navbar" id="modify">
        <a href="#home">home</a>
        <a href="About Us.html">about</a>
        <a href="#review">review</a>
        <a href="#blogs">blogs</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>
	<div>
<section class="about" id="about">
    <div class="row">
       <div class="content" style="">
            <h3 style="text-align: center;">"IT's NEVER LATE TO START AGAIN"</h3>
        </div>
    </div>
    <div><h1 class="heading"> <span>ENROLL</span>NOW</h1></div>
</section>
</div>

   <div style="padding-left:35%;">
<div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size:3rem; font-weight: bold;">Login</p>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['   password']; ?>" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
            <p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
        </form>
    </div>
</div>
    


<!--
<section class="services" id="services">

    <h1 class="heading"><span>COMPANIES</span> </h1>

    <div class="box-container">

        <div class="box">
            <a class="imagescom" href="#"><img src="D:\Placement Website\image\tcs.jpg" width="100px" height="100px" id="img1"/></a>
            <h3>TCS</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <a href="#" class="imagescom"></a><img src="D:\Placement Website\image\wipro.png" width="100px" height="100px" id="img1"/>
            <h3>WIPRO</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <a href="#" class="imagescom"></a><img src="D:\Placement Website\image\capgemini.png" width="100px" height="100px" id="img1"/>
            <h3>CAPGEMINI</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <a href="#" class="imagescom"><img src="D:\Placement Website\image\infosys.svg" width="100px" height="100px" id="img1" />
            <h3>INFOSYS</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <a href="#" class="imagescom"></a><img src="\D:\Placement Website\image\microsoft.png" width="100px" height="100px" id="img1" />
            <h3>MICROSOFT</h3>
            <a href="#" class="btn">ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="\D:\Placement Website\image\google.png" width="100px" height="100px" id="img1"/>
            <h3>GOOGLE</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="D:\Placement Website\image\apple.png" width="100px" height="100px" id="img1"/>
            <h3>APPLE</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="\D:\Placement Website\image\hp.png" width="100px" height="100px" id="img1"/>
            <h3>HP</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\Accenture.png" width="100px" height="100px" id="img1"/>
            <h3>ACCENTURE</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\Amazon.JPg" width="100px" height="100px" id="img1"/>
            <h3>AMAZON</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\Flipkart.png" width="100px" height="100px" id="img1"/>
            <h3>FLIPkART</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\Dell.png" width="100px" height="100px" id="img1"/>
            <h3>DELL</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\Absolute.png" width="100px" height="100px" id="img1"/>
            <h3>ABSOLUTE</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\adobe.png" width="100px" height="100px" id="img1"/>
            <h3>ADOBE</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\asian paints.jpg" width="100px" height="100px" id="img1"/>
            <h3>ASIAN PAINTS</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\autodesk.jpg" width="100px" height="100px" id="img1"/>
            <h3>AUTODESK</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\Cadence.png" width="100px" height="100px" id="img1"/>
            <h3>CADENCE</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\Celestica.png" width="100px" height="100px" id="img1"/>
            <h3>CELESTICA</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\cisco.jpg" width="100px" height="100px" id="img1"/>
            <h3>CISCO</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\Clarivate.png" width="100px" height="100px" id="img1"/>
            <h3>CLARIVATE</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\cloudflare.png" width="100px" height="100px" id="img1"/>
            <h3>CLOUDFLARE</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\code42.png" width="100px" height="100px" id="img1"/>
            <h3>CODE42</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\cvent.gif" width="100px" height="100px" id="img1"/>
            <h3>CVENT</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\Cyient.jpg" width="100px" height="100px" id="img1"/>
            <h3>CYIENT</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\Deloitte.png" width="100px" height="100px" id="img1"/>
            <h3>DELOITTE</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\dropbox.png" width="100px" height="100px" id="img1"/>
            <h3>DROPBOX</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\DXC.png" width="100px" height="100px" id="img1"/>
            <h3>DXC</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\Facebook.png" width="100px" height="100px" id="img1"/>
            <h3>FACEBOOK</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\first meridian.png" width="100px" height="100px" id="img1"/>
            <h3>FIRST MERIDIAN</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\fresh works.png" width="100px" height="100px" id="img1"/>
            <h3>FRESH WORKS</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\Gainsight.png" width="100px" height="100px" id="img1"/>
            <h3>GAINSIGHT</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\genpact.png" width="100px" height="100px" id="img1"/>
            <h3>GENPACT</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\globant.jpg" width="100px" height="100px" id="img1"/>
            <h3>GLOBANT</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\grammarly.png" width="100px" height="100px" id="img1"/>
            <h3>GRAMMARLY</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\HCL.png" width="100px" height="100px" id="img1"/>
            <h3>HCL</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\hexaware.png" width="100px" height="100px" id="img1"/>
            <h3>HEXAWARE</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\ibm.svg" width="100px" height="100px" id="img1"/>
            <h3>IBM</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\IFS.png" width="100px" height="100px" id="img1"/>
            <h3>IFS</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\Instagram.webp" width="100px" height="100px" id="img1"/>
            <h3>INSTAGRAM</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\jio.png" width="100px" height="100px" id="img1"/>
            <h3>JIO</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\legato.png" width="100px" height="100px" id="img1"/>
            <h3>LEGATO</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\microns.png" width="100px" height="100px" id="img1"/>
            <h3>MICRONS</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\mindtree.jpg" width="100px" height="100px" id="img1"/>
            <h3>MINDTREE</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\mountblue.png" width="100px" height="100px" id="img1"/>
            <h3>MOUNTBLUE</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\mphasis.png" width="100px" height="100px" id="img1"/>
            <h3>MPHASIS</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\nintex.png" width="100px" height="100px" id="img1"/>
            <h3>NINTEX</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\pax8.jpg" width="100px" height="100px" id="img1"/>
            <h3>PAX8</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\phone pay.png" width="100px" height="100px" id="img1"/>
            <h3>PHONEPAY</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\prompt cloud.png" width="100px" height="100px" id="img1"/>
            <h3>PROMPT CLOUD</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\Ramco.png" width="100px" height="100px" id="img1"/>
            <h3>RAMCO</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\revature.png" width="100px" height="100px" id="img1"/>
            <h3>REVATURE</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\salesforce.png" width="100px" height="100px" id="img1"/>
            <h3>SALESFORCE</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\secure works.png" width="100px" height="100px" id="img1"/>
            <h3>SECURE WORKS</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\sendinblue.png" width="100px" height="100px" id="img1"/>
            <h3>SENDINBLUE</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\ServiceNow.png" width="100px" height="100px" id="img1"/>
            <h3>SERVICENOW</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\shopify.png" width="100px" height="100px" id="img1"/>
            <h3>SHOPIFY</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\Siemens.png" width="100px" height="100px" id="img1"/>
            <h3>SIEMENS</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\Synchrony.png" width="100px" height="100px" id="img1"/>
            <h3>SYNCHRONY</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\talend.png" width="100px" height="100px" id="img1"/>
            <h3>TALEND</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\Tata-Elxsi.jpg" width="100px" height="100px" id="img1"/>
            <h3>TATA-ELXSI</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\TeamLease.png" width="100px" height="100px" id="img1"/>
            <h3>TEAM LEASE</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\testbook.png" width="100px" height="100px" id="img1"/>
            <h3>TESTBOOK</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\Thinkitive.png" width="100px" height="100px" id="img1"/>
            <h3>THINKITIVE</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\TTD.jpg" width="100px" height="100px" id="img1"/>
            <h3>TTD</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\tech mahindra.webp" width="100px" height="100px" id="img1"/>
            <h3>TECH MAHINDRA</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\twillo.png" width="100px" height="100px" id="img1"/>
            <h3>TWILIO</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\uber.webp" width="100px" height="100px" id="img1"/>
            <h3>UBER</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\value creed.jpg" width="100px" height="100px" id="img1"/>
            <h3>VALUE CREED</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\Viasat.png" width="100px" height="100px" id="img1"/>
            <h3>VIASAT</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\vm ware.png" width="100px" height="100px" id="img1"/>
            <h3>VM WARE</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\west agile labs.jpg" width="100px" height="100px" id="img1"/>
            <h3>WEST AGILE LABS</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\zoho.jpeg" width="100px" height="100px" id="img1"/>
            <h3>ZOHO</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="C:\Users\sravani janardhan\Desktop\hospital website\image\infytq.png" width="100px" height="100px" id="img1"/>
            <h3>INFYTQ</h3>
            <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>


    </div>

</section>
-->


<div>
<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

       

       <div class="content" style="">
            <h3 style="text-align: center;">we provide a path to your successful life</h3>
            
            <div style="text-align: center;"><a href="About Us.html" target="_blank" class="btn">about<span class="fas fa-chevron-right"></span> </a></div>
        </div>

    </div>

</section>
</div>



<!--<section class="book" id="book">

    <h1 class="heading"> <span>Enroll</span> now </h1>    

    <div class="row">

        

        <form action="">
            <h3>LOGIN</h3>
            <input type="text" placeholder="your name" class="box">
            <input type="number" placeholder="your number" class="box">
            <input type="email" placeholder="your email" class="box">
            <input type="date" class="box">
            <input type="submit" value="login" class="btn">
        </form>

    </div>

</section>-->



<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="About Us.html"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> review </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> blogs </a>
        </div>


        <div class="box">
            <h3>contact info</h3>
            <a href="mailto:chaitu22902@gmail.com"> <i class="fas fa-envelope"></i> chaitu22902@gmail.com </a>
            <a href="mailto:sravanisidapana@gmail.com"> <i class="fas fa-envelope"></i> sravanisidapana@gmail.com </a>
            <a href="mailto:chennammagurram8@gmail.com"> <i class="fas fa-envelope"></i> chennammagurram8@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Andhra Pradesh, india - 521202 </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>

    <div class="credit"> created by <span>Chaitanya, Sravani & Chennamma</span> | All Rights Reserved </div>

</section>

<!-- footer section ends -->

<!--<script type = "text/javascript">
    function fun() {


       alert ("Do you want to login");
    }
</script>-->
</body>
</html>