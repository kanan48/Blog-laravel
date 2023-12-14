<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>City Blog - Contact Form</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!-- templatemo 309 city blog -->
<!-- 
City Blog Template 
http://www.templatemo.com/preview/templatemo_309_city_blog 
-->
<link href="{{ asset('css/svwp_style.css') }}" rel="stylesheet">

<link href="{{ asset('templatemo_style.css') }}" rel="stylesheet">
<script src="{{ asset('js/jquery-1.3.2.min.js') }}"></script>
<script src="{{ asset('js/jquery.slideViewerPro.1.0.js') }}"></script>

<!-- Optional plugins  -->
<script src="{{ asset('js/jquery.timers.js') }}"></script>
</head>
<body>

<div id="templatemo_wrapper">

    @include('common.header')
    
    <div id="templatemo_main">
    	<div id="templatemo_content">
        
        	<h1>Contact Us</h1>
            <p>In ac libero urna. Suspendisse sed odio ut mi auctor blandit. Duis luctus nulla metus, a vulputate mauris. Integer sed nisi sapien, ut gravida mauris. Nam et tellus libero. Cras purus libero, dapibus nec rutrum in, dapibus nec risus. Ut interdum mi sit amet magna feugiat auctor.</p>
            <div class="cleaner h40"></div>
        
           
            <div id="contact_form">
            
					<h3>Our Location</h3>
                
					<h6>Mailing Address</h6>
                   	  	120-330 Vitae urna blandit est egestas, <br />
                        Pulvinar sit amet convallis eget, 12080<br />
						Lorem ipsum dolor<br /><br />           		
                     	Tel: 020-060-6600<br />
                        Fax: 020-030-7990<br />
						
					<div class="cleaner h40"></div>
					
                    <h4>Quick Contact</h4>
                
                    <form method="post" name="contact" action="#">

                        <label for="author">Name:</label> <input type="text" id="author" name="author" class="required input_field" />
                        <div class="cleaner_h10"></div>
                        
                        <label for="email">Email:</label> <input type="text" id="email" name="email" class="validate-email required input_field" />
                        <div class="cleaner_h10"></div>
                        
                        <label for="phone">Phone:</label> <input type="text" name="phone" id="phone" class="input_field" />
                        <div class="cleaner_h10"></div>
                        
                        <label for="text">Message:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                        <div class="cleaner_h10"></div>
                    
						<div class="cleaner_h10"></div>
					
                    	<input type="submit" class="submit_btn" name="submit" id="submit" value="Send" />
                    	<input type="reset" class="submit_btn" name="reset" id="reset" value="Reset" />
                    
                    </form>

            </div>
            <div class="cleaner"></div>	
			        
        </div> <!-- end of content -->
        
        @include('common.sidebar')
    
    	<div class="cleaner"></div>
    </div> <!-- end of main -->

</div> <!-- end of wrapper -->

<div id="templatemo_footer_wrapper">
	<div id="templatemo_footer">
		<a href="index.html" class="current">Home</a> | <a href="about.html">About Us</a> | <a href="gallery.html">Gallery</a> | <a href="contact.html">Contact Us</a>       
        <div class="cleaner h10"></div>	    	
        Copyright © 2048 <a href="#">Your Company Name</a>
    	<div class="cleaner"></div>		
    </div>
</div>

</body>
</html>