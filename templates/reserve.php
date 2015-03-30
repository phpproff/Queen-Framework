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

<div class="contact">
<h2>Reserve your Party</h2>
<p>
Reserve by filling out the below form or calling 866-342-9794.</p> 
<div class="reserve">
   
                                    
        <form  method="post" action="checkout.php">
        <select name="username" >
        <option>Enter the Party</option>
        <option>Birthday Party</option>
        <option>Graduation Party</option>
        <option>Engagment Party</option>
        <option>Wedding Party</option>
        <option>Party For Fun</option>
        </select>
        <input name="phone" type="text" class="txt2" placeholder="Enter Your Phone Number" />
        <input name="email" type="text" class="txt2" placeholder="Enter Your Email" />
        <input name="date" type="date" class="txt2" placeholder="Enter Your Party'date (mm-dd-yy)" />
        <input name="time" type="time" class="txt2" placeholder="Enter Your Party'time (--.--.--)" />
        <input name="guests" type="text" class="txt2" placeholder="Enter How Many Guests" />
		<input name="budget" type="text" class="txt2" placeholder="Enter your Budget" />
        <br>
       <div class="options">
                <input name="send" type="submit" class="save" value="Reserve" />

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