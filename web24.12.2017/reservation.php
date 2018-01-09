<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Vintage Bootstarp Website Template | Reservation :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/nav.css" rel="stylesheet" type="text/css" media="all"/>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300:700' rel='stylesheet' type='text/css'>
<script src="js/jquery.min.js" type="text/javascript"></script>
<script>
		$(function() {
	    var button = $('#loginButton');
	    var box = $('#loginBox');
	    var form = $('#loginForm');
	    button.removeAttr('href');
	    button.mouseup(function(login) {
	        box.toggle();
	        button.toggleClass('active');
	    });
	    form.mouseup(function() { 
	        return false;
	    });
	    $(this).mouseup(function(login) {
	        if(!($(login.target).parent('#loginButton').length > 0)) {
	            button.removeClass('active');
	            box.hide();
	        }
	    });
	});
   </script>
   <!----font-Awesome----->
<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
<!---strat-date-piker---->
<link rel="stylesheet" href="css/jquery-ui.css" />
<script src="js/jquery-ui.js"></script>
		  <script>
				  $(function() {
				    $( "#datepicker,#datepicker1" ).datepicker();
				  });
		  </script>
<!---/End-date-piker---->
</head>
<body>
   <!-- Header -->
	<div class="header">    
		<div class="header_top">
			<div class="container">
	
		    <div class="header-top-right">
		  
			 </div>
			 <div class="clearfix"></div>
            </div>
		  </div>
 	    <div class="header_bottom">
		 	  <div class="container">	 			
				<?php
				include 'logo.php';
				
				
				 include 'navigation.php';
				
				
				?>
             
             
             
                        
    
				
	   </div>
       <div class="clearfix"></div>		   
      </div>
     </div>	
	 <div class="reservation_banner">
		<div class="main_title">Online Reservation Form</div>
		<div class="divider"></div>
	 </div>
	</div>
   <!-- Ends Header -->
    <!------------ Start Content ---------------->
       <div class="main"> 
         <div class="reservation_top">     	
           <div class="container">    
              <h2 class="head">General Information</h2>
              <div class="reservation_grid"> 
                <div class="span2_of_1">
	 		    	<h4>Select check-in date</h4>
					<div class="book_date btm">
						<form>
							<input class="date" id="datepicker1" type="text" value="DD/MM/YY" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'DD/MM/YY';}">
						</form>
					</div>	
					<div class="sel_room">
						<h4>number of rooms</h4>
						<select id="country" onchange="change_country(this.value)" class="frm-field required">
							<option value="null">Select a type of Room</option>
				            <option value="null">Suite room</option>         
				            <option value="AX">Single room</option>
							<option value="AX">Double room</option>
		        		</select>
					</div>	
					<div class="sel_room left">
						<h4>adults per room:</h4>
						<select id="country" onchange="change_country(this.value)" class="frm-field required">
							<option value="null">1</option>
				            <option value="null">2</option>         
				            <option value="AX">3</option>
							<option value="AX">4</option>
		        		</select>
					</div>	
				 </div>
				 <div class="span2_of_1">
					<h4>Select check-out date</h4>
					<div class="book_date btm">
						<form>
							<input class="date" id="datepicker1" type="text" value="DD/MM/YY" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'DD/MM/YY';}">
						</form>
					</div>	
					<div class="sel_room">
						<h4>childern 0-5:</h4>
						<select id="country" onchange="change_country(this.value)" class="frm-field required">
							<option value="null">0</option>
							<option value="null">1</option>
				            <option value="null">2</option>         
				            <option value="AX">3</option>
							<option value="AX">4</option>
		        		</select>
					</div>	
					<div class="sel_room left">
						<h4>childern 6-12:</h4>
						<select id="country" onchange="change_country(this.value)" class="frm-field required">
							<option value="null">0</option>
							<option value="null">1</option>
				            <option value="null">2</option>         
				            <option value="AX">3</option>
							<option value="AX">4</option>
		        		</select>
					</div>	
					
				 </div>
				 <div class="clearfix"></div>
			</div>
		   <div class="personal_bottom">
		   	 <h2 class="head">Personal Information</h2>
			<div class="reservation-form">
			 <div class="span2_of_1">
			    <div>
				  <span><label>Name</label></span>
				  <input type="text" class="textbox" value="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'name';}">
				</div>
                <div>
				  <span><label>Surname</label></span>
				  <input type="text" class="textbox" value="holder name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'holder name';}">
				</div>
				 <div>
				  <span><label>Credit Card Number</label></span>
				  <input type="text" class="textbox" value="credit card number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'credit card number';}">
				</div>
                <div>
				  <span><label>Credit Card Holder</label></span>
				  <input type="text" class="textbox" value="holder name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'holder name';}">
				</div>
			 </div>
             <div class="span2_of_1">
                <div>
				  <span><label>Email</label></span>
				  <input type="text" class="textbox" value="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'email';}">
				</div>
                <div>
				  <span><label>Phone</label></span>
				  <input type="text" class="textbox" value="phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'phone';}">
				</div>
				<div>
				  <span><label>Cvv2 Code</label></span>
				  <input type="text" class="textbox" value="cvv2 code" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Cvv2 Code';}">
				</div>
                <div>
				  <span><label>Additional</label></span>
				  <textarea value="Message" onfocus="this.value= '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
				</div>
			 </div>
              <div class"clearfix"></div>
              <a href="#" title="book now" class="btn btn-primary btn1 btn-normal btn-inline " target="_self">Book Now</a>
            </div>
           </div>
           </div>
        </div>
        <div class="footer">
         <div class="container">   	 
           	 <div class="footer_top">
           	 	<div class="row">
           	 	   <div class="col-md-4 footer_grid">
           	 			<h4>Receive our Newsletter</h4>
           	 			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
           	 			<div class="search">
						  <form>
							   <input type="text" value="">
							   <input type="submit" value="">
						  </form>
					    </div>
           	 		</div>
           	 		<div class="col-md-4 footer_grid">
           	 			<h4>Twitter Feed</h4>
           	 			<div class="footer-list">
						 <ul>
							<li class="list_top"><i class="fa fa-twitter twt"></i>
							<p>Lorem ipsum <span class="yellow"><a href="#">consectetuer</a></span>vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatu</li></p>
							<li><i class="fa fa-twitter twt"></i>
							<p>Lorem ipsum <span class="yellow"><a href="#">consectetuer</a></span>vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatu</li></p>
		                 </ul>
					    </div>
           	 		</div>
           	 		<div class="col-md-4 footer_grid">
           	 			<h4>Our Address</h4>
           	 			<div class="company_address">
				     	        <p>500 Lorem Ipsum Dolor Sit,</p>
						   		<p>22-56-2-9 Sit Amet, Lorem,</p>
						   		<p>USA</p>
				   		<p>Phone:(00) 222 666 444</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <span><a href="mailto:info@mycompany.com">info(at)mycompany.com</a></span></p>
				   		</div>
				      <ul class="socials">
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      </ul>
           	 		</div>
           	     </div>
           	  </div>
                <div class="footer_bottom">
		           <div class="copy_right">
						<p>&copy; 2013 All Rights Reseverd Designed by <a href="http://w3layouts.com/">W3layouts</a> </p>
				   </div>
				   <div class="footer_nav">
				   	 <ul>
				   	 	<li><a href="index.php">Home</a></li>
				   	 	<li><a href="#">Terms of use</a></li>
				   	 	<li><a href="#">Privacy Policy</a></li>
				   	 	<li><a href="contact.html">Contact</a></li>
				   	 </ul>
				    </div>
				  <div class="clearfix"></div>
				</div>
		   </div>
	</div>
</body>
</html>

