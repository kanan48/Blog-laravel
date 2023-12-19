<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>City Blog - Home</title>
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
        
        	<div id="templatemo_slider">
                <div id="featuredslideshow">
                    <ul> 
                        <li><img width="580" height="300" alt="Culture" src="images/slideshow/1.jpeg" /></li> 
                        <li><img width="580" height="300" alt="Farms" src="images/slideshow/2.jpeg" /></li> 
                        <li><img width="580" height="300" alt="Festivals & Fairs" src="images/slideshow/3.jpeg" /></li> 
                        <li><img width="580" height="300" alt="Religious places" src="images/slideshow/4.jpeg" /></li> 
                        <li><img width="580" height="300" alt="Nature" src="images/slideshow/5.jpeg" /></li> 
                        <!-- eccetera --> 
                    </ul> 
                </div>
                <script type="text/javascript">
                     $("div#featuredslideshow").slideViewerPro({ 
                    thumbs: 4,  
                    thumbsPercentReduction: 15, 
                    galBorderWidth: 0, 
                    galBorderColor: "#666", 
                    thumbsTopMargin: 10, 
                    thumbsRightMargin: 10, 
                    thumbsBorderWidth: 1, 
                    thumbsActiveBorderColor: "#000", 
                    thumbsActiveBorderOpacity: 0.8, 
                    thumbsBorderOpacity: 0, 
                    buttonsTextColor: "#707070", 
                    autoslide: true,  
                    typo: true 
                    });  	
                </script>
            </div>
            
            <div class="post_box">
        		<img src="images/slideshow/1.jpeg" alt="image" />
                <div class="post_box_right">               
					<h2>Culture</h2>
				  <div class="post_meta"><strong>Date:{{\Carbon\Carbon::now()->format('jS F Y')}}</strong>{{--for date format--}} | <strong>Author:</strong> Steve</div>
                    <p><a href="#">templatemo.com</a> provides a lot of high quality free css templates for your personal or commercial websites. Credits go to <a rel="nofollow" href="http://www.photovaco.com">PhotoVaco</a> for photos, <a rel="nofollow" href="http://www.brusheezy.com/brushes/1639-Urban">Rawox</a> for brush and <a rel="nofollow" href="http://www.gcmingati.net/wordpress/wp-content/lab/jquery/svwt/">slideViewerPro</a> for image slider.</p>
                   <div class="category">Category: <a href="#">Freebies</a>, <a href="#">Templates</a> | <a href="blog_post.html">244 comments</a></div>
    			</div>
                <div class="cleaner"></div>
            </div>
            
           	<div class="post_box post_box_last">
            
            	<img src="images/slideshow/2.jpeg" alt="image" />
                
                <div class="post_box_right">
	                <h2>Nature</h2>
				  <div class="post_meta"><strong>Date:{{\Carbon\Carbon::now()->format('jS F Y')}}</strong>{{--for date format--}} | <strong>Author:</strong> David</div>
                	<p>Mauris cursus, est at pretium sollicitudin, nunc ligula iaculis quam,   pellentesque dapibus leo velit auctor dui. Vivamus non enim diam, at   rutrum lorem. Praesent ut lacus nulla, nec aliquam nunc. Nam at odio   tortor. Cras porta porta turpis, sed ornare quam adipiscing non. Mauris   sit amet ipsum enim. Mauris et elit eget risus congue malesuada aliquet   eget augue. Duis sit amet tortor libero. </p>
                    <div class="category">Category: <a href="#">Web Design</a>, <a href="#">Templates</a> | <a href="blog_post.html">128 comments</a></div>
                </div>
                <div class="cleaner"></div>
            </div>
        
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