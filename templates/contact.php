<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DJ</title>
<link type="text/css" href="css/style.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.css"/>
<script type="text/javascript" src="js/jquery-1.8.2.js"></script>
<script type="text/javascript" src="js/dj.js"></script>

</head>

<body>

<header>
    <nav id="top-nav">
    	<ul>
            <li><a href='index.php' >Home</a></li>
            <li><a href='party.php' >Parties</a></li>
            <li><a href='contact.php' >Contact</a></li>
            <li><a href='about.php' >About</a></li>
            <li><a href='reserve.php' >Reservation</a></li>
            <li><a href='Testimonials.php' >Testimonials</a></li>
        </ul>
    </nav>
    <div id="logo">
    	
    </div>
        
</header>




<section id="content">
<div class="information">
<div class="map">
<h3><i class="fa fa-map-marker fa-2x"></i>How to find us</h3>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:300px;width:500px;"><div id="gmap_canvas" style="height:2700px;width:100%;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="" id="get-map-data"></a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:13,center:new google.maps.LatLng(48.866264,2.3236080000000356),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(48.866264, 2.3236080000000356)});infowindow = new google.maps.InfoWindow({content:"<b>DJ show</b><br/>Rue de rivoli<br/> Paris" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});}google.maps.event.addDomListener(window, 'load', init_map);</script>
</div>
<div class="contact-info">
<h3>The Company Name Inc.</h3>
<p>
8901 Marmora Road,
Glasgow, D04 89GR.
    Freephone: +1 800 559 6580
    Telephone: +1 959 603 6035
    FAX: +1 800 889 9898 
    E-mail: mail@demolink.org
</p>
<p>
9863 - 9867 Mill Road,
Cambridge, MG09 99HT.
    Freephone: +1 800 559 6580
    Telephone: +1 959 603 6035
    FAX: +1 800 889 9898 
    E-mail: mail@demolin
</p>
</div>
</div>
<div class="clear"></div>
<div class="contact">
<h2><i class="fa fa-pencil-square-o  fa-3x base"></i>contact us </h2>
<p>
Contact us by filling out the below form or calling 866-342-9794.</p> 
<div class="contact_form">
  <form  method="post" >
    
  <div class="label"> username :</div><input name="username" type="text" class="txt2"  />
   <br>
   <div class="label">phone:</div> <input name="phone" type="text" class="txt2" />
    <br>
   <div class="label">Email:</div><input name="email" type="text" class="txt2"  />
    <br>
   <div class="label">Confirm Email :</div><input name="confirm" type="text" class="txt2"  />
    <br>
   <div class="label">Title:</div><input name="subj" type="text" class="txt2"  />
    <br>
   <div class="label">your meessage:</div><textarea name="cont" class="area" class="txt2" ></textarea>
    <br>
   <div class="options">
   <input name="send" type="submit" class="save" value="send" />
        </div>
        <br>
        </form>
        <br>
</div>
</div><!------ends contact-------->

<div class="clear"></div>

</section><!--- content ends--->

<div class="clear"></div>

<footer>

<div class="btm-foot">
<div class="left"> © 2015 Privacy Policy</div>
<div class="right"> Designed with  <i class="fa fa-heart"></i>  By Ohood</div>
</div>
</footer>


</body>
</html>