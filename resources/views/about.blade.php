<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>City Blog - about</title>
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
    {{-- <div id="templatemo_header">
        <div id="site_title">
            <a href="#">
                <img src="images/templatemo_logo.png" alt="City Blog Template" />
                <span>PUNJAB</span>
            </a>
        </div> <!-- end of site_title -->
    </div><!-- end of templatemo_header -->

	<div id="templatemo_menu">
        <ul>
            <li><a href="{{ route('home') }}">Home<span>Currency & Clothings</span></a></li>
            <li><a href="{{ route('about') }}" class="current">About Us<span>City Blog space</span></a></li>
            <li><a href="{{ route('blog') }}">Your Blogs<span>write Blogs here</span></a></li>
            <li><a href="{{ route('gallery') }}">Gallery<span>for updates</span></a></li>
            <li><a href="{{ route('contact') }}">Contact Us<span>for more information</span></a></li>
        </ul>    	
    </div> <!-- end of templatemo_menu --> --}}
    
    <div id="templatemo_main">
    	<div id="templatemo_content">
        
        	<div class="content_box">
                <h1>About Us</h1>
                <div class="image_wrapper image_fl"><img src="images/templatemo_image_01.jpg" alt="image" /></div>
                <p><em>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent aliquam velit a magna sodales quis elementum ipsum auctor.</em></p>
              <p>In ac libero urna. Suspendisse sed odio ut mi auctor blandit. Duis luctus nulla metus, a vulputate mauris. Integer sed nisi sapien, ut gravida mauris. Nam et tellus libero. Cras purus libero, dapibus nec rutrum in, dapibus nec risus. Ut interdum mi sit amet magna feugiat auctor. Fusce venenatis consequat lacinia. Vivamus elit erat, tincidunt eget scelerisque vitae, aliquet non purus.</p>
                
                <div class="cleaner_h20"></div>
                <a href="#" class="more float_r">Read more</a>
                <div class="cleaner"></div>
            </div>
            
            <div class="last_content_box">
            	<h2>Services</h2>
				<p>In ac libero urna. Suspendisse sed odio ut mi auctor blandit. Duis luctus nulla metus, a vulputate mauris. Integer sed nisi sapien, ut gravida mauris. Nam et tellus libero. Cras purus libero, dapibus nec rutrum in, dapibus nec risus. Ut interdum mi sit amet magna feugiat auctor. </p>
                <div class="cleaner h40"></div>
                
                <div class="service_box">
                    
                    <img src="images/onebit_15.png" alt="service 1" />
                    <div class="sb_right">
                        <h4>Marketing</h4>
                        <p>Credit goes to <a href="http://www.icojoy.com/articles/46/" target="_blank">Icojoy.com</a> for icons. Morbi sed nulla ac est cursus suscipit. Nullam consectetur posuere porta. Aliquam laoreet, libero ac placerat  tempor.</p>
                    
                        <ul class="tmo_list">
                            <li>Vestibulum pretium convallis diam sit amet </li>
                            <li>Donec consequat, lacus eget accumsan volutpat</li>
                            <li>Fusce sem nulla, rutrum ac suscipit eget vitae</li>
                           
                        </ul>
                    </div>
                    <div class="cleaner"></div>
                    <a href="#" class="more float_r">Read more</a>
                    <div class="cleaner"></div>
                </div>
                
                <div class="service_box">
            	
                <img src="images/onebit_16.png" alt="service 2" />
                <div class="sb_right">
                	<h4>Advertising</h4>
                    <p>Integer consectetur enim eget diam tincidunt vehicula. Aenean scelerisque tellus vitae tortor placerat egestas.</p>
                
                    <ul class="tmo_list">
                        <li>Praesent lacus metus, aliquet sit </li>
                        <li>Nunc eget turpis mattis nisi auctor</li>
                        <li>Vestibulum pharetra tortor vitae velit </li>
                       
                    </ul>
                </div>
                <div class="cleaner"></div>
                <a href="#" class="more float_r">Read more</a>
                <div class="cleaner"></div>
            </div>
                
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