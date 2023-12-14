<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>City Blog - Gallery</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!-- templatemo 309 city blog -->
<!-- 
City Blog Template 
http://www.templatemo.com/preview/templatemo_309_city_blog 
-->
<link href="{{ asset('templatemo_style.css') }}" rel="stylesheet">

<!--////// CHOOSE ONE OF THE 3 PIROBOX STYLES  \\\\\\\-->
<link href="{{ asset('css_pirobox/white/style.css') }}" media="screen" title="shadow" rel="stylesheet" type="text/css" />

<!--<link href="css_pirobox/white/style.css" media="screen" title="white" rel="stylesheet" type="text/css" />
<link href="css_pirobox/black/style.css" media="screen" title="black" rel="stylesheet" type="text/css" />-->
<!--////// END  \\\\\\\-->

<!--////// INCLUDE THE JS AND PIROBOX OPTION IN YOUR HEADER  \\\\\\\-->
<script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/piroBox.1_2.js') }}" type="text/javascript"></script>
<script>
$(document).ready(function() {
	$().piroBox({
			my_speed: 600, //animation speed
			bg_alpha: 0.5, //background opacity
			radius: 4, //caption rounded corner
			scrollImage : false, // true == image follows the page, false == image remains in the same open position
			pirobox_next : 'piro_next', // Nav buttons -> piro_next == inside piroBox , piro_next_out == outside piroBox
			pirobox_prev : 'piro_prev',// Nav buttons -> piro_prev == inside piroBox , piro_prev_out == outside piroBox
			close_all : '.piro_close',// add class .piro_overlay(with comma)if you want overlay click close piroBox
			slideShow : 'slideshow', // just delete slideshow between '' if you don't want it.
			slideSpeed : 4 //slideshow duration in seconds(3 to 6 Recommended)
	});
});
</script>
<!--////// END  \\\\\\\-->

</head>
<body>

<div id="templatemo_wrapper">

    @include('common.header')
    
    <div id="templatemo_main">
    	<div id="templatemo_content">
        
        	<h1>Web Design Gallery</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempus rutrum tellus at varius. Ut sit amet arcu elit, in posuere arcu. Phasellus in sapien vel felis imperdiet ullamcorper.</p>
                    
            <div class="cleaner h40"></div>
                
            <div id="gallery">
				<div class="gallery_box">
					<a href="images/gallery/image_01_b.jpg" class="pirobox gallery_img image_wrapper" title="Project 1"><img src="images/gallery/image_01.jpg" alt="" /></a>
                    <div class="right">
                    	<h5>Project 1</h5>
                        <p><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus egestas diam quis dapibus.</em></p>		
                        <p>Quisque sed mauris velit, a congue lorem. Aliquam quis mi sed libero dapibus iaculis a et mi. Egestas diam quis dapibus. Quisque sed mauris velit, a congue lorem. </p>
					</div>
                    <div class="cleaner"></div>
				</div>
                
                <div class="gallery_box">
					<a href="images/gallery/image_02_b.jpg" class="pirobox gallery_img image_wrapper" title="Project 1"><img src="images/gallery/image_02.jpg" alt="" /></a>
                    <div class="right">
                    	<h5>Project 2</h5>
                        <p><em>Cras id tortor nisl. Nullam ante diam, interdum sit amet. Velit justo sodales lectus, ac porta nunc eros vitae.</em></p>
                        <p>Maecenas eros ipsum, tincidunt vitae ultricies id, blandit quis nulla. Fusce sem nulla, rutrum ac suscipit eget, commodo vitae est. In at orci arcu.</p>
					</div>
                    <div class="cleaner"></div>
				</div>
                
                <div class="gallery_box last_gallery_box">
					<a href="images/gallery/image_03_b.jpg" class="pirobox gallery_img image_wrapper" title="Project 1"><img src="images/gallery/image_03.jpg" alt="" /></a>
                    <div class="right">
                    	<h5>Project 3</h5>
                        <p><em>Integer consectetur enim eget diam tincidunt vehicula. Cras id tortor nisl. Nullam ante diam, interdum sit amet</em>.</p>
                          <p>Sodales nec, mollis lobortis sapien. Vestibulum pharetra tortor vitae velit pretium rhoncus integer consectetur enim eget.</p>
					</div>
                    <div class="cleaner"></div>
				</div>
            </div> <!-- end of gallery -->
        
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