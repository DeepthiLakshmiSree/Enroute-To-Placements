<?php  

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETP | Companies</title>
    <link rel="icon" type="image/png" href="image\logo1.png" style="height: 200px">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="CSS/stylenew.css">
    <style>
        /* Center the loader */
        #loader {
          position: absolute;
          left: 50%;
          top: 50%;
          z-index: 1;
          width: 120px;
          height: 120px;
          margin: -76px 0 0 -76px;
          border: 16px solid #f3f3f3;
          border-radius: 50%;
          border-top: 16px solid #3498db;
          -webkit-animation: spin 2s linear infinite;
          animation: spin 2s linear infinite;
        }
        
        @-webkit-keyframes spin {
          0% { -webkit-transform: rotate(0deg); }
          100% { -webkit-transform: rotate(360deg); }
        }
        
        @keyframes spin {
          0% { transform: rotate(0deg); }
          100% { transform: rotate(360deg); }
        }
        
        /* Add animation to "page content" */
        .animate-bottom {
          position: relative;
          -webkit-animation-name: animatebottom;
          -webkit-animation-duration: 1s;
          animation-name: animatebottom;
          animation-duration: 1s
        }
        
        @-webkit-keyframes animatebottom {
          from { bottom:-100px; opacity:0 } 
          to { bottom:0px; opacity:1 }
        }
        
        @keyframes animatebottom { 
          from{ bottom:-100px; opacity:0 } 
          to{ bottom:0; opacity:1 }
        }
        
        #myDiv {
          display: none;
          text-align: center;
        }
        </style>

</head>
<!-- header section starts  -->
<body onload="myFunction()" style="margin:0;">

    <div id="loader"></div>
    
    <div style="display:none;" id="myDiv" class="animate-bottom">

   <header class="header">
    <img src="image\logo1.png" class="logo-img" />
    <h1 class="title"><i class="logo">Enroute to placements</i></h1>
     <br>
     <span style="padding-left:200px;padding-right: 150px;">
     <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
     </span>
    <nav class="navbar">
        <a href="#home" class="space1">home</a>
        <a href="About Us.html" class="space1" href="About Us.html">about</a>
        <a href="#review" class="space1">review</a>
        <a href="#blogs" class="space1">blogs</a>
        <a href="logout.php" class="space1">Logout</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>
<br>
<br>
<br>
<br>
<br>
<br>

