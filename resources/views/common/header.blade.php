<div id="templatemo_header">
    <div id="site_title">
        <a href="#">
            <img src="images/templatemo_logo.png" alt="City Blog Template" />
            <span>PUNJAB</span>
        </a>
    </div> <!-- end of site_title -->
</div><!-- end of templatemo_header -->

<div id="templatemo_menu">
    <ul>
        <li><a href="{{ route('home') }}">Home<span>Culture & Clothings</span></a></li>
        <li><a href="{{ route('blog') }}">Your Blogs<span>Blogs</span></a></li>
        <li><a href="{{ route('gallery') }}">Gallery<span>all blog</span></a></li>
        <li><a href="{{ route('contact') }}">Contact Us<span>for communication</span></a></li>
        <li><a href="{{ route('addblog') }}"><img width="20" height="20" alt="Nature" src="images/add.jpeg"/><span>add blog</span></a></li>
        @if (Auth::check())
            <a href="{{ route('loginuser') }}"><input type="button" value="Login" class="btn"/></a>
        @else            
            <a href="{{ route('logout') }}"><input type="button" value="Logout {{Auth::guard('signup')->user()->username}}" class="btn"/></a>
        @endif
    </ul>    	
</div> <!-- end of templatemo_menu -->