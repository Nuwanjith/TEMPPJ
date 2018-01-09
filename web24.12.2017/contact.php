<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Vintage Bootstarp Website Template | Contact :: w3layouts</title>
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
</head>
<body>
   <!-- Header -->
	<div class="header">
	<?php
	include 'header.php';
	?>
<div class="header_bottom">
    <div class="container">	 			
		<?php
		include 'logo.php';
		?>			
			<div class="navigation">	
			<div>
              <label class="mobile_menu" for="mobile_menu">
              <span>Menu</span>
              </label>
              <input id="mobile_menu" type="checkbox">
				<?php
				include 'navigation.php';
				?>
		</div>			
	   </div>
       <div class="clearfix"</div>		   
    </div>
     </div>	
	 <div class="reservation_banner">
		<div class="main_title">Contact</div>
		<div class="divider"></div>
	 </div>
    </div>
   <!-- Ends Header -->
    <!------------ Start Content ---------------->
       <div class="main"> 
         <div class="reservation_top">
           <div class="container">
             <div class="row">
            	<div class="col-md-5">
            		<div class="contact_left">
            			<h3>Contact Info</h3>
            			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15844.887091019022!2d80.9835103!3d6.8640053!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x404255cbdd51b056!2sKirchhayn+Bungalow!5e0!3m2!1sen!2slk!4v1512408238030" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>"> </a></small>
						<address class="address">
                    <p>9870 St Vincent Place, <br>Glasgow, DC 45 Fr 45.</p>
                    <dl>
                        <dt></dt>
                        <dd>Freephone:<span> +1 800 254 2478</span></dd>
                        <dd>Telephone:<span> +1 800 547 5478</span></dd>
                        <dd>FAX: <span>+1 800 658 5784</span></dd>
                        <dd>E-mail:&nbsp; <a href="mailto@vintage.com">info(at)vintage.com</a></dd>
                    </dl>
                </address>
            		</div>
            	</div>
            	<div class="col-md-7 contact_right">
            		<h3>Contact Form</h3>
            		<div class="contact-form">
							<form method="post" action="contact-post.html">
								<input type="text" class="textbox" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
								<input type="text" class="textbox" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
								<textarea value="Message" onfocus="this.value= '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
								<input type="submit" value="Send">
								<div class="clearfix"></div>
							</form>
						</div>
            	</div>
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