<section class="services" id="services">

    <h1 class="heading"><span>COMPANIES</span> </h1>

    <div class="box-container">

        <div class="box">
            <a class="imagescom" href="#"><img src="image\tcs.jpg" width="100px" height="100px" id="img1"/></a>
            <h3>TCS</h3>
            <a href="TCS.html" target="_blank" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <a href="#" class="imagescom"></a><img src="image\wipro.png" width="100px" height="100px" id="img1"/>
            <h3>WIPRO</h3>
            <a href="Wipro.html" target="_blank" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <a href="#" class="imagescom"></a><img src="image\capgemini.png" width="100px" height="100px" id="img1"/>
            <h3>CAPGEMINI</h3>
            <a href="Capgemini.html" class="btn" target="_blank"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <a href="#" class="imagescom"><img src="image\infosys.svg" width="100px" height="100px" id="img1" />
            <h3>INFOSYS</h3>
            <a href="Infosys.html" class="btn" target="_blank"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
          <a href="#" class="imagescom"><img src="image\zenq.jpg" width="100px" height="100px" id="img1" />
          <h3>ZenQ</h3>
          <a href="ZenQ.html" class="btn" target="_blank"> ABOUT <span class="fas fa-chevron-right"></span> </a>
       </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="image\microsoft.png" width="100px" height="100px" id="img1" />
            <h3>MICROSOFT</h3>
            <a href="Microsoft.html" class="btn" target="_blank">ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="image\google.png" width="100px" height="100px" id="img1"/>
            <h3>GOOGLE</h3>
            <a href="Google.html" class="btn" target="_blank"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <a href="#" class="imagescom"></a><img src="image\apple.png" width="100px" height="100px" id="img1"/>
            <h3>APPLE</h3>
            <a href="Apple.html" class="btn" target="_blank"> ABOUT <span class="fas fa-chevron-right"></span> </a>
        </div>
    </a></div></a></div></div></section>
    <details>
        <summary class="btn" style="margin-left: 33%;">More...</summary>
        <section class="services" id="services">
            <div class="box-container">
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\hp.png" width="100px" height="100px" id="img1"/>
                <h3>HP</h3>
                <a href="Hp.html" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\Accenture.png" width="100px" height="100px" id="img1"/>
                <h3>ACCENTURE</h3>
                <a href="Accenture.html" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\Amazon.JPg" width="100px" height="100px" id="img1"/>
                <h3>AMAZON</h3>
                <a href="Amazon.html" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\Flipkart.png" width="100px" height="100px" id="img1"/>
                <h3>FLIPkART</h3>
                <a href="Flipkart.html" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\Dell.png" width="100px" height="100px" id="img1"/>
                <h3>DELL</h3>
                <a href="Dell.html" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\HCL.png" width="100px" height="100px" id="img1"/>
                <h3>HCL</h3>
                <a href="Hcl.html" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\tech mahindra.webp" width="100px" height="100px" id="img1"/>
                <h3>TECH MAHINDRA</h3>
                <a href="Techmahindra.html" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\cisco.jpg" width="100px" height="100px" id="img1"/>
                <h3>CISCO</h3>
                <a href="Cisco.html" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\Deloitte.png" width="100px" height="100px" id="img1"/>
                <h3>Deloitte</h3>
                <a href="Deloitte.html" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\Absolute.png" width="100px" height="100px" id="img1"/>
                <h3>Absolute</h3>
                <a href="Absolute.html" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\adobe.png" width="100px" height="100px" id="img1"/>
                <h3>ADOBE</h3>
                <a href="Adobe.html" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\asian paints.jpg" width="100px" height="100px" id="img1"/>
                <h3>ASIAN PAINTS</h3>
                <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\autodesk.jpg" width="100px" height="100px" id="img1"/>
                <h3>AUTODESK</h3>
                <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\Cadence.png" width="100px" height="100px" id="img1"/>
                <h3>CADENCE</h3>
                <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\Celestica.png" width="100px" height="100px" id="img1"/>
                <h3>CELESTICA</h3>
                <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\Clarivate.png" width="100px" height="100px" id="img1"/>
                <h3>CLARIVATE</h3>
                <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\cloudflare.png" width="100px" height="100px" id="img1"/>
                <h3>CLOUDFLARE</h3>
                <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\code42.png" width="100px" height="100px" id="img1"/>
                <h3>CODE42</h3>
                <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\cvent.gif" width="100px" height="100px" id="img1"/>
                <h3>CVENT</h3>
                <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\Cyient.jpg" width="100px" height="100px" id="img1"/>
                <h3>CYIENT</h3>
                <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\dropbox.png" width="100px" height="100px" id="img1"/>
                <h3>DROPBOX</h3>
                <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\DXC.png" width="100px" height="100px" id="img1"/>
                <h3>DXC TECHNOLOGIES</h3>
                <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\Facebook.png" width="100px" height="100px" id="img1"/>
                <h3>FACEBOOK</h3>
                <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\first meridian.png" width="100px" height="100px" id="img1"/>
                <h3>FIRST MERIDIAN</h3>
                <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\fresh works.png" width="100px" height="100px" id="img1"/>
                <h3>FRESHWORKS</h3>
                <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\Gainsight.png" width="100px" height="100px" id="img1"/>
                <h3>GAINSIGHT</h3>
                <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\genpact.png" width="100px" height="100px" id="img1"/>
                <h3>GENPACT</h3>
                <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\globant.jpg" width="100px" height="100px" id="img1"/>
                <h3>GLOBANT</h3>
                <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\grammarly.png" width="100px" height="100px" id="img1"/>
                <h3>GRAMMARLY</h3>
                <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\hexaware.png" width="100px" height="100px" id="img1"/>
                <h3>HEXAWARE</h3>
                <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\IFS.png" width="100px" height="100px" id="img1"/>
                <h3>IFS</h3>
                <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\infytq.png" width="100px" height="100px" id="img1"/>
                <h3>INFYTQ</h3>
                <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\intel.png" width="100px" height="100px" id="img1"/>
                <h3>INTEL</h3>
                <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\l & t infotech.jpg" width="100px" height="100px" id="img1"/>
                <h3>L&T INFOTECH</h3>
                <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\legato.png" width="100px" height="100px" id="img1"/>
                <h3>LEGATO</h3>
                <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\microns.png" width="100px" height="100px" id="img1"/>
                <h3>MICRONS</h3>
                <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\mindtree.jpg" width="100px" height="100px" id="img1"/>
                <h3>MINDTREE</h3>
                <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\mountblue.png" width="100px" height="100px" id="img1"/>
                <h3>MOUNTBLUE</h3>
                <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\mphasis.png" width="100px" height="100px" id="img1"/>
                <h3>MPHASIS</h3>
                <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\nintex.png" width="100px" height="100px" id="img1"/>
                <h3>NINTEX</h3>
                <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\pax8.jpg" width="100px" height="100px" id="img1"/>
                <h3>PAX8</h3>
                <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\prompt cloud.png" width="100px" height="100px" id="img1"/>
                <h3>PROMPT CLOUD</h3>
                <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\revature.png" width="100px" height="100px" id="img1"/>
                <h3>REVATURE</h3>
                <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\salesforce.png" width="100px" height="100px" id="img1"/>
                <h3>SALESFORCE</h3>
                <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\secure works.png" width="100px" height="100px" id="img1"/>
                <h3>SECUREWORKS</h3>
                <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\sendinblue.png" width="100px" height="100px" id="img1"/>
                <h3>SENDINBLUE</h3>
                <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\ServiceNow.png" width="100px" height="100px" id="img1"/>
                <h3>SERVICENOW</h3>
                <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\shopify.png" width="100px" height="100px" id="img1"/>
                <h3>SHOPIFY</h3>
                <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\siemens.png" width="100px" height="100px" id="img1"/>
                <h3>SIEMENS</h3>
                <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\Synchrony.png" width="100px" height="100px" id="img1"/>
                <h3>SYNCHRONY</h3>
                <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\talend.png" width="100px" height="100px" id="img1"/>
                <h3>TALEND</h3>
                <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\Tata-Elxsi.jpg" width="100px" height="100px" id="img1"/>
                <h3>TATA-ELXSI</h3>
                <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\Thinkitive.png" width="100px" height="100px" id="img1"/>
                <h3>THINKITIVE</h3>
                <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\uber.webp" width="100px" height="100px" id="img1"/>
                <h3>UBER</h3>
                <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\value creed.jpg" width="100px" height="100px" id="img1"/>
                <h3>VALUECREED</h3>
                <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\Viasat.png" width="100px" height="100px" id="img1"/>
                <h3>VIASAT</h3>
                <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\vm ware.png" width="100px" height="100px" id="img1"/>
                <h3>VM WARE</h3>
                <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <a href="#" class="imagescom"></a><img src="image\zoho.jpeg" width="100px" height="100px" id="img1"/>
                <h3>ZOHO</h3>
                <a href="#" class="btn"> ABOUT <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
</details>
<script>
    var myVar;
    
    function myFunction() {
      myVar = setTimeout(showPage, 1500);
    }
    
    function showPage() {
      document.getElementById("loader").style.display = "none";
      document.getElementById("myDiv").style.display = "block";
    }
    </script>


