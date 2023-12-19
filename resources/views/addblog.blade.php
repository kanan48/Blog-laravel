<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>City Blog - Blog Post</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!-- templatemo 309 city blog -->
<!-- 
City Blog Template 
http://www.templatemo.com/preview/templatemo_309_city_blog 
-->
<link href="{{ asset('templatemo_style.css') }}" rel="stylesheet">

</head>
<body>

<div id="templatemo_wrapper">

    @include('common.header')
    
    <div id="templatemo_main">
    	<div id="templatemo_content">
        
            {{-- <div class="post_box">
            	<a href="#">Freebies</a>, <a href="#">Templates</a>
                <h2>Aliquam lorem ante dapibus in viverra </h2>
                
                <div class="post_meta"><strong>Date:</strong> May 18th, 2048 | <strong>Author:</strong> Henry Mike | <a href="blog_post.html">128 Comments</a></div>
                <img src="images/templatemo_image_01.jpg" alt="image" />
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus egestas diam quis dapibus. Quisque sed mauris velit, a congue lorem. Aliquam quis mi sed libero dapibus iaculis a et mi. Vestibulum posuere auctor orci et accumsan. Aliquam pellentesque dui eleifend velit eleifend et viverra nisi feugiat.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dictum ornare nulla ac laoreet. Phasellus mattis tellus eu risus consequat id hendrerit ipsum molestie. Morbi quis lorem tellus. Curabitur vitae risus sem. </p>
                <p>Mauris venenatis quam non nunc convallis tincidunt. Aliquam tempus neque nec nisl pellentesque nec dignissim lorem cursus. Integer cursus ultrices massa non vehicula. Etiam vitae lacus eu arcu rutrum fermentum. Nullam fringilla imperdiet magna, id sagittis nisl feugiat at. Donec eget lacus eros, et blandit odio. </p>
                <p>Maecenas elementum, purus vitae hendrerit dictum, magna dolor interdum lacus, sit amet lobortis urna ligula id lacus. Maecenas quis venenatis eros. Nulla sagittis elit in enim ullamcorper vitae tincidunt metus bibendum. Mauris pulvinar purus porta justo cursus eget ultricies lectus luctus. Quisque ut risus nibh. Etiam consequat elit eu nisi porta ac auctor nisl ultrices. Morbi consectetur laoreet augue vel varius. Nullam bibendum tempor est nec cursus. Vestibulum eget ligula et ipsum laoreet aliquam sed ut risus.</p>
		  </div> --}}
            
            <h2>Add Blog</h2>

                <div id="comment_form">
                    {{-- <h3>Leave your comment</h3> --}}
                    
                    <form action="#" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="form_row">
                            <label>Your Name (* required )</label><br />
                            <input type="text" name="name" />
                        </div>
                        
                        <div class="form_row">
                            <label>Select Category  (* required )</label><br />
                            <input type="text" name="cat" />
                        </div>
                        
                        <div class="form_row">
                            <label>Add image*</label><br />
                            <input type="file" name="image" />
                        </div>

                        <div class="form_row">
                            <label>Add Caption*</label><br />
                            <textarea  name="comment" rows="" cols=""></textarea>
                        </div>

                        <input type="submit" name="Submit" value="Submit" class="submit_btn" />
                    </form>
                    
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
